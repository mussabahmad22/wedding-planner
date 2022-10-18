<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="description" content="Wedding Manager" />
	<meta property="og:title" content="Wedding Manager" />
	<meta property="og:description" content="Wedding Manager" />
	<meta property="og:image" content="" />
	<meta name="format-detection" content="telephone=no">
	
	<!-- FAVICONS ICON -->
	<link rel="icon" href="images/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="/assets/home/images/favicon.png" />
	
	<!-- PAGE TITLE HERE -->
	<title>Wedding Planner</title>
	
	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!--[if lt IE 9]>
	<script src="js/html5shiv.min.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	
	<!-- STYLESHEETS -->
	<link rel="stylesheet" type="text/css" href="/assets/home/css/plugin.css">
	<link rel="stylesheet" type="text/css" href="/assets/home/css/style.css">
	<link rel="stylesheet" type="text/css" href="/assets/home/css/template.css">
	<link rel="stylesheet" type="text/css" href="/assets/home/css/responsive-min.css">
	<link class="skin" rel="stylesheet" type="text/css" href="/assets/home/css/skin-1.css">	
</head>
<body id="bg">
<div class="fullmenu">
    <div class="fullhead">
        <div class="demo-close la la-times"></div>
        <ul class="nav menu-nav-link" id="pills-tab" role="tablist">
            <li class="nav-item"><a class="nav-link active" id="wedding-tab" data-toggle="pill" href="#wedding" role="tab" aria-controls="wedding" aria-selected="true">Wedding Directory</a></li>
            <li class="nav-item"><a class="nav-link" id="bride-tab" data-toggle="pill" href="#bride" role="tab" aria-controls="bride" aria-selected="false">Bride Account</a></li>
            <li class="nav-item"><a class="nav-link" id="vender-tab" data-toggle="pill" href="#vender" role="tab" aria-controls="vender" aria-selected="false">Vender Account</a></li>
        </ul>
    </div>
    <div class="fullfooter">
        <div class="mneu-search-type">
            <div class="mneu-search-col"><a href="planner-guest-list.html" class="mneu-filter-bx color1"><span><img alt="" src="/assets/home/images/icon/icon2/icon3.png"></span><h6 class="title">Guestlists</h6></a></div>
            <div class="mneu-search-col"><a href="planner-checklist-select-date.html" class="mneu-filter-bx color2"><span><img alt="" src="/assets/home/images/icon/icon2/icon2.png"></span><h6 class="title">Checklist</h6></a></div>
            <div class="mneu-search-col"><a href="" class="mneu-filter-bx color3"><span><img alt="" src="/assets/home/images/icon/icon2/icon5.png"></span><h6 class="title">Budget</h6></a></div>
            <div class="mneu-search-col"><a href="planner-shortlist.html" class="mneu-filter-bx color4"><span><img alt="" src="/assets/home/images/icon/icon2/icon6.png"></span><h6 class="title">Shortlist</h6></a></div>
        </div>
    </div>
</div>
<!--<div id="loading-area"></div> -->
<div class="page-wraper">
	<!-- header -->
    <header class="site-header header-transparent mo-left">
		<!-- main header -->
        <div class="sticky-header main-bar-wraper navbar-expand-lg">
            <div class="main-bar clearfix ">
                <div class="container-fluid clearfix">
                    <!-- website logo -->
                    <div class="logo-header mostion">
						<a class="header-logo1" href="index.html"><img src="/assets/home/images/logo-white-1.png" alt=""></a>
						<a class="header-logo2" href="index.html"><img src="/assets/home/images/logo-black-1.png" alt=""></a>
					</div>
                    <!-- nav toggle button -->
                    <button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span></span>
						<span></span>
						<span></span>
					</button>
                    <div class="extra-nav">
                        <div class="extra-cell home-sign">
                            <!-- <a href="index-business.html" class="btn gradient radius-sm"><span>Business login</span><i class="la la-industry"></i></a> -->
                            <!-- <a href="javascript:void(0);" class="btn purple gradient radius-sm m-l10" data-toggle="modal" data-target="#signup"><span>Sign Up</span> <i class="la la-user-plus"></i></a>
                            <a href="javascript:void(0);" class="btn green gradient radius-sm m-l10" data-toggle="modal" data-target="#login"><span>login</span> <i class="la la-sign-in"></i></a> -->
                            @if(!auth()->check())
                                <a href="{{route('register')}}" class="btn purple gradient radius-sm m-l10"><span>Sign Up</span> <i class="la la-user-plus"></i></a>

                                <a href="{{route('login')}}" class="btn green gradient radius-sm m-l10"><span>login</span> <i class="la la-sign-in"></i></a>
                            @else
                                <a href="{{route('dashboard')}}" class="btn green gradient radius-sm m-l10"><span>Dashboard</span> <i class="la la-sign-in"></i></a>
                            @endif
                        </div>
                    </div>
                    <!-- main nav -->
                    <div class="header-nav navbar-collapse collapse justify-content-end" id="navbarNavDropdown">
						<div class="logo-header mostion">
							<a href="index.html"><img src="/assets/home/images/logo.png" alt=""></a>
						</div>
                        <ul class="nav navbar-nav">              
							<li class="has-mega-menu active"><a href="#">Home</a></li>
							<li class="has-mega-menu"><a href="{{url('/packagesdetail')}}">Pricing & Plans</a></li>
							<li class="has-mega-menu"><a href="#">Wedding Suppliers </a></li>
							<li class="has-mega-menu"><a href="#">Ideas & Inspiration </a></li>
						</ul>	
						<div class="nav-footer">
							<ul class="nav-social">
								<li><a href="#" class="fa fa-facebook"></a></li>
								<li><a href="#" class="fa fa-google"></a></li>
								<li><a href="#" class="fa fa-twitter"></a></li>
							</ul>
							<p>© 2020 Wedding Manager Ltd</p>
						</div>	
                    </div>                        
                </div>
            </div>
        </div>
        <!-- main header END -->
    </header>
    <!-- header END -->
	<!-- Modal -->
	<div class="modal fade my-account-bx" id="signup" tabindex="-1" role="dialog" aria-labelledby="signup" aria-hidden="true">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<h2 class="title">Sign Up Your Account</h2>
				<form action="my-account.html">
					<div class="form-group">
						<input type="email" class="form-control" placeholder="Email Address">
					</div>
					<div class="form-group">
						<input type="password" class="form-control" placeholder="Password">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-block gradient">Sign up</button>
					</div>
					<div class="form-group">
						<a href="my-account.html" class="btn facebook btn-block"><i class="fa fa-facebook m-r10"></i>Continue with Facebook</a>
					</div>
					<div class="form-group">
						<a href="my-account.html" class="btn google-plus btn-block"><i class="fa fa-google m-r10"></i>Continue with Google</a>
					</div>
					<div class="sign-text">
						<span class="">"Already have a Wedding Manager Account?" <a href="#">LOGIN</a></span>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="modal fade my-account-bx" id="login" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="true">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<h2 class="title">Login Your Account</h2>
				<form action="my-account.html">
					<div class="form-group">
						<input type="email" class="form-control" placeholder="Email Address">
					</div>
					<div class="form-group">
						<input type="password" class="form-control" placeholder="Password">
						<div class="reset-password">
							<a class="btn-link collapsed" data-toggle="collapse" href="#reset-password" role="button" aria-expanded="false" aria-controls="reset-password">Reset password?</a>
						</div>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-block gradient">Login</button>
					</div>
					<!-- <div class="form-group">
						<a href="my-account.html" class="btn facebook btn-block"><i class="fa fa-facebook m-r10"></i> Log in with Facebook</a>
					</div>
					<div class="form-group">
						<a href="my-account.html" class="btn google-plus btn-block"><i class="fa fa-google m-r10"></i>Log in with Google</a>
					</div>
					<div class="sign-text">
						<span class="">Don't have a Wedding Manager account? <a href="#">Sign up</a></span>
					</div> -->
				</form>
			</div>
			<div class="modal-content collapse reset-password" id="reset-password">
				<h2 class="title">Reset password?</h2>
				<form>
					<div class="form-group password-icon-bx">
						<i class="fa fa-lock"></i>
						<p>Enter your email address associated with your account, and we'll email you a link to reset your password...</p>
					</div>
					<div class="form-group">
						<input type="email" class="form-control" placeholder="Enter email address">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-block gradient">Send reset link</button>
					</div>
					<div class="sign-text">
						<span class=""><a data-toggle="collapse" href="#reset-password" role="button" aria-expanded="false" aria-controls="reset-password">Back</a></span>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Modal End -->
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- Section Banner -->
		<div class="dlab-bnr-inr text-center home-banner dlab-bnr-inr-sm overlay-black-dark" id="app-banner" style="background-image:url(/assets/home/images/banner/bnr1.jpg); background-size: cover;">
            <div class="container">
                <div class="dlab-bnr-inr-entry align-m">
					<div class="bnr-content">
						<div class="icon-bx">
							<img src="/assets/home/images/icon/icon3/icon1.png" alt="">
						</div>
						<h2 class="title">Your Free Wedding Manager App</h2>
						<a href="#" class="btn btn-md gradient radius-xl" data-toggle="modal" data-target="#login"><img src="/assets/home/images/icon/icon3/icon2.png" class="m-r5"  alt=""> Plan Your Wedding</a>
					</div>
				</div>
            </div>
        </div>
		<!-- Section Banner END -->
		<!-- Manager Tools -->
		<div class="section-full bg-gray content-inner" style="background-image: url(/assets/home/images/background/bg1.png); background-size: cover; background-position: right bottom;">
			<div class="container">
				<div class="section-head text-center">
					<h2 class="box-title text-italic">Wedding Manager Tools</h2>
				</div>
				<div class="row">
					<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6  wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
						<div class="planning-tools style1 text-center m-b30">
							<div class="icon-bx">
								<img alt="" src="/assets/home/images/icon/icon2/icon3.png">
							</div>
							<div class="content-bx">
								<h5 class="title text-black">Guestlists</h5>
								<p>Easily track invitations, RSVPs, and guest info all in one place.</p>
								<a href="planner-guest-list.html" class="btn gradient radius-xl">Read More</a>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.4s">
						<div class="planning-tools style1 text-center m-b30">
							<div class="icon-bx">
								<img alt="" src="/assets/home/images/icon/icon2/icon4.png">
							</div>
							<div class="content-bx">
								<h5 class="title text-black">Checklist</h5>
								<p>Easily track invitations, RSVPs, and guest info all in one place.</p>
								<a href="planner-checklist-select-date.html" class="btn gradient radius-xl">Read More</a>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.6s">
						<div class="planning-tools style1 text-center m-b30">
							<div class="icon-bx">
								<img alt="" src="/assets/home/images/icon/icon2/icon5.png">
							</div>
							<div class="content-bx">
								<h5 class="title text-black">Budget</h5>
								<p>Easily track invitations, RSVPs, and guest info all in one place.</p>
								<a href="" class="btn gradient radius-xl">Read More</a>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.8s">
						<div class="planning-tools style1 text-center m-b30">
							<div class="icon-bx">
								<img alt="" src="/assets/home/images/icon/icon2/icon6.png">
							</div>
							<div class="content-bx">
								<h5 class="title text-black">Shortlist</h5>
								<p>Easily track invitations, RSVPs, and guest info all in one place.</p>
								<a href="planner-shortlist.html" class="btn gradient radius-xl">Read More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Manager Tools End -->
		<!-- Venue Search Box -->
		<div class="section-full bg-gray content-inner overlay-black-dark wow fadeIn" id="app-search" data-wow-duration="2s" data-wow-delay="0.3s" style="background-image: url(/assets/home/images/background/bg4.jpg); background-size: cover; background-position: right bottom;">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-head venue-search-title text-center">
							<h2 class="box-title text-italic">Search the UK`s favourite wedding suppliers by category, location or name</h2>
						</div>
					</div>
					<div class="col-lg-12">
						<!-- Search Filter -->
						<div class="search-filter style1">
							<div class="container">
								<form class="filter-form" action="">
									<div class="row sp10">
										<div class="col-lg-4 col-md-6 col-sm-6">
											<input type="text" class="form-control" placeholder="We’re looking for">
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6">
											<input type="text" class="form-control" placeholder="Near">
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6">
											<input type="text" class="form-control" placeholder="Or Called">
										</div>
										<div class="col-lg-2 col-md-6 col-sm-6 d-flex">
											<button class="btn btn-block radius-xl text-uppercase"> Search</button>
										</div>
									</div>
								</form>
							</div>
						</div>
						<!-- Search Filter END -->
					</div>
				</div>
				<div class="section-head venue-search-list-title text-center">
					<div class="separate gradient"></div>
					<h2 class="box-title text-gradient">Popular venue searches</h2>
				</div>
				<div class="row venue-search-list">
					<div class="col-lg-3 col-md-3 col-6">
						<ul>
							<li><a href="">Essex</a></li>
							<li><a href="">Kent</a></li>
							<li><a href="">Surrey</a></li>
							<li><a href="">Hampshire</a></li>
						</ul>
					</div>				
					<div class="col-lg-3 col-md-3 col-6">
						<ul>
							<li><a href="">Hertfordshire</a></li>
							<li><a href="">Yorkshire</a></li>
							<li><a href="">Buckinghamshire</a></li>
							<li><a href="">Lancashire</a></li>
						</ul>
					</div>				
					<div class="col-lg-3 col-md-3 col-6">
						<ul>
							<li><a href="">West Midlands</a></li>
							<li><a href="">Leicestershire</a></li>
							<li><a href="">Northamtonshire</a></li>
							<li><a href="">Oxfordshire</a></li>
						</ul>
					</div>				
					<div class="col-lg-3 col-md-3 col-6">
						<ul>
							<li><a href="">London</a></li>
							<li><a href="">Scotland</a></li>
							<li><a href="">Northern Ireland</a></li>
							<li><a href="">Wales</a></li>
						</ul>
					</div>				
				</div>
			</div>
		</div>
		<!-- Venue Search End -->
		<!-- Testimonials Box -->
		<div class="section-full bg-gray content-inner-2 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.3s" style="background-image: url(/assets/home/images/background/bg5.jpg); background-size: cover; background-position: right bottom;">
			<div class="container-fluid testimonials-section">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-head text-center">
							<h2 class="box-title text-black text-italic"> The easiest way to plan <br/>your wedding</h2>
						</div>
					</div>
				</div>
				<div class="testimonials-carousel owl-carousel owl-theme">
					<div class="testimonials-box">
						<p>When I first started my wedding manager, I had no idea where to begin! But by using Wedding Manager I have been able to search for all of my suppliers, as well as organise my guestlist, checklist and budget. I now feel so much more relaxed about the wedding!</p>
						<h5 class="testimonials-name">- Alexia L. & Sam</h5>
						<div class="quote">
							<img src="/assets/home/images/quote.png" alt="">
						</div>
					</div>				
					<div class="testimonials-box">
						<p>When I first started my wedding manager, I had no idea where to begin! But by using Wedding Manager I have been able to search for all of my suppliers, as well as organise my guestlist, checklist and budget. I now feel so much more relaxed about the wedding!</p>
						<h5 class="testimonials-name">- Alexia L. & Sam</h5>
						<div class="quote">
							<img src="/assets/home/images/quote.png" alt="">
						</div>
					</div>				
					<div class="testimonials-box">
						<p>When I first started my wedding manager, I had no idea where to begin! But by using Wedding Manager I have been able to search for all of my suppliers, as well as organise my guestlist, checklist and budget. I now feel so much more relaxed about the wedding!</p>
						<h5 class="testimonials-name">- Alexia L. & Sam</h5>
						<div class="quote">
							<img src="/assets/home/images/quote.png" alt="">
						</div>
					</div>				
				</div>
			</div>
		</div>
		<!-- Testimonials End -->
		<!-- Insightful Inspiration -->
		<div class="section-full bg-gray content-inner-2" style="background-image: url(/assets/home/images/background/bg3.jpg); background-size: cover; background-position: right bottom;">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 d-flex wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.4s">
						<div class="inspiration-box align-self-center">
							<h2 class="title text-black">Insightful inspiration</h2>
							<p>Whether you're a fan of dreamy white weddings or care-free bohemian celebrations, you'll find tips, tricks, and inspiration to guide you through every stage of your wedding manager. Who better to guide you than some of our illustrious experts like Mary Berry and Bobbi Brown?</p>
							<a href="" class="btn gradient btn-md radius-xl">Discover endless inspiration</a>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 d-flex wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.8s">
						<div class="align-self-center">
							<img alt="" src="/assets/home/images/pic4.png" class="out-img img-wave">
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Insightful Inspiration End -->
		<!-- Manager Tools 2 -->
		<div class="section-full bg-gray content-inner" style="background-image: url(/assets/home/images/background/bg1.png); background-size: cover; background-position: right bottom;">
			<div class="container">
				<div class="section-head text-center">
					<h2 class="box-title text-italic">Pick the plan that fits your needs</h2>
				</div>
				<div class="row">
					@foreach($packages as $package)
					<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6  wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
						<div class="planning-tools style1 text-center m-b30">
							<div class="content-bx">
								<p>{{ $package->event_title }}</p>
								<p>{{ $package->event_details }}</p>
								<div class="icon-bx">
									<img alt="" src="/assets/home/images/icon/icon2/icon5.png">
								</div>
							 	<h5 class="title text-black">${{ $package->amount }}</h5>
								<p>{{ $package->amount_desc }}</p>
								<p> Save ${{ $package->save_amount }}</p>
								<p> {{ $package->saving_amount_details }}</p>
								<a href="{{route('packagesdetail')}}" class="btn gradient radius-xl">Buy Now</a>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
		<!-- Manager Tools 2 End -->
		<!-- Expert Advice -->
		<div class="section-full bg-white content-inner expert-advice" style="background-image:url(/assets/home/images/background/bg6.jpg); background-size: cover; background-position: left bottom;">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-12 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.3s">
						<div class="section-head">
							<h2 class="box-title text-gradient">Wedding Ideas and Expert Advice</h2>
							<p>Get inspired with creative ideas, expert advice and amazing real weddings</p>
							<div class="separate gradient"></div>
						</div>
						<ul class="expert-advice-list">
							<li>Expert Tips from a trusted team of pros...serious professionals like Bobbi Brown, Mary Berry, Jimmy Choo, Bodyism, La Perla, Harrods and more!</li>
							<li>Real Weddings to help you get some ideas (and related supplier links) for your own wedding</li>
							<li>‘How To’ Tips as your wedding guide so you feel confident in picking suppliers and choosing wedding details</li>
						</ul>
					</div>
					<div class="col-lg-6 col-md-12 wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.6s">
						<img src="/assets/home/images/pic2.png" class="img-wave" alt="">
					</div>
				</div>
			</div>
		</div>
		<!-- Expert Advice End -->
		<!-- Call To Action -->
		<div class="section-full content-inner-2 overlay-black-dark bg-img-fix" id="app-today" style="background-image: url(/assets/home/images/background/bg1.jpg); background-size: cover;">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<a href="javascript:void(0)" class="btn btn-md gradient radius-xl">Start today, it's free</a>
					</div>
				</div>
			</div>
		</div>
		<!-- Call To Action End -->
		<!-- Weddings Services Box End -->
		<div class="section-full bg-gray content-inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-6 col-6 m-b30 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
						<div class="wedding-services">
							<div class="icon-bx">
								<img src="/assets/home/images/icon/icon2/icon1.png" alt="">
							</div>
							<div class="content-bx">
								<a class="title" href="">Search</a>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-6 m-b30 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.4s">
						<div class="wedding-services">
							<div class="icon-bx">
								<img src="/assets/home/images/icon/icon2/icon2.png" alt="">
							</div>
							<div class="content-bx">
								<a class="title" href="wedding-planning-tools.html">Manager Tools</a>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-6 m-b30 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.6s">
						<div class="wedding-services">
							<div class="icon-bx">
								<img src="/assets/home/images/icon/icon2/icon3.png" alt="">
							</div>
							<div class="content-bx">
								<a class="title" href="planner-guest-list.html">Guestlist</a>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-6 m-b30 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.8s">
						<div class="wedding-services">
							<div class="icon-bx">
								<img src="/assets/home/images/icon/icon2/icon4.png" alt="">
							</div>
							<div class="content-bx">
								<a class="title" href="planner-checklist-select-date.html">Checklist</a>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-6 m-b30 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
						<div class="wedding-services">
							<div class="icon-bx">
								<img src="/assets/home/images/icon/icon2/icon5.png" alt="">
							</div>
							<div class="content-bx">
								<a class="title" href="">Budget</a>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-6 m-b30 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.4s">
						<div class="wedding-services">
							<div class="icon-bx">
								<img src="/assets/home/images/icon/icon2/icon6.png" alt="">
							</div>
							<div class="content-bx">
								<a class="title" href="planner-shortlist.html">Shortlist</a>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-6 m-b30 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.6s">
						<div class="wedding-services">
							<div class="icon-bx">
								<img src="/assets/home/images/icon/icon2/icon7.png" alt="">
							</div>
							<div class="content-bx">
								<a class="title" href="planner-advice.html">Advice</a>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-6 m-b30 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.8s">
						<div class="wedding-services">
							<div class="icon-bx">
								<img src="/assets/home/images/icon/icon2/icon8.png" alt="">
							</div>
							<div class="content-bx">
								<a class="title" href="wedding-gift-lists.html">Gift Lists</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Manager Tools End -->
    </div>
    <!-- Content END-->
	<!-- Footer -->
    <footer class="site-footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
					<div class="col-lg-3 col-md-3 col-sm-6 col-6">
                        <div class="widget widget-list">
                            <h5 class="widget-title">About Us</h5>
                            <ul>
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="pressandmedia.html">Press And Media</a></li>
                                <li><a href="javascript:void(0);"><span class="__cf_email__">email@gmail.com</span></a></li>
							</ul>
                        </div>
                    </div>
					<div class="col-lg-3 col-md-3 col-sm-6 col-6">
                        <div class="widget widget-list">
                            <h5 class="widget-title">For Couples</h5>
                            <ul>
                                <li><a href="">Manager Tools</a></li>
                                <li><a href="">Wedding Suppliers</a></li>
                                <li><a href="">Ideas Inspiration</a></li>
                                <li><a href="">Wedding Gift Lists</a></li>
							</ul>
                        </div>
                    </div>
					<div class="col-lg-3 col-md-3 col-sm-6  col-6">
                        <div class="widget widget-list">
                            <h5 class="widget-title">For Business</h5>
                            <ul>
                                <li><a href="index-business.html">Business</a></li>
							</ul>
                        </div>
                    </div>
					<div class="col-lg-3 col-md-3 col-sm-6 col-6">
                        <div class="widget widget-app">
                            <h5 class="widget-title">GET THE APP</h5>
                        </div>
                    </div>
				</div>
            </div>
        </div>
		<div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
						<span class="copyright"> © Copyright 2020 Wedding Manager</span> 
					</div>
					<div class="col-lg-6">
						<ul class="footer-list">
							<li><a href="cookie-policy.html">Cookie Policy</a></li>
							<li><a href="privacy-policy.html">Privacy Policy</a></li>
							<li><a href="terms.html">Terms & Conditions</a></li>
						</ul> 
					</div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer END-->
    <button class="scroltop fa fa-chevron-up" ></button>
</div>
<!-- JAVASCRIPT FILES ========================================= -->
<script src="/assets/home/js/combining.js"></script><!-- SORTCODE FUCTIONS  -->
<script src="/assets/home/js/custom.min.js"></script><!-- CUSTOM FUCTIONS  -->
<script src="/assets/home/js/dz.ajax.js"></script><!-- CONTACT JS  -->
</body>
</html>