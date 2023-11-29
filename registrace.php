<?php
session_start();
$host = "localhost";
$username = "root";
$pass = "";
$db = "eshopfd";
$errors = array();


$con = mysqli_connect($host,$username,$pass,$db);

if (!$con || $con->connect_error) {
    die("Neco se posralo!". $con->connect_error);
}
// Registrace uzivatelu

  if (isset($_POST['Registrovat'])) {
      $email = $con->real_escape_string($_POST['email']);
      $password = $con->real_escape_string($_POST['password1']);
      $password2 = $con->real_escape_string($_POST['password2']);
      $jmeno = $con->real_escape_string($_POST['username']);
      $role = $con->real_escape_string("uzivatel");


      if ($password != $password2) {
          array_push($errors,"Hesla nejsou stejná");
      }
      if (empty($username) || empty($email) || empty($password)) {
          array_push($errors,"Vyplňte prosím všechny prázdná pole");
      }


      $control = "SELECT * FROM uzivatele WHERE jmeno = '$jmeno' OR email= '$email' LIMIT 1 ";
      $dotaz = mysqli_query($con, $control);
      $uzivatel = mysqli_fetch_assoc($dotaz);

      if ($uzivatel) {

          if ($uzivatel['jmeno'] === $jmeno || $uzivatel['email'] === $email) {
              array_push($errors,"Jmeno nebo email není již dostupný");

          }
      }


      if (count($errors) == 0) {
          $password = md5($password);

          $query = "INSERT INTO uzivatele (jmeno, password, email, role, telefon, adresa, mesto, stat, zip_code) VALUES ('$jmeno', '$password', '$email', '$role','','','','','')";
          mysqli_query($con,$query);
          $_SESSION['ROLE'] = $role;
          $_SESSION['NAME'] = $jmeno;
          $_SESSION['EMAIL'] = $email;
          $_SESSION['USERNAME'] = $username;
          header('Location:main.php');

      }
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Registruj se</title>
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
    <link rel="stylesheet" href="css/style.css">
    <link rel = "icon" href ="images/web_logo.png" type = "image/x-icon">
    <style>

    p {
        color: black;
        text-align:center;

    }
    </style>
</head>

<body>
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
            <input type="text" id="login" class="fadeIn second" name="username" placeholder="Přihlašovací Jméno">
            <input type="text" id="login" class="fadeIn second" name="email" placeholder="Emailová Adresa">
            <input type="password" id="password" class="fadeIn second" name="password1" placeholder="Heslo">
            <input type="password" id="password" class="fadeIn third" name="password2" placeholder="Potvrzení Hesla">
            <input type="submit" class="fadeIn fourth" name="Registrovat" value="Registrovat">
        </form>

        <div id="formFooter">
            <p>Máte vytvořený účet? <a class="underlineHover" href="login.php" style="text-decoration: none">Klinite zde a přihlašte se</a></p>
        </div>

    </div>

</body>

</html>