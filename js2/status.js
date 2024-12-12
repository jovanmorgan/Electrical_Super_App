document.addEventListener("DOMContentLoaded", function () {
    var statusElements = document.querySelectorAll(".status b");

    statusElements.forEach(function (element) {
        var statusText = element.innerText.trim();
        var parentElement = element.closest("td").querySelector(".btn"); // Temukan elemen <a> yang mengelilingi <b>

        if (statusText === "Pesanan Berhasil") {
            parentElement.classList.add("btn-success");
        } else if (statusText === "Pesanan Ditinjau") {
            parentElement.classList.add("btn-warning");
        } else if (statusText === "Pesanan Gagal") {
            parentElement.classList.add("btn-danger");
        }
    });
});