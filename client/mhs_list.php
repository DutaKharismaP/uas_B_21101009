<div id="konten"></div>

<script>
    const gh = new XMLHttpRequest();
    gh.open("GET", "http://localhost/UAS/server/dtmhs.php");
    gh.send();

    gh.onload = function() {
        const data = JSON.parse(this.responseText);
        var tx = '<h2 class="mt-4 mb-3 text-center">DATA MAHASISWA</h2>';
        tx += '<table class="table table-hover table-white align-middle text-center"><thead class="table-warning align-middle"><tr class="text-center border-2"><th scope="col">NO</th><th scope="col">NIM</th><th scope="col">NAMA LENGKAP</th><th scope="col">JENIS KELAMIN</th><th scope="col">JURUSAN</th><th scope="col">TANGGAL LAHIR</th><th scope="col"><a href="index.php?p=mahasiswa&sp=insertdata" class="btn btn-primary">TAMBAH DATA</a></th></tr></thead></tbody>';

        let nomor = 1;
        for (i = 0; i < data.length; i++) {
            let jkel = "Laki-Laki";
            if (data[i][3] == "P") {
                jkel = "Perempuan";
            }
            tx += '<tr>';
            tx += '  <th scope="row">' + nomor + '</th>';
            tx += '  <td>' + data[i][0] + '</td>';
            tx += '  <td>' + data[i][1] + '</td>';
            tx += '  <td>' + jkel + '</td>';
            tx += '  <td>' + data[i][2] + '</td>';
            tx += '  <td>' + data[i][4] + '</td>';
            tx += '  <td> ';
            tx += '<a href="index.php?p=mahasiswa&sp=editdata&nim=' + data[i][0] + '" class="btn btn-success">EDIT</a> ';
            tx += '<a href="index.php?p=mahasiswa&sp=deletedata&nim=' + data[i][0] + '" class="btn btn-danger">HAPUS</a> ';
            tx += '</td>';
            tx += '</tr>';
            nomor++;
        }
        tx += '</tbody></table>';

        document.getElementById("konten").innerHTML = tx;
    }
</script>