<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Movie Ticket Booking Widget Flat Responsive Widget Template :: w3layouts</title>
        <!-- for-mobile-apps -->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords"
            content="Movie Ticket Booking Widget Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
        <script src="js/jquery-1.11.0.min.js"></script>
        <script src="js/jquery.seat-charts.js"></script>
     <style>
        .next-step {
            width: min-content;
            font-weight: bold;
            color: white;
            border: 0 none;
            border-radius: 0px;
            cursor: pointer;
            font-size: 0.8rem;
            padding: 10px 35px;
            margin: 10px 5px 10px 0px;
            float: right;
            border-radius: 22px;
            background: rgb(58, 223, 25);
        }
        
        .previous-step {
            width: min-content;
            font-weight: bold;
            color: white;
            border: 0 none;
            border-radius: 0px;
            cursor: pointer;
            font-size: 0.8rem;
            padding: 10px 35px;
            margin: 10px 5px 10px 0px;
            float: right;
            border-radius: 58px;
            margin-left: 20px;
	        margin-right: 20px;
            background: rgb(235, 34, 34);
	        
        }
     </style>
        <link rel="stylesheet" type="text/css" href="assets/css/style-starter.css">
        

      
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
    <fieldset>
<form>
        <div  style="  box-shadow: 0 14px 12px 0 var(--theme-border), 0 10px 50px 0 var(--theme-border); width: 800px; height: 550px; display: block; margin-left: auto; margin-right: auto;">
            <div class="content">
               <h3 style="text-align: center;margin-bottom:1dvb;" >Seat Selection</h3>
                <div class="main">
                    <div class="demo">
                        <div id="seat-map">
                            <div class="front">SCREEN</div>					
                        </div>
                        <div class="booking-details">
                            <ul class="book-left">
                                <li>Movie </li>
                                <li>Selected Screen</li>
                                <li>Time </li>
                                <li>Tickets</li>
                                <li>Total</li>
                                <li>Selected Seats</li>
                            </ul>
                            <ul class="book-right">
                                {{-- <li>: @if ($movie)
                                <h3>{{ $movie->title }}</h3>
                            @else
                                <p>No movie information available.</p>
                            @endif</li> --}}
                                <li>: <span id="selected-screen"></span>{{ $selectedScreen }}</li>
                                <li>: <span id="selected-date"></span>{{ $selectedDate }}</li>
                                <li>: <span id="selected-time"></span>{{ $selectedTime }}</li>
                                <li>: <span id="counter">0</span></li>
                                <li>: <b><i></i><span id="total">0</span>$</b></li>

                                


                              
                            </ul>
                            <div class="clear"></div>
                            <ul id="selected-seats" class="scrollbar scrollbar1"></ul>
                        
                                    
                            <div id="legend"></div>
                        </div>
                        
                        <script type="text/javascript">
                            var price = 40; //price
                            $(document).ready(function () {
                                var $cart = $('#selected-seats'), //Sitting Area
                                    $counter = $('#counter'), //Votes
                                    $total = $('#total'); //Total money
            
                                var sc = $('#seat-map').seatCharts({
                                    map: [ //Seating chart
                                        'aaaaaaaaaa',
                                        'aaaaaaaaaa',
                                        '__________',
                                        'aaaaaaaa__',
                                        'aaaaaaaaaa',
                                        'aaaaaaaaaa',
                                        'aaaaaaaaaa',
                                        'aaaaaaaaaa',
                                        'aaaaaaaaaa',
                                        '__aaaaaa__'
                                    ],
                                    naming: {
                                        top: false,
                                        getLabel: function (character, row, column) {
                                            return column;
                                        }
                                    },
                                    legend: { //Definition legend
                                        node: $('#legend'),
                                        items: [
                                            ['a', 'available', 'Available'],
                                            ['a', 'unavailable', 'Sold'],
                                            ['a', 'selected', 'Selected']
                                        ]
                                    },
                                    click: function () { //Click event
                                        if (this.status() == 'available') { //optional seat
                                            $('<li>R-' + (this.settings.row + 1) + '	S-' + this.settings.label + '</li>')
                                                .attr('id', 'cart-item-' + this.settings.id)
                                                .data('seatId', this.settings.id)
                                                .appendTo($cart);
            
                                            $counter.text(sc.find('selected').length + 1);
                                            $total.text(recalculateTotal(sc) + price);
            
                                            return 'selected';
                                        } else if (this.status() == 'selected') { //Checked
                                            //Update Number
                                            $counter.text(sc.find('selected').length - 1);
                                            //update totalnum
                                            $total.text(recalculateTotal(sc) - price);
            
                                            //Delete reservation
                                            $('#cart-item-' + this.settings.id).remove();
                                            //optional
                                            return 'available';
                                        } else if (this.status() == 'unavailable') { //sold
                                            return 'unavailable';
                                        } else {
                                            return this.style();
                                        }
                                    }
                                });
                                //sold seat
                                sc.get(['1_3', '4_4', '4_5', '6_6', '6_7', '8_5', '8_6', '8_7', '8_8', '10_1', '10_2']).status(
                                    'unavailable');
            
                            });
                            function generateSeatMap(seats) {
                var $seatMap = $('#seat-map');
                var rowCount = 10; // Set the number of rows for your seat map
                var columnCount = 10; // Set the number of columns for your seat map

                for (var row = 1; row <= rowCount; row++) {
                    var rowElem = $('<div class="seat-row"></div>');
                    for (var column = 1; column <= columnCount; column++) {
                        var seatId = row + '_' + column;
                        var seatClass = 'seat';
                        var isBooked = seats.some(seat => seat.row == row && seat.column == column && seat.is_booked);

                        if (isBooked) {
                            seatClass += ' booked';
                        } else {
                            seatClass += ' available';
                        }

                        $('<div class="' + seatClass + '">' + row + '-' + column + '</div>')
                            .attr('data-seat-id', seatId)
                            .appendTo(rowElem);
                    }
                    rowElem.appendTo($seatMap);
                }

                // Add click event for selecting seats
                $seatMap.on('click', '.available', function () {
                    var seatId = $(this).data('seat-id');
                    var seatIndex = selectedSeats.indexOf(seatId);
                    if (seatIndex > -1) {
                        // Seat is already selected, so remove it
                        selectedSeats.splice(seatIndex, 1);
                    } else {
                        // Seat is not selected, so add it
                        selectedSeats.push(seatId);
                    }
                    updateSelectedSeats();
                });

                updateSelectedSeats();
            }

            function updateSelectedSeats() {
                var $selectedSeats = $('#selected-seats');
                $selectedSeats.empty();
                selectedSeats.forEach(seatId => {
                    $selectedSeats.append('<li>' + seatId + '</li>');
                });
                $('#counter').text(selectedSeats.length);
                $('#total').text(selectedSeats.length * price);
            }
        


                            //sum total money


                            function recalculateTotal(sc) {
                                var total = 0;
                                sc.find('selected').each(function () {
                                    total += price;
                                });
            
                                return total;
                            }
                        </script>
                    </div>
                </div>
                <script type="text/javascript" src="js/theme-change-seat-sel.js"></script>
                <script src="js/jquery.nicescroll.js"></script>
                <script src="js/scripts.js"></script>

        </div>
        <br>
    </form>
      </fieldset>

      <a href="payment.html" ><input  type="button" name="next-step" class="next-step" value="Proceed to Payment" /></a>
      <a href="index.html"><input type="button" name="previous-step" class="previous-step" value="Back" /></a>
      
        
              
            </div>
          </div>
        </div>
    </div>
    <script>
        // Lấy thông tin từ URL parameters
        const urlParams = new URLSearchParams(window.location.search);
        const selectedDate = urlParams.get("date");
        const selectedTime = urlParams.get("time");
        const selectedScreen = urlParams.get("screen");
    
        // Cập nhật thông tin đã chọn lên trang
        document.getElementById("selected-date").textContent = selectedDate;
        document.getElementById("selected-time").textContent = selectedTime;
        document.getElementById("selected-screen").textContent = selectedScreen;
      </script>
    
</body>
</html>