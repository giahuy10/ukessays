@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Topic: {{$topic->name}}</h3>
    <form action="{{route('test.topic.store')}}" method="POST">
        @csrf
        <br>
        <textarea name="essay_content" id="" cols="30" rows="10" class="form-control">

        </textarea>
        <br>
        <input type="submit" class="btn btn-info" value="Submit" />
    </form>
</div>
<div id="count-down"><span id="timer"></span></div>

<script>



document.getElementById('timer').innerHTML =
  40 + ":" + 00;
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
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
    <script>
        $('textarea').ckeditor();
        // $('.textarea').ckeditor(); // if class is prefered.
    </script>
@endsection