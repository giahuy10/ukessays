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
use App\Finance;
class AdminOrderController extends Controller
{
    public function index()
    {
        $items = Assignment::paginate(15);
        
        return view('admin.order.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.order.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $assignment = Assignment::create($request->except('_token'));
        return redirect()->route('order.index')->with('success', 'Item is stored');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $item = Assignment::findOrFail($id);
        return view('admin.order.edit',[
            "item"=> $item,
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

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        
        $assignment = Assignment::findOrFail($id);
       

        $assignment->name = $request->name;
        $assignment->catid = $request->catid;
        
        $urgency = Urgency::findOrFail($request->urgency);
        
        $assignment->deadline = date("Y-m-d H:i:s", strtotime($assignment->created_at." + ".$urgency->name));
        //$assignment->price = $request->price;
        $assignment->description = $request->description;
        //$assignment->status = 1;
        //$assignment->taken_by = 0;
        //$assignment->created_by = auth()->user()->id;
        //$assignment->paid = 0;
        $assignment->urgency = $request->urgency;
        $assignment->level = $request->level;
        $assignment->pages = $request->pages;
        $assignment->spacing = $request->spacing;
        $assignment->academic_level = $request->academic_level;
        $assignment->style = $request->style;
        $assignment->sources = $request->sources;
        $assignment->language_style = $request->language_style;
        $assignment->sent_review = $request->sent_review;
        $assignment->extras = json_encode($request->extra);
        $assignment->save();
       

        return redirect()->route('order.index')->with('success', 'Item is updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $assignment = Assignment::findOrFail($id);
        $assignment->delete();
        return redirect()->route('order.index')->with('success', 'Item is removed');
    }
    public function pay($id){
        $assignment = Assignment::findOrFail($id);
        $finance = new Finance();
        $finance->user_id = $assignment->taken_by;
        $finance->amount = 0.4 * $assignment->price;
        $finance->status = 1;
        $finance->note = "Pay writer";
        $finance->type= 3;
        $finance->itemid = $assignment->id;
        $finance->save();

        $assignment->pay_writer = 1;
        $assignment->save();
        return redirect()->route('finance.index')->with('success', 'Payment is created with id '.$finance->id);

    }
}
