<?php
session_start();
$host = "localhost";
$username = "root";
$pass = "";
$db = "eshopfd";
$errors = array();
$con = mysqli_connect($host, $username, $pass, $db);

$sql = "SELECT * FROM forum_post ORDER BY id_post DESC";

$query = mysqli_query($con, $sql);
if (isset($_REQUEST['id_post'])) {
    $id = $_REQUEST['id_post'];
    $sql = "SELECT * FROM forum_post WHERE id = '$id'";
    $query = mysqli_query($con, $sql);

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
    <link rel="icon" href="../images/web_logo.png" type="image/x-icon">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css'>
    <script src="../js/bootstrap.js"></script>
    <link rel="stylesheet" href="css/produkty.css">
    <script src="../js/bootstrap.js"></script>
    <link rel="stylesheet" href="../css/hamburger_menu.css">
    <script src="https://kit.fontawesome.com/4ab6940ba1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/slideshow.css">
    <link rel="stylesheet" href="../css/komentare.css">
    <link rel="stylesheet" href="../css/produkty.css">
    <link rel="stylesheet" href="../css/forum.css">
    <link rel="stylesheet" href="../css/navigace.css">
    <link rel="stylesheet" href="../css/forum_komentare.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <style>

        a {
            color: black;
            font-family: 'Quicksand', sans-serif;
        }


    </style>
</head>

<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-purple "
     style="background-image: radial-gradient(100% 1000% at 100% 0, #5adaff 0, #5468ff 100%);">

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
                <a class='nav-link active' href='#'>WIP</a>
            </li>

            <li class='nav-item'>
                <a class='nav-link active' href='#'>WIP</a>
            </li>

            <li class='nav-item'>
                <a class='nav-link active' href='#'>WIP</a>
            </li>

            <li class='nav-item'>
                <a class='nav-link active' href='#'>WIP</a>
            </li>
            <li class='nav-item'>
                <a class='nav-link active' href='#'>WIP</a>
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
                    echo '<a class="nav-link"><i class="fa fa-user"></i> ' . $_SESSION['NAME'] . '</a>';
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
</div>
<form action="" method="post">

    <?php
    $id_post = $_GET['id'];

    $select_category = mysqli_query($con, "SELECT * from forum_kategorie WHERE id_kategorie = '$id_post'");
    if (mysqli_num_rows($select_category) > 0) {
        while ($fetch_category = mysqli_fetch_assoc($select_category)) {
            $category_id = $fetch_category['id_kategorie'];
        }

        ?>
        <div class="post_category">
            <?php echo $fetch_category['id_kategorie']; ?>
        </div>
    <?php } ?>
    <?php
    $select_products = mysqli_query($con, "SELECT * FROM forum_post WHERE id_post = '$id_post'");
    if (mysqli_num_rows($select_products) > 0){
    while ($fetch_product = mysqli_fetch_assoc($select_products)){
    $product_popis = $fetch_product['obsah'];
    $id_produkt = $fetch_product['id_post'];
    $autor_name = $fetch_product['uzivatel'];
    $date_added = $fetch_product['datum_pridani'];
    ?>

    <div class="navigace" style="position:relative; top: 2rem;">
        <a href="../index.php"><i class="fa-solid fa-house"></i></a> <i class="fa-solid fa-angle-right"></i> <a
                href="forum_main.php">Forum</a> <i
                class="fa-solid fa-angle-right"></i> <?php echo $fetch_product['nazev_post']; ?>
    </div>

    <div class="forum_post">
        <p class="forum_postname"><?php echo $fetch_product['nazev_post']; ?></p>
        <div class="forum_date">Datum přidání : <?php echo $date_added; ?></div>
        <div class="forum_autor">Autor : <?php echo $autor_name; ?></div>
        <br>
        <div class="forum_posttext"><?php echo $product_popis; ?></div>
        <input type="hidden" name="nazev" value="<?php echo $fetch_product['nazev_post']; ?>">
        <input type="hidden" name="id_post" value="<?php echo $fetch_product['id_post']; ?>">
        <br>
        <?php
        if ($_SESSION['ROLE'] == 'admin') {
            echo "<a class='btn btn-sm btn-primary pull-right' href='admin/Smazat_post.php?id_post=$id_post'>Smazat</a>";
        }
        ?>    </div>

    </div>
</form>

<?php
}
}
?>




<?php

if (!isset($_SESSION['ROLE'])) {
    echo "<div class='col-xl-8'>
    <div class='komentar' >
        <div class='koment-text'>
            <p>Nejsi prihlasen a proto nemuzes odesilat komentare!</p>
        </div>
    </div>
</div>";
} else {

if (isset($_POST['komentuj'])) {
    $ID_prispevek = $con->real_escape_string($_GET['id']);
    $IDp = $ID_prispevek;
    $autor = $_SESSION['NAME'];
    $komentar = $con->real_escape_string($_POST['komentar']);

    $sql2 = "INSERT INTO forum_komentare (id_prispevku,uzivatel,komentar) VALUES ('$ID_prispevek','$autor','$komentar')";
    mysqli_query($con, $sql2);
}

if (isset($_POST['reply'])) {
    $ID_prispevek = $con->real_escape_string($_GET['id']);
    $ID_odpoved = $con->real_escape_string($_POST['odpoved_id']);
    $autor = $_SESSION['NAME'];
    $odpoved = $con->real_escape_string($_POST['odpoved']);

    $odpoved_sql = "INSERT INTO forum_komentare (id_prispevku,id_odpoved,uzivatel,komentar) VALUES ('$ID_prispevek','$ID_odpoved','$autor','$odpoved')";
    mysqli_query($con, $odpoved_sql);

}


?>
<div class="container bootdey">
    <div class="col-md-12 bootstrap snippets">
        <div class="panel">
            <div class="panel-body">
                <div class="mar-top clearfix">
                    <form action="" method="post">
                        <label><h4>Jste prihlasen jako: <?php echo $_SESSION['NAME']; ?> </p></h4></label>
                        <textarea class="form-control" name="komentar" rows="3" style="color: black"></textarea>
                        <br>
                        <button type="submit" name="komentuj" class="btn btn-sm btn-primary pull-right" type="submit">
                            Odeslat komentar
                        </button>
                    </form>

                    <?php } ?>
                    <?php
                    ?>
                    <?php


                    $ID = $con->real_escape_string($_GET['id']);
                    $sql3 = "SELECT * FROM forum_komentare WHERE id_prispevku = '$ID' AND id_odpoved = 0 ORDER BY id_komentare DESC";
                    $dotaz2 = mysqli_query($con, $sql3);


                    while ($radek2 = mysqli_fetch_assoc($dotaz2)) {
                        $koment = $radek2['komentar'];
                        $autork = $radek2['uzivatel'];
                        $id_komentare = $radek2['id_komentare'];
                        $datum = $radek2['datum_pridani'];

                        $sql4 = "SELECT * FROM forum_komentare WHERE id_odpoved = '$id_komentare'";
                        $proved = mysqli_query($con, $sql4);


                        echo "

    <div class='media-block'>
    <div class='media-body'>
        <div class='mar-btm'>
          <div class='#'>$autork</div>
        </div>
        <p>$koment</p>
        <div class='date_added'><i class='fa-solid fa-calendar-days'></i> $datum</div>
        <div class='pad-ver'>
          <div class='btn-group'>
            <a class='btn btn-sm btn-default btn-hover-success' href='#'><i class='fa fa-thumbs-up'></i></a>
            <a class='btn btn-sm btn-default btn-hover-danger' href='#'><i class='fa fa-thumbs-down'></i></a>
          </div>
                        <hr>
            <form action='' method='post'>
                <input type='hidden' value='$id_komentare' name='odpoved_id'> 
            <textarea name='odpoved'></textarea>
            <button class='btn btn-sm btn-default btn-hover-primary' type='submit' name='reply'>Odeslat</button>
            </form>
        </div>





    <br>
";

                        while ($radek3 = mysqli_fetch_array($proved)) {
                            $name_reply = $radek3['uzivatel'];
                            $comment_reply = $radek3['komentar'];
                            $id_reply = $radek3['id_odpoved'];
                            $reply_reply = $radek3['id_odpoved'];
                            $id_odpoved = $radek3['id_komentare'];
                            $odpovida_na = $ID;

                            echo "
          <div class='media-block'>
            <div class='media-body'>
              <div class='mar-btm'>
                <a href='#' class='#'>$name_reply <i class='fa-solid fa-angle-right'></i> $autor_name</a>
              </div>
              <p>$comment_reply</p>
              <div class='date_added'><i class='fa-solid fa-calendar-days'></i> $datum</div>
              <div class='pad-ver'>
                <div class='btn-group'>
                <form action='' method='post'>
                    <input type='hidden' value='$id_komentare' name='odpoved_id'> 
                    <input type='hidden' value='$id_odpoved' name='odpoved_odpoved_id'>
                  <textarea name='odpoved'></textarea>
                  <button class='btn btn-sm btn-default btn-hover-primary' type='submit' name='reply'>Odeslat</button>
                    </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
                </div>
            </div>
        </div>
    </div>




";
                        }
                    }

                    ?>


</body>
</html>