<?php
require_once "connection.php";

$sql_genre = "SELECT * FROM genres";
$data = $conn->query($sql_genre);

$sql_artist = "SELECT * FROM artists";
$data_artist = $conn->query($sql_artist);

$sql_songs = "SELECT * FROM songs LIMIT 6";
$data_songs = $conn->query($sql_songs);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wave - Genre</title>

    <script src="https://kit.fontawesome.com/4f40e8708a.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/genre.css">
    <link rel="stylesheet" href="assets/css/track-play.css">

    <!-- Link swiper.js -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
</head>

<body>
    <?php include_once 'sidebar.php' ?>

    <main id="main-content">
        <!-- Header -->
        <?php include_once 'header.php' ?>

        <!-- Hero Section -->
        <section class="genre">
            <h1 class="title">Genre</h1>

            <!-- Swiper -->
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <?php while ($row = mysqli_fetch_assoc($data)) { ?>
                        <div class="swiper-slide">
                            <img src="<?php echo $row["genreImage"]; ?>">
                            <div class="content row">
                                <div class="content-left col">
                                    <h1><?php echo $row["genreName"]; ?></h1>
                                    <div class="play">
                                        <i class="fa-solid fa-circle-play"></i>
                                        <i class="fa-solid fa-shuffle"></i>
                                    </div>
                                </div>

                                <div class="content-right col">
                                    <p><?php echo $row["description"]; ?></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
        </section>

        <!-- Songs -->
        <section class="songs">
            <h1 class="title">Songs</h1>
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
                <?php while ($row = mysqli_fetch_assoc($data_songs)) { ?>
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

        <!-- 4. Artists -->
        <section class="artists">
            <h1 class="title">popular artists <a href="artists.php" style="padding-left: 12px;"><i class="fa-solid fa-arrow-right"></i></a></h1>

            <!-- Swiper -->
            <div class="swiper mySwiper_1">
                <div class="swiper-wrapper">
                    <?php while ($row = mysqli_fetch_assoc($data_artist)) { ?>
                        <div class="swiper-slide">
                            <a href="artist_detail.php?artistID=<?php echo $row["artistID"]; ?>" class="item">
                                <img src="<?php echo $row["artistImage"]; ?>">
                                <h2><?php echo $row["artistName"]; ?></h2>
                            </a>
                        </div>
                    <?php } ?>
                </div>
                <div class="swiper-button-next" style="--swiper-navigation-top-offset: 20%;"></div>
                <div class="swiper-button-prev" style="--swiper-navigation-top-offset: 20%;"></div>
            </div>
        </section>

        <?php require_once "footer.php"; ?>
    </main>

    <?php require_once "play_track.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <!-- Link swiper.js -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <script src="assets/js/main.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
                delay: 5500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });

        var swiper = new Swiper(".mySwiper_1", {
            slidesPerView: 5,
            spaceBetween: 50,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });

        var swiper = new Swiper(".mySwiper_2", {
            slidesPerView: 3,
            spaceBetween: 50,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
</body>

</html>