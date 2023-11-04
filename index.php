<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Platform - Homepage</title>

    <script src="https://kit.fontawesome.com/4f40e8708a.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <!-- Link swiper.js -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

</head>

<body>
    <?php include_once 'sidebar.php' ?>

    <!-- Main content -->
    <main id="main-content">
        <!-- 1. Header -->
        <?php include_once 'header.php' ?>

        <!-- 2. Category -->
        <section class="category">

            <div class="title">GENRE <a href="w_wave.php" style="padding-left: 12px;"><i class="fa-solid fa-arrow-right"></i></a></div>

            <!-- Swiper -->
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="#" class="item">
                            <img src="images/I Can_t Go, by All The Damn Vampires, Sunglasses Kid, Mint Simon.jpg">
                            <h1>synth-pop</h1>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#" class="item">
                            <img src="images/Bob Willoughby - Audrey Hepburn, on Telephone, Paramount Studios - B_W Estate Print.jpg">
                            <h1>jazz</h1>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#" class="item">
                            <img src="images/The Weeknd - After Hours (2 LP) (Explicit) - Vinyl.jpg">
                            <h1>r&b</h1>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#" class="item">
                            <img src="images/country  - playlist by avaskye _ Spotify.jpg">
                            <h1>country</h1>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#" class="item">
                            <img src="images/I Can_t Go, by All The Damn Vampires, Sunglasses Kid, Mint Simon.jpg">
                            <h1>synth-pop</h1>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#" class="item">
                            <img src="images/Bob Willoughby - Audrey Hepburn, on Telephone, Paramount Studios - B_W Estate Print.jpg">
                            <h1>jazz</h1>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#" class="item">
                            <img src="images/The Weeknd - After Hours (2 LP) (Explicit) - Vinyl.jpg">
                            <h1>r&b</h1>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#" class="item">
                            <img src="images/country  - playlist by avaskye _ Spotify.jpg">
                            <h1>country</h1>
                        </a>
                    </div>
                </div>
                <div class="circle">
                    <div class="swiper-button-next"></div>
                </div>

                <div class="swiper-button-prev"></div>
            </div>
        </section>

        <!-- 3. Main Component -->
        <section class="component row">

            <!-- 3.1: Album Block-->
            <div class="album col-3">
                <h1>album</h1>
                <ul class="album_list">
                    <li>
                        <a href="#">
                            <img src="images/1989 (Taylor’s Version).jpg">
                            <div class="info">
                                <h2>1989 (Taylor’s version )</h2>
                                <p>Taylor Swift</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="images/ab67616d0000b273ac5d09eaaf0a8609100ba290.jpg">
                            <div class="info">
                                <h2>Citopia</h2>
                                <p>Phùng Khánh Linh</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="images/25.jpg">
                            <div class="info">
                                <h2>25</h2>
                                <p>Adele</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="images/download.jpg">
                            <div class="info">
                                <h2>Love Poem</h2>
                                <p>IU</p>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- 3.2: Podcast Block -->
            <div class="podcast col-9">
                <h1>new release</h1>
                <div class="box">
                    <div class="swiper mySwiper_1">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide item">
                                <div class="background" style="width: 973px;"></div>
                                <div class="content">
                                    <img src="images/How To Propagate Monstera.jpg">
                                    <div class="description">
                                        <h2>podcast</h2>
                                        <h3>Self-discipline: Làm sao để xây dựng kỷ luật bản thân?</h3>
                                        <a href="#" class="writer">
                                            <img src="images/chungha pics! on X.jpg">
                                            <p class="name">Cosmic Writer</p>
                                        </a>
                                        <p>Xây dựng thói quen lập kế hoạch sẽ giúp bạn luôn ý thức được mục tiêu mình muốn đạt được khi làm bất cứ việc gì và có phương án dự phòng cho những vấn đề phát sinh. Từ việc lựa chọn mô hình khởi nghiệp nào, học gì để phát triển bản thân, cho đến những việc thường nhật như ăn uống như thế nào để giữ gìn sức khoẻ, tập luyện ra sao để nâng cao sức khỏe… đều cần phải có kế hoạch.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide item">
                                <div class="background" style="width: 973px;"></div>
                                <div class="content">
                                    <img src="images/How To Propagate Monstera.jpg">
                                    <div class="description">
                                        <h2>podcast</h2>
                                        <h3>Self-discipline: Làm sao để xây dựng kỷ luật bản thân?</h3>
                                        <a href="#" class="writer">
                                            <img src="images/chungha pics! on X.jpg">
                                            <p class="name">Cosmic Writer</p>
                                        </a>
                                        <p>Xây dựng thói quen lập kế hoạch sẽ giúp bạn luôn ý thức được mục tiêu mình muốn đạt được khi làm bất cứ việc gì và có phương án dự phòng cho những vấn đề phát sinh. Từ việc lựa chọn mô hình khởi nghiệp nào, học gì để phát triển bản thân, cho đến những việc thường nhật như ăn uống như thế nào để giữ gìn sức khoẻ, tập luyện ra sao để nâng cao sức khỏe… đều cần phải có kế hoạch.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide item">
                                <div class="background" style="width: 973px;"></div>
                                <div class="content">
                                    <img src="images/How To Propagate Monstera.jpg">
                                    <div class="description">
                                        <h2>podcast</h2>
                                        <h3>Self-discipline: Làm sao để xây dựng kỷ luật bản thân?</h3>
                                        <a href="#" class="writer">
                                            <img src="images/chungha pics! on X.jpg">
                                            <p class="name">Cosmic Writer</p>
                                        </a>
                                        <p>Xây dựng thói quen lập kế hoạch sẽ giúp bạn luôn ý thức được mục tiêu mình muốn đạt được khi làm bất cứ việc gì và có phương án dự phòng cho những vấn đề phát sinh. Từ việc lựa chọn mô hình khởi nghiệp nào, học gì để phát triển bản thân, cho đến những việc thường nhật như ăn uống như thế nào để giữ gìn sức khoẻ, tập luyện ra sao để nâng cao sức khỏe… đều cần phải có kế hoạch.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide item">
                                <div class="background" style="width: 973px;"></div>
                                <div class="content">
                                    <img src="images/How To Propagate Monstera.jpg">
                                    <div class="description">
                                        <h2>podcast</h2>
                                        <h3>Self-discipline: Làm sao để xây dựng kỷ luật bản thân?</h3>
                                        <a href="#" class="writer">
                                            <img src="images/chungha pics! on X.jpg">
                                            <p class="name">Cosmic Writer</p>
                                        </a>
                                        <p>Xây dựng thói quen lập kế hoạch sẽ giúp bạn luôn ý thức được mục tiêu mình muốn đạt được khi làm bất cứ việc gì và có phương án dự phòng cho những vấn đề phát sinh. Từ việc lựa chọn mô hình khởi nghiệp nào, học gì để phát triển bản thân, cho đến những việc thường nhật như ăn uống như thế nào để giữ gìn sức khoẻ, tập luyện ra sao để nâng cao sức khỏe… đều cần phải có kế hoạch.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide item">
                                <div class="background" style="width: 973px;"></div>
                                <div class="content">
                                    <img src="images/How To Propagate Monstera.jpg">
                                    <div class="description">
                                        <h2>podcast</h2>
                                        <h3>Self-discipline: Làm sao để xây dựng kỷ luật bản thân?</h3>
                                        <a href="#" class="writer">
                                            <img src="images/chungha pics! on X.jpg">
                                            <p class="name">Cosmic Writer</p>
                                        </a>
                                        <p>Xây dựng thói quen lập kế hoạch sẽ giúp bạn luôn ý thức được mục tiêu mình muốn đạt được khi làm bất cứ việc gì và có phương án dự phòng cho những vấn đề phát sinh. Từ việc lựa chọn mô hình khởi nghiệp nào, học gì để phát triển bản thân, cho đến những việc thường nhật như ăn uống như thế nào để giữ gìn sức khoẻ, tập luyện ra sao để nâng cao sức khỏe… đều cần phải có kế hoạch.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>

        </section>

        <!-- 4. Artists -->
        <section class="artists">
            <h1 class="title">popular artists <a href="w_artists.php" style="padding-left: 12px;"><i class="fa-solid fa-arrow-right"></i></a></h1>

            <!-- Swiper -->
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="#" class="item">
                            <img src="images/tam3.jpg">
                            <h2>Mỹ Tâm</h2>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#" class="item">
                            <img src="images/282562961_560018528829158_205099524906925756_n.jpg">
                            <h2>Harry Style</h2>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#" class="item">
                            <img src="images/download (1).jpg">
                            <h2>Chillies</h2>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#" class="item">
                            <img src="images/ab6761610000e5ebc9690bc711d04b3d4fd4b87c.jpg">
                            <h2>BLACKPINK</h2>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#" class="item">
                            <img src="images/tam3.jpg">
                            <h2>Mỹ Tâm</h2>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#" class="item">
                            <img src="images/282562961_560018528829158_205099524906925756_n.jpg">
                            <h2>Harry Style</h2>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#" class="item">
                            <img src="images/download (1).jpg">
                            <h2>Chillies</h2>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#" class="item">
                            <img src="images/ab6761610000e5ebc9690bc711d04b3d4fd4b87c.jpg">
                            <h2>BLACKPINK</h2>
                        </a>
                    </div>
                </div>
                <div class="swiper-button-next" style="--swiper-navigation-top-offset: 40%;"></div>
                <div class="swiper-button-prev" style="--swiper-navigation-top-offset: 40%;"></div>
            </div>
        </section>

        <!-- 5. Playlist -->
        <section class="playlist">
            <h1 class="title">playlist for you</h1>

            <!-- Swiper -->
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="#" class="item">
                            <img src="images/Sarah Ellem_.jpg">
                            <div class="content">
                                <div class="detail">
                                    <h2 class="playlist_name">Rainy days</h2>
                                    <p class="artists">Yiruma, epik high,....</p>
                                </div>
                                <i class="fas fa-play"></i>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#" class="item">
                            <img src="images/Aesthetic wall poster ✨.jpg">
                            <div class="content">
                                <div class="detail">
                                    <h2 class="playlist_name">Chill</h2>
                                    <p class="artists">Min, DEAN, Đen Vâu,...</p>
                                </div>
                                <i class="fas fa-play"></i>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#" class="item">
                            <img src="images/🥂.jpg">
                            <div class="content">
                                <div class="detail">
                                    <h2 class="playlist_name">Friday Party</h2>
                                    <p class="artists">Dua Lipa, Bích Phương,..</p>
                                </div>
                                <i class="fas fa-play"></i>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#" class="item">
                            <img src="images/Neon Pink Aesthetics Wallpapers - Wallpaper Cave 5F4.jpg">
                            <div class="content">
                                <div class="detail">
                                    <h2 class="playlist_name">R&B Mix</h2>
                                    <p class="artists">Ariana Grande, Sơn Tùn...</p>
                                </div>
                                <i class="fas fa-play"></i>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#" class="item">
                            <img src="images/Sarah Ellem_.jpg">
                            <div class="content">
                                <div class="detail">
                                    <h2 class="playlist_name">Rainy days</h2>
                                    <p class="artists">Yiruma, epik high,....</p>
                                </div>
                                <i class="fas fa-play"></i>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#" class="item">
                            <img src="images/Aesthetic wall poster ✨.jpg">
                            <div class="content">
                                <div class="detail">
                                    <h2 class="playlist_name">Chill</h2>
                                    <p class="artists">Min, DEAN, Đen Vâu,...</p>
                                </div>
                                <i class="fas fa-play"></i>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#" class="item">
                            <img src="images/🥂.jpg">
                            <div class="content">
                                <div class="detail">
                                    <h2 class="playlist_name">Friday Party</h2>
                                    <p class="artists">Dua Lipa, Bích Phương,..</p>
                                </div>
                                <i class="fas fa-play"></i>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#" class="item">
                            <img src="images/Neon Pink Aesthetics Wallpapers - Wallpaper Cave 5F4.jpg">
                            <div class="content">
                                <div class="detail">
                                    <h2 class="playlist_name">R&B Mix</h2>
                                    <p class="artists">Ariana Grande, Sơn Tùn...</p>
                                </div>
                                <i class="fas fa-play"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- 6. Explore -->
        <section class="explore row">
            <h1 class="title">Explore new song</h1>
            <div class="item col-4">
                <img src="images/ab67616d0000b273a1c37f3fd969287c03482c3b.jpg">
                <div class="content">
                    <h2>radio</h2>
                    <p>Lana Del Rey</p>
                </div>
            </div>
            <div class="item col-4">
                <img src="images/1581043806043.jpg">
                <div class="content">
                    <h2>có em bên đời bỗng vui</h2>
                    <p>Chillies</p>
                </div>
            </div>
            <div class="item col-4">
                <img src="images/SZATout.webp">
                <div class="content">
                    <h2>snooze</h2>
                    <p>Sza</p>
                </div>
            </div>
            <div class="item col-4">
                <img src="images/amee-dreamee-dia-cd_0cc3ba2c39ba4c1d9b5804d30a8b7e1d_master.webp">
                <div class="content">
                    <h2>anh nhà ở đâu thế</h2>
                    <p>Amee</p>
                </div>
            </div>
            <div class="item col-4">
                <img src="images/1710868712-d2845e1d4c98a360d14c6f9afe0f64b6ebfca67725dfccef94d791b875ca1c6c-d.webp">
                <div class="content">
                    <h2>paint the town red</h2>
                    <p>Doja Cat</p>
                </div>
            </div>
            <div class="item col-4">
                <img src="images/Harry-Styles-Harrys-House-900x600.jpeg">
                <div class="content">
                    <h2>late night talking</h2>
                    <p>Harry Style</p>
                </div>
            </div>
            <div class="item col-4">
                <img src="images/Olivia Rodrigo sets title and release date for new album _Guts_.jpg">
                <div class="content">
                    <h2>vampire</h2>
                    <p>Olivia Rodrigo</p>
                </div>
            </div>
            <div class="item col-4">
                <img src="images/1691740459994_640.jpg">
                <div class="content">
                    <h2>tình yêu có nghĩa là gì</h2>
                    <p>Tlinh</p>
                </div>
            </div>
            <div class="item col-4">
                <img src="images/25.jpg">
                <div class="content">
                    <h2>when we were young</h2>
                    <p>Adele</p>
                </div>
            </div>
        </section>
    </main>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <!-- Link swiper.js -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 5,
            spaceBetween: 50,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });

        var swiper = new Swiper(".mySwiper_1", {
            spaceBetween: 50,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>
</body>

</html>