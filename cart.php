<?php
Header('Access-Control-Allow-Origin: *'); //for allow any domain, insecure
Header('Access-Control-Allow-Headers: *'); //for allow any headers, insecure
Header('Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE'); 

    class db{
        // Properties
        private $host = 'localhost';
        private $user = 'indigo';
        private $password = '1234';
        private $dbname = 'db_indigo';

        // Connect
        public function connect(){
            $mysql_connect_str = "mysql:host=$this->host;dbname=$this->dbname";
            $dbConnection = new PDO($mysql_connect_str, $this->user, $this->password);
            $dbConnection->setAttribute(PDO::ATTR_ERRMODE, 
                                                                  PDO::ERRMODE_EXCEPTION);

            return $dbConnection;
        }
    }

    $id = $_POST["productID"];
    $name = $_POST["username"];
    $quantity = $_POST["quantity"];
    $image = $_POST["image"];

try {
    $sql = "INSERT INTO user (username,productID,quantity,image) VALUES
			               (:username,:productID,:quantity,:image)";
    $db = new db();
    // Connect
    $db = $db->connect();
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':username', $name);
    $stmt->bindValue(':productID', $id);
    $stmt->bindValue(':quantity', $quantity);
    $stmt->bindValue(':image', $image);
    $stmt->execute();
    $count = $stmt->rowCount();
    $db = null;

    $data = array(
        "status" => "success",
        "rowcount" =>$count
    );
    echo json_encode($data);
} catch (PDOException $e) {
    $data = array(
        "status" => "fail"
    );
    echo json_encode($data);
}
?>

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

if (isset($_GET['productID']) AND isset($_GET['remove'])) {
    $delete_id = $_GET['productID'];
    $sql = "DELETE FROM Cart WHERE productID='$delete_id' AND username='$username'";
    mysqli_query($conn, $sql);
}

if (isset($_GET['productID']) AND isset($_GET['minus']))  {
    $m_id = $_GET['productID'];
    $m_quantity = $_GET['quantity'] - 1;
    
    if($m_quantity > 0)    {
        $sql = "UPDATE Cart SET quantity='$m_quantity' WHERE productID='$m_id' AND username='$username'";
    }
    else    {
        $sql = "DELETE FROM Cart WHERE productID='$m_id' AND username='$username'";
    }
    
    mysqli_query($conn, $sql);
}

if (isset($_GET['productID']) AND isset($_GET['add']))    {
    $a_id = $_GET['productID'];
    $a_quantity = $_GET['quantity'] + 1;
    
    $sql = "UPDATE Cart SET quantity='$a_quantity' WHERE productID='$a_id' AND username='$username'";
    mysqli_query($conn, $sql);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<title>VogueValet</title>
	<link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .imagecart  {
            width: 110px;
            height: 130px;
        }

        .tablecart  {
            border: 2px solid burlywood;
            margin: auto;
        }
        .tablehead  {
            text-align: left;
        }
        .cartheader    {
            width: 70px;
            text-align: center;
            border: 2px double burlywood;
            padding: 20px;
            background: burlywood;
            color: white;
        }
        .cartheaderP {
            width: 600px;
            text-align: center;
            border: 2px double burlywood;
            padding: 20px;
            background: burlywood;
            color: white;
        }
        .cartcontent    {
            border: 2px dotted burlywood;
            text-align: center;
        }
        .result  {
            width: 600px;
            text-align: left;
            border: 2px double burlywood;
            padding: 20px;
            margin: auto;
            padding: 20px;
        }
        .tableresult    {
            margin: 0 0 0 742px;
            padding: 10px;
            width: 450px;
        }
    </style>
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
<h1> CART </h1> 

<?php 
$totalpriceall = 0;

$result = mysqli_query($conn,"SELECT Cart.productID, Cart.username, Cart.quantity, Cart.image, Product.pName, Product.pPrice
FROM Cart
INNER JOIN Product ON Cart.productID = Product.productID
WHERE username='$username'");
$count=mysqli_num_rows($result);
if($count > 0)  {
?>
<table class="tablecart">
<tr>
    <th colspan="3" class="cartheaderP">Product</th>
    <th class="cartheader">Quantity</th>
    <th class="cartheader">Unit Price</th>
    <th class="cartheader">Total Price</th>
</tr>
<?php
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
        <td class="cartcontent"><form action="cart.php" method="get">
            <input type="hidden" name="remove" value="YES">
            <input type="hidden" name="productID" value="<?php echo $product_id;?>">
            <input type="submit" class="removecart" value="Remove">
            </form></td>
        <td class="cartcontent"><img src="<?php echo $image; ?>" class="imagecart">
        </td>
    <td class="cartcontent"><?php echo $product_name; ?></td>
    <td class="cartcontent">
        <form action="cart.php" method="get">
        <input type="hidden" name="add" value="YES">
        <input type="hidden" name="productID" value="<?php echo $product_id;?>">
        <input type="hidden" name="quantity" value="<?php echo $quantity; ?>">
        <input type="submit" value="+" class="addminus"></form>
        
        <?php echo $quantity; ?>
        
        <form action="cart.php" method="get">
        <input type="hidden" name="minus" value="YES">
        <input type="hidden" name="productID" value="<?php echo $product_id;?>">
        <input type="hidden" name="quantity" value="<?php echo $quantity; ?>">
        <input type="submit" value="-" class="addminus"></form>
    </td> 
    <td class="cartcontent"> RM<?php echo sprintf('%0.2f', $product_price); ?></td>
    <td class="cartcontent"> RM<?php echo sprintf('%0.2f', $totalprice); ?></td>
    </tr>
<?php 
    }
?>
</table>

<table class="tableresult">
    <tr><td class="result">Total &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : RM<?php echo sprintf('%0.2f', $totalpriceall); ?> <br>
    Shipping Fee &nbsp;: RM10.00 <br></td></tr>
    
    <tr><td class="result">   
    Total Payment : RM<?php echo sprintf('%0.2f', ($totalpriceall+10)); ?> <br> </td></tr>
    <tr><td class="result2" style="text-align: center; background: #e8cdab; padding: 20px;">
    <form action="checkout.php" method="POST">
        <input type="hidden" name="totalpayment" value="<?php echo ($totalpriceall+10); ?>">
        <input type="submit" value="Proceed to checkout" class="checkout">
        </form></td></tr>
</table>
</div>
<?php 
}
    else    {
        echo '<br><br><h3 style="text-align: center;"> Cart is empty ! <br>Continue Shopping with us :)</h3><br><br>';
    }
?>
    
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