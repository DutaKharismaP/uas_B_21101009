<?php
$output["error"] = true;

if (isset($_GET["kdmatkul"])) {
    $kdmatkul = $_GET["kdmatkul"];

    include_once("dbkoneksi2.php");
    $sql = "SELECT KDMATKUL, NAMAMATKUL, SKS FROM matkul WHERE KDMATKUL='" . $kdmatkul . "';";
    $hsl = mysqli_query($cnn, $sql);
    $output["isi"] = mysqli_fetch_all($hsl);
    $output["error"] = false;
}

echo json_encode($output);