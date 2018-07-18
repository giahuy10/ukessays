<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Language;
class LanguageController extends Controller
{
    public function index()
    {
        $items = Language::paginate(15);
        
        return view('admin.language.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.language.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $language = Language::create($request->except('_token'));
        return redirect()->route('language.index')->with('success', 'Item is stored');
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
        $item = Language::findOrFail($id);
        return view('admin.language.edit',compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        
        $language = Language::findOrFail($id);
        $language->update($request->except('_token'));

        return redirect()->route('language.index')->with('success', 'Item is updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $language = Language::findOrFail($id);
        $language->delete();
        return redirect()->route('language.index')->with('success', 'Item is removed');
    }
}
