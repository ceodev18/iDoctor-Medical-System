<?php
$now=time();
session_start();
if(!isset($_SESSION['email'])){
header("location:index.php");
}
$email=$_SESSION['email'];
$con = mysql_connect('localhost', 'viraj', 'viraj');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("registered_users", $con);

$result=mysql_query("SELECT * FROM registered_users_details WHERE email='".$email."'");
$row = mysql_fetch_array($result);
$city=$row['city'];
$pincode=$row['pincode'];
$address=$city.' '.$pincode;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Find Doctors &middot; iDoctor Medical System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/finddoctors.css" rel="stylesheet">
    <link href="css/popup.css" rel="stylesheet">
    
    <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
        background: url('img/contactBG.png')0 0 repeat;
      }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    

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
              <li class=""><a href="facilities.php">Facilities</a></li>
              <li class=""><a href="contact.php">Contact US</a></li>
            </ul>
            <ul class="nav pull-right">
              <?php
                echo '<li class="dropdown">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown">'
                            .$_SESSION["email"].'
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

    <div class="control-group search">
              <div class="controls">
                <center>
                  <a class="btn btn-primary" id="overlayshow" href="#overlay">Search for another Address</a>
                  <button class="btn btn-primary homesearch" type="button" onclick="initialize('<?php echo $address;?>','hospital')">Search for Home Address</button>           
                </center>
              </div>
            </div>
    


    <div id="overlay">
            <div id="popup">
            <!-- ANY CONTENTS -->
                <a href=""><img class="close_button" src="img/close.png"/></a>
                <form class="login">
                      <label for="cities">City</label>
                      <select id="cities" class="select" name="cities">
                      </select><br>
                      <label for="pincode">Pincode</label>
                      <input type="text" class="input" id="pincode" name="pincode" required><br>
                      <label for="type">Type</label>
                      <select id="type" class="select" name="type">
                        <option value="">Select type of medical facility:</option>
                        <option value="hospital">Hospital</option>
                        <option value="doctor">Doctor</option>
                        <option value="pharmacy">Pharmacy</option>
                      </select><br>
                      <input type="button" class="center searchsubmit" id="submitbtn" value="Search">
                </form>
                      
           </div>
      </div>

        <div class="container">
          <div id="sidebar">
            <ol type="1" id="sidebarlist">
            </ol>
          </div>
        <div id="map_canvas"></div>
        <div style="clear:both"></div>

            <div class="control-group">
              <div class="controls">
                <center>
                  <button class="btn btn-primary home" type="button" onclick="initialize('<?php echo $address;?>','hospital')">Search for Hospitals</button>
                  <button class="btn btn-primary home" type="button" onclick="initialize('<?php echo $address;?>','doctor')">Search for Doctors</button>
                  <button class="btn btn-primary home" type="button" onclick="initialize('<?php echo $address;?>','pharmacy')">Search for Pharmacy</button>
                </center>
              </div>
            </div>
          
       <footer>
        <p class="copyright">&copy; 2013. iDoctor Medical System. All rights reserved.</p>
      </footer>
      </div>
     <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/signin.js"></script>
    <script type="text/javascript" src="http://twitter.github.com/bootstrap/assets/js/bootstrap-dropdown.js"></script>
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?libraries=places&sensor=false"></script>
    <script>
    $(document).ready(function(){
            $(".home").hide();
            var xmlhttp;    
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
            xmlhttp.open("GET","getsearchcities.php",true);
            xmlhttp.send();     
              });

              $(".searchsubmit").click(function(){
              initialize(document.getElementById('cities').value+' '+document.getElementById('pincode').value,document.getElementById('type').value);
              $("#overlay").hide();
              $(".home").hide();
                });

               $("#overlayshow").click(function(){
                $("#overlay").show();
               }); 

               $(".homesearch").click(function(){
                $(".home").show();
               }); 

    </script>

    <script type="text/javascript">

      function getcities()
      {
      var xmlhttp;    
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
      xmlhttp.open("GET","getsearchcities.php",true);
      xmlhttp.send();
      }

        var map;
        var infowindow;
        var geocoder;
        var lat,lng;
        var custom=null;
        var side_bar_html="";
        var gmarkers=[];

        function initialize(address,option) {
          side_bar_html="";
          geocoder = new google.maps.Geocoder();
            geocoder.geocode({ 'address': address}, function(results, status) {
              if (status == google.maps.GeocoderStatus.OK) {
                lat = results[0].geometry.location.lat();
                lng = results[0].geometry.location.lng();
                custom = new google.maps.LatLng(lat, lng);
                map.setCenter(custom);    
                var request = {
                location: custom,
                radius: 1500,
                types: [option]
              };
            infowindow = new google.maps.InfoWindow();
            var service = new google.maps.places.PlacesService(map);
            service.nearbySearch(request, callback);
              }
            });
          map = new google.maps.Map(document.getElementById('map_canvas'), {
          mapTypeId: google.maps.MapTypeId.ROADMAP,
          center: custom,
          zoom: 14
        });
      }

        function callback(results, status) {
          if (status == google.maps.places.PlacesServiceStatus.OK) {
            for (var i = 0; i < results.length; i++) {
              createMarker(results[i]);
            }
          }
          document.getElementById("sidebarlist").innerHTML = side_bar_html;
        }
        function myclick(i) {
          google.maps.event.trigger(gmarkers[i], "click");
        }

        function createMarker(place) {
          var placeLoc = place.geometry.location;
          var marker = new google.maps.Marker({
            map: map,
            position: place.geometry.location
          });
            console.log(place);
            google.maps.event.addListener(marker, 'click', function() {
            infowindow.setContent(place.name+'<br>'+ place.vicinity);
            infowindow.open(map, marker);
          });
            gmarkers.push(marker);
            side_bar_html += '<li><a href="javascript:myclick(' + (gmarkers.length-1) + ')">' + place.name + '</a></li>';
        }

</script>
  </body>
</html>
