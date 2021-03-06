@extends('layouts/footer')
<html>
<head><title>
	Kolsa Restaurant : Best Place to Enjoy the Food with Family & Friends
</title><meta name="viewport" content="width=device-width, initial-scale=1" /><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><meta name="keywords" content="Tasty Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet" /> 
<link href="//fonts.googleapis.com/css?family=Francois+One" rel="stylesheet" type="text/css" /><link href="//fonts.googleapis.com/css?family=Cinzel+Decorative:400,700,900" rel="stylesheet" type="text/css" /><link href="//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300" rel="stylesheet" type="text/css" />
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/SmoothScroll.min.js"></script>
</head>
	<script src="js/jquery.vide.min.js"></script>
	<div data-vide-bg="video/cook">
		<!-- banner -->
		<div class="banner">
			<div class="container">
				<div class="header">
					<div class="logo">
						<h1><a href="/main" style="color:red">Kolsa Restaurant</a></h1>
					</div>
					<div class="top-nav">
						<nav class="navbar navbar-default">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">Menu						
								</button>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav">
                            <li><a href="/main">Home</a></li>
                            <li><a href="/aboutus">About</a></li>
					<li><a href="/menu">Menu</a></li>
					<li><a href="/todaysspecial">Todays Special</a></li>
                    <li><a href="/testimonials">Testimonial</a></li>
                    <li><a href="/feedback">Feedback</a></li>
					<li><a href="/contactus">Contact Us</a></li>
				
								@if (Route::has('login'))
                    @if (Auth::check())
                    @else
                      <li><a href="{{ url('/register') }}">Sign Up</a></li>
                    @endif
           		@endif
				@if (Route::has('login'))
                    @if (Auth::check())
                     <li><a href="{{ url('/logout') }}">Logout</a></li>
                    @else
                      <li><a href="{{ url('/login') }}">Login</a></li>
                    @endif
           		@endif
                   </ul>	
							</div>	
						</nav>		
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="banner-info">
					<h2>The Best Desi Restaurant in Mumbai </h2>
					<p> Visit once to Experience Authentic Food .</p>
				</div>
				<div class="banner-grads">
					<div class="col-md-4 banner-grad">
						<div class="banner-grad-img">
							<img src="images/b1.jpg" alt="" />
							<h4>Chicken Tandoor</h4>
						</div>
					</div>
					<div class="col-md-4 banner-grad">
						<div class="banner-grad-img">
							<img src="images/b2.jpg" alt="" />
							<h4>Achari Aloo</h4>
						</div>
					</div>
					<div class="col-md-4 banner-grad">
						<div class="banner-grad-img">
							<img src="images/b3.jpg" alt="" />
							<h4>Chicken Moglai</h4>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<!-- //banner -->
	</div>


    </div>
    </form>
</body>
</html>