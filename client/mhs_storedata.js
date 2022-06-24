function simpandata() {
    let nim = document.getElementById("txnim").value;
    let nama = document.getElementById("txnama").value;
    let tgl = document.getElementById("txtglahir").value;
    let jkel = document.getElementById("txjkel").value;
    let jur = document.getElementById("txjur").value;

    let data = "nim=" + nim + "&nama=" + nama + "&jurusan=" + jur + "&jkel=" + jkel + "&tgl=" + tgl;
    const gh = new XMLHttpRequest();
    gh.open("POST", "http://localhost/UAS/server/dtmhs_store.php");
    gh.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    gh.send(data);

    gh.onload = function () {
        const data = JSON.parse(this.responseText);
        if (data["berhasil"]) {
            document.getElementById("pesan").style.display = "block";
        }
        setTimeout(() => {
            window.location.href = "http://localhost/UAS/client/index.php?p=mahasiswa";
        }, 2500);
    }

}