<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "musply";
    $conn = new mysqli($servername, $username, $password, $db_name);
    if($conn->connect_error) {
        die("Connectiion failed".$conn->connect_error);
    }
    echo "";
?>