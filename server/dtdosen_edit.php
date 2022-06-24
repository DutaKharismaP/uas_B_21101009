<?php
    include_once("dbkoneksi2.php");
    
    $r["berhasil"] = false;
    if(isset($_POST["id"])){
        $ID = $_POST["id"];
        $NAMA = $_POST["nama"];
        $GELAR = $_POST["gelar"];
        $ALAMAT = $_POST["alamat"];

        $sql = "UPDATE dosen SET 
            NAMA='".$NAMA."',
            GELAR='".$GELAR."',
            ALAMAT='".$ALAMAT."' 
            WHERE ID='".$ID."'";
        
        mysqli_query($cnn, $sql);
        $r["berhasil"]= true;
    }
    echo json_encode($r);