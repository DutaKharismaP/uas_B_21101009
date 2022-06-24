<?php
    include_once("dbkoneksi2.php");

    $r["berhasil"] = false;
    if(isset($_POST["nim"])){
        $NIM = $_POST["nim"];
        $NAMA = $_POST["nama"];
        $JURUSAN = $_POST["jurusan"];
        $JK = $_POST["jkel"];
        $TGLLAHIR = $_POST["tgl"];

        $sql = "INSERT INTO mahasiswa(NIM, NAMA, JURUSAN, JK, TGLLAHIR) 
            VALUES('$NIM', '$NAMA', '$JURUSAN', '$JK', '$TGLLAHIR');";
        
        mysqli_query($cnn, $sql);
        $r["berhasil"]= true;
    }
    echo json_encode($r);