<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Style;
class StyleController extends Controller
{
    public function index()
    {
        $items = Style::paginate(15);
        
        return view('admin.style.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.style.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $style = Style::create($request->except('_token'));
        return redirect()->route('style.index')->with('success', 'Item is stored');
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
        $item = Style::findOrFail($id);
        return view('admin.style.edit',compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        
        $style = Style::findOrFail($id);
        $style->update($request->except('_token'));

        return redirect()->route('style.index')->with('success', 'Item is updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $style = Style::findOrFail($id);
        $style->delete();
        return redirect()->route('style.index')->with('success', 'Item is removed');
    }
}
