<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ebloodbank";

// Cre ate connection
$conn = new mysqli($servername,$username,$password,$dbname);
// Check connection 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
/*session_start();

          if(!isset($_SESSION['email'])){
            header("location:login.php");
          }*/
        

$db=mysqli_select_db($conn,'userdata');

if(isset($_POST['update']))
{
$email=$_SESSION['email'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$city=$_POST['city'];
$address=$_POST['address'];
$Age=$_POST['Age'];
$password=$_POST['password'];

$query = "UPDATE userdata  SET firstname='$firstname',lastname='$lastname',city='$city',address='$address',Age='$Age',password='$password' WHERE email='$email' ";
$query_run=mysqli_query($conn,$query);

if($query_run)
{
  echo "Data  Updated";

 /* header("Dataupdated.php");*/
  //echo'<script type="text/javascript">alert("Data Updated")</script>';
}
else
{
 echo "Data Not Updated";
 /*echo'<script type="text/javascript">alert("Data Not Updated")</script>';*/
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>update</title>
	<link href="style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
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
                     <li><a href="feedback.php">Feedback</a></li>
                     <li><a href="Faq1.php">FAQs</a></li>
                     <li><a href="Aboutus.php">About</a></li>
                     <li><a href="Logout.php">Logout</a></li>
                  </ul>
           </div>
      
    </div>
 </div>
 <div class="signuptrial">
  <form   class="container1" action="" method="POST">
   <center>
   <h1>
   Update your profile here!</h1>
   <?php 
   $email = $_SESSION['email'];
   $sql = "SELECT * FROM userdata WHERE email='$email'";
   $result = $conn->query($sql);
while($row = $result->fetch_assoc()) {

?>
  
    <label><?php 
    if(isset($row['email'])){ echo $row['email']; } ?></label><br>
    <input type="text" name="firstname" placeholder="enter your first name" value="<?php if(isset($row['firstname'])){ echo $row['firstname']; } ?>" /><br>
   <input type="text" name="lastname" placeholder="enter your last name" value="<?php if(isset($row['lastname'])){ echo $row['lastname']; } ?>" /><br>
    <input type="text" name="city" placeholder="enter your city" value="<?php if(isset($row['city'])){ echo $row['city']; } ?>" /><br>
    <input type="text" name="address" placeholder="enter your Address"  value="<?php if(isset($row['address'])){ echo $row['address']; } ?>" /><br>
     <input type="number" name="Age" placeholder="enter your Age" value="<?php if(isset($row['Age'])){ echo $row['Age']; } ?>" /><br>
   <input type="password" name="password" placeholder="enter your password" /><br>

 <input type="submit" name="update" value="UPDATE DATA"/> <?php } ?>

</center>
</form>
 </div>
</body>
</html>






































.........................................