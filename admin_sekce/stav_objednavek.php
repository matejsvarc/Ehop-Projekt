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
    <link rel="stylesheet" href="../css/produkty.css">
    <link rel = "icon" href ="../images/web_logo.png" type = "image/x-icon">
    <title>Stav Objednávek</title>
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
                <a class='nav-link active' style="width:10rem;" href='admin.php'>Přidávání kategorii</a>

            </li>

            <li class='nav-item'>
                <a class='nav-link active ' style="width:10rem;" href='Uprava_kategorii.php'>Úprava kategorií</a>
            </li>

            <li class='nav-item'>
                <a class='nav-link active' style="width:10rem;" href='Pridavani_produktu.php'>Přidávání Produktů</a>
            </li>

            <li class='nav-item'>
                <a class='nav-link active' style="width:10rem;" href='Smazat_produkt.php'>Mazání produktů</a>
            </li>
            <li class='nav-item'>
                <a class='nav-link active' style="width:10rem;" href='Pridavani_banneru.php'>Přidávání bannerů</a>
            </li>
            <li class='nav-item'>
                <a class='nav-link active' style="width:10rem;" href='stav_objednavek.php'>Řešení Objednávek</a>
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
    <table class="stav-objednavky">
        <thead>
        <th>Id Objednavky</th>
        <th>Jmeno</th>
        <th>Příjmení</th>
        <th>Telefon</th>
        <th>Adresa</th>
        <th>Mesto</th>
        <th>Kraj</th>
        <th>Metoda Platby</th>
        <th>Objednane Produkty</th>
        <th>Cena</th>
        </thead>
    </table>
<?php
$sql = ("SELECT * FROM objednavky");
$query = mysqli_query($con, $sql);
while ($row = mysqli_fetch_assoc($query)) {
    $id_objednavky = $row['id_objednavky'];
    ?>
    <table class="stav-objednavky">
        <tbody>
        <tr style="">
            <td funny_nadpis="id_produkt"><?php echo $row['id_objednavky']; ?></td>
            <td funny_nadpis="jmeno_produkt"><?php echo $row['jmeno']; ?></td>
            <td funny_nadpis="jmeno_produkt"><?php echo $row['prijmeni']; ?></td>
            <td funny_nadpis="jmeno_produkt"><?php echo $row['telefon']; ?></td>
            <td funny_nadpis="jmeno_produkt"><?php echo $row['adresa']; ?></td>
            <td funny_nadpis="jmeno_produkt"><?php echo $row['mesto']; ?></td>
            <td funny_nadpis="jmeno_produkt"><?php echo $row['kraj']; ?></td>
            <td funny_nadpis="jmeno_produkt"><?php echo $row['metoda']; ?></td>
            <td funny_nadpis="jmeno_produkt"><?php echo $row['objednane_produkty']; ?></td>
            <td funny_nadpis="jmeno_produkt"><?php echo $row['cena']; ?></td>
        </tr>
        </tbody>
    </table>
    </table>
    <?php
}
?>
</body>
</html>
