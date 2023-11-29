
<?php
session_start();
if(isset($_SESSION['ROLE']) && $_SESSION['ROLE'] == "admin" ) {
    echo "OK";
} else {
    header('Location:admin.php');
}


$host = "localhost";
$username = "root";
$pass = "";
$db = "eshopfd";



$con = mysqli_connect($host,$username,$pass,$db);

if (!$con || $con->connect_error) {
    die("Pripojeni k databazi selhalo!". $con->connect_error);
}

$ID = $_GET['id_post'];
$sql = "DELETE FROM forum_komentare WHERE id_komentare = '$ID';";
$sql .= "DELETE FROM forum_post WHERE id_post ='$ID';";
$result = mysqli_multi_query($con,$sql);
header("Location:../forum_main.php");

?>