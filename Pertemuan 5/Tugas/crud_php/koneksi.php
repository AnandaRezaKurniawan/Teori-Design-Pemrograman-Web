<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "php_crud"; //memanggil database di localhost xampp

    $conn = new mysqli($host,$user,$pass,$dbname);
    // Check connection
    if($conn->connect_error) {
        die('Koneksi Gagal : '. $conn->connect_error);
    }
?>