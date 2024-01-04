<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <script src="https://kit.fontawesome.com/4f40e8708a.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/artists.css">
</head>
<body>
    <!-- sidebar -->
    <?php require_once "sidebar.php"; ?>

    <main>
        <!-- header -->
        <?php require_once "header.php"; ?>

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
                <?php while ($row = mysqli_fetch_assoc($result_search)) { ?>
                    <li class="row i songs" data-id="<?php echo $row["songID"]; ?>" onclick="playMe()">
                        <div class="song-info col-3">
                            <img src="<?php echo $row["songImage"]; ?>">
                            <p><?php echo $row["songName"]; ?></p>
                        </div>
                        <h1 class="artist col-3"><?php echo $row["artistName"]; ?></h1>
                        <h1 class="description col-3">Dawn FM</h1>
                        <h1 class="duration col-2">3:20</h1>
                        <i class="fa-solid fa-heart col-1"></i>
                    </li>
                <?php } ?>
            </ul>
        </section>
    </main>

    <!-- footer -->
    <?php require_once "footer.php"; ?>

    <!-- play-track -->
    <?php require_once "play_track.php"; ?>
</body>
</html>