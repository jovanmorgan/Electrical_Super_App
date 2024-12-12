	const sessionTimeout = 20 * 1000; // Waktu sesi dalam milidetik (20 detik)
	let sessionTimer;


	// Atur ulang timeout saat pengguna berpindah ke tab lain atau browser lain
	document.addEventListener("visibilitychange", function () {
		if (document.visibilityState === "hidden") {

			// Fungsi untuk mengarahkan ke halaman login
			function redirectToLogin() {
				// Redirect ke halaman login
				window.location.href = "login.php"; // Ganti dengan URL halaman login Anda
			}

			// Fungsi untuk menampilkan pesan sesi timeout
			function showSessionTimeoutMessage() {
				alert("Sesi Anda telah berakhir. Silakan login kembali.");
				redirectToLogin();
			}

			// Fungsi untuk mengatur ulang timeout sesi jika tab kembali aktif
			function resetSessionTimeout() {
				clearTimeout(sessionTimer);
				sessionTimer = setTimeout(showSessionTimeoutMessage, sessionTimeout);
			}

			// Atur timeout sesi saat halaman dimuat
			sessionTimer = setTimeout(showSessionTimeoutMessage, sessionTimeout);


			// Simpan timestamp saat tab menjadi tidak aktif
			const tabInactiveTimestamp = Date.now();

			// Cek apakah tab telah kembali aktif
			const checkTabActive = function () {
				if (document.visibilityState === "visible") {
					// Hitung berapa waktu tab tidak aktif
					const tabInactiveDuration = Date.now() - tabInactiveTimestamp;

					// Jika tab tidak aktif kurang dari sessionTimeout, atur ulang timeout sesi
					if (tabInactiveDuration < sessionTimeout) {
						resetSessionTimeout();
					}
				}
			};

			// Tambahkan event listener untuk memeriksa kembali tab aktif
			document.addEventListener("visibilitychange", checkTabActive, {
				once: true
			});
		}
	});