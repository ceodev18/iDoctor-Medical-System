<?php
session_start();
$email=$_SESSION['email'];
$con=mysql_connect("localhost","viraj","viraj");
if(!$con)
{
  die('could not connect: ' .mysql_error());
}

mysql_select_db("registered_users",$con);

$result=mysql_query("SELECT * FROM registered_users_details WHERE email='".$email."'");
$row = mysql_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Sign Up &middot; iDoctor Medical System</title>
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
    <link href="css/signup.css" rel="stylesheet">
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
               if(isset($_SESSION['email'])){
                echo '<li class=""><a href="facilities.php">Facilities</a></li>';
                }
              ?>
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
      <form class="form-horizontal" id="signup-form1" action="updateprofileprocess.php" method="post">
      <h2>Registration Page</h2>
      <h3>1. Personal Details</h3>
      <div class="control-group">
        <label class="control-label" for="email">Email address</label>
        <div class="controls">
          <input type="email" id="email" disabled="disabled" name="email" value="<?php echo "$row[email]"; ?>">
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="fname">First Name</label>
        <div class="controls">
          <input type="text" id="fname" name="fname" value="<?php echo "$row[fname]" ?>" required>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="mname">Middle Name</label>
        <div class="controls">
          <input type="text" id="mname" name="mname" value="<?php echo "$row[mname]" ?>">
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="lname">Last Name</label>
        <div class="controls">
          <input type="text" id="lname" name="lname" value="<?php echo "$row[lname]" ?>" required>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="dob">Date of Birth</label>
        <div class="controls">
          <input type="text" id="dob" name="dob" value="<?php echo "$row[dob]" ?>">(yyyy-mm-dd)
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="age">Age</label>
        <div class="controls">
          <input type="text" id="age" name="age" value="<?php echo "$row[age]" ?>" requried>
        </div>
      </div>
        <label class="control-label" for="gender">Gender</label>
      <div class="control-group">
        <div class="controls">
          <label class="radio">
          <input type="radio" id="gender" name="gender" value="male">Male</label>
          <label class="radio">
          <input type="radio" id="gender" name="gender" value="female">Female</label>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="addressline1">Address Line 1</label>
        <div class="controls">
          <input type="text" id="addressline1" name="addressline1" value="<?php echo "$row[addressline1]" ?>">
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="addressline2">Address Line 2</label>
        <div class="controls">
          <input type="text" id="addressline2" name="addressline2" value="<?php echo "$row[addressline2]" ?>">
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="states">States</label>
        <div class="controls">
          <select name="states" onchange="showcities(this.value)">
            <option value="">Select a State:</option>
            <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
            <option value="Andhra Pradesh">Andhra Pradesh</option>
            <option value="Assam">Assam</option>
            <option value="West Bengal">West Bengal</option>
            <option value="Bihar">Bihar</option>
            <option value="Chandigarh">Chandigarh</option>
            <option value="Chhattisgarh">Chhattisgarh</option>
            <option value="Delhi">Delhi</option>
            <option value="Goa">Goa</option>
            <option value="Gujarat">Gujarat</option>
            <option value="Haryana">Haryana</option>
            <option value="Himachal Pradesh">Himachal Pradesh</option>
            <option value="Jammu and Kashmir">Jammu and Kashmir</option>
            <option value="Jharkhand">Jharkhand</option>
            <option value="Karnataka">Karnataka</option>
            <option value="Kerala">Kerala</option>
            <option value="Madhya Pradesh">Madhya Pradesh</option>
            <option value="Maharashtra">Maharashtra</option>
            <option value="Manipur">Manipur</option>
            <option value="Meghalaya">Meghalaya</option>
            <option value="Mizoram">Mizoram</option>
            <option value="Nagaland">Nagaland</option>
            <option value="Orissa">Orissa</option>
            <option value="Pondicherry">Pondicherry</option>
            <option value="Punjab">Punjab</option>
            <option value="Rajasthan">Rajasthan</option>
            <option value="Tamil Nadu">Tamil Nadu</option>
            <option value="Tripura">Tripura</option>
            <option value="Uttar Pradesh">Uttar Pradesh</option>
            <option value="Uttaranchal">Uttaranchal</option>
          </select>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="cities">Cities</label>
        <div class="controls">
          <select id="cities" name="cities">
          </select>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="pincode">Pincode</label>
        <div class="controls">
          <input type="text" id="pincode" name="pincode" value="<?php echo "$row[pincode]" ?>" required>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="prependedInputmob">Mobile No</label>
        <div class="controls">
          <div class="input-prepend">
            <span class="add-on">+91</span>
            <input class="span2" id="prependedInputmob" name="mobno" type="text" value="<?php echo "$row[mobno]" ?>" required>
          </div>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="prependedInputland">Landline No</label>
        <div class="controls">
          <div class="input-prepend">
            <span class="add-on">+91</span>
            <input class="span2" id="prependedInputland" name="landlineno" type="text" value="<?php echo "$row[landlineno]" ?>" required>
          </div>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="prependedInputemergency">Emergency No</label>
        <div class="controls">
          <div class="input-prepend">
            <span class="add-on">+91</span>
            <input class="span2" id="prependedInputemergency" name="emergencyno" type="text" value="<?php echo "$row[emergencyno]" ?>" required>
          </div>
        </div>
        <div class="controls">
        <p>(Will be used only in case of emergency. )</p>
        </div>  
      </div>
      <div class="control-group">
        <div class="controls">
          <button type="submit" class="btn">Update</button>
        </div>
      </div>
      </form>


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
    function showcities(str)
    {
    var xmlhttp;    
    if (str=="")
      {
      document.getElementById("cities").innerHTML="";
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
        document.getElementById("cities").innerHTML=xmlhttp.responseText;
        }
      }
    xmlhttp.open("GET","getcities.php?q="+str,true);
    xmlhttp.send();
    }

    </script> 

  </body>
</html>
