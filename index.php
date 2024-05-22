<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Jayden" content="North Pole FM">
    <title>Home / North Pole FM</title>
</head>
<body>
<?php include("inc/header.php");?>
<div class="welcomeheader">
<div class="welcome">Welcome to North Pole FM</div>
</div>

<div id="menu">
    <div id="menu-items">
        <!--All menu texts-->
        <div class="menu-item"><a href="artists.php">Artists</a></div>
        <div class="menu-item"><a href="upload_music.php">Upload</a></div>
        <div class="menu-item"><a href="top50.php">Top 50</a></div>
        <div class="menu-item"><a href="contact.php">Contact</a></div>
        <div class="menu-item"><a href="login.php">Login</a></div>
    </div>
    <!--Background divs-->
    <div id="background-image"></div>
</div>

<style>
    body{
        overflow: hidden;
    }
    header a{
        display: none;
    }
    .pcHeader{
        justify-content: center;
    }
</style>
<!--Linking the javascript-->
<script src="js/background.js"></script>
<?php include("inc/footer.php");?>
</body>
</html>
