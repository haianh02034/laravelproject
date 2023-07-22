<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ticket Booking</title>
        <link rel="stylesheet" type="text/css" href="assets/css/style-starter.css">
        <!-- <link rel="stylesheet" href="https://npmcdn.com/flickity@2/dist/flickity.css"> -->
        <!-- <link rel="stylesheet" type="text/css" href="assets/css/progress.css"> -->
      
        <link rel="stylesheet" type="text/css" href="assets/css/ticket-booking.css">
      
        <!-- ..............For progress-bar............... -->
        <link rel="stylesheet" type="text/css" href="assets/css/e-ticket.css">
      
        <link rel="stylesheet" type="text/css" href="assets/css/payment.css" />
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
      
      
    <div id="payment_div">
        <div class="payment-row">
          <div class="col-75">
            <div class="payment-container">
              <div class="payment-row">
                <div class="col-50">
                  <h3 id="payment-h3">Payment</h3>
                  <div class="payment-row payment">
                    <div class="col-50 payment">
                      <label for="card" class="method card">
                        <div class="icon-container">
                          <i class="fa fa-cc-visa" style="color: navy"></i>
                          <i class="fa fa-cc-amex" style="color: blue"></i>
                          <i class="fa fa-cc-mastercard" style="color: red"></i>
                          <i class="fa fa-cc-discover" style="color: orange"></i>
                        </div>
                        <div class="radio-input">
                          <input type="radio" id="card" />
                          Pay RS.200.00 with credit card
                        </div>
                      </label>
                    </div>
                    <div class="col-50 payment">
                      <label for="paypal" class="method paypal">
                        <div class="icon-container">
                          <i class="fa fa-paypal" style="color: navy"></i>
                        </div>
                        <div class="radio-input">
                          <input id="paypal" type="radio" checked>
                          Pay $30.00 with PayPal
                        </div>
                      </label>
                    </div>
                  </div>

                  <div class="payment-row">
                    <div class="col-50">
                      <label for="cname">Cardholder's Name</label>
                      <input type="text" id="cname" name="cardname" placeholder="Firstname Lastname" required />
                    </div>
                    <div class="col-50">
                      <label for="ccnum">Credit card number</label>
                      <input type="text" id="ccnum" name="cardnumber" placeholder="xxxx-xxxx-xxxx-xxxx"
                        required />
                    </div>
                  </div>
                  <div class="payment-row">
                    <div class="col-50">
                      <label for="expmonth">Exp Month</label>
                      <input type="text" id="expmonth" name="expmonth" placeholder="September" required />
                    </div>
                    <div class="col-50">
                      <div class="payment-row">
                        <div class="col-50">
                          <label for="expyear">Exp Year</label>
                          <input type="text" id="expyear" name="expyear" placeholder="yyyy" required />
                        </div>
                        <div class="col-50">
                          <label for="cvv">CVV</label>
                          <input type="text" id="cvv" name="cvv" placeholder="xxx" required />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <a href="e-ticket.html"> <input  type="button" name="next-step" class="next-step pay-btn" value="Confirm Payment" /></a>
      <a href="seat_sel.html"><input type="button" name="previous-step" class="cancel-pay-btn" value="Cancel Payment"/></a>
     

</body>
</html>