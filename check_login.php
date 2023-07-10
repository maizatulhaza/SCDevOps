<?php
include 'config.php';

if (!$conn)
{
die('Could not connect: ' . mysqli_error());
}

session_start();
$femail=$_POST['femail'];
$password=$_POST['password'];

mysqli_select_db($conn, "db_indigo");

$sql="SELECT * FROM user WHERE femail='$femail' AND password='$password'";

$result=mysqli_query($conn, $sql);
$rows=mysqli_fetch_array($result);
$user_name=$rows['username'];
$user_femail=$rows['femail'];
$user_pass=$rows['password'];

$count=mysqli_num_rows($result);

if (!($count > 0)) {
    $_SESSION['Login'] = "NO";
}
else    {
    $_SESSION['Login'] = "YES";
 
    // Add user information to the session (global session variables)
    $_SESSION['USER'] = $user_name;
    $_SESSION['EMAIL'] = $user_femail;
    $_SESSION['PASS'] = $user_pass;
}

if ($_SESSION['Login'] == "YES") {
    header("Location: main.php");
}
else if ($_SESSION['Login'] == "NO")  {
    header("Location: login.php");
}
?>