<?php
    include("connection.php");
    include("signup.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link
        href="https://fonts.googleapis.com/css2?family=IBM+Plex+Serif:wght@300&family=Nunito&family=Quicksand:wght@300;400&family=Raleway&family=Shantell+Sans:wght@300&display=swap"
        rel="stylesheet">

        <link rel="stylesheet" href="login.css">
        <link rel="icon" href="favicon.png">
    <title>Signup | MusPly</title>

</head>
<body>
    <form id="container" name="form" action="signup.php" method="post">
        
        <div id="cont1">
            <a href="#"><img class="favicon" src="favicon.png" alt="logo"></a>
            <h1>MusPly</h1>
            <div class="inp-txt" id="email">
                <input type="email" id="email" placeholder="E-mail" name="email" required>
            </div>
            <div class="inp-txt" id="pass">
                <input type="password" id="password" placeholder="Password" name="password" required>
            </div>
            <div id="submit">
                <input type="submit" id="btn" value="Signup" name = "submit"/>
            </div>
            <a href="connect.php">Click to Login</a>
        </div>
            </form>
</body>
</html>