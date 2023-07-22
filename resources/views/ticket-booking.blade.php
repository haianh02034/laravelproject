<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ticket Booking</title>
  <link rel="stylesheet" type="text/css" href="assets/css/style-starter.css">
  <link rel="stylesheet" href="https://npmcdn.com/flickity@2/dist/flickity.css">
  <link rel="stylesheet" type="text/css" href="assets/css/progress.css">

  <link rel="stylesheet" type="text/css" href="assets/css/ticket-booking.css">

  <!-- ..............For progress-bar............... -->
  <link rel="stylesheet" type="text/css" href="assets/css/e-ticket.css">

  <link rel="stylesheet" type="text/css" href="assets/css/payment.css" />
  <link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,700" rel="stylesheet">
</head>
<body>
  <header id="site-header" class="w3l-header fixed-top">
		<!--/nav-->
		<nav class="navbar navbar-expand-lg navbar-light fill px-lg-0 py-0 px-3">
			<div class="container">
				<h1><a class="navbar-brand" href="index.html"><span class="fa fa-play icon-log"
							aria-hidden="true"></span>
							Cinema A</a></h1>
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
						{{-- <li class="nav-item">
							<a class="nav-link" href="Contact_Us.html">Contact</a>
						</li> --}}
						<li class="nav-item">
							@if (Auth::check())
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">
										{{ Auth::user()->name }}
										<span class="caret"></span>
									</a>
									<ul class="dropdown-menu">
										<li><a href="{{ asset('profile') }}">Account information</a></li>
										<li><a href="{{ asset('logout') }}">Logout</a></li>
									</ul>
								</li>
							@else
								<li><a class="nav-link" href="sign_in.html"><i class="fa fa-user-circle-o"></i></a></li>
							@endif
						</li>
					</ul>
					<!--/search-right-->
					<!--/search-right-->
					<div class="search-right">
						{{-- <a href="#search" class="btn search-hny mr-lg-3 mt-lg-0 mt-4" title="search">Search <span
								class="fa fa-search ml-3" aria-hidden="true"></span></a> --}}
						<!-- search popup -->
						<div id="search" class="pop-overlay">
							<div class="popup">
								{{-- <form action="#" method="post" class="search-box">
									<input type="search" placeholder="Search your Keyword" name="search"
										required="required" autofocus="">
									<button type="submit" class="btn"><span class="fa fa-search"
											aria-hidden="true"></span></button>
								</form> --}}
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

  <div class="container" id="progress-container-id">
    <div class="row">
      <div class="col">
        <div class="px-0 pt-4 pb-0 mt-3 mb-3">
          <form id="form">
            <!-- <ul id="progressbar" class="progressbar-class">
              <li class="active" id="step1">Show timing selection</li>
              <li id="step2" class="not_active">Seat Selection</li>
              <li id="step3" class="not_active">Payment</li>
              <li id="step4" class="not_active">E-Ticket</li>
            </ul> -->
            <br>
           
              <div id="screen-select-div">
                <h2>Show time Selection</h2>
                <div class="carousel carousel-nav" data-flickity='{"contain": true, "pageDots": false }'>
                  <div class="carousel-cell" id="1" onclick="myFunction(1)">
                    <div class="date-numeric">13</div>
                    <div class="date-day">Today</div>
                  </div>

                  <div class="carousel-cell" id="2" onclick="myFunction(2)">
                    <div class="date-numeric">14</div>
                    <div class="date-day">Tomorrow</div>
                  </div>
                  <div class="carousel-cell" id="3" onclick="myFunction(3)">
                    <div class="date-numeric">15</div>
                    <div class="date-day">Monday</div>
                  </div>
                  <div class="carousel-cell" id="4" onclick="myFunction(4)">
                    <div class="date-numeric">16</div>
                    <div class="date-day">Tuesday</div>
                  </div>
                  <div class="carousel-cell" id="5" onclick="myFunction(5)">
                    <div class="date-numeric">17</div>
                    <div class="date-day">Wednesday</div>
                  </div>
                  <div class="carousel-cell" id="6" onclick="myFunction(6)">
                    <div class="date-numeric">18</div>
                    <div class="date-day">Thursday</div>
                  </div>
                  <div class="carousel-cell" id="7" onclick="myFunction(7)">
                    <div class="date-numeric">19</div>
                    <div class="date-day">Friday</div>
                  </div>
                </div>
                <ul class="time-ul">
                  <li class="time-li">
                    <div class="screens">
                      Screen 1
                    </div>
                    <div class="time-btn">
                      <button class="screen-time" onclick="timeFunction()">
                        1:05 PM
                      </button>
                      <button class="screen-time" onclick="timeFunction()">
                        4:00 PM
                      </button>
                      <button class="screen-time" onclick="timeFunction()">
                        9:00 PM
                      </button>
                    </div>
                  </li>
                  <li class="time-li">
                    <div class="screens">
                      Screen 2
                    </div>
                    <div class="time-btn">
                      <button class="screen-time" onclick="timeFunction()">
                        3:00 PM
                      </button>
                    </div>
                  </li>
                  <li class="time-li">
                    <div class="screens">
                      Screen 3
                    </div>
                    <div class="time-btn">
                      <button class="screen-time" onclick="timeFunction()">
                        9:05 AM
                      </button>
                      <button class="screen-time" onclick="timeFunction()">
                        10:00 PM
                      </button>
                    </div>
                  </li>
                  <li class="time-li">
                    <div class="screens">
                      Screen 4
                    </div>
                    <div class="time-btn">
                      <button class="screen-time" onclick="timeFunction()">
                        9:05 AM
                      </button>
                      <button class="screen-time" onclick="timeFunction()">
                        11:00 AM
                      </button>
                      <button class="screen-time" onclick="timeFunction()">
                        3:00 PM
                      </button>
                      <button class="screen-time" onclick="timeFunction()">
                        7:00 PM
                      </button>
                      <button class="screen-time" onclick="timeFunction()">
                        10:00 PM
                      </button>
                      <button class="screen-time" onclick="timeFunction()">
                        11:00 PM
                      </button>
                    </div>
                  </li>
                  <li class="time-li">
                    <div class="screens">
                      Screen 5
                    </div>
                    <div class="time-btn">
                      <button class="screen-time" onclick="timeFunction()">
                        9:05 AM
                      </button>
                      <button class="screen-time" onclick="timeFunction()">
                        12:00 PM
                      </button>
                      <button class="screen-time" onclick="timeFunction()">
                        1:00 PM
                      </button>
                      <button class="screen-time" onclick="timeFunction()">
                        3:00 PM
                      </button>
                    </div>
                  </li>

                </ul>
              </div>
              <a href="seat_sel.html"><input id="screen-next-btn" type="button" name="next-step" class="next-step" value="Continue Booking"
                 /></a>
              
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>