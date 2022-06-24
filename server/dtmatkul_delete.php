<?php
    include_once("dbkoneksi2.php");
    
    $r["berhasil"] = false;
    if(isset($_POST["kdmatkul"])){
        $KDMATKUL=$_POST["kdmatkul"];
        
        $sql = "DELETE FROM matkul WHERE KDMATKUL='".$KDMATKUL."'";
        
        mysqli_query($cnn, $sql);
        $r["berhasil"]= true;
    }
    echo json_encode($r);