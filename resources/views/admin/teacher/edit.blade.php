@extends('layouts.admin')
@section('header')
    Update {{$item->name}} 
@endsection
@section('content')
    <form class="form-horizontal" action="{{route('teacher.update',['teacher'=>$item->id])}}" method="POST">
        @csrf
        @method('PUT')

        <fieldset>
            <h3>Account information</h3>
            <!-- Name input-->
            <div class="form-group">
                <label class="col-md-2 control-label" for="name">Name</label>
                <div class="col-md-9">
                    <input id="name" name="name" type="text" value="{{$item->name}}" placeholder="Name" class="form-control">
                </div>
            </div>

            <!-- Email input-->
            <div class="form-group">
                <label class="col-md-2 control-label" for="email">Email</label>
                <div class="col-md-9">
                    <input id="email" name="email" type="email" value="{{$item->email}}" placeholder="Email" class="form-control">
                </div>
            </div>

            <!-- Password input-->
            <div class="form-group">
                <label class="col-md-2 control-label" for="email">Password</label>
                <div class="col-md-9">
                    <input id="password" name="password" type="password"  placeholder="Leave blank if don't want to change Password" class="form-control">
                </div>
            </div>

            <!-- Confirm password input-->
            <div class="form-group">
                <label class="col-md-2 control-label" for="confirmed">Confirm password</label>
                <div class="col-md-9">
                    <input id="email" name="confirmed" type="password"  placeholder="Confirm password" class="form-control">
                </div>
            </div>
            @if (isset($item->profile))
            <h3>Other information</h3>
            
            <!-- Phone input-->
            <div class="form-group">
                <label class="col-md-2 control-label" for="phone_number">Phone</label>
                <div class="col-md-9">
                    <input id="phone_number" name="phone_number" type="text" value="{{$item->profile->phone_number}}" placeholder="Phone number" class="form-control">
                </div>
            </div>

            <!-- Paypal input-->
            <div class="form-group">
                <label class="col-md-2 control-label" for="paypal_email">Paypal email</label>
                <div class="col-md-9">
                    <input id="paypal_email" name="paypal_email" type="email" value="{{$item->profile->paypal_email}}" placeholder="Paypal email" class="form-control">
                </div>
            </div>

            <!-- Avatar input-->
            <div class="form-group">
                <label class="col-md-2 control-label" for="name">Avatar</label>
                <div class="col-md-9">
                    <img src="{{App::make('url')->to('/')}}/avatars/{{$item->profile->avatar}}"/>
                   
                </div>

            </div>
            <!-- Sample 1 input-->
            <div class="form-group">
                
                <label class="col-md-2 control-label" for="name">Sample 1</label>
                <div class="col-md-9">
                    <a href="{{App::make('url')->to('/')}}/samples/{{$item->profile->sample1}}">{{$item->profile->sample1}}</a>
                </div>
            </div>

            <!-- Sample 2 input-->
            <div class="form-group">
                <label class="col-md-2 control-label" for="name">Sample 2</label>
                <div class="col-md-9">
                        <a href="{{App::make('url')->to('/')}}/samples/{{$item->profile->sample2}}">{{$item->profile->sample2}}</a>
                </div>
            </div>

            <!-- Sample 3 input-->
            <div class="form-group">
                <label class="col-md-2 control-label" for="name">Sample 3</label>
                <div class="col-md-9">
                        <a href="{{App::make('url')->to('/')}}/samples/{{$item->profile->sample3}}">{{$item->profile->sample3}}</a>
                </div>
            </div>

            <!-- Category input-->
            <div class="form-group">
                <label class="col-md-2 control-label" for="name">Categories</label>
                <div class="col-md-9">
                    <select class="form-control" name="categories[]" id="categories" multiple>
                        @foreach ($categories as $category)
                            <option {{isset($item->profile->categories) && in_array($category->id,$item->profile->categories) ? " selected " : ""}} value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <!-- Education certificate input-->
            <div class="form-group">
                <label class="col-md-2 control-label" for="name">Certification</label>
                <div class="col-md-9">
                        <a href="{{App::make('url')->to('/')}}/certificates/{{$item->profile->certification}}">{{$item->profile->certification}}</a>
                   
                </div>
            </div>

            <!-- Level of education input-->
            <div class="form-group">
                <label class="col-md-2 control-label" for="education">Highest level of Education</label>
                <div class="col-md-9">
                    <input id="education" name="education" type="text" value="{{$item->profile->education}}" placeholder="Level of education" class="form-control">
                </div>
            </div>
            @endif
            <!-- Form actions -->
            <div class="form-group">
                <div class="col-md-12 widget-right">
                    <button type="submit" class="btn btn-info btn-md">Submit</button>
                </div>
            </div>
        </fieldset>
    </form>
    @if ($item->profile)
        <h3>Test multiple-choice Result</h3>
        <b>Result: </b> {{$item->profile->test_result}} / 15
        <h3>Test Essay result</h3>
        <div>{!!$item->profile->essay!!}</div>
    @endif
@endsection

@section('script')
    
@endsection