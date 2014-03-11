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
              <li><a href="index.php#about">About</a></li>
              <li><a href="contact.php">Contact</a></li>
            </ul>
            <ul class="nav pull-right">
              <li><a href="#overlay" id="button">Sign In</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">

      <form class="form-horizontal" id="signup-form1">
      <h2>Medical Details</h2>
      <h3>Doctor Details</h3>
      <div class="control-group">
        <label class="control-label" for="docname">Doctor Name</label>
        <div class="controls">
          <input type="text" id="docname" placeholder="Name of your Doc">
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="docemail">Doctor Email</label>
        <div class="controls">
          <input type="email" id="docemail" placeholder="Doc Email">
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="docphone">Doctor Phone</label>
        <div class="controls">
          <input type="text" id="docphone" placeholder="Phone of your Doc">
        </div>
      </div>
      <h3>Internal Problems</h3>
      <div class="control-group">
        <div class="controls">
        <label class="checkbox">
            <input type="checkbox" id="diabetes" value="diabetes">Diabetes<br>
        </label>
        </div>
        <div class="controls">
        <label class="checkbox">
            <input type="checkbox" id="highbloodpressure" value="highbloodpressure">High Blood-Pressure<br>
        </label>
        </div>
        <div class="controls">
        <label class="checkbox">
            <input type="checkbox" id="tuberculosis" value="tuberculosis">Tuberculosis<br>
        </label>
        </div>
        <div class="controls">
        <label class="checkbox">
            <input type="checkbox" id="asthma" value="asthma">Asthma<br>
        </label>
        </div>
        <div class="controls">
        <label class="checkbox">
            <input type="checkbox" id="cholesterol" value="cholesterol">Cholesterol<br>
        </label>
        </div>
        <div class="controls">
        <label class="checkbox">
            <input type="checkbox" id="stroke" value="stroke">Stroke<br>
        </label>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="cancer">Cancer:</label>
        <div class="controls">
          <input type="text" id="cancer" placeholder="Name the Cancer you have.">
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="allergy">Allergy:</label>
        <div class="controls">
          <input type="text" id="allergy" placeholder="Any Allergy you have.">
        </div>
      </div> 
      <h3>External problems</h3>
      <div class="control-group">
        <div class="controls">
        <label class="checkbox">
            <input type="checkbox" id="paralysis" value="paralysis">Paralysis<br>
        </label>
        </div>
        <div class="controls">
        <label class="checkbox">
            <input type="checkbox" id="headinjury" value="headinjury">Head Injury<br>
        </label>
        </div>
        <div class="controls">
        <label class="checkbox">
            <input type="checkbox" id="skindiseases" value="skindiseases">Skin Diseases<br>
        </label>
        </div>
        <div class="controls">
        <label class="checkbox">
            <input type="checkbox" id="hearingloss" value="hearingloss">Hearing loss<br>
        </label>
        </div>
        <div class="controls">
        <label class="checkbox">
            <input type="checkbox" id="eyetrouble" value="eyetrouble">Eye Trouble<br>
        </label>
        </div>
        <div class="controls">
        <label class="checkbox">
            <input type="checkbox" id="earnosethroat" value="earnosethroat">Ear,Nose & Throat trouble<br>
        </label>
        </div>
        <div class="controls">
        <label class="checkbox">
            <input type="checkbox" id="toothproblem" value="toothproblem">Severe gum/tooth problem<br><br>
        </label>
        </div>
      </div>
      <h3>Bad Practices</h3>
      <div class="control-group">
        <div class="controls">
        <label class="checkbox">
            <input type="checkbox" id="smoking" value="smoking">Smoking<br>
        </label>
        </div>
        <div class="controls">
        <label class="checkbox">
            <input type="checkbox" id="alcoholism" value="alcoholism">Alcoholism<br>
        </label>
        </div>
        <div class="controls">
        <label class="checkbox">
            <input type="checkbox" id="drugusage" value="drugusage">Drug Usage<br><br>
        </label>
        </div>
      </div>
      <h3>Mental Disorders</h3>
      <div class="control-group">
        <div class="controls">
        <label class="checkbox">
            <input type="checkbox" id="travelsickness" value="travelsickness">Travel Sickness<br>
        </label>
        </div>
        <div class="controls">
        <label class="checkbox">
            <input type="checkbox" id="sleeptrouble" value="sleeptrouble">Trouble Sleeping<br>
        </label>
        </div>
        <div class="controls">
        <label class="checkbox">
            <input type="checkbox" id="depression" value="depression">Depression or Worry<br>
        </label>
        </div>
        <div class="controls">
        <label class="checkbox">
            <input type="checkbox" id="memory" value="memory">Loss of Memory<br>
        </label>
        </div>
        <div class="controls">
        <label class="checkbox">
            <input type="checkbox" id="unconsciousness" value="unconsciousness">Unconsciousness<br>
        </label>
        </div>
      </div>
      <div class="progress progress-striped active center">
        <div class="bar" style="width: 100%;"></div>
      </div>
      <br>
      <div class="control-group">
        <div class="controls">
          <button type="button" class="btn" id="signup1submit" onclick="medical()">Submit Step 2/2</button>
        </div>
      </div>
      <div id="status"></div>
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
    function medical()
    {
    var xmlhttp;
    var docname=document.getElementById('docname').value;
    var docemail=document.getElementById('docemail').value;
    var docphone=document.getElementById('docphone').value;
    var internal="";
    var cancer="";
    var allergy="";
    var external="";
    var bad="";
    var mental="";    
    if(document.getElementById('diabetes').checked)
    {
      internal=internal+"Diabetes <br>";
    }
    if(document.getElementById('highbloodpressure').checked)
    {
      internal=internal+"High blood-pressure <br>";
    }
    if(document.getElementById('tuberculosis').checked)
    {
      internal=internal+"Tuberculosis <br>";
    }
    if(document.getElementById('asthma').checked)
    {
      internal=internal+"Asthma <br>";
    }
    if(document.getElementById('cholesterol').checked)
    {
      internal=internal+"Cholesterol <br>";
    }
    if(document.getElementById('stroke').checked)
    {
      internal=internal+"Stroke <br>";
    }
    cancer=document.getElementById('cancer').value;
    allergy=document.getElementById('allergy').value;

    if(document.getElementById('paralysis').checked)
    {
      external=external+"Paralysis <br>";
    }
    if(document.getElementById('headinjury').checked)
    {
      external=external+"Head Injury <br>";
    }
    if(document.getElementById('skindiseases').checked)
    {
      external=external+"Skin Diseases <br>";
    }
    if(document.getElementById('hearingloss').checked)
    {
      external=external+"Hearing Loss <br>";
    }
    if(document.getElementById('eyetrouble').checked)
    {
      external=external+"Eye Trouble <br>";
    }
    if(document.getElementById('earnosethroat').checked)
    {
      external=external+"Ear Nose & Throat <br>";
    }
    if(document.getElementById('toothproblem').checked)
    {
      external=external+"Severe Gum and Tooth Problem <br>";
    }
    if(document.getElementById('smoking').checked)
    {
      bad=bad+"Smoking <br>";
    }
    if(document.getElementById('alcoholism').checked)
    {
      bad=bad+"Alcoholism <br>";
    }
    if(document.getElementById('drugusage').checked)
    {
      bad=bad+"Drug Usage <br>";
    }
    if(document.getElementById('travelsickness').checked)
    {
      mental=mental+"Travel Sickness <br>";
    }
    if(document.getElementById('sleeptrouble').checked)
    {
      mental=mental+"Trouble Sleeping <br>";
    }
    if(document.getElementById('depression').checked)
    {
      mental=mental+"Depression or Worry <br>";
    }
    if(document.getElementById('memory').checked)
    {
      mental=mental+"Loss of Memory <br>";
    }
    if(document.getElementById('unconsciousness').checked)
    {
      mental=mental+"Unconsciousness <br>";
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
          self.location="index.php";
        }
      }
    xmlhttp.open("GET","signup1process.php?docname="+docname+"&docemail="+docemail+"&docphone="+docphone+"&internal="+internal+"&cancer="+cancer+"&allergy="+allergy+"&external="+external+"&bad="+bad+"&mental="+mental,true);
    xmlhttp.send();

    }
    </script>

  </body>
</html>
