<?php
include("inc/uploadheader.php");
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Jayden" content="North Pole FM">
  <title>Uploaded Songs / North Pole FM</title>

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style/upload.css">

</head>

<body>
    <section class="playlist">

        <h3 class="heading">Uploaded song</h3>

        <div class="box-container">

            <?php
                $select_song = $conn->prepare("SELECT * FROM `song`");
                $select_song->execute();
                if($select_song->rowCount() > 0){
                while($fetch_song = $select_song->fetch(PDO::FETCH_ASSOC)){
            ?>
            <div class="box">
                <?php if($fetch_song['album'] != ''){ ?>
                <img src="uploaded_album/<?= $fetch_song['album']; ?>" alt="" class="album">
                <?php }else{ ?>
                <img src="media/img/disc.png" alt="" class="album">
                <?php } ?>
                <div class="name"><?= $fetch_song['name']; ?></div>
                <div class="artist"><?= $fetch_song['artist']; ?></div>
                <div class="flex">
                    <div class="play" data-src="uploaded_music/<?= $fetch_song['music']; ?>"><i
                            class="fas fa-play"></i><span>Play</span></div>
                    <a href="uploaded_music/<?= $fetch_song['music']; ?>" download><i
                            class="fas fa-download"></i><span>Download</span></a>
                </div>
            </div>
            <?php
            }
            }
            ?>
            <div class="box more-btn">
                <a href="upload_music.php" class="btn">Uploaded Music</a>
            </div>

        </div>

    </section>

        <div class="music-player">

            <i class="fas fa-times" id="close"></i>

            <div class="box">
                <img src="" class="album" alt="">
                <div class="name"></div>
                <div class="artist"></div>
                <audio src="" controls class="music"></audio>
            </div>
        </div>

    <!-- custom js file link  -->
    <script src="js/radio.js"></script>
    <div id="bg" style="background-image:url(./media/img/background.avif);" class="bg"></div>
    
    <?php include("inc/footer.php");?>
</body>

</html>