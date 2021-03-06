<?php
if(isset($_POST['submit'])){
    $to = "tommuhyka@hotmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['name'];
    $last_name = $_POST['phone'];
    $message = $_post['message'];
    $subject = "Booking Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $message;
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $message;

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Slopes Villa Hotel</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
  <meta property="og:title" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">

  <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">

  <!-- Place your favicon.ico and apple-touch-icon.png in the template root directory -->
  <link href="favicon.ico" rel="shortcut icon">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate-css/animate.min.css" rel="stylesheet">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- booking form css file -->
  <link href="css/bookingform.css" rel="stylesheet">

  <link rel="shortcut icon" href="img/favicon.ico">
</head>

<body>
  <div id="bodycover">
    <form id="booking-form" class="BookingForm booking-form" name="form1" method="post" action="bookingform.php">
          <!-- <div align="center"><img class="logo" src="img/logo4.png" title="Example Logo" alt="Example Logo"></div> -->
          <div class="h1">Hotel Reservation Form</div>
          <div id="form-message" class="message hide">
              Thank you for your enquiry!
          </div>
          <div id="form-content">
              <div class="group">
                  <label for="date-from">From</label>
                  <div class="addon-right">
                      <input id="date-from" name="date-from" class="form-control" type="text">
                      <i class="fa fa-calendar"></i>
                  </div>
              </div>
              <div class="group">
                  <label for="date-to">To</label>
                  <div class="addon-right">
                      <input id="date-to" name="date-to" class="form-control" type="text">
                      <i class="fa fa-calendar"></i>
                  </div>
              </div>
              <div class="group">
                  <label for="room-type">Room type</label>
                  <div>
                      <select id="room-type" name="room-type" class="form-control">
                          <option value="Single room">Single room</option>
                          <option value="Double room">Double room</option>
                          <option value="Apartment">Apartment</option>
                      </select>
                  </div>
              </div>

              <div class="group">
                  <label for="room-requirements">Room requirements</label>
                  <div>
                      <select id="room-requirements" name="room-requirements" class="form-control">
                          <option value="No Preference">No Preference</option>
                          <option value="Non Smoking">Non Smoking</option>
                          <option value="Smoking">Smoking</option>
                      </select>
                  </div>
              </div>




              <div class="group">
                  <label for="adults">Adults</label>
                  <div>
                      <select id="adults" name="adults" class="form-control">
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                      </select>
                  </div>
              </div>
              <div class="group">
                  <label for="children">Children</label>
                  <div>
                      <select id="children" name="children" class="form-control">
                          <option value="-">-</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                      </select>
                  </div>
              </div>
              <div class="group">
                  <label for="name">Name</label>
                  <div><input id="name" name="name" class="form-control" type="text" placeholder="Name"></div>
              </div>
              <div class="group">
                  <label for="email">Email</label>
                  <div><input id="email" name="email" class="form-control" type="email" placeholder="Email"></div>
              </div>
              <div class="group">
                  <label for="phone">Phone</label>
                  <div><input id="phone" name="subject phone" class="form-control" type="text" placeholder="Phone"></div>
              </div>
              <div class="group">
                  <label for="special-requirements">Special requirements</label>
                  <div><textarea id="special-requirements" name="message special-requirements" class="form-control" cols="" rows="5" placeholder="Special requirements"></textarea></div>
              </div>
              <div class="group submit">
                  <label class="empty"></label>
                  <div><input name="submit" type="submit" value="Submit"/></div>
              </div>
          </div>
          <div id="form-loading" class="hide"><i class="fa fa-circle-o-notch fa-spin"></i></div>
      </form>
  </div>
  <!-- Required JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/morphext/morphext.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/stickyjs/sticky.js"></script>
  <script src="lib/easing/easing.js"></script>

  <script src="js/bootsnipp.js"></script>

  <!-- Template Specisifc Custom Javascript File -->
  <script src="js/custom.js"></script>
  <!-- Scripts for booking form -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>
  <!-- <script src="bookingform/bookingform.js"></script> -->

</body>
</html>
