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
   $email = $_POST['email'];
  $mypassword=$_POST['password'];



$sql = "SELECT password FROM userdata WHERE email='$email'AND password='$mypassword'";  
$result = $con->query($sql);
if (mysqli_num_rows($result)>=1)
{
 

   session_start();
   $_SESSION['email']=$email;
   $_SESSION['password']=$password;

   header("location:dashboard.php");

 echo'<script type="text/javascript"> alert("right password")</script>';
          
}
else{
 echo'<script type="text/javascript"> alert("Wrong password")</script>';  

}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>LOGIN_PAGE</title>
	<link href="style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
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
                     <li><a href="index.php">Home</a></li>
                     <li><a href="feedback.php">Feedback</a></li>
                     <li><a href="Faq1.php">FAQs</a></li>
                     <li><a href="Aboutus.php">About</a></li>
                    
                  </ul>
           </div>
       </div>
    </div>
 </div>
<div class="signuptrial">
  <form class="container1" action="login.php" method="post">
<h1>LOGIN</h1>
   
    <label for="email"><b>Email</b></label>
    <input class="inputcontrol" type="text" placeholder="Please enter your email" name="email" required>

    <label for="password"><b>Password</b></label>
    <input  class="inputcontrol" type="password" placeholder="6-15 character" name="password" required>
     
     
  <button type="submit" name="submit" class="btn">
    Login</button>
</form>
</div>
 

 </body>
 </html>