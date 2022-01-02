<?php
    include "koneksi.php"; // memanggil file koneksi.php

    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $alamat = $_POST['alamat'];

    // menambahkan data nama, kelas dana alamat
    $sql = "INSERT into data(nama, kelas, alamat) VALUES ('$nama', '$kelas', '$alamat')";
    $add = $conn->query($sql);


    if($add) {
        $conn->close();
        header("location:index.php"); //jika berhasil ditambahakan akan langsung ditampilkan di file index.php
        exit();
    } else {
        echo "Error : ".$conn->error;
        $conn->close();
        exit();
    }
    