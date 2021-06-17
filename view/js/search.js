function showResult(str) {
    if (str.length == 0) {
        document.getElementById("search").innerHTML = "";
        document.getElementById("search").style.border = "1px";
        return;
    }
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.response);
            document.getElementById("dcm").innerHTML = this.response;
            document.getElementById("dcm").style.border = "3px solid #A5ACB2";
        }
    };
    xhttp.open("GET", "search/" + str, true);
    xhttp.send();
    console.log(xhttp);
    // 127.0 .0 .1 / Project /
}