<!DOCTYPE html>
<html>
<head>
	<title>ADDING USERS</title>
	 <link  rel="stylesheet" href="adminstyle.css" rel="stylesheet">
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

if(isset($_POST['submit'])){
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$Age=$_POST['Age'];
$BloodType=$_POST['BloodType'];
$city=$_POST['city'];
$address=$_POST['address'];
$password=$_POST['password'];
$phoneno=$_POST['phoneno'];
$experience=$_POST['experience'];
$comments=$_POST['comments'];
$query = "INSERT INTO userdata (firstname,lastname,email,Age,BloodType,city,address,password,phoneno,experience,comments) values('$firstname','$lastname','$email','$Age','$BloodType','$city','$address','$password','$phoneno','$experience','$comments')";

$query_run=mysqli_query($conn,$query);
 

	    	if($query_run)

	    {
	    	echo "Data added successfully";

	    }
	    else
	    {
	    	echo "Something went wrong";
	    }
}
?>
</head>

<body>
<form  class="container1" method="POST"><br>
	<div class="signuptrial">
	<h2> Add New Users</h2>
	firstname:  <input type="text" name="firstname"><br>
	lastname:   <input type="text" name="lastname"><br>
	email:      <input type="email" name="email"><br>
	Age:        <input type="number" name="Age"`><br>
	BloodType:  <input type="varchar" name="BloodType"><br>
	city:       <input type="varchar" name="city"><br>
	address:    <input type="varchar" name="address"><br>
	password:   <input type="password" name="password"><br>
	phoneno:    <input type="number" name="phoneno"><br>
	experience: <input type="text" name="experience"><br>
	comments:   <input type="text" name="comments"><br>
<input type="submit" name="submit"><br>
</form>
</div>
</body>
</html> 