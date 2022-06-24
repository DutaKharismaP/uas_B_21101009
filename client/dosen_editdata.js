function editdata() {
    let id = document.getElementById("txid").value;
    let nama = document.getElementById("txnama").value;
    let gelar = document.getElementById("txgelar").value;
    let alamat = document.getElementById("txalamat").value;

    let data = "id=" + id + "&nama=" + nama + "&gelar=" + gelar + "&alamat=" + alamat;
    const gh = new XMLHttpRequest();
    gh.open("POST", "http://localhost/UAS/server/dtdosen_edit.php");
    gh.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    gh.send(data);

    gh.onload = function () {
        const data = JSON.parse(this.responseText);
        if (data["berhasil"]) {
            document.getElementById("pesan").style.display = "block";
        }
        setTimeout(() => {
            window.location.href = "http://localhost/UAS/client/index.php?p=dosen";
        }, 2500);
    }

}