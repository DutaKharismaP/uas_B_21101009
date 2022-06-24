<div id="konten"></div>

<script>
    const gh = new XMLHttpRequest();
    gh.open("GET", "http://localhost/UAS/server/dtdosen.php");
    gh.send();

    gh.onload = function() {
        const data = JSON.parse(this.responseText);
        var tx = '<h2 class="mt-4 mb-3 text-center">DATA DOSEN</h2>';
        tx += '<table class="table table-hover table-white align-middle text-center"><thead class="table-warning align-middle"><tr class="text-center border-2"><th scope="col">NO</th><th scope="col">ID</th><th scope="col">NAMA</th><th scope="col">GELAR</th><th scope="col">ALAMAT</th><th scope="col"><a href="index.php?p=dosen&sp=insertdata" class="btn btn-primary">TAMBAH DATA</a></th></tr></thead></tbody>';

        let nomor = 1;
        for (i = 0; i < data.length; i++) {
            let gelar = "S2";
            if (data[i][2] == "S3"){
                gelar = "S3";
            }
            tx += '<tr>';
            tx += '  <th scope="row">' + nomor + '</th>';
            tx += '  <td>' + data[i][0] + '</td>';
            tx += '  <td>' + data[i][1] + '</td>';
            tx += '  <td>' + gelar + '</td>';
            tx += '  <td>' + data[i][3] + '</td>';
            tx += '  <td> ';
            tx += '<a href="index.php?p=dosen&sp=editdata&id=' + data[i][0] + '" class="btn btn-success">EDIT</a> ';
            tx += '<a href="index.php?p=dosen&sp=deletedata&id=' + data[i][0] + '" class="btn btn-danger">HAPUS</a> ';
            tx += '</td>';
            tx += '</tr>';
            nomor++;
        }
        tx += '  </tbody></table>';

        document.getElementById("konten").innerHTML = tx;
    }
</script>