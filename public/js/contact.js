var cnt = 0;

function hide_message() {
    if (cnt == 0) {
        location.href = "#meg";
    }
    if (cnt == 6) {
        document.getElementById("meg").outerHTML = "";
    }
    cnt++;
    setTimeout(hide_message, 2000);
}