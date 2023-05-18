<!DOCTYPE html>
<html lang="en">

<head>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link
        href="https://fonts.googleapis.com/css2?family=IBM+Plex+Serif:wght@300&family=Nunito&family=Quicksand:wght@300;400&family=Raleway&family=Shantell+Sans:wght@300&display=swap"
        rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>

    <link rel="stylesheet" href="playlist-file.css">

    <script src="https://kit.fontawesome.com/fe800e7b41.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <link rel="icon" href="favicon.png">

    <title>MusPly | Playlist</title>
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
                    <i class="fa-solid fa-magnifying-glass" style="color: #bdbdbd;"></i>
                    <input type="text" placeholder="Search" class="search-bar">
                </li>
            </ul>
        </div>
    </nav>
    <!-- CENTER -->
    
    <div class="table-container">
    <table class="playlist-table">
        <tr class="table-heading">
            <th>Song</th>
            <th>Artist</th>
        </tr>

        <?php
        include("connection.php");
        error_reporting(0);
        $query = "select * from playlist";
        $data = mysqli_query($conn, $query);
        $total = mysqli_num_rows($data);

        if($total != 0) {
            while($rsult = mysqli_fetch_assoc($data)) {
                echo "
                    <tr>
                        <td>$rsult[Song]</td>
                        <td>$rsult[Artist]</td>
                    </tr>
                ";
            }
        } 

        ?>
    </table>

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


    <script src="script.js"></script>

</body>

</html>