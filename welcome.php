<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link
        href="https://fonts.googleapis.com/css2?family=IBM+Plex+Serif:wght@300&family=Nunito&family=Quicksand:wght@300;400&family=Raleway&family=Shantell+Sans:wght@300&display=swap"
        rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="song-banner.css">  

    <script src="https://kit.fontawesome.com/fe800e7b41.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <link rel="icon" href="favicon.png">

    <title>MusPly</title>

    <style>
        .song-banner{
            height: 80px;
        }
    </style>


</head>

<body>
    <!-- TOP -->
    <nav class="navbar navbar-expand-lg bg-dark">
        <a href="#"><img class="nav-bar-favicon" src="favicon.png" alt="logo"></a>
        <a class="navbar-brand" href="#">MusPly</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
            aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="welcome.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="playlist.php">Playlist</a></li>
                <li class="nav-item"><a class="nav-link" href="connect.php">Logout</a></li>
                <li>
                    <i class="fa-solid fa-magnifying-glass" style="color: black;"></i>
                    <input type="text" placeholder="Search" class="search-bar">
                </li>
            </ul>
        </div>
    </nav>
    <!-- CENTER -->
    <div class="container">

        <div class="song-list">
            <h1 class="song-list-heading">Score the Perfect <span class="music-blue">MUSIC</span></h1>
            <p class="song-list-heading">Stress free listening.</p>
            <div class="song-item-contain">

                <div class="song-item">
                    <img alt="img1">
                    <span class="song-title">dfbfbgb</span>
                    <span class="song-item-play"><span>04:03</span><i id="0" class="fa-solid fa-play song-itemplay"
                            style="color: black;"></i>
                    </span>
                </div>

                <div class="song-item">
                    <img alt="img2">
                    <span class="song-title">bgbgfngf</span>
                    <span class="song-item-play"><span class="song-time">03:53</span><i id="1" class="fa-solid fa-play song-itemplay"
                            style="color: black;"></i>
                    </span>
                </div>

                <div class="song-item">
                    <img alt="img3">
                    <span class="song-title">fgbgfbg</span>
                    <span class="song-item-play"><span class="song-time">03:59</span><i id="2" class="fa-solid fa-play song-itemplay"
                            style="color: black;"></i>
                    </span>
                </div>

                <div class="song-item">
                    <img alt="img4">
                    <span class="song-title">Closer</span>
                    <span class="song-item-play"><span class="song-time">04:03</span><i id="3" class="fa-solid fa-play song-itemplay"
                            style="color: black;"></i>
                    </span>
                </div>

                <div class="song-item">
                    <img alt="img4">
                    <span class="song-title">Closer</span>
                    <span class="song-item-play"><span class="song-time">03:48</span><i id="4" class="fa-solid fa-play song-itemplay"
                            style="color: black;"></i>
                    </span>
                </div>

                <div class="song-item">
                    <img alt="img4">
                    <span class="song-title">Closer</span>
                    <span class="song-item-play"><span class="song-time">03:43</span><i id="5" class="fa-solid fa-play song-itemplay"
                            style="color: black;"></i>
                    </span>
                </div>

                <div class="song-item">
                    <img alt="img4">
                    <span class="song-title">Closer</span>
                    <span class="song-item-play"><span class="song-time">04:02</span><i id="6" class="fa-solid fa-play song-itemplay"
                            style="color: black;"></i>
                    </span>
                </div>

                <div class="song-item">
                    <img alt="img4">
                    <span class="song-title">Closer</span>
                    <span class="song-item-play"><span class="song-time">03:23</span><i id="7" class="fa-solid fa-play song-itemplay"
                            style="color: black;"></i>
                    </span>
                </div>
            </div>

        </div>


        <div id="song-banner">
            <!-- <img src="images/1.jpg" alt="Song Banner Image"> -->
        </div>

    </div>

    <!-- BOTTOM -->
    <div class="bottom">

        <div class="song-info-display">
            <img src="images/playing-gif.gif" alt="||" class="playing-gif" id="playing-gif">
            <span class="song-name-bottom" id="master-song-name">The Middle</span>
        </div>

        <div class="play-section">
            <input type="range" value="0" class="range-slider" name="range" id="range-bar" min="0" max="80">
            <div class="icons">
                <i class="fa-solid fa-shuffle" id="shuffle" style="color: #F6F1F1;"></i>
                <i class="fa-solid fa-backward" id="previous" style="color: #F6F1F1;"></i>
                <i class="fa-solid fa-play" style="color: #F6F1F1;" id="play-button"></i>
                <i class="fa-solid fa-forward" id="next" style="color: #F6F1F1;"></i>
                <i class="fa-solid fa-repeat" id="repeat" style="color: #dee0e3;"></i>
            </div>
        </div>


    </div>


    <script src="script.js" defer></script>

</body>

</html>