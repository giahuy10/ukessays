<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AcademicLevel;
class AcademicLevelController extends Controller
{
    public function index()
    {
        $items = AcademicLevel::paginate(15);
        
        return view('admin.academiclevel.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.academiclevel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $academiclevel = Academiclevel::create($request->except('_token'));
        return redirect()->route('academiclevel.index')->with('success', 'Item is stored');
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
        $item = Academiclevel::findOrFail($id);
        return view('admin.academiclevel.edit',compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        
        $academiclevel = Academiclevel::findOrFail($id);
        $academiclevel->update($request->except('_token'));

        return redirect()->route('academiclevel.index')->with('success', 'Item is updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $academiclevel = Academiclevel::findOrFail($id);
        $academiclevel->delete();
        return redirect()->route('academiclevel.index')->with('success', 'Item is removed');
    }
}
