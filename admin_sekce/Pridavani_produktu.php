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
// Registrace uzivatelu

if (isset($_POST['Pridat'])) {
    $jmeno = $con->real_escape_string($_POST['jmeno_produktu']);
    $popis = $con->real_escape_string($_POST['popis_produktu']);
    $cena = $con->real_escape_string($_POST['cena']);


    if (empty($jmeno) || empty($popis) || empty($cena)) {
        array_push($errors, "Zaplnte celou formu");
    }
    $id_kategorie = $con->real_escape_string($_POST['Id_kategorie']);
    $Id_subkategorie = $con->real_escape_string($_POST['Id_subkategorie']);

    if (isset($_FILES['obrazek'])) {

        $img_name = $_FILES['obrazek']['name'];
        $tmp_name = $_FILES['obrazek']['tmp_name'];
        $error = $_FILES['obrazek']['error'];


        $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
        $img_ex_lc = strtolower($img_ex);

        $allowed_exs = array("jpg", "jpeg", "png");

        if (in_array($img_ex_lc, $allowed_exs)) {
            $new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;
            $img_upload_path = '../images/' . $new_img_name;
            move_uploaded_file($tmp_name, $img_upload_path);

            $query = "INSERT INTO produkty (jmeno_produktu,popis_produktu, obrazek,Id_kategorie, cena, Id_subkategorie) VALUES ('$jmeno', '$popis', '$new_img_name', '$id_kategorie','$cena','$Id_subkategorie')";
            mysqli_query($con, $query);
        }
    }


}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Přidávání produktu</title>
    <link rel="stylesheet" href="../css/loginform.css">
    <link rel="stylesheet" href="../css/forms.css">
    <link rel="stylesheet" href="../css/bootstrap-grid.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" href="../images/web_logo.png" type="image/x-icon">
    <link rel="stylesheet" href="xd.css">
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

    <div class="mx-auto order-1 w-50">
        <a class="navbar-brand mx-lg-5" href="../main.php">CBD Eshop</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>

    <div class="navbar-collapse collapse w-100 order-2  dual-collapse2">
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


<form action="" enctype="multipart/form-data" method="post">
    <input type="text" id="login" class="second" name="jmeno_produktu" placeholder="Jméno Produktu">
    <textarea type="text" id="login" class="second" name="popis_produktu" placeholder="Popis Produktu" required>
    </textarea>
    <input type="text" id="login" class="third" name="cena" placeholder="Cena Produktu">
    <input type="file" name="obrazek" class="third" required>


    <select name="Id_kategorie">
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
    <select name="Id_subkategorie">
        <span class="input-group-addon"><i class=""></i></span>
        <?php $sql = "SELECT * FROM subkategorie";
        $dotaz = mysqli_query($con, $sql);
        while ($radek = mysqli_fetch_assoc($dotaz)) {
            $SUB_KATEGORIE = "";
            $SUB_KATEGORIE = '<option value = "' . $radek['Id_subkategorie'] . '">' . $radek['nazev_subkategorie'] . '</option>';
            ?>
            <?php echo $SUB_KATEGORIE;
        } ?>
    </select>
    <input type="submit" class="fourth" name="Pridat" value="Pridat">

</form>

</body>
</html>


