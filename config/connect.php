<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "web_quiz";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
    }
    echo "Kết nối thành công";
?>