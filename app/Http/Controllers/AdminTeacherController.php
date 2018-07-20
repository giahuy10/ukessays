<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Category;
use App\Profile;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
class AdminTeacherController extends Controller
{
    public function index()
    {
        $items = User::where('user_type',2)->paginate(15);
        
        return view('admin.teacher.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.teacher.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        //$category = Category::create($request->except('_token'));
        //return redirect()->route('category.index')->with('success', 'Item is stored');
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
        $item = User::findOrFail($id);
        $categories = Category::all();
        return view('admin.teacher.edit',compact('item','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
   
    public function update(Request $request, $id)
    {
        
        
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->password) {
            $user->password = Hash::make($request->password);
        }
        
        $user->save();

        $profile = Profile::findOrFail($user->profile->id);
        //$profile->user_id = $user->id;
        $profile->phone_number = $request->phone_number;
        //$profile->description = $request->description;
        $profile->paypal_email = $request->paypal_email;
        
        $profile->categories = json_encode($request->categories);
        $profile->education = $request->education;
        //$profile->certification = $request->certification'];
        $profile->save();

        return redirect()->route('teacher.index')->with('success', 'User is updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('teacher.index')->with('success', 'User is removed');
    }

}
