<?php 

          session_start();

          if(!isset($_SESSION['email'])){
            header("location:login.php");
          }
         // echo $_SESSION['email']; 
          ?>

<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link href="style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700&display=swap" rel="stylesheet">
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
          
<div class="dashflex-container">

  <div>        <div class="flex-containerdash">
  <div>
 <a class="abc" href="donorlist.php">Donors List
          </a></div>
  <div>
    <a class="abc" href="updation.php">Edit profile</a></div>
  <div>
    <a class="abc" href="search.php">Search Donors</a></div>  
  <div>
    <a class="abc" href="bloodfacts.php">e-bloodfacts</a>
  </div>
   </div>
 </div>
</div>

</body>
</html>