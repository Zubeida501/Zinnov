<?php
session_start();
$forex="";
if ($_SERVER["REQUEST_METHOD"] == "POST")
 {

  if(isset($_POST["submit1"]))
  {
   $dt=$_POST["dt"];
   $_SESSION["dt"]=$_POST["dt"];
   $ar=$_POST["ar"];
   $_SESSION["ar"]=$_POST["ar"];
   $td=$_POST["td"];
   $_SESSION["td"]=$_POST["td"];
   $rd=$_POST["rd"];
   $_SESSION["rd"]=$_POST["rd"];
   $_SESSION["travellers"]=$_POST["travellers"];
   header('location:flight_book.php');
  }
  if(isset($_POST["submit2"]))
  {
    
  }
  }
  

?>
<!DOCTYPE html>
<html>
<title>Amadeus_trip</title>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
<script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css">

<style>
.ui-autocomplete-loading {
background: white right center no-repeat;
}
#city { width: 25em; }
</style>

<script>

$(function() {
function log( message ) {
$( "<div>" ).text( message ).prependTo( "#log" );
$( "#log" ).scrollTop( 0 );
}
$( "#city" ).autocomplete({
source: function( request, response ) {
$.ajax({
url: "https://api.sandbox.amadeus.com/v1.2/airports/autocomplete",
dataType: "json",
data: {
apikey: "7CqfjAo4KtcQ7Q5oGDP8QGBvyyqPIoJ2",
term: request.term 
},
success: function( data ) {
response( data );
}
});
},
minLength: 3,
select: function( event, ui ) {
console.log( ui.item ?
"Selected: " + ui.item.label :
"Nothing selected, input was " + this.value);
},
open: function() {
$( this ).removeClass( "ui-corner-all" ).addClass( "ui-corner-top" );
},
close: function() {
$( this ).removeClass( "ui-corner-top" ).addClass( "ui-corner-all" );
}
});
});
$(function() {
function log( message ) {
$( "<div>" ).text( message ).prependTo( "#log" );
$( "#log" ).scrollTop( 0 );
}
$( "#city2" ).autocomplete({
source: function( request, response ) {
$.ajax({
url: "https://api.sandbox.amadeus.com/v1.2/airports/autocomplete",
dataType: "json",
data: {
apikey: "7CqfjAo4KtcQ7Q5oGDP8QGBvyyqPIoJ2",
term: request.term
},
success: function( data ) {
response( data );
}
});
},
minLength: 3,
select: function( event, ui ) {
console.log( ui.item ?
"Selected: " + ui.item.label :
"Nothing selected, input was " + this.value);
},
open: function() {
$( this ).removeClass( "ui-corner-all" ).addClass( "ui-corner-top" );
},
close: function() {
$( this ).removeClass( "ui-corner-top" ).addClass( "ui-corner-all" );
}
});
});
$(function() {
function log( message ) {
$( "<div>" ).text( message ).prependTo( "#log" );
$( "#log" ).scrollTop( 0 );
}
$( "#hcity" ).autocomplete({
source: function( request, response ) {
$.ajax({
url: "https://api.sandbox.amadeus.com/v1.2/airports/autocomplete",
dataType: "json",
data: {
apikey: "7CqfjAo4KtcQ7Q5oGDP8QGBvyyqPIoJ2",
term: request.term
},
success: function( data ) {
response( data );
}
});
},
minLength: 3,
select: function( event, ui ) {
console.log( ui.item ?
"Selected: " + ui.item.label :
"Nothing selected, input was " + this.value);
},
open: function() {
$( this ).removeClass( "ui-corner-all" ).addClass( "ui-corner-top" );
},
close: function() {
$( this ).removeClass( "ui-corner-top" ).addClass( "ui-corner-all" );
}
});
});
</script>
</head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}
.myLink {display: none}
.wrapper{
    border: 1px black;
    height: 40px;
    overflow-x: hidden;
    overflow-y: scroll;
    width: 200px;
 }
 .wrapper .selection{
   width:200px;
   border:1px solid #ccc;
 }

</style>
<body class="w3-light-grey">

<!-- Navigation Bar -->
<div class="w3-bar w3-white w3-border-bottom w3-xlarge">
  <a href="#" class="w3-bar-item w3-button w3-text-red w3-hover-red"><b><i class="fa fa-map-marker w3-margin-right"></i><img src="images/amadet.png" style="margin:0px 0px;"/></b></a>
  <p style="position: absolute; right: 50px;" class="w3-large">Welcome <b class="w3-medium w3-text-orange"><?php echo $_SESSION["email_id"];?></b>!&emsp;<button onclick="location.href='front.php';" class="w3-button w3-deep-orange">Logout</button> </p>
</div>

<!-- Header -->
<header class="w3-display-container w3-content w3-hide-small" style="max-width:1500px">
  <img class="w3-image" src="images/flight.jpg" width="1500" height="700">
  <div class="w3-display-middle" style="width:65%;opacity:0.85;">
    <div class="w3-bar w3-black" >
      <button style="width:50%" class="w3-bar-item w3-button tablink" onclick="openLink(event, 'Flight');"><i class="fa fa-plane w3-margin-right"></i>Flight</button>
      <button style="width:50%" class="w3-bar-item w3-button tablink" onclick="openLink(event, 'Hotel');"><i class="fa fa-bed w3-margin-right"></i>Hotel</button>
     </div>

    <!-- Tabs -->
    <div id="Flight" class="w3-container w3-white w3-padding-16 myLink">
      <h3>Travel the world with <em>your technology partner</em></h3>
      <form method="post">
      <div class="w3-row-padding" style="margin:0 -16px;">
        
        <div class="w3-half">
          <label for="city"><b>Source</b></label>
          <input id="city" class="w3-input w3-border" type="text" placeholder="Departing from" name="dt" required>
        </div>
        
        <div class="w3-half">
          <label for="city2"><b>Destination</b></label>
          <input id="city2" class="w3-input w3-border" type="text" placeholder="Arriving at" name="ar" required>
        </div>
        
      
       <div class="w3-half">
       <label><b>Travel date</b></label>
       <input class="w3-input w3-border" type="date" placeholder="DD-MM-YYYY" name="td" required>
       </div>

       <div class="w3-half">
       <label><b>Return date&nbsp;(skip if one-way)</b></label>
       <input  class="w3-input w3-border" type="date" placeholder="DD-MM-YYYY" name="rd">
       </div>
       <div>
       <label><b>How many are travelling?</b></label>
   <input  class="w3-input w3-border w3-center" type="number" placeholder="1-7" name="travellers" min=1 max=7 required> 
   </div>
       <p class="w3-center"><button class="w3-button w3-deep-orange" name="submit1" type="submit">Search Flights!</button></p>
      </form>  
</div>
    </div>
    
    <div id="Hotel" class="w3-container w3-white w3-padding-16 myLink">
      <h3>Find the best hotels</h3>
      <p>Book a hotel with us and get the best fares and promotions.</p>
     
      <form method="post">
      <div>
      <label for="hcity"><b>Destination</b></label>
      <input id="hcity" class="w3-input w3-border" type="text" placeholder="Arriving at" name="hcity" required>
    </div>
    
  
   <div class="w3-half">
   <label><b>Check-in date</b></label>
   <input class="w3-input w3-border" type="date" placeholder="DD-MM-YYYY" name="hcid" required>
   </div>

   <div class="w3-half">
   <label><b>Check-out date</b></label>
   <input  class="w3-input w3-border" type="date" placeholder="DD-MM-YYYY" name="hcod">
   </div>   
   <br>
   <br>
   <br>
    
   <p class=" w3-center"><button class="w3-button w3-deep-orange w3-center" name="submit2" type="submit">Search Hotels</button></p>
   </form>
    </div>

  </header>

<!-- Page content -->
<div class="w3-content" style="max-width:1100px;">

  <!-- places to visit -->
  <div class="w3-container w3-margin-top">
    <h3>Places to visit right now!</h3>
  </div>
  <div class="w3-row-padding w3-text-white w3-large">
    <div class="w3-half w3-margin-bottom">
      <div class="w3-display-container">
        <img src="images/goa.png" alt="goa" style="width:100%">
        <span class="w3-display-bottomleft w3-padding">goa</span>
      </div>
    </div>
    <div class="w3-half">
      <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img src="images/jaipur.jpg" alt="New York" style="width:100%">
            <span class="w3-display-bottomleft w3-padding">jaipur</span>
          </div>
        </div>
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img src="images/kerala.jpg" alt="kerala" style="width:100%">
            <span class="w3-display-bottomleft w3-padding">kerala</span>
          </div>
        </div>
      </div>
      <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img src="images/kashmir.jpg" alt="Pisa" style="width:100%">
            <span class="w3-display-bottomleft w3-padding">kashmir</span>
          </div>
        </div>
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img src="images/mumbai.jpg" alt="mumbai" style="width:100%">
            <span class="w3-display-bottomleft w3-padding">mumbai</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Explore Nature -->
  <div class="w3-container">
    <h3>Explore THE WORLD</h3>
    <p>Travel with us and enjoy every moment!</p>
  </div>
  <div class="w3-row-padding">
    <div class="w3-half w3-margin-bottom">
      <img src="images/paris.jpg" alt="paris" style="width:100%">
      <div class="w3-container w3-white">
        <h3>PARIS</h3>
        <p class="w3-opacity">Roundtrip from $700</p>
      </div>
    </div>
    <div class="w3-half w3-margin-bottom">
      <img src="images/newyork.jpg" alt="newyork" style="width:100%">
      <div class="w3-container w3-white">
        <h3>NEW YORK</h3>
        <p class="w3-opacity">One-way from $1200</p>
      </div>
    </div>
  </div>

<!-- End page content -->
</div>

<!-- Footer -->
<footer class="w3-container w3-center w3-opacity w3-margin-bottom">
  <h5>Find Us On</h5>
  <div class="w3-xlarge w3-section">
   <a href="https://www.facebook.com/amadeuslabsindia/"> <i class="fa fa-facebook-official w3-hover-opacity"></i></a>
   <a href="https://twitter.com/AmadeusITGroup?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"> <i class="fa fa-twitter w3-hover-opacity"></i></a>
    <a href="https://in.linkedin.com/company/amadeus-labs"> <i class="fa fa-linkedin w3-hover-opacity"></i></a>
  </div>
</footer>

<script>
// Tabs
function openLink(evt, linkName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("myLink");
  for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
  }
  document.getElementById(linkName).style.display = "block";
  evt.currentTarget.className += " w3-red";
}
// Click on the first tablink on load
document.getElementsByClassName("tablink")[0].click();

</script>
</body>
</html>
