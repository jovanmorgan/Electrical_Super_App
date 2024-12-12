// JavaScript untuk menutup pop-up
document.getElementById("closeSuccessModal").addEventListener("click", function () {
    document.getElementById("loginSuccessModal").style.display = "none";
});

document.getElementById("closeFailureModal").addEventListener("click", function () {
    document.getElementById("loginFailureModal").style.display = "none";
});


setTimeout(function () {
    document.getElementById("gif1").style.animation = "none";
    document.getElementById("gif2").style.animation = "none";
}, 1000);