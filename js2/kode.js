// Kode JavaScript
document.addEventListener("DOMContentLoaded", function () {
    const adminRadio = document.getElementById("adminRadio");
    const userRadio = document.getElementById("userRadio");

    adminRadio.addEventListener("change", function () {
        // Periksa apakah tombol radio "admin" dipilih
        if (adminRadio.checked) {
            // Minta pengguna memasukkan kode admin
            const adminCode = prompt("Masukkan kode admin (6 digit):");

            // Periksa apakah kode admin benar
            if (adminCode === "120602") {
                // Kode admin benar, lanjutkan dengan registrasi admin
                alert("Kode admin benar.");
            } else {
                // Kode admin salah, beralih ke tombol radio "user" dan tampilkan peringatan
                adminRadio.checked = false;
                userRadio.checked = true;
                alert("Kode admin salah. Berpindah ke registrasi user.");
            }
        }
    });
});