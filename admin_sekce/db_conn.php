<?php  

$sname = "localhost";
$uname = "root";
$password = "";

$db_name = "eshopfd";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Nefunguje je ti to more!";
	exit();
}