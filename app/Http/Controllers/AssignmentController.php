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
use App\Code;
use App\Events\SendReview;
class AssignmentController extends Controller
{
    public function index()
    {
        
        $assignments = Assignment::where('status',1)->paginate(20);

        return view('assignment.index',["assignments"=> $assignments]);
    }
    public function api(Request $request){
        $assignments = Assignment::all();
        $items = $assignments->filter(function ($item) use ($request){
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
        $assignments = Assignment::where('created_by',$student_id)->where('status', $request->status)->paginate(20);

    }
    public function edit($id)
    {
        $assignment = NULL;
        if ($id) {
            $assignment = Assignment::findOrFail($id);
        }
        return view('assignment.edit',[
            "assignment"=> $assignment,
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
        //dd($assignment);
        //exit();
        $this->authorize('view', $assignment);

        return view('assignment.show',["assignment"=> $assignment]);
    }
    public function store(Request $request)
    {
        $assignment = new Assignment;

        $assignment->name = $request->name;
        $assignment->catid = $request->catid;
        $urgency = Urgency::findOrFail($request->urgency);

        $assignment->deadline = date("Y-m-d H:i:s", strtotime(" + ".$urgency->name));
        $assignment->price = $request->price;
        $assignment->description = $request->description;
        $assignment->status = 0;
        $assignment->taken_by = 0;
        $assignment->created_by = auth()->user()->id;
        $assignment->paid = 0;
        $assignment->urgency = $request->urgency;
        $assignment->level = $request->level;
        $assignment->pages = $request->pages;
        $assignment->spacing = $request->spacing;
        $assignment->academic_level = $request->academic_level;
        $assignment->style = $request->style;
        $assignment->sources = $request->sources;
        $assignment->language_style = $request->language_style;
        $assignment->sent_review = $request->sent_review;
        $assignment->coupon_id = $request->coupon_id;
        $assignment->code_id = $request->code_id;
        $assignment->coupon_code = $request->coupon_code;
        $assignment->discounted = $request->discounted;
        $assignment->total = $request->total;
        $assignment->extras = json_encode($request->extra);
        $assignment->save();

        if ($assignment->code_id) {
            $code = Code::find($assignment->code_id);
            $code->is_used = 1;
            $code->used_time = date("Y-m-d H:i:s");
            $code->used_order = $assignment->id;
            $code->used_customer = $assignment->created_by;
            $code->save();
            
        }
        return redirect()->route('assignment.show',['id'=>$assignment->id])->with('success','Order is created!');
        //return view('assignment.show',["assignment"=> Assignment::findOrFail($assignment->id)]);
        
    }
    public function pick($id) {
        $assignment = Assignment::find($id);
        $this->authorize('pick', $assignment);

        
        $assignment->status = 2;
        $assignment->taken_by = auth()->user()->id;
        $assignment->save();
        //return view('assignment.show',["assignment"=> $assignment]);
        return redirect()->route('assignment.show', ['id' => $id])->with('success','You got this job!!!');

    }
    public function destroy()
    {
        
    }
    public function finish($id)
    {
        $assignment= Assignment::findOrFail($id);

        $this->authorize('finished', $assignment);

       $assignment->status = 3;
       $assignment->save();
       return redirect()->route('assignment.show', ['id' => $id])->with('success','Assignment is finished!');
    }
    public function complete($id)
    {
        $assignment= Assignment::findOrFail($id);
        $this->authorize('complete', $assignment);

       
       $assignment->status = 5;
       $assignment->save();
       return redirect()->route('assignment.show', ['id' => $id])->with('success','Assignment is completed!');
    }
    public function revise($id)
    {
        $assignment= Assignment::findOrFail($id);
        $this->authorize('revise', $assignment);

        
        $assignment->status = 4;
        $assignment->save();
        return redirect()->route('assignment.show', ['id' => $id])->with('success','Assignment is in revision!');

    }
    public function review(Request $request)
    {
        $assignment= Assignment::findOrFail($request->id);

        $this->authorize('review', $assignment);

        $assignment->sent_review = 1;
        $assignment->save();
        $review = new Review();
        $review->assignment_id = $request->id;
        $review->rating = $request->rating;
        $review->from = Auth::user()->id;
        $review->to = $assignment->taken_by;
        $review->review = $request->review;
        $review->save();
        event(new SendReview($review->to));
        return redirect()->route('assignment.show', ['id' => $request->id])->with('success','Thanks for your review!');
    }
    public function order(Request $request)
    {
        $response = [];

        // Category name
        $category = Category::find($request->catid);
        $response['category_name'] = $category->name;
        // Price from Level
        $level = Level::find($request->level);
        $response['price'] = $level->string;
        $response['level_name'] = $level-> name;
        
        // Price from Urgency
        $urgency = Urgency::find($request->urgency);
        $response['price'] += $urgency->value;
        $response['urgency_name'] = $urgency->name;

        // Price from Academic
        $academicLevel = AcademicLevel::find($request->academic);
        $response['price'] += $academicLevel->price;
        $response['academic_name'] = $academicLevel->name;

        // Price from Spacing
        if ($request->spacing == 2) {
            $response['price'] *= 2;
            $response['spacing_name'] = "Single Spaced";
        }else {
            $response['spacing_name'] = "Double Spaced";
        }

        
        $response['total_price'] = $response['price']*$request->pages;

        // Add extra service
        $response['extra_name']= array();
        if ($request->extra) {
            foreach ($request->extra as $extra_id) {
                $extra = Extra::find($extra_id);
                $response['total_price']+= $extra->price;
                $response['extra_name'][] = $extra->name;
            }
        }
        if ($request->coupon != "") {
        // Check coupon
            $coupon = Code::where('code',$request->coupon)->first();
            $wrong = 0;
            if ($coupon) {
                if ($coupon->coupon->id) {

                    // Check available date
                    if (strtotime($coupon->coupon->available_date) > strtotime("now")) {
                        $response['coupon_error'] = "Coupon is not available now.";
                        $wrong =1;
                    }
                    // Check expire date
                    if (strtotime($coupon->coupon->expire_date) < strtotime("now")){
                        $response['coupon_error'] = "Coupon is expired.";
                        $wrong =1;
                    }

                    if ($coupon->code_type == 1) { // ONE CODE FOR EVERY USERS
                        $check_used = Assignment::where([
                            ['created_by', $request->user_id],
                            ['code_id',$coupon->id]
                        ])->first();
                        if ($check_used) { //  USER USED THIS COUPON
                            $response['coupon_error'] = "You only can use this coupon one time.";
                            $wrong = 1;
                        }
                    }else { // MULTI CODEs
                    if ($coupon->is_used == 1) {
                        $response['coupon_error'] = "Coupon is used before.";
                        $wrong = 1;
                    }
                    }
                }else {
                    $response['coupon_error'] = "Coupon is not available";
                    $wrong =1;
                }
                
            }else{
                // Not found
                $response['coupon_error'] = "Invaild Coupon code";
                $wrong =1;
            }

            if (!$wrong) {
                // Coupon is available
                $response['code_id'] = $coupon->id;
                $response['coupon_id'] = $coupon->coupon->id;
                $response['coupon_code'] = $coupon->code;
                $response['total_price_before_discount'] = $response['total_price'];
                if ($coupon->coupon->type == 1) {
                    // Discount by amount
                    $response['total_price'] -=  $coupon->coupon->amount;
                    $response['discount_amount'] = $coupon->coupon->amount;
                }else {
                    // Discount by percent
                    $response['total_price'] -= $coupon->coupon->amount/100*$response['total_price'];
                    $response['discount_amount'] = $coupon->coupon->amount/100*$response['total_price'];
                }
                if ($response['total_price'] < 0) {
                    $response['total_price'] = 0;
                }
            }
        }

        return response()->json($response);
    }
}
