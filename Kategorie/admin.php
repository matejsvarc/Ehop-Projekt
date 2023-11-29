<?php

// Udaje k databazi
session_start();
$host = "localhost";
$username = "root";
$pass = "";
$db = "eshopfd";
$errors = array();
// Pripojeni k databazi

$con = mysqli_connect($host,$username,$pass,$db);

// Kontrola pripojeni
if (!$con || $con->connect_error) {
    die("Neco se posralo!". $con->connect_error);
}

if(isset($_POST['vytvorit']) && $_POST['kontrola'] == 1) { 
   
  
    
        $nazev = $con->real_escape_string($_POST['kategorie']);
        if (empty($nazev) || $nazev === "") {
            echo "Hodnota nesmi byt prazdna!";
        }
    
        $query = "INSERT INTO kategorie (nazev) VALUES ('$nazev')"; 
        mysqli_query($con, $query) or die(mysqli_error());
        header('Location:admin.php'); 
        

    }
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Přidej kategorii</title>
</head>

<body>
    <form method="post" action="">
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon">
                    <i class="fa fa-lock"></i>
                </span>
                <input type="hidden" name="kontrola" value="1">
                <input type="text" class="form-control" name="kategorie" placeholder="Pridani kategorie"
                    required="required">
            </div>
        </div>
        <div class="form-group">
            <button type="submit" name="vytvorit" class="btn btn-primary btn-block btn-lg"
                style="margin-left: 80px">pridat</button>
        </div>
    </form>
</body>

</html>