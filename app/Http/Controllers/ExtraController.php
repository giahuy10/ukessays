<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Extra;
class ExtraController extends Controller
{
    public function index()
    {
        $items = Extra::paginate(15);
        
        return view('admin.extra.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.extra.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $extra = Extra::create($request->except('_token'));
        return redirect()->route('extra.index')->with('success', 'Item is stored');
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
        $item = Extra::findOrFail($id);
        return view('admin.extra.edit',compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        
        $extra = Extra::findOrFail($id);
        $extra->update($request->except('_token'));

        return redirect()->route('extra.index')->with('success', 'Item is updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $extra = Extra::findOrFail($id);
        $extra->delete();
        return redirect()->route('extra.index')->with('success', 'Item is removed');
    }
}
