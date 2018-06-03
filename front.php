<?php
session_start();
session_destroy();
session_start();
$_SESSION["dt"]="";
$_SESSION["rd"]=""; 
$_SESSION["hotel"]="";
$_SESSION["airline"]="";
$_SESSION["fr"]="";
$_SESSION["travellers"]="";
$_SESSION["address"]="";
//generating pnr
function random_num() 
{
    $alpha_key = '';
    $keys1=range('A','Z');
    $keys2 = array_merge($keys1,range(0,9));
	for ($i = 0; $i < 6; $i++) {
        $alpha_key .= $keys2[array_rand($keys2)];
    }
    #$pattern2 = "/([1,I,L,O,U]){2}/";
    #$result2 = preg_match($pattern2, $s[$i]);
    #if(!$result2)
    
        return $alpha_key;
    
}
//validating the pnr(scalable)
  function validate($k)
  {
  return (strpos($k,"I1")||strpos($k,"L1")||strpos($k,"IL")||strpos($k,"1L")||strpos($k,"1I")||strpos($k,"L1")||strpos($k,"00")||strpos($k,"0O")||strpos($k,"O0")||strpos($k,"OO"));
  }
  $message = '';  
  $error = '';  
  //signup
   if(isset($_POST["submit2"]))  
   {  
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "project";
   
   // Create connection
   $conn = new mysqli($servername, $username, $password, $dbname);
   // Check connection
   if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
   } 
   
   function test_input($data)
   {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
   }

     if(empty($_POST["first_name"]))  
     {  
          $error = "<label class='text-danger'>Enter First Name</label>"; 
     } 
     else
     {
       $first_name=test_input($_POST["first_name"]);
       if (!preg_match("/^[a-zA-Z ]*$/",$first_name))
        {
       $error = "Only letters and white space allowed";
        }
     } 
     if(empty($_POST["middle_name"]))  
     {  
          $error = "<label class='text-danger'>Enter middle name</label>";  
     }  
     else
     {
       $middle_name=test_input($_POST["middle_name"]);
       if (!preg_match("/^[a-zA-Z ]*$/",$middle_name))
        {
       $error = "Only letters and white space allowed";
        }
     }

     if(empty($_POST["last_name"]))  
     {  
          $error = "<label class='text-danger'>Enter last name</label>";  
     }  
     else
     {
       $last_name=test_input($_POST["last_name"]);
       if (!preg_match("/^[a-zA-Z ]*$/",$last_name)) 
       {
       $error = "Only letters and white space allowed";
       }
     }

     if(empty($_POST["email_id"]))  
         {  
           $error = "<label class='text-danger'>Enter email id</label>";  
         }  

     else
     {
     $email_id = test_input($_POST["email_id"]);
     if (!filter_var($email_id, FILTER_VALIDATE_EMAIL))
      {
      $error = "Invalid email format"; 
      }
     }

     if(empty($_POST["phone_number"]))  
     {  
      $error = "<label class='text-danger'>Enter phone number</label>";  
     }

    else
    {
      if (!is_numeric($_POST["phone_number"]))
    {
     $error="Invalid phone number format";
   }
 } 

 if(empty($_POST["aadhaar_number"]))  
 {  
      $error = "<label class='text-danger'>Enter aadhaar number</label>";  
 }  
else
 {
   if (!is_numeric($_POST["aadhaar_number"]))
    {
     $error="Invalid aadhaar number format";
 
   }
   else
   {
      if (strlen($_POST["aadhaar_number"]) < 10)
    {
       $error = "aadhaar length is too short, minimum is 10 characters.";
    }
   else if(strlen($_POST["aadhaar_number"]) > 10)
   {
       $error = "aadhaar length is too long, maximum is 10 characters.";
    }
   }
 }
   $t1=$_POST['first_name'];
   $t2=$_POST['middle_name'];
   $t3=$_POST['last_name'];
   $t4=$_POST['email_id'];
   $t5=$_POST['phone_number'];
   $t6=$_POST['aadhaar_number'];
   $t7=$_POST['psw'];
   $t8= random_num(); 
   $_SESSION["email_id"]=$t4;
   $_SESSION["pnr"]=$t8;
   $sql = "INSERT INTO frx (`email id`, `country of travel`, `date of travel`, `return date`, fcd , amount,purpose,pnr ) VALUES ('$t4',' ',' ',' ',' ',' ',' ','$t8')";   
   $sqlu = "INSERT INTO `user info` (`username`,`password`,`first name`,`middle name`, `last name`,`phone number`,`aadhaar number`,`pnr` ) VALUES ('$t4',MD5('$t7'),'$t1','$t2','$t3','$t5','$t6','$t8')";   
   $sqlf = "INSERT INTO `travel_details` (`username`,`pnr` ) VALUES ('$t4','$t8')";   
   if ($conn->query($sql) === TRUE&&$conn->query($sqlu) === TRUE&&$conn->query($sqlf) === TRUE) 
   {
       echo "New record created successfully";
       header('location: trip.php');
    } 
    else {
       echo "Error: " . $sql . "<br>" . $conn->error;
   }
   $conn->close();
   }
//login
   if(isset($_POST["submit3"]))  
  {  
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "project";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error)
     {
        die("Connection failed: " . $conn->connect_error);
    } 
    $t4=$_POST['email_id'];
    $_SESSION["email_id"] = $t4;
    $t7=$_POST['psw'];
    $t8=random_num();
    $_SESSION["pnr"]=$t8;
    $sql ="SELECT * FROM `user info` WHERE `password` = MD5('$t7') AND `username` = '$t4'";
    $result= mysqli_query($conn,$sql);
    $sql_pass ="SELECT * FROM `user info` WHERE `password` != MD5('$t7') AND `username` = '$t4'";
    $result_pass= mysqli_query($conn,$sql_pass);
    if(mysqli_num_rows($result)!=0)
      {
        $sql1 ="Insert Into `user info` (`first name`,`middle name`, `last name` ,`username`, `phone number`, `aadhaar number`,password) 
        Select `first name`,`middle name`, `last name` ,`username`, `phone number` ,`aadhaar number`,password From `user info` Where `username`='$t4' limit 1";
        $result1= mysqli_query($conn,$sql1);        
        $sql2 = "UPDATE `user info` SET pnr='$t8' WHERE pnr is NULL AND `username` is not NULL";
        $result2= mysqli_query($conn,$sql2);     
        $sql3 ="Insert Into `frx` (`email id`) select `username` from `user info` where pnr='$t8'";   
        $result3= mysqli_query($conn,$sql3);     
        $sql4 = "UPDATE `frx` SET pnr='$t8' WHERE pnr is NULL AND `email id` is not NULL";
        $result4= mysqli_query($conn,$sql4);  
        $sql5 ="Insert Into `travel_details` (`username`) select `username` from `user info` where pnr='$t8'";   
        $result5= mysqli_query($conn,$sql5);     
        $sql6 = "UPDATE `travel_details` SET pnr='$t8' WHERE pnr is NULL AND `username` is not NULL";
        $result6= mysqli_query($conn,$sql6);     
        header('location: trip.php');
      }
      elseif(mysqli_num_rows($result_pass)!=0)
      {
        echo "<script>alert('wrong password!');</script>";
      }
      else
       {
        echo "<script>alert('you are not registered with us!');</script>";
       }
    $conn->close();
  }
?>
<!DOCTYPE html>
<html>
<title>amadeus_trip</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
// Get the modal
var modal1 = document.getElementById('id02');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal1) {
        modal1.style.display = "none";
    }
}
</script>
<style>
body,h1 {font-family: "Raleway", sans-serif}
body, html {height: 100%}
.bgimg {
    background-image: url('images/travel.png');
    min-height: 100%;
    background-position: center;
    background-size: cover;
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

/* Set a style for all buttons */
button {
    background-color: black;
    color:white;
    padding: 0px 10px;
    margin: 8px 10px;
    border: none;
    cursor: pointer;
    width: 100%;
    border-radius:50px;
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
</style>

<body>

<div class="bgimg w3-display-container w3-animate-opacity w3-text-white">
<div class="w3-display-topleft w3-padding-large w3-xlarge">
 <b><i class="fa fa-map-marker w3-margin-right"></i><img src="images/amadetn.png" style="margin:10px 10px;"/></b>
  </div>
  <div class="w3-display-middle">
  <button onclick="document.getElementById('id01').style.display='block'" style="width:200px;height:100px;opacity:0.5;" class="w3-xlarge"  ><strong>LOGIN</strong></button><br>
   <button onclick="document.getElementById('id02').style.display='block'" style="width:200px;height:100px; margin:0p 100px;opacity:0.5;" class="w3-xlarge"><strong>SIGN UP</strong></button>
 </div>
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

<div id="id02" class="modal">
  
  <form class="modal-content" method="post" style="border-radius:3%;">
    <div class="imgcontainer">
      <span  onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="images/login.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label style="color:white;"><b>First Name</b></label>
      <input type="text" placeholder="Enter first name" name="first_name" required>

      <label style="color:white;"><b>Middle Name</b></label>
      <input type="text" placeholder="Enter middle name" name="middle_name">
        
      <label style="color:white;"><b>Last Name</b></label>
      <input type="text" placeholder="Enter last name" name="last_name" required>

      <label style="color:white;"><b>Email Id</b></label>
      <input type="text" placeholder="Enter email id" name="email_id" required>
        
      <label style="color:white;"><b>Phone Number</b></label>
      <input type="text" placeholder="Enter phone number" name="phone_number" required>

      <label style="color:white;"><b>National ID Number</b></label>
      <input type="text" placeholder="Enter National ID Number" name="aadhaar_number" required>

      <label style="color:white;"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
         
      <button class="w3-button w3-red"type="submit" name="submit2" >sign up!</button>
  
      </div>
                    <?php  
                     if(isset($message))  
                     {  
                          echo $message;  
                     }  
                     ?> 
                     
                     </form>
        </div>

<div id="id01" class="modal">
  
  <form class="modal-content" method="post"  style="border-radius:3%;">
    <div class="imgcontainer">
      <span  onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="images/login.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label style="color:white;"><b>Username (email id)</b></label>
      <input type="text" placeholder="Enter Username" name="email_id"  required>

      <label style="color:white;"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button  class="w3-button w3-red" type="submit" name="submit3">Login</button>
    </div>

                    <?php  
                     if(isset($message))  
                     {  
                          echo $message;  
                     }  
                     ?> 
  

  </form>
 </div>
</body>
</html>
