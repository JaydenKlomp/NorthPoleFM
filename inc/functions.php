<?php


    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "radiogaga";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

function getArtists()
{
    $connection = dbconnect();

    $sql = "SELECT * FROM artist";

    $resource = $connection->query($sql) or die($connection->error);

    $artist = $resource->fetch_all(MYSQLI_ASSOC);

    return $artist;
}

function displayArtist()
{

}

?>
