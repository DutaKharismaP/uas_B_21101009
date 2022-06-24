<?php
    include_once("dbkoneksi1.php");
    if($cnn){
        $sql = "CREATE DATABASE instikitercinta;";

        $hsl = mysqli_query($cnn,$sql);
        if($hsl){
            echo "Database instikitercinta <strong>Berhasi</strong> dibuat<br>";
        }else{
            echo "Database instikitercinta <strong>Gagal</strong> dibuat<br>";
        }
        mysqli_close($cnn);
    }