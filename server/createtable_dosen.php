<?php
    include_once("dbkoneksi2.php");
    $sql = "CREATE TABLE dosen(
        ID varchar(20) PRIMARY KEY,
        NAMA varchar(40),
        GELAR  enum('S2','S3'),
        ALAMAT varchar(50)
    );";

    $hsl = mysqli_query($cnn, $sql);

    if($hsl){
        echo "Tabel dosen <strong>Berhasi</strong> dibuat<br>";
    }else{
        echo "Tabel dosen <strong>Gagal</strong> dibuat<br>";
    }
    mysqli_close($cnn);