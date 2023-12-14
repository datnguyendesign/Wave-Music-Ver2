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
            <div class="swiper mySwiper">
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
                <li class="row">
                    <div class="song-info col-3">
                        <img src="images/The Weeknd - Dawn FM.jpg">
                        <p>Out of Time</p>
                    </div>
                    <h1 class="artist col-3">The Weeknd</h1>
                    <h1 class="description col-3">Dawn FM</h1>
                    <h1 class="duration col-2">3:20</h1>
                    <i class="fa-solid fa-heart col-1"></i>
                </li>
                <li class="row">
                    <div class="song-info col-3">
                        <img src="images/Charli.jpg">
                        <p>White Mercerdes</p>
                    </div>
                    <h1 class="artist col-3">Charli XCX</h1>
                    <h1 class="description col-3">Charli</h1>
                    <h1 class="duration col-2">3:20</h1>
                    <i class="fa-regular fa-heart col-1"></i>
                </li>
                <li class="row">
                    <div class="song-info col-3">
                        <img src="images/The Weeknd - After Hours (2 LP) (Explicit) - Vinyl.jpg">
                        <p>Blinding Lights</p>
                    </div>
                    <h1 class="artist col-3">The Weeknd</h1>
                    <h1 class="description col-3">After Hours</h1>
                    <h1 class="duration col-2">3:20</h1>
                    <i class="fa-regular fa-heart col-1"></i>
                </li>
                <li class="row">
                    <div class="song-info col-3">
                        <img src="images/Yerin Baek tellusaboutyourself.jpg">
                        <p>Love Game</p>
                    </div>
                    <h1 class="artist col-3">Yerin Baek</h1>
                    <h1 class="description col-3">tellusaboutyourself</h1>
                    <h1 class="duration col-2">3:20</h1>
                    <i class="fa-regular fa-heart col-1"></i>
                </li>
                <li class="row">
                    <div class="song-info col-3">
                        <img src="images/The Midnight - Endless Summer (2016).jpg">
                        <p>Sunset</p>
                    </div>
                    <h1 class="artist col-3">The Midnight</h1>
                    <h1 class="description col-3">Endless Summer</h1>
                    <h1 class="duration col-2">3:20</h1>
                    <i class="fa-regular fa-heart col-1"></i>
                </li>
                <li class="row">
                    <div class="song-info col-3">
                        <img src="images/41fWJOWxdCL._UXNaN_FMjpg_QL85_.jpg">
                        <p>lovely.</p>
                    </div>
                    <h1 class="artist col-3">Gregory Dillon</h1>
                    <h1 class="description col-3">lovely.</h1>
                    <h1 class="duration col-2">3:20</h1>
                    <i class="fa-regular fa-heart col-1"></i>
                </li>
            </ul>
        </section>

    </main>

    <section id="music-control">

        <div class="switcher">
            <p class="p active" id="lyrics" onclick="click_switcher_lyrics()">Lyrics</p>
            <p class="p" id="playlist" onclick="click_switcher_playlist()">Playlist</p>
        </div>

        <div class="swap-slider">
            <div class="lyrics active">
                <img src="images/image-2.png" alt="">
                <div class="lyric-area">
                    <pre>Anh và tôi thật ra gặp nhau và quen nhau cũng đã được mấy năm
Mà chẳng có chi hơn lời hỏi thăm
Rằng giờ này đã ăn sáng chưa?
Ở bên đấy nắng hay mưa?
Anh và tôi thật ra, uhm-hm, mải mê nhìn lén nhau
Và không một ai nói nên câu, uhm-mm
Rằng người ơi, tôi đang nhớ anh
Và anh có nhớ tôi không?
Mà chẳng có chi hơn lời hỏi thăm
Rằng giờ này đã ăn sáng chưa?
Ở bên đấy nắng hay mưa?
Anh và tôi thật ra, uhm-hm, mải mê nhìn lén nhau
Và không một ai nói nên câu, uhm-mm
Rằng người ơi, tôi đang nhớ anh</pre>
                </div>
            </div>

            <div class="playlist">
                <!-- Swiper -->
            <div class="swiper mySwiper_2">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="images/image-2.png" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="images/daunhatlalangim.png" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="images/dubaothoitiethomnaymua.png" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="images/image-2.png" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="images/daunhatlalangim.png" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="images/dubaothoitiethomnaymua.png" alt="">
                    </div>
                </div>
                <div class="swiper-button-next" style="--swiper-navigation-top-offset: 40%;"></div>
                <div class="swiper-button-prev" style="--swiper-navigation-top-offset: 40%;"></div>
            </div>
            </div>
        </div>

        <div class="buttons">
            <div class="box">
                <img src="images/full-screen.svg" alt="">
            </div>
            <div class="box">
                <img src="images/setting.svg" alt="">
            </div>
            <div class="box">
                <img src="images/profile.svg" alt="">
            </div>
            <div class="box exit-btn" onclick="exit();">
                <img src="images/x.svg" alt="">
            </div>
        </div>

        <div class="part_1">
            <div class="info">
                <h1>Anh nhà ở đâu thế</h1>
                <p>&nbsp;<span>- </span>Amee</p>
            </div>
            <i class="fa-solid fa-heart"></i>
        </div>

        <div class="part_2">
            <div class="controller">
                <div class="random-track">
                    <img src="images/shuffle.svg" title="random">
                </div>
                <div class="prev-track">
                    <img src="images/skip-prev.svg">
                </div>
                <div class="playpause-track">
                    <img src="images/amee-dreamee-dia-cd_0cc3ba2c39ba4c1d9b5804d30a8b7e1d_master.webp" style="width:50px;">
                    <i class="fa fa-play-circle fa-5x"></i>
                </div>
                <div class="next-track">
                    <img src="images/skip-next.svg" alt="">
                </div>
                <div class="repeat-track">
                    <img src="images/repeat.svg" title="repeat">
                </div>
            </div>
            <div class="duration">
                <div class="current-time">00:00</div>
                <input type="range" min="1" max="100" value="0" class="seek_slider" id="range" oninput="progressScript()">
                <div class="total-duration">00:00</div>
            </div>
        </div>

        <div class="part_3">
            <img src="images/microphone.png" alt="" onclick="open_control();">
            <img src="images/icon-frame.svg" alt="" onclick="open_control();">
            <div class="volume">
                <img src="images/solid-media-volume-up.svg" alt="">
                <input type="range" min="1" max="100" value="99" class="volume_slider" id="range" oninput="progressScript()">
            </div>
            <span></span>
            <img src="images/menu.svg" alt="" class="menu" onclick="test();">
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <!-- Link swiper.js -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <script src="assets/js/main.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
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