<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Level;
class AssignmentLevelController extends Controller
{
    public function index()
    {
        $items = Level::paginate(15);
        
        return view('admin.level.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.level.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $level = Level::create($request->except('_token'));
        return redirect()->route('level.index')->with('success', 'Item is stored');
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
        $item = Level::findOrFail($id);
        return view('admin.level.edit',compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        
        $level = Level::findOrFail($id);
        $level->update($request->except('_token'));

        return redirect()->route('level.index')->with('success', 'Item is updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $level = Level::findOrFail($id);
        $level->delete();
        return redirect()->route('level.index')->with('success', 'Item is removed');
    }
}
