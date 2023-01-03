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

          if(!isset($_SESSION['email'])){
            header("location:login.php");
          }
?>
<!DOCTYPE html> 
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
  <title>PROFILE OF USERS</title>
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
           </div><div class="dropdown">
         <button class="dropbtn">Logged In</button>
          <div class="dropdown-content">
            <a href="#"> <?php echo $_SESSION['email'] ?></a></div>
        </div>
       </div>
   </div>
</div>
           <div class="signuptrial">
  <form class="container1" action="dashboard.php" method="post">
<h1>Available Donors</h1>
<?php

$sql="SELECT * FROM userdata";
$result = $conn->query($sql);

if($result) {
    echo "<table><tr>
    <th>ID</th>
    <th>Name</th>
    <th>BloodType</th>
    <th>City</th>
    <th>Address</th>
    <th>Phone No</th>
    </tr>";
    // output data of each row
    $si = "0";
    while($row = $result->fetch_assoc()) {
      $si= $si+1;
        echo "<tr><td>" . $si. "</td><td>" . $row["firstname"]. " " . $row["lastname"]. "</td><td>" . $row["BloodType"]. "</td><td>" . $row["city"]. "</td><td>" . $row["address"]. "</td><td>". $row["phoneno"]."</td></tr>" ;
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
</form>
</div>
</body>
</html>

