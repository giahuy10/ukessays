@extends('layouts.admin')
@section('header')
    Update {{$item->name}} 
@endsection
@section('content')
    <form class="form-horizontal" action="{{route('question.update',['question'=>$item->id])}}" method="POST">
        @csrf
        @method('PUT')

        <fieldset>
            <!-- Name input-->
            <div class="form-group">
                <label class="col-md-2 control-label" for="name">Name</label>
                <div class="col-md-9">
                    <input id="name" name="name" type="text" value="{{$item->name}}" placeholder="Name" class="form-control">
                </div>
            </div>
            <!-- Answer1 input-->
            <div class="form-group">
                <label class="col-md-2 control-label" for="answer1">Answer1</label>
                <div class="col-md-9">
                    <input id="answer1" name="answer1" value="{{$item->answer1}}" type="text" placeholder="Answer 1" class="form-control">
                </div>
            </div>

            <!-- Answer2 input-->
            <div class="form-group">
                <label class="col-md-2 control-label" for="answer2">Answer2 </label>
                <div class="col-md-9">
                    <input id="answer2" name="answer2" value="{{$item->answer2}}" type="text" placeholder="Answer 2" class="form-control">
                </div>
            </div>

            <!-- Answer3 input-->
            <div class="form-group">
                <label class="col-md-2 control-label" for="answer3">Answer 3</label>
                <div class="col-md-9">
                    <input id="answer3" name="answer3" value="{{$item->answer3}}" type="text" placeholder="Answer 3" class="form-control">
                </div>
            </div>

            <!-- Answer4 input-->
            <div class="form-group">
                <label class="col-md-2 control-label" for="answer4">Answer 4</label>
                <div class="col-md-9">
                    <input id="answer4" name="answer4"  value="{{$item->answer4}}"  type="text" placeholder="Answer 4" class="form-control">
                </div>
            </div>

            

            <!-- Correct input-->
            <div class="form-group">
                <label class="col-md-2 control-label" for="correct">Correct answer</label>
                <div class="col-md-9">
                    <select name="correct" class="form-control">
                        <option value="1" {{$item->correct == 1 ? " selected " : ""}}>Answer 1</option>
                        <option value="2" {{$item->correct == 2 ? " selected " : ""}}>Answer 2</option>
                        <option value="3" {{$item->correct == 3 ? " selected " : ""}}>Answer 3</option>
                        <option value="4" {{$item->correct == 4 ? " selected " : ""}}>Answer 4</option>
                    </select>
                </div>
            </div>
            <!-- Form actions -->
            <div class="form-group">
                <div class="col-md-12 widget-right">
                    <button type="submit" class="btn btn-info btn-md">Submit</button>
                </div>
            </div>
        </fieldset>
    </form>

@endsection

@section('script')
    
@endsection