var timer = document.getElementById("timer");
var duration = 30;
setInterval(updateTimer, 2000);

function updateTimer() {

    duration--;
    if (duration < 1) {
        window.location = "qr_code_page.html";
    } else {
        timer.innerText = duration;
    }
}