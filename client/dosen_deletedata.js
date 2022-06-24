function hapusdata() {
    let id = document.getElementById("txid").value;

    let data = "id=" + id;
    const gh = new XMLHttpRequest();
    gh.open("POST", "http://localhost/UAS/server/dtdosen_delete.php");
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