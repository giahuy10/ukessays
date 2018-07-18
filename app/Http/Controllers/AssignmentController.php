<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Assignment;
use App\Category;
use App\Urgency;
use App\Level;
use App\Numpages;
use App\Extra;
use App\AcademicLevel;
use App\Style;
use App\Numresource;
use App\Language;
use Auth;
use App\Review;
use Event;
use App\Events\SendReview;
class AssignmentController extends Controller
{
    public function index()
    {
        
        $assignements = Assignment::where('status',1)->paginate(20);

        return view('assignment.index',["assignments"=> $assignements]);
    }
    public function api(Request $request){
        $assignements = Assignment::all();
        $items = $assignements->filter(function ($item) use ($request){
            return ($item->taken_by == $request->taken_by);
        });
       
        $items->all();
        $result = array();
        foreach ($items as $item) {
            $result[] = $item;
        }
        //return $result->toArray();


        return response()->json($result);
    }
    public function student(Request $request){
        $student_id = auth()->user()->id;
        $assignements = Assignment::where('created_by',$student_id)->where('status', $request->status)->paginate(20);

    }
    public function edit($id)
    {
        $assignement = NULL;
        if ($id) {
            $assignement = Assignment::findOrFail($id);
        }
        return view('assignment.edit',[
            "assignment"=> $assignement,
            "categories"=>Category::all(),
            "urgencies"=>Urgency::all(),
            "levels"=>Level::all(),
            "pages"=>Numpages::all(),
            "extras"=>Extra::all(),
            "academics"=>AcademicLevel::all(),
            "styles"=>Style::all(),
            "resources"=>Numresource::all(),
            "languages"=>Language::all(),
            ]);
        
    }
    public function show($id)
    {
        $assignment = Assignment::findOrFail($id);
        
        $this->authorize('view', $assignment);

        return view('assignment.show',["assignment"=> $assignment]);
    }
    public function store(Request $request)
    {
        $assignment = new Assignment;

        $assignment->name = $request->name;
        $assignment->catid = $request->catid;
        $assignment->deadline = $request->deadline;
        $assignment->price = $request->price;
        $assignment->description = $request->description;
        $assignment->status = 1;
        $assignment->taken_by = 0;
        $assignment->created_by = auth()->user()->id;
        $assignment->save();
        return view('assignment.show',["assignment"=> Assignment::findOrFail($assignment->id)]);
        
    }
    public function pick($id) {
        $this->authorize('pick', $assignment);

        $assignement = Assignment::find($id);
        $assignement->status = 2;
        $assignement->taken_by = auth()->user()->id;
        $assignement->save();
        //return view('assignment.show',["assignment"=> $assignement]);
        return redirect()->route('assignment.show', ['id' => $id]);

    }
    public function destroy()
    {
        
    }
    public function complete($id)
    {
        $this->authorize('complete', $assignment);

       $assignement= Assignment::findOrFail($id);
       $assignement->status = 5;
       $assignement->save();
       return redirect()->route('assignment.show', ['id' => $id])->with('success','Assignment is completed!');
    }
    public function revise($id)
    {
        $this->authorize('revise', $assignment);

        $assignement= Assignment::findOrFail($id);
        $assignement->status = 4;
        $assignement->save();
        return redirect()->route('assignment.show', ['id' => $id])->with('success','Assignment is in revision!');

    }
    public function review(Request $request)
    {

        $this->authorize('review', $assignment);

        $assignement= Assignment::findOrFail($request->id);
        $assignement->sent_review = 1;
        $assignement->save();
        $review = new Review();
        $review->assignment_id = $request->id;
        $review->rating = $request->rating;
        $review->from = Auth::user()->id;
        $review->to = $assignement->taken_by;
        $review->review = $request->review;
        $review->save();
        event(new SendReview($review->to));
        return redirect()->route('assignment.show', ['id' => $request->id])->with('success','Thanks for your review!');
    }
}
