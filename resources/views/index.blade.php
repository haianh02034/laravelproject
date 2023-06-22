<!doctype html>
<html lang="zxx">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Home</title>

	<link rel="stylesheet" href="{{ asset('assets/css/style-starter.css') }}">
	<link href="//fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,600&display=swap"
	rel="stylesheet">



</head>

<body>
	<div>
		<p>Login success</p>
	</div>

	<!-- header -->
	<header id="site-header" class="w3l-header fixed-top">
		<!--/nav-->
		<nav class="navbar navbar-expand-lg navbar-light fill px-lg-0 py-0 px-3">
			<div class="container">
				<h1><a class="navbar-brand" href="index.html"><span class="fa fa-play icon-log"
							aria-hidden="true"></span>
							Cinema A</a></h1>
				<!-- if logo is image enable this   
						<a class="navbar-brand" href="#index.html">
							<img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
						</a> -->
				<button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
					data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
					aria-label="Toggle navigation">
					<!-- <span class="navbar-toggler-icon"></span> -->
					<span class="fa icon-expand fa-bars"></span>
					<span class="fa icon-close fa-times"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="nav-link" href="index.html">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="movies.html">Movies</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="about.html">About</a>
						</li>


						<li class="nav-item">
							<a class="nav-link" href="Contact_Us.html">Contact</a>
						</li>
					</ul>

					<!--/search-right-->
					<!--/search-right-->
					<div class="search-right">
						<a href="#search" class="btn search-hny mr-lg-3 mt-lg-0 mt-4" title="search">Search <span
								class="fa fa-search ml-3" aria-hidden="true"></span></a>
						<!-- search popup -->
						<div id="search" class="pop-overlay">
							<div class="popup">
								<form action="#" method="post" class="search-box">
									<input type="search" placeholder="Search your Keyword" name="search"
										required="required" autofocus="">
									<button type="submit" class="btn"><span class="fa fa-search"
											aria-hidden="true"></span></button>
								</form>
								<div class="browse-items">
									<h3 class="hny-title two mt-md-5 mt-4">Browse all:</h3>
									<ul class="search-items">
										<li><a href="movies.html">Action</a></li>
										<li><a href="movies.html">Drama</a></li>
										<li><a href="movies.html">Family</a></li>
										<li><a href="movies.html">Thriller</a></li>
										<li><a href="movies.html">Commedy</a></li>
										<li><a href="movies.html">Romantic</a></li>
										<li><a href="movies.html">Tv-Series</a></li>
										<li><a href="movies.html">Horror</a></li>
										<li><a href="movies.html">Action</a></li>
										<li><a href="movies.html">Drama</a></li>
										<li><a href="movies.html">Family</a></li>
										<li><a href="movies.html">Thriller</a></li>
										<li><a href="movies.html">Commedy</a></li>
										<li><a href="movies.html">Romantic</a></li>
										<li><a href="movies.html">Tv-Series</a></li>
										<li><a href="movies.html">Horror</a></li>
									</ul>
								</div>
							</div>
							<a class="close" href="#close">×</a>
						</div>
						<!-- /search popup -->
						<!--/search-right-->

					</div>
					<div class="Login_SignUp" id="login"
						style="font-size: 2rem ; display: inline-block; position: relative;">
						<!-- <li class="nav-item"> -->
						<a class="nav-link" href="sign_in.html"><i class="fa fa-user-circle-o"></i></a>
						<!-- </li> -->
					</div>
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
	<!-- main-slider -->
	<section class="w3l-main-slider position-relative" id="home">
		<div class="companies20-content">
			<div class="owl-one owl-carousel owl-theme">
				<div class="item">
					<li>
						<div class="slider-info banner-view bg bg2">
							<div class="banner-info">
								<h3>Latest Movie Trailers</h3>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<span class="over-para">
										Consequuntur hic odio
										voluptatem tenetur consequatur.</span></p>
								<a href="#small-dialog1" class="popup-with-zoom-anim play-view1">
									<span class="video-play-icon">
										<span class="fa fa-play"></span>
									</span>
									<h6>Watch Trailer</h6>
								</a>
								<div id="small-dialog1" class="zoom-anim-dialog mfp-hide">
									<iframe src="https://player.vimeo.com/video/358205676" allow="autoplay; fullscreen"
										allowfullscreen=""></iframe>
								</div>
							</div>
						</div>
					</li>
				</div>
				<div class="item">
					<li>
						<div class="slider-info  banner-view banner-top1 bg bg2">
							<div class="banner-info">
								<h3>Latest Online Movies</h3>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<span class="over-para">
										Consequuntur hic odio
										voluptatem tenetur consequatur.</span></p>
								<a href="#small-dialog2" class="popup-with-zoom-anim play-view1">
									<span class="video-play-icon">
										<span class="fa fa-play"></span>
									</span>
									<h6>Watch Trailer</h6>
								</a>
								<div id="small-dialog2" class="zoom-anim-dialog mfp-hide">
									<iframe src="https://player.vimeo.com/video/395376850" allow="autoplay; fullscreen"
										allowfullscreen=""></iframe>
								</div>
							</div>
						</div>
					</li>
				</div>
				<div class="item">
					<li>
						<div class="slider-info banner-view banner-top2 bg bg2">
							<div class="banner-info">
								<h3>Latest Movie Trailers</h3>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<span class="over-para">
										Consequuntur hic odio
										voluptatem tenetur consequatur.</span></p>
								<a href="#small-dialog3" class="popup-with-zoom-anim play-view1">
									<span class="video-play-icon">
										<span class="fa fa-play"></span>
									</span>
									<h6>Watch Trailer</h6>
								</a>
								<div id="small-dialog3" class="zoom-anim-dialog mfp-hide">
									<iframe src="https://player.vimeo.com/video/389969665" allow="autoplay; fullscreen"
										allowfullscreen=""></iframe>
								</div>
							</div>
						</div>
					</li>
				</div>
				<div class="item">
					<li>
						<div class="slider-info banner-view banner-top3 bg bg2">
							<div class="banner-info">
								<h3>Latest Online Movies</h3>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<span class="over-para">
										Consequuntur hic odio
										voluptatem tenetur consequatur.</span></p>
								<a href="#small-dialog4" class="popup-with-zoom-anim play-view1">
									<span class="video-play-icon">
										<span class="fa fa-play"></span>
									</span>
									<h6>Watch Trailer</h6>
								</a>
								<div id="small-dialog4" class="zoom-anim-dialog mfp-hide">
									<iframe src="https://player.vimeo.com/video/323491174" allow="autoplay; fullscreen"
										allowfullscreen=""></iframe>
								</div>
							</div>
						</div>
					</li>
				</div>
			</div>
		</div>
	</section>
	<!-- main-slider -->
	<!--grids-sec1-->
	<section class="w3l-grids">
		<div class="grids-main py-5">
			<div class="container py-lg-3">
				<div class="headerhny-title">
					<div class="w3l-title-grids">
						<div class="headerhny-left">
							<h3 class="hny-title">Popular Movies</h3>
						</div>
						<div class="headerhny-right text-lg-right">
							<h4><a class="show-title" href="movies.html">Show all</a></h4>
						</div>
					</div>
				</div>
				<div class="w3l-populohny-grids">
					<div class="item vhny-grid">
						<div class="box16">
							<a href="movies.html">
								<figure>
									<img class="img-fluid" src="{{ asset('assets/images/wednesday.jpeg') }}" alt="">
								</figure>
								<div class="box-content">
									<h3 class="title">A Wednesday</h3>
									<h4> <span class="post"><span class="fa fa-clock-o"> </span> 1 Hr 4min

										</span>

										<span class="post fa fa-heart text-right"></span>
									</h4>
								</div>
								<span class="fa fa-play video-icon" aria-hidden="true"></span>
							</a>
						</div>
					</div>
					<div class="item vhny-grid">
						<div class="box16">
							<a href="movies.html">
								<figure>
									<img class="img-fluid" src="{{ asset('assets/images/commando2.jpeg') }}" alt="">
								</figure>
								<div class="box-content">
									<h3 class="title">Commando-3</h3>
									<h4> <span class="post"><span class="fa fa-clock-o"> </span> 1 Hr 4min

										</span>

										<span class="post fa fa-heart text-right"></span>
									</h4>
								</div>
								<span class="fa fa-play video-icon" aria-hidden="true"></span>
							</a>
						</div>
					</div>
					<div class="item vhny-grid">
						<div class="box16">
							<a href="movies.html">
								<figure>
									<img class="img-fluid" src="{{ asset('assets/images/gujju2.jpeg') }}" alt="">
								</figure>
								<div class="box-content">
									<h3 class="title">Gujjubhai Most Wanted</h3>
									<h4> <span class="post"><span class="fa fa-clock-o"> </span> 1 Hr 4min

										</span>

										<span class="post fa fa-heart text-right"></span>
									</h4>
								</div>
								<span class="fa fa-play video-icon" aria-hidden="true"></span>
							</a>
						</div>
					</div>
					<div class="item vhny-grid">
						<div class="box16">
							<a href="movies.html">
								<figure>
									<img class="img-fluid" src="{{ asset('assets/images/avtar-2.jpeg') }}" alt="">
								</figure>
								<div class="box-content">
									<h3 class="title">Avatar</h3>
									<h4> <span class="post"><span class="fa fa-clock-o"> </span> 1 Hr 4min

										</span>

										<span class="post fa fa-heart text-right"></span>
									</h4>
								</div>
								<span class="fa fa-play video-icon" aria-hidden="true"></span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--//grids-sec1-->
	<!--grids-sec2-->
	<section class="w3l-grids">
		<div class="grids-main py-5">
			<div class="container py-lg-3">
				<div class="headerhny-title">
					<div class="w3l-title-grids">
						<div class="headerhny-left">
							<h3 class="hny-title">New Releases</h3>
						</div>
						<div class="headerhny-right text-lg-right">
							<h4><a class="show-title" href="movies.html">Show all</a></h4>
						</div>
					</div>
				</div>
				<div class="owl-three owl-carousel owl-theme">
					<div class="item vhny-grid">
						<div class="box16 mb-0">
							<a href="movies.html">
								<figure>
									<img class="img-fluid" src="{{ asset('assets/images/n1.jpg') }}" alt="">
								</figure>
								<div class="box-content">
									<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

										</span>

										<span class="post fa fa-heart text-right"></span>
									</h4>
								</div>
								<span class="fa fa-play video-icon" aria-hidden="true"></span>
							</a>
						</div>
						<h3> <a class="title-gd" href="movies.html">No Time to Die</a></h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
						<div class="button-center text-center mt-4">
							<a href="movies.html" class="btn watch-button">Watch now</a>
						</div>

					</div>
					<div class="item vhny-grid">
						<div class="box16 mb-0">
							<a href="movies.html">
								<figure>
									<img class="img-fluid" src="{{ asset('assets/images/n2.jpg') }}" alt="">
								</figure>
								<div class="box-content">

									<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

										</span>

										<span class="post fa fa-heart text-right"></span>
									</h4>
								</div>
								<span class="fa fa-play video-icon" aria-hidden="true"></span>
							</a>
						</div>
						<h3> <a class="title-gd" href="movies.html">Mulan</a></h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
						<div class="button-center text-center mt-4">
							<a href="movies.html" class="btn watch-button">Watch now</a>
						</div>
					</div>
					<div class="item vhny-grid">
						<div class="box16 mb-0">
							<a href="movies.html">
								<figure>
									<img class="img-fluid" src="{{ asset('assets/images/n3.jpg') }}" alt="">
								</figure>
								<div class="box-content">

									<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

										</span>

										<span class="post fa fa-heart text-right"></span>
									</h4>
								</div>
								<span class="fa fa-play video-icon" aria-hidden="true"></span>
							</a>
						</div>
						<h3> <a class="title-gd" href="movies.html">Free Guy</a></h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
						<div class="button-center text-center mt-4">
							<a href="movies.html" class="btn watch-button">Watch now</a>
						</div>
					</div>
					<div class="item vhny-grid">
						<div class="box16 mb-0">
							<a href="movies.html">
								<figure>
									<img class="img-fluid" src="{{ asset('assets/images/n4.jpg') }}" alt="">
								</figure>
								<div class="box-content">

									<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

										</span>

										<span class="post fa fa-heart text-right"></span>
									</h4>
								</div>
								<span class="fa fa-play video-icon" aria-hidden="true"></span>
							</a>
						</div>
						<h3> <a class="title-gd" href="movies.html">My Spy</a></h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
						<div class="button-center text-center mt-4">
							<a href="movies.html" class="btn watch-button">Watch now</a>
						</div>

					</div>
					<div class="item vhny-grid">
						<div class="box16 mb-0">
							<a href="movies.html">
								<figure>
									<img class="img-fluid" src="{{ asset('assets/images/n5.jpg') }}" alt="">
								</figure>
								<div class="box-content">

									<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

										</span>

										<span class="post fa fa-heart text-right"></span>
									</h4>
								</div>
								<span class="fa fa-play video-icon" aria-hidden="true"></span>
							</a>
						</div>
						<h3> <a class="title-gd" href="movies.html">Scoob</a></h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
						<div class="button-center text-center mt-4">
							<a href="movies.html" class="btn watch-button">Watch now</a>
						</div>
					</div>
					<div class="item vhny-grid">
						<div class="box16 mb-0">
							<a href="movies.html">
								<figure>
									<img class="img-fluid" src="{{ asset('assets/images/n6.jpg') }}" alt="">
								</figure>
								<div class="box-content">

									<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

										</span>

										<span class="post fa fa-heart text-right"></span>
									</h4>
								</div>
								<span class="fa fa-play video-icon" aria-hidden="true"></span>
							</a>
						</div>
						<h3> <a class="title-gd" href="movies.html">Downhill</a></h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
						<div class="button-center text-center mt-4">
							<a href="movies.html" class="btn watch-button">Watch now</a>
						</div>
					</div>
				</div>
			</div>

		</div>
	</section>
	<!--grids-sec2-->
	<!--mid-slider -->
	<section class="w3l-mid-slider position-relative">
		<div class="companies20-content">
			<div class="owl-mid owl-carousel owl-theme">
				<div class="item">
					<li>
						<div class="slider-info mid-view bg bg2">
							<div class="container">
								<div class="mid-info">
									<span class="sub-text">Comedy</span>
									<h3>Jumanji: The Next Level</h3>
									<p>2019 ‧ Comedy/Action ‧ 2h 3m</p>
									<a class="watch" href="movies.html"><span class="fa fa-play"
											aria-hidden="true"></span>
										Watch Trailer</a>
								</div>
							</div>
						</div>
					</li>
				</div>
				<div class="item">
					<li>
						<div class="slider-info mid-view mid-top1 bg bg2">
							<div class="container">
								<div class="mid-info">
									<span class="sub-text">Adventure</span>
									<h3>Dolittle</h3>
									<p>2020 ‧ Family/Adventure ‧ 1h 41m</p>
									<a class="watch" href="movies.html"><span class="fa fa-play"
											aria-hidden="true"></span>
										Watch Trailer</a>
								</div>
							</div>
						</div>
					</li>
				</div>
				<div class="item">
					<li>
						<div class="slider-info mid-view mid-top2 bg bg2">
							<div class="container">
								<div class="mid-info">
									<span class="sub-text">Action</span>
									<h3>Bad Boys for Life</h3>
									<p>2020 ‧ Comedy/Action ‧ 2h 4m</p>
									<a class="watch" href="movies.html"><span class="fa fa-play"
											aria-hidden="true"></span>
										Watch Trailer</a>
								</div>
							</div>
						</div>
					</li>
				</div>
			</div>
		</div>
	</section>
	<!-- footer-66 -->
	<footer class="w3l-footer">
		<section class="footer-inner-main">
			<div class="footer-hny-grids py-5">
				<div class="container py-lg-4">
					<div class="text-txt">
						<div class="right-side">
							<div class="row footer-about">
								<div class="col-md-3 col-6 footer-img mb-lg-0 mb-4">
									<a href="{{ url('movies.html') }}"><img class="img-fluid" src="{{ asset('assets/images/banner1.jpg') }}" alt=""></a>
									alt=""></a>
								</div>
								<div class="col-md-3 col-6 footer-img mb-lg-0 mb-4">
									<a href="{{ url('movies.html') }}"><img class="img-fluid" src="{{ asset('assets/images/banner2.jpg') }}" alt=""></a>
									alt=""></a>
								</div>
								<div class="col-md-3 col-6 footer-img mb-lg-0 mb-4">
									<a href="{{ url('movies.html') }}"><img class="img-fluid" src="{{ asset('assets/images/banner3.jpg') }}" alt=""></a>
									alt=""></a>
								</div>
								<div class="col-md-3 col-6 footer-img mb-lg-0 mb-4">
									<a href="{{ url('movies.html') }}"><img class="img-fluid" src="{{ asset('assets/images/banner4.jpg') }}" alt=""></a>
									alt=""></a>
								</div>
							</div>
							<div class="row footer-links">


								<div class="col-md-3 col-sm-6 sub-two-right mt-5">
									<h6>Movies</h6>
									<ul>
										<li><a href="#">Movies</a></li>
										<li><a href="#">Videos</a></li>
										<li><a href="#">English Movies</a></li>
										<li><a href="#">Tailor</a></li>
										<li><a href="#">Upcoming Movies</a></li>
										<li><a href="Contact_Us.html">Contact Us</a></li>
									</ul>
								</div>
								<div class="col-md-3 col-sm-6 sub-two-right mt-5">
									<h6>Information</h6>
									<ul>
										<li><a href="index.html">Home</a> </li>
										<li><a href="about.html">About</a> </li>
										<li><a href="#">Tv Series</a> </li>
										<li><a href="#">Blogs</a> </li>
										<li><a href="sign_in.html">Login</a></li>
										<li><a href="Contact_Us.html">Contact</a></li>
									</ul>
								</div>
								<div class="col-md-3 col-sm-6 sub-two-right mt-5">
									<h6>Locations</h6>
									<ul>
										<li><a href="movies.html">Asia</a></li>
										<li><a href="movies.html">France</a></li>
										<li><a href="movies.html">Taiwan</a></li>
										<li><a href="movies.html">United States</a></li>
										<li><a href="movies.html">Korea</a></li>
										<li><a href="movies.html">United Kingdom</a></li>
									</ul>
								</div>
								<div class="col-md-3 col-sm-6 sub-two-right mt-5">
									<h6>Newsletter</h6>
									<form action="#" class="subscribe mb-3" method="post">
										<input type="email" name="email" placeholder="Your Email Address" required="">
										<button><span class="fa fa-envelope-o"></span></button>
									</form>
									<p>Enter your email and receive the latest news, updates and special offers from us.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			</div>
			<div class="below-section">
				<div class="container">
					<div class="copyright-footer">
						<div class="columns text-lg-left">
							<p>&copy; 2023 Cinema A. All rights reserved</p>
					   </div>

						<ul class="social text-lg-right">
							<li><a href="#facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
							</li>
							<li><a href="#linkedin"><span class="fa fa-linkedin" aria-hidden="true"></span></a>
							</li>
							<li><a href="#twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
							</li>
							<li><a href="#google"><span class="fa fa-google-plus" aria-hidden="true"></span></a>
							</li>

						</ul>
					</div>
				</div>
			</div>
			<!-- move top -->
			<button onclick="topFunction()" id="movetop" title="Go to top">
				<span class="fa fa-arrow-up" aria-hidden="true"></span>
			</button>
<script>
				// When the user scrolls down 20px from the top of the document, show the button
				window.onscroll = function () {
					scrollFunction()
				};

				function scrollFunction() {
					if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
						document.getElementById("movetop").style.display = "block";
					} else {
						document.getElementById("movetop").style.display = "none";
					}
				}

				// When the user clicks on the button, scroll to the top of the document
				function topFunction() {
					document.body.scrollTop = 0;
					document.documentElement.scrollTop = 0;
				}
</script>
			<!-- /move top -->

		</section>
	</footer>
</body>

</html>
<!-- responsive tabs -->
<script src="{{ asset('assets/js/jquery-1.9.1.min.js') }}"></script>
<script src="{{ asset('assets/js/easyResponsiveTabs.js') }}"></script>
<script type="text/javascript">

	$(document).ready(function () {
		//Horizontal Tab
		$('#parentHorizontalTab').easyResponsiveTabs({
			type: 'default', //Types: default, vertical, accordion
			width: 'auto', //auto or any width like 600px
			fit: true, // 100% fit in a container
			tabidentify: 'hor_1', // The tab groups identifier
			activate: function (event) { // Callback function if tab is switched
				var $tab = $(this);
				var $info = $('#nested-tabInfo');
				var $name = $('span', $info);
				$name.text($tab.text());
				$info.show();
			}
		});
	});
</script>
<!--/theme-change-->
<script src="{{ asset('assets/js/theme-change.js') }}"></script>
<script src="{{ asset('assets/js/owl.carousel.js') }}"></script>
<!-- script for banner slider-->
<script>
	$(document).ready(function () {
		$('.owl-one').owlCarousel({
			stagePadding: 280,
			loop: true,
			margin: 20,
			nav: true,
			responsiveClass: true,
			autoplay: true,
			autoplayTimeout: 5000,
			autoplaySpeed: 1000,
			autoplayHoverPause: false,
			responsive: {
				0: {
					items: 1,
					stagePadding: 40,
					nav: false
				},
				480: {
					items: 1,
					stagePadding: 60,
					nav: true
				},
				667: {
					items: 1,
					stagePadding: 80,
					nav: true
				},
				1000: {
					items: 1,
					nav: true
				}
			}
		})
	})
</script>
<script>
	$(document).ready(function () {
		$('.owl-three').owlCarousel({
			loop: true,
			margin: 20,
			nav: false,
			responsiveClass: true,
			autoplay: true,
			autoplayTimeout: 5000,
			autoplaySpeed: 1000,
			autoplayHoverPause: false,
			responsive: {
				0: {
					items: 2,
					nav: false
				},
				480: {
					items: 2,
					nav: true
				},
				667: {
					items: 3,
					nav: true
				},
				1000: {
					items: 5,
					nav: true
				}
			}
		})
	})
</script>
<script>
	$(document).ready(function () {
		$('.owl-mid').owlCarousel({
			loop: true,
			margin: 0,
			nav: false,
			responsiveClass: true,
			autoplay: true,
			autoplayTimeout: 5000,
			autoplaySpeed: 1000,
			autoplayHoverPause: false,
			responsive: {
				0: {
					items: 1,
					nav: false
				},
				480: {
					items: 1,
					nav: false
				},
				667: {
					items: 1,
					nav: true
				},
				1000: {
					items: 1,
					nav: true
				}
			}
		})
	})
</script>
<!-- script for owlcarousel -->
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
<script>
	$(document).ready(function () {
		$('.popup-with-zoom-anim').magnificPopup({
			type: 'inline',

			fixedContentPos: false,
			fixedBgPos: true,

			overflowY: 'auto',

			closeBtnInside: true,
			preloader: false,

			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});

		$('.popup-with-move-anim').magnificPopup({
			type: 'inline',

			fixedContentPos: false,
			fixedBgPos: true,

			overflowY: 'auto',

			closeBtnInside: true,
			preloader: false,

			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-slide-bottom'
		});
	});
</script>
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