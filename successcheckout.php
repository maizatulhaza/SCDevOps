<?php 
include 'config.php';

if (!$conn)
{
die('Could not connect: ' . mysqli_error());
}

session_start();
if (!isset($_SESSION['Login'])) {
    header("Location: main.php");
}
$username = $_SESSION['USER'];
$email = $_SESSION['EMAIL'];

mysqli_select_db($conn, "db_indigo");
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
<a class="active" href="main.php">VOGUE VALET</a>
<a href="newarrival.php">NEW ARRIVAL</a>
<div class="dropdown">
    <button class="dropbtn">BRANDS 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="tudungpeople.php">Tudung People</a>
      <a href="duck.php">Duck</a>
      <a href="calaqisya.php">Calaqisya</a>
      <a href="nealofar.php">Nealofar</a>
    </div>
  </div>
    
  
<div class="iconbar">
    <a href="cart.php"><i class="fa fa-fw fa-shopping-cart"></i></a>
    <div class="dropdown">
    <button class="dropbtn"> 
      <i class="fa fa-fw fa-user"></i>
    </button>
    <div class="dropdown-content-login">
      <a href="logout.php" class="log">Log Out</a>
    </div>
  </div>
</div>
</div>
    
<div class="body" style="text-align: center;">
<h1> SUCCESSFUL </h1> 
<br><br>
<h3> Checkout successful ! </h3>

<?php
$sql = "DELETE FROM Cart WHERE username='$username'";
mysqli_query($conn, $sql);
?>
<form action="main.php">
<input type="submit" value="Thank you!" class="checkout">
</form>
</div>
<br><br><br>  
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
</script>
</body>
</html>