function showError(inputId, message) {
    var errorMessage = document.getElementById("error-message");
    errorMessage.innerHTML = message;
    errorMessage.style.display = "block";
    document.getElementById(inputId).focus();
}

function validateUsername(username) {
    var usernamePattern = /^\d+-[a-zA-Z]+$/; // Perbaiki pola regex untuk mengizinkan lebih dari satu huruf

    if (!usernamePattern.test(username)) {
        showError("user", 'Username harus diawali dengan maximal 6 angka dan diikuti oleh tanda "-" dan setidaknya 1 huruf. contoh : 1593152-W ');
    } else {
        var parts = username.split('-');
        var numberPart = parts[0];
        var letterPart = parts[1];

        if (numberPart.length < 6) {
            showError("user", 'Angka di username harus setidaknya 6 angka.');
        } else if (letterPart.length !== 1) {
            showError("user", 'Setelah tanda "-" hanya diizinkan satu huruf.');
        } else {
            // Panggil fungsi untuk memeriksa username dalam database
            checkUsernameAvailability(username);
        }
    }
}

function validatePassword(password) {
    if (password.length < 8) {
        showError("pass", 'Password harus lebih dari 7 karakter');
    } else if (!/(?=.*[a-z])(?=.*[A-Z])(?=.*\d)/.test(password)) {
        showError("pass", 'Password hanya boleh mengandung setidaknya satu huruf kecil, satu huruf besar, dan satu angka');
    } else {
        document.getElementById("error-message").style.display = "none";
    }
}

function validateEmail(email) {
    if (email === "" || !/^\S+@\S+\.\S+$/.test(email)) {
        showError("inputEmail", 'Format email tidak valid atau email tidak diisi');
    } else {
        document.getElementById("error-message").style.display = "none";
    }
}

// Fungsi untuk memeriksa ketersediaan username dalam database
function checkUsernameAvailability(username) {
    // Lakukan permintaan AJAX untuk memeriksa username dalam database
    $.ajax({
        url: 'check_u.php', // Ganti dengan URL yang benar
        method: 'POST',
        data: {
            username: username
        },
        success: function (response) {
            if (response === 'exist') {
                showError("user", 'Username sudah terdaftar. Gunakan username lain.');
            } else {
                document.getElementById("username-error").style.display = "none";
            }
        }
    });
}

// Fungsi untuk memeriksa ketersediaan email dalam database
function checkEmailAvailability(email) {
    // Lakukan permintaan AJAX untuk memeriksa email dalam database
    $.ajax({
        url: 'check_email.php', // Ganti dengan URL yang benar
        method: 'POST',
        data: {
            email: email
        },
        success: function (response) {
            if (response === 'exist') {
                showError("inputEmail", 'Email sudah terdaftar. Gunakan email lain.');
            } else {
                document.getElementById("email-error").style.display = "none";
            }
        }
    });
}