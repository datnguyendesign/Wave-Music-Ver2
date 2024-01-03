<?php 
require_once "connection.php";

$artistID = $_GET["artistID"];
$sql_songs = "SELECT * FROM songs WHERE artistID = $artistID";
$result_songs = $conn->query($sql_songs);

$sql_artist = "SELECT * FROM artists WHERE artistID = $artistID";
$result_artist = $conn->query($sql_artist);
$row_artist = $result_artist->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $row_artist["artistName"]; ?></title>
    <script src="https://kit.fontawesome.com/4f40e8708a.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/artist_detail.css">
</head>

<body>
    <!-- sidebar -->
    <?php require_once "sidebar.php"; ?>

    <header>
        <h2>artist</h2>
        <h1><?php echo $row_artist["artistName"]; ?></h1>
        <p><span>1.231.231</span> monthly listeners</p>
    </header>

    <main>
        <section class="artist">
            <div class="action">
                <a href="#"><i class="fa-solid fa-circle-play"></i></a>
                <a href="#"><i class="fa-solid fa-shuffle"></i></a>
                <button class="follow">Follow</button>
            </div>

            <!-- Songs -->
            <div class="songs">
                <h1 class="title">Songs</h1>
                <ul class="song-item">
                    <li class="row tb">
                        <div class="song-info col-3">
                            <p>Image</p>
                            <p>Song Name</p>
                        </div>
                        <h1 class="description col-3">...</h1>
                        <h1 class="duration col-2">Duration</h1>
                        <i class="fa-solid fa-heart col-1" style="visibility: hidden;"></i>
                    </li>
                    <?php while($row = mysqli_fetch_assoc($result_songs)) { ?>
                    <li class="row i songs" data-id="<?php echo $row["songID"]; ?>" onclick="playMe()">
                        <div class="song-info col-3">
                            <img src="<?php echo $row["songImage"]; ?>">
                            <p><?php echo $row["songName"]; ?></p>
                        </div>
                        <h1 class="description col-3">Dawn FM</h1>
                        <h1 class="duration col-2">3:20</h1>
                        <i class="fa-solid fa-heart col-1"></i>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </section>

        <section class="about">
            <div class="title">About</div>

            <div class="about-content">
                <img src="<?php echo $row_artist["artistImage"]; ?>" alt="">
                <div class="description">
                    <div class="name">
                        <h1><?php echo $row_artist["artistName"]; ?></h1>
                    </div>
                    <div class="debut-year">
                        <h1>Debut Year: <?php echo $row_artist["debut_year"]; ?></h1>
                    </div>
                    <div class="country">
                        <h1>Born in: <?php echo $row_artist["country"]; ?></h1>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- footer -->
    <?php require_once "footer.php"; ?>

    <?php require_once "play_track.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>