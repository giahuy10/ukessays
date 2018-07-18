<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WriterLevel;
class WriterLevelController extends Controller
{
    public function frontend(){

        return view('writer.upgrade',['levels'=>WriterLevel::all()]);
    }
    public function upgrade(){

    }
    public function index()
    {
        $items = WriterLevel::paginate(15);
        
        return view('admin.writerlevel.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.writerlevel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $writerlevel = WriterLevel::create($request->except('_token'));
        return redirect()->route('writerlevel.index')->with('success', 'Item is stored');
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
        $item = WriterLevel::findOrFail($id);
        return view('admin.writerlevel.edit',compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        
        $writerlevel = WriterLevel::findOrFail($id);
        $writerlevel->update($request->except('_token'));

        return redirect()->route('writerlevel.index')->with('success', 'Item is updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $writerlevel = WriterLevel::findOrFail($id);
        $writerlevel->delete();
        return redirect()->route('writerLevel.index')->with('success', 'Item is removed');
    }
}
