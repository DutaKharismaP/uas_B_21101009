function hapusdata() {
    let kdmatkul = document.getElementById("txkdmatkul").value;

    let data = "kdmatkul=" + kdmatkul;
    const gh = new XMLHttpRequest();
    gh.open("POST", "http://localhost/UAS/server/dtmatkul_delete.php");
    gh.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    gh.send(data);

    gh.onload = function () {
        const data = JSON.parse(this.responseText);
        if (data["berhasil"]) {
            document.getElementById("pesan").style.display = "block";
        }
        setTimeout(() => {
            window.location.href = "http://localhost/UAS/client/index.php?p=matkul";
        }, 2500);
    }

}