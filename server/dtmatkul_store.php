<?php
    include_once("dbkoneksi2.php");

    $r["berhasil"] = false;
    if(isset($_POST["kdmatkul"])){
        $KDMATKUL = $_POST["kdmatkul"];
        $NAMAMATKUL = $_POST["namamatkul"];
        $SKS = $_POST["sks"];

        $sql = "INSERT INTO matkul(KDMATKUL, NAMAMATKUL, SKS) 
            VALUES('$KDMATKUL', '$NAMAMATKUL', '$SKS');";
        
        mysqli_query($cnn, $sql);
        $r["berhasil"]= true;
    }
    echo json_encode($r);