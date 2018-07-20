<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coupon;
use App\Code;
class CouponController extends Controller
{
    public function index()
    {
        $items = Coupon::paginate(15);
        
        return view('admin.coupon.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.coupon.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $coupon = Coupon::create($request->except('_token'));
        if ($request->one_user == 1){
            $code = new Code();
            $code->coupon_id = $coupon->id;
            $code->code = $coupon->fixed_code;
            $code->code_type = 1;
            $code->save();
        }
        return redirect()->route('coupon.index')->with('success', 'Item is stored');
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
        $item = Coupon::findOrFail($id);
        return view('admin.coupon.edit',compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        
        $coupon = Coupon::findOrFail($id);
        if ($request->one_user == 1){
            $code = Code::where('coupon_id',$id)->first();
           
            $code->code = $coupon->fixed_code;
            $code->save();
           
        }
        $coupon->update($request->except('_token'));

        return redirect()->route('coupon.index')->with('success', 'Item is updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $coupon = Coupon::findOrFail($id);
        $coupon->delete();

        $code = Code::where('coupon_id',$id)->get();

        return redirect()->route('coupon.index')->with('success', 'Item is removed');
    }
}
