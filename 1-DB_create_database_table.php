<?php
//create server connection
$con = mysqli_connect("localhost","indigo","1234");
if (!$con)
{
die('Could not connect: ' . mysqli_error());
}
//create DB
$sql = "CREATE DATABASE db_indigo";
if (mysqli_query($con, $sql))
{
echo "Database created";
}
else
{
echo "Error creating database: " . mysqli_error();
}

//mysqli_select_db($con, "db_indigo");

/*Create User table
$query = "CREATE TABLE User
(
username varchar(40) NOT NULL,
PRIMARY KEY (username),
femail varchar(40),
password varchar(15)
)";

if (mysqli_query($con, $query))
{
  echo "<br />Table User created";
}
else
{
  die('<br />Error creating User table: ' . mysqli_error());
}

//Create Address table
$query = "CREATE TABLE Address
(
line1 varchar(100),
line2 varchar(100),
city varchar(30),
postcode varchar(10),
state varchar(30),
username varchar(40)
)";

if (mysqli_query($con, $query))
{
  echo "<br />Table Address created";
}
else
{
  die('<br />Error creating Address table: ' . mysqli_error());
}

//Create Product table
$query = "CREATE TABLE Product
(
productID varchar(15) NOT NULL,
PRIMARY KEY (productID),
pName varchar(200),
pPrice double
)";

if (mysqli_query($con, $query))
{
  echo "<br />Table Product created";
}
else
{
  die('<br />Error creating Product table: ' . mysqli_error());
}

//Create Cart table
$query = "CREATE TABLE Cart
(
productID varchar(15) NOT NULL,
username varchar(40) NOT NULL,
PRIMARY KEY (productID, username),
quantity int,
image varchar(200)
)";

if (mysqli_query($con, $query))
{
  echo "<br />Table Cart created";
}
else
{
  die('<br />Error creating Cart table: ' . mysqli_error());
}*/
mysqli_close($con);
?>

