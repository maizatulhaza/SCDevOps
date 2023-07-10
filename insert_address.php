<?php
include 'config.php';

if (!$conn)
{
die('Could not connect: ' . mysqli_error());
}

session_start();
$username = $_SESSION['USER'];
$email = $_SESSION['EMAIL'];

mysqli_select_db($conn, "db_indigo");

$line1=$_GET['line1'];
$line2=$_GET['line2'];
$postcode=$_GET['postcode'];
$city=$_GET['city'];
$state=$_GET['state'];

mysqli_query($conn, "INSERT INTO Address (line1, line2, city, postcode, state, username) VALUES ('$line1', '$line2', '$city', '$postcode', '$state', '$username')");
//mysqli_query($conn, "INSERT INTO Address (productID, pName, pPrice)
//VALUES ('N1', 'Qarina Deep Powder Blue', '99')");

$result = mysqli_query($conn, "SELECT * FROM Address WHERE username='$username'");
$rows=mysqli_fetch_array($result);
$count=mysqli_num_rows($result);

if ($count > 0) {
    header("Location: checkout.php");
}
?>