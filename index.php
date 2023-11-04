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
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
    />

</head>

<body>
    <?php include_once 'sidebar.php' ?>

    <main id="main-content">
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
    </main>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <!-- Link swiper.js -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 5,
            spaceBetween: 100,
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