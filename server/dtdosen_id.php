<?php
$output["error"] = true;

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    include_once("dbkoneksi2.php");
    $sql = "SELECT ID, NAMA, GELAR, ALAMAT FROM dosen WHERE ID='".$id."';";
    $hsl = mysqli_query($cnn, $sql);
    $output["isi"] = mysqli_fetch_all($hsl);
    $output["error"] = false;
}

echo json_encode($output);

