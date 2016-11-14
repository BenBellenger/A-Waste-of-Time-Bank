<?php 
session_start(); 
$welcome_message = "Welcome to the time bank!";
?>
<html>
<title>A Waste OF Time Bank</title>
    
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    
<body> 

<?php require 'header.php';?>   

<!-- start of main content -->
<hr>
<div class="w3-center">
  <h2><?php echo $welcome_message; ?></h2>
  <p>The time bank allows you to trade jobs with others</p>
  <p>Because time is money!</p>
</div>
<br>    

<div class="w3-row-padding w3-center w3-margin-top">
<div class="w3-half">
  <div class="w3-card-2 w3-padding-top" style="min-height:100px">
  <h4>Register or Login</h4><br>
      <a href="login.php"><img src="/Images/Login.png" width="100px" alt="login or register on the site"></a>
  </div>
</div>

<div class="w3-half">
  <div class="w3-card-2 w3-padding-top" style="min-height:100px">
  <h4>Find a job</h4><br>
  <img src="/Images/Search.png.png" width="100px">
  </div>
</div>    
</div>    

<!-- end of main content -->

<?php include 'footer.php';?>
    
</body>
</html>

