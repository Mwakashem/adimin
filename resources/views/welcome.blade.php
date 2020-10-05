<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="advanced custom search, agency, agent, business, clean, corporate, directory, google maps, homes, idx agent, listing properties, membership packages, property, real broker, real estate, real estate agent, real estate agency, realtor">
<meta name="description" content="FindHouse - Real Estate HTML Template">
<meta name="CreativeLayers" content="ATFN">
<!-- css file -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<!-- Responsive stylesheet -->
<link rel="stylesheet" href="css/responsive.css">
<!-- Title -->
<title>Property Listing System - for sale</title>
<!-- Favicon -->
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" />

    <style>
/** Home 8 Carousel */
.bs_carousel_bg {
  -webkit-background-size: cover;
  background-size: cover;
  bottom: 0;
  left: 0;
  position: absolute;
  right: 0;
  top: 0;
}
.bs_carousel .bs_carousel_bg:after {
  background-color: rgba(29, 41, 62,0.6);
  bottom: 0;
  content: " ";
  display: block;
  left: 0;
  position: absolute;
  right: 0;
  top: 0;
  z-index: 1;
}
.bs_carousel,
.bs_carousel .carousel-inner,
.bs_carousel .carousel-item {
  height: 100%;
}
.bs_carousel_prices {
  position: absolute;
  width: 50%;
  bottom: 15px;
  left: 0;
  height: 90px;
  z-index: 2;
  transform: scale(0, 1);
  -webkit-transition: transform .6s ease-in-out;
  -o-transition: transform .6s ease-in-out;
  transition: transform .6s ease-in-out;
  transform-origin: top right;
}
.bs_carousel_prices.pprty-price-active {
  transform: scale(1, 1);
}
.bs_carousel_prices .carousel-item {
  background-color: #000000;
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
}
.bs_carousel_prices .carousel-item .pprty-price {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  color: #ffffff;
  font-size: 28px;
  line-height: 28px;
  height: 28px;
  overflow: hidden;
  left: calc((100% * 2 - 1140px) / 2 + 15px);
}
.bs_carousel_prices .carousel-item .pprty-price > span {
  display: block;
  transform: translateY(100%);
  -webkit-transition: all .2s ease-in-out;
  -o-transition: all .2s ease-in-out;
  transition: all .2s ease-in-out;
}
.bs_carousel_prices.pprty-price-active .carousel-item.active .pprty-price > span {
  transform: translateY(0);
}
.bs_carousel_prices.pprty-price-active.pprty-first-time .carousel-item.active .pprty-price > span {
  -webkit-transition-delay: .6s;
  transition-delay: .6s;
}
.bs_carousel_prices .property-carousel-ticker {
  position: absolute;
  left: 210px;
  top: 50%;
  color: #ffffff;
  white-space: nowrap;
  font-weight: 700;
  opacity: 0;
  -webkit-transition: opacity .2s ease-in-out;
  -o-transition: opacity .2s ease-in-out;
  transition: opacity .2s ease-in-out;
}
.bs_carousel_prices.pprty-price-active .property-carousel-ticker {
  opacity: 1;
}
.bs_carousel_prices.pprty-price-active.pprty-first-time .property-carousel-ticker {
  -webkit-transition-delay: .6s;
  transition-delay: .6s;
}
.bs_carousel_prices .property-carousel-ticker > div {
  display: inline-block;
  line-height: 25px;
  vertical-align: bottom;
}
.bs_carousel_prices .property-carousel-ticker .property-carousel-ticker-counter {
  overflow: hidden;
  height: 24px;
}
.bs_carousel_prices .property-carousel-ticker .property-carousel-ticker-counter > span {
  display: block;
  font-size: 24px;
  -webkit-transition: all .4s ease-in-out;
  -o-transition: all .4s ease-in-out;
  transition: all .4s ease-in-out;
}
.bs_carousel_prices .carousel-item:after {
  content: "";
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  background-color: rgba(255,255,255,0.1);
  transform: scale(0, 1);
  transform-origin: 0% 50%;
  -webkit-transition: all 6.4s linear;
  -o-transition: all 6.4s linear;
  transition: all 6.4s linear;
}
.bs_carousel_prices.pprty-price-active .carousel-item.active:after {
  transform: scale(1, 1);
}
.bs_carousel_prices.pprty-price-active.pprty-first-time .carousel-item.active:after {
  -webkit-transition-delay: .6s;
  transition-delay: .6s;
}
.bs_carousel .property-carousel-controls {
  background-color: #ffffff;
  border-radius: 0 8px 0 0;
  bottom: 0;
  height: 90px;
  left: 0;
  line-height: 90px;
  overflow: hidden;
  position: absolute;
  text-align: center;
  width: 180px;
  z-index: 99;
}
.bs_carousel .property-carousel-controls a {
  background-color: #ffffff;
  color: #006c70;
  cursor: pointer;
  display: block;
  height: 90px;
  position: absolute;
  width: 90px;
}
.bs_carousel .property-carousel-controls a:hover{
  color: #ff5a5f;
}
.bs_carousel .property-carousel-controls a span{
  font-size: 23px;
}
.bs_carousel .property-carousel-controls a.property-carousel-control-prev {
  top: 0;
  left: 0;
}
.bs_carousel .property-carousel-controls a.property-carousel-control-next {
  top: 0;
  right: 0;
}
@keyframes arrowPCLeft { 
    0% {
        -webkit-transform: translate(0, -50%);
        transform: translate(0, -50%);
    }
    25% {
        opacity: 0;
        -webkit-transform: translate(-30%, -50%);
        transform: translate(-30%, -50%);
    }
    50% {
        opacity: 0;
        -webkit-transform: translate(20%, -50%);
        transform: translate(20%, -50%);
    }
    100% {
        opacity: 1;
        -webkit-transform: translate(0, -50%);
        transform: translate(0, -50%);
    }
}
@keyframes arrowPCRight { 
    0% {
        -webkit-transform: translate(0, -50%);
        transform: translate(0, -50%);
    }
    25% {
        opacity: 0;
        -webkit-transform: translate(30%, -50%);
        transform: translate(30%, -50%);
    }
    50% {
        opacity: 0;
        -webkit-transform: translate(-30%, -50%);
        transform: translate(-30%, -50%);
    }
    100% {
        opacity: 1;
        -webkit-transform: translate(0, -50%);
        transform: translate(0, -50%);
    }
}
.bs_carousel .property-carousel-controls a.property-carousel-control-prev:hover svg {
  -webkit-animation: arrowPCLeft 0.4s ease-in-out;
  -moz-animation: arrowPCLeft 0.4s ease-in-out;
  animation: arrowPCLeft 0.4s ease-in-out;
}
.bs_carousel .property-carousel-controls a.property-carousel-control-next:hover svg {
  -webkit-animation: arrowPCRight 0.4s ease-in-out;
  -moz-animation: arrowPCRight 0.4s ease-in-out;
  animation: arrowPCRight 0.4s ease-in-out;
}
.bs_carousel .carousel-item .bs-caption {
  color: #ffffff;
  left: 0;
  position: absolute;
  right: 0;
  top: 54%;
  transform: translateY(calc(-50% - 70px));
  z-index: 2;
}
.bs_carousel .main_title {
  color: #ffffff;
  font-family: "Nunito";
  font-size: 55px;
  font-weight: bold;
  line-height: 1.2;
  margin-bottom: 15px;
  margin-top: 120px;
  opacity: 0;
  -webkit-transform: translateY(20px);
  -moz-transform: translateY(20px);
  -o-transform: translateY(20px);
  transform: translateY(20px);
  -webkit-transition: all .6s ease-in-out;
  -moz-transition: all .6s ease-in-out;
  -o-transition: all .6s ease-in-out;
  transition: all .6s ease-in-out;
}
.bs_carousel .carousel-item.active .main_title {
  opacity: 1;
  transform: translateY(0);
}
.bs_carousel .parag {
  font-size: 18px;
  font-family: "Nunito";
  color: #ffffff;
  line-height: 1.2;
  margin-bottom: 0;
  opacity: 0;
  -webkit-transform: translateY(20px);
  -moz-transform: translateY(20px);
  -o-transform: translateY(20px);
  transform: translateY(20px);
  -webkit-transition: all .9s ease-in-out;
  -moz-transition: all .9s ease-in-out;
  -o-transition: all .9s ease-in-out;
  transition: all .9s ease-in-out;
}
.bs_carousel .carousel-item.active .parag {
  opacity: 1;
  transform: translateY(0);
}
</style>
</head>
<body>
<div class="wrapper">
	<div class="preloader"></div>

	<!-- Main Header Nav -->
	<header class="header-nav menu_style_home_one style2 navbar-scrolltofixed stricky main-menu">
		<div class="container-fluid p0">
		    <!-- Ace Responsive Menu -->
		    <nav>
		        <!-- Menu Toggle btn-->
		        <div class="menu-toggle">
		            <img class="nav_logo_img img-fluid" src="images/header-logo.png" alt="header-logo.png">
		            <button type="button" id="menu-btn">
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		            </button>
		        </div>
		        <a href="#" class="navbar_brand float-left dn-smd">
		            <!-- <img class="logo1 img-fluid" src="images/header-logo2.png" alt="header-logo.png">
		            <img class="logo2 img-fluid" src="images/header-logo2.png" alt="header-logo2.png"> -->
		            <span>Property Listing System</span>
		        </a>
		        <!-- Responsive Menu Structure-->
		        <!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
		        <ul id="respMenu" class="ace-responsive-menu text-left" data-menu-style="horizontal">
		            <li>
		                <a href="#"><span class="title">Home</span></a>
		            </li>
		            <li>
                    <a href="#"><span class="title">For Rent</span></a>
                    <!-- Level Two-->
                    <ul>
                        <li><a href="page-add-new-property.html">Residentials</a></li>
                        <li><a href="page-add-new-property.html">Office Space</a></li>
                        <li><a href="page-add-new-property.html">Land Plots</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><span class="title">For Sale</span></a>
                    <!-- Level Two-->
                    <ul>
                        <li><a href="page-add-new-property.html">Residentials</a></li>
                        <li><a href="page-add-new-property.html">Office Space</a></li>
                        <li><a href="page-add-new-property.html">Land Plots</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><span class="title">About Us</span></a>
                </li>
		            <li class="last">
		                <a href="page-contact.html"><span class="title">Contact</span></a>
		            </li>
	                <li class="list-inline-item add_listing home2 style2 float-right"><a href="#"><span class="flaticon-plus"></span><span class="dn-lg"> Create Listing</span></a></li>
                    @guest
	                <li class="list-inline-item list_s float-right">
	                	<a href="#" class="btn flaticon-user" data-toggle="modal" data-target=".bd-example-modal-lg">
                         <span class="dn-lg">Login/Register</span></a>
                    </li>
                    @else
                    <li class="user_setting">
						<div class="dropdown">
	                		<a class="btn dropdown-toggle" href="#" data-toggle="dropdown"><img class="rounded-circle" src="images/team/e1.png" alt="e1.png"> <span class="dn-1199">Ali Tufan</span></a>
						    <div class="dropdown-menu">
						    	<div class="user_set_header">
						    		<img class="float-left" src="images/team/e1.png" alt="e1.png">
							    	<p>{{ Auth::user()->name }} <br><span class="address"><a href="" class="__cf_email__" data-cfemail="f495989d808192959ab49399959d98da979b99">{{ Auth::user()->email }}</a></span></p>
						    	</div>
						    	<div class="user_setting_content">
									<a class="dropdown-item active" href="#">My Profile</a>
									<a class="dropdown-item" href="#">Messages</a>
									<a class="dropdown-item" href="#">Purchase history</a>
									<a class="dropdown-item" href="#">Help</a>
									<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
						    	</div>
						    </div>
						</div>
			        </li>
                    @endguest
		        </ul>
		    </nav>
		</div>
	</header>
	<!-- Modal -->
	<div class="sign_up_modal modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
		    <div class="modal-content">
		      	<div class="modal-header">
		        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		      	</div>
		      	<div class="modal-body container pb20">
		      		<div class="row">
		      			<div class="col-lg-12">
				    		<ul class="sign_up_tab nav nav-tabs" id="myTab" role="tablist">
                            
							  	<li class="nav-item">
							    	<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Login</a>
							  	</li>
							  	<li class="nav-item">
							    	<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Register</a>
							  	</li>
							</ul>
		      			</div>
		      		</div>
					<div class="tab-content container" id="myTabContent">
					  	<div class="row mt25 tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
					  		<div class="col-lg-6 col-xl-6">
					  			<div class="login_thumb">
					  				<img class="img-fluid w100" src="images/resource/login.jpg" alt="login.jpg">
					  			</div>
					  		</div>
					  		<div class="col-lg-6 col-xl-6">
								<div class="login_form">
									<form method="POST" action="{{ route('login') }}">
                                    @csrf
										<div class="heading">
											<h4>Login</h4>
										</div>
										<div class="input-group mb-2 mr-sm-2">
										    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
										    <div class="input-group-prepend">
										    	<div class="input-group-text"><i class="flaticon-user"></i></div>
										    </div>
                                            @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
										</div>
										<div class="input-group form-group">
									    	<input placeholder="Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"">
										    <div class="input-group-prepend">
										    	<div class="input-group-text"><i class="flaticon-password"></i></div>
										    </div>
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
										</div>
										<div class="form-group custom-control custom-checkbox">
											<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
											<label class="custom-control-label" for="exampleCheck1">Remember me</label>
                                            @if (Route::has('password.request'))
											<a class="btn-fpswd float-right" href="{{ route('password.request') }}">Lost your password?</a>
                                            @endif
										</div>
										<button type="submit" class="btn btn-log btn-block btn-thm">Log In</button>

										<p class="text-center">Don't have an account? <a class="text-thm" href="#">Register</a></p>
									</form>
								</div>
					  		</div>
					  	</div>
					  	<div class="row mt25 tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
					  		<div class="col-lg-6 col-xl-6">
					  			<div class="regstr_thumb">
					  				<img class="img-fluid w100" src="images/resource/regstr.jpg" alt="regstr.jpg">
					  			</div>
					  		</div>
					  		<div class="col-lg-6 col-xl-6">
								<div class="sign_up_form">
									<div class="heading">
										<h4>Register</h4>
									</div>
									<form action="#">
										<hr>
										<div class="form-group input-group">
										    <input type="text" class="form-control" id="exampleInputName" placeholder="User Name">
										    <div class="input-group-prepend">
										    	<div class="input-group-text"><i class="flaticon-user"></i></div>
										    </div>
										</div>
										<div class="form-group input-group">
										    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email">
										    <div class="input-group-prepend">
										    	<div class="input-group-text"><i class="fa fa-envelope-o"></i></div>
										    </div>
										</div>
										<div class="form-group input-group">
										    <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
										    <div class="input-group-prepend">
										    	<div class="input-group-text"><i class="flaticon-password"></i></div>
										    </div>
										</div>
										<div class="form-group input-group">
										    <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Re-enter password">
										    <div class="input-group-prepend">
										    	<div class="input-group-text"><i class="flaticon-password"></i></div>
										    </div>
										</div>
										<div class="form-group ui_kit_select_search mb0">
											<select class="selectpicker" data-live-search="true" data-width="100%">
												<option data-tokens="SelectRole">Single User</option>
												<option data-tokens="Agent/Agency">Agent</option>
												<option data-tokens="SingleUser">Multi User</option>
											</select>
										</div>
										<div class="form-group custom-control custom-checkbox">
											<input type="checkbox" class="custom-control-input" id="exampleCheck2">
											<label class="custom-control-label" for="exampleCheck2">I have read and accept the Terms and Privacy Policy?</label>
										</div>
										<button type="submit" class="btn btn-log btn-block btn-thm">Sign Up</button>
										<p class="text-center">Already have an account? <a class="text-thm" href="#">Log In</a></p>
									</form>
								</div>
					  		</div>
					  	</div>
					</div>
		      	</div>
		    </div>
		</div>
	</div>

	<!-- Main Header Nav For Mobile -->
	<div id="page" class="stylehome1 h0">
		<div class="mobile-menu">
			<div class="header stylehome1">
				<div class="main_logo_home2 text-center">
		            <img class="nav_logo_img img-fluid mt20" src="images/header-logo2.png" alt="header-logo2.png">
		            <span class="mt20">FindHouse</span>
				</div>
				<ul class="menu_bar_home2">
	                <li class="list-inline-item list_s"><a href="page-register.html"><span class="flaticon-user"></span></a></li>
					<li class="list-inline-item"><a href="#menu"><span></span></a></li>
				</ul>
			</div>
		</div><!-- /.mobile-menu -->
		<nav id="menu" class="stylehome1">
			<ul>
				<li>
                    <a href="#"><span class="title">Home</span></a>
                </li>
                <li>
                    <a href="#"><span class="title">For Rent</span></a>
                    <!-- Level Two-->
                    <ul>
                        <li><a href="page-add-new-property.html">Residentials</a></li>
                        <li><a href="page-add-new-property.html">Office Space</a></li>
                        <li><a href="page-add-new-property.html">Land Plots</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><span class="title">For Sale</span></a>
                    <!-- Level Two-->
                    <ul>
                        <li><a href="page-add-new-property.html">Residentials</a></li>
                        <li><a href="page-add-new-property.html">Office Space</a></li>
                        <li><a href="page-add-new-property.html">Land Plots</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><span class="title">About Us</span></a>
                </li>
                <li><a href="page-contact.html">Contact</a></li>
        <li><a href="page-login.html"><span class="flaticon-user"></span> Login</a></li>
        <li><a href="page-register.html"><span class="flaticon-edit"></span> Register</a></li>
        <li class="cl_btn"><a class="btn btn-block btn-lg btn-thm circle" href="#"><span class="flaticon-plus"></span> Create Listing</a></li>
      
				</ul>
		</nav>
	</div>

	<!-- 4th Home Slider -->
	<section class="p0">
		<div class="container-fluid p0">
            <div class="home8-slider vh-100">
                <div id="bs_carousel" class="carousel slide bs_carousel" data-ride="carousel" data-pause="false" data-interval="7000">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-slide="0" data-interval="false">
                            <div class="bs_carousel_bg" style="background-image: url(images/home/4.jpg);"></div>
                            <div class="bs-caption">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-7 col-lg-8">
                                            <div class="main_title">Find Your Dream Home</div>
                                            <p class="parag">From as low as Ksh.10 per day with limited time offer discounts</p>
                                        </div>
                                        <div class="col-md-5 col-lg-4">
											<div class="feat_property home8">
												<div class="details">
													<div class="tc_content">
														<ul class="tag">
															<li class="list-inline-item"><a href="#">For Rent</a></li>
															<li class="list-inline-item"><a href="#">Featured</a></li>
														</ul>
														<p class="text-thm">Apartment</p>
														<h4>Renovated Apartment</h4>
														<p><span class="flaticon-placeholder"></span> Nyayo Estate, Embakasi. Nairobi, Kenya.</p>
														<ul class="prop_details">
															<li class="list-inline-item"><a href="#">Beds: 4</a></li>
															<li class="list-inline-item"><a href="#">Baths: 2</a></li>
															<li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
														</ul>
														<a class="fp_price" href="#">Ksh.13,000<small>/mo</small></a>
														<ul class="icon">
															<li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
															<li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
														</ul>
													</div>
													<div class="fp_footer">
														<ul class="fp_meta float-left mb0">
															<li class="list-inline-item"><a href="#"><img src="images/property/pposter1.png" alt="pposter1.png"></a></li>
															<li class="list-inline-item"><a href="#">Shem Mwaka</a></li>
														</ul>
														<div class="fp_pdate float-right">4 years ago</div>
													</div>
												</div>
											</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" data-slide="1" data-interval="false">
                            <div class="bs_carousel_bg" style="background-image: url(images/home/5.jpg);"></div>
                            <div class="bs-caption">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-7 col-lg-8">
                                            <div class="main_title">Your Property, Our Priority.</div>
                                            <p class="parag">From as low as Ksh.10 per day with limited time offer discounts</p>
                                        </div>
                                        <div class="col-md-5 col-lg-4">
											<div class="feat_property home8">
												<div class="details">
													<div class="tc_content">
														<ul class="tag">
															<li class="list-inline-item"><a href="#">For Rent</a></li>
															<li class="list-inline-item"><a href="#">Featured</a></li>
														</ul>
														<p class="text-thm">Apartment</p>
														<h4>Renovated Apartment</h4>
														<p><span class="flaticon-placeholder"></span> Nyayo Estate, Embakasi. Nairobi, Kenya.</p>
														<ul class="prop_details">
															<li class="list-inline-item"><a href="#">Beds: 4</a></li>
															<li class="list-inline-item"><a href="#">Baths: 2</a></li>
															<li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
														</ul>
														<a class="fp_price" href="#">Ksh.13,000<small>/mo</small></a>
														<ul class="icon">
															<li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
															<li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
														</ul>
													</div>
													<div class="fp_footer">
														<ul class="fp_meta float-left mb0">
															<li class="list-inline-item"><a href="#"><img src="images/property/pposter1.png" alt="pposter1.png"></a></li>
															<li class="list-inline-item"><a href="#">Shem Mwaka</a></li>
														</ul>
														<div class="fp_pdate float-right">4 years ago</div>
													</div>
												</div>
											</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" data-slide="2" data-interval="false">
                            <div class="bs_carousel_bg" style="background-image: url(images/home/6.jpg);"></div>
                            <div class="bs-caption">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-7 col-lg-8">
                                            <div class="main_title">Find Your Dream Home</div>
                                            <p class="parag">From as low as Ksh.10 per day with limited time offer discounts</p>
                                        </div>
                                        <div class="col-md-5 col-lg-4">
											<div class="feat_property home8">
												<div class="details">
													<div class="tc_content">
														<ul class="tag">
															<li class="list-inline-item"><a href="#">For Rent</a></li>
															<li class="list-inline-item"><a href="#">Featured</a></li>
														</ul>
														<p class="text-thm">Apartment</p>
														<h4>Renovated Apartment</h4>
														<p><span class="flaticon-placeholder"></span> Nyayo Estate, Embakasi. Nairobi, Kenya.</p>
														<ul class="prop_details">
															<li class="list-inline-item"><a href="#">Beds: 4</a></li>
															<li class="list-inline-item"><a href="#">Baths: 2</a></li>
															<li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
														</ul>
														<ul class="icon">
															<li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
															<li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
														</ul>
														<a class="fp_price" href="#">Ksh.13,000<small>/mo</small></a>
													</div>
													<div class="fp_footer">
														<ul class="fp_meta float-left mb0">
															<li class="list-inline-item"><a href="#"><img src="images/property/pposter1.png" alt="pposter1.png"></a></li>
															<li class="list-inline-item"><a href="#">Shem Mwaka</a></li>
														</ul>
														<div class="fp_pdate float-right">4 years ago</div>
													</div>
												</div>
											</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="property-carousel-controls">
                        <a class="property-carousel-control-prev" role="button" data-slide="prev">
                            <span class="flaticon-left-arrow-1"></span>
                        </a>
                        <a class="property-carousel-control-next" role="button" data-slide="next">
                            <span class="flaticon-right-arrow"></span>
                        </a>
                    </div>
                </div>
                <div class="carousel slide bs_carousel_prices" data-ride="carousel" data-pause="false" data-interval="false">
                    <div class="carousel-inner"></div>
                    <div class="property-carousel-ticker">
                        <div class="property-carousel-ticker-counter"></div>
                        <div class="property-carousel-ticker-divider">&nbsp;&nbsp;/&nbsp;&nbsp;</div>
                        <div class="property-carousel-ticker-total"></div>
                    </div>
                </div>
            </div>
		</div>
	</section>

	<!-- Property Cities -->
	<section id="property-city" class="property-city pb30 bb1">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<a href="#property-city">
				    	<div class="mouse_scroll home8">
			        		<div class="icon">
					    		<h4>Scroll Down</h4>
					    		<p>to discover more</p>
			        		</div>
			        		<div class="thumb">
			        			<img src="images/resource/mouse.png" alt="mouse.png">
			        		</div>
				    	</div>
				    </a>
				</div>
			</div>
		</div>
	</section>

	<!-- Latest Properties For Sell -->
	<section id="feature-property" class="latest-property bb1">
		<div class="container ovh">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="main-title text-center mb40">
						<h2>Featured Properties</h2>
						<p>Handpicked properties by our team.</p>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="feature_property_slider">
						<div class="item">
							<div class="feat_property">
								<div class="thumb">
									<img class="img-whp" src="images/property/fp1.jpg" alt="fp1.jpg">
									<div class="thmb_cntnt">
										<ul class="tag mb0">
											<li class="list-inline-item"><a href="#">For Rent</a></li>
											<li class="list-inline-item"><a href="#">Featured</a></li>
										</ul>
										<ul class="icon mb0">
											<li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
											<li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
										</ul>
										<a class="fp_price" href="#">Ksh.13,000<small>/mo</small></a>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<p class="text-thm">Apartment</p>
										<h4>Renovated Apartment</h4>
										<p><span class="flaticon-placeholder"></span> Nyayo Estate, Embakasi. Nairobi, Kenya.</p>
										<ul class="prop_details mb0">
											<li class="list-inline-item"><a href="#">Beds: 4</a></li>
											<li class="list-inline-item"><a href="#">Baths: 2</a></li>
											<li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
										</ul>
									</div>
									<div class="fp_footer">
										<ul class="fp_meta float-left mb0">
											<li class="list-inline-item"><a href="#"><img src="images/property/pposter1.png" alt="pposter1.png"></a></li>
											<li class="list-inline-item"><a href="#">Shem Mwaka</a></li>
										</ul>
										<div class="fp_pdate float-right">4 years ago</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="feat_property">
								<div class="thumb">
									<img class="img-whp" src="images/property/fp2.jpg" alt="fp2.jpg">
									<div class="thmb_cntnt">
										<ul class="tag mb0">
											<li class="list-inline-item"><a href="#">For Rent</a></li>
										</ul>
										<ul class="icon mb0">
											<li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
											<li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
										</ul>
										<a class="fp_price" href="#">Ksh.13,000<small>/mo</small></a>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<p class="text-thm">Villa</p>
										<h4>Gorgeous Villa Bay View</h4>
										<p><span class="flaticon-placeholder"></span> Nyayo Estate, Embakasi. Nairobi, Kenya.</p>
										<ul class="prop_details mb0">
											<li class="list-inline-item"><a href="#">Beds: 4</a></li>
											<li class="list-inline-item"><a href="#">Baths: 2</a></li>
											<li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
										</ul>
									</div>
									<div class="fp_footer">
										<ul class="fp_meta float-left mb0">
											<li class="list-inline-item"><a href="#"><img src="images/property/pposter1.png" alt="pposter1.png"></a></li>
											<li class="list-inline-item"><a href="#">Shem Mwaka</a></li>
										</ul>
										<div class="fp_pdate float-right">4 years ago</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="feat_property">
								<div class="thumb">
									<img class="img-whp" src="images/property/fp3.jpg" alt="fp3.jpg">
									<div class="thmb_cntnt">
										<ul class="tag mb0">
											<li class="list-inline-item"><a href="#">For Sale</a></li>
										</ul>
										<ul class="icon mb0">
											<li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
											<li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
										</ul>
										<a class="fp_price" href="#">Ksh.13,000<small>/mo</small></a>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<p class="text-thm">Single Family Home</p>
										<h4>Luxury Family Home</h4>
										<p><span class="flaticon-placeholder"></span> Nyayo Estate, Embakasi. Nairobi, Kenya.</p>
										<ul class="prop_details mb0">
											<li class="list-inline-item"><a href="#">Beds: 4</a></li>
											<li class="list-inline-item"><a href="#">Baths: 2</a></li>
											<li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
										</ul>
									</div>
									<div class="fp_footer">
										<ul class="fp_meta float-left mb0">
											<li class="list-inline-item"><a href="#"><img src="images/property/pposter1.png" alt="pposter1.png"></a></li>
											<li class="list-inline-item"><a href="#">Shem Mwaka</a></li>
										</ul>
										<div class="fp_pdate float-right">4 years ago</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="feat_property">
								<div class="thumb">
									<img class="img-whp" src="images/property/fp1.jpg" alt="fp1.jpg">
									<div class="thmb_cntnt">
										<ul class="tag mb0">
											<li class="list-inline-item"><a href="#">For Rent</a></li>
											<li class="list-inline-item"><a href="#">Featured</a></li>
										</ul>
										<ul class="icon mb0">
											<li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
											<li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
										</ul>
										<a class="fp_price" href="#">Ksh.13,000<small>/mo</small></a>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<p class="text-thm">Apartment</p>
										<h4>Renovated Apartment</h4>
										<p><span class="flaticon-placeholder"></span> Nyayo Estate, Embakasi. Nairobi, Kenya.</p>
										<ul class="prop_details mb0">
											<li class="list-inline-item"><a href="#">Beds: 4</a></li>
											<li class="list-inline-item"><a href="#">Baths: 2</a></li>
											<li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
										</ul>
									</div>
									<div class="fp_footer">
										<ul class="fp_meta float-left mb0">
											<li class="list-inline-item"><a href="#"><img src="images/property/pposter1.png" alt="pposter1.png"></a></li>
											<li class="list-inline-item"><a href="#">Shem Mwaka</a></li>
										</ul>
										<div class="fp_pdate float-right">4 years ago</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="feat_property">
								<div class="thumb">
									<img class="img-whp" src="images/property/fp2.jpg" alt="fp2.jpg">
									<div class="thmb_cntnt">
										<ul class="tag mb0">
											<li class="list-inline-item"><a href="#">For Rent</a></li>
										</ul>
										<ul class="icon mb0">
											<li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
											<li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
										</ul>
										<a class="fp_price" href="#">Ksh.13,000<small>/mo</small></a>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<p class="text-thm">Villa</p>
										<h4>Gorgeous Villa Bay View</h4>
										<p><span class="flaticon-placeholder"></span> Nyayo Estate, Embakasi. Nairobi, Kenya.</p>
										<ul class="prop_details mb0">
											<li class="list-inline-item"><a href="#">Beds: 4</a></li>
											<li class="list-inline-item"><a href="#">Baths: 2</a></li>
											<li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
										</ul>
									</div>
									<div class="fp_footer">
										<ul class="fp_meta float-left mb0">
											<li class="list-inline-item"><a href="#"><img src="images/property/pposter1.png" alt="pposter1.png"></a></li>
											<li class="list-inline-item"><a href="#">Shem Mwaka</a></li>
										</ul>
										<div class="fp_pdate float-right">4 years ago</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="feat_property">
								<div class="thumb">
									<img class="img-whp" src="images/property/fp3.jpg" alt="fp3.jpg">
									<div class="thmb_cntnt">
										<ul class="tag mb0">
											<li class="list-inline-item"><a href="#">For Sale</a></li>
										</ul>
										<ul class="icon mb0">
											<li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
											<li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
										</ul>
										<a class="fp_price" href="#">Ksh.13,000<small>/mo</small></a>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<p class="text-thm">Apartment</p>
										<h4>Renovated Apartment</h4>
										<p><span class="flaticon-placeholder"></span> Nyayo Estate, Embakasi. Nairobi, Kenya.</p>
										<ul class="prop_details mb0">
											<li class="list-inline-item"><a href="#">Beds: 4</a></li>
											<li class="list-inline-item"><a href="#">Baths: 2</a></li>
											<li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
										</ul>
									</div>
									<div class="fp_footer">
										<ul class="fp_meta float-left mb0">
											<li class="list-inline-item"><a href="#"><img src="images/property/pposter1.png" alt="pposter1.png"></a></li>
											<li class="list-inline-item"><a href="#">Shem Mwaka</a></li>
										</ul>
										<div class="fp_pdate float-right">4 years ago</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="feat_property">
								<div class="thumb">
									<img class="img-whp" src="images/property/fp3.jpg" alt="fp3.jpg">
									<div class="thmb_cntnt">
										<ul class="tag mb0">
											<li class="list-inline-item"><a href="#">For Sale</a></li>
										</ul>
										<ul class="icon mb0">
											<li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
											<li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
										</ul>
										<a class="fp_price" href="#">Ksh.13,000<small>/mo</small></a>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<p class="text-thm">Single Family Home</p>
										<h4>Luxury Family Home</h4>
										<p><span class="flaticon-placeholder"></span> Nyayo Estate, Embakasi. Nairobi, Kenya.</p>
										<ul class="prop_details mb0">
											<li class="list-inline-item"><a href="#">Beds: 4</a></li>
											<li class="list-inline-item"><a href="#">Baths: 2</a></li>
											<li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
										</ul>
									</div>
									<div class="fp_footer">
										<ul class="fp_meta float-left mb0">
											<li class="list-inline-item"><a href="#"><img src="images/property/pposter1.png" alt="pposter1.png"></a></li>
											<li class="list-inline-item"><a href="#">Shem Mwaka</a></li>
										</ul>
										<div class="fp_pdate float-right">4 years ago</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="feat_property">
								<div class="thumb">
									<img class="img-whp" src="images/property/fp2.jpg" alt="fp2.jpg">
									<div class="thmb_cntnt">
										<ul class="tag mb0">
											<li class="list-inline-item"><a href="#">For Rent</a></li>
										</ul>
										<ul class="icon mb0">
											<li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
											<li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
										</ul>
										<a class="fp_price" href="#">Ksh.13,000<small>/mo</small></a>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<p class="text-thm">Villa</p>
										<h4>Gorgeous Villa Bay View</h4>
										<p><span class="flaticon-placeholder"></span> Nyayo Estate, Embakasi. Nairobi, Kenya.</p>
										<ul class="prop_details mb0">
											<li class="list-inline-item"><a href="#">Beds: 4</a></li>
											<li class="list-inline-item"><a href="#">Baths: 2</a></li>
											<li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
										</ul>
									</div>
									<div class="fp_footer">
										<ul class="fp_meta float-left mb0">
											<li class="list-inline-item"><a href="#"><img src="images/property/pposter1.png" alt="pposter1.png"></a></li>
											<li class="list-inline-item"><a href="#">Shem Mwaka</a></li>
										</ul>
										<div class="fp_pdate float-right">4 years ago</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="feat_property">
								<div class="thumb">
									<img class="img-whp" src="images/property/fp3.jpg" alt="fp3.jpg">
									<div class="thmb_cntnt">
										<ul class="tag mb0">
											<li class="list-inline-item"><a href="#">For Sale</a></li>
										</ul>
										<ul class="icon mb0">
											<li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
											<li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
										</ul>
										<a class="fp_price" href="#">Ksh.13,000<small>/mo</small></a>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<p class="text-thm">Single Family Home</p>
										<h4>Luxury Family Home</h4>
										<p><span class="flaticon-placeholder"></span> Nyayo Estate, Embakasi. Nairobi, Kenya.</p>
										<ul class="prop_details mb0">
											<li class="list-inline-item"><a href="#">Beds: 4</a></li>
											<li class="list-inline-item"><a href="#">Baths: 2</a></li>
											<li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
										</ul>
									</div>
									<div class="fp_footer">
										<ul class="fp_meta float-left mb0">
											<li class="list-inline-item"><a href="#"><img src="images/property/pposter1.png" alt="pposter1.png"></a></li>
											<li class="list-inline-item"><a href="#">Shem Mwaka</a></li>
										</ul>
										<div class="fp_pdate float-right">4 years ago</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="feat_property">
								<div class="thumb">
									<img class="img-whp" src="images/property/fp1.jpg" alt="fp1.jpg">
									<div class="thmb_cntnt">
										<ul class="tag mb0">
											<li class="list-inline-item"><a href="#">For Rent</a></li>
											<li class="list-inline-item"><a href="#">Featured</a></li>
										</ul>
										<ul class="icon mb0">
											<li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
											<li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
										</ul>
										<a class="fp_price" href="#">Ksh.13,000<small>/mo</small></a>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<p class="text-thm">Apartment</p>
										<h4>Renovated Apartment</h4>
										<p><span class="flaticon-placeholder"></span> Nyayo Estate, Embakasi. Nairobi, Kenya.</p>
										<ul class="prop_details mb0">
											<li class="list-inline-item"><a href="#">Beds: 4</a></li>
											<li class="list-inline-item"><a href="#">Baths: 2</a></li>
											<li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
										</ul>
									</div>
									<div class="fp_footer">
										<ul class="fp_meta float-left mb0">
											<li class="list-inline-item"><a href="#"><img src="images/property/pposter1.png" alt="pposter1.png"></a></li>
											<li class="list-inline-item"><a href="#">Shem Mwaka</a></li>
										</ul>
										<div class="fp_pdate float-right">4 years ago</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="feat_property">
								<div class="thumb">
									<img class="img-whp" src="images/property/fp2.jpg" alt="fp2.jpg">
									<div class="thmb_cntnt">
										<ul class="tag mb0">
											<li class="list-inline-item"><a href="#">For Rent</a></li>
										</ul>
										<ul class="icon mb0">
											<li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
											<li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
										</ul>
										<a class="fp_price" href="#">Ksh.13,000<small>/mo</small></a>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<p class="text-thm">Villa</p>
										<h4>Gorgeous Villa Bay View</h4>
										<p><span class="flaticon-placeholder"></span> Nyayo Estate, Embakasi. Nairobi, Kenya.</p>
										<ul class="prop_details mb0">
											<li class="list-inline-item"><a href="#">Beds: 4</a></li>
											<li class="list-inline-item"><a href="#">Baths: 2</a></li>
											<li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
										</ul>
									</div>
									<div class="fp_footer">
										<ul class="fp_meta float-left mb0">
											<li class="list-inline-item"><a href="#"><img src="images/property/pposter1.png" alt="pposter1.png"></a></li>
											<li class="list-inline-item"><a href="#">Shem Mwaka</a></li>
										</ul>
										<div class="fp_pdate float-right">4 years ago</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="feat_property">
								<div class="thumb">
									<img class="img-whp" src="images/property/fp3.jpg" alt="fp3.jpg">
									<div class="thmb_cntnt">
										<ul class="tag mb0">
											<li class="list-inline-item"><a href="#">For Sale</a></li>
										</ul>
										<ul class="icon mb0">
											<li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
											<li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
										</ul>
										<a class="fp_price" href="#">Ksh.13,000<small>/mo</small></a>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<p class="text-thm">Single Family Home</p>
										<h4>Luxury Family Home</h4>
										<p><span class="flaticon-placeholder"></span> Nyayo Estate, Embakasi. Nairobi, Kenya.</p>
										<ul class="prop_details mb0">
											<li class="list-inline-item"><a href="#">Beds: 4</a></li>
											<li class="list-inline-item"><a href="#">Baths: 2</a></li>
											<li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
										</ul>
									</div>
									<div class="fp_footer">
										<ul class="fp_meta float-left mb0">
											<li class="list-inline-item"><a href="#"><img src="images/property/pposter1.png" alt="pposter1.png"></a></li>
											<li class="list-inline-item"><a href="#">Shem Mwaka</a></li>
										</ul>
										<div class="fp_pdate float-right">4 years ago</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Find Comfort Place -->
	<section id="comfort-place" class="comfort-place pb30 bb1">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="main-title text-center">
						<h2>Find a Place That Fits Your Comfort</h2>
						<p>Explore the greates places in the city. You won’t be disappointed.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 col-lg-3">
					<div class="icon_hvr_img_box" style="background-image: url(images/service/4.jpg);">
						<div class="overlay">
							<div class="icon"><span class="flaticon-house"></span></div>
							<div class="details">
								<h4>Miami</h4>
								<p>07 Listings</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-lg-3">
					<div class="icon_hvr_img_box" style="background-image: url(images/service/5.jpg);">
						<div class="overlay">
							<div class="icon"><span class="flaticon-house-1"></span></div>
							<div class="details">
								<h4>Family House</h4>
								<p>58 Listings</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-lg-3">
					<div class="icon_hvr_img_box" style="background-image: url(images/service/3.jpg);">
						<div class="overlay">
							<div class="icon"><span class="flaticon-house-2"></span></div>
							<div class="details">
								<h4>Town House</h4>
								<p>07 Listings</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-lg-3">
					<div class="icon_hvr_img_box" style="background-image: url(images/service/1.jpg);">
						<div class="overlay">
							<div class="icon"><span class="flaticon-building"></span></div>
							<div class="details">
								<h4>Apartment</h4>
								<p>07 Listings</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our Testimonials -->
	<section id="our-testimonials" class="our-testimonials">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="main-title text-center">
						<h2 class="mt0">What Our Users Say</h2>
						<p>Discover how Listable can you help you find everything you want.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
					<div class="testimonialsec">
						<ul class="tes-nav">
							<li>
								<img class="img-fluid" src="images/testimonial/5.png" alt="5.png"/>
							</li>
							<li>
								<img class="img-fluid" src="images/testimonial/3.png" alt="3.png"/>
							</li>
							<li>
								<img class="img-fluid" src="images/testimonial/4.png" alt="4.png"/>
							</li>
							<li>
								<img class="img-fluid" src="images/testimonial/6.png" alt="6.png"/>
							</li>
							<li>
								<img class="img-fluid" src="images/testimonial/7.png" alt="7.png"/>
							</li>
							<li>
								<img class="img-fluid" src="images/testimonial/4.png" alt="4.png"/>
							</li>
						</ul>
						<ul class="tes-for">
							<li>
								<div class="testimonial_item">
									<div class="details">
										<h4>Lara Croft</h4>
										<span class="small text-thm">Restaurant Owner</span>
										<p>Especially i want to give thanks to support team, this guys are friendly, correct, gave me quick and complete answers.</p>
										<p class="mt25">Good job!</p>
									</div>
								</div>
							</li>
							<li>
								<div class="testimonial_item">
									<div class="details">
										<h4>Shem Mwaka</h4>
										<span class="small text-thm">Restaurant Owner</span>
										<p>Especially i want to give thanks to support team, this guys are friendly, correct, gave me quick and complete answers.</p>
										<p class="mt25">Good job!</p>
									</div>
								</div>
							</li>
							<li>
								<div class="testimonial_item">
									<div class="details">
										<h4>Shem Mwaka</h4>
										<span class="small text-thm">Restaurant Owner</span>
										<p>Especially i want to give thanks to support team, this guys are friendly, correct, gave me quick and complete answers.</p>
										<p class="mt25">Good job!</p>
									</div>
								</div>
							</li>
							<li>
								<div class="testimonial_item">
									<div class="details">
										<h4>Shem Mwaka</h4>
										<span class="small text-thm">Restaurant Owner</span>
										<p>Especially i want to give thanks to support team, this guys are friendly, correct, gave me quick and complete answers.</p>
										<p class="mt25">Good job!</p>
									</div>
								</div>
							</li>
							<li>
								<div class="testimonial_item">
									<div class="details">
										<h4>Shem Mwaka</h4>
										<span class="small text-thm">Restaurant Owner</span>
										<p>Especially i want to give thanks to support team, this guys are friendly, correct, gave me quick and complete answers.</p>
										<p class="mt25">Good job!</p>
									</div>
								</div>
							</li>
							<li>
								<div class="testimonial_item">
									<div class="details">
										<h4>Shem Mwaka</h4>
										<span class="small text-thm">Restaurant Owner</span>
										<p>Especially i want to give thanks to support team, this guys are friendly, correct, gave me quick and complete answers.</p>
										<p class="mt25">Good job!</p>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our Partners -->
	<section id="our-partners" class="our-partners bb1">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="main-title text-center">
						<h2>Our Partners</h2>
						<p>We only work with the best companies around the globe</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 col-md-4 col-lg">
					<div class="our_partner">
						<img class="img-fluid" src="images/partners/1.png" alt="1.png">
					</div>
				</div>
				<div class="col-sm-6 col-md-4 col-lg">
					<div class="our_partner">
						<img class="img-fluid" src="images/partners/2.png" alt="2.png">
					</div>
				</div>
				<div class="col-sm-6 col-md-4 col-lg">
					<div class="our_partner">
						<img class="img-fluid" src="images/partners/3.png" alt="3.png">
					</div>
				</div>
				<div class="col-sm-6 col-md-4 col-lg">
					<div class="our_partner">
						<img class="img-fluid" src="images/partners/4.png" alt="4.png">
					</div>
				</div>
				<div class="col-sm-6 col-md-4 col-lg">
					<div class="our_partner">
						<img class="img-fluid" src="images/partners/5.png" alt="5.png">
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our Footer -->
	<section class="footer_one home3">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-6 col-lg-3 col-xl-3 pr0 pl0">
					<div class="footer_about_widget home3">
						<h4>About Site</h4>
						<p>We’re reimagining how you buy, sell and rent. It’s now easier to get into a place you love. So let’s do this, together.</p>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
					<div class="footer_qlink_widget home3">
						<h4>Quick Links</h4>
						<ul class="list-unstyled">
							<li><a href="#">About Us</a></li>
							<li><a href="#">Terms & Conditions</a></li>
							<li><a href="#">User’s Guide</a></li>
							<li><a href="#">Support Center</a></li>
							<li><a href="#">Press Info</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
					<div class="footer_contact_widget home3">
						<h4>Contact Us</h4>
						<ul class="list-unstyled">
							<li><a href="#"><span class="__cf_email__" data-cfemail="7a13141c153a1c13141e12150f091f54191517">[email&#160;protected]</span></a></li>
							<li><a href="#">Collins Street West, Victoria</a></li>
							<li><a href="#">8007, Australia.</a></li>
							<li><a href="#">+1 246-345-0699</a></li>
							<li><a href="#">+1 246-345-0695</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
					<div class="footer_social_widget home3">
						<h4>Follow us</h4>
						<ul class="mb30">
							<li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fa fa-dribbble"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fa fa-google"></i></a></li>
						</ul>
						<h4>Subscribe</h4>
						<form class="footer_mailchimp_form home3">
						 	<div class="form-row align-items-center">
							    <div class="col-auto">
							    	<input type="email" class="form-control mb-2" id="inlineFormInput" placeholder="Your email">
							    </div>
							    <div class="col-auto">
							    	<button type="submit" class="btn btn-primary mb-2"><i class="fa fa-angle-right"></i></button>
							    </div>
						  	</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our Footer Bottom Area -->
	<section class="footer_middle_area home3 pt30 pb30">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-xl-6">
					<div class="footer_menu_widget home3">
						<ul>
							<li class="list-inline-item"><a href="#">Home</a></li>
							<li class="list-inline-item"><a href="#">Listing</a></li>
							<li class="list-inline-item"><a href="#">Property</a></li>
							<li class="list-inline-item"><a href="#">Pages</a></li>
							<li class="list-inline-item"><a href="#">Blog</a></li>
							<li class="list-inline-item"><a href="#">Contact</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-6 col-xl-6">
					<div class="copyright-widget home3 text-right">
						<p>© 2020 Find House. Made with love.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
<a class="scrollToHome home8" href="#"><i class="flaticon-arrows"></i></a>
</div>
<!-- Wrapper End -->
<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript" src="js/jquery-3.3.1.js"></script>
<script type="text/javascript" src="js/jquery-migrate-3.0.0.min.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.mmenu.all.js"></script>
<script type="text/javascript" src="js/ace-responsive-menu.js"></script>
<script type="text/javascript" src="js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="js/isotop.js"></script>
<script type="text/javascript" src="js/snackbar.min.js"></script>
<script type="text/javascript" src="js/simplebar.js"></script>
<script type="text/javascript" src="js/parallax.js"></script>
<script type="text/javascript" src="js/scrollto.js"></script>
<script type="text/javascript" src="js/jquery-scrolltofixed-min.js"></script>
<script type="text/javascript" src="js/jquery.counterup.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>
<script type="text/javascript" src="js/progressbar.js"></script>
<script type="text/javascript" src="js/slider.js"></script>
<script type="text/javascript" src="js/timepicker.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBCmkDpS9DDEV73V2YT1OeOK4tA-HcSxDQ"type="text/javascript"></script>
<script type="text/javascript" src="js/google-maps.js"></script>
<!-- Custom script for all pages --> 
<script type="text/javascript" src="js/script.js"></script>
<script>
    var bsCarouselItems = 1;
    if($('.bs_carousel .carousel-item').length){
	    $('.bs_carousel .carousel-item').each(function(index, element) {
	        if (index == 0) {
	           $('.bs_carousel_prices').addClass('pprty-price-active pprty-first-time');
	        }
	        $('.bs_carousel_prices .property-carousel-ticker-counter').append('<span>0' + bsCarouselItems + '</span>');
	        bsCarouselItems += 1;
	    });
    }

    $('.bs_carousel_prices .property-carousel-ticker-total').append('<span>0' + $('.bs_carousel .carousel-item').length + '</span>');

    if($('.bs_carousel').length){
	    $('.bs_carousel').on('slide.bs.carousel', function(carousel) {
	        $('.bs_carousel_prices').removeClass('pprty-first-time');
	        $('.bs_carousel_prices').carousel(carousel.to);
	    });
    }

    if($('.bs_carousel').length){
	    $('.bs_carousel').on('slid.bs.carousel', function(carousel) {
	        var tickerPos = (carousel.to) * 25;
	        $('.bs_carousel_prices .property-carousel-ticker-counter > span').css('transform', 'translateY(-' + tickerPos + 'px)');
	    });
    }

    if($('.bs_carousel .property-carousel-control-next').length){
	    $('.bs_carousel .property-carousel-control-next').on('click',function(e) { 
	        $('.bs_carousel').carousel('next');
	    });
    }

    if($('.bs_carousel .property-carousel-control-prev').length){
	    $('.bs_carousel .property-carousel-control-prev').on('click',function(e) { 
	        $('.bs_carousel').carousel('prev');
	    });
    }
    if($('.bs_carousel').length){
    	$('.bs_carousel').carousel({
			interval: 6000,
			pause: "true"
		});
    }
</script>
</body>
</html>