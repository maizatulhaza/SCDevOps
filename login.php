<?php 
include 'config.php';

session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<title>VogueValet</title>
	<link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<body>
   
<div class="topnav">
<a class="active" href="index.php">VOGUE VALET</a>
<a href="newarrival_out.php">NEW ARRIVAL</a>
<div class="dropdown">
    <button class="dropbtn">BRANDS 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="tudungpeople_out.php">Tudung People</a>
      <a href="duck_out.php">Duck</a>
      <a href="calaqisya_out.php">Calaqisya</a>
      <a href="nealofar_out.php">Nealofar</a>
    </div>
  </div>
    
  
<div class="iconbar">
    <a href="login.php"><i class="fa fa-fw fa-shopping-cart"></i></a>
    <div class="dropdown">
    <button class="dropbtn"> 
      <i class="fa fa-fw fa-user"></i>
    </button>
    <div class="dropdown-content-login">
      <a href="login.php" class="log">Log In</a>
      <a href="registration.php" class="log">Register</a>
    </div>
  </div>
</div>
</div>

<div class="body">
<h1> LOG IN </h1> 
<form action="check_login.php" method="POST">
<div class="registration"> 
    <p style="text-align: center"><b>HI CUSTOMER!</b></p>
    <p style="color: #808080">Please enjoy shopping with us.</p> <br>
    Email address : <br>
    <input type="text" id="femail" name="femail" size=55 class="inputbox"><br><br>
    Password : <br> 
    <input type="password" id="password" name="password" size=55 class="inputbox"><br>
    <input type="checkbox" onclick="passwordFunction()">Show Password <br><br>
    <input type="submit" name="submit" class="submireg" value="Log in">
</div>
</form>    
</div>
    
<div class="footer">
  <h2>Vogue Valet Shopping Centre</h2>
  <p>Monday - Thursday : 9am - 5pm</p>
  <p>Friday: 9am - 1pm</p>
  <p>Meal Break: 1 pm - 2 pm</p>

<p>CUSTOMER SERVICE: help@voguevalet.com </p>
<p>TEL: 03 - 33412486</p>

<p>HR : career.voguevalet@gmail.com </p>

    <div class="socials">
        <h3>Follow us</h3>
        <a href="#"><i class="fa fa-fw fa-instagram"></i></a>
        <a href="#"><i class="fa fa-fw fa-twitter"></i></a>
        <a href="http://www.utm.my"><i class="fa fa-fw fa-facebook-f"></i></a>
    </div>
    
</div>
    
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
    
function passwordFunction() {
        var x = document.getElementById("password");
        if (x.type === "password") {
        x.type = "text";
    } 
    else {
        x.type = "password";
    }
}
    
</script>

</body>
</html>