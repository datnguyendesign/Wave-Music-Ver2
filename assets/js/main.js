let switcher_lyrics = document.getElementById('lyrics');
let switcher_playlist = document.getElementById('playlist');
let lyrics_box = document.querySelector('.lyrics');
let playlist_box = document.querySelector('.playlist');

function click_switcher_lyrics() {
    switcher_lyrics.classList.add('active');
    switcher_playlist.classList.remove('active');
    lyrics_box.classList.add('active');
    playlist_box.classList.remove('active');
}

function click_switcher_playlist() {
    switcher_playlist.classList.add('active');
    switcher_lyrics.classList.remove('active');
    lyrics_box.classList.remove('active');
    playlist_box.classList.add('active');
}

let music_control = document.getElementById('music-control');
let button_exit = document.querySelector('.exit-btn');

function exit() {
    music_control.classList.remove('active');
}

function open_control() {
    music_control.classList.add('active');
}