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

if(isset($_POST['update_update_btn'])){
    $id_produkt = $_GET['id_produkt'];
    $update_value = $_POST['update_quantity'];
    $update_quantity_query = mysqli_query($conn, "UPDATE kosik SET quantity = '$update_value' WHERE id_produkt = '$id_produkt'");
    if($update_quantity_query){
        header('location:cart.php');
    };
};
if(isset($_GET['remove'])){
    $remove_id = $_GET['remove'];
    $id_produkt = $_GET['id_produkt'];
    mysqli_query($conn, "DELETE FROM kosik WHERE id_produkt = .$id_produkt . ");
    header('location:cart.php');
};

if(isset($_GET['delete_all'])){
    mysqli_query($conn, "DELETE FROM kosik");
    header('location:cart.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>

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
    <link rel="stylesheet" href="css/slideshow.css">
    <link rel="stylesheet" href="css/komentare.css">
    <link rel="stylesheet" href="css/kosik.css">
    <style>

    </style>
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
<div class="container">

    <section class="shopping-cart">


        <table>

            <thead>
            <th>Náhled</th>
            <th>Jméno produktu</th>
            <th>Počet</th>
            <th>Cena</th>
            <th></th>
            </thead>

            <tbody>

            <?php

            $select_cart = mysqli_query($conn, "SELECT * FROM kosik");
            $grand_total=0;
            if(mysqli_num_rows($select_cart) > 0){
                while($fetch_cart = mysqli_fetch_assoc($select_cart)){
                    $id_produkt = $fetch_cart['id_produkt'];
                    ?>

                    <tr><?php echo"
                        <td><a href='produkt.php?id=$id_produkt'> "?> <img src="images/<?php echo $fetch_cart['obrazek']; ?>" height="100" alt=""></td>
                        <td><?php echo $fetch_cart['jmeno_produktu']; ?></td>

                        <td>
                            <form action="" method="post">
                                <input type="hidden" name="update_quantity_id"  value="<?php echo $fetch_cart['id_produkt']; ?>" >
                                <input type="number" name="update_quantity" min="1"  value="<?php echo $fetch_cart['quantity']; ?>" >
                                <input type="submit" value="Upravit" name="update_update_btn">
                            </form>
                        </td>
                        <td><?php echo $sub_total =$fetch_cart['cena'] * $fetch_cart['quantity']; ?>,-</td>
                        <td><a href="cart.php?remove=<?php echo $fetch_cart['id_produkt']; ?>" onclick="return confirm('remove item from cart?')" class="delete-btn"> <i class="fas fa-trash"></i> Odstranit produkt</a></td>
                    </tr>
                    <?php
                    $grand_total += $sub_total;
                };
            };
            ?>
            <tr class="table-bottom">
                <td><a href="main.php" class="option-btn" style="margin-top: 0;">Pokračovat v nákupu</a></td>
                <td colspan="2">Celková cena</td>
                <td><?php echo $grand_total; ?>,-</td>
                <td><a href="cart.php?delete_all" onclick="return confirm('are you sure you want to delete all?');" class="delete-btn"> <i class="fas fa-trash"></i> Odebrat všechny produkty </a></td>
            </tr>

            </tbody>

        </table>
            <div class="checkout-button">
            <a href="checkout.php" class="button-29 <?= ($grand_total > 1)?'':'disabled'; ?>">Dokončit objednávku</a>
            </div>
    </section>

</div>

<script src="js/script.js"></script>

</body>
</html>