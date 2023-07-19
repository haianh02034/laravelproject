<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Signin</title>
	<link href="{{ asset('assets/css/as-alert-message.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/style-starter.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/sign-in.css') }}" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>
	<header id="site-header" class="w3l-header fixed-top">
		<!--/nav-->
		<nav class="navbar navbar-expand-lg navbar-light fill px-lg-0 py-0 px-3">
			<div class="container">
				<h1><a class="navbar-brand" href="index.html"><span class="fa fa-play icon-log"
							aria-hidden="true"></span>
							Cinema A </a></h1>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
				</div>
				<div class="Login_SignUp" id="login_s">
					<!-- style="font-size: 2rem ; display: inline-block; position: relative;" -->
					<!-- <li class="nav-item"> -->
					<a class="nav-link" href="sign_in.html"><i class="fa fa-user-circle-o"></i></a>
					<!-- </li> -->
				</div>
				<!-- toggle switch for light and dark theme -->
				<div class="mobile-position">
					<nav class="navigation">
						<div class="theme-switch-wrapper">
							<label class="theme-switch" for="checkbox">
								<input type="checkbox" id="checkbox">
								<div class="mode-container">
									<i class="gg-sun"></i>
									<i class="gg-moon"></i>
								</div>
							</label>
						</div>
					</nav>
				</div>
			</div>
		</nav>
	</header>

	<div class="container_signup_signin" id="container_signup_signin">
		<div class="form-container sign-up-container">
			{{-- <form name="sign-up-form" action="#" onsubmit="return signUpValidateForm()">
				<h1>Create Account</h1>
				<div class="social-container">
					<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
					<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
					<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
				</div>
				<span>or use your email for registration</span>
				<input name="sign-up-name" type="text" placeholder="Name" />
				<input name="sign-up-email" type="email" placeholder="Email" />
				<input name="sign-up-passwd" type="password" placeholder="Password" />
				<button>Sign Up</button>
			</form> --}}
		</div>
		<div class="form-container sign-in-container">
			<form name="sign-in-form" style="color: var(--theme-title);" onsubmit="return signInValidateForm()"   
			action="{{ route('login') }}" method="POST" 
			>
				<h1>Sign in</h1>
				
				<div class="social-container">
					<a href="#" class="social" style="color: var(--theme-title);"><i class="fab fa-facebook-f"></i></a>
					<a href="{{url('auth/google')}}" class="social" style="color: var(--theme-title);"><i class="fab fa-google-plus-g"></i></a>
					{{-- <a href="{{url('auth/google')}}" class="btn btn-secondary">{{__('Google Sign in')}}</a> --}}
					<a href="#" class="social" style="color: var(--theme-title);"><i class="fab fa-linkedin-in"></i></a>
				</div>
				<span>or use your account</span>
				<input name="sign-in-email" type="email" placeholder="Email" />
				<input name="sign-in-passwd" type="password" placeholder="Password" />
				<a href="#">Forgot your password?</a>
				<button type="submit" name="signin" id="signin" class="form-submit" value="Sign In">Sign In </button>
				{{ csrf_field()}}
			</form>
		</div>
		<div class="overlay-container">
			<div class="overlay">
				{{-- <div class="overlay-panel overlay-left">
					<h1>Welcome Back!</h1>
					<p>To keep connected with us please login with your login details</p>
					<button class="ghost" id="signIn">Sign In</button>
				</div> --}}
				<div class="overlay-panel overlay-right">
					<h1>Hello, Friend!</h1>
					<p>Register and book your tickets now!!!</p>
					<a href="register.html"> <button class="ghost" id="signUp">Sign Up</button></a>
				</div>
			</div>
		</div>
	</div>
	@include('errors.note')
	<script src="{{ asset('assets/js/as-alert-message.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
	<!--/theme-change-->
	<script src="{{ asset('assets/js/theme-change.js') }}"></script>
	<!-- disable body scroll which navbar is in active -->
	<script>
		$(function () {
			$('.navbar-toggler').click(function () {
				$('body').toggleClass('noscroll');
			})
		});
	</script>
	<!-- disable body scroll which navbar is in active -->
	<!--/MENU-JS-->
	<script>
		$(window).on("scroll", function () {
			var scroll = $(window).scrollTop();

			if (scroll >= 80) {
				$("#site-header").addClass("nav-fixed");
			} else {
				$("#site-header").removeClass("nav-fixed");
			}
		});

		//Main navigation Active Class Add Remove
		$(".navbar-toggler").on("click", function () {
			$("header").toggleClass("active");
		});
		$(document).on("ready", function () {
			if ($(window).width() > 991) {
				$("header").removeClass("active");
			}
			$(window).on("resize", function () {
				if ($(window).width() > 991) {
					$("header").removeClass("active");
				}
			});
		});
	</script>
	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

    {{-- <script src="{{ asset('assets/js/sign-in.js') }}" type="text/javascript"></script> --}}

</body>

</html>