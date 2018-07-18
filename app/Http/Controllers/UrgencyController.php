<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Urgency;
class UrgencyController extends Controller
{
    public function index()
    {
        $items = Urgency::paginate(15);
        
        return view('admin.urgency.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.urgency.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $urgency = Urgency::create($request->except('_token'));
        return redirect()->route('urgency.index')->with('success', 'Item is stored');
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
        $item = Urgency::findOrFail($id);
        return view('admin.urgency.edit',compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        
        $urgency = Urgency::findOrFail($id);
        $urgency->update($request->except('_token'));

        return redirect()->route('urgency.index')->with('success', 'Item is updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $urgency = Urgency::findOrFail($id);
        $urgency->delete();
        return redirect()->route('urgency.index')->with('success', 'Item is removed');
    }
}
