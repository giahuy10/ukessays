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
        $assignment->update($request->except('_token'));

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
}
