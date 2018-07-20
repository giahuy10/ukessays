<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Topic;
use App\TestResult;
use Auth;
use App\Profile;
use Illuminate\Support\Facades\Mail;
use App\Mail\TeacherRegister;
class TestController extends Controller
{
    public function multiple()
    {
        $check = TestResult::where('user_id',Auth::user()->id)->first();
        if ($check)
            return redirect('/')->with('warning',"You only can do this test one time!");
        $questions = Question::inRandomOrder()->offset(0)->limit(15)->get();
        return view('test.multiple',compact('questions'));
    }
    public function topic()
    {
        if (Auth::user()->profile->essay) {
            return redirect('/')->with('warning',"You only can do this test one time!");
        }
        $topic = Topic::inRandomOrder()->first();;
        return view('test.topic',compact('topic'));
    }
    public function storeMultiple(Request $request)
    {
        $correct = 0;
        $questions = $request->except('_token');
        foreach ($questions as $key => $answer) {
            $explode = explode('-',$key);
            $id = $explode['1'];
            $question = Question::findOrFail($id);

            $test_result = new TestResult();
            $test_result->user_id = Auth::user()->id;
            $test_result->question_id = $id;
            $test_result->selected = $answer;
            $test_result->correct = $question->correct;
            $test_result->is_correct = 0;
            if ($question->correct == $answer) {
                $test_result->is_correct = 1;
                $correct++;
            }
            $test_result->save();
        }
        $profile = Profile::where('user_id',Auth::user()->id)->first();
        $profile->test_result = $correct;
        $profile->save();
        return view('test.multiresult',compact('correct'));
    }
    public function storeTopic(Request $request)
    {
        $profile = Profile::where('user_id',Auth::user()->id)->first();
        $profile->essay = $request->essay_content;
        $profile->save();
        Mail::to('anjakahuy@gmail.com')->send(new TeacherRegister(Auth::user()));

        return view('test.topicresult');

    }
}
