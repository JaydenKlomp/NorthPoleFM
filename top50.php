<?php include("inc/header.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Jayden" content="North Pole FM">
  <title>Top 50 / North Pole FM</title>
</head>
<body>
<div class="welcomeheader">
    <div class="welcome">Top 50</div>
</div>

<div class="playerContainer">

    <?php

    $sql = "SELECT * FROM moststreamed";


    $result = $conn->query($sql);

    echo "<table>";
    echo "<tr>";
    echo "<th>Title</th>";
    echo "<th>Artist</th>";
    echo "<th>Year</th>";
    echo "<th>Popularity</th>";
    echo "</tr>";

    $rows = 0;
    while($row = mysqli_fetch_array($result)) {
        $rows++;
    echo "</tr>";
    echo "<td>" . $row['title'] . "</td>";
    echo "<td>" . $row['artist'] . "</td>";
    echo "<td>" . $row['year'] . "</td>";
    echo "<td>" . $row['popularity'] . "</td>";
    echo "</tr>";
    }
    echo "</table>";
    
    mysqli_close($conn);
    ?>
</div>

<style>
    .playerContainer{
        text-align: center;
        display: flex;
        justify-content: center;
        transform: translate(0px, 5vh);
        margin-bottom: 20vh;
    }
    th{
        text-align: center; 
    }
</style>
<div class="end">Top 50</div>
<div id="bg" style="background-image:url(./media/img/background.avif);" class="bg"></div>
</body>
</html>

<?php include("inc/footer.php");?>