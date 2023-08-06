<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ticket Booking</title>
        <link rel="stylesheet" type="text/css" href="assets/css/style-starter.css">
      
      
        <link rel="stylesheet" type="text/css" href="assets/css/ticket-booking.css">
      
        <!-- ..............For progress-bar............... -->
        <link rel="stylesheet" type="text/css" href="assets/css/e-ticket.css">
      
        
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
    <fieldset>
        <h2>E-Ticket</h2>
        <div class="ticket-body">
          <div class="ticket">
            <div class="holes-top"></div>
            <div class="title">
              <p class="cinema">MyShowz Entertainment</p>
              <p class="movie-title">Commando 3</p>
            </div>
            <div class="poster" >
              <img src="https://th.bing.com/th/id/OIP.3zYU9dmr5QPUTW1vC_bFUwHaKl?w=131&h=187&c=7&r=0&o=5&dpr=1.3&pid=1.7"
                alt="Movie: Only God Forgives" />
            </div>
            <div class="info">
              <table class="info-table ticket-table">
                <tr>
                  <th>SCREEN</th>
                  <th>ROW</th>
                  <th>COLUMN</th>
                </tr>
                <tr>
                  <td class="bigger">1</td>
                  <td class="bigger">6</td>
                  <td class="bigger">3</td>
                </tr>
              </table>
              <table class="info-table ticket-table">
                <tr>
                  <th>PRICE</th>
                  <th>DATE</th>
                  <th>TIME</th>
                </tr>
                <tr>
                  <td>RS.110</td>
                  <td>13</td>
                  <td>1:05 PM</td>
                </tr>
              </table>
            </div>
            <div class="holes-lower"></div>
            <div class="serial">
              <table class="barcode ticket-table">
                <tr>
                  <td style="background-color:black;"></td>
                  <td style="background-color:black;"></td>
                  <td style="background-color:white;"></td>
                  <td style="background-color:black;"></td>
                  <td style="background-color:white;"></td>
                  <td style="background-color:white;"></td>
                  <td style="background-color:black;"></td>
                  <td style="background-color:black;"></td>
                  <td style="background-color:white;"></td>
                  <td style="background-color:black;"></td>
                  <td style="background-color:white;"></td>
                  <td style="background-color:white;"></td>
                  <td style="background-color:black;"></td>
                  <td style="background-color:white;"></td>
                  <td style="background-color:black;"></td>
                  <td style="background-color:white;"></td>
                  <td style="background-color:white;"></td>
                  <td style="background-color:black;"></td>
                  <td style="background-color:black;"></td>
                  <td style="background-color:white;"></td>
                  <td style="background-color:black;"></td>
                  <td style="background-color:black;"></td>
                  <td style="background-color:white;"></td>
                  <td style="background-color:white;"></td>
                  <td style="background-color:black;"></td>
                  <td style="background-color:white;"></td>
                  <td style="background-color:white;"></td>
                  <td style="background-color:black;"></td>
                  <td style="background-color:white;"></td>
                  <td style="background-color:black;"></td>
                  <td style="background-color:white;"></td>
                  <td style="background-color:white;"></td>
                  <td style="background-color:black;"></td>
                  <td style="background-color:white;"></td>
                  <td style="background-color:black;"></td>
                  <td style="background-color:black;"></td>
                  <td style="background-color:white;"></td>
                  <td style="background-color:white;"></td>
                  <td style="background-color:black;"></td>
                  <td style="background-color:white;"></td>
                  <td style="background-color:black;"></td>
                  <td style="background-color:white;"></td>
                  <td style="background-color:white;"></td>
                  <td style="background-color:black;"></td>
                  <td style="background-color:white;"></td>
                  <td style="background-color:black;"></td>
                  <td style="background-color:black;"></td>
                  <td style="background-color:white;"></td>
                  <td style="background-color:white;"></td>
                  <td style="background-color:black;"></td>
                  <td style="background-color:black;"></td>
                  <td style="background-color:black;"></td>
                  <td style="background-color:black;"></td>
                  <td style="background-color:white;"></td>
                  <td style="background-color:black;"></td>
                  <td style="background-color:white;"></td>
                  <td style="background-color:black;"></td>
                  <td style="background-color:black;"></td>
                  <td style="background-color:white;"></td>
                  <td style="background-color:white;"></td>
                  <td style="background-color:black;"></td>
                  <td style="background-color:white;"></td>
                  <td style="background-color:black;"></td>
                  <td style="background-color:white;"></td>
                  <td style="background-color:black;"></td>
                  <td style="background-color:black;"></td>
                  <td style="background-color:white;"></td>
                  <td style="background-color:black;"></td>
                  <td style="background-color:black;"></td>
                  <td style="background-color:white;"></td>
                  <td style="background-color:white;"></td>
                  <td style="background-color:black;"></td>
                  <td style="background-color:white;"></td>
                  <td style="background-color:white;"></td>
                  <td style="background-color:white;"></td>
                  <td style="background-color:black;"></td>
                  <td style="background-color:white;"></td>
                  <td style="background-color:black;"></td>
                  <td style="background-color:black;"></td>
                  <td style="background-color:black;"></td>
                  <td style="background-color:white;"></td>
                  <td style="background-color:black;"></td>
                  <td style="background-color:white;"></td>
                  <td style="background-color:black;"></td>
                  <td style="background-color:white;"></td>
                  <td style="background-color:white;"></td>
                  <td style="background-color:black;"></td>
                  <td style="background-color:black;"></td>
                  <td style="background-color:black;"></td>
                  <td style="background-color:white;"></td>
                  <td style="background-color:black;"></td>
                  <td style="background-color:white;"></td>
                  <td style="background-color:black;"></td>
                  <td style="background-color:white;"></td>
                  <td style="background-color:black;"></td>
                  <td style="background-color:black;"></td>
                  <td style="background-color:white;"></td>
                  <td style="background-color:black;"></td>
                  <td style="background-color:white;"></td>
                  <td style="background-color:black;"></td>
                  <td style="background-color:white;"></td>
                  <td style="background-color:white;"></td>
                  <td style="background-color:white;"></td>
                  <td style="background-color:black;"></td>
                  <td style="background-color:white;"></td>
                  <td style="background-color:black;"></td>
                  <td style="background-color:black;"></td>
                  <td style="background-color:white;"></td>
                  <td style="background-color:black;"></td>
                  <td style="background-color:white;"></td>
                  <td style="background-color:white;"></td>
                  <td style="background-color:white;"></td>
                  <td style="background-color:black;"></td>
                  <td style="background-color:white;"></td>
                  <td style="background-color:black;"></td>
                  <td style="background-color:white;"></td>
                </tr>
              </table>
              <table class="numbers ticket-table">
                <tr>
                  <td>9</td>
                  <td>1</td>
                  <td>7</td>
                  <td>3</td>
                  <td>7</td>
                  <td>5</td>
                  <td>4</td>
                  <td>4</td>
                  <td>4</td>
                  <td>5</td>
                  <td>4</td>
                  <td>1</td>
                  <td>4</td>
                  <td>7</td>
                  <td>8</td>
                  <td>7</td>
                  <td>3</td>
                  <td>4</td>
                  <td>1</td>
                  <td>4</td>
                  <td>5</td>
                  <td>2</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <input type="button" name="previous-step" class="home-page-btn" value="Browse to Home Page"
          onclick="location.href='index.html';" />
      </fieldset>
</body>
</html>