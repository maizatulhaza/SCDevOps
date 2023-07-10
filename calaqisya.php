<!--
********************************************************
* WEB PROGRAMMING PROJECT                              *
*                                                      *
*                                                      *
* TEAM : Indigo                                        *
*                                                      *
********************************************************
-->
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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTP-8">
    <title>Brands</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="C:/Users/haza/Downloads/styles.css">
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
    
<div class="body">
    <h1>CALAQISYA</h1>
    
<div class="brands">
  <div class="column">
      <form name="add" action="calaqisya.php" method="get">
      <a href="#"><img src="https://www.calaqisya.com/images/Daniah_Square_Flint_Purple_20210602131139.jpg" alt="Cotton" ></a>
      <p>Daniah Square Flint Purple</p>
      <p><b>RM59</b></p>
      <input type="hidden" name="productID" value="C1">
      <input type="hidden" name="username" value="<?php echo $username ?>">
          <input type="hidden" name="image" value="https://www.calaqisya.com/images/Daniah_Square_Flint_Purple_20210602131139.jpg">
      <input type="submit" value="Add To Cart" class="button1">
      </form>
  </div>
  <div class="column">
      <form name="add" action="calaqisya.php" method="get">
      <a href="#"><img src="https://www.calaqisya.com/images/Daniah_Square_Beaver_Fur_20210602131107.jpg" alt="Cotton" ></a>
      <p>Daniah Square Beaver Fur</p>
      <p><b>RM59</b></p>
      <input type="hidden" name="productID" value="C2">
      <input type="hidden" name="username" value="<?php echo $username ?>">
          <input type="hidden" name="image" value="https://www.calaqisya.com/images/Daniah_Square_Beaver_Fur_20210602131107.jpg">
      <input type="submit" value="Add To Cart" class="button1">
      </form>
  </div>
  <div class="column">
      <form name="add" action="calaqisya.php" method="get">
      <a href="#"><img src="https://www.calaqisya.com/images/Daniah_Square_Apple_Butter_20210602131322.jpg" alt="Cotton" ></a>
      <p>Daniah Square Apple Butter</p>
      <p><b>RM59</b></p>
      <input type="hidden" name="productID" value="C3">
      <input type="hidden" name="username" value="<?php echo $username ?>">
          <input type="hidden" name="image" value="https://www.calaqisya.com/images/Daniah_Square_Apple_Butter_20210602131322.jpg">
      <input type="submit" value="Add To Cart" class="button1">
      </form>
  </div>
  <div class="column">
      <form name="add" action="calaqisya.php" method="get">
      <a href="#"><img src="https://www.calaqisya.com/images/Daniah_Square_Fawn_01_20210415095003.jpg" alt="Cotton" ></a>
      <p>Daniah Square Fawn</p>
      <p><b>RM59</b></p>
      <input type="hidden" name="productID" value="C4">
     <input type="hidden" name="username" value="<?php echo $username ?>">
          <input type="hidden" name="image" value="https://www.calaqisya.com/images/Daniah_Square_Fawn_01_20210415095003.jpg">
      <input type="submit" value="Add To Cart" class="button1">
      </form>
  </div>
  <div class="column">
      <form name="add" action="calaqisya.php" method="get">
      <a href="#"><img src="https://www.calaqisya.com/images/Daniah_Square_Praline_20210602130850.jpg" alt="Cotton" ></a>
      <p>Daniah Square Praline</p>
      <p><b>RM59</b></p>
      <input type="hidden" name="productID" value="C5">
      <input type="hidden" name="username" value="<?php echo $username ?>">
          <input type="hidden" name="image" value="https://www.calaqisya.com/images/Daniah_Square_Praline_20210602130850.jpg">
      <input type="submit" value="Add To Cart" class="button1">
      </form>
  </div>
  <div class="column">
      <form name="add" action="calaqisya.php" method="get">
      <a href="#"><img src="https://www.calaqisya.com/images/Daniah_Square_Pale_Mauve_20210602130743.jpg" alt="Cotton" ></a>
      <p>Daniah Square Pale Mauve</p>
      <p><b>RM59</b></p>
      <input type="hidden" name="productID" value="C6">
      <input type="hidden" name="username" value="<?php echo $username ?>">
          <input type="hidden" name="image" value="https://www.calaqisya.com/images/Daniah_Square_Pale_Mauve_20210602130743.jpg">
      <input type="submit" value="Add To Cart" class="button1">
      </form>
  </div>
  <div class="column">
      <form name="add" action="calaqisya.php" method="get">
      <a href="#"><img src="https://www.calaqisya.com/images/Daniah_Square_Black_20210602131532.jpg" alt="Cotton" ></a>
      <p>Daniah Square Black</p>
      <p><b>RM59</b></p>
      <input type="hidden" name="productID" value="C7">
      <input type="hidden" name="username" value="<?php echo $username ?>">
          <input type="hidden" name="image" value="https://www.calaqisya.com/images/Daniah_Square_Black_20210602131532.jpg">
      <input type="submit" value="Add To Cart" class="button1">
      </form>
  </div>
  <div class="column">
      <form name="add" action="calaqisya.php" method="get">
      <a href="#"><img src="https://www.calaqisya.com/images/Daniah_Square_Shadow_Grey_20210602131441.jpg" alt="Cotton" ></a>
      <p>Daniah Square Shadow Grey</p>
      <p><b>RM59</b></p>
      <input type="hidden" name="productID" value="C8">
      <input type="hidden" name="username" value="<?php echo $username ?>">
          <input type="hidden" name="image" value="https://www.calaqisya.com/images/Daniah_Square_Shadow_Grey_20210602131441.jpg">
      <input type="submit" value="Add To Cart" class="button1">
      </form>
  </div>
    </div>
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
</script>
    
  
</body>
<?php
if (isset($_GET['productID']))   {
    mysqli_select_db($conn, "db_indigo");
    $sql="SELECT * FROM Cart WHERE productID='$_GET[productID]' AND username='$_GET[username]'";

    $result=mysqli_query($conn, $sql);
    $rows=mysqli_fetch_array($result);
    $count=mysqli_num_rows($result);
    $q=$rows['quantity'];
    
    if ($count > 0) {
        $q =  $q + 1;
        
        $sql="UPDATE Cart SET quantity='$q' WHERE productID='$_GET[productID]' AND username='$_GET[username]'";
        if (!mysqli_query($conn, $sql))
        {
            echo 'Error in existing cart';
            die('Error: ' . mysqli_error());
        }
    }
    else    {
        $sql="INSERT INTO Cart (productID, username, quantity, image)
        VALUES ('$_GET[productID]','$_GET[username]','1', '$_GET[image]')";

        if (!mysqli_query($conn, $sql))
        {
            echo 'Error in new cart';
            die('Error: ' . mysqli_error());
        }
    }
}
?>    
</html>