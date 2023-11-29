<?php
session_start();
// Using mysqli extension

// Retrieve the search term
$search = $_POST['search'];

// Connect to the database
$conn = new mysqli("localhost", "root", "", "eshopfd");

// Query the database
$query = "SELECT * FROM blog_prispevek WHERE title LIKE '%$search%' OR tags LIKE '%$search%'";
$result = mysqli_query($conn, $query);

// Display the search results


// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<body lang="en">
<head>
    <meta charset="UTF-8">
    <title>WIP</title>
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
            color: black;
            font-family: 'Quicksand', sans-serif;
        }

    </style>
</head>




<nav class="navbar navbar-expand-lg navbar-dark bg-purple " style="background-image: radial-gradient(100% 1000% at 100% 0, #5adaff 0, #5468ff 100%);">

    <div class="mx-auto order-1 w-100">
        <a class="navbar-brand mx-lg-5" href="../index.php"><img class="logo" src="../images/Logo.png"> </a>
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

<div class="navigace">
    <a href="../index.php"><i class="fa-solid fa-house"></i></a> <i class="fa-solid fa-angle-right"></i><a href="index.php"> Blog</a> <i class="fa-solid fa-angle-right"></i>         <?php
    echo "Právě vyhledáváte: $search";
    ?>
</div>


<div class="container mt-5">

    <form method="POST" action="search.php">
        <div class="wrap">
            <div class="search">
                <input type="text" name="search" class="searchTerm" placeholder="Co hledáte?">
                <button type="submit" class="searchButton">
                    <i class="fa fa-search"></i>
                </button>

            </div>
        </div>
    </form>
    <br>
    <?php


    ?>
    <!-- Display any info -->
    <?php if(isset($_REQUEST['info'])){ ?>
        <?php if($_REQUEST['info'] == "added"){?>
            <div class="alert alert-success" role="alert">
                Připěvěk byl úspěšně přidán
            </div>
        <?php }?>
    <?php } ?>

    <div class="row">
        <?php while ($row = mysqli_fetch_assoc($result)) {?>
        <div class="col-12 col-lg-4 d-flex justify-content-center">

            <div class="clanek-main"><a href="view.php?id=<?php echo $row['id']?>"
                <div class='thumbnail'>
                    <img class="obrazek" src="../images/<?php echo $row['obrazek']; ?>"
                         alt=""></a>
                    <div class="bg-titul"><div class="title"><?php echo $row['title'];?>
                        </div>
                        <div class="view_main">‎ </div>
                    </div>

                    </figure>
                    <!--<div class="card-body">
                        <div class="title"><?php echo $row['title'];?></div>
                        <div class="text"><?php //echo substr($q['content'], 0, 50);?>...</div>
                    </div> -->
                </div>
            </div>
            <?php }?>
        </div>

    </div>

</div>
</body>
</html>

