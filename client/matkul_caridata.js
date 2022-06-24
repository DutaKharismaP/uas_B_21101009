let qs = window.location.search;
let urlP = new URLSearchParams(qs);
let kdmatkul = urlP.get("kdmatkul");

let urltarget = new URL("http://localhost/UAS/server/dtmatkul_kode.php");
urltarget.searchParams.set("kdmatkul", kdmatkul);

const gh = new XMLHttpRequest();
gh.open("GET", urltarget);
gh.send();

gh.onload = function () {
    const data = JSON.parse(this.responseText);
    console.log(data["isi"]);
    for (i = 0; i < data["isi"].length; i++) {
        document.getElementById("txkdmatkul").value = data["isi"][i][0];
        document.getElementById("txnamamatkul").value = data["isi"][i][1];
        document.getElementById("txsks").value = data["isi"][i][2];
    }

}