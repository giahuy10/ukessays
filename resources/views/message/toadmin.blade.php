@extends('layouts.app')

@section('content')
<div class="container">
    <form class="form-horizontal" action="{{route('message.toadmin.store')}}" method="post">
        @csrf
        <fieldset>
            <!-- Subject input-->
            <div class="form-group">
                <label class="col-md-2 control-label" for="subject">Subject</label>
                <div class="col-md-9">
                    <input id="subject" name="subject" type="text" required placeholder="Subject" class="form-control">
                </div>
            </div>

            <!-- Message input-->
            <div class="form-group">
                <label class="col-md-2 control-label" for="message">Message</label>
                <div class="col-md-9">
                    <textarea name="message" id="" cols="30" rows="10" class="form-control"></textarea>
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