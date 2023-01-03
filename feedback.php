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
          session_start();

          if(!isset($_SESSION['email'])){
            header("location:signup.php");
          }
          
         // echo $_SESSION['email']; 

if(isset($_POST['submit']))
{
$comments=$_POST['comments'];
$experience=$_POST['experience'];
 
//session_start();
$email1= $_SESSION['email'];


 $sql = "UPDATE userdata SET comments='$comments', experience='$experience' WHERE email='$email1'" ;
$query_run=mysqli_query($con,$sql);
if($query_run)
{
    echo'<script type="text/javascript"> alert("Your Feedback is valuable :) Thankyou. ")</script>';
}
else
{
      echo'<script type="text/javascript"> alert("Not submitted!!")</script>';
}
}

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
  <title>Feedback form</title>
  <script type="text/javascript"></script>
  <link href="style.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700&display=swap" rel="stylesheet">
</head>
<body>
   
 
  <div class="header">
    <div class="container">
       <div class="inner-header">
        <div class="dropdown">
         <button class="dropbtn">Logged In</button>
          <div class="dropdown-content">
            <a href="#"><?php echo $_SESSION['email']?></a></div>
        </div>
           <div class="logo">
               <a href="#"><img src="images/new.png" alt="eBloodBank"></a>
           </div>
           <div class="navigation">
                 <ul>
                     <li><a href="index.php">Home</a></li>
                     <li><a href="feedback.php">Feedback</a></li>
                     <li><a href="faq1.php">FAQs</a></li>
                     <li><a href="Aboutus.php">About</a></li>
                      <li><a href="Logout.php">Logout</a></li>
                  </ul>
           </div>
       </div>
    </div>
 </div>  
 <form class="container2" method="post"> 
 <div class="signuptrial">
        <h1>Feedback</h1>
        <p>Please provide your feedback below:</p>
        <div class="gif1">
          <img src="images/feedback Gif.gif"  alt="your feedback is valuable to us">
            </div>
              <div class="signuptrial">
                   <p>How do you rate your overall experience?</p>
                    <label>
                    <input type="radio" name="experience"value="bad" >
                    Bad
                    </label>

                    <label>
                    <input type="radio" name="experience"  value="average" >
                    Average
                    </label>

                    <label>
                    <input type="radio" name="experience"  value="good" >
                    Good
                    </label>
      
                </div>
           <div>    
            <h4> Comments:</h4>  <textarea rows="8" cols="50" name="comments"  placeholder="Your Comments"></textarea>
           </div><br>
           <div>
                   <button type="submit" name="submit" class="btn">Post </button>
                </div>
           </div>
        </form>

    </div>
</div>
</body>
</html>