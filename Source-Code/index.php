<?php
$now=time();
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>iDoctor Medical System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
    <link href="css/popup.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="ico/favicon.png">


  </head>

  <body data-spy="scroll" data-offset="0" data-target="#scrollspy">

    <div class="navbar navbar-inverse navbar-fixed-top" id="scrollspy">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="index.php">iDoctor Medical System</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="index.php"><i class="icon-home icon-white"></i>Home</a></li>
              <li class=""><a href="#about">About US</a></li>
              <?php
               if(isset($_SESSION['email'])&& $now<$_SESSION['expire']){
                echo '<li class=""><a href="facilities.php">Facilities</a></li>';
                }
              ?>
              <li class=""><a href="contact.php">Contact US</a></li>
            </ul>
            <ul class="nav pull-right">
            <?php
            if(isset($_SESSION['email'])&& $now<$_SESSION['expire']){
                            echo '<li class="dropdown">
                                    <a href="#" class="dropdown-toggle active" data-toggle="dropdown">'.
                                        $_SESSION['email'].'
                                        <b class="caret"></b>
                                      </a>
                                      <ul class="dropdown-menu">
                                        <li><a href="updateprofile.php">Edit Profile</a></li>
                                        <li><a href="changepassword.php">Change Password</a></li>
                                        <li><a href="logout.php">Sign Out</a></li>
                                      </ul>
                                  </li>';
            }
            else {
              session_destroy();
            ?>
                          <li><a href="signup.php">Sign Up</a></li>
                          <li><a href="#overlay" class="signin" id="button">Sign In</a></li>
            <?php
            }
            ?>            
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div id="overlay">
            
            <div id="popup">
            <!-- ANY CONTENTS -->
                <a href=""><img class="close_button" src="img/close.png"/></a>
                
                <form class="login" method="post" action="signinprocess.php">

                      <label for="signinemail">Email</label>
                      <input type="email" name="signinemail" id="signinemail"  class="input" placeholder="Enter your email here" required><br><br>
                      <label id="emailerror"></label>
                      <label for ="signinpassword">Password</label>
                      <input type="password" name="signinpassword" class="input" id="signinpassword"required><br>
                      <label for="" id="passworderror"></label>
                      <input type="submit" class="center" id="submitbtn" value="Login">
    
                </form>

           </div>
      </div>

      <div id="alert">
      </div>

    <div class="container">
      <div class="row">
        <div class="span8" id="about">
          <h2>Measure Your Reports at Home</h2>
          <p>With this innovative system, you can measure your vitals with the comfort or your home. No need to visit medical facilities for measuring your vitals anymore.</p>
        </div>
        <div class="span4">
        <img src="img/measureathome.jpg" alt="Measure Your Reports at Home">
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="span4">
        <img src="img/googlemaps.jpg" alt="ind Nearest Doctor Using Google Maps">
        </div>
        <div class="span8">
          <h2>Find Nearest Medical Facility Using Google Maps</h2>
          <p>Using google maps api, our system will provide you the location to the nearest hospitals,doctors and pharmacies so that the patient does not waste precious time searching for the location.</p>
        </div>
        </div>
        <hr>

        <div class="row">
        <div class="span8">
          <h2>Instant Notification via SMS and Email</h2>
          <p>Instant notification will be generated if the measured vital is out of normal range. The doctor will be notified by email, short messaging service or both.</p>
        </div>
        <div class="span4">
        <img src="img/email.jpg" alt="Instant Notification via SMS and Email">
        </div>
        </div>
        <hr>

        <div class="row">
        <div class="span4">
        <img src="img/incaseofemergency.jpg" alt="In Case of Emergency">
        </div>
        <div class="span8">
          <h2>In Case of Emergency</h2>
          <p>We notify nearest hospitals about the patient details and ask them to be prepared for that patient.</p>
        </div>
        </div>
        <hr>

        <div class="row">
        <div class="span8">
          <h2>Ask Health Related Questions to Doctors</h2>
          <p>Patients can ask any health related questions to doctors who can help them with their problem.</p>
        </div>
        <div class="span4">
        <img src="img/videoconferencing.jpg" alt="Ask health related Questions to Doctors">
        </div>
        </div>
        <hr>

        <div class="row">
        <div class="span4">
        <img src="img/ambulance.jpg" alt="Used in Ambulances">
        </div>
        <div class="span8">
          <h2>Used in Ambulances</h2>
          <p>At the time of transit from the patient's location to the hospital a report on current vitals can be prepared in the ambulance itself.</p>
        </div>
        </div>
        <hr>

        <div class="row">
        <div class="span8">
          <h2>Nurse's Friend</h2>
          <p>A nurse or assistant to the doctor can use it to generate reports and present it to doctors so that they don't waste crucial time.</p>
        </div>
        <div class="span4">
        <img src="img/nurse.jpg" alt="Nurse's Friend">
        </div>
        </div>
        <hr>

        <div class="row">
        <div class="span4">
        <img src="img/you.jpg" alt="Can be used by You">
        </div>
        <div class="span8">
          <h2>Above all it can be used by you</h2>
          <p>You yourself can use it at the comfort of your home and generate your own reports and consult the doctors. Our system can also recommend the best and nearest doctor that can help you.</p>
        </div>
        </div>
      </div>

      <hr>

      <footer>
        <p class="copyright">&copy; 2013. iDoctor Medical System. All rights reserved.</p>
      </footer>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://twitter.github.com/bootstrap/assets/js/bootstrap-dropdown.js"></script>
  </body>
</html>
