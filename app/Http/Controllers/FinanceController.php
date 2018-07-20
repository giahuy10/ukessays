<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Finance;
class FinanceController extends Controller
{
    public function index()
    {
        $items = Finance::where('status',1)->paginate(15);
        
        return view('admin.finance.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $writers = \App\User::where('user_type',2)->get();
        $orders = \App\Assignment::all();
        return view('admin.finance.create',compact('writers','orders'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $finance = Finance::create($request->except('_token'));
        return redirect()->route('finance.index')->with('success', 'Item is stored');
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
        $item = Finance::findOrFail($id);
        return view('admin.finance.edit',compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        
        $finance = Finance::findOrFail($id);
        $finance->update($request->except('_token'));

        return redirect()->route('finance.index')->with('success', 'Item is updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $finance = Finance::findOrFail($id);
        $finance->delete();
        return redirect()->route('finance.index')->with('success', 'Item is removed');
    }
}
