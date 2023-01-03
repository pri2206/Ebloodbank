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
session_start();

          if(!isset($_SESSION['email'])){
            header("location:login.php");
          }
?>
   <!DOCTYPE html>
<html>
<head>
	<title>eBLOOD_BANK</title>
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
 </div>
 <div class="signuptrial">
  <form class="container1">

 <h1>Do you know why we need Blood?</h1>
<!--<div class="gif2">
     <img src="images/Do you know.gif"  alt="Do you know">
            </div>-->
 <ul type="square">
  <li>Every year our nation requires about 5 Crore units of blood, out of which only a amount of 2.5 Crore units of blood are available.</li>
  <li >The gift of blood is the gift of life. There is no substitute for human blood.</li>
  <li>Every two seconds someone needs blood.</li>
  <li>More than 38,000 blood donations are needed every day.</li>
  <li >A total of 30 million blood components are transfused each year.</li>
  <li>The average red blood cell transfusion is approximately 3 points.</li>
  <li>The blood type most often requested by hospitals is Type O.</li>
  <li >Sickle cell patients can require frequent blood transfusions throughout their lives.</li>
  <li>More than 1 million new people are diagnosed with cancer each year. Many of them will need blood, sometimes daily, during their chemotherapy treatment.</li>
  <li >A single car accident victim can require as many as 100 units of blood</li>
</ul>
</form>
</div>
</body>
</html>