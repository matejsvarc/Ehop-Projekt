<?php
session_start();
// Don't display server errors

// Initialize a database connection
$conn = mysqli_connect("localhost", "root", "", "eshopfd");

// Destroy if not possible to create a connection
if(!$conn){
    echo "<h3 class='container bg-dark p-3 text-center text-warning rounded-lg mt-5'>Not able to establish Database Connection<h3>";
}
// Get data to display on index page
$sql = "SELECT * FROM blog_prispevek ORDER BY id DESC";
$query = mysqli_query($conn, $sql);

// Create a new post
if(isset($_POST['new_post'])) {
    $title = $conn->real_escape_string($_POST['title']);
    $content = $conn->real_escape_string($_POST['content']);
    $tags = $conn->real_escape_string($_POST['tags']);

    if (isset($_FILES['obrazek'])) {

        $img_name = $_FILES['obrazek']['name'];
        $tmp_name = $_FILES['obrazek']['tmp_name'];
        $error = $_FILES['obrazek']['error'];


        $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
        $img_ex_lc = strtolower($img_ex);

        $allowed_exs = array("jpg", "jpeg", "png");

        if (in_array($img_ex_lc, $allowed_exs)) {
            $new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;
            $img_upload_path = '../../images/' . $new_img_name;
            move_uploaded_file($tmp_name, $img_upload_path);

            $sql = "INSERT INTO blog_prispevek(tags, title, content, obrazek) VALUES('$tags','$title', '$content' ,'$new_img_name')";
            mysqli_query($conn, $sql);

            header("Location: ../index.php?info=added");
        }
    }
}
// Get post data based on id
if(isset($_REQUEST['id'])){
    $id = $_REQUEST['id'];
    $sql = "SELECT * FROM blog_prispevek WHERE id = '$id'";
    $query = mysqli_query($conn, $sql);
}

// Delete a post
if(isset($_REQUEST['delete'])){
    $id = $_REQUEST['id'];

    $sql = "DELETE FROM blog_prispevek WHERE id = '$id'";
    mysqli_query($conn, $sql);

    header("Location: ../index.php");
    exit();
}

// Update a post
if(isset($_REQUEST['update'])){
    $id = $_REQUEST['id'];
    $title = $_REQUEST['title'];
    $content = $_REQUEST['content'];

    $sql = "UPDATE blog_prispevek SET title = '$title', content = '$content' WHERE id = '$id'";
    mysqli_query($conn, $sql);

    header("Location: admin/blog_edit.php");
    exit();
}

?>