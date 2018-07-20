@extends('layouts.app')

@section('content')
<div class="container">
    <div class="search-freelancer ">
        
        <div class="table-responsive">
            <table class="table">
                <tbody>
                    @foreach ($users as $writer)
                    <tr>
                        <td>
                            <div class="freelancers">
                                <div class="freelancer-img">
                                    <img src="{{isset($writer->profile->avatar) ? App::make('url')->to('/').'/avatars/'.$writer->profile->avatar : ""}}" alt="{{$writer->name}}">
                                   

                                </div>
                                <div class="freelancer-details">
                                    <h6 class="name">{{$writer->name}}</h6>
                                    <p>{{isset($writer->profile->description) ? $writer->profile->description : ""}}</p>
                                    <ul class="review">
                                        <li><a href="#">{{number_format($writer->rating,1)}}</a></li>
                                        <li><a href="#"><i class="icofont icofont-star"></i></a></li>
                                        <li><a href="#"><i class="icofont icofont-star"></i></a></li>
                                        <li><a href="#"><i class="icofont icofont-star"></i></a></li>
                                        <li><a href="#"><i class="icofont icofont-star"></i></a></li>
                                        <li><a href="#"><i class="icofont icofont-star"></i></a></li>
                                        <li>{{isset($writer->profile->reviews) ? $writer->profile->reviews : "0"}} Reviews</li>
                                        <li>{{isset($writer->profile->earned) ? $writer->profile->earned : "0"}}</li>
                                        <li><span class="dollar">$</span></li>
                                    </ul>
                                    <ul class="category">
                                        @if (isset($writer->profile->categoryname) && is_array($writer->profile->categoryname))
                                            @foreach ($writer->profile->categoryname as $name)
                                            <li><a href="#">{{$name}}</a></li>
                                            
                                            @endforeach
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </td>
                        <td></td>
                        
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
       
    </div>
</div>
@endsection

