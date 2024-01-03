<?php

require_once "connection.php";

$genreID = $_GET["genreID"];
$sql_songs = "SELECT * FROM songs WHERE genreID = $genreID LIMIT 6";
$result_songs = $conn->query($sql_songs);

$sql_genre = "SELECT * FROM genres WHERE genreID = $genreID";
$result_genre = $conn->query($sql_genre);
$row_genre = $result_genre->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $row_genre["genreName"]; ?> Music</title>
    <script src="https://kit.fontawesome.com/4f40e8708a.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/genre_detail.css">
</head>

<body>
    <!-- sidebar -->
    <?php require_once "sidebar.php" ?>

    <header>
        <h2>genre</h2>
        <h1 class="title"><?php echo $row_genre["genreName"]; ?></h1>
    </header>

    <main>
        <!-- Songs -->
        <section class="songs">
            <div class="song-header">
                <h1 class="title"><?php echo $row_genre["genreName"]; ?> Songs</h1>
                <a href="#">Show all</a>
            </div>
            <ul class="song-item">
                <li class="row tb">
                    <div class="song-info col-3">
                        <p>Image</p>
                        <p>Song Name</p>
                    </div>
                    <h1 class="artist col-3">Artist</h1>
                    <h1 class="description col-3">...</h1>
                    <h1 class="duration col-2">Duration</h1>
                    <i class="fa-solid fa-heart col-1" style="visibility: hidden;"></i>
                </li>
                <?php while ($row = mysqli_fetch_assoc($result_songs)) { ?>
                    <li class="row i songs" data-id="<?php echo $row["songID"]; ?>" onclick="playMe()">
                        <div class="song-info col-3">
                            <img src="<?php echo $row["songImage"]; ?>">
                            <p><?php echo $row["songName"]; ?></p>
                        </div>
                        <?php
                        $artistID = $row["artistID"];
                        $sql_artist = "SELECT * FROM artists WHERE artistID = $artistID";
                        $result_artist = $conn->query($sql_artist);
                        $row_artist = $result_artist->fetch_assoc();
                        ?>
                        <h1 class="artist col-3"><?php echo $row_artist["artistName"]; ?></h1>
                        <h1 class="description col-3">Dawn FM</h1>
                        <h1 class="duration col-2">3:20</h1>
                        <i class="fa-solid fa-heart col-1"></i>
                    </li>
                <?php } ?>
            </ul>
        </section>

        <!--  -->
        <section class="playlist">
            <div class="playlist-header">
                <h1><?php echo $row_genre["genreName"]; ?> Mix</h1>
                <a href="#">Show all</a>
            </div>
            <div class="box">
                <a href="#" class="box-item">
                    <img src="images/1581043806043.jpg" alt="">
                    <h1>Pop Mix December</h1>
                    <div class="description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempora sunt quibusdam excepturi aperiam nostrum, quis ipsum voluptate illo laborum iste?</div>
                </a>
                <a href="#" class="box-item">
                    <img src="images/1581043806043.jpg" alt="">
                    <h1>Pop Mix December</h1>
                    <p class="description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempora sunt quibusdam excepturi aperiam nostrum, quis ipsum voluptate illo laborum iste?</p>
                </a>
                <a href="#" class="box-item">
                    <img src="images/1581043806043.jpg" alt="">
                    <h1>Pop Mix December</h1>
                    <p class="description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempora sunt quibusdam excepturi aperiam nostrum, quis ipsum voluptate illo laborum iste?</p>
                </a>
                <a href="#" class="box-item">
                    <img src="images/1581043806043.jpg" alt="">
                    <h1>Pop Mix December</h1>
                    <p class="description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempora sunt quibusdam excepturi aperiam nostrum, quis ipsum voluptate illo laborum iste?</p>
                </a>
            </div>
        </section>
    </main>

    <!-- footer -->
    <?php require_once "footer.php"; ?>

    <?php require_once "play_track.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>