<?php
    include_once("dbkoneksi2.php");
    $sql = "CREATE TABLE matkul(
        KDMATKUL varchar(10) PRIMARY KEY,
        NAMAMATKUL varchar(20),
        SKS enum('2','3')
    );";

    $hsl = mysqli_query($cnn, $sql);

    if($hsl){
        echo "Tabel matakuliah <strong>Berhasi</strong> dibuat<br>";
    }else{
        echo "Tabel matakuliah <strong>Gagal</strong> dibuat<br>";
    }
    mysqli_close($cnn);