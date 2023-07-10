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
    <h1>TUDUNG PEOPLE</h1>

<div class="brands">
  <div class="column">
      <form name="add" action="tudungpeople.php" method="get">
      <a href="#"><img src="https://cdn.shopify.com/s/files/1/0260/2821/2269/products/chili-a_b00e7dff-6604-49e7-bf30-593fdc08b56f_570x.progressive.jpg?v=1576917496" alt="Cotton" ></a>
      <p>Aisya in Chili</p>
      <p><b>RM39.50</b></p>
      <input type="hidden" name="productID" value="T1">
      <input type="hidden" name="username" value="<?php echo $username ?>">
          <input type="hidden" name="image" value="https://cdn.shopify.com/s/files/1/0260/2821/2269/products/chili-a_b00e7dff-6604-49e7-bf30-593fdc08b56f_570x.progressive.jpg?v=1576917496">
      <input type="submit" value="Add To Cart" class="button1">
      </form>
  </div>
  <div class="column">
      <form name="add" action="tudungpeople.php" method="get">
      <a href="#"><img src="https://cdn.shopify.com/s/files/1/0260/2821/2269/products/lemon-a_570x.progressive.jpg?v=1576917523" alt="Cotton" ></a>
      <p>Aisya in Lemon</p>
      <p><b>RM39.50</b></p>
      <input type="hidden" name="productID" value="T2">
      <input type="hidden" name="username" value="<?php echo $username ?>">
          <input type="hidden" name="image" value="https://cdn.shopify.com/s/files/1/0260/2821/2269/products/lemon-a_570x.progressive.jpg?v=1576917523">
      <input type="submit" value="Add To Cart" class="button1">
      </form>
  </div>
  <div class="column">
      <form name="add" action="tudungpeople.php" method="get">
      <a href="#"><img src="https://cdn.shopify.com/s/files/1/0260/2821/2269/products/pumpkin_20a_570x.progressive.jpg?v=1576923396" alt="Cotton" ></a>
      <p>Aisya Curve in Pumpkin</p>
      <p><b>RM39.50</b></p>
      <input type="hidden" name="productID" value="T3">
      <input type="hidden" name="username" value="<?php echo $username ?>">
          <input type="hidden" name="image" value="https://cdn.shopify.com/s/files/1/0260/2821/2269/products/pumpkin_20a_570x.progressive.jpg?v=1576923396">
      <input type="submit" value="Add To Cart" class="button1">
      </form>
  </div>
  <div class="column">
      <form name="add" action="tudungpeople.php" method="get">
      <a href="#"><img src="https://cdn.shopify.com/s/files/1/0260/2821/2269/products/primrose_20a_2efd013f-4906-4525-8fbd-0fca990129b0_570x.progressive.jpg?v=1576923427" alt="Cotton" ></a>
      <p>Aisya Curve in Primrose</p>
      <p><b>RM39.50</b></p>
      <input type="hidden" name="productID" value="T4">
      <input type="hidden" name="username" value="<?php echo $username ?>">
          <input type="hidden" name="image" value="https://cdn.shopify.com/s/files/1/0260/2821/2269/products/primrose_20a_2efd013f-4906-4525-8fbd-0fca990129b0_570x.progressive.jpg?v=1576923427">
      <input type="submit" value="Add To Cart" class="button1">
      </form>
  </div>
  <div class="column">
      <form name="add" action="tudungpeople.php" method="get">
      <a href="#"><img src="https://cdn.shopify.com/s/files/1/0260/2821/2269/products/AustereSQa_570x.progressive.jpg?v=1619147455" alt="Cotton" ></a>
      <p>Art Nouveau (SQ) in Austere</p>
      <p><b>RM99</b></p>
      <input type="hidden" name="productID" value="T5">
      <input type="hidden" name="username" value="<?php echo $username ?>">
          <input type="hidden" name="image" value="https://cdn.shopify.com/s/files/1/0260/2821/2269/products/AustereSQa_570x.progressive.jpg?v=1619147455">
      <input type="submit" value="Add To Cart" class="button1">
      </form>
  </div>
  <div class="column">
      <form name="add" action="tudungpeople.php" method="get">
      <a href="#"><img src="https://cdn.shopify.com/s/files/1/0260/2821/2269/products/Revere-SQ-a_570x.progressive.jpg?v=1619155143" alt="Cotton" ></a>
      <p>Art Nouveau (SQ) in Revere</p>
      <p><b>RM99</b></p>
      <input type="hidden" name="productID" value="T6">
      <input type="hidden" name="username" value="<?php echo $username ?>">
          <input type="hidden" name="image" value="https://cdn.shopify.com/s/files/1/0260/2821/2269/products/Revere-SQ-a_570x.progressive.jpg?v=1619155143">
      <input type="submit" value="Add To Cart" class="button1">
      </form>
  </div>
  <div class="column">
      <form name="add" action="tudungpeople.php" method="get">
      <a href="#"><img src="https://cdn.shopify.com/s/files/1/0260/2821/2269/products/CARROT-A_570x.progressive.jpg?v=1576908937" alt="Cotton" ></a>
      <p>Maysaa in Carrot</p>
      <p><b>RM24</b></p>
      <input type="hidden" name="productID" value="T7">
      <input type="hidden" name="username" value="<?php echo $username ?>">
          <input type="hidden" name="image" value="https://cdn.shopify.com/s/files/1/0260/2821/2269/products/CARROT-A_570x.progressive.jpg?v=1576908937">
      <input type="submit" value="Add To Cart" class="button1">
      </form>
  </div>
  <div class="column">
      <form name="add" action="tudungpeople.php" method="get">
      <a href="#"><img src="https://cdn.shopify.com/s/files/1/0260/2821/2269/products/taffy-a_570x.progressive.jpg?v=1576913961" alt="Cotton" ></a>
      <p>Maysaa in Taffy</p>
      <p><b>RM24</b></p>
      <input type="hidden" name="productID" value="T8">
      <input type="hidden" name="username" value="<?php echo $username ?>">
          <input type="hidden" name="image" value="https://cdn.shopify.com/s/files/1/0260/2821/2269/products/taffy-a_570x.progressive.jpg?v=1576913961">
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
    $_SESSION['new'] = "NO";
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