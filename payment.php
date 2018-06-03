<?php
      session_start();
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

<br>
</br>
   
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
<ul class='w3-ul w3-card-4   w3-center'>
<?php
  for($i=1;$i<=$_SESSION["travellers"];$i++)
  {
    $temp="Traveler".$i;
    $temp_c="travellerc".$i;
    $temp_e="travellere".$i;
  echo "<li class='w3-bar'>
    <div class='w3-bar-item'>
      <span class='w3-large'>Traveler $i : &emsp;$_SESSION[$temp]</span>
    </div>
  </li>
  <li class='w3-bar'>
    <div class='w3-bar-item'>
      <span class='w3-large'>Contact Number:&emsp;$_SESSION[$temp_c]</span>
    </div>
  </li>
  <li class='w3-bar'>
    <div class='w3-bar-item'>
      <span class='w3-large'>E-mail ID:&emsp;$_SESSION[$temp_e]</span>
    </div>
  </li><br>";
  }
?>
  
  <br>
  

   </ul>
<?php
if($_SESSION["dt"]!="")
{
  if($_SESSION["rd"]!="")
  {
  $t=$_SESSION["price"]+$_SESSION["price1"];
  }
else
{
  $t=$_SESSION["price"]; 
}
echo "<ul class='w3-ul w3-card-4'>
 <li class='w3-bar'>
 <div class='w3-bar-item'>
      <span class='w3-large w3-text-red'><b>PNR:&emsp;$_SESSION[pnr]&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Air fare:&emsp;&#8377;&nbsp;$t</b></span><br></div></li>     
  <li class='w3-bar'>
    <div class='w3-bar-item'>
      <span class='w3-large'>&emsp;&emsp;&emsp;&emsp;AIRLINE&emsp;&emsp;&emsp;SOURCE&emsp;&emsp;&emsp;DESTINATION&emsp;&emsp;FLIGHT&emsp;&emsp;&emsp;DEPARTURE&emsp;&emsp;&emsp;ARRIVAL&emsp;&emsp;TRAVEL DATE</span><br>
    </div>
  </li>
  <li>
  <p>Onward:&emsp;&nbsp;<img src=images/$_SESSION[airline].jpg style='height:50px; width:100px;'></img>&emsp;&emsp;&emsp;&emsp;$_SESSION[dt]&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$_SESSION[ar]&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$_SESSION[flight]&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$_SESSION[departure_time]&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$_SESSION[arrival_time]&emsp;&emsp;&emsp;&emsp;&emsp;$_SESSION[td]</p>       
  </li>";
if($_SESSION['rd']!="")
{
  echo "<li><p>Return:&emsp;&emsp;<img src=images/$_SESSION[rairline].jpg style='height:50px; width:100px;'></img>&emsp;&emsp;&emsp;&emsp;$_SESSION[ar]&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$_SESSION[dt]&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$_SESSION[rflight]&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$_SESSION[rdeparture_time]&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$_SESSION[rarrival_time]&emsp;&emsp;&emsp;&emsp;&emsp;$_SESSION[rd]</p>
  </li></ul>";
}
else
{
echo "</ul>";
}
}
if($_SESSION["hotel"]!="")
{
  $t=$_SESSION["hotel_cost"];
  $h=str_replace('_',' ',$_SESSION["hotel"]);
echo "<br>
<ul class='w3-ul w3-card-4 w3-center'>
<li class='w3-bar'>
<div class='w3-bar-item'>
      <span class='w3-large w3-text-red'><b>PNR:&emsp;$_SESSION[pnr]&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Hotel fare:&emsp;&#8377;&nbsp;$t</b></span>
      <br>
    </div>
</li>
 <li class='w3-bar'>
    <div class='w3-bar-item'>
      <span class='w3-large'>&emsp;&emsp;$h</span><br>
    </div>
  </li>
  <li>
  <p>FROM:&emsp;&emsp;$_SESSION[hcid]&emsp;&emsp;TO:&emsp;&emsp;$_SESSION[hcod]</p>      
  </li>
</ul>
<br>";
}

if($_SESSION["fr"]!="")
{
  $rate=array("AUD"=>"0.019671","BGN"=>"0.024508","BRL"=>"0.049912","CAD"=>"0.019607","CHF"=>"0.014459","CNY"=>"0.097321","CZK"=>"0.31826","DKK"=>"0.093305","EUR"=>"0.012531","GBP"=>"0.011077","HKD"=>"0.12064","HRK"=>"0.093295","HUF"=>"3.9343","IDR"=>"210.76","ILS"=>"0.05366","ISK"=>"1.5526","JPY"=>"1.6512","KRW"=>"16.522","MXN"=>"0.28859","MYR"=>"0.060238","NOK"=>"0.12066","NZD"=>"0.0212","PHP"=>"0.80556","PLN"=>"0.052216","RON"=>"0.058362","RUB"=>"0.8621","SEK"=>"0.12631","SGD"=>"0.020344","THB"=>"0.48385","TRY"=>"0.05843","USD"=>"0.015414","ZAR"=>"0.17967");
 echo"<ul class='w3-ul w3-card-4 w3-center'>
<li class='w3-bar'>
<div class='w3-bar-item '>
      <span class='w3-large w3-text-red'><b>PNR:&emsp;$_SESSION[pnr]";
      error_reporting(E_ERROR);
      $deliv=$_SESSION['deliv_cost'];
      $deli_v=$_SESSION["delivery"];
     
           if($_SESSION["fr"]!="")
           {
             if($_SESSION["bc"]!="inr")
             {
               $tt=$_SESSION["fr"]/$rate[strtoupper($_SESSION["bc"])];
               $e=number_format($tt, 2, '.', '');
             }
             else {
              $tt=$_SESSION["fr"];
              $e=number_format($tt, 2, '.', ''); 
             }
             $e=$e+(int)$deliv[$deli_v];
               echo "&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Forex:&emsp;&#8377;&nbsp;$e&emsp;";
        }
        $n=$_SESSION["name"];
        $round=round($_SESSION["fr"]*$_SESSION[$n]); 
        $deli=str_replace('_',' ',$_SESSION["delivery"]);
        echo "</b>
    </div>
</li>
 <li class='w3-bar'>
    <div class='w3-bar-item'>
      <span class='w3-large'>Base Currency&emsp;Desired Currency&emsp;&emsp;Provider&emsp;&emsp;Conversion Rate&emsp;&emsp;Amount&emsp;&emsp;&emsp;</span><br>
    </div>
  </li>
  <li>
  <p>$_SESSION[bc]&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$_SESSION[dc]&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$_SESSION[name]&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$_SESSION[$n]&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$round</p>      
  <hr>";
   
   if($_SESSION["forex"]!="reload")
   {
   echo "<p class='w3-'><span class='w3-wide w3-text-red'>Delivery Location : </span>&emsp;$deli</p><p class='w3-'><span class='w3-wide w3-text-red'>Delivery Cost : </span>&emsp;&#8377;&nbsp;$deliv[$deli_v]</p>";     
   }
}
?>

<?php
if($_SESSION["fr"]!="")
{
  $temp="copy C:\\xampp\htdocs\uploads\ ";
  $temp=trim($temp);
  $temp.=$_SESSION["pnr"];
  $temp.=".jpg C:\\xampp\htdocs\Tesseract-OCR";
  shell_exec($temp);
  $x=$_SESSION["pnr"].".jpg stdout";
  $t="cd tesseract-ocr && tesseract ".$x;
  $output = shell_exec($t);
  $k=explode(" ",$output);
  $pattern = "/([a-zA-Z]){1}([0-9]){7}/";
  $counter=0;
  for($i=0;$i<count($k);$i++)
  {
  $result = preg_match($pattern, $k[$i]);
  if ($result)
  {
      for($j=0;$j<strlen($k[$i])-8;$j++)
      {
          $test=trim(substr($k[$i],$j,8));
          $pattern2 = "/^([a-zA-Z]){1}([0-9]){7}$/";
          $result2 = preg_match($pattern2, $test);
          if($result2)
          {
            $counter=1;
              $_SESSION["passport"]=$test;
              if($_SESSION["forex"]=="card")
              {
               echo "
               <p class='w3-'><span class='w3-wide w3-text-red'>&emsp;&emsp;&emsp;&emsp;Your card number : </span>&emsp;$_SESSION[test]</p></li>
               </ul>
               <br>";
              }
              else
              {
                echo "</li>
                </ul>
                <br>";
              }
             echo "<ul class='w3-ul w3-card-4 w3-center'>
             <li class='w3-bar'>
<span class='w3-large w3-text-green'><b><i class='fa fa-check-circle-o fa-fw w3-margin-right w3-large'></i>Documents verified for passport number $test</b></span>
</li>";
   echo "<br>
   <li class='w3-bar'>
   <span class='w3-large w3-text-green'><b><i class='fa fa-plane fa-fw w3-margin-right w3-large'></i>You will receive your itinerary in mail shortly</b></span>
   </li>";
   
              break;
          }
        }
      }
    }
        if($counter==0)
        {
            echo "<li class='w3-bar'>
  <span class='w3-large w3-text-orange'><b><i class='fa fa-exclamation-circle fa-fw w3-margin-right w3-large'></i>Documents not verified</b></span>
  </li>";
   
  echo "<br>
  <li class='w3-bar'>
  <span class='w3-large w3-text-orange'><b><i class='fa fa-plane fa-fw w3-margin-right w3-large'></i>Our executive will contact you shortly!</b></span>
  </li>";
          }
  
  }

?>
<br>
<ul class='w3-ul w3-card-4 w3-center'>
<li class="w3-bar" >
<span class="w3-large w3-text-green"><b><i class="fa fa-check-circle-o fa-fw w3-margin-right w3-large"></i>Payment&nbsp;
<?php
 $rate=array("AUD"=>"0.019671","BGN"=>"0.024508","BRL"=>"0.049912","CAD"=>"0.019607","CHF"=>"0.014459","CNY"=>"0.097321","CZK"=>"0.31826","DKK"=>"0.093305","EUR"=>"0.012531","GBP"=>"0.011077","HKD"=>"0.12064","HRK"=>"0.093295","HUF"=>"3.9343","IDR"=>"210.76","ILS"=>"0.05366","ISK"=>"1.5526","JPY"=>"1.6512","KRW"=>"16.522","MXN"=>"0.28859","MYR"=>"0.060238","NOK"=>"0.12066","NZD"=>"0.0212","PHP"=>"0.80556","PLN"=>"0.052216","RON"=>"0.058362","RUB"=>"0.8621","SEK"=>"0.12631","SGD"=>"0.020344","THB"=>"0.48385","TRY"=>"0.05843","USD"=>"0.015414","ZAR"=>"0.17967");
 $e=0;
 if($_SESSION["fr"]!="")
 {
   if($_SESSION["bc"]!="inr")
   {
     $tt=$_SESSION["fr"]/$rate[strtoupper($_SESSION["bc"])];
     $e=number_format($tt, 2, '.', '');
   }
   else 
   {
    $tt=$_SESSION["fr"];
    $e=number_format($tt, 2, '.', ''); 
   }
  }
if($_SESSION["dt"]!="" and $_SESSION["rd"]=="" and $_SESSION["hotel"]=="")
{
  $total_price=$_SESSION["price"]+$e;
} 
  elseif($_SESSION["dt"]!="" and $_SESSION["rd"]=="" and $_SESSION["hotel"]!="")
  {
    $total_price=$_SESSION["price"]+$_SESSION["hotel_cost"]+$e;
  }
  elseif($_SESSION["dt"]!="" and $_SESSION["rd"]!="" and $_SESSION["hotel"]!="")
  {
    $total_price=$_SESSION["price"]+$_SESSION["price1"]+$_SESSION["hotel_cost"]+$e;
  }
  elseif($_SESSION["dt"]!="" and $_SESSION["rd"]!="" and $_SESSION["hotel"]=="")
  {
    $total_price=$_SESSION["price"]+$_SESSION["price1"]+$e;
  }
  elseif($_SESSION["dt"]=="" and $_SESSION["rd"]=="" and $_SESSION["hotel"]!="")
  {
    $total_price=$_SESSION["hotel_cost"]+$e; 
   }
   #echo "&#8377;&nbsp;$total_price&nbsp;";
?>
Received</b></span>
</li>

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