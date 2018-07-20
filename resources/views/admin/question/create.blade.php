@extends('layouts.admin')
@section('header')
    Create 
@endsection
@section('content')
    <form class="form-horizontal" action="{{route('question.store')}}" method="post">
        @csrf
        <fieldset>
            <!-- Name input-->
            <div class="form-group">
                <label class="col-md-2 control-label" for="name">Question</label>
                <div class="col-md-9">
                    <input id="name" name="name" type="text" placeholder="Name" class="form-control">
                </div>
            </div>

            <!-- Answer1 input-->
            <div class="form-group">
                <label class="col-md-2 control-label" for="answer1">Answer1</label>
                <div class="col-md-9">
                    <input id="answer1" name="answer1" type="text" placeholder="Answer 1" class="form-control">
                </div>
            </div>

            <!-- Answer2 input-->
            <div class="form-group">
                <label class="col-md-2 control-label" for="answer2">Answer 2</label>
                <div class="col-md-9">
                    <input id="answer2" name="answer2" type="text" placeholder="Answer 2" class="form-control">
                </div>
            </div>

            <!-- Answer3 input-->
            <div class="form-group">
                <label class="col-md-2 control-label" for="answer3">Answer 3</label>
                <div class="col-md-9">
                    <input id="answer3" name="answer3" type="text" placeholder="Answer 3" class="form-control">
                </div>
            </div>

            <!-- Answer4 input-->
            <div class="form-group">
                <label class="col-md-2 control-label" for="answer4">Answer 4</label>
                <div class="col-md-9">
                    <input id="answer4" name="answer4" type="text" placeholder="Answer 4" class="form-control">
                </div>
            </div>

            

            <!-- Correct input-->
            <div class="form-group">
                <label class="col-md-2 control-label" for="correct">Correct answer</label>
                <div class="col-md-9">
                    <select name="correct" class="form-control">
                        <option value="1">Answer 1</option>
                        <option value="2">Answer 2</option>
                        <option value="3">Answer 3</option>
                        <option value="4">Answer 4</option>
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