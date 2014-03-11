<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Change Password &middot; iDoctor Medical System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
        background: url('img/contactBG.png');
      }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="css/changepassword.css" rel="stylesheet">
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
              <li><a href="facilities.php">Facilities</a></li>
              <li><a href="contact.php">Contact US</a></li>
            </ul>
            <ul class="nav pull-right">
                <?php
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
              ?>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

      <div class="container">
      <form class="form-horizontal" id="changepassword-form1">
      <h2>Change Password</h2>
      <div class="control-group">
        <label class="control-label" for="oldpassword">Old Password</label>
        <div class="controls">
          <input type="password" id="oldpassword" name="oldpassword" required>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="newpassword">New Password</label>
        <div class="controls">
          <input type="password" id="newpassword" name="newpassword" required>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="rnewpassword">Re-type New Password</label>
        <div class="controls">
          <input type="password" id="rnewpassword" name="rnewpassword" required>
        </div>
      </div>
      <div class="control-group">
        <div class="controls">
          <button type="button" class="btn btn-primary" onclick="changepassword()">Change</button>
          <button type="button" class="btn" onclick="reset()">Reset</button>
        </div>
      </div>
      </form>

      <div id="changepasswordalert">
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
    <script src="js/signin.js"></script>
    <script>
    function changepassword()
            {
                var xmlhttp;
                var oldp=document.getElementById("oldpassword").value;
                var newp=document.getElementById("newpassword").value;
                var rnewp=document.getElementById("rnewpassword").value;
                if(oldp=="")
                {
                  document.getElementById("changepasswordalert").innerHTML="Please enter old password.";
                  return;
                }
                 if(newp=="")
                {
                  document.getElementById("changepasswordalert").innerHTML="Please enter new password.";
                  return;
                }
                 if(rnewp=="")
                {
                  document.getElementById("changepasswordalert").innerHTML="Please re-type new password.";
                  return;
                }
                 if(newp!=rnewp)
                {
                  document.getElementById("changepasswordalert").innerHTML="New Password field and Re-type new password fields do not match.";
                  return;
                }
                if (window.XMLHttpRequest)
                  {// code for IE7+, Firefox, Chrome, Opera, Safari
                  xmlhttp=new XMLHttpRequest();
                  }
                else
                  {// code for IE6, IE5
                  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                  }
                xmlhttp.onreadystatechange=function()
                  {
                  if (xmlhttp.readyState==4 && xmlhttp.status==200)
                    {
                    document.getElementById("changepasswordalert").innerHTML=xmlhttp.responseText;
                    document.getElementById("oldpassword").value="";
                    document.getElementById("newpassword").value="";
                    document.getElementById("rnewpassword").value="";
                    }
                  }
                document.getElementById("changepasswordalert").innerHTML="";
                xmlhttp.open("GET","changepasswordprocess.php?oldpassword="+oldp+"&newpassword="+newp+"&rnewpassword="+rnewp,true);
                xmlhttp.send();
            }

      function reset()
      {
        document.getElementById("oldpassword").value="";
        document.getElementById("newpassword").value="";
        document.getElementById("rnewpassword").value="";
      }
    </script>

  </body>
</html>
