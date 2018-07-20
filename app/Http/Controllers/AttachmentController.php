<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Attachment;
use Auth;
class AttachmentController extends Controller
{
    public function store(Request $request)
    {
       
    	$image = $request->file('file');
        $imageName = $request->id."-".$image->getClientOriginalName();
        $upload_success = $image->move(public_path('attachments'),$imageName);
        $info = pathinfo(public_path('attachments').'/'.$imageName);
        $ext = $info['extension'];
        if ($upload_success) {
            $attach = new Attachment();
            $attach->name=$imageName;
            $attach->source = "attachments/".$imageName;
            $attach->created_by = Auth::user()->id;
            $attach->type = Auth::user()->user_type;
            $attach->assignment_id = $request->id;
            $attach->ext = $ext;
            $attach->save();
            return redirect()->route('assignment.show', ['id' => $request->id])->with('success', 'Attachment is uploaded');
        }
        // Else, return error 400
        else {
            return response()->json('error', 400);
        }
    }
    public function download($id)
    {
        $attachment = Attachment::findOrFail($id);
        return response()->download(public_path('attachments').'/'.$attachment->name);
    }
    public function delete($id)
    {
        $attachment = Attachment::findOrFail($id);
        $attachment->delete();
        return redirect()->route('assignment.show', ['id' => $id])->with('success', 'Attachment is deleted');

    }
}
