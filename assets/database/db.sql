CREATE TABLE users (
	id int(11) PRIMARY KEY AUTO_INCREMENT,
    username varchar(255) NOT null,
    password varchar(255) NOT null,
    email varchar(255) NOT null,
    birthday date null
);

CREATE TABLE artists (
	artistID int(11) PRIMARY KEY AUTO_INCREMENT,
    artistName varchar(255) NOT null,
    debut_year int(4) null,
    country varchar(55) null,
    artistImage varchar(255) NOT null
);

CREATE TABLE genres (
	genreID int(11) PRIMARY KEY AUTO_INCREMENT,
    genreName varchar(255) NOT null,
    description text null,
    genreImage varchar(255) NOT null,
    create_at timestamp DEFAULT CURRENT_TIMESTAMP,
    update_at timestamp DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE songs (
	songID int(11) PRIMARY KEY AUTO_INCREMENT,
    songName varchar(255) NOT null,
    genreID int(11) NOT null,
    artistID int(11) NOT null,
    lyrics text,
    release_year int(4) null,
    songImage varchar(255) NOT null,
    songSource varchar(255) NOT null,
    playCount int DEFAULT 0,
    added_date date DEFAULT CURRENT_DATE,
    FOREIGN KEY (genreID) REFERENCES genres(genreID),
    FOREIGN KEY (artistID) REFERENCES artists(artistID)
);

CREATE TABLE playlists (
	playlistID int(11) PRIMARY KEY AUTO_INCREMENT,
    playlistName varchar(255) NOT null,
    description text null,
    creatorUserID int(11) NOT null,
    playlistImage varchar(255) not null,
    created_date timestamp DEFAULT CURRENT_TIMESTAMP,
    last_modified_date timestamp DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (creatorUserID) REFERENCES users(id)
);

CREATE TABLE podcasts (
	podcastID int(11) PRIMARY KEY AUTO_INCREMENT,
    title varchar(255) NOT null,
    host varchar(255) null,
    description text null,
    release_year int(4) null,
    podcastImage varchar(255) NOT null,
    podcastSource varchar(255) NOT null,
    last_updated timestamp DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Inserting users with various information
INSERT INTO users (username, password, email, birthday) VALUES
('john_doe', 'password123', 'john.doe@example.com', '1990-05-15'),
('alice_smith', 'pass987', 'alice.smith@example.com', '1985-08-22'),
('bob_jones', 'securepass', 'bob.jones@example.com', '1995-02-10'),
('emma_davis', 'userpass', 'emma.davis@example.com', '1988-11-30'),
('michael_white', 'mike123', 'michael.white@example.com', '1992-07-05'),
('sophie_brown', 'sophiepass', 'sophie.brown@example.com', '1998-04-18'),
('david_miller', 'davidpass', 'david.miller@example.com', '1982-09-25'),
('olivia_smith', 'olivia123', 'olivia.smith@example.com', '1993-12-12'),
('ryan_jackson', 'ryanpass', 'ryan.jackson@example.com', '1987-06-08'),
('emily_wilson', 'emilypass', 'emily.wilson@example.com', '1991-03-28');


-- Inserting genres with various information
INSERT INTO genres (genreName, description, genreImage) VALUES
('Pop', 'Popular music characterized by catchy melodies and accessible lyrics.', 'images/pop.jpg'),
('Rock', 'A genre of popular music that originated as "rock and roll" in the United States in the 1950s.', 'images/rock.jpg'),
('Hip Hop', 'A genre of popular music that originated in African American and Hispanic American communities.', 'images/hiphop.jpg'),
('Country', 'A genre of popular music that originated in the Southern United States.', 'images/country.jpg'),
('Electronic', 'Music that employs electronic musical technology to produce sound.', 'images/electronic.jpg'),
('Jazz', 'A genre of music that originated in the African-American communities of New Orleans.', 'images/jazz.jpg'),
('Classical', 'A broad term that usually refers to music that is considered to be part of the European classical tradition.', 'images/classical.jpg'),
('R&B', 'Rhythm and Blues, a genre that combines elements of rhythm and blues, pop, soul, funk, and hip hop.', 'images/rnb.jpg'),
('Metal', 'A genre characterized by its use of heavy guitar riffs, double bass drumming, and aggressive lyrics.', 'images/metal.jpg'),
('Indie', 'A genre of alternative rock music that originated in the United Kingdom and the United States.', 'images/indie.jpg');


-- Inserting a total of 20 artists
INSERT INTO artists (artistName, debut_year, country, artistImage) VALUES
('Taylor Swift', 2006, 'United States', 'images/taylor_swift.jpg'),
('Ed Sheeran', 2006, 'United Kingdom', 'images/ed_sheeran.jpg'),
('Beyoncé', 1997, 'United States', 'images/beyonce.jpg'),
('The Beatles', 1960, 'United Kingdom', 'images/the_beatles.jpg'),
('Shakira', 1990, 'Colombia', 'images/shakira.jpg'),
('Elvis Presley', 1954, 'United States', 'images/elvis_presley.jpg'),
('Adele', 2006, 'United Kingdom', 'images/adele.jpg'),
('Michael Jackson', 1964, 'United States', 'images/michael_jackson.jpg'),
('Johnny Cash', 1955, 'United States', 'images/johnny_cash.jpg'),
('Rihanna', 2005, 'Barbados', 'images/rihanna.jpg'),
('Coldplay', 1996, 'United Kingdom', 'images/coldplay.jpg'),
('Katy Perry', 2001, 'United States', 'images/katy_perry.jpg'),
('U2', 1976, 'Ireland', 'images/u2.jpg'),
('Eminem', 1992, 'United States', 'images/eminem.jpg'),
('Ariana Grande', 2011, 'United States', 'images/ariana_grande.jpg'),
('Bob Marley', 1962, 'Jamaica', 'images/bob_marley.jpg'),
('Pink Floyd', 1965, 'United Kingdom', 'images/pink_floyd.jpg'),
('Bruno Mars', 2010, 'United States', 'images/bruno_mars.jpg'),
('Queen', 1970, 'United Kingdom', 'images/queen.jpg'),
('Drake', 2006, 'Canada', 'images/drake.jpg');
-- Inserting additional artists
INSERT INTO artists (artistName, debut_year, country, artistImage) VALUES
('Lady Gaga', 2005, 'United States', 'images/lady_gaga.jpg'),
('Justin Bieber', 2009, 'Canada', 'images/justin_bieber.jpg'),
('The Rolling Stones', 1962, 'United Kingdom', 'images/rolling_stones.jpg'),
('Celine Dion', 1981, 'Canada', 'images/celine_dion.jpg'),
('Kanye West', 2004, 'United States', 'images/kanye_west.jpg'),
('Madonna', 1982, 'United States', 'images/madonna.jpg'),
('Jay-Z', 1996, 'United States', 'images/jay_z.jpg'),
('David Bowie', 1967, 'United Kingdom', 'images/david_bowie.jpg'),
('Alicia Keys', 2001, 'United States', 'images/alicia_keys.jpg'),
('Whitney Houston', 1985, 'United States', 'images/whitney_houston.jpg');


-- Inserting songs with various information
INSERT INTO songs (songName, genreID, artistID, lyrics, release_year, songImage, songSource) VALUES
('Shake It Off', 1, 1, 'Shake it off, shake it off!', 2014, 'images/shake_it_off.jpg', 'sounds/shake_it_off.mp3'),
('Thinking Out Loud', 2, 2, 'When your legs don''t work like they used to before...', 2014, 'images/thinking_out_loud.jpg', 'sounds/thinking_out_loud.mp3'),
('Halo', 3, 3, 'Remember those walls I built? Well, baby, they''re tumbling down...', 2008, 'images/halo.jpg', 'sounds/halo.mp3'),
('Hey Jude', 2, 4, 'Hey Jude, don''t make it bad...', 1968, 'images/hey_jude.jpg', 'sounds/hey_jude.mp3'),
('Hips Don''t Lie', 5, 5, 'I never really knew that she could dance like this...', 2005, 'images/hips_dont_lie.jpg', 'sounds/hips_dont_lie.mp3'),
('Can''t Help Falling in Love', 6, 6, 'Wise men say only fools rush in...', 1961, 'images/cant_help_falling_in_love.jpg', 'sounds/cant_help_falling_in_love.mp3'),
('Rolling in the Deep', 7, 7, 'We could have had it all, rolling in the deep...', 2010, 'images/rolling_in_the_deep.jpg', 'sounds/rolling_in_the_deep.mp3'),
('Billie Jean', 8, 8, 'Billie Jean is not my lover...', 1982, 'images/billie_jean.jpg', 'sounds/billie_jean.mp3'),
('Ring of Fire', 9, 9, 'Love is a burning thing, and it makes a fiery ring...', 1963, 'images/ring_of_fire.jpg', 'sounds/ring_of_fire.mp3'),
('Diamonds', 10, 10, 'Shine bright like a diamond...', 2012, 'images/diamonds.jpg', 'sounds/diamonds.mp3'),
('Fix You', 2, 11, 'When you try your best but you don''t succeed...', 2005, 'images/fix_you.jpg', 'sounds/fix_you.mp3'),
('Firework', 1, 12, 'Do you ever feel like a plastic bag...', 2010, 'images/firework.jpg', 'sounds/firework.mp3'),
('With or Without You', 2, 13, 'See the stone set in your eyes...', 1987, 'images/with_or_without_you.jpg', 'sounds/with_or_without_you.mp3'),
('Lose Yourself', 8, 14, 'If you had one shot, one opportunity...', 2002, 'images/lose_yourself.jpg', 'sounds/lose_yourself.mp3'),
('Into You', 1, 15, 'I''m so into you, I can barely breathe...', 2016, 'images/into_you.jpg', 'sounds/into_you.mp3'),
('No Woman, No Cry', 6, 16, 'No woman, no cry...', 1974, 'images/no_woman_no_cry.jpg', 'sounds/no_woman_no_cry.mp3'),
('Wish You Were Here', 7, 17, 'How I wish, how I wish you were here...', 1975, 'images/wish_you_were_here.jpg', 'sounds/wish_you_were_here.mp3'),
('Locked Out of Heaven', 10, 18, 'Never had much faith in love or miracles...', 2012, 'images/locked_out_of_heaven.jpg', 'sounds/locked_out_of_heaven.mp3'),
('Bohemian Rhapsody', 2, 19, 'Is this the real life? Is this just fantasy?...', 1975, 'images/bohemian_rhapsody.jpg', 'sounds/bohemian_rhapsody.mp3'),
('Hotline Bling', 8, 20, 'You used to call me on my cell phone...', 2015, 'images/hotline_bling.jpg', 'sounds/hotline_bling.mp3')
-- Continue with the corrected values for the remaining songs
-- Inserting songs for Lady Gaga (ID: 21-25)
INSERT INTO songs (songName, genreID, artistID, lyrics, release_year, songImage, songSource) VALUES
('Bad Romance', 1, 21, 'I want your love and I want your revenge...', 2009, 'images/bad_romance_lady_gaga.jpg', 'sounds/bad_romance_lady_gaga.mp3'),
('Poker Face', 1, 21, 'Can''t read my, can''t read my, no, he can''t read my poker face...', 2008, 'images/poker_face_lady_gaga.jpg', 'sounds/poker_face_lady_gaga.mp3'),
('Shallow', 7, 21, 'Tell me something, boy...', 2018, 'images/shallow_lady_gaga.jpg', 'sounds/shallow_lady_gaga.mp3'),
('Just Dance', 1, 21, 'Red One, Konvict, Gaga...', 2008, 'images/just_dance_lady_gaga.jpg', 'sounds/just_dance_lady_gaga.mp3'),
('Rain on Me', 1, 21, 'I''d rather be dry, but at least I''m alive...', 2020, 'images/rain_on_me_lady_gaga.jpg', 'sounds/rain_on_me_lady_gaga.mp3');

-- Inserting songs for Justin Bieber (ID: 22-26)
INSERT INTO songs (songName, genreID, artistID, lyrics, release_year, songImage, songSource) VALUES
('Baby', 1, 22, 'Baby, baby, baby, oh...', 2010, 'images/baby_justin_bieber.jpg', 'sounds/baby_justin_bieber.mp3'),
('Sorry', 1, 22, 'Is it too late now to say sorry?...', 2015, 'images/sorry_justin_bieber.jpg', 'sounds/sorry_justin_bieber.mp3'),
('Love Yourself', 7, 22, 'If you like the way you look that much...', 2015, 'images/love_yourself_justin_bieber.jpg', 'sounds/love_yourself_justin_bieber.mp3'),
('Yummy', 1, 22, 'Yeah, you got that yummy, yum...', 2020, 'images/yummy_justin_bieber.jpg', 'sounds/yummy_justin_bieber.mp3'),
('What Do You Mean?', 1, 22, 'What do you mean? Oh, oh, oh...', 2015, 'images/what_do_you_mean_justin_bieber.jpg', 'sounds/what_do_you_mean_justin_bieber.mp3');

-- Inserting songs for The Rolling Stones (ID: 23-27)
INSERT INTO songs (songName, genreID, artistID, lyrics, release_year, songImage, songSource) VALUES
('Paint It Black', 2, 23, 'I see a red door and I want it painted black...', 1966, 'images/paint_it_black_rolling_stones.jpg', 'sounds/paint_it_black_rolling_stones.mp3'),
('Angie', 2, 23, 'Angie, Angie, when will those clouds all disappear?...', 1973, 'images/angie_rolling_stones.jpg', 'sounds/angie_rolling_stones.mp3'),
('Start Me Up', 2, 23, 'If you start me up, if you start me up, I''ll never stop...', 1981, 'images/start_me_up_rolling_stones.jpg', 'sounds/start_me_up_rolling_stones.mp3'),
('Sympathy for the Devil', 2, 23, 'Please allow me to introduce myself...', 1968, 'images/sympathy_for_the_devil_rolling_stones.jpg', 'sounds/sympathy_for_the_devil_rolling_stones.mp3'),
('Gimme Shelter', 2, 23, 'Oh, a storm is threat''ning my very life today...', 1969, 'images/gimme_shelter_rolling_stones.jpg', 'sounds/gimme_shelter_rolling_stones.mp3');

-- Inserting songs for Celine Dion (ID: 24-28)
INSERT INTO songs (songName, genreID, artistID, lyrics, release_year, songImage, songSource) VALUES
('My Heart Will Go On', 7, 24, 'Near, far, wherever you are...', 1997, 'images/my_heart_will_go_on_celine_dion.jpg', 'sounds/my_heart_will_go_on_celine_dion.mp3'),
('The Power of Love', 7, 24, '''Cause I''m your lady and you are my man...', 1993, 'images/the_power_of_love_celine_dion.jpg', 'sounds/the_power_of_love_celine_dion.mp3'),
('All By Myself', 7, 24, 'All by myself, don''t wanna be, all by myself anymore...', 1996, 'images/all_by_myself_celine_dion.jpg', 'sounds/all_by_myself_celine_dion.mp3'),
('It''s All Coming Back to Me Now', 7, 24, 'Every tear, every tear...', 1996, 'images/its_all_coming_back_to_me_now_celine_dion.jpg', 'sounds/its_all_coming_back_to_me_now_celine_dion.mp3'),
('That''s the Way It Is', 7, 24, 'I can read your mind and I know your story...', 1999, 'images/thats_the_way_it_is_celine_dion.jpg', 'sounds/thats_the_way_it_is_celine_dion.mp3');

-- Inserting songs for Kanye West (ID: 25-29)
INSERT INTO songs (songName, genreID, artistID, lyrics, release_year, songImage, songSource) VALUES
('Stronger', 8, 25, 'N-now th-that that don''t kill me, can only make me stronger...', 2007, 'images/stronger_kanye_west.jpg', 'sounds/stronger_kanye_west.mp3'),
('Heartless', 8, 25, 'In the night, I hear them talk the coldest story ever told...', 2008, 'images/heartless_kanye_west.jpg', 'sounds/heartless_kanye_west.mp3'),
('Gold Digger', 8, 25, 'Now, I ain''t sayin'' she a gold digger...', 2005, 'images/gold_digger_kanye_west.jpg', 'sounds/gold_digger_kanye_west.mp3'),
('Power', 8, 25, 'No one man should have all that power...', 2010, 'images/power_kanye_west.jpg', 'sounds/power_kanye_west.mp3'),
('All of the Lights', 8, 25, 'Turn up the lights in here, baby...', 2010, 'images/all_of_the_lights_kanye_west.jpg', 'sounds/all_of_the_lights_kanye_west.mp3');

-- Inserting songs for Madonna (ID: 26-30)
INSERT INTO songs (songName, genreID, artistID, lyrics, release_year, songImage, songSource) VALUES
('Like a Prayer', 1, 26, 'Life is a mystery, everyone must stand alone...', 1989, 'images/like_a_prayer_madonna.jpg', 'sounds/like_a_prayer_madonna.mp3'),
('Vogue', 1, 26, 'Strike a pose, there''s nothing to it...', 1990, 'images/vogue_madonna.jpg', 'sounds/vogue_madonna.mp3'),
('Hung Up', 1, 26, 'Time goes by, so slowly for those who wait...', 2005, 'images/hung_up_madonna.jpg', 'sounds/hung_up_madonna.mp3'),
('Material Girl', 1, 26, 'Living in a material world, and I am a material girl...', 1984, 'images/material_girl_madonna.jpg', 'sounds/material_girl_madonna.mp3'),
('Like a Virgin', 1, 26, 'Touched for the very first time...', 1984, 'images/like_a_virgin_madonna.jpg', 'sounds/like_a_virgin_madonna.mp3');

