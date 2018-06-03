<?php
      session_start();
      if(($_SERVER["REQUEST_METHOD"] == "POST"))
      {
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "project"; 
      $conn = new mysqli($servername, $username, $password, $dbname);
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      } 
      $t1=$_POST['submit'];
      $s=explode("&",$t1);
      $t12=$_SESSION["pnr"];
      $_SESSION["rairline"]=substr($s[0],0,2);
      $_SESSION["rflight"]=$s[0];
      $_SESSION["rdeparture_time"]=$s[1];
      $_SESSION["rarrival_time"]=$s[3];
      $_SESSION["price1"]=$s[2];
      $sql = "UPDATE travel_details set `rdep_flight`='$s[0]',`rdeparture_time`='$s[1]',`rarrival_time`='$s[3]',`raircraft`='$s[4]' where `pnr`='$t12'";
      
      if ($conn->query($sql) === TRUE) 
      {
         echo "New record created successfully";
         if($_SESSION["fr"]=="")
         {
         header('location:checkout.php'); 
         }
         else
         {
          header('location:checkoutn.php'); 
         } 
      }
        else {
          echo "Error: " . $sql . "<br>" . $conn->error;
      }   
       $conn->close();
    }
?>
<!DOCTYPE html>
<html>
<title>amadeus-frx</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4 {font-family:"Lato", sans-serif}
.mySlides {display:none}
.w3-tag, .fa {cursor:pointer}
.w3-tag {height:15px;width:15px;padding:0;margin-top:6px}
.mac{
  float:"right";
}
body
{
background-color:#f0f0f5;
}
input[type=text], input[type=password] 
{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
.imgcontainer 
{
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 10%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    opacity:0.95;
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color:#2F4F4F;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 50%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: red;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}
 .wrapper{
    border: 1px dashed red;
    height: 100px;
    overflow-x: hidden;
    overflow-y: scroll;
    width: 150px;
 }
 .wrapper .selection{
   width:150px;
   border:1px solid #ccc
 }
</style>
<script language="javascript">         
         function checkBtn(event) {
               alert(event.target.name);
         }
      </script>
<body>
<div class="w3-bar w3-white w3-border-bottom w3-xlarge">
  <a href="#" class="w3-bar-item w3-button w3-text-red w3-hover-red"><b><i class="fa fa-map-marker w3-margin-right"></i><img src="images/amadet.png" style="margin:0px 0px;"/></b></a>
  <p style="position: absolute; right: 50px;" class="w3-large">Welcome <b class="w3-medium w3-text-orange"><?php echo $_SESSION["email_id"];?></b>!&emsp;<button onclick="location.href='front.php';" class="w3-button w3-deep-orange">Logout</button> </p>
</div>

<!-- Content -->
<div class="w3-content" style="max-width:1100px;margin-top:80px;margin-bottom:80px">
  
  <!-- Slideshow -->
<div class="w3-container">
  <div class="w3-display-container mySlides">
    <img src="images/3.png" style="width:100%">
  </div>
  <div class="w3-display-container mySlides">
    <img src="images/2.png" style="width:100%">
  </div>

  <!-- Slideshow next/previous buttons -->
  <div class="w3-container w3-light-grey w3-padding w3-xlarge" >
    <div class="w3-left" onclick="plusDivs(-1)"><i class="fa fa-arrow-circle-left w3-hover-text-orange"></i></div>
    <div class="w3-right" onclick="plusDivs(1)"><i class="fa fa-arrow-circle-right w3-hover-text-orange"></i></div>
  
    <div class="w3-center">
      <span class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
      <span class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
    </div>
  </div>
</div>
<ul class="w3-ul w3-card-4">
  <li class="w3-bar">
    <div class="w3-bar-item">
      <span class="w3-large">&emsp;&emsp;&emsp;AIRLINE&emsp;&emsp;&emsp;SOURCE&emsp;&emsp;&emsp;DESTINATION&emsp;&emsp;PRICE&emsp;&emsp;&emsp;DEPARTURE&emsp;&emsp;&emsp;ARRIVAL&emsp;&emsp;FLIGHT</span><br>
    </div>
  </li>
  <?php 
  $opts=array(
    "ssl"=>array(
        "cafile" => "C:\\xampp\\cacert(1).pem",
        "verify_peer"=> true,
        "verify_peer_name"=> true
    )
 );
  $st="https://api.sandbox.amadeus.com/v1.2/flights/low-fare-search?apikey=7CqfjAo4KtcQ7Q5oGDP8QGBvyyqPIoJ2";
  #&origin=del&destination=blr&departure_date=2018-03-02&number_of_results=10&nonstop=true&currency=INR
  $a=strtoupper($_SESSION["dt"]);
  $d=strtoupper($_SESSION["ar"]);
  $td=strtoupper($_SESSION["td"]);
  $rd=strtoupper($_SESSION["rd"]);
  $sr=$st."&origin=".$d."&destination=".$a."&departure_date=".$rd."&nonstop=true"."&currency=INR"."&number_of_results=10";
  $json_string =file_get_contents($sr,false,stream_context_create($opts));
  $array = json_decode($json_string, true);
  $result = $array['results'];  
  for($x=0;$x<count($result);$x++)
  {
   $ans=$result[$x];
   $p=$ans["itineraries"];
   $r=$ans["fare"];
   for($op=0;$op<count($p);$op++)
   {
   $s=$p[$op]["outbound"]["flights"][0];
   echo "<form method='post'>";
   echo " <li class='w3-bar'>
   <img src='images/$s[operating_airline].jpg' class='w3-bar-item w3-hide-small' style='width:150px;height:75px;'>
   <div class='w3-bar-item'>
   <span class='w3-large'>&emsp;&emsp;$d&emsp;&emsp;&emsp;&emsp;&emsp;$a&emsp;&emsp;&emsp;&emsp;&#8377;$r[total_price]&emsp;&emsp;";
   foreach($s as $key => $value):
    if($key!="marketing_airline"&&$key!="destination"&&$key!="origin"&&$key!="operating_airline"&&$key!="booking_info")
   {
    if(is_array($value))
   {   
    $value=implode($value);
   }
   if($key=="departs_at"){
    $v=substr($value,strlen($value)-5);
    echo "&emsp;&emsp;$v&emsp;&emsp;&emsp;";
    $v=substr($value,strlen($value)-5)."&".$r['total_price'];
  
   }
   if($key=="arrives_at")
    {
        $v1=substr($value,count($value)-5);
        echo "&emsp;&emsp;$v1&emsp;&emsp;";
    }
    if($key=="flight_number")
    {
        $fn=$s['operating_airline']."-".$value;
        echo "&emsp;&emsp;$fn</span></div>"; 
  
      }
   if($key=="aircraft")
  {
     $v2=$value;
  }
}
endforeach;

   $bv=$fn."&".$v."&".$v1."&".$v2."&".$d."&".$a."&".$rd;
   echo "   <span class='w3-bar-item w3-button w3-small w3-right'>
            <button class='w3-deep-orange' type='submit' name='submit' value=$bv onClick='flight_book.php'>choose&nbsp;&#9992;</button></span></li>";
   echo "</form>";
}
  }
?>
</ul>
</div>
</div>
<!-- Footer -->
<footer class="w3-container w3-padding-32 w3-center" style="background-color:#C0C0C0;" id="foot">
  <a href="#" class="w3-button w3-deep-orange w3-margin"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
   <a href="https://www.facebook.com/amadeuslabsindia/"> <i class="fa fa-facebook-official w3-hover-opacity"></i></a>
   <a href="https://twitter.com/AmadeusITGroup?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"> <i class="fa fa-twitter w3-hover-opacity"></i></a>
    <a href="https://in.linkedin.com/company/amadeus-labs"> <i class="fa fa-linkedin w3-hover-opacity"></i></a>
  </div>
</footer>

<script>
  // Slideshow
  var slideIndex = 1;
  showDivs(slideIndex);
  
  function plusDivs(n) {
    showDivs(slideIndex += n);
  }
  
  function currentDiv(n) {
    showDivs(slideIndex = n);
  }
  
  function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("demodots");
    if (n > x.length) {slideIndex = 1}    
    if (n < 1) {slideIndex = x.length} ;
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    for (i = 0; i < dots.length; i++) {
       dots[i].className = dots[i].className.replace(" w3-white", "");
    }
    x[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " w3-white";
  }
  </script>
  
</body>
</html>