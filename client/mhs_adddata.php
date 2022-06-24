<h3 class="mt-4 mb-3 fw-bold">TAMBAH DATA MAHASISWA</h3>
<div class="alert alert-success" role="alert" id="pesan"><strong>Data berhasil ditambahkan</strong></div>

<form>
    <div class="mb-3">
        <label class="form-label">NIM</label>
        <input type="text" class="form-control" id="txnim" placeholder="Masukan NIM">
    </div>
    <div class="mb-3">
        <label class="form-label">Nama Mahasiswa</label>
        <input type="text" class="form-control" id="txnama" placeholder="Masukan Nama ">
    </div>
    <div class="mb-3">
        <label class="form-label">Tgl Lahir</label>
        <input type="date" class="form-control" id="txtglahir" placeholder="Masukan Tanggal Lahir">
    </div>
    <div class="mb-3">
        <label class="form-label">Jenis Kelamin</label>
        <select id="txjkel" class="form-select">
            <option value="L"> Laki-Laki </option>
            <option value="P"> Perempuan </option>
        </select>
    </div>
    <div class="mb-3">
        <label class="form-label">Jurusan</label>
        <select id="txjur" class="form-select">
            <option value="MTI"> TI-MTI </option>
            <option value="DGM"> TI-DGM </option>
            <option value="KAB"> TI-KAB </option>
            <option value="SK"> SK </option>
        </select>
    </div>
    <div class="mb-3">
        <label class="form-label"></label>
        <button type="button" onclick="simpandata()" class="btn btn-primary">Simpan Data</button>
        <button type="button" onclick="batal()" class="btn btn-secondary"> Batal </button>
    </div>
</form>
<script>
    document.getElementById("pesan").style.display = "none";
    function batal() {
        location.replace("http://localhost/UAS/client/index.php?p=mahasiswa")
    }
</script>
<script src="mhs_storedata.js"></script>