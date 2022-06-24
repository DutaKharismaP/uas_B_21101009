<h3 class="mt-4 mb-3 fw-bold ">TAMBAH DATA DOSEN</h3>
<div class="alert alert-success" role="alert" id="pesan"><strong>Data berhasil ditambahkan</strong></div>

<form>
    <div class="mb-3">
        <label class="form-label">ID</label>
        <input type="text" class="form-control" id="txid" placeholder="Masukan ID">
    </div>
    <div class="mb-3">
        <label class="form-label">Nama Dosen</label>
        <input type="text" class="form-control" id="txnama" placeholder="Masukan Nama">
    </div>
    <div class="mb-3">
    <label class="form-label">Gelar</label>
        <select id="txgelar" class="form-select">
            <option value="S2"> S2 </option>
            <option value="S3"> S3 </option>
        </select>
    </div>
    <div class="mb-3">
        <label class="form-label">Alamat</label>
        <input type="text" class="form-control" id="txalamat" placeholder="Isikan Alamat">
    </div>
    <div class="mb-3">
        <label class="form-label"></label>
        <button type="button" onclick="simpandata()" class="btn btn-primary">Simpan</button>
        <button type="button" onclick="batal()" class="btn btn-secondary"> Batal </button>
    </div>
</form>
<script>
    document.getElementById("pesan").style.display = "none";
    function batal() {
        location.replace("http://localhost/UAS/client/index.php?p=dosen")
    }
</script>
<script src="dosen_storedata.js"></script>