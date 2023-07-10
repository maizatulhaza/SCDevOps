<?php 
include 'config.php';

if (!$conn)
{
die('Could not connect: ' . mysqli_error());
}

session_start();
if(isset($_POST['totalpayment']))   {
    $totalpayment=$_POST['totalpayment'];
}

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
    
<div class="body">
<h1> CHECKOUT </h1> 

<?php
$sql="SELECT * FROM Address WHERE username='$username'";

$result=mysqli_query($conn, $sql);
$rows=mysqli_fetch_array($result);
$count=mysqli_num_rows($result);

if($count > 0)  {
    $user_name=$rows['username'];
    $line1=$rows['line1'];
    $line2=$rows['line2'];
    $postcode=$rows['postcode'];
    $city=$rows['city'];
    $state=$rows['state'];

    $address = $line1 . ", " . $line2 . ", " . $postcode . ' ' . $city . ", " . $city . ", " . $state;
}
?>
    
<table class="tablecart">
    <tr>
        <th colspan="2" class="cartheaderP">Product</th>
        <th class="cartheader">Quantity</th>
        <th class="cartheader">Unit Price</th>
        <th class="cartheader">Total Price</th>
    </tr>
<?php 
$totalpriceall = 0;

$result = mysqli_query($conn, "SELECT Cart.productID, Cart.username, Cart.quantity, Cart.image, Product.pName, Product.pPrice
FROM Cart
INNER JOIN Product ON Cart.productID = Product.productID
WHERE username='$username'");
while($row=mysqli_fetch_array($result))  {
    $product_id=$row['productID'];
    $user_name=$row['username'];
    $quantity=$row['quantity'];
    $image=$row['image'];
    $product_name=$row['pName'];
    $product_price=$row['pPrice'];
    $totalprice=($quantity*$product_price);
    $totalpriceall = $totalpriceall + $totalprice;
    ?>
    <tr>
        <td class="cartcontent"><img src="<?php echo $image; ?>" class="imagecart">
        </td>
    <td class="cartcontent"><?php echo $product_name; ?></td>
    <td class="cartcontent" style="width: 110px;">
        <?php echo $quantity; ?>
    </td> 
    <td class="cartcontent"> RM<?php echo sprintf('%0.2f', $product_price); ?></td>
    <td class="cartcontent"> RM<?php echo sprintf('%0.2f', $totalprice); ?></td>
    </tr>
<?php 
} ?>
</table>

<table class="tableresult" style="width: auto; margin:auto;">
    <tr><td class="result">Total &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : RM<?php echo sprintf('%0.2f', $totalpriceall); ?> <br>
    Shipping Fee &nbsp;: RM10.00 <br></td></tr>
    
    <tr><td class="result">   
    Total Payment : RM<?php echo sprintf('%0.2f', ($totalpriceall+10)); ?> <br> </td></tr>
    <tr><td class="result2" style="text-align: center; background: #e8cdab; padding: 20px;"></td></tr>
</table>

<?php
if(!($count > 0))    {?>
    <br><br><br>
    <h2 style="text-align: center">You do not have any address save yet!</h2>
    <form action="add_address.php" method="post" style="text-align: center;">
     Click to proceed <input type="submit" value="Click me!">
    </form>
     <br><br><br>
<?php }
else    { ?>
    <div class="delivery" style="width: 600px; margin:auto;">
        <h4>Delievery Address</h4>
        <p> <?php echo $address; ?></p>
        <div class="resultall"><br>
    <form action="successcheckout.php" method="post">
        <p style="text-align: center; font-weight: bold;">Proceed ! &nbsp;<input type="submit" value="Proceed to buy" class="checkout"></p>
    </form>
        </div>
    </div>
<?php }
    ?>
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
</html>