@extends('layouts.app')

@section('content')
<div class="container">
    <h3>You have to pass 11 in 15 multiple-choice questions in 20 minutes to go to next step. </h3><br>
    <form id="quiz_multiple" action="{{route('test.multiple.store')}}" method="POST">
    @csrf
    @php ($i = 1)
    @foreach ($questions as $question)
        <div class="question">
            <div class="title">{{$i}}. {{$question->name}}</div>
            <div class="row">                                     
                <div class="col-xs-12 col-sm-3">
                    <label class="checkbox-btn">A: {{$question->answer1}}
                        <input type="radio" value="1" name="question-{{$question->id}}">
                        <span class="checkmark"></span>
                    </label>
                </div>
                <div class="col-xs-12 col-sm-3">
                    <label class="checkbox-btn">B: {{$question->answer2}}
                        <input type="radio" value="2" name="question-{{$question->id}}" >
                        <span class="checkmark"></span>
                    </label>
                </div>

                <div class="col-xs-12 col-sm-3">
                    <label class="checkbox-btn">C: {{$question->answer3}}
                        <input type="radio" value="3" name="question-{{$question->id}}" >
                        <span class="checkmark"></span>
                    </label>
                </div>

                <div class="col-xs-12 col-sm-3">
                    <label class="checkbox-btn">D: {{$question->answer4}}
                        <input type="radio" value="4" name="question-{{$question->id}}" >
                        <span class="checkmark"></span>
                    </label>
                </div>        
            </div>
        </div>
        @php ($i++)

    @endforeach
    <br>
        <input type="submit" class="btn btn-info" value="Submit" />
    </form>
    
</div>

<div>Time left = <span id="timer"></span></div>

<script>



document.getElementById('timer').innerHTML =
  20 + ":" + 00;
startTimer();

function startTimer() {
  var presentTime = document.getElementById('timer').innerHTML;
  var timeArray = presentTime.split(/[:]+/);
  var m = timeArray[0];
  var s = checkSecond((timeArray[1] - 1));
  if(s==59){m=m-1}
  if(m<0){
    document.getElementById("quiz_multiple").submit();

  }
  
  document.getElementById('timer').innerHTML =
    m + ":" + s;
  setTimeout(startTimer, 1000);
}

function checkSecond(sec) {
  if (sec < 10 && sec >= 0) {sec = "0" + sec}; // add zero in front of numbers < 10
  if (sec < 0) {sec = "59"};
  return sec;
}
</script>
@endsection

@section('script')

@endsection