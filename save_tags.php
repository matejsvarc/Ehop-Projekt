<?php
$tags = $_POST['tags'];
$tag_array = explode(',', $tags); // rozdělení na jednotlivé tagy podle čárky

$db = new mysqli('localhost', 'root', '', 'eshopfd');
foreach ($tag_array as $tag) {
    $tag = trim($tag); // odstranění případných mezer kolem tagu
    $sql = "INSERT INTO blog_prispevek (tags) VALUES ('$tag')";
    $db->query($sql);
}

?>