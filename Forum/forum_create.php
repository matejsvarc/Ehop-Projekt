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
    $id_kategorie = $con->real_escape_string($_POST['id_kategorie']);
    $jmeno = $con->real_escape_string($_POST['nazev']);
    $popis = $con->real_escape_string($_POST['obsah']);
    $uzivatel = $_SESSION['NAME'];

    if (empty($jmeno) || empty($popis) || empty($cena)) {
        array_push($errors, "Zaplnte celou formu");
    }
            $query = "INSERT INTO forum_post (id_kategorie,nazev_post,obsah,uzivatel) VALUES ('$id_kategorie','$jmeno', '$popis','$uzivatel' )";
            mysqli_query($con, $query);



}


?>
<!DOCTYPE html>


<head xmlns="http://www.w3.org/1999/html">
    <meta charset="UTF-8">
    <title>WIP</title>
    <link rel="stylesheet" href="../css/design.css">
    <link rel="stylesheet" href="../css/forms.css">
    <link rel="stylesheet" href="../css/bootstrap-grid.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/design.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../images/web_logo.png" type="image/x-icon">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css'>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/bootstrap.js"></script>
    <link rel="stylesheet" href="../css/hamburger_menu.css">
    <script src="https://kit.fontawesome.com/4ab6940ba1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/slideshow.css">
    <link rel="stylesheet" href="../css/komentare.css">
    <link rel="stylesheet" href="../css/produkty.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/forum.css">
    <script src="https://cdn.tiny.cloud/1/kbcdv71ji48bkm1izmvyozftmzbctbipc8hm5t9r2qctbhel/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'autolink lists media  table ',
            toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter pageembed permanentpen table',
            toolbar_mode: 'floating',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
            height: "290",
            width: "1000",
        });
    </script>
    <style>

        a{
            color: black;
            font-family: 'Quicksand', sans-serif;
        }


    </style>
</head>

<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-purple " style="background-image: radial-gradient(100% 1000% at 100% 0, #5adaff 0, #5468ff 100%);">

    <div class="mx-auto order-1 w-50">
        <a class="navbar-brand mx-lg-5" href="main.php">CBD Projekt</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>

    <div class="navbar-collapse collapse w-75 order-2  dual-collapse2 ">
        <ul class="navbar-nav ml-auto">

            <li class="nav-item">
                <a class="nav-link active" href='forum_main.php'>Domů</a>

            </li>

            <li class='nav-item'>
                <a class='nav-link active' href='CBD%20Oleje%20&%20Kapsle.php'>WIP</a>
            </li>

            <li class='nav-item'>
                <a class='nav-link active' href='CBD%20kvety.php'>WIP</a>
            </li>

            <li class='nav-item'>
                <a class='nav-link active' href='CBD%20Vaporizery.php'>WIP</a>
            </li>

            <li class='nav-item'>
                <a class='nav-link active' href='Kratom.php'>WIP</a>
            </li>
            <li class='nav-item'>
                <a class='nav-link active' href='Doplňky.php'>WIP</a>
            </li>

        </ul>
    </div>

    <div class="navbar-collapse collapse w-25  order-3 dual-collapse2" style="position: sticky">
        <ul class="navbar-nav ml-auto">
            <li style='color: white' class="nav-item">
                <?php
                if ($_SESSION['ROLE'] == 'admin') {
                    echo "<a class='nav-link' href='admin/forum_admin.php'><i class='fa fa-user'></i> Admin</a>";
                } else {
                    echo'<a class="nav-link"><i class="fa fa-user"></i> '. $_SESSION['NAME'] .'</a>';
                }
                if (!isset($_SESSION['NAME'])) {
                    echo "<a class='nav-link' href='login.php><i class='fa fa-user'></i> Přihlašte se</a>";
                }

                ?>
            <li class="nav-item">
                <a class='nav-link' href='../logout.php'><i class='fa fa-reply-all'></i> Logout</a>
            </li>

            </li>
        </ul>

    </div>
</nav>
<div class="create_post">
<form action="" enctype="multipart/form-data" method="post">
    <input type="text"  name="nazev" placeholder="Nazev článku">
    <textarea type="text" name="obsah" placeholder="Obsah" required>
    </textarea>

<div class="selectdiv">
    <select name="id_kategorie">
        <span><i class=""></i></span>
        <?php $sql = "SELECT * FROM forum_kategorie";
        $dotaz = mysqli_query($con, $sql);
        while ($kat = mysqli_fetch_assoc($dotaz)) {
            $KATEGORIE = "";
            $KATEGORIE = '<option value = "' . $kat['id_kategorie'] . '">' . $kat['nazev'] . '</option>';
            ?>
            <?php echo $KATEGORIE;
        } ?>
    </select>
</div>
    <input type="submit" class="fourth" name="Pridat" value="Přidat">

</form>
</div>
</body>


</html>