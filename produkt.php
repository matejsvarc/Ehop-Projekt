<?php
session_start();
error_reporting(0);
$host = "localhost";
$username = "root";
$pass = "";
$db = "eshopfd";
$errors = array();
$conn = mysqli_connect($host, $username, $pass, $db);
$id_produkt2 = $_GET['id'];
if (isset($_POST['add_to_cart'])) {
    $product_name = $_POST['jmeno_produkt'];
    $product_price = $_POST['cena'];
    $product_image = $_POST['obrazek'];
    $id_produkt = $_POST['id_produkt'];
    $product_quantity = 1;

    $select_cart = mysqli_query($conn, "SELECT * FROM kosik WHERE jmeno_produktu = '$product_name'");

    if (mysqli_num_rows($select_cart) > 0) {
        $message[] = 'product already added to cart';
    } else {
        $insert_product = mysqli_query($conn, "INSERT INTO kosik (id_produkt, jmeno_produktu, cena, obrazek, quantity) VALUES('$id_produkt','$product_name', '$product_price', '$product_image', '$product_quantity')");
        $message[] = 'product added to cart succesfully';
    }

}


?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>WIP</title>
        <link rel="stylesheet" href="css/design.css">
        <link rel="stylesheet" href="css/forms.css">
        <link rel="stylesheet" href="css/bootstrap-grid.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
              integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link rel="stylesheet" href="css/design.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="images/web_logo.png" type="image/x-icon">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="css/produkty.css">
        <link rel="stylesheet" href="css/hamburger_menu.css">
        <script src="https://kit.fontawesome.com/4ab6940ba1.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/navigace.css">

    </head>

<body>


    <nav class="navbar navbar-expand-md navbar-dark bg-purple "
         style="background-image: radial-gradient(100% 1000% at 100% 0, #5adaff 0, #5468ff 100%);">

        <div class="mx-auto order-1 w-75 l">
            <a class="navbar-brand mx-lg-5" href="main.php">CBD Eshop</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <div class="navbar-collapse collapse w-100   order-2  dual-collapse2">
            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a class="nav-link active" href='main.php'>Domů</a>

                </li>

                <li class='nav-item'>
                    <a class='nav-link active' href='CBD%20Oleje%20&%20Kapsle.php'>CBD Oleje & Kapsle</a>

                </li>

                <li class='nav-item'>
                    <a class='nav-link active ' href='CBD%20kvety.php'>CBD Květy</a>
                </li>

                <li class='nav-item'>
                    <a class='nav-link active' href='CBD%20Vaporizery.php'>CBD Vaporizéry</a>
                </li>

                <li class='nav-item'>
                    <a class='nav-link active' href='Kratom.php'>Kratom</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link active' href='Doplňky.php'>Doplňky</a>
                </li>

            </ul>
        </div>

        <div class="navbar-collapse collapse w-50  order-3 dual-collapse2" style="position: sticky">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="cart.php"><i class="fa fa-cart-shopping"></i> Košík</a>
                </li>
                <li style='color: white' class="nav-item">
                    <?php

                    if ($_SESSION['ROLE'] == 'admin') {
                        echo "<a class='nav-link' href='admin_sekce/admin.php'><i class='fa fa-user'></i> Admin</a>";
                    } else {
                        echo $_SESSION['NAME'];
                    }
                    ?>
                </li>
                <li class="nav-item">
                    <a class='nav-link' href='logout.php'><i class='fa fa-reply-all'></i> Logout</a>
                </li>

                </li>
            </ul>

        </div>
    </nav>





<section class="products">



<?php
$select_category = mysqli_query($conn, "SELECT nazev from kategorie WHERE id_kategorie = nazev");
if(mysqli_num_rows($select_category)>0){
    while($fetch_category = mysqli_fetch_assoc($select_category)){
        $category_id = $fetch_category['Id_kategorie'];
    }
}
$select_products = mysqli_query($conn, "SELECT * FROM produkty WHERE id_produkt = '$id_produkt2'");
    if (mysqli_num_rows($select_products) > 0){
    while ($fetch_product = mysqli_fetch_assoc($select_products)){
    $product_popis = $fetch_product['popis_produktu'];
    $id_produkt = $fetch_product['id_produkt'];
    ?>
    <div class="navigace">
        <a href="index.php"><i class="fa-solid fa-house"></i></a> <i class="fa-solid fa-angle-right"></i> <a href="main.php"> Všechny produkty </a><i class="fa-solid fa-angle-right"></i> <?php echo $fetch_product['jmeno_produktu']; ?>
    </div>


    <form action="" method="post">
        <div class="section-products-detail">
            <figure class='thumbnail'>
                <img class="product-image" src="images/<?php echo $fetch_product['obrazek']; ?>"
                                           alt=""></a>
            </figure>
            <p class="product-jmeno-detail"><?php echo $fetch_product['jmeno_produktu']; ?></p>
            <div class="product-price"><?php echo $fetch_product['cena']; ?>,-</div>
            <div class="detail-text"><?php echo $product_popis; ?></div>
            <input type="hidden" name="jmeno_produkt" value="<?php echo $fetch_product['jmeno_produktu']; ?>">
            <input type="hidden" name="id_produkt" value="<?php echo $fetch_product['id_produkt']; ?>">
            <input type="hidden" name="cena" value="<?php echo $fetch_product['cena']; ?>">
            <input type="hidden" name="obrazek" value="<?php echo $fetch_product['obrazek']; ?>">
            <input type="submit" class="button-29" value="add to cart" name="add_to_cart"
                   style="position: relative; left:28rem">
        </div>

        </div>
    </form>

    <?php
    if ($_SESSION['ROLE'] == 'admin')
        echo " <a href='admin_sekce/Upravit_popis.php?id=$id_produkt'><button class='product-button-uprav'>Upravit</button></a>"; ?>
</section>
    </div>
    </div>

    </section>


    <?php
}
}

?>
<?php
if (isset($_POST['komentar'])) {
    $id_produkt2 = $conn->real_escape_string($_GET['id']);
    $uzivatel = $_SESSION['NAME'];
    $komentar = $conn->real_escape_string($_POST['komentar']);

    $sql = "INSERT INTO komentare (id_produkt,komentar,uzivatel) VALUES ('$id_produkt2','$komentar','$uzivatel')";
    mysqli_query($conn, $sql);
    header("/EshopProjekt/produkt.php?id=$id_produkt2");

}


?>
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <div class="komentar">
                    <form action="" method="post">
                        <div class="form-group">
                            <label><h2 style="color: white"></h2></label>
                            <label><h4>Jste prihlasen jako: <?php echo $_SESSION['NAME']; ?> </p></h4></label>
                            <textarea class="form-control" name="komentar" rows="3" style="color: black"></textarea>
                        </div>
                        <br>
                        <button type="submit" name="comment" class="btn btn-dark">Odeslat komentar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php
$ID = $conn->real_escape_string($_GET['id']);
$sql3 = "SELECT * FROM komentare WHERE id_produkt = '$ID' ORDER BY id_komentare DESC";

$dotaz2 = mysqli_query($conn, $sql3);


while ($row = mysqli_fetch_assoc($dotaz2)) {
    $comment = $row['komentar'];
    $uzivatel = $row['uzivatel'];
    $datum = $row['datum'];
    $id = $row['id_produkt'];
    $id_komentar = $row['id_komentare'];


    echo "
<div class='container'>
    <div class='row'>
        <div class='col-xl-8'>
            <div class='komentar'>
                <div class='komentar-header'>
             <div class='koment-autor'>
                        <div class='koment-jmeno'><i class='far fa-user'><strong> $uzivatel</strong></i></div>
                    </div>
                    <div class='koment-datum'>
                        <i class='far fa-calendar'> $datum</i>
                    </div>
                </div>
                <div class='koment-text'>
                    <p>$comment</p>
                </div>
                "?>
    <?php
    if ($_SESSION['ROLE'] == 'admin') {
        echo "
              <button class='button-29'><a href='delete_komentar.php?id_komentare=$id_komentar'>Smazat</button></a>
                
                ";
    }?>
    </div>
    </div>
    </div>
    </div>

    <script src="js/script.js"></script>
    </body>
    </html>
    <?php
}
?>