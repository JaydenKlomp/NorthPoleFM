<?php include("inc/header.php"); 
$sql = "SELECT * FROM artist";

$result = $conn->query($sql);


if ($result->num_rows > 0){

  // output data of each row
  echo '<div class="playlistContainer">';
  $rows = 0;
  while($row = $result->fetch_assoc()) {
    $rows++;     
    ?>
  <div class="artist artist<?php echo $rows;?>">
    <p class="title"><?php echo $row["artistName"]; ?></p> 
        <a class="artistSelector" href="player.php?<?php echo "artistId=" , $row['artistId']; echo "&albumId=" , $row['artistId']; ?>">
          <div onmouseover="thumbNailNo(<?php echo $row['artistId']?>)"
              onmouseout="thumbNailYes(<?php echo $row['artistId']?>)"
              class="bgpl bgpl<?php echo $rows ?>">
            <video onmouseover="playSnippet(<?php echo $rows; ?>)" onmouseout="pauseSnippet(<?php echo $rows; ?>)" id="vid<?php echo $rows ?>" loop>
              <source src="media\mp4\<?php echo $rows; ?>.mp4"  type="video/mp4">
            </video>
            <img id="thumbNail<?php echo $row['artistId']?>" src="media\img\<?php echo $row['artistImage'] ?>" alt="">
          </div>
        </a> 
    <p class="description"><?php echo $row["artistDescription"]; ?></p> 
  </div>
 <?php
  }
  echo "</div>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="Jayden" content="North Pole FM">
  <title>Artists / North Pole FM</title>
</head>
<body>
<div id="bg" style="background-image:url(./media/img/background.avif);" class="bg"></div>
</body>
</html>
</div>

<?php include("inc/footer.php"); ?>