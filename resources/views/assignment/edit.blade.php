@extends('layouts.app')

@section('content')
<div class="container">
    <div class="post-project">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="get-job-title">
                    <h2 class="title">Get your Job Done !</h2>
                    <p>Post a Job for Free - Start receiving proposals within minutes</p>
                </div>
                
                <form class="submit-info" method="POST"  action="{{ route('assignment.store') }}" >
                    @csrf
                    <div class="need-info">
                        <p class="info-title">What do you need to get done?</p>
                        <p class="tooltip-icon"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor."><i class="icofont icofont-question-circle"></i></a></p>
                        <input type="text" name="name" class="form-control" placeholder="e.g. I need a professional website design">
                    </div>
                    <div class="pick-category">
                        <p class="info-title">Type of document</p>
                        
                        <div class="form-group select-work-type">
                            <select name="catid" class="custom-select">
                                @foreach ($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                           
                    </div>
                    <div class="pick-category">
                        <p class="info-title">Urgency</p>
                        
                        <div class="form-group select-work-type">
                            <select name="urgency" class="custom-select">
                                @foreach ($urgencies as $urgency)
                                    <option value="{{$urgency->id}}">{{$urgency->name}}</option>
                                @endforeach
                            </select>
                        </div>
                           
                    </div>
                    <div class="experience-level">
                        <p class="info-title">Experience Level</p>
                        <div class="row">
                            @foreach ($levels as $level)
                            <div class="col-sm-12 col-md-4 col-lg-4 xpbox">
                                <input class="form-control" name="optradio" id="entry{{$level->id}}" type="radio" value="{{$level->id}}">
                                <label for="entry{{$level->id}}">
                                    <div class="header">{{$level->name}}</div>
                                    <div class="body">
                                        {!!$level->description!!}
                                        <span class="symbols">${{$level->string}} per page</span>
                                    </div>
                                </label>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    
                    <div class="get-description">
                        <p class="info-title">Your instructions</p>
                        <p class="tooltip-icon"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor."><i class="icofont icofont-question-circle"></i></a></p>
                        <textarea class="form-control" name="description" cols="30" rows="10" placeholder="Provide a more detailed description to help you get better proposals"></textarea>
                    </div>
                    <div class="pick-category">
                        
                        
                        <div class="form-group select-work-type">
                            
                                @foreach ($extras as $extra)
                                    <div class="field field_vas additional_{{$extra->id}}_wrap" id="row_additional_{{$extra->id}}">
                                        <input id="additional_{{$extra->id}}" name="additional[{{$extra->id}}]" type="checkbox" value="additional[{{$extra->id}}]" size="1">
                                        <label id="label_additional_{{$extra->id}}" class="field__label field__label_vas" for="additional_{{$extra->id}}">{{$extra->name}}</label>
                                        <span class="expander"></span>
                                        <div class="field__wrapper field__wrapper_vas ">
                                           <span class="free_discounts" id="additional_{{$extra->id}}_free_discounts" style="display: none;">
                                           $ {{$extra->price}}        </span>
                                           <span class="vas_price" id="additional_{{$extra->id}}_price">$ {{$extra->price}}</span>
                                           <span class="vas_price free_discounts_price" id="{{$extra->id}}_free_price" style="display: none;">FREE</span>
                                           
                                           <a title="Order the paper to be written by one of the most qualified 10 specialists in your subject area to get an outstanding assignment" class="field__hint field__hint_common field__hint_vas field_hint" href="javascript:void(0);"></a>
                                        </div>
                                     </div>
                                @endforeach
                            
                        </div>
                            
                    </div>
                    <div class="pick-category">
                        <p class="info-title">Academic level</p>
                        
                        <div class="form-group select-work-type">
                            <select name="academic_level" class="custom-select">
                                @foreach ($academics as $academic)
                                    <option value="{{$academic->id}}">{{$academic->name}}</option>
                                @endforeach
                            </select>
                        </div>
                            
                    </div>

                    <div class="pick-category">
                        <p class="info-title">Number of sources/references</p>
                        
                        <div class="form-group select-work-type">
                            <select name="sources" class="custom-select">
                                @foreach ($resources as $resource)
                                    <option value="{{$resource->id}}">{{$resource->name}}</option>
                                @endforeach
                            </select>
                        </div>
                            
                    </div>
                    <div class="pick-category">
                        <p class="info-title">Style</p>
                        
                        <div class="form-group select-work-type">
                            <select name="style" class="custom-select">
                                @foreach ($styles as $style)
                                    <option value="{{$style->id}}">{{$style->name}}</option>
                                @endforeach
                            </select>
                        </div>
                            
                    </div>
                    <div class="pick-category">
                        <p class="info-title">Language Style</p>
                        
                        <div class="form-group select-work-type">
                            <select name="language_style" class="custom-select">
                                @foreach ($languages as $langugae)
                                    <option value="{{$langugae->id}}">{{$langugae->name}}</option>
                                @endforeach
                            </select>
                        </div>
                            
                    </div>
                    
                    <div class="experience-level">
                        
                        <div class="row">
                          
                            <div class="post-job-btn">
                                <button type="submit" class="button-ymp">Post job</button>
                            </div>
                        </div>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')

 
@endsection
