<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ebloodbank";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
if(isset($_POST['submit']))
{
//$firstname=$_POST['firstname'];
//$lastname=$_POST['lastname'];
$email=$_POST['email'];
$password=$_POST['password'];
$otp=rand(100000, 999999);//OTP generate;

$sql = "SELECT * FROM userdata WHERE email='$email'";
$result = $con->query($sql);


if(mysqli_num_rows($result)>=1)
{
   echo'<script type="text/javascript"> alert("username already exists!!! ")</script>';
}
  
else
{
  $sql = "INSERT INTO userdata(email,otp,password) VALUES ('$email','$otp','$password')";

        if($con->query($sql))
          {
  
        $rndno=rand(100000, 999999);//OTP generate
        $message = urlencode("otp number.".$otp);
        $to=$email;
        $subject = "OTP";
        $txt = "THANK YOU ,for registering on eBloodBank .Your OTP is: ".$otp."";
        $headers = "From: ebloodbankindore@gmail.com" . "\r\n" .
        "CC:surbhichouhan210@gmail.com";

        mail($to,$subject,$txt,$headers);
        header("location:verification.php");
        }
        else
        {
          echo'<script type="text/javascript"> alert("form has not been submitted")</script>';
          
        }
 }
 }
?>
<!DOCTYPE html>
<html>
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
  <form class="container1" action="signup.php" method="post">
<h1>Signup</h1>

    <label for="email"><b>Email</b></label>
    <input class="inputcontrol" type="text" placeholder="Please enter your email" name="email" required>

   <label for="password"><b>Password</b></label>
    <input  class="inputcontrol" type="password" placeholder="6-15 character" name="password" required>
     
      <button type="submit" name="submit" class="btn">
    Register</button>
<p>
  <strong>Already a user!!!
</strong></p>

  <a href="login.php" class="btn">
          LOGIN</a>
</form>
</div>
</body>
</html>