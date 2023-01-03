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
} 
?>
<!DOCTYPE html> 
<html>
<head>
  <title>
  Admin login page
  </title>
  <link  rel="stylesheet" href="adminstyle.css" rel="stylesheet">
    <?php include 'links.php' ?> 
</head>   
<body>
  <header>
    <div class="container center-div shadow ">
    <div class="heading text-center mb-5 text-uppercase text-white "> Admin login-page</div>
    <div class="container row d-flex flex-row justify-content-center mb-5">
      <div class="admin-form shadow p-2">
        <form action="logincheck.php" method="POST">
          <div class="form-group">
            <label>User</label>
             <input type="text" name="user" value="" class="form-control" autocomplete="off">
           </div>
           <div class="form-group">
            <label>Password</label>
             <input type="text" name="pass" value="" class="form-control" autocomplete="off">
           </div>
           <input type="submit" class="btn btn-success" name="submit">
          
        </form>
        
      </div>

  </header>
</div>
</div>
</header>
</body>
</html>
