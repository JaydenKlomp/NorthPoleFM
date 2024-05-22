<?php include("inc/header.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Jayden" content="North Pole FM">
  <title>Player / North Pole FM</title>
</head>
<body>
<div class="asDiv">

<?php
$artistId = mysqli_real_escape_string($conn, $_GET['artistId']);
$sql = "SELECT * FROM album WHERE album.artistId = $artistId";

$result = $conn->query($sql);

while($row = mysqli_fetch_array($result)) {
echo "<div class='albumSelector as' style='background-image: url(media/img/" . $row['albumImage'] . ")'>
    <a class='albumA' href='player.php?artistId=" . $row['artistId'] . "&albumId=" . $row['albumId'] . "'></a>
    </div>";
}
?>
</div>

<div class="playerContainer">
<iframe src="https://www.youtube.com/embed/" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    <?php
    $albumId = mysqli_real_escape_string($conn, $_GET['albumId']);

    $sql = "SELECT * FROM songs
    INNER JOIN album ON songs.albumId = album.albumId
    INNER JOIN artist ON album.artistId = artist.artistId
    WHERE album.albumId = '$albumId'";

    $result = $conn->query($sql);

    echo "<table>";
    echo "<tr>";
    echo "<th>Album Name</th>";
    echo "<th>Top 3 Songs</th>";
    echo "</tr>";

    $rows = 0;
    while($row = mysqli_fetch_array($result)) {
        $rows++;
    echo "<tr class='js-getURL". $rows ."' homo='". $row['songURL'] ."' onclick= 'changeVideo(". $rows .")'>";
    echo "<td>" . $row['albumTitle'] . "</td>";
    echo "<td>" . $row['songTitle'] . "</td>";
    echo "</tr>";
    }
    echo "</table>";
    
    mysqli_close($conn);
    ?>
</div>




<style>
    body{
        display: flex;
        justify-content: stretch;
        overflow: hidden;
    }

    @media only screen and (max-width: 600px) {
        body{
            display: block;
            overflow: hidden;
        }
    }

    .bg{
        animation: unset;
    }
</style>

<div id="bg" style="background-image:url(./media/img/background.avif);" class="bg"></div>
</body>
</html>

<?php include("inc/footer.php");?>