<?php
session_start();

$host = "localhost";
$username = "root";
$pass = "";
$db = "eshopfd";



$con = mysqli_connect($host,$username,$pass,$db);

if (!$con || $con->connect_error) {
    die("Neco se posralo!". $con->connect_error);
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/design.css">
    <link rel="stylesheet" href="css/forms.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="css/design.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/produkty.css">
    <script src="https://kit.fontawesome.com/4ab6940ba1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/rozcestnik.css"
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel = "icon" href ="images/web_logo.png" type = "image/x-icon">
    <link rel="stylesheet" href="css/style.css">

    <title>Main Menu</title>
</head>

<body>
<div id="particles-js"></div>

<!-- Import the Particles.js library -->
<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

<!-- Import your custom JavaScript file -->
<script src="js/custom1.js"></script>
<div class="logo">
    <img src="images/web_logo.png">
</div>



<div class="rozcesti-main">
    <a href="main.php"><img class="index_button" src="menu_images/eshop_button.png"> </a>
    <a href="blog/index.php"><img class="index_button" src="menu_images/blog_button.png"> </a>
    <a href="Forum/forum_main.php"><img class="index_button" src="menu_images/forum_button.png"> </a>>

</div>





    <?php
    if (!isset($_SESSION['NAME'])) {
        echo "<a class='prihlaseni-main' href='login.php'><div class='prihlaseni'> Přihlašte se</a></div>";
    }else{
        echo "<div class='prihlaseni-main'><div class ='prihlaseni'>";echo "Jste přihlášený jako: " . $_SESSION['NAME'] ?> <?php echo "</div></div>";
}
    ?>
<br>
<br>
<div class="logout">
<a href="logout.php">Logout</a>
</div>





</body>
</html>
