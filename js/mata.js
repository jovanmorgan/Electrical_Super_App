function togglePasswordVisibility() {
    var passwordInput = document.getElementById("pass");
    var visibilityToggle = document.getElementById("togglePasswordVisibility");

    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        visibilityToggle.innerHTML = '<i class="fas fa-eye-slash"></i>';
    } else {
        passwordInput.type = "password";
        visibilityToggle.innerHTML = '<i class="fas fa-eye"></i>';
    }
}