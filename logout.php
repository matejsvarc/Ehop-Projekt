<?php
$host = "localhost";
$username = "root";
$pass = "";
$db = "eshopfd";
$errors = array();
$conn = mysqli_connect($host, $username, $pass, $db);
mysqli_query($conn, "DELETE FROM kosik");
session_destroy();
header('location: login.php');
?>
