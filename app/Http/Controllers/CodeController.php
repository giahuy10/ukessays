<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Code;
class CodeController extends Controller
{
    public function generate(Request $request, $id) {
        $i = 1;
        while ($i<= $request->number) {
            $code = $request->prefix.rand(pow(10, $request->length-1), pow(10, $request->length)-1);
            $check= Code::where('code',$code)->first();
            if (!$check) {
                $newcode = new Code();
                $newcode->coupon_id = $id;
                $newcode->code = $code;
                $newcode->code_type = 2;
                $newcode->save();
                $i++;
            }
        }
        return redirect()->route('code.index')->with('success', $request->number.'Codes are generated');
    }
    public function index()
    {
        $items = Code::paginate(15);
        
        return view('admin.code.index',compact('items'));
    }
}
