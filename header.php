<?php
require_once "connection.php";

if (count($_COOKIE) > 0) {
  $sql = "SELECT * FROM users WHERE id = " . $_COOKIE["user_id"];
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();

  $user_name = $row["username"];
  $user_email = $row["email"];
} else {
  $row = -1;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <script src="https://kit.fontawesome.com/4f40e8708a.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/header.css">

</head>

<body>

  <header id="header">
    <label for="search" class="search-bar">
      <input type="text" name="search" id="search_bar" placeholder="Search for music, podcast, playlist,...">
      <button type="submit"><i class="fa fa-search"></i></button>
    </label>

    <?php
    if ($row > 0) {
      echo  '<div class="user">
                    <div class="dropdown" id="dropdown-1">
                      <div class="menu" id="popup-1">
                        <img src="images/BAJO EL POSESIVO ALFA (completa en buenovela).jpg" alt="">
                        <span>' . $user_name . '</span>
                      </div>

                      <div class="option">
                        <div><a href="index.php">Home</a></div>
                        <div><a href="profile.php">Profile</a></div>
                        <div><a href="logout.php">Sign out</a></div>
                      </div>
                    </div>
                  </div>';
    } else {
      echo '<div class="registration">
                    <button type="button"><a href="registration.php">Login</a></button>
                    <button type="button"><a href="registration.php">Sign up</a></button>
                  </div>';
    }
    ?>

  </header>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  <script>
    let dropdown1 = document.getElementById('dropdown-1');
    dropdown1.onclick = function() {
      dropdown1.classList.toggle('active');
    }
  </script>
</body>

</html>