<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ebloodbank";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
session_start();
if(!isset($_SESSION['user']))
{
    header('location:Adminlogin.php');
}
?>
<!DOCTYPE html> 
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
  <title>PROFILE OF USERS</title>
  <link  rel="stylesheet" href="adminstyle.css" rel="stylesheet">
  <form  method="post">
 
<h1>Available Donors</h1>

<?php

$sql="SELECT * FROM userdata";
$result = $conn->query($sql);

if($result) {
    echo "<table border=1 cellpadding=1 cellspacing=1>
    <tr>
    <th>ID</th>
    <th>FirstName</th>
    <th>LastName</th>
    <th>email</th>
    <th>Age</th>
    <th>BloodType</th>
    <th>City</th>
    <th>Address</th>
    <th>Password</th>
    <th>Phone No</th>
    <th>Experience</th>
    <th>Comments</th>
    <th>EDIT here</th>
    <th>DELETE</th>
    </tr>";
    
    while($row = $result->fetch_assoc()) {
      
        echo "<tr><td>" .$row["id"]."</td><td>". $row["firstname"]."</td><td>". $row["lastname"]. "</td><td>" .$row["email"]."</td><td>".$row["Age"]."</td><td>".$row["BloodType"]. "</td><td>" . $row["city"]. "</td><td>" . $row["address"]."</td><td>".$row["password"]. "</td><td>". $row["phoneno"]."</td><td>". $row["experience"]."</td><td>". $row["comments"]."</td><td>"."<a href=edit1.php?id=".$row["id"].">edit</a>" ."</td><td>"." <a href=delete.php?id=".$row["id"].">delete</a></td></tr>" ;
       
         }
    echo "</table>";
     
} else {
    echo "0 results";
}
$conn->close();
?>
</form>
</div>

<header class="btn1"><a  href='add.php'>Add New Users</a> <a href ="adminlogout.php"> Logout </a></header>
</body>
</html>

