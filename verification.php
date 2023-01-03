<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ebloodbank";
// Create connection
$con = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($con->connect_error)
 {
    die("Connection failed: " . $con->connect_error);
}
if(isset($_POST['submit']))
{
  $otp=$_POST['otp'];
  $email = $_POST['email'];

$sql = "SELECT otp FROM userdata WHERE otp='$otp' AND email='$email'";
$result = $con->query($sql);
if (mysqli_num_rows($result)>=1)
{
  $otps="1";
  $sql = "UPDATE userdata SET otp='$otps' WHERE email='$email'";
  $con->query($sql);

   header("location:trial-signup.php");

   session_start();
   $_SESSION['email']=$email;

 echo'<script type="text/javascript"> alert("your otp is submitted")</script>';
  
}
else{
   echo'<script type="text/javascript"> alert("wrong OTP")</script>';

}
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
  <title>SIGNUP PAGE1</title>
  <script type="text/javascript"></script>
  <link href="style.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700&display=swap" rel="stylesheet">
</head>
<body>
  <div class="header">
    <div class="container">
       <div class="inner-header">
           <div class="logo">
               <a href="#"><img src="images/new.png" alt="eBloodBank"></a>
           </div>
           <div class="navigation">
                 <ul>
                     <li><a href="index.php" target="blank">Home</a></li>
                     <li><a href="feedback.php">Feedback</a></li>
                     <li><a href="faq1.php">FAQs</a></li>
                     <li><a href="Aboutus.php">About</a></li>
                  </ul>
           </div>
       </div>
    </div>
 </div>   
 <div class="signuptrial">
  <form class="container1" action="verification.php" method="post" >
<h1>Verify its you</h1>
    <label for="otp"><b>Enter OTP</b></label>
    <input class="inputcontrol" type="email" placeholder="Please enter your Email" name="email" required>
    <input class="inputcontrol" type="number" placeholder="Please enter your OTP" name="otp" required>

  <button type="submit" name="submit" class="btn" >verify OTP</button>
</form>
</div>
</body>
</html>
