<?php
session_start();
if (isset($_SESSION['ROLE']) && $_SESSION['ROLE'] == "admin" ) {
    echo "";
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

$ID = $_GET['id'];
$sql = "SELECT * FROM forum_kategorie WHERE id_kategorie = '$ID'";
$result = mysqli_query($con,$sql) or die ( mysqli_error());
$radek = mysqli_fetch_assoc($result);
?>


<?php
if (isset($_POST['update']) && $_POST['update'] != 1 ) {
    echo "Injection detected";
}

if(isset($_POST['update']) && $_POST['update'] == 1) {


    $ID = $radek['id_kategorie'];
    $NAZEV = $_REQUEST['nazev'];


    $dotaz2 = "UPDATE forum_kategorie SET nazev ='" . $NAZEV . "' WHERE id_kategorie = '". $ID."'";
    if ($NAZEV == "") {
        echo("<script>window.location = 'forum_admin.php?id=$ID';</script>");

    } else {

        mysqli_query($con, $dotaz2) or die(mysqli_error());
        header('Location:forum_uprava.php');
    }


} else {
?>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/bootstrap-grid.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/forms.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/tabulka_kategorie.css">
    <link rel = "icon" href ="../images/web_logo.png" type = "image/x-icon">
</head>
<body>
<form method="post" action="">


    <input type="hidden" name="update" value="1">

    <label>Zmena Nazvu Kategorie</label>
    <p><input type="text" name="nazev" placeholder="Zadejte novy nazev" value="<?php echo $radek['nazev'];?>" required></p>
    <p><input name="submit" type="submit" value="Upravit"></p>
    <br>
    <a href="forum_uprava.php">Zpatky</a>


</form>
<?php } ?>
</body>
</html>