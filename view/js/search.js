function showResult(str) {
    if (str.length == 0) {
        document.getElementById("search").innerHTML = "";
        document.getElementById("search").style.border = "0px";
        return;
    }
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("search").innerHTML = this.responseText;
            document.getElementById("search").style.border = "1px solid #A5ACB2";
        }
    };
    xmlhttp.open("GET", "search/" + str, true);
    xmlhttp.send();
    // 127.0 .0 .1 / Project /
}