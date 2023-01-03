<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ebloodbank";

// Cre ate connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$db=mysqli_select_db($conn,'userdata');

if(isset($_POST['update']))
{
	$id=$_GET['id'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$Age=$_POST['Age'];
$BloodType=$_POST['BloodType'];
$city=$_POST['city'];
$address=$_POST['address'];
$phoneno=$_POST['phoneno'];
//$experience=$_POST['experience'];
//$comments=$_POST['comments'];
$password=$_POST['password'];

$query = "UPDATE userdata  SET firstname='$firstname',lastname='$lastname',email='$email',Age='$Age',BloodType='$BloodType',city='$city',address='$address',phoneno='$phoneno', password='$password' WHERE id='$id' ";
$query_run=mysqli_query($conn,$query);

if($query_run)
{
 echo "Data  Updated";
}
else
{
 echo "Data Not Updated";
 
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>update</title>
  <link  rel="stylesheet" href="adminstyle.css" rel="stylesheet">
	<body>
  <form  class="container1" method="POST">
    <div class="signuptrial">

   <center>
   <h2>
   Update your profile here!</h2>
   <?php 
   $id=$_GET['id'];
   $sql = "SELECT * FROM userdata WHERE id='$id'";
   $result = $conn->query($sql);
while($row = $result->fetch_assoc()) {

?>
  
    <label><?php 
    if(isset($row['id'])) ?></label><br>
    <input type="text" name="firstname" placeholder="enter  first name" value="<?php if(isset($row['firstname'])){ echo $row['firstname']; } ?>" /><br>

   <input type="text" name="lastname" placeholder="enter  last name" value="<?php if(isset($row['lastname'])){ echo $row['lastname']; } ?>" /><br>

   <input type="password" name="password" placeholder="enter your password" value="<?php if(isset($row['password'])){ echo $row['password']; } ?>" /><br>

   <input type="text" name="email" placeholder="enter email" value="<?php if(isset($row['email'])){ echo $row['email']; } ?>" /><br>

    <input type="number" name="Age" placeholder="enter your Age" value="<?php if(isset($row['Age'])){ echo $row['Age']; } ?>" /><br>

     <input type="text" name="BloodType" placeholder="enter your BloodType" value="<?php if(isset($row['BloodType'])){ echo $row['BloodType']; } ?>" /><br>

    <input type="text" name="city" placeholder="enter your city" value="<?php if(isset($row['city'])){ echo $row['city']; } ?>" /><br>

    <input type="text" name="address" placeholder="enter your Address"  value="<?php if(isset($row['address'])){ echo $row['address']; } ?>" /><br>

     <input type="number" name="phoneno" placeholder="enter your phoneno" value="<?php if(isset($row['phoneno'])){ echo $row['phoneno']; } ?>" /><br>

 <input type="submit" name="update" value="UPDATE DATA"/> <?php } ?>

</center>
</form>
</div>
 </div>
</body>
</html>
