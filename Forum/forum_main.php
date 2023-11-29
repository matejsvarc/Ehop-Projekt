<?php
session_start();
$host = "localhost";
$username = "root";
$pass = "";
$db = "eshopfd";
$errors = array();
$con = mysqli_connect($host, $username, $pass, $db);
if (!isset($_SESSION['NAME'])) {

}

$sql2 = "SELECT * FROM forum_kategorie ";
$query2 = mysqli_query($con, $sql2);

if (!$con || $con->connect_error) {
    die("Neco se posralo!" . $con->connect_error);
}

$sql = "SELECT * FROM forum_post ORDER BY id_post DESC";
$query = mysqli_query($con, $sql);

if(isset($_REQUEST['id'])){
    $id = $_REQUEST['id_post'];
    $sql = "SELECT * FROM forum_post WHERE id = '$id'";
    $query = mysqli_query($con, $sql);
}

if (isset($_POST['Pridat'])) {
    $id_kategorie = $con->real_escape_string($_POST['id_kategorie']);
    $jmeno = $con->real_escape_string($_POST['nazev']);
    $popis = $con->real_escape_string($_POST['obsah']);
    $uzivatel = $_SESSION['NAME'];

    if (empty($jmeno) || empty($popis) || empty($cena)) {
        array_push($errors, "Zaplnte celou formu");
    }
    $query = "INSERT INTO forum_post (id_kategorie,nazev,obsah,uzivatel) VALUES ('$id_kategorie','$jmeno', '$popis','$uzivatel' )";
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
    <link rel="stylesheet" href="../css/navigace.css">
    <link rel="stylesheet" href="../css/forum.css">
    <link rel="stylesheet" href="../css/searchbar.css">
    <style>

        a{
            color: black;
            font-family: 'Quicksand', sans-serif;
        }

    </style>
</head>




<nav class="navbar navbar-expand-lg navbar-dark bg-purple " style="background-image: radial-gradient(100% 1000% at 100% 0, #5adaff 0, #5468ff 100%);">

    <div class="mx-auto order-1 w-100">
        <a class="navbar-brand mx-lg-5" href="../index.php"><img class="logo" src="../images/Logo.png"> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>

    <div class="navbar-collapse collapse w-100 order-2  dual-collapse2 ">
        <ul class="navbar-nav ml-auto">

            <li class="nav-item">
                <a class="nav-link active" href='../index.php'>Domů</a>

            </li>

            <li class='nav-item'>
                <a class='nav-link active' href='../main.php'>E-Shop</a>
            </li>

            <li class='nav-item'>
                <a class='nav-link active' href='../blog/index.php'>Blog</a>
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
                    echo "<a class='nav-link' href='../login.php><i class='fa fa-user'></i> Přihlašte se</a>";
                }

                ?>
            <li class="nav-item">
                <a class='nav-link' href='../logout.php'><i class='fa fa-reply-all'></i> Logout</a>
            </li>

            </li>
        </ul>

    </div>
</nav>

<div class="navigace">
    <a href="../index.php"><i class="fa-solid fa-house"></i></a> <i class="fa-solid fa-angle-right"></i> Forum
</div>

<div class="container mt-5">
    <form method="POST" action="forum_search.php">
    <div class="wrap">
        <div class="search">

            <input type="text" name="search_term" class="searchTerm" placeholder="Co hledáte?">
                <button type="submit" class="searchButton">
                    <i class="fa fa-search"></i>
                </button>

        </div>
    </div>
    </form>

<a href="forum_create.php"><button class="button-29" style="position: relative; left: 33rem">Vytvořit příspěvek</button></a>




    <?php foreach($query as $q){
        ?>
            <div class="forum_prispevky">
                <a href="forum_post.php?id=<?php echo $q['id_post']?>"
                <div class="titul"><?php echo $q['nazev_post'];?></</div></a>
                    <div class="forum_uzivatel">Přidal: <?php echo $q['uzivatel'];?></div>
                    <div class="forum_datum">Přidáno: <?php echo $q['datum_pridani'];?></div>

</div>
    <?php }?>

</body>


</html>