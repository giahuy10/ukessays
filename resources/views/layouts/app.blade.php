<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="application-name" content="">
	<meta name="description" content="">
    <title>Dashboard</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<link rel="icon" href="/img/Thumbnail.png">

	<!-- Bootstrap CSS -->
	
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

	<!-- Normalize -->
	
    <link href="{{ asset('css/normalize.css') }}" rel="stylesheet">

	<!-- Font Awesome -->

    <script src="{{ asset('js/font-awesome.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>

    
	<!-- Ico Font -->
	
    <link href="{{ asset('css/icofont.css') }}" rel="stylesheet">

	<!-- Style Css -->
	
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

	<!-- Responsive Css -->
	
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dropzone.css') }}" rel="stylesheet">
		
		<script src="{{ asset('js/jquery-3.2.1.slim.min.js') }}" ></script>
		<script src="{{ asset('js/dropzone.js') }}" ></script>
	
</head>
<body>
	<!-- Header Start -->
	<header>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12 col-md-10 col-lg-10 order-sm-1 order-2 primary-menu-tm">
					<nav class="navbar navbar-expand-lg navbar-light bg-light">
						<a class="navbar-brand" href="index.html"><img src="/img/logo.png" alt="logo"></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
						</button>

						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav">
								<li class="nav-item dropdown">
									<a class="nav-link " href="/" role="button" 
									>Home</a>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link" role="button" href="/assignment">Assignments</a>	
								</li>
								@guest
								<li class="nav-item dropdown">
									<a class="nav-link" role="button" href="{{ route('writer.register') }}">Sign up as Writer</a>	
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link" role="button" href="{{ route('register') }}">Sign up as Student</a>	
								</li>
								@else
								<li class="nav-item dropdown">
									<a class="nav-link" role="button" href="/assignment/edit/0">Post Assignment</a>	
								</li>
								@endguest
								<li class="nav-item dropdown">
									<a class="nav-link" role="button" href="/how-it-works">How it works</a>	
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link" role="button" href="/blog">Top Writers</a>	
								</li>
								<li class="nav-item dropdown">
										<a class="nav-link" role="button" href="/blog">Contact us</a>	
									</li>
								
								
							</ul>
						
						</div>
					</nav>
				</div>
				<div class="col-sm-12 col-md-2 col-lg-2 order-sm-2 order-1 header-notification">
					<nav class="navbar navbar-expand-lg navbar-light bg-light">
						<ul class="navbar-nav ml-auto ymp-right">
								
							@guest
							<li class="nav-item">
									<a class="nav-link" href="{{ route('login') }}" role="button" aria-expanded="false">Login</a>
							</li>
							
							@else
							<li class="menu-bar dropdown dropdown-user">
									<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<img src="/img/profile-img.jpg" alt="">
											<span>Hi {{Auth::user()->name}}</span>
									</a>
									<ul class="dropdown-menu">
											<li class="nav-item dropdown"><a class="dropdown-item" href="/{{Auth::user()->user_type == 1 ? 'student' : 'writer'}}/dashboard">My Dash board</a></li>
											<li><a class="dropdown-item" href="/message/{{Auth::user()->id}}">Message</a></li>
											
											<li>
												<a class="dropdown-item" href="{{ route('logout') }}"
													onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
															{{ __('Logout') }}
													</a>

													<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
															@csrf
													</form>
											</li>
                                 
										</ul>
                </li>
                            @endguest   
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>
	<!-- Header End -->

	
	<!-- Modal Message -->
	<section class="modals">
		<div class="container">
			<div class="modal fade" id="unread-messages" role="dialog" tabindex="-1" aria-hidden="true">
			    <div class="modal-dialog">
			      <div class="modal-content unread-messages"> 
			        <div class="modal-body">
				    	<div class="chatting-page">
				    		<div class="chat-freelancers">
							<div class="users">
								<ul>
									<li class="active">
										<div class="user-img">
											<img src="/img/chat/user-1.jpg" alt="">
											<span class="online-icon"><i class="icofont icofont-ui-press"></i></span>
										</div>
										<div class="user-details">
											<p><a href="#">Amazingsoftware</a></p>
											<p><a href="#" class="project-name">Multi Vendor Website</a></p>
										</div>
									</li>
									<li class="active">
										<div class="user-img">
											<img src="/img/chat/user-2.jpg" alt="">
											<span class="online-icon"><i class="icofont icofont-ui-press"></i></span>
										</div>
										<div class="user-details">
											<p><a href="#">John65</a></p>
											<p><a href="#" class="project-name">Write Some Software</a></p>
										</div>
									</li>
									<li class="active">
										<div class="user-img">
											<img src="/img/chat/user-3.jpg" alt="">
											<span class="online-icon"><i class="icofont icofont-ui-press"></i></span>
										</div>
										<div class="user-details">
											<p><a href="#">BabyGirl</a></p>
											<p><a href="#" class="project-name">Create Powerpoint Templete</a></p>
										</div>
									</li>
									<li class="active">
										<div class="user-img">
											<img src="/img/chat/user-4.jpg" alt="">
											<span class="online-icon"><i class="icofont icofont-ui-press"></i></span>
										</div>
										<div class="user-details">
											<p><a href="#">MarketingWizard</a></p>
											<p><a href="#" class="project-name">Write code get google drive</a></p>
										</div>
									</li>
									<li class="active">
										<div class="user-img">
											<img src="/img/chat/user-5.jpg" alt="">
											<span class="online-icon"><i class="icofont icofont-ui-press"></i></span>
										</div>
										<div class="user-details">
											<p><a href="#">Jenelia</a></p>
											<p><a href="#" class="project-name">Google Write Code</a></p>
										</div>
									</li>
								</ul>
							</div>
						</div>
				    	</div>
			    	</div>  
			    </div>
  			</div>
		</div>
	</div>
	</section>
	<!-- Modals End -->
	
    <!-- Main -->
    <section id="main-content">
        <div id="app">
            @yield('content')
        </div>

            
       
    </section>        
    <!-- End main -->
    

	<!-- Footer Start -->
	<footer id="footer">
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-3 col-lg-3">
						<h4 class="widget-title">About Us</h4>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
					</div>
					<div class="col-sm-12 col-md-3 col-lg-3">
						<h4 class="widget-title">Quick Links</h4>
						<ul>
							<li><a href="#">Success stories</a></li>
							<li><a href="#">Take the first Step</a></li>
							<li><a href="#">Get started in minutes</a></li>
							<li><a href="#">Featured on</a></li>
							<li><a href="#">Top 5 freelancers</a></li>
						</ul>
					</div>
					<div class="col-sm-12 col-md-3 col-lg-3">
						<h4 class="widget-title">Support</h4>
						<ul>
							<li><a href="#">Live chat</a></li>
							<li><a href="#">Contact Us</a></li>
							<li><a href="#">Support HQ</a></li>
							<li><a href="#">Trust & Safety</a></li>
							<li><a href="#">Submit a Ticket</a></li>
						</ul>
					</div>
					<div class="col-sm-12 col-md-3 col-lg-3">
						<h4 class="widget-title">Get In Touch</h4>
						<div class="contact">
							<ul>
								<li>
									<i class="icofont icofont-iphone"></i>
									<a href="tel:+8801717722179">+880 1717 722179</a>
								</li>
								<li>
									<i class="icofont icofont-send-mail"></i>
									<a href="mailto:support@thememom.com">support@thememom.com</a>
								</li>
							</ul>
						</div>
						<div class="footer-inline">
							<ul class="social-icons">
								<li><a href="#"><i class="icofont icofont-social-facebook"></i></a></li>
								<li><a href="#"><i class="icofont icofont-social-skype"></i></a></li>
								<li><a href="#"><i class="icofont icofont-social-twitter"></i></a></li>
								<li><a href="#"><i class="icofont icofont-brand-linkedin"></i></a></li>
								<li><a href="#"><i class="icofont icofont-youtube-play"></i></a></li>
								<li><a href="#"><i class="icofont icofont-social-tumblr"></i></a></li>
								<li><a href="#"><i class="icofont icofont-social-pinterest"></i></a></li>
							</ul>
							<ul class="application-store">
								<li><a href="#"><img src="/img/store/app-store.png" alt=""></a></li>
								<li><a href="#"><img src="/img/store/play-store.png" alt=""></a></li>
							</ul>
						</div>

					</div>
				</div>
			</div>		
		</div>
		<div id="copyright">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-12 col-lg-12">
						<p class="copyright">© 2017 <a href="#">Yes Market Place</a> International Limited | Developed by <a href="https://thememom.com" title="ThemeMom" target="_blank">ThemeMom</a> </p>
					</div>
				</div>
			</div>		
		</div>
	</footer>
	<!-- End -->

<script src="{{ asset('js/tether.min.js') }}" ></script>
<script src="{{ asset('js/popper.min.js') }}" ></script>

<script src="{{ asset('js/bootstrap.min.js') }}" ></script>






@yield('script')



</body>
</html>