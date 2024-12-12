document.addEventListener("DOMContentLoaded", function () {
    const loadingOverlay = document.getElementById("loadingOverlay");

    // Fungsi untuk menampilkan overlay loading
    function showLoadingOverlay() {
        loadingOverlay.style.display = "flex";
    }

    // Fungsi untuk menyembunyikan overlay loading
    function hideLoadingOverlay() {
        loadingOverlay.style.display = "none";
    }

    // Fungsi untuk mengeksekusi aksi yang memerlukan loading
    function performLoadingAction() {
        showLoadingOverlay();
        setTimeout(() => {
            hideLoadingOverlay();
        }, 1000); // Ganti angka 3000 dengan waktu loading yang sesuai
    }

    // Tambahkan event listener untuk setiap tautan di navbar
    const navLinks = document.querySelectorAll("nav ul li a");
    navLinks.forEach(link => {
        link.addEventListener("click", performLoadingAction);
    });

    // Tambahkan event listener untuk tombol atau kejadian lainnya yang memerlukan loading
    const myButton = document.getElementById("myButton"); // Ganti dengan ID tombol Anda
    if (myButton) {
        myButton.addEventListener("click", performLoadingAction);
    }

    // Event listener untuk saat halaman dimuat ulang
    window.addEventListener("beforeunload", () => {
        showLoadingOverlay();
    });
});