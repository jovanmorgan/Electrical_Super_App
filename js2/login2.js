function showError(inputId, message) {
    var errorMessage = document.getElementById("error-message");
    errorMessage.innerHTML = message;
    errorMessage.style.display = "block";
    document.getElementById(inputId).focus();
}

function validateUsername(username) {
    var usernamePattern = /^\d+-[a-zA-Z]$/;

    if (!usernamePattern.test(username)) {
        showError("user", 'Username harus diawali dengan maximal 6 angka setelah itu diikuti oleh tanda "-" dan diakhiri dengan 1 huruf. contoh : 1593152-W ');
    } else {
        var parts = username.split('-');
        var numberPart = parts[0];
        var letterPart = parts[1];

        if (numberPart.length < 6) {
            showError("user", 'Angka di username harus setidaknya 6 angka.');
        } else if (letterPart.length !== 1) {
            showError("user", 'Setelah tanda "-" hanya diizinkan satu huruf.');
        } else {
            document.getElementById("error-message").style.display = "none";
        }
    }
}

function validatePassword(password) {
    if (password.length < 8) {
        showError("pass", 'Password harus lebih dari 7 karakter');
    } else if (!/(?=.*[a-z])(?=.*[A-Z])(?=.*\d)/.test(password)) {
        showError("pass", 'Password anda salah, password hanya boleh mengandung setidaknya satu huruf kecil, satu huruf besar, dan satu angka');
    } else {
        document.getElementById("error-message").style.display = "none";
    }
}