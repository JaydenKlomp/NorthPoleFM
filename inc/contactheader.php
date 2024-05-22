<!DOCTYPE html>
<html lang="en">
<?php include("inc/functions.php") ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Jayden" content="North Pole FM">
    <link rel="stylesheet" href="style/contact.css">
</head>
<body class="noscroll">
<header class="pcHeader">
        <p onclick = "homeClick()" id="play">North Pole FM</p>

    <?php
        $sql = "SELECT * FROM nav";
        $result = $conn->query($sql);
 
        while($row = mysqli_fetch_array($result)) {
        echo "<p><a href='" . $row['navLink'] . "'>" . $row['navName'] . "</a></p>";
        }
        ?>
    </header>