<?php
session_Start();
error_reporting(E_ERROR);
$forex="";
if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
   if(isset($_POST["submit"]))
  {
   $forex=$_POST["forex"];
   $_SESSION["forex"]=$_POST["forex"];
   $purpose=$_POST["purpose"];
   $_SESSION["purpose"]=$_POST["purpose"];
   $_SESSION["bc"]=$_POST["bcurrency"];
   $_SESSION["dc"]=$_POST["dcurrency"];
   if($forex=="cash")
   {
   header('location: trip_running.php');
   }
   if($forex=="card")
   {
    header('location: trip_running.php');
   
   }
   if($forex=="reload")
   {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "project";
    $conn = new mysqli($servername, $username, $password, $dbname);
    $temp=$_SESSION["email_id"];
    $sql = "SELECT * FROM `frx` where `email id`='$temp' and fcd!=''";
    $result = $conn->query($sql);
     if(mysqli_num_rows($result)!=0)
       {
        header('location: trip_running.php');
       }
       else
       {
        echo "<script>alert('Get a card via AFP!');</script>";
       }
    $conn->close();
   }
  }
  if(isset($_POST["submit3"]))
  {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "project"; 
    $t12=$_SESSION["pnr"];
    $t9="";
    for($i=1;$i<=$_SESSION["travellers"];$i++)
    {
      $temp="Traveler".$i;
      $temp_g="travellerg".$i;
      $temp_e="travellere".$i;
      $temp_c="travellerc".$i;
      $_SESSION[$temp]=$_POST[$temp_g]." ".$_POST[$temp];
      $_SESSION[$temp_c]=$_POST[$temp_c];
      $_SESSION[$temp_e]=$_POST[$temp_e];
      $t9.=$_POST[$temp_g]."&".$_POST[$temp]."&";
    }
    $tr=substr($tr,0,strlen($tr)-2);
    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "UPDATE travel_details set `passenger`='$t9' where `pnr`='$t12'";
    if ($conn->query($sql) === TRUE) {
    } 
     $conn->close();
    header('location: payment.php');
  }
 
}
?>
<!DOCTYPE html>
<html>

<title>checkout and pay</title>
<meta 
     name='viewport' 
     content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0,minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi"
     charset="UTF-8"
/>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1 {font-family: "Raleway", sans-serif}
body, html {height: 100%}
   .bgimg {
    background-image: url('images/flight.jpg');
    min-height: 100%;
    background-position: center;
    background-size: cover;
}
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
 .frx{opacity:0.85; }
    .meal{opacity:1; }
    .insr{opacity:1;}
  .box{display:none;}
  .fr{
    position:fixed;
    bottom: 0px;
    width: 100%;
  }

.imgcontainer 
{
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 10%;
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
    opacity:0.85;
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
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
    border: 1px solid black;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 4px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 6px;
    padding-bottom: 6px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}

</style>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('input[name="colorRadio"]').click(function(){
        var inputValue = $(this).attr("value");
        var targetBox = $("." + inputValue);
        $(".box").not(targetBox).hide();
        $(targetBox).show();
    });
});

</script>
<body >

<!-- Page Container -->
<div class="bgimg w3-display-container w3-animate-opacity w3-text-white">
<div class="w3-bar w3-brown w3-large">
  <a href="#" class="w3-bar-item w3-button w3-text-red w3-hover-red"><b><i class="fa fa-map-marker w3-margin-right"></i><img src="images/amadetn.png" style="margin:0px 0px;"/></b></a>
  <p style="position: absolute; right: 50px;" class="w3-large">Welcome <b class="w3-medium w3-text-orange"><?php echo $_SESSION["email_id"];?></b>!&emsp;<button onclick="location.href='front.php';" class="w3-button w3-deep-orange">Logout</button> </p>
</div>
<div class="w3-content w3-margin-top" style="max-width:1800px;opacity:0.85;">

  <!-- The Grid -->
  <div class="w3-row-padding">
  <br>
    <!-- Left Column -->
    <div class="w3-third">
      <div class="w3-white w3-text-grey w3-card-4" style="border-radius:3%;">
        <div class="w3-container">
        <?php
          if($_SESSION["dt"]!="")
          {
            echo "<p class='w3-large'><i class='fa fa-plane fa-fw w3-margin-right w3-xxlarge w3-text-orange'></i>$_SESSION[dt] to $_SESSION[ar]";
            if($_SESSION["rd"]!="")
            {
              echo "&nbsp;&#8645;";
            }
            echo "</p><p>&emsp;&emsp;&emsp;&emsp;&nbsp;&emsp;AIRLINE&emsp;&emsp;FLIGHT&emsp;DEPARTURE&emsp;ARRIVAL&emsp;&emsp;&emsp;DATE</p>";
            echo "<p>Outbound:&emsp;<img src=images/$_SESSION[airline].jpg style='height:30px; width:60px;'></img>&emsp;&emsp;$_SESSION[flight]&emsp;&emsp;&emsp;$_SESSION[departure_time]&emsp;&emsp;&emsp;$_SESSION[arrival_time]&emsp;&emsp;&emsp;$_SESSION[td]</p>"; 
             if($_SESSION['rd']!="")
             {
               echo "<p>Inbound:&emsp;&emsp;<img src=images/$_SESSION[rairline].jpg style='height:30px; width:60px;'></img>&emsp;&emsp;$_SESSION[rflight]&emsp;&emsp;&emsp;$_SESSION[rdeparture_time]&emsp;&emsp;&emsp;$_SESSION[rarrival_time]&emsp;&emsp;&emsp;$_SESSION[rd]</p>";
             } 
            }
           if($_SESSION['hotel']!="")
            {
             echo "<p class='w3-large'><i class='fa fa-hotel fa-fw w3-margin-right w3-xxlarge w3-text-orange'></i>";$z=str_replace('_',' ',$_SESSION["hotel"]);echo $z;
             $temp=str_replace('_',' ',$_SESSION["hcid"]);$temp1=str_replace('_',' ',$_SESSION["hcod"]);echo "</p><p>From:&emsp;&emsp;$temp&emsp;To:&emsp;&emsp;$temp1</p>"; 
            }
          ?>
          <hr>
          <p class="w3-medium w3-text-theme"><b><i class="fa fa-bank fa-fw w3-margin-right w3-text-orange"></i>Fare</b></p>
           <table id="customers">
           <?php

           if($_SESSION["dt"]!="")
           { $x1=$_SESSION["price"]*$_SESSION["travellers"];
             echo "<tr><td>Outbound Journey:</td><td>&nbsp;&#8377;&nbsp;$x1</td></tr>";
            if($_SESSION['rd']!="")
            {
              $x2=$_SESSION["price1"]*$_SESSION["travellers"];  
              echo "<tr><td>Inbound Journey:</td><td>&nbsp;&#8377;&nbsp;$x2</td></tr>";
            }
           }
           if($_SESSION["hotel"]!="")
           {
            echo "<tr><td>Hotel:</td><td>&nbsp;&#8377;&nbsp;$_SESSION[hotel_cost]</td></tr>";
           } 
           ?>
          <tr><td><i class="fa fa-money fa-fw w3-margin-right w3-medium w3-text-orange"></i>Total fare:</td><td>&nbsp;&#8377;&nbsp;<?php if($_SESSION["dt"]!="" and $_SESSION["rd"]=="" and $_SESSION["hotel"]=="" ){$total_price=$x1;echo $total_price;}elseif($_SESSION["dt"]!="" and $_SESSION["rd"]=="" and $_SESSION["hotel"]!=""){$total_price=$x1+$_SESSION["hotel_cost"];echo $total_price;}elseif($_SESSION["dt"]!="" and $_SESSION["rd"]!="" and $_SESSION["hotel"]!=""){$total_price=$x1+$x2+$_SESSION["hotel_cost"]; echo $total_price;}elseif($_SESSION["dt"]!="" and $_SESSION["rd"]!="" and $_SESSION["hotel"]==""){$total_price=$x1+$x2; echo $total_price;}elseif($_SESSION["dt"]=="" and $_SESSION["rd"]=="" and $_SESSION["hotel"]!=""){$total_price=$_SESSION["hotel_cost"]; echo $total_price;}?></td></tr></table>
          <br style="display:block;margin:5px 0;"><div class="w3-center"><button onclick="document.getElementById('id01').style.display='block'" style="width:150px;height:25px;opacity:0.5;opacity:1;" class="w3-small w3-deep-orange"><strong>Fill details and Pay!</strong></button>&nbsp;
          <p class="w3-medium "><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-orange"></i>Personal Info</b></p>
          <?php
        $servername = "localhost";
         $username = "root";
         $password = "";
         $dbname = "project";
         $conn = new mysqli($servername, $username, $password, $dbname);
         $pt=$_SESSION["pnr"];
           $sql = "SELECT * FROM `user info` where pnr='$pt'";
             $result = $conn->query($sql);
              while($row = $result->fetch_assoc()) {
                echo "<table id='customers'><tr><td>Email id:</td><td>&nbsp;{$row['username']}</td></tr><tr><td>Name:</td><td>&nbsp;{$row['first name']}&nbsp;{$row['middle name']}&nbsp;{$row['last name']}</td></tr><tr><td>Phone number:</td><td>&nbsp;{$row['phone number']}</td></tr></table>";
              }
        $conn->close();
        ?> 
          <p class="w3-medium w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-orange"></i>Add-ons</b>
          <?php
           $opts1=array(
            "ssl"=>array(
                "cafile" => "C:\\xampp\\cacert(1).pem",
                "verify_peer"=> true,
                "verify_peer_name"=> true
            )
         );
          if($_SESSION["ar"]!="" and $_SESSION["dt"]!="")
          {
            $sr1="https://api.sandbox.amadeus.com/v1.2/location/";
          $sr1=$sr1.$_SESSION["ar"];
          $sr1=$sr1."?apikey=7CqfjAo4KtcQ7Q5oGDP8QGBvyyqPIoJ2";
          $json_string1 =file_get_contents($sr1,false,stream_context_create($opts1));
          $array1 = json_decode($json_string1, true);
          if($array1["airports"][0]["country"]!="IN")
          {
          echo "</p> <div class='w3-medium w3-text-italic w3-center'>
          <label><input type='radio' name='colorRadio' value='frx'><b>Forex</b></label>";
          }
        }
          else {
            echo "&nbsp;<b class='w3-small'>(to book forex you need 2 way international air tickets through us)</b></p> <div class='w3-medium w3-text-italic w3-center'>
            ";
          }
          ?>
          &emsp;<label><input type="radio" name="colorRadio" value="meal"><b>Meals</b></label>
          &emsp;<label><input type="radio" name="colorRadio" value="insr"><b>Insurance</b></label>
          <br></br>
          </div>
        </div>
      </div><br>

    <!-- End Left Column -->
    </div>

    <!-- Right Column --> 
    <div class="w3-half">
    <div class="frx box" >
      <div class="w3-container w3-card w3-white w3-margin-bottom"style="border-radius:2%;">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-money fa-fw w3-margin-right w3-xxlarge w3-text-orange"></i>FOREX</h2>
        <div class="w3-container">
        <div id="forex" class="w3-container w3-white w3-padding-5 myLink">
      <p><span class="w3-tag w3-deep-orange">Choose!</span> any from the following list of forex options:</p>
      <form method="post">
      <input type="radio" name="forex" value="cash" required><strong>Forex cash</strong><br>
      <input type="radio" name="forex" value="card"><strong>Forex card</strong><br>
      <input type="radio" name="forex" value="reload"><strong>Forex reload</strong><br>
      <p><span class="w3-tag w3-deep-orange">Tell us!</span> your purpose of travel</p>
      <?php
      if($_SESSION["rd"]!="")
      {
      echo "<input type='radio' name='purpose' value='studies' required><strong>Studies</strong><br>
      <input type='radio' name='purpose' value='medical'><strong>Medical</strong><br>
      <input type='radio' name='purpose' value='business'><strong>Business</strong><br>
      <input type='radio' name='purpose' value='el'><strong>Employment/Leisure</strong><br><br>";
      }
      else
      {
        echo "<input type='radio' name='purpose' value='medical'><strong>Medical</strong><br><br>";  
      }
      ?>
      <label><b><span class="w3-tag w3-deep-orange">Choose</span> Base Currency:</b></label>
    <div class="wrapper" >
    <select name="bcurrency" size="15" class="selection w3-center" required>
   <option value="usd">US Dollar</option>
   <option value="eur">Euro</option>
   <option value="gbp">Sterling Pound</option>
   <option value="aud">Australian Dollar</option>
   <option value="sgd">Singapore dollar</option>
   <option value="chf">Swiss frank</option>
   <option value="jpy">Japanese yen</option>
   <option value="cad">Canadian dollar</option>
  <option value="thb">Thai baht</option>
  <option value="myr">Malaysian ringget</option>
  <option value="hkd">Hongkong dollar</option>
  <option value="cny">Chinese yuan</option>
  <option value="nzd">new zealand dollar</option>
  <option value="dkk">danish krone</option>
  <option value="inr">Indian ruppee</option>  
  </select>
   </div>
   <br>
  <label><b><span class="w3-tag w3-deep-orange">Choose</span> Desired Currency:</b></label>
    <div class="wrapper">
    <select name="dcurrency" size="14" class="selection w3-center" required>
   <option value="usd">US Dollar</option>
   <option value="eur">Euro</option>
   <option value="gbp">Sterling Pound</option>
   <option value="aud">Australian Dollar</option>
   <option value="sgd">Singapore dollar</option>
   <option value="chf">Swiss frank</option>
   <option value="jpy">Japanese yen</option>
   <option value="cad">Canadian dollar</option>
  <option value="thb">Thai baht</option>
  <option value="myr">Malaysian ringget</option>
  <option value="hkd">Hongkong dollar</option>
  <option value="cny">Chinese yuan</option>
  <option value="nzd">new zealand dollar</option>
  <option value="dkk">danish krone</option>  
   </select>
   </div>  
   <br>
      <p><input class="w3-button w3-dark-grey" name="submit" type="submit" value="submit"></input></p>
      </form>
    </div>
    </div>
      </div>
      </div>

  <div class="meal box">
      <div class="w3-container w3-card w3-white" style="border-radius:2%;">
        <h2 class="w3-text-grey w3-padding-16">&#127860;&nbsp;MEALS</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Add hot and delicious meals to your trip.</b></h5>
          <img src="images/food.jpg" style="opacity:1; height:200px; width:400px;">&emsp;<img src="images/food2.jpg" style="opacity:1; height:200px; width:325px;">
          <p class="w3-text-orange"><b>Pre-booked meals are 20% cheaper than on-board prices!</b></p>
          <hr>
        </div>
      </div>
       <br>
       </div>

       <div class="insr box">
      <div class="w3-container w3-card w3-white" style="border-radius:2%;">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-orange"></i>INSURANCE</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Protect you against: </b> Trip delay, Loss of passport, Personal accident, Missed connection and much more!</h5>
          <img src="images/1.jpg" align="middle" style="opacity:1; height:200px; width:200px;"></img>
          <p class="w3-text-orange"><b>for just &#8377; 249!</b></p>
          <hr>
        </div>
      </div>
      </div>
    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>
<div id="id01" class="modal">
  
  <form class="modal-content" method="post" style="border-radius:5%;width:800px">
  <div class="imgcontainer">
      <span  onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="images/cc.jpg" alt="Avatar" class="avatar">
    </div>

    <div class="container">  <?php 
      for($i=1;$i<=$_SESSION["travellers"];$i++)
      {
        $temp="Traveler".$i;
        $temp_g="travellerg".$i;
        $temp_c="travellerc".$i;
        $temp_e="travellere".$i;

     
        echo "<label style='color:white; margin-left:5px;'>$temp&emsp;</label>
      
        <select name='$temp_g' required>
        <option value='Mr.'>Mr.</option>
        <option value='Mrs.'>Mrs.</option>
        <option value='Ms.'>Ms.</option></select>&nbsp;<input type='text' placeholder='Name' name=$temp required>&nbsp;<input type='text' placeholder='Contact number' name=$temp_c minlength='10' maxlength='10'required>&nbsp;";
      if($i==1)
      {
        echo "<input type='email' placeholder='email-id' name=$temp_e required><br></br>";
      }
      else
      {
        echo "<br></br>";
      }     
      }
      ?>
    <div class="w3-center w3-text-large">    

      <button  class="w3-button w3-red" type="submit" name="submit3">PAY &emsp;&#8377; <?php echo number_format($total_price);?></button>
    </div>

</div>
                    <?php  
                     if(isset($message))  
                     {  
                          echo $message;  
                     }  
                     ?> 
  

  </form>
                    </div>
  
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</div>

<footer class="fr w3-container w3-brown w3-opacity w3-center" style="position:fixed; ">
  <div class="w3-xmedium w3-section">
   <a href="https://www.facebook.com/amadeuslabsindia/"> <i class="fa fa-facebook-official w3-hover-opacity"></i></a>
   <a href="https://twitter.com/AmadeusITGroup?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"> <i class="fa fa-twitter w3-hover-opacity"></i></a>
    <a href="https://in.linkedin.com/company/amadeus-labs"> <i class="fa fa-linkedin w3-hover-opacity"></i></a>
  </div>
</footer>
</div>
</body>
</html>
