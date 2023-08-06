<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ticket Booking</title>
  <link rel="stylesheet" type="text/css" href="../assets/css/style-starter.css">
  <link rel="stylesheet" href="https://npmcdn.com/flickity@2/dist/flickity.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/progress.css">

  <link rel="stylesheet" type="text/css" href="../assets/css/ticket-booking.css">

  <!-- ..............For progress-bar............... -->
  <link rel="stylesheet" type="text/css" href="../assets/css/e-ticket.css">

  <link rel="stylesheet" type="text/css" href="../assets/css/payment.css" />
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
					{{-- <div class="search-right"> --}}
						{{-- <a href="#search" class="btn search-hny mr-lg-3 mt-lg-0 mt-4" title="search">Search <span
								class="fa fa-search ml-3" aria-hidden="true"></span></a> --}}
						<!-- search popup -->
						{{-- <div id="search" class="pop-overlay">
							<div class="popup">
								{{-- <form action="#" method="post" class="search-box">
									<input type="search" placeholder="Search your Keyword" name="search"
										required="required" autofocus="">
									<button type="submit" class="btn"><span class="fa fa-search"
											aria-hidden="true"></span></button>
								</form> --}}
								{{-- <div class="browse-items">
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
						</div> --}}
						<!-- /search popup -->
						<!--/search-right-->
					{{-- </div> --}}
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
   

          <form action="{{ route('seatSelection') }}" method="POST">
            @csrf
            <br>
           
              <div id="screen-select-div">
                {{-- <h2>Show time Selection: {{ $movie->title }}</h2> --}}
                <div class="carousel carousel-nav" data-flickity='{"contain": true, "pageDots": false }'>
                  <div class="carousel-cell" id="1" onclick="myFunction(0)">
                    <div class="date-numeric"></div>
                    <div class="date-day"></div>
                  </div>
                  <div class="carousel-cell" id="2" onclick="myFunction(1)">
                    <div class="date-numeric"></div>
                    <div class="date-day"></div>
                  </div>
                  <div class="carousel-cell" id="3" onclick="myFunction(2)">
                    <div class="date-numeric"></div>
                    <div class="date-day"></div>
                  </div>
                  <div class="carousel-cell" id="4" onclick="myFunction(3)">
                    <div class="date-numeric"></div>
                    <div class="date-day"></div>
                  </div>
                  <div class="carousel-cell" id="5" onclick="myFunction(4)">
                    <div class="date-numeric"></div>
                    <div class="date-day"></div>
                  </div>
                </div>
                
                <!-- Hiển thị thông tin ngày đã chọn -->
                <h3>Selected Date:</h3>
                <div id="date-numeric"></div>
              


              <!-- Phần hiển thị màn hình và giờ -->
             <!-- Phần hiển thị màn hình và giờ -->
                <ul class="time-ul">
                  <li class="time-li">
                    <div class="screens" onclick="screenFunction('Screen 1')">
                      Screen 1
                    </div>
                    <div class="time-btn">
                      <button type="button" class="screen-time" onclick="timeFunction('1:05 PM')">1:05 PM</button>
                      <button type="button" class="screen-time" onclick="timeFunction('4:00 PM')">4:00 PM</button>
                      <button type="button" class="screen-time" onclick="timeFunction('9:00 PM')">9:00 PM</button>
                    </div>
                  </li>
                  <li class="time-li">
                    <div class="screens" onclick="screenFunction('Screen 2')">
                      Screen 2
                    </div>
                    <div class="time-btn">
                      <button type="button" class="screen-time" onclick="timeFunction('3:00 PM')">3:00 PM</button>
                    </div>
                  </li>
                  <li class="time-li">
                    <div type="button" class="screens" onclick="screenFunction('Screen 3')">
                      Screen 3
                    </div>
                    <div class="time-btn">
                      <button type="button" class="screen-time" onclick="timeFunction('9:05 AM')">9:05 AM</button>
                      <button type="button" class="screen-time" onclick="timeFunction('10:00 PM')">10:00 PM</button>
                    </div>
                  </li>
                  <li class="time-li">
                    <div class="screens" onclick="screenFunction('Screen 4')">
                      Screen 4
                    </div>
                    <div class="time-btn">
                      <button type="button" class="screen-time" onclick="timeFunction('9:05 AM')">9:05 AM</button>
                      <button type="button" class="screen-time" onclick="timeFunction('11:00 AM')">11:00 AM</button>
                      <button type="button" class="screen-time" onclick="timeFunction('3:00 PM')">3:00 PM</button>
                      <button type="button" class="screen-time" onclick="timeFunction('7:00 PM')">7:00 PM</button>
                      <button type="button" class="screen-time" onclick="timeFunction('10:00 PM')">10:00 PM</button>
                      <button type="button" class="screen-time" onclick="timeFunction('11:00 PM')">11:00 PM</button>
                    </div>
                  </li>
                  <li class="time-li">
                    <div class="screens" onclick="screenFunction('Screen 5')">
                      Screen 5
                    </div>
                    <div class="time-btn">
                      <button type="button" class="screen-time" onclick="timeFunction('9:05 AM')">9:05 AM</button>
                      <button type="button" class="screen-time" onclick="timeFunction('12:00 PM')">12:00 PM</button>
                      <button type="button" class="screen-time" onclick="timeFunction('1:00 PM')">1:00 PM</button>
                      <button type="button" class="screen-time" onclick="timeFunction('3:00 PM')">3:00 PM</button>
                    </div>
                  </li>
                </ul>
              
                <!-- Hiển thị thông tin màn hình đã chọn -->
                <div>
                  <h3>Selected Screen:</h3>
                  <div id="selected-screen"></div>
                </div>
                
                <div>
                  <h3>Selected Time:</h3>
                  <div id="selected-time"></div>
                </div>
                <label for="selectedDate">Select Date:</label>
                <input type="hidden"  name="selectedDate" id="selectedDateInput" value="">
                <input type="hidden" name="selectedTime" id="selectedTimeInput" value="">
                <input type="hidden" name="selectedScreen" id="selectedScreenInput" value="">
            
                <!-- Button to continue booking -->
                <button type="submit">Continue Booking</button>
        </form>
              {{-- <a href="seat_sel.html">
                <input id="screen-next-btn" type="button" name="next-step" class="next-step" value="Continue Booking"
                 /></a> --}}
              
          </form>
        </div>
      </div>
    </div>
  </div>
  <script>
    var selectedDate = 0; // Biến lưu trữ giá trị đã chọn, ban đầu chọn là ngày hiện tại
    updateCarouselDates();

    function myFunction(selected) {
        selectedDate = selected;
        updateSelectedTime(); // Cập nhật thông tin thời gian đã chọn
    }

    function updateCarouselDates() {
        // Lấy ngày hiện tại
        var today = new Date();

        // Cập nhật ngày giờ trong div carousel
        for (var i = 1; i <= 5; i++) {
            var carouselCell = document.getElementById(i.toString());
            var numericElement = carouselCell.querySelector('.date-numeric');
            var dayElement = carouselCell.querySelector('.date-day');

            var futureDate = new Date(today);
            futureDate.setDate(today.getDate() + i - 1 + selectedDate);
            var selectedDay = futureDate.getDate();
            var selectedDayOfWeek = getDayOfWeek(futureDate.getDay());

            numericElement.textContent = selectedDay;
            dayElement.textContent = selectedDayOfWeek;
        }

        // Cập nhật thông tin ngày đã chọn
        updateSelectedTime();
    }

    function updateSelectedTime() {
        // Xử lý sự kiện khi người dùng chọn ngày
        var today = new Date();
        var selectedDay = today.getDate() + selectedDate; // Tính ngày tương ứng với lựa chọn
        var selectedTime = getCurrentTime();

        // Cập nhật thông tin ngày giờ
        var dateElement = document.querySelector('#date-numeric');
        var dayElement = document.querySelector('#date-day');
        var timeElement = document.querySelector('#current-time');

        dateElement.textContent = selectedDay;
        dayElement.textContent = getDayOfWeek(selectedDay);
        timeElement.textContent = selectedTime;

        // Cập nhật giá trị ngày đã chọn vào input field
        // document.getElementById('selectedDateInput').value = selectedDay;
    }

    function getCurrentTime() {
        // Hàm này trả về thời gian hiện tại với định dạng hh:mm AM/PM
        var today = new Date();
        var hours = today.getHours();
        var minutes = today.getMinutes();
        var ampm = hours >= 12 ? 'PM' : 'AM';
        hours = hours % 12 || 12; // Định dạng giờ theo chuẩn 12 giờ
        minutes = minutes < 10 ? '0' + minutes : minutes;
        return hours + ':' + minutes + ' ' + ampm;
    }

    function getDayOfWeek(dayNumber) {
        // Hàm này trả về tên ngày trong tuần tương ứng với số ngày
        var daysOfWeek = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
        return daysOfWeek[dayNumber];
    }
</script>
  

  <!-- Script JavaScript cho phần đặt giờ -->
<!-- Script JavaScript cho phần đặt giờ và màn hình -->
<!-- Script JavaScript cho phần đặt giờ và màn hình -->
<!-- Script JavaScript cho phần đặt giờ và màn hình -->
<!-- Script JavaScript cho phần đặt giờ và màn hình -->
<script>
  var selectedTime = ""; // Biến lưu trữ giờ đã chọn, ban đầu không có giờ nào được chọn
  var selectedScreen = ""; // Biến lưu trữ màn hình đã chọn, ban đầu không có màn hình nào được chọn

  function timeFunction(time) {
    selectedTime = time;
    updateSelectedDateTime(); // Cập nhật thông tin ngày và giờ đã chọn
    document.getElementById('selectedDateInput').value = selectedDate;

  }

  function screenFunction(screen) {
    selectedScreen = screen;
    updateSelectedScreen(); // Cập nhật thông tin màn hình đã chọn
    document.getElementById('selectedScreenInput').value = selectedScreen;

  }

  function updateSelectedDateTime() {
    // Cập nhật thông tin giờ đã chọn
    var selectedTimeElement = document.getElementById('selected-time');
    selectedTimeElement.textContent = "Selected Time: " + selectedTime;

    // Nếu chưa có màn hình được chọn thì lấy màn hình đầu tiên trong danh sách
    if (selectedScreen === "") {
      var firstScreen = document.querySelector('.screens');
      if (firstScreen) {
        selectedScreen = firstScreen.textContent.trim();
        updateSelectedScreen(); // Cập nhật thông tin màn hình đã chọn
      }
    }
    
        document.getElementById('selectedTimeInput').value = selectedTime;
        document.getElementById('selectedDateInput').value = selectedDate;

  }

  function updateSelectedScreen() {
    // Cập nhật thông tin màn hình đã chọn
    var selectedScreenElement = document.getElementById('selected-screen');
    selectedScreenElement.textContent = "Selected Screen: " + selectedScreen;
  }

  // Gọi hàm cập nhật thông tin ban đầu khi trang được load
  updateSelectedDateTime();
</script>
<script>
  
  function goToSeatSelection() {
        // Submit the form when the "Continue Booking" button is clicked
        document.querySelector('form').submit();
    }
</script>




  
  
  
  
</body>
</html>