<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lumino - Dashboard</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet">
    
    <link href="{{ asset('admin/css/font-awesome.min.css') }}" rel="stylesheet">

    <link href="{{ asset('admin/css/datepicker3.css') }}" rel="stylesheet">

    <link href="{{ asset('admin/css/styles.css') }}" rel="stylesheet">

	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
    <script src="{{ asset('admin/js/html5shiv.js') }}" ></script>

    <script src="{{ asset('admin/js/respond.min.js') }}" ></script>

	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>UK</span>Essays</a>
				
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">{{Auth::user()->name}}</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li><a href="{{route('admin.dashboard')}}"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
			<li><a href="{{route('customer.index')}}"><em class="fa fa-users">&nbsp;</em> Students</a></li>
			<li><a href="{{route('teacher.index')}}"><em class="fa fa-edit">&nbsp;</em> Writers</a></li>
			<li><a href="{{route('order.index')}}"><em class="fa fa-cart-plus">&nbsp;</em> Orders</a></li>
			<li><a href="{{route('finance.index')}}"><em class="fa fa-credit-card">&nbsp;</em> Finance</a></li>
			<li><a href="{{route('admin.message')}}"><em class="fa fa-comments">&nbsp;</em> Messages</a></li>
			<li class="parent "><a data-toggle="collapse" href="#sub-item-1">
				<em class="fa fa-cogs">&nbsp;</em> Settings <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li>
						<a class="" href="{{route('category.index')}}">
							<span class="fa fa-arrow-right">&nbsp;</span> Type of document
						</a>
					</li>
					<li>
						<a class="" href="{{route('academiclevel.index')}}">
							<span class="fa fa-arrow-right">&nbsp;</span> Academic Levels
						</a>
					</li>
					<li>
						<a class="" href="{{route('extra.index')}}">
							<span class="fa fa-arrow-right">&nbsp;</span> Extra services
						</a>
					</li>
					<li>
						<a class="" href="{{route('language.index')}}">
							<span class="fa fa-arrow-right">&nbsp;</span> Language Style
						</a>
					</li>
					<li>
						<a class="" href="{{route('level.index')}}">
							<span class="fa fa-arrow-right">&nbsp;</span> Assignment Levels
						</a>
					</li>
					<li>
						<a class="" href="{{route('style.index')}}">
							<span class="fa fa-arrow-right">&nbsp;</span> Style
						</a>
					</li>	
					<li>
						<a class="" href="{{route('urgency.index')}}">
							<span class="fa fa-arrow-right">&nbsp;</span> Urgencies
						</a>
					</li>	
					<li>
						<a class="" href="{{route('writerlevel.index')}}">
							<span class="fa fa-arrow-right">&nbsp;</span> Writer Levels
						</a>
					</li>	
																																													
				</ul>
			</li>
			<li class="parent "><a data-toggle="collapse" href="#sub-item-2">
				<em class="fa fa-question">&nbsp;</em> Quiz <span data-toggle="collapse" href="#sub-item-2" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-2">
					<li>
						<a class="" href="{{route('topic.index')}}">
							<span class="fa fa-arrow-right">&nbsp;</span> Topics
						</a>
					</li>
					<li>
						<a class="" href="{{route('question.index')}}">
							<span class="fa fa-arrow-right">&nbsp;</span> Questions
						</a>
					</li>
				</ul>
			</li>
			<li class="parent "><a data-toggle="collapse" href="#sub-item-3">
				<em class="fa fa-money">&nbsp;</em> Discounts <span data-toggle="collapse" href="#sub-item-3" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-3">
					<li>
						<a class="" href="{{route('coupon.index')}}">
							<span class="fa fa-arrow-right">&nbsp;</span> Coupons
						</a>
					</li>
					<li>
						<a class="" href="{{route('code.index')}}">
							<span class="fa fa-arrow-right">&nbsp;</span> Codes
						</a>
					</li>
				</ul>
			</li>
			<li><a href="{{route('logout')}}"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">@yield('header')</h1>
			</div>
		</div><!--/.row-->
		@yield('content')
		
	</div>	<!--/.main-->
	
    <script src="{{ asset('admin/js/jquery-1.11.1.min.js') }}" ></script>

    <script src="{{ asset('admin/js/bootstrap.min.js') }}" ></script>

    <script src="{{ asset('admin/js/chart.min.js') }}" ></script>

    <script src="{{ asset('admin/js/chart-data.js') }}" ></script>

    <script src="{{ asset('admin/js/easypiechart.js') }}" ></script>

    <script src="{{ asset('admin/js/easypiechart-data.js') }}" ></script>

    <script src="{{ asset('admin/js/bootstrap-datepicker.js') }}" ></script>

    <script src="{{ asset('admin/js/custom.js') }}" ></script>
    @yield('script')
	<script>
		window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
};
	</script>
		
</body>
</html>