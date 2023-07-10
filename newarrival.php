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
    <meta charset="UTF-8">
	<title>New Arrival</title>
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

<div class="body">
<h1> NEW ARRIVAL </h1>  
     
<div class="brands">
  <div class="column">
      <form name="add" action="newarrival.php" method="get">
      <a href="#"><img src="../3-Project/imageproject/new1.jpeg" alt="Cotton" ></a>
      <p>Tudung People - Wayfarer Impi in Erat</p>
      <p><b>RM99</b></p>
      <input type="hidden" name="productID" value="T9">
      <input type="hidden" name="username" value="<?php echo $username ?>">
      <input type="hidden" name="image" value="../3-Project/imageproject/new1.jpeg">
      <input type="submit" value="Add To Cart" class="button1">
      </form>
  </div>
  <div class="column">
      <form name="add" action="newarrival.php" method="get">
      <a href="#"><img src="../3-Project/imageproject/new2.jpeg" alt="Cotton" ></a>
      <p>Tudung People - Wayfarer Impi in Kunjung</p>
      <p><b>RM99</b></p>
      <input type="hidden" name="productID" value="T10">
      <input type="hidden" name="username" value="<?php echo $username ?>">
      <input type="hidden" name="image" value="../3-Project/imageproject/new2.jpeg">
      <input type="submit" value="Add To Cart" class="button1">
      </form>
  </div>
  <div class="column">
      <form name="add" action="newarrival.php" method="get">
      <a href="#"><img src="../3-Project/imageproject/new3.jpeg" alt="Cotton" ></a>
      <p>Tudung People - Wayfarer Impi in Salam</p>
      <p><b>RM99</b></p>
      <input type="hidden" name="productID" value="T11">
      <input type="hidden" name="username" value="<?php echo $username ?>">
          <input type="hidden" name="image" value="../3-Project/imageproject/new3.jpeg">
      <input type="submit" value="Add To Cart" class="button1">
      </form>
  </div> 
  <div class="column">
      <form name="add" action="newarrival.php" method="get">
      <a href="#"><img src="../3-Project/imageproject/new4.jpeg" alt="Cotton" ></a>
      <p>Neelofar Hijab - Linia in Dark Powder Blue</p>
      <p><b>RM65</b></p>
      <input type="hidden" name="productID" value="N9">
      <input type="hidden" name="username" value="<?php echo $username ?>">
          <input type="hidden" name="image" value="../3-Project/imageproject/new4.jpeg">
      <input type="submit" value="Add To Cart" class="button1">
      </form>
  </div>
  <div class="column">
      <form name="add" action="newarrival.php" method="get">
      <a href="#"><img src="../3-Project/imageproject/new5.jpeg" alt="Cotton" ></a>
      <p>Neelofar Hijab - Linia in Dark Dusty Rose Mauve</p>
      <p><b>RM65</b></p>
      <input type="hidden" name="productID" value="N10">
      <input type="hidden" name="username" value="<?php echo $username ?>">
          <input type="hidden" name="image" value="../3-Project/imageproject/new5.jpeg">
      <input type="submit" value="Add To Cart" class="button1">
      </form>
  </div>
  <div class="column">
      <form name="add" action="newarrival.php" method="get">
      <a href="#"><img src="../3-Project/imageproject/new6.jpeg" alt="Cotton" ></a>
      <p>Neelofar Hijab - Linia in Dark Fair Khaki</p>
      <p><b>RM65</b></p>
      <input type="hidden" name="productID" value="N11">
      <input type="hidden" name="username" value="<?php echo $username ?>">
          <input type="hidden" name="image" value="../3-Project/imageproject/new6.jpeg">
      <input type="submit" value="Add To Cart" class="button1">
      </form>
  </div> 
  <div class="column">
      <form name="add" action="newarrival.php" method="get">
      <a href="#"><img src="../3-Project/imageproject/new7.png" alt="Cotton" ></a>
      <p>Calaqisya - Danish Square in Lotus</p>
      <p><b>RM59</b></p>
      <input type="hidden" name="productID" value="C9">
      <input type="hidden" name="username" value="<?php echo $username ?>">
          <input type="hidden" name="image" value="../3-Project/imageproject/new7.png">
      <input type="submit" value="Add To Cart" class="button1">
      </form>
  </div> 
  <div class="column">
      <form name="add" action="newarrival.php" method="get">
      <a href="#"><img src="../3-Project/imageproject/new8.png" alt="Cotton" ></a>
      <p>Calaqisya - Danish Square in Fragrant Lilac</p>
      <p><b>RM59</b></p>
      <input type="hidden" name="productID" value="C10">
      <input type="hidden" name="username" value="<?php echo $username ?>">
          <input type="hidden" name="image" value="../3-Project/imageproject/new8.png">
      <input type="submit" value="Add To Cart" class="button1">
      </form>
  </div>
  <div class="column">
      <form name="add" action="newarrival.php" method="get">
      <a href="#"><img src="../3-Project/imageproject/new9.png" alt="Cotton" ></a>
      <p>Calaqisya - Danish Square in Dark Black</p>
      <p><b>RM59</b></p>
      <input type="hidden" name="productID" value="C11">
      <input type="hidden" name="username" value="<?php echo $username ?>">
          <input type="hidden" name="image" value="../3-Project/imageproject/new9.png">
      <input type="submit" value="Add To Cart" class="button1">
      </form>
  </div>
  <div class="column">
      <form name="add" action="newarrival.php" method="get">
      <a href="#"><img src="../3-Project/imageproject/new10.jpeg" alt="Cotton" ></a>
      <p>Duck - The Anyaman in Dragonfruit</p>
      <p><b>RM200</b></p>
      <input type="hidden" name="productID" value="D9">
      <input type="hidden" name="username" value="<?php echo $username ?>">
          <input type="hidden" name="image" value="../3-Project/imageproject/new10.jpeg">
      <input type="submit" value="Add To Cart" class="button1">
      </form>
  </div>
  <div class="column">
      <form name="add" action="newarrival.php" method="get">
      <a href="#"><img src="../3-Project/imageproject/new11.jpeg" alt="Cotton" ></a>
      <p>Duck - The Anyaman in Pear</p>
      <p><b>RM200</b></p>
      <input type="hidden" name="productID" value="D10">
      <input type="hidden" name="username" value="<?php echo $username ?>">
          <input type="hidden" name="image" value="../3-Project/imageproject/new11.jpeg">
      <input type="submit" value="Add To Cart" class="button1">
      </form>
  </div>
  <div class="column">
       <form name="add" action="newarrival.php" method="get">
      <a href="#"><img src="../3-Project/imageproject/new12.jpeg" alt="Cotton" ></a>
      <p>Duck - The Anyaman in Blue Pea</p>
      <p><b>RM200</b></p>
      <input type="hidden" name="productID" value="D11">
      <input type="hidden" name="username" value="<?php echo $username ?>">
           <input type="hidden" name="image" value="../3-Project/imageproject/new12.jpeg">
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

var productID;

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
</html    