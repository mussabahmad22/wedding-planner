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
            <div class="mneu-search-col"><a href="planner-guest-list.html" class="mneu-filter-bx color1"><span><img alt="" src="{{asset('/assets/home/images/icon/icon2/icon3.png')}}"></span><h6 class="title">Guestlists</h6></a></div>
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
                                <a href="{{route('register')}}" class="btn purple gradient radius-sm m-l10"><span>Sign Up</span> <i class="la la-user-plus"></i></a>
                                <a href="{{route('login')}}" class="btn green gradient radius-sm m-l10"><span>login</span> <i class="la la-sign-in"></i></a>
                                <a href="{{route('dashboard')}}" class="btn green gradient radius-sm m-l10"><span>Dashboard</span> <i class="la la-sign-in"></i></a>
                        </div>
                    </div>
                    <!-- main nav -->
                    <div class="header-nav navbar-collapse collapse justify-content-end" id="navbarNavDropdown">
						<div class="logo-header mostion">
							<a href="index.html"><img src="/assets/home/images/logo.png" alt=""></a>
						</div>
                        <ul class="nav navbar-nav">              
							<li class="has-mega-menu active"><a href="#">Home</a></li>
							<li class="has-mega-menu"><a href="{{url('pricing')}}">Pricing & Plans</a></li>
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