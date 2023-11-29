<?php

include "logika.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
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
    <link rel="stylesheet" href="../css/blog_edit.css">
<style>
    a{
        color:black;
        font-family: 'Quicksand', sans-serif;
    }
</style>
</head>
<div>

    <nav class="navbar navbar-expand-lg navbar-dark bg-purple " style="background-image: radial-gradient(100% 1000% at 100% 0, #5adaff 0, #5468ff 100%);">

        <div class="mx-auto order-1 w-100">
            <a class="navbar-brand mx-lg-5" href="../index.php">CBD Projekt</a>
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
                    <a class='nav-link active' href='../Forum/forum_main.php'>Fórum</a>
                </li>
            </ul>
        </div>

        <div class="navbar-collapse collapse w-25  order-3 dual-collapse2" style="position: sticky">
            <ul class="navbar-nav ml-auto">

                <li style='color: white' class="nav-item">
                    <?php
                    if ($_SESSION['ROLE'] == 'admin') {
                        echo "<a class='nav-link' href='admin/blog_admin.php'><i class='fa fa-user'></i> Admin</a>";
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

<?php


if(isset($_SESSION['views']))
    $_SESSION['views'] = $_SESSION['views']+1;
else
    $_SESSION['views']=1;

echo "<div class='blog_views'>";echo $_SESSION['views'] . " zhlednutí";

?>
</div>

<div class="container mt-5">

    <?php foreach($query as $q){?>
    <div class="tagy">
        Klíčová slova: <?php echo $q['tags'];?>
    </div>
        <div class="navigace">
            <a href="../index.php"><i class="fa-solid fa-house"></i></a><i class="fa-solid fa-angle-right"></i><a href="index.php"> Blog </a><i class="fa-solid fa-angle-right"></i> <?php echo $q['title'];?>
        </div>
        <br>
        <div class="text-center">
            <br>
            <img class="blog_background_image_view" src="../images/<?php echo $q['obrazek']; ?>"
                 alt="">
            <h1 class="blog_nadpis"><?php echo $q['title'];?></h1>
        </div>
        <p class="mt-5 border-left border-dark pl-3"><?php echo $q['content'];?></p>
    <?php } ?>

    <a href="index.php" class="btn btn-outline-dark my-3">Zpět na hlavní stránku</a>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>