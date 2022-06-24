<?php
    include_once("konfigurasi.php");

    $cnn = mysqli_connect(DBHOST,DBUSER,DBPASCODE) or die("Koneksi ke DBMS Mysql Gagal<br>");
    echo "Koneksi ke DBMS Mysql Berhasil <br>";