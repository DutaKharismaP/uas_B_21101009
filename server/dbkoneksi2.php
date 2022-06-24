<?php
    include_once("konfigurasi.php");

    $cnn = mysqli_connect(DBHOST,DBUSER,DBPASCODE,DBNAME,DBPORT) 
        or die("Koneksi ke DBMS Mysql Gagal<br>");