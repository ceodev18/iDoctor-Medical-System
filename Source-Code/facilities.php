<?php
$now=time();
session_start();
if(!isset($_SESSION['email'])){
header("location:index.php");
}
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
              <li class=""><a href="index.php#about">About US</a></li>
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
?>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <a href="measure.php">
    <div class="container">
      <div class="row">
        <div class="span6 offset2" id="about">
          <h2>Lets do some checkup</h2>
        </div>
        <div class="span4">
        <img src="img/checkup.jpg" alt="Lets do some checkup">
        </div>
      </div>
      <hr>
      </a>

      <a href="finddoctors.php">
      <div class="row">
        <div class="span6 offset2">
          <h2>Find a Medical Facility Near You</h2>
        </div>
        <div class="span4">
        <img src="img/finddoctors.jpg" alt="Find a Medical Facility Near You">
        </div>
        </div>
        <hr>
        </a>

        <a href="">
        <div class="row">
          <div class="span6 offset2">
            <h2>Print the Doctor Visit Report</h2>
          </div>
          <div class="span4">
          <img src="img/report.jpg" alt="Print the Doctor Visit Report">
          </div>
        </div>
        </a>


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
