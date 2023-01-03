
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
$id=$_GET['id'];
$sql = "DELETE FROM userdata WHERE id=$id";

if(mysqli_query($conn,$sql))
{
	header("refresh:1; url='mainpannel.php' ");
 }

	    else
	    {
	    echo "Not deleted";
	    }
  
	 
?>
