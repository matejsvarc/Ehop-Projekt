<?php
session_start();
if(isset($_SESSION['ROLE']) && $_SESSION['ROLE'] == "admin" ) {
    echo "OK";
} else {
    header('Location:../admin_sekce/admin.php');
}


$host = "localhost";
$username = "root";
$pass = "";
$db = "eshopfd";



$con = mysqli_connect($host,$username,$pass,$db);

if (!$con || $con->connect_error) {
    die("Pripojeni k databazi selhalo!". $con->connect_error);
}

$ID = $_GET['id_komentare'];
$sql = "DELETE FROM komentare WHERE id_komentare = '$ID'";
$sql2 = "SELECT id_produkt FROM komentare WHERE id_komentare = '$ID'";
$result = mysqli_query($con,$sql);
$request = mysqli_query($con,$sql2);
while ($row = mysqli_fetch_assoc($request)) {
    $id_produkt = $row['id_produkt'];
}
$id_produkt = $_GET['id'];
header("Location:main.php" );

?>