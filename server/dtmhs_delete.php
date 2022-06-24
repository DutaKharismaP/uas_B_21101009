<?php
    include_once("dbkoneksi2.php");
    
    $r["berhasil"] = false;
    if(isset($_POST["nim"])){
        $NIM=$_POST["nim"];
        
        $sql = "DELETE FROM mahasiswa WHERE NIM='".$NIM."'";
        
        mysqli_query($cnn, $sql);
        $r["berhasil"]= true;
    }
    echo json_encode($r);