<?php

session_start();
$host = "localhost";
$username = "root";
$pass = "";
$db = "eshopfd";
$errors = array();

$con = mysqli_connect($host, $username, $pass, $db);

if (!$con || $con->connect_error) {
    die("Neco se posralo!" . $con->connect_error);
}


if (isset($_POST['vytvorit']) && $_POST['kontrola'] == 1) {


    $nazev = $con->real_escape_string($_POST['kategorie']);
    if (empty($nazev) || $nazev == "") {
        echo "Hodnota nesmi byt prazdna!";
    }

    $query = "INSERT INTO kategorie (nazev) VALUES ('$nazev')";
    mysqli_query($con, $query) or die(mysqli_error());

    $query = "SELECT nazev FROM Kategorie ";


}
if (isset($_POST['vytvorit_subkategorii']) && $_POST['kontrola2'] == 1) {
    $ID_KAT = $_POST['id_kategorie'];
    $NAZEV_PODKATEGORIE = $_POST['nazev_subkategorie'];

    if (empty($_POST['nazev_subkategorie'])) {
        echo "Chyba!";
    } else {

        $sql = "INSERT INTO subkategorie (Id_subkategorie, Id_kat, nazev_subkategorie) VALUES ('','$ID_KAT', '$NAZEV_PODKATEGORIE')";
        mysqli_query($con, $sql);

        header('Location:admin.php');
    }
}

?>


<!DOCTYPE html>
<html lang="en">

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
    <title>Přidej kategorii</title>
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

<div class="signup-form">
    <form method="post" action="">
        <h2>Admin Panel</h2>
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class=""></i></span>
                <input  type="hidden" name="kontrola" value="1">
                <input style="border-radius: 2.5%" type="text" class="form-control" name="kategorie" placeholder="Pridani kategorie"
                       >
                <br>
            </div>


            <div class="form-group">
                <button type="submit" name="vytvorit" class="btn btn-primary btn-block btn-lg"
                        style="background-color: rgba(66, 164, 245,0.9)">Přidat
                </button>
            </div>
        </div>
        <input type="hidden" name="kontrola2" value="1">
        <label style="font-size: 1rem">Vyber kategorii</label>

        <div class="form-group">
            <div class ="input-group">
                <select name="id_kategorie">
                    <span class="input-group-addon"><i class=""></i></span>
                    <?php $sql = "SELECT * FROM kategorie";
                    $dotaz = mysqli_query($con, $sql);
                    while ($kat = mysqli_fetch_assoc($dotaz)) {
                        $KATEGORIE = "";
                        $KATEGORIE = '<option value = "' . $kat['Id_kategorie'] . '">' . $kat['nazev'] . '</option>';
                        ?>
                        <?php echo $KATEGORIE;
                    } ?>
                </select>

                <b<label style="color: white" style="font-size: 1em">Nazev Podkategorie</label>
                <label><input type="text"class="form-control" name="nazev_subkategorie"></label>
            </div>
            <div class="form-group">
                <button  class="btn btn-primary btn-block btn-lg"style="background-color: rgba(66, 164, 245,0.9)" type="submit" name="vytvorit_subkategorii" >Vytvorit</div>
            <a class="btn btn-rpimary btn-blok btn-log" href="../main.php">Zpět</a>
    </form>

</div>

</body>
</html>
