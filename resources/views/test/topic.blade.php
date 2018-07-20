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
@endsection 

@section('script')
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
    <script>
        $('textarea').ckeditor();
        // $('.textarea').ckeditor(); // if class is prefered.
    </script>
@endsection