<?php
session_start();
$host = "localhost";
$username = "root";
$pass = "";
$db = "eshopfd";
$errors = array();
$conn = mysqli_connect($host, $username, $pass, $db);

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


<head xmlns="http://www.w3.org/1999/html">
    <meta charset="UTF-8">
    <title>WIP</title>
    <link rel="stylesheet" href="../css/design.css">
    <link rel="stylesheet" href="../css/forms.css">
    <link rel="stylesheet" href="../css/bootstrap-grid.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/design.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../images/web_logo.png" type="image/x-icon">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css'>
    <script src="../js/bootstrap.js"></script>
    <link rel="stylesheet" href="../css/produkty.css">
    <script src="../js/bootstrap.js"></script>
    <link rel="stylesheet" href="css/hamburger_menu.css">
    <script src="https://kit.fontawesome.com/4ab6940ba1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/slideshow.css">
    <link rel="stylesheet" href="../css/komentare.css">
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
        <a class="navbar-brand mx-lg-5" href="main.php">CBD Forum</a>
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
                    echo "<a class='nav-link' href='blog_admin_sekce/blog_admin.php'><i class='fa fa-user'></i> Admin</a>";
                } else {
                    echo'<a class="nav-link"><i class="fa fa-user"></i> '. $_SESSION['NAME'] .'</a>';
                }
                if (!isset($_SESSION['NAME'])) {
                    echo "<a class='nav-link' href='../login.php><i class='fa fa-user'></i> Přihlašte se</a>";
                }

                ?>
            <li class="nav-item">
                <a class='nav-link' href='../index.php'><i class='fa fa-reply-all'></i> Logout</a>
            </li>

            </li>
        </ul>

    </div>
</nav>


<?php
$select_banner = mysqli_query($conn, "SELECT * FROM bannery ORDER BY id_banneru DESC LIMIT 3");
$select_products = mysqli_query($conn, "SELECT * FROM produkty ORDER BY id_produkt DESC");
if(mysqli_num_rows($select_banner)>0){
    while($fetch_banner = mysqli_fetch_assoc($select_banner)){
        $fetch_product = mysqli_fetch_assoc($select_products);
        $id_banner = $fetch_banner['id_banneru'];
        $id_produkt = $fetch_product['id_produkt'];
        echo"
<div class='slideshow-container'>

    <div class='mySlides'>
        <a href='produkt.php?id=$id_produkt'> "?> <img class="slider-image" src="images/<?php echo $fetch_banner['obrazek']; ?>" alt=""></a>
        <a class='prev' onclick='plusSlides(-1)'>&#10094;</a>
        <a class='next' onclick='plusSlides(1)'>&#10095;</a>
        </div>

        <?php
    }
    ?>

    </div>
    <br>


    <?php



}

?>

<section class="products">

    <?php
    $select_products = mysqli_query($conn, "SELECT * FROM produkty ORDER BY id_produkt DESC ");
    if(mysqli_num_rows($select_products) > 0){
    while($fetch_product = mysqli_fetch_assoc($select_products)){
    $id_produkt = $fetch_product['id_produkt'];
    ?>
    <form action="" method="post">
        <div class="section-products">
            <div id='product-1' class='single-product'>

                <div class='part-2'>
                    <?php echo"
                        <a href='produkt.php?id=$id_produkt'> "?> <img class="product-image" src="images/<?php echo $fetch_product['obrazek']; ?>" alt=""></a>
                    <p class="product-name"><?php echo $fetch_product['jmeno_produktu']; ?></p>
                    <div class="product-price-main" ><?php echo $fetch_product['cena']; ?>,-</div>
                    <input  type="hidden" name="jmeno_produkt" value="<?php echo $fetch_product['jmeno_produktu']; ?>">
                    <input type="hidden" name="id_produkt" value="<?php echo $fetch_product['id_produkt']; ?>">
                    <input type="hidden" name="cena" value="<?php echo $fetch_product['cena']; ?>">
                    <input type="hidden" name="obrazek" value="<?php echo $fetch_product['obrazek']; ?>">
                    <input type="submit" class="button-29" value="Přidat do košíku" name="add_to_cart">
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


</script>
</body>


</html>