<?php
$now=time();
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Contact &middot; iDoctor Medical System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/contact.css" rel="stylesheet">
    
    <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
        background: url('img/contactBG.png')0 0 repeat;
      }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="css/popup.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../assets/ico/favicon.png">
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
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
              <li><a href="index.php"><i class="icon-home icon-white"></i>Home</a></li>
              <li><a href="index.php#about">About US</a></li>
              <?php
               if(isset($_SESSION['email'])&& $now<$_SESSION['expire']){
                echo '<li class=""><a href="facilities.php">Facilities</a></li>';
                }
              ?>
              <li class="active"><a href="#">Contact US</a></li>
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
            ?>
                          <li><a href="signup.php">Sign Up</a></li>
                          <li><a href="#overlay" id="button">Sign In</a></li>
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
            
                      <label for ="signinpassword">Password</label><input type="password" name="signinpassword" class="input" id="signinpassword"required><br>
            
                      <input type="submit" class="center" id="submitbtn" value="Login">
    
                </form>

           </div>
      </div>
  
    <div class="container">

      <div id="contactform">
        <h2>Contact US</h2>
        <p class="main-desc">Please fill the form below to get in touch. </p>
      <form class="form-horizontal form-contact" action="contactprocess.php" method="post">
        <p><label for="name">Name*:</label><input type="text" class="input-block-level" placeholder="eg. Viraj Shah" id="name" name="name" required></p>
        <p><label for="email">Email Address*:</label><input type="email" class="input-block-level" placeholder="eg. viraj@idoctormedical.com" name="email" id="email" required></p>
        <p><label for="website">Website:</label><input type="text" class="input-block-level" placeholder="eg. www.idoctormedical.in" name="website" id="website"></p>
        <p><label for="companyname">Company Name:</label><input type="text" class="input-block-level" placeholder="eg. iDoctor Medical System" name="companyname" id="companyname"></p>
        <p><label for="message">Message*:</label><textarea class="input-block-level" rows="10" cols="50" placeholder="eg. Hey Sup !!" id="message" name="message" required></textarea></p>
        <center><button class="btn btn-large btn-primary" type="submit" data-loading-text="Submitting...">Submit</button></center>
      </form>
    </div>

    
      <footer>
        <p class="copyright">&copy; 2013. iDoctor Medical System. All rights reserved.</p>
      </footer>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/signin.js"></script>
    <script type="text/javascript" src="http://twitter.github.com/bootstrap/assets/js/bootstrap-dropdown.js"></script>

  </body>
</html>
