<?php
    include_once("dbkoneksi2.php");
    
    $r["berhasil"] = false;
    if(isset($_POST["id"])){
        $ID=$_POST["id"];
        
        $sql = "DELETE FROM dosen WHERE ID='".$ID."'";
        
        mysqli_query($cnn, $sql);
        $r["berhasil"]= true;
    }
    echo json_encode($r);
