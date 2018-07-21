@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>{{ __('Update your profile') }}</h2></div>

                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data"  action="{{ route('writer.updateprofile') }}" aria-label="{{ __('Register') }}">
                        @csrf

                        
                        <div class="form-group row">
                            <label for="phone_number" class="col-md-4 col-form-label text-md-right">{{ __('Mobile') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('phone_number') ? ' is-invalid' : '' }}" name="phone_number" value="{{isset($profile->phone_number) ? $profile->phone_number : "" }}" required autofocus>

                                @if ($errors->has('phone_number'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone_number') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Introduction') }}</label>

                            <div class="col-md-6">
                                <textarea id="description"  class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" required autofocus>{{ isset($profile->description) ? $profile->description : "" }}</textarea>

                                @if ($errors->has('description'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="paypal_email" class="col-md-4 col-form-label text-md-right">{{ __('Paypal Email') }}</label>

                            <div class="col-md-6">
                                <input id="paypal_email" type="email" class="form-control{{ $errors->has('paypal_email') ? ' is-invalid' : '' }}" name="paypal_email" value="{{ isset($profile->paypal_email) ?  $profile->paypal_email : "" }}" required autofocus>

                                @if ($errors->has('paypal_email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('paypal_email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="avatar" class="col-md-4 col-form-label text-md-right">{{ __('Avatar') }}</label>

                            <div class="col-md-6">
                                <input id="avatar" type="file" class="form-control{{ $errors->has('avatar') ? ' is-invalid' : '' }}" name="avatar" required autofocus>

                                @if ($errors->has('avatar'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('avatar') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="sample1" class="col-md-4 col-form-label text-md-right">{{ __('Sample 1') }}</label>

                            <div class="col-md-6">
                                <input id="sample1" type="file" class="form-control{{ $errors->has('sample1') ? ' is-invalid' : '' }}" name="sample1" required autofocus>

                                @if ($errors->has('avatar'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('sample1') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="sample2" class="col-md-4 col-form-label text-md-right">{{ __('Sample 2') }}</label>

                            <div class="col-md-6">
                                <input id="sample2" type="file" class="form-control{{ $errors->has('sample2') ? ' is-invalid' : '' }}" name="sample2"  required autofocus>

                                @if ($errors->has('avatar'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('sample2') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="sample3" class="col-md-4 col-form-label text-md-right">{{ __('Sample3') }}</label>

                            <div class="col-md-6">
                                <input id="sample3" type="file" class="form-control{{ $errors->has('sample3') ? ' is-invalid' : '' }}" name="sample3"  required autofocus>

                                @if ($errors->has('sample3'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('sample3') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                                <label for="categories" class="col-md-4 col-form-label text-md-right">{{ __('Categoires') }}</label>
    
                                <div class="col-md-6">
                                    <select class="form-control" name="categories[]" id="categories" multiple>
                                        @foreach ($categories as $category)
                                            <option {{isset($profile->categories) && in_array($category->id, $profile->categories) ? " selected " : ""}} value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        <div class="form-group row">
                            <label for="education" class="col-md-4 col-form-label text-md-right">{{ __('Highest Education') }}</label>

                            <div class="col-md-6">
                                <input id="education" type="text" class="form-control{{ $errors->has('education') ? ' is-invalid' : '' }}" name="education" value="{{ isset($profile->education) ? $profile->education : ""  }}" required autofocus>

                                @if ($errors->has('education'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('education') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="certification" class="col-md-4 col-form-label text-md-right">{{ __('Certification') }}</label>

                            <div class="col-md-6">
                                <input id="certification" type="file" class="form-control{{ $errors->has('certification') ? ' is-invalid' : '' }}" name="certification"  required autofocus>

                                @if ($errors->has('certification'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('certification') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <input type="hidden" name="user_type" value="2">
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
