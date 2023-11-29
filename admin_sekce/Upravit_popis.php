<?php
session_start();
if (isset($_SESSION['ROLE']) && $_SESSION['ROLE'] == "admin" ) {
    echo "";
} else {
    header('Location:admin.php');
}

// Databaze
$host = "localhost";
$username = "root";
$pass = "";
$db = "eshopfd";


$con = mysqli_connect($host,$username,$pass,$db);


if (!$con || $con->connect_error) {
    die("Pripojeni k databazi selhalo!". $con->connect_error);
}

$ID = $_GET['id'];
$sql= "SELECT * FROM produkty WHERE id_produkt ='$ID'";
$result = mysqli_query($con,$sql) ;
$radek = mysqli_fetch_assoc($result);

?>

<?php


if(isset($_POST['submit'])) {





    $ID = $radek['id_produkt'];
    $NAZEV = $_REQUEST['popis_produktu'];


    $sql2 = "UPDATE produkty SET popis_produktu ='" . $NAZEV . "' WHERE id_produkt = '". $ID."'";
    if ($NAZEV == "") {
        echo("<script>window.location = 'produkt.php?id=$ID';</script>");

    } else {

        mysqli_query($con, $sql2);
        header('Location:../main.php');
    }


} else {
?>
<!DOCTYPE HTML>
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
    <script src="https://cdn.tiny.cloud/1/kbcdv71ji48bkm1izmvyozftmzbctbipc8hm5t9r2qctbhel/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'autolink lists media  table ',
            toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter pageembed permanentpen table',
            toolbar_mode: 'floating',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
        });
    </script>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-purple" style="background-image: radial-gradient(100% 1000% at 100% 0, #5adaff 0, #5468ff 100%);">

    <div class="mx-auto order-1 w-75">
        <a class="navbar-brand mx-lg-5" href="../main.php">CBD Eshop</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>

    <div class="navbar-collapse collapse  order-2  dual-collapse2">
        <ul class="navbar-nav ml-auto">

            <li class="nav-item">
                <a class="nav-link active" href='../main.php'>Domů</a>

            </li>

            <li class='nav-item'>
                <a class='nav-link active' style="width:9rem;" href='admin.php'>Přidávání kategorii</a>

            </li>

            <li class='nav-item'>
                <a class='nav-link active ' style="width:8.5rem;" href='Uprava_kategorii.php'>Úprava kategorií</a>
            </li>

            <li class='nav-item'>
                <a class='nav-link active' style="width:9rem;" href='Pridavani_produktu.php'>Přidávání Produktů</a>
            </li>

            <li class='nav-item'>
                <a class='nav-link active' style="width:8.5rem;" href='Smazat_produkt.php'>Mazání produktů</a>
            </li>
            <li class='nav-item'>
                <a class='nav-link active' style="width:8.5rem;" href='Pridavani_banneru.php'>Přidávání bannerů</a>
            </li>
            <li class='nav-item'>
                <a class='nav-link active' style="width:9rem;" href='stav_objednavek.php'>Řešení Objednávek</a>
            </li>

        </ul>
    </div>
    <div class="navbar-collapse collapse w-75  order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class='nav-link' href='../logout.php'><i class='fa fa-reply-all'></i> Logout</a>
            </li>
        </ul>

    </div>
</nav>
<form method="post" action="">


    <textarea id="textarea" type="text" class="second" name="popis_produktu" required>
        <?php echo $radek['popis_produktu'];?>
    </textarea>

    <p><input name="submit" type="submit" value="Upravit"></p>
    <br>
    <a href="../main.php">Zpatky</a>

</form>
<?php } ?>
</body>
</html>