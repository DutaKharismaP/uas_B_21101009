<?php
if (isset($_GET["p"])) {
    if ($_GET["p"] === "beranda") {
        $APage = "active";
        $pg = "beranda.php";
        $TPage = "Beranda";
    }
    if ($_GET["p"] === "mahasiswa") {
        $MhsPage = "active";
        if (isset($_GET["sp"])) {
            if ($_GET["sp"] == "insertdata") {
                $pg = "mhs_adddata.php";
                $TPage = "Tambah Data Mahasiswa";
            }
            if ($_GET["sp"] == "editdata") {
                $pg = "mhs_editdata.php";
                $TPage = "Edit Data Mahasiswa";
            }
            if ($_GET["sp"] == "deletedata") {
                $pg = "mhs_deletedata.php";
                $TPage = "Hapus Data Mahasiswa";
            }
        } else {
            $pg = "mhs_list.php";
            $TPage = "Data Mahasiswa";
        }
    }
    if ($_GET["p"] === "dosen") {
        $DsnPage = "active";
        if (isset($_GET["sp"])) {
            if ($_GET["sp"] == "insertdata") {
                $pg = "dosen_adddata.php";
                $TPage = "Tambah Data Dosen";
            }
            if ($_GET["sp"] == "editdata") {
                $pg = "dosen_editdata.php";
                $TPage = "Edit Data Dosen";
            }
            if ($_GET["sp"] == "deletedata") {
                $pg = "dosen_deletedata.php";
                $TPage = "Hapus Data Dosen";
            }
        } else {
            $pg = "dosen_list.php";
            $TPage = "Data Dosen";
        }
    }
    if ($_GET["p"] === "matkul") {
        $MkPage = "active";
        if (isset($_GET["sp"])) {
            if ($_GET["sp"] == "tambahdata") {
                $pg = "matkul_adddata.php";
                $TPage = "Tambah Data Mata Kuliah";
            }
            if ($_GET["sp"] == "editdata") {
                $pg = "matkul_editdata.php";
                $TPage = "Edit Data Mata Kuliah";
            }
            if ($_GET["sp"] == "deletedata") {
                $pg = "matkul_deletedata.php";
                $TPage = "Hapus Data Mata Kuliah";
            }
        } else {
            $pg = "matkul_list.php";
            $TPage = "Data Mata Kuliah";
        }
    }
}else{
    $APage = "active";
    $pg = "beranda.php";
    $TPage = "Beranda";
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $TPage; ?></title>
    <!-- CDN CSS BOOTSRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #39A2DB;">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link fw-bold px-2 mx-3 <?=$APage;?>" aria-current="page" href="index.php?p=beranda">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold px-2 mx-3 <?=$MhsPage;?>" href="index.php?p=mahasiswa">Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold px-2 mx-3 <?=$DsnPage;?>" href="index.php?p=dosen">Dosen</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link fw-bold px-2 mx-3 <?=$MkPage;?>" href="index.php?p=matkul">Mata Kuliah</a>
                    </li>
                    </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <?php
        include_once($pg);
        ?>
    </div>

</body>

</html>