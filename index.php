<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RP Ngoma College</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <a href="index.php?page=home">Home</a>
        <a href="index.php?page=gallery">Gallery</a>
        <a href="index.php?page=about">About Us</a>
    </nav>
    
    <div class="content">
        <?php
        if ($page == "home") {
            include("home.php");
        } elseif ($page == "gallery") {
            include("gallery.php");
        } elseif ($page == "about") {
            include("about.php");
        } else {
            echo "<h2>Page not found!</h2>";
        }
        ?>
    </div>
</body>
</html>
