<?php
require_once "connection.php";

$sql_songs = "SELECT * FROM songs";
$data_songs = $conn->query($sql_songs);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/track-play.css">
    <script src="https://kit.fontawesome.com/4f40e8708a.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
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
                <h1 class="track-name">...</h1>
                <p class="track-artist">&nbsp;<span>- </span>...</p>
            </div>
            <i class="fa-solid fa-heart"></i>
        </div>

        <div class="part_2">
            <div class="controller">
                <div class="random-track" onclick="randomTrack()">
                    <img src="images/shuffle.svg" title="random" class="random">
                </div>
                <div class="prev-track" onclick="prevTrack()">
                    <img src="images/skip-prev.svg">
                </div>
                <div class="playpause-track" onclick="playpauseTrack()">
                    <img src="images/Aesthetic wall poster ✨.jpg" style="width:50px;" class="track-art">
                    <i class="fa fa-play-circle fa-5x"></i>
                </div>
                <div class="next-track" onclick="nextTrack()">
                    <img src="images/skip-next.svg" alt="">
                </div>
                <div class="repeat-track" onclick="repeatTrack()">
                    <img src="images/repeat.svg" title="repeat">
                </div>
            </div>
            <div class="duration">
                <div class="current-time">00:00</div>
                <input type="range" min="1" max="100" value="0" class="seek_slider" id="range" oninput="progressScript()" onchange="seekTo()">
                <div class="total-duration">00:00</div>
            </div>
        </div>

        <div class="part_3">
            <img src="images/microphone.png" alt="" onclick="open_control();">
            <img src="images/icon-frame.svg" alt="" onclick="open_control();">
            <div class="volume">
                <img src="images/solid-media-volume-up.svg" alt="">
                <input type="range" min="1" max="100" value="99" class="volume_slider" id="range" oninput="progressScript()" onchange="setVolume()">
            </div>
            <span></span>
            <img src="images/menu.svg" alt="" class="menu" onclick="test();">
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="assets/js/main.js"></script>

    <script>
        let track_art = document.querySelector('.track-art');
        let track_name = document.querySelector('.track-name');
        let track_artist = document.querySelector('.track-artist');

        let playpause_btn = document.querySelector('.playpause-track');
        let next_btn = document.querySelector('.next-track');
        let prev_btn = document.querySelector('.prev-track');

        let seek_slider = document.querySelector('.seek_slider');
        let volume_slider = document.querySelector('.volume_slider');
        let curr_time = document.querySelector('.current-time');
        let total_duration = document.querySelector('.total-duration');
        let randomIcon = document.querySelector('.random');
        let curr_track = document.createElement('audio');

        let track_index = 0;
        let isPlaying = false;
        let isRandom = false;
        let updateTimer;

        const music_list = [];
        <?php while ($row = mysqli_fetch_assoc($data_songs)) {
            $sql_artist = "SELECT * FROM artists WHERE artistID = " . $row['artistID'] . "";
            $data_artist = $conn->query($sql_artist);
            $row_artist = $data_artist->fetch_assoc();
        ?>
            music_list.push({
                songID: "<?php echo $row["songID"]; ?>",
                songName: "<?php echo $row["songName"]; ?>",
                songArtist: "<?php echo $row_artist["artistName"]; ?>",
                lyrics: "<?php echo $row["lyrics"]; ?>",
                songImg: "<?php echo $row["songImage"]; ?>",
                music: "<?php echo $row["songSource"]; ?>"
            });
        <?php } ?>

        function playMe() {
            let list_song = document.querySelectorAll('.songs');
            list_song.forEach(song => {
                song.onclick = () => {
                    let songID = song.getAttribute('data-id');
                    for (var i = 0; i < music_list.length; i++) {
                        if (songID == music_list[i].songID) {
                            track_index = songID - 1;
                        }
                    }
                    loadTrack(track_index);
                }
            })
        };

        function loadTrack(track_index) {
            clearInterval(updateTimer);
            reset();

            curr_track.src = music_list[track_index].music;
            curr_track.load();

            console.log(music_list[track_index]);

            if (track_name) {
                track_name.textContent = music_list[track_index].songName;
            }
            if (track_artist) {
                track_artist.textContent = music_list[track_index].songArtist;
            }
            if (track_art) {
                track_art.src = music_list[track_index].songImg;
            }

            updateTimer = setInterval(setUpdate, 1000);

            curr_track.addEventListener('ended', nextTrack);
        }

        function reset() {
            curr_time.textContent = "00:00";
            total_duration.textContent = "00:00";
            seek_slider.value = 0;
        }

        function setUpdate() {
            let seekPosition = 0;
            if (!isNaN(curr_track.duration)) {
                seekPosition = curr_track.currentTime * (100 / curr_track.duration);
                seek_slider.value = seekPosition;

                let currentMinutes = Math.floor(curr_track.currentTime / 60);
                let currentSeconds = Math.floor(curr_track.currentTime - currentMinutes * 60);
                let durationMinutes = Math.floor(curr_track.duration / 60);
                let durationSeconds = Math.floor(curr_track.duration - durationMinutes * 60);

                if (currentMinutes < 10) {
                    currentMinutes = "0" + currentMinutes;
                }
                if (currentSeconds < 10) {
                    currentSeconds = "0" + currentSeconds;
                }
                if (durationMinutes < 10) {
                    durationMinutes = "0" + durationMinutes;
                }
                if (durationSeconds < 10) {
                    durationSeconds = "0" + durationSeconds;
                }

                curr_time.textContent = currentMinutes + ":" + currentSeconds;
                total_duration.textContent = durationMinutes + ":" + durationSeconds;
            }
        }

        function randomTrack() {
            isRandom ? pauseRandom() : playRandom();
        }

        function playRandom() {
            isRandom = true;
        }

        function pauseRandom() {
            isRandom = false;
        }

        function repeatTrack() {
            let current_index = track_index;
            loadTrack(current_index);
            playTrack();
        }

        function playpauseTrack() {
            isPlaying ? pauseTrack() : playTrack();
        }

        function playTrack() {
            curr_track.play();
            isPlaying = true;
            track_art.classList.add('rotate');
            playpause_btn.innerHTML = '<i class="fa fa-pause-circle fa-5x"></i>';
        }

        function pauseTrack() {
            curr_track.pause();
            isPlaying = false;
            track_art.classList.remove('rotate');
            playpause_btn.innerHTML = '<i class="fa fa-play-circle fa-5x"></i>';
        }

        function nextTrack() {
            if (track_index < music_list.length - 1 && isRandom === false) {
                track_index += 1;
            } else if (track_index < music_list.length - 1 && isRandom === true) {
                let random_index = Number.parseInt(Math.random() * music_list.length);
                track_index = random_index;
            } else {
                track_index = 0;
            }
            loadTrack(track_index);
            playTrack();
        }

        function prevTrack() {
            if (track_index > 0) {
                track_index -= 1;
            } else {
                track_index = music_list.length - 1;
            }
            loadTrack(track_index);
            playTrack();
        }

        function seekTo() {
            let seekto = curr_track.duration * (seek_slider.value / 100);
            curr_track.currentTime = seekto;
        }

        function setVolume() {
            curr_track.volume = volume_slider.value / 100;
        }
    </script>
</body>

</html>