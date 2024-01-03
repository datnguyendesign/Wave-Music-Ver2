<?php
require_once "connection.php";

$sql = "SELECT * FROM songs LIMIT 6";
$result_songs = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wave - Artists</title>
    <script src="https://kit.fontawesome.com/4f40e8708a.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/artists.css">
    <link rel="stylesheet" href="assets/css/track-play.css">

    <!-- Link swiper.js -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

</head>

<body>

    <?php include_once 'sidebar.php' ?>

    <main id="main-content">
        <!-- Header -->
        <?php include_once 'header.php' ?>

        <!-- Hero section -->
        <section class="hero row">
            <h1 class="title">Artists</h1>

            <div class="box col-6">
                <h1>harry styles</h1>
                <figure><img src="images/282562961_560018528829158_205099524906925756_n.jpg"></figure>
            </div>
            <div class="box col-6">
                <h1>taylor swift</h1>
                <figure><img src="images/taylor-swift.jpg"></figure>
            </div>
            <div class="box col-6">
                <h1>ed sheeran</h1>
                <figure><img src="images/ed sheeran.png"></figure>
            </div>
            <div class="box col-6">
                <h1>blackpink</h1>
                <figure><img src="images/blackpink_2.jpg"></figure>
            </div>
        </section>

        <!-- Discography -->
        <section class="discography">
            <h1 class="title">discography</h1>

            <!-- Swiper -->
            <div class="swiper mySwiper_artist">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="images/fine-line-1.png">
                        <div class="desc">
                            <i class="fas fa-play"></i>
                            <div class="sub_desc">
                                <p>Harry’s House</p>

                                <div>
                                    <p class="release">2021</p>
                                    <p class="no_tracks">13 Tracks</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="images/styles-1-super-jumbo-v-21.png">
                        <div class="desc">
                            <i class="fas fa-play"></i>
                            <div class="sub_desc">
                                <p>fine line</p>

                                <div>
                                    <p class="release">2019</p>
                                    <p class="no_tracks">13 Tracks</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="images/harry-styles-as-it-was-new-single-from-harrys-house-release-date-video-stills-and-more-1.png">
                        <div class="desc">
                            <i class="fas fa-play"></i>
                            <div class="sub_desc">
                                <p>harry styles</p>

                                <div>
                                    <p class="release">2021</p>
                                    <p class="no_tracks">13 Tracks</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="images/fine-line-1.png">
                        <div class="desc">
                            <i class="fas fa-play"></i>
                            <div class="sub_desc">
                                <p>Harry’s House</p>

                                <div>
                                    <p class="release">2021</p>
                                    <p class="no_tracks">13 Tracks</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="images/fine-line-1.png">
                        <div class="desc">
                            <i class="fas fa-play"></i>
                            <div class="sub_desc">
                                <p>Harry’s House</p>

                                <div>
                                    <p class="release">2021</p>
                                    <p class="no_tracks">13 Tracks</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next" style="--swiper-navigation-top-offset: 40%;"></div>
                <div class="swiper-button-prev" style="--swiper-navigation-top-offset: 40%;"></div>
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

        <?php require_once "footer.php"; ?>
    </main>

    <?php require_once "play_track.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <!-- Link swiper.js -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <script src="assets/js/main.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper_artist", {
            slidesPerView: 4,
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