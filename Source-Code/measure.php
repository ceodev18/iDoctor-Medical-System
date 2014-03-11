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
    <title>Measure &middot; iDoctor Medical System</title>
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
        background: url('img/contactBG.png')0 0 repeat;
      }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="css/popup.css" rel="stylesheet">
    <link href="css/measure.css" rel="stylesheet">

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
              <li class=""><a href="contact.php">Contact US</a></li>
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

      <div id="measureform">
        <h2>Measure</h2>
        <p class="main-desc">Select the vital you want to measure</p><br><br>
      <form class="form-horizontal" action="">
       <div class="tabbable tabs-left">
        <ul class="nav nav-tabs">
          <li class="active">
            <a href="#temperature" data-toggle="tab">Temperature</a>
          </li>
          <li class>
            <a href="#bloodpressure" data-toggle="tab">Blood Pressure</a>
          </li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane active" id="temperature">
            <div class="control-group">
              <label class="control-label" for="temp">Body Temperature:</label>
              <div class="controls">
                <div class="input-append">
                  <input class="span2" id="temp1" type="text" required>
                  <span class="add-on">F</span>
                </div>
              </div>
            </div>
             <div class="control-group">
              <div class="controls">
                  <label class="checkbox">
                    <input type="checkbox" id="preg">Pregnant
                  </label>
              </div>
            </div>
            <div class="control-group">
              <div class="controls">
                  <button class="btn btn-primary" type="button" onclick="temp_calc()">Go</button>
                  <a href="fullonsmsapi.php" class="btn" >Send SMS</a>
              </div>
            </div>
                <div id="tempresult">
                </div>
          </div>




          <div class="tab-pane" id="bloodpressure">
            <div class="control-group">
                    <label class="control-label" for="sysblpr">Systolic Blood Pressure:</label>
                    <div class="controls">
                        <div class="input-append">
                            <input class="span2" type="text" id="systol" required>
                            <span class="add-on">mmHg</span>
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="diasblpr"> Diastolic Blood Pressure:</label>
                    <div class="controls">
                        <div class="input-append">
                            <input class="span2" type="text" id="diastol" required>
                            <span class="add-on">mmHg</span>
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                  <button class="btn btn-primary" type="button" onclick="bp_calc()">Go</button>
                  <a href="fullonsmsapi.php" class="btn" >Send SMS</a>
                </div>
              </div>
              <div id="bloodpressureresult">
              </div>
          </div>
        </div>
      </div>
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
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="http://twitter.github.com/bootstrap/assets/js/bootstrap-dropdown.js"></script>
    <script>
            function temp_calc()
            {
                var xmlhttp;
                var pregn;
                var str=document.getElementById("temp1").value;
                if(document.getElementById("preg").checked)
                    {
                    pregn=1;
                    }
                else{
                    pregn=0;
                    }
                if (str=="")
                    {
                    document.getElementById("tempresult").innerHTML="Please enter some value";
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
                    document.getElementById("tempresult").innerHTML=xmlhttp.responseText;
                    }
                  }
                xmlhttp.open("GET","temperatureprocess.php?temperature="+str+"&pregnant="+pregn,true);
                xmlhttp.send();
            }

            function bp_calc()
            {
                var xmlhttp;
                var systolic=document.getElementById("systol").value;
                var diastolic=document.getElementById("diastol").value;
                if (systolic=="")
                    {
                    document.getElementById("bloodpressureresult").innerHTML="Please enter Systolic Blood Pressure";
                    return;
                    }
                if (diastolic=="")
                    {
                    document.getElementById("bloodpressureresult").innerHTML="Please enter Diastolic Blood Pressure";
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
                    document.getElementById("bloodpressureresult").innerHTML=xmlhttp.responseText;
                    }
                  }
                xmlhttp.open("GET","bloodpressureprocess.php?systolicbp="+systolic+"&diastolicbp="+diastolic,true);
                xmlhttp.send();
            }
    </script>
  </body>
</html>
