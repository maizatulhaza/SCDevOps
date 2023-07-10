<?php
//specify the server name and here it is localhost
$server_name = "localhost";

//specify the username - here it is root
$user_name = "indigo";

//specify the password - it is empty
$password = "1234";

//specify the database name - "My_company"
$database_name = "db_indigo";

// Creating the connection by specifying the connection details
$connection = mysqli_connect($server_name, $user_name, $password,$database_name);

//sql query to create a table named Service with three columns
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

$query = "CREATE TABLE Address
(
line1 varchar(100),
line2 varchar(100),
city varchar(30),
postcode varchar(10),
state varchar(30),
username varchar(40)
)";

if (mysqli_query($connection, $query))
{
  echo "<br />Table Address created";
}
else
{
  die('<br />Error creating Address table: ' . mysqli_error());
}

$query = "CREATE TABLE Product
(
productID varchar(15) NOT NULL,
PRIMARY KEY (productID),
pName varchar(200),
pPrice double
)";

if (mysqli_query($connection, $query))
{
  echo "<br />Table Product created";
}
else
{
  die('<br />Error creating Product table: ' . mysqli_error());
}

$query = "CREATE TABLE Cart
(
productID varchar(15) NOT NULL,
username varchar(40) NOT NULL,
PRIMARY KEY (productID, username),
quantity int,
image varchar(200)
)";

if (mysqli_query($connection, $query))
{
  echo "<br />Table Cart created";
}
else
{
  die('<br />Error creating Cart table: ' . mysqli_error());
}

//close the connection
mysqli_close($connection);
?>