<?php
session_start();
$host = "localhost";
$username = "root";
$pass = "";
$db = "eshopfd";
$errors = array();
$conn = mysqli_connect($host, $username, $pass, $db);
if (!isset($_SESSION['NAME'])) {
    $_SESSION['msg'] = "Musíte se prvně přihlásit";
    header('location: login.php');
}
if(isset($_POST['add_to_cart'])){
    $product_name = $_POST['jmeno_produkt'];
    $product_price = $_POST['cena'];
    $product_image = $_POST['obrazek'];
    $id_produkt = $_POST['id_produkt'];
    $product_quantity = 1;

    $select_cart = mysqli_query($conn, "SELECT * FROM kosik WHERE jmeno_produktu = '$product_name'");

    if(mysqli_num_rows($select_cart) > 0){
        $message[] = 'product already added to cart';
    }else{
        $insert_product = mysqli_query($conn, "INSERT INTO kosik (id_produkt, jmeno_produktu, cena, obrazek, quantity) VALUES('$id_produkt','$product_name', '$product_price', '$product_image', '$product_quantity')");
        $message[] = 'product added to cart succesfully';
    }

}


?>
<!DOCTYPE html>


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
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css'>
    <script src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="css/produkty.css">
    <script src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="css/hamburger_menu.css">
    <script src="https://kit.fontawesome.com/4ab6940ba1.js" crossorigin="anonymous"></script>
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
        <a class="navbar-brand mx-lg-5" href="main.php">CBD Eshop</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>

    <div class="navbar-collapse collapse w-75  order-2  dual-collapse2">
        <ul class="navbar-nav ml-auto">

            <li class="nav-item">
                <a class="nav-link active" href='main.php'>Domů</a>

            </li>

            <li class='nav-item'>
                <a class='nav-link active' href='CBD%20Oleje%20&%20Kapsle.php'>CBD Oleje & Kapsle</a>
            </li>

            <li class='nav-item'>
                <a class='nav-link active' href='CBD%20kvety.php'>CBD Květy</a>
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

    <div class="navbar-collapse collapse w-25  order-3 dual-collapse2" style="position: sticky">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="cart.php"><i class="fa fa-cart-shopping"></i> Košík</a>
            </li>
            <li style='color: white' class="nav-item">
                <?php

                if ($_SESSION['ROLE'] == 'admin') {
                    echo "<a class='nav-link' href='admin_sekce/admin.php'><i class='fa fa-user'></i> Admin</a>";
                } else {
                    echo'<a class="nav-link"><i class="fa fa-user"></i> '. $_SESSION['NAME'] .'</a>';
                }
                ?>
            <li class="nav-item">
                <a class='nav-link' href='logout.php'><i class='fa fa-reply-all'></i> Logout</a>
            </li>

            </li>
        </ul>

    </div>
</nav>

<button id="hamburger-menu">
    <nav id="sidebar-menu">
        <h3>Menu</h3>
        <ul>
            <?php
            echo "<li><a href='Main.php'>Domů</a></li>";
            $podkategorie = "SELECT * FROM kategorie ORDER BY Id_kategorie ASC";
            $neco = mysqli_query($conn, $podkategorie);
            while ($row = mysqli_fetch_assoc($neco)) {
                $nazev = $row['nazev'];

                ?>
                <?php echo "<li><a class='nav-link' href='$nazev.php'> $nazev</a></li>"; ?>
            <?php } ?>
            <?php
            if ($_SESSION['ROLE'] == 'admin') {
                echo "<li><a href='admin_sekce/admin.php'>Admin panel</a></li></ul>";
            }
            ?>
        </ul>
    </nav>
</button>


<?php

?>

<section class="products">



    <?php
    $select_products = mysqli_query($conn, "SELECT * FROM produkty WHERE Id_kategorie = 28 ORDER BY id_produkt ASC");
    if(mysqli_num_rows($select_products) > 0){
    while($fetch_product = mysqli_fetch_assoc($select_products)){
    ?>
    <form action="" method="post">
        <div class="section-products">
            <div id='product-1' class='single-product'>

                <div class='part-2'>
                    <a href='produkt.php?id=$id_produkt'><img class="product-image" src="images/<?php echo $fetch_product['obrazek']; ?>" alt=""></a>
                    <p class="product-name"><?php echo $fetch_product['jmeno_produktu']; ?></p>
                    <div class="product-price-main" ><?php echo $fetch_product['cena']; ?>,-</div>
                    <input  type="hidden" name="jmeno_produkt" value="<?php echo $fetch_product['jmeno_produktu']; ?>">
                    <input type="hidden" name="id_produkt" value="<?php echo $fetch_product['id_produkt']; ?>">
                    <input type="hidden" name="cena" value="<?php echo $fetch_product['cena']; ?>">
                    <input type="hidden" name="obrazek" value="<?php echo $fetch_product['obrazek']; ?>">
                    <input type="submit" class="button-29" value="add to cart" name="add_to_cart">
                </div>
    </form>
</section>
    </div>
    </div>

    </section>


<?php
}
}
?>


</body>


</html>