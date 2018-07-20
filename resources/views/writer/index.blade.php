@extends('layouts.app')

@section('content')
<section id="overview">
    <div class="container">
        <div class="overview">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="overview-stat color-one">
                        <div class="stat">
                            <div class="stat-icon">
                                <i class="icofont icofont-adjust"></i>
                            </div>
                            <div class="title-num">
                                <h5>Total In progess</h5>	
                                <h2>${{auth()->user()->profile->inprogress}}</h2>							
                            </div>	
                            <div class="description">
                                <a href="{{route('writer.jobs.inprogress')}}" class="btn btn-info">View detail</a>	
                            </div>								
                        </div>							
                    </div>
                    <div class="overview-stat color-two">
                        <div class="stat">
                            <div class="stat-icon">
                                <i class="icofont icofont-money-bag"></i>
                            </div>
                            <div class="title-num">
                                <h5>Total Earning</h5>	
                                <h2>${{auth()->user()->profile->earned}}</h2>							
                            </div>	
                            <div class="description">
                                <a href="{{route('writer.jobs.completed')}}" class="btn btn-info">View detail</a>					
                            </div>								
                        </div>							
                    </div>
                    <div class="overview-stat color-three">
                        <div class="stat">
                            <div class="stat-icon">
                                <i class="icofont icofont-bank"></i>
                            </div>
                            <div class="title-num">
                                <h5>Total</h5>	
                                <h2>${{auth()->user()->profile->total}}</h2>							
                            </div>	
                            <div class="description">
                                <a href="{{route('writer.jobs.total')}}" class="btn btn-info">View detail</a>			
                            </div>								
                        </div>							
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="profile-overview">
                        <div class="profile-overview-header">
                            <div class="profile">
                                <img src="{{App::make('url')->to('/')}}/avatars/{{Auth::user()->profile->avatar}}"/>
                                
                            </div>
                            <div class="details">
                                <p>Welcome back!</p>
                                <h5>{{Auth::user()->name}}</h5>
                                <a href="#" class="button-ymp simple">{{auth()->user()->level->name}}</a> 
                                @if (auth()->user()->status <=3)
                                <a href="{{route('writer.upgrade')}}" class="button-ymp active">Upgrade</a>
                                @endif
                            </div>
                        </div>
                        <div class="set-up">
                            <p>Your rating</p>
                            <div class="account-progress">
                                <div class="progress-score" style="width:{{auth()->user()->rating/5*100}}%">{{auth()->user()->rating}}/5</div>
                            </div>
                        </div>
                        <div class="profile-grade">
                            <div class="grade-item">
                                <div class="grade-title">
                                    <p><i class="icofont icofont-adjust"></i>
                                     In progress Jobs </p>
                                </div>
                                <div class="grade-result">
                                    <span class="color-one"> {{auth::user()->profile->inprogress_jobs}}</span>
                                </div>
                            </div>
                            <div class="grade-item">
                                <div class="grade-title">
                                    <p><i class="icofont icofont-check"></i>
                                    Completed jobs</p>
                                </div>
                                <div class="grade-result">
                                    <span class="color-two">{{auth::user()->profile->completed_jobs ? auth::user()->profile->completed_jobs : 0}}</span>
                                </div>
                            </div>
                            <div class="grade-item">
                                <div class="grade-title">
                                    <p><i class="icofont icofont-tasks"></i>
                                    Total jobs</p>
                                </div>
                                <div class="grade-result">
                                    <span class="color-three">{{auth::user()->profile->total_jobs}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('script')



<script>
    
    var app = new Vue({
        el: '#app',
        data: function () {
            return {
                items: []
            }
        },
        mounted : function(){
            var app = this;

            axios.get('/api/assignment',{
            params: {
              taken_by: {{Auth::user()->id}}
            }
            })
            .then(function (response) {
                // handle success
                app.items = response.data;
                console.log(response);
                

            })
            .catch(function (error) {
                // handle error
                //console.log(error);
            });
           
        },
        methods: {
            
        },
        computed: {
           
            inProgress(){
                
                this.items.filter(function (item){
                    return item.id > 1
                });
                
                
            },
        }

    })
</script>
@endsection
