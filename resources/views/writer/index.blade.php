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
                                <i class="icofont icofont-chart-arrows-axis"></i>
                            </div>
                            <div class="title-num">
                                <h5>Total In progess</h5>	
                                <h2>$20</h2>							
                            </div>	
                            <div class="description">
                                <a href="" class="btn btn-info">View detail</a>	
                            </div>								
                        </div>							
                    </div>
                    <div class="overview-stat color-two">
                        <div class="stat">
                            <div class="stat-icon">
                                <i class="icofont icofont-chart-flow-alt-1"></i>
                            </div>
                            <div class="title-num">
                                <h5>Total Earning</h5>	
                                <h2>$40</h2>							
                            </div>	
                            <div class="description">
                                <a href="" class="btn btn-info">View detail</a>					
                            </div>								
                        </div>							
                    </div>
                    <div class="overview-stat color-three">
                        <div class="stat">
                            <div class="stat-icon">
                                <i class="icofont icofont-pie-chart"></i>
                            </div>
                            <div class="title-num">
                                <h5>Total</h5>	
                                <h2>$60</h2>							
                            </div>	
                            <div class="description">
                                <a href="" class="btn btn-info">View detail</a>			
                            </div>								
                        </div>							
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="profile-overview">
                        <div class="profile-overview-header">
                            <div class="profile">
                                <img src="http://thememom.com/html/marketplace/img/profile/dashboard-profile.jpg" alt="">
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
                                    <p><i class="icofont icofont-check-circled"></i>
                                     In progress Jobs </p>
                                </div>
                                <div class="grade-result">
                                    <span class="color-one"> @{{inProgress}}</span>
                                </div>
                            </div>
                            <div class="grade-item">
                                <div class="grade-title">
                                    <p><i class="icofont icofont-money-bag"></i>
                                    Completed jobs</p>
                                </div>
                                <div class="grade-result">
                                    <span class="color-two">100%</span>
                                </div>
                            </div>
                            <div class="grade-item">
                                <div class="grade-title">
                                    <p><i class="icofont icofont-clock-time"></i>
                                    In revision jobs</p>
                                </div>
                                <div class="grade-result">
                                    <span class="color-three">100%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="recent-jobs">
		<div class="container">
			<div class="recent-jobs">
				<div class="row">
					<div class="col-sm-12 col-md-12 col-lg-12">
						<div class="db-table">
							<div class="db-info-head">
								<h4>Recent Jobs</h4>
								<h6><a href="#">View All Jobs</a></h6>
							</div>
							<div class="db-info-details table-responsive">
								<table class="table">
								  <thead>
								    <tr>
								      <th scope="col">Project Name</th>
								      <th scope="col">Remaining</th>
								      <th scope="col">Budget</th>
								    </tr>
								  </thead>
								  <tbody>
								    <tr v-for="item in items">
								      <td>@{{item.name}} </td>
								      <td>@{{item.deadline}}</td>
								      <td>$@{{item.price}}</td>
								    </tr>
								   
								  </tbody>
								</table>
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
