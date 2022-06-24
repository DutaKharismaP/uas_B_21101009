<h3 class="mt-4 mb-3 fw-bold">TAMBAH DATA MATA KULIAH</h3>
<div class="alert alert-success" role="alert" id="pesan"><strong>Data berhasil ditambahkan</strong></div>

<form>
    <div class="mb-3">
        <label class="form-label">Kode Mata Kuliah</label>
        <input type="text" class="form-control" id="txkdmatkul" placeholder="Isikan Kode Mata Kuliah">
    </div>
    <div class="mb-3">
        <label class="form-label">Nama Mata Kuliah</label>
        <input type="text" class="form-control" id="txnamamatkul" placeholder="Isikan Nama Mata Kuliah">
    </div>
    <div class="mb-3">
        <label class="form-label">SKS</label>
        <select id="txsks" class="form-select">
            <option value="2"> 2 </option>
            <option value="3"> 3 </option>
        </select>
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
        location.replace("http://localhost/UAS/client/index.php?p=matkul")
    }
</script>
<script src="matkul_storedata.js"></script>