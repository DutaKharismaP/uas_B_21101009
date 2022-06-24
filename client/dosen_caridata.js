let qs = window.location.search;
let urlP = new URLSearchParams(qs);
let id = urlP.get("id");

let urltarget = new URL("http://localhost/UAS/server/dtdosen_id.php");
urltarget.searchParams.set("id", id);

const gh = new XMLHttpRequest();
gh.open("GET", urltarget);
gh.send();

gh.onload = function(){
    const data = JSON.parse(this.responseText);
    console.log(data["isi"]);
    for (i = 0; i < data["isi"].length; i++){
        document.getElementById("txid").value = data["isi"][i][0];
        document.getElementById("txnama").value = data["isi"][i][1];
        document.getElementById("txgelar").value = data["isi"][i][2];
        document.getElementById("txalamat").value = data["isi"][i][3];
    }
}