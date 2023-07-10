<?php 

$server = "localhost";
$username = "indigo";
$password = "1234";
$database = "db_indigo";

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>