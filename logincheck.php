<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ebloodbank";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{echo "success";}

$db= mysqli_select_db($conn,'ebloodbank');

if(isset($_POST['submit']))
{
	 echo $username=$_POST['user'];
	 echo $password=$_POST['pass'];

	 $sql= "SELECT * FROM admintable WHERE user='$username' AND pass='$password'";
	 $query= mysqli_query($conn,$sql);
	 $row= mysqli_num_rows($query);
	 {
	 	if($row == 1)
	 	{
	 		echo "login successful";
	 		 $_SESSION['user']=$username;
	 		header('location:mainpannel.php');
	 	}
	 	else
	 	{
	 		echo "login failed";
	 		header('location:Adminlogin.php');
	 	}
	 }

}
?>
  	