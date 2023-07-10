<?php
include 'config.php';

if (!$conn)
{
die('Could not connect: ' . mysqli_error());
}

session_start();
$username=$_POST['username'];
$femail=$_POST['femail'];
$password=$_POST['password'];
$repass=$_POST['repass'];

mysqli_select_db($conn, "db_indigo");

if ($password == $repass)   {
$sql = "SELECT * FROM user WHERE username='$username'";
$result = mysqli_query($conn,$sql);
$rows=mysqli_fetch_array($result);
$count=mysqli_num_rows($result);
if ($count > 0)   {
    $_SESSION['Login'] = "NO";
}
else    {
    $sql = "SELECT * FROM user WHERE femail='$femail'";
    $result = mysqli_query($conn,$sql);
    $rows=mysqli_fetch_array($result);
    $count=mysqli_num_rows($result);
    if ($count > 0)   {
        $_SESSION['Login'] = "NO";
    }
    else    {
        mysqli_query($conn,"INSERT INTO User (username, femail, password) VALUES ('$username', '$femail', '$password')");
            $_SESSION['Login'] = "YES";
 
            // Add user information to the session (global session variables)
            $_SESSION['USER'] = $username;
            $_SESSION['EMAIL'] = $femail;
            $_SESSION['PASS'] = $password;
    }
}
}

if ($_SESSION['Login'] == "YES") {
    header("Location: main.php");
}
else if ($_SESSION['Login'] == "NO")    {
    header("Location: registration.php");
}
?>