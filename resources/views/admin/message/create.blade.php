@extends('layouts.admin')

@section('content')
<div class="container">
    <form class="form-horizontal" enctype="multipart/form-data" action="{{route('admin.message.store')}}" method="post">
        @csrf
        <fieldset>
            <!-- Subject input-->
            <div class="form-group">
                <label class="col-md-2 control-label" for="subject">Subject</label>
                <div class="col-md-9">
                    <input id="subject" name="subject" type="text" required placeholder="Subject" class="form-control">
                </div>
            </div>

            <!-- Users input-->
            <div class="form-group">
                <label class="col-md-2 control-label" for="users">To Users</label>
                <div class="col-md-9">
                    <select style="height: 200px;" name="users[]" multiple id="users" class="form-control">
                        @foreach ($users as $user)
                            <option value="{{$user->id}}">{{$user->name}} - {{$user->email}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <!-- Message input-->
            <div class="form-group">
                <label class="col-md-2 control-label" for="message">Message</label>
                <div class="col-md-9">
                    <textarea name="message" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>
            </div>

            <div class="form-group">
                    <label class="col-md-2 control-label" for="message">Attachment</label>
                    <div class="col-md-9">
                        <input type="file" name="file" class="form-control">
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
</div>
@endsection