<?php
session_start();
$host = "localhost";
$username = "root";
$pass = "";
$db = "eshopfd";
$errors = array();
$conn = mysqli_connect($host, $username, $pass, $db);


if(isset($_POST['order_btn'])){

    $jmeno = $_POST['jmeno'];
    $prijmeni = $_POST['prijmeni'];
    $telefon = $_POST['telefon'];
    $email = $_POST['email'];
    $metoda = $_POST['metoda'];
    $adresa = $_POST['adresa'];
    $mesto = $_POST['mesto'];
    $kraj = $_POST['kraj'];
    $zeme = $_POST['zeme'];
    $psc = $_POST['psc'];

    $cart_query = mysqli_query($conn, "SELECT * FROM `kosik`");
    $cena = 0;
    if(mysqli_num_rows($cart_query) > 0){
        while($product_item = mysqli_fetch_assoc($cart_query)){
            $product_name[] = $product_item['jmeno_produktu'] .' ('. $product_item['quantity'] .') ';
            $product_price = $product_item['cena'] * $product_item['quantity'];
            $cena += $product_price;
        };
    };

    $objednane_produkty = implode(', ',$product_name);
    $detail_query = mysqli_query($conn, "INSERT INTO `objednavky`(jmeno, prijmeni, telefon, email, metoda, adresa, mesto, kraj, zeme, psc, objednane_produkty, cena) VALUES('$jmeno','$prijmeni','$telefon','$email','$metoda','$adresa','$mesto','$kraj','$zeme','$psc','$objednane_produkty','$cena')") or die('query failed');
    $drop = mysqli_query($conn, "DELETE FROM kosik");
    if($cart_query && $detail_query){
        echo "
      <div class='order-message-container'>
      <div class='message-container'>
         <h3>thank you for shopping!</h3>
         <div class='order-detail'>
            <span>".$objednane_produkty."</span>
            <span class='total'> Celková cena : ".$cena." ,-  </span>
         </div>
         <div class='customer-details'>
            <p> Jméno : <span>".$jmeno."</span> </p>
            <p> Příjmení : <span>".$prijmeni."</span> </p>
            <p> Telefoní Číslo : <span>".$telefon."</span> </p>
            <p> Email : <span>".$email."</span> </p>
            <p> Adresa : <span> ".$adresa.", ".$mesto.", ".$kraj.", ".$zeme." - ".$psc."</span> </p>
            <p> Metoda platby : <span>".$metoda."</span> </p>
         </div>
            <a href='main.php' ". $drop ." class='btn'>Pokračujte v nákupu</a>
         </div>
      </div>
      ";
    }

}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta jmeno="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
    <meta jmeno="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/web_logo.png" type="image/x-icon">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css'>
    <script src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="css/produkty.css">
    <script src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="css/hamburger_menu.css">
    <script src="https://kit.fontawesome.com/4ab6940ba1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/slideshow.css">
    <link rel="stylesheet" href="css/komentare.css">
    <link rel="stylesheet" href="css/checkout.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-purple " style="background-image: radial-gradient(100% 1000% at 100% 0, #5adaff 0, #5468ff 100%);padding: 15px;">

    <div class="mx-auto order-1 w-50">
        <a class="navbar-brand mx-lg-5" href="main.php" style="font-size: 1.7rem">CBD Eshop</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>

    <div class="navbar-collapse collapse w-75 order-2  dual-collapse2 ">
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
                    echo'<a class="nav-link"><i class="fa fa-user"></i> '. $_SESSION['jmeno'] .'</a>';
                }
                ?>
            <li class="nav-item">
                <a class='nav-link' href='logout.php'><i class='fa fa-reply-all'></i> Logout</a>
            </li>

            </li>
        </ul>

    </div>
</nav>
<div class="container">

    <section class="checkout-form">

        <h1 class="heading">Dokončite vaší objednávku</h1>

        <form action="" method="post">

            <div class="display-order">
                <?php
                $select_cart = mysqli_query($conn, "SELECT * FROM kosik");
                $total = 0;
                $grand_total = 0;
                if(mysqli_num_rows($select_cart) > 0){
                    while($fetch_cart = mysqli_fetch_assoc($select_cart)){
                        $total_price =$fetch_cart['cena'] * $fetch_cart['quantity'];
                        $grand_total = $total += $total_price;
                        ?>
                        <span><?= $fetch_cart['jmeno_produktu']; ?>(<?= $fetch_cart['quantity']; ?>)</span>
                        <?php
                    }
                }else{
                    echo "<div class='display-order'><span>Váš košík je prazdný</span></div>";
                }
                ?>
                <span class="grand-total"> Celková cena : <?= $grand_total; ?>,- </span>
            </div>

            <div class="flex">
                <div class="inputBox">
                    <span>Jméno</span>
                    <input type="text" placeholder="Křestní jméno" name="jmeno" required>
                    <span>Příjmení</span>
                    <input type="text" placeholder="Příjmení" name="prijmeni" required>
                </div>
                <br>
                <div class="inputBox">
                    <span>Telefoní Číslo</span>
                    <input type="number" placeholder="Telefoní číslo" name="telefon" required>
                </div>
                <div class="inputBox">
                    <span>Kontaktní Email</span>
                    <input type="email" placeholder="Emailová adresa" name="email" required>
                </div>
                <div class="inputBox">
                    <span>Platební Metoda</span>
                    <select name="metoda">
                        <option value="Dobirka" selected>Dobírka</option>
                        <option value="Kreditni karta">Kreditní karta</option>
                        <option value="Paypal">Paypal</option>
                    </select>
                </div>
                <div class="inputBox">
                    <span>Fakturační Adresa 1</span>
                    <input type="text" placeholder="Fakturační Adresa 1" name="adresa" required>
                </div>
                <div class="inputBox">
                    <span>Fakturační Adresa 2</span>
                    <input type="text" placeholder="Fakturační Adresa 2" name="" >
                </div>
                <div class="inputBox">
                    <span>Město</span>
                    <input type="text" placeholder="Město" name="mesto" required>
                </div>
                <div class="inputBox">
                    <span>Kraj</span>
                    <select type="text" placeholder="Kraj" name="kraj" required>
                        <option>Praha</option>
                        <option>Středočeský</option>
                        <option>Jihočeský</option>
                        <option>Plzeňský</option>
                        <option>Karlovarský</option>
                        <option>Ústecký</option>
                        <option>Kralovehradecký</option>
                        <option>Liberecký</option>
                        <option>Pardubický</option>
                        <option>Vysočina</option>
                        <option>Olomoucký</option>
                        <option>Zlínský</option>
                        <option>Jihomoravský</option>
                        <option>Moravskoslezký</option>
                    </select>
                </div>
                <div class="inputBox">
                    <span>Země</span>
                    <input type="text" placeholder="Země" name="zeme" required>
                </div>
                <div class="inputBox">
                    <span>PSČ</span>
                    <input type="text" placeholder="PSČ" name="psc" required>
                </div>
            </div>
            <input type="submit" value="Dokončit objednávku" name="order_btn" class="btn">
        </form>

    </section>

</div>
<script src="js/script.js"></script>
</body>
</html>