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
              <li><a href="contact.php">Contact US</a></li>
            </ul>
            <ul class="nav pull-right">
              <li><a href="#overlay" id="button">Sign In</a></li> 
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
      <form class="form-horizontal" id="signup-form1" action="signupprocess.php" method="post">
      <h2>Registration Page</h2>
      <h3>1. Personal Details</h3>
      <div class="control-group">
        <label class="control-label" for="email">Email address</label>
        <div class="controls" id="emailresult">
          <input type="email" id="email" name="email" required>
          <img src="img/ok.png" id="ok" style="z-index:100"/> 
          <img src="img/cross.png" id="cross" style="z-index:5000"/>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="password">Password</label>
        <div class="controls" id="passresult">
          <input type="password" id="password" name="password" required>
          <img src="img/ok.png" id="ok" style="z-index:100"/> 
          <img src="img/cross.png" id="cross" style="z-index:5000"/>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="rpassword">Re-type password</label>
        <div class="controls" id="rpassresult">
          <input type="password" id="rpassword" name="rpassword" required>
          <img src="img/ok.png" id="ok" style="z-index:100"/> 
          <img src="img/cross.png" id="cross" style="z-index:5000"/>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="fname" >First Name</label>
        <div class="controls">
          <input type="text" id="fname" name="fname" required>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="mname">Middle Name</label>
        <div class="controls">
          <input type="text" id="mname" name="mname">
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="lname">Last Name</label>
        <div class="controls">
          <input type="text" id="lname" name="lname" required>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="dob">Date of Birth</label>
        <div class="controls">
          <input type="text" id="dob" name="dob" required>(yyyy-mm-dd)
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="age">Age</label>
        <div class="controls">
          <input type="text" id="age" name="age" required>
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
          <input type="text" id="addressline1" name="addressline1" placeholder="Building Name">
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="addressline2">Address Line 2</label>
        <div class="controls">
          <input type="text" id="addressline2" name="addressline2" placeholder="Street Name">
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="">State</label>
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
        <label class="control-label" for="cities">City</label>
        <div class="controls">
          <select id="cities" name="cities">
          </select>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="pincode">Pincode</label>
        <div class="controls">
          <input type="text" id="pincode" name="pincode" required>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="prependedInputmob">Mobile No</label>
        <div class="controls">
          <div class="input-prepend">
            <span class="add-on">+91</span>
            <input class="span2" id="prependedInputmob" name="mobno" type="text" required>
          </div>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="prependedInputland">Landline No</label>
        <div class="controls">
          <div class="input-prepend">
            <span class="add-on">+91</span>
            <input class="span2" id="prependedInputland" name="landlineno" type="text" required>
          </div>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="prependedInputemergency">Emergency No</label>
        <div class="controls">
          <div class="input-prepend">
            <span class="add-on">+91</span>
            <input class="span2" id="prependedInputemergency" name="emergencyno" type="text" required>
          </div>
        </div>
        <div class="controls">
        <p>(Will be used only in case of emergency. )</p>
        </div>  
      </div>
      <div class="progress progress-striped active center">
        <div class="bar" style="width: 50%;"></div>
      </div>
      <br>
      <div class="control-group">
        <div class="controls">
          <button type="submit" class="btn">Submit Step 1/2</button>
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
    <script src="js/bootstrap.min.js"></script>
    <script src="js/signin.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="js/jquery.min.js"></script>
                                   
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

      $(document).ready(function(){
      $(".container #rpassresult #ok").hide();
      $(".container #rpassresult #cross").hide();
      $(".container #passresult #ok").hide();
      $(".container #passresult #cross").hide();
      $(".container #emailresult #ok").hide();
      $(".container #emailresult #cross").hide();

      $("#rpassword").blur(function(){
      var password=document.getElementById("password").value;
      var rpassword=document.getElementById("rpassword").value; 
      if(rpassword==password&&rpassword!=""&&password!="")
      {
      $(".container #rpassresult #cross").hide();  
      $(".container #rpassresult #ok").show();  
      $(".container #passresult #ok").show();        
      }
      else
      {
      $(".container #rpassresult #ok").hide();
      $(".container #rpassresult #cross").show(); 
      }
      });

      $("#email").blur(function(){
        var xmlhttp;    
        var str=document.getElementById("email").value;
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
                var res=xmlhttp.responseText;
                console.log(res);
                if(res=="no")
                {
                  $("#emailresult #ok").hide();
                  $("#emailresult #cross").show();
                }
                else
                {
                  $("#emailresult #ok").show();
                  $("#emailresult #cross").hide();
                }
              }
            }
          xmlhttp.open("GET","emailvalidate.php?email="+str,true);
          xmlhttp.send();
              });    

      });

      

  </script>

  </body>
</html>
