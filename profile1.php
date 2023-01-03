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
           </div>
           <div class="navigation">
                 <ul>
                     <li><a href="index.php" target="blank">Home</a></li>
                     <li><a href="feedback.php">Feedback</a></li>
                     <li><a href="Faq1.php">FAQs</a></li>
                     <li><a href="Aboutus.php">About</a></li>
                  </ul>
           </div>
       </div>
    </div>
 </div>   
<div class="signuptrial">
  <form class="container1" action="signup.php" method="post">
<h1>Available Donors</h1>
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
$BloodType1 = $_GET['BloodType'];
$location1 = $_GET['location'];

if($BloodType1!='' && $location1!=''){
  $sql = "SELECT * FROM userdata WHERE BloodType='$BloodType1' AND city='$location1' ";
}else{
  $sql = "SELECT * FROM userdata WHERE BloodType='$BloodType1' OR city='$location1' ";
}


$result = $conn->query($sql);

 $rowcount=mysqli_num_rows($result);

 if($rowcount > 0){

if($result) {
    echo "<table><tr>
                 <th>ID</th>
                 <th>Name</th>
                 <th>BloodType</th>
                 <th>City</th>
                 <th>Address</th>
                 </tr>";
    // output data of each row
    $si = "0";
    while($row = $result->fetch_assoc()) {
      $si= $si+1;
        echo "<tr><td>" . $si. "</td><td>" . $row["firstname"]. " " . $row["lastname"]. "</td><td>" . $row["BloodType"]. "</td><td>" . $row["city"]. "</td><td>" . $row["address"]. "</td><td>";
    }
    echo "</table>";
} 
}
else{

echo 'Not Found';

}
$conn->close();
?>
</div>
</form>
</body>
</html>