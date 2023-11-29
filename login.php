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

 if (isset($_POST['login'])) {
     $error = "";

     $username = $con->real_escape_string($_POST['username']);
     $password = $con->real_escape_string(md5($_POST['password']));


     if (!empty($username) || !empty($password)) {
         $query = "SELECT * FROM uzivatele WHERE jmeno = '$username' AND password = '$password'";
         $result = $con->query($query);
         if ($result->num_rows > 0) {
             $row = $result->fetch_assoc();
             $_SESSION['Id_zakaznika'] = $row['Id_zakaznika'];
             $_SESSION['ROLE'] = $row['role'];
             $_SESSION['NAME'] = $row['jmeno'];
             header("Location:index.php");
             die();
         } else {
             $errorMsg = "Zadal jste spatne uzivatelske udaje";
         }
     }

 }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/loginform.css">
    <link rel="stylesheet" href="css/forms.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel = "icon" href ="images/web_logo.png" type = "image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <style>

    p {
        color: black;
    }
    img{
    height: 100px;
        width: 100px;
    }

    </style>
</head>


<body>

    <?php if (isset($errorMsg)) { ?>
    <div class="alert alert-danger alert-dismissible">
        <?php echo $errorMsg; ?>
    </div>
    <?php } ?>

    <div id="particles-js"></div>

    <!-- Import the Particles.js library -->
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

    <!-- Import your custom JavaScript file -->
    <script src="js/custom1.js"></script>


    <div class="wrapper fadeInDown">
        <div id="formContent">

            <div class="fadeIn first">
                <img style="width: 100px" src="images/usericon.png" id="icon" alt="User Icon" />
            </div>

            <form action="" method="post">
                <input type="text" id="login" class="fadeIn second" name="username" placeholder="Jméno">
                <input type="password" id="password" class="fadeIn third" name="password" placeholder=Heslo>
                <input type="submit" class="fadeIn fourth" value="Přihlaš se" name="login">
            </form>

            <div id="formFooter">
                <p>Nemáte vytvořený účet? <a class="underlineHover" href="registrace.php" style="text-decoration: none">Kliknite zde a zaregistrujte se</a></p>
            </div>

        </div>
    </div>

</body>