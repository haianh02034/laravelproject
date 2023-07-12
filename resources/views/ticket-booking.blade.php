<!DOCTYPE html>
<html>

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
        <h1><a class="navbar-brand" href="index.html"><span class="fa fa-play icon-log" aria-hidden="true"></span>
          Cinema A </a></h1>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        </div>

        {{-- <div class="Login_SignUp" id="login_s">
          <!-- style="font-size: 2rem ; display: inline-block; position: relative;" -->
          <!-- <li class="nav-item"> -->
          <a class="nav-link" href="sign_in.html"><i class="fa fa-user-circle-o"></i></a>
          <!-- </li> -->
        </div> --}}
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
            <ul id="progressbar" class="progressbar-class">
              <li class="active" id="step1">Show timing selection</li>
              <li id="step2" class="not_active">Seat Selection</li>
              <li id="step3" class="not_active">Payment</li>
              <li id="step4" class="not_active">E-Ticket</li>
            </ul>
            <br>
            <fieldset>
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
                      <button class="screen-time" onclick="timeFunction('Today, 1:05 PM')">
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
              <input id="screen-next-btn" type="submit" name="next-step" class="next-step" value="Continue Booking" onclick="redirectFunction()"
            
                disabled />
                <script>
                    function myFunction(date, time) {
                        var url = "display_selection.html?date=" + encodeURIComponent(date) + "&time=" + encodeURIComponent(time);
                        window.location.href = url;
                      }




                </script>
                
            </fieldset>
            <fieldset>
              <div>
                <iframe id="seat-sel-iframe"
                  style="  box-shadow: 0 14px 12px 0 var(--theme-border), 0 10px 50px 0 var(--theme-border); width: 800px; height: 550px; display: block; margin-left: auto; margin-right: auto;"
                  src="seat_sel.html"></iframe>
              </div>
              <br>
              <input type="button" name="next-step" class="next-step" value="Proceed to Payment" />
              <input type="button" name="previous-step" class="previous-step" value="Back" />
            </fieldset>
            <fieldset>
              <!-- Payment Page -->
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
              <input type="button" name="next-step" class="next-step pay-btn" value="Confirm Payment" />
              <input type="button" name="previous-step" class="cancel-pay-btn" value="Cancel Payment"
                onclick="location.href='index.html';" />
            </fieldset>
            <fieldset>
              <h2>E-Ticket</h2>
              <div class="ticket-body">
                <div class="ticket">
                  <div class="holes-top"></div>
                  <div class="title">
                    <p class="cinema">Cinema A Entertainment</p>
                    <p class="movie-title">Commando-3</p>
                  </div>
                  <div class="poster">
                    <img src="data:image/jpeg;base64,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"
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
                        <td class="bigger">5</td>
                        <td class="bigger">5</td>
                      </tr>
                    </table>
                    <table class="info-table ticket-table">
                      <tr>
                        <th>PRICE</th>
                        <th>DATE</th>
                        <th>TIME</th>
                      </tr>
                      <tr>
                        <td>40 $</td>
                        <td>00/00/00</td>
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
              <input type="button" name="previous-step" class="home-page-btn" value="Go back Home Page"
                onclick="location.href='index.html';" />
            </fieldset>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
<script>
  let prevId = "1";

  window.onload = function () {
    document.getElementById("screen-next-btn").disabled = true;
  }

  function timeFunction() {
    document.getElementById("screen-next-btn").disabled = false;
  }

  function myFunction(id) {
    document.getElementById(prevId).style.background = "rgb(243, 235, 235)";
    document.getElementById(id).style.background = "#df0e62";
    prevId = id;
  }
</script>

<script src="https://npmcdn.com/flickity@2/dist/flickity.pkgd.js"></script>
<script type="text/javascript" src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'>
</script>
<script type="text/javascript" src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src="assets/js/theme-change.js"></script>

<script type="text/javascript" src="assets/js/ticket-booking.js"></script>

</html>