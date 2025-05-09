<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "webPHP";

    $conn = new mysqli($servername, $username, $password, $dbname);
    mysqli_query($conn, "SET NAMES 'utf8'");




?>