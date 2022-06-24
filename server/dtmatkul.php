<?php
include_once("dbkoneksi2.php");
   $sql = "SELECT KDMATKUL, NAMAMATKUL, SKS FROM matkul";
   $hasil = mysqli_query($cnn, $sql);
   $output = mysqli_fetch_all($hasil);
   echo json_encode($output);