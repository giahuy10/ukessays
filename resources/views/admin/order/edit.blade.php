@extends('layouts.admin')
@section('header')
    Update {{$item->name}} 
@endsection
@section('content')
<?php 
    
?>
    <form class="form-horizontal" action="{{route('order.update',['order'=>$item->id])}}" method="POST">
        @csrf
        @method('PUT')

        <fieldset>
            <!-- Name input-->
            <div class="form-group">
                <label class="col-md-2 control-label" for="name">Order name</label>
                <div class="col-md-9">
                    <input id="name" name="name" type="text" value="{{$item->name}}" placeholder="Name" class="form-control">
                </div>
            </div>
            <!-- Message body -->
            <div class="form-group">
                <label class="col-md-2 control-label" for="description">Instructions</label>
                <div class="col-md-9">
                    <textarea class="form-control" id="description" name="description" placeholder="Please enter your message here..." rows="5">{{$item->description}}</textarea>
                </div>
            </div>

            <!-- Type of document input-->
            <div class="form-group">
                <label class="col-md-2 control-label" for="catid">Type of document</label>
                <div class="col-md-9">
                    <select name="catid" class="form-control">
                        @foreach ($categories as $category)
                            <option {{$item->catid == $category->id ? " selected " : ""}} value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <!-- Urgency input-->
            <div class="form-group">
                <label class="col-md-2 control-label" for="urgency">Urgency</label>
                <div class="col-md-9">
                    <select name="urgency" class="form-control">
                        @foreach ($urgencies as $urgency)
                            <option {{$item->urgency == $urgency->id ? " selected " : ""}} value="{{$urgency->id}}">{{$urgency->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <!-- Experience level input-->
            <div class="form-group">
                <label class="col-md-2 control-label" for="level">Experience level</label>
                <div class="col-md-9">
                    <select name="level" class="form-control">
                        @foreach ($levels as $level)
                            <option {{$item->level == $level->id ? " selected " : ""}} value="{{$level->id}}">{{$level->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <!-- Number of pages/words input-->
            <div class="form-group">
                <label class="col-md-2 control-label" for="pages">Number of pages/words</label>
                <div class="col-md-9">
                    <select name="pages" class="form-control">
                        @foreach ($pages as $page)
                            <option {{$item->pages == $page->id ? " selected " : ""}} value="{{$page->id}}">{{$page->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <!-- Spacing input-->
            <div class="form-group">
                <label class="col-md-2 control-label" for="spacing">Spacing</label>
                <div class="col-md-9">
                    <select name="spacing" class="form-control">
                        <option {{$item->spacing == 1 ? " selected " : ""}} value="1">Double Spaced</option>
                        <option {{$item->spacing == 2 ? " selected " : ""}} value="1">Single Spaced</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-2 control-label" for="extra">Extra services</label>
                <div class="col-md-9">
                    @foreach ($extras as $extra)
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="extra[]" {{isset($item->extras) && in_array($extra->id,$item->extras) ? "checked" : ""}} value="{{$extra->id}}">
                                {{$extra->name}}
                            </label>
                        </div>
                    @endforeach    
                </div>
            </div>

            <!-- Academic levels input-->
            <div class="form-group">
                <label class="col-md-2 control-label" for="academic_level">Academic Levels</label>
                <div class="col-md-9">
                    <select name="academic_level" class="form-control">
                        @foreach ($academics as $level)
                            <option {{$item->academic_level == $level->id ? " selected " : ""}} value="{{$level->id}}">{{$level->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <!-- Style input-->
            <div class="form-group">
                <label class="col-md-2 control-label" for="style">Style</label>
                <div class="col-md-9">
                    <select name="style" class="form-control">
                        @foreach ($styles as $style)
                            <option {{$item->style == $style->id ? " selected " : ""}} value="{{$style->id}}">{{$style->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <!-- Number of resoureseinput-->
            <div class="form-group">
                <label class="col-md-2 control-label" for="sources">Number of sources/references</label>
                <div class="col-md-9">
                    <select name="sources" class="form-control">
                        @foreach ($resources as $source)
                            <option {{$item->sources == $source->id ? " selected " : ""}} value="{{$source->id}}">{{$source->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <!-- Preferred language style input-->
            <div class="form-group">
                <label class="col-md-2 control-label" for="language_style">Preferred language style</label>
                <div class="col-md-9">
                    <select name="language_style" class="form-control">
                        @foreach ($languages as $language)
                            <option {{$item->language_style == $language->id ? " selected " : ""}} value="{{$language->id}}">{{$language->name}}</option>
                        @endforeach
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


