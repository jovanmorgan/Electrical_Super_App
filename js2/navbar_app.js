const body = document.querySelector("body");
const nav = document.querySelector("nav");
const modeToggle = document.querySelector(".dark-light");
const searchToggle = document.querySelector(".searchToggle");
const sidebarOpen = document.querySelector(".sidebarOpen");
const sidebarClose = document.querySelector(".siderbarClose");
const menuTombol = document.querySelector(".menu-tombol");
const navLink = document.querySelector(".nav-links");
const bulat = document.querySelector('.bulat1');
const bulat2 = document.querySelector('.bulat2');

// Fungsi untuk mengatur posisi dan animasi rotasi bulat
function setBulatPosition(mode) {
    if (mode === "light-mode") {
        bulat.style.right = '77%';
        bulat.style.transform = 'rotate(0deg)'; // Rotasi ke 0 derajat
        bulat.style.transition = '3s all';
        bulat2.style.right = '70%';
        bulat2.style.transform = 'rotate(0deg)'; // Rotasi ke 0 derajat
        bulat2.style.transition = '3s all';
    } else {
        bulat.style.right = '-17%';
        bulat.style.transform = 'rotate(360deg)'; // Rotasi satu putaran (360 derajat)
        bulat.style.transition = '3s all';
        bulat2.style.right = '13%';
        bulat2.style.transform = 'rotate(360deg)'; // Rotasi satu putaran (360 derajat)
        bulat2.style.transition = '3s all';
    }
}

let getMode = localStorage.getItem("mode");
if (getMode) {
    body.classList.add(getMode);
    modeToggle.classList.toggle("active", getMode === "dark-mode");
    setBulatPosition(getMode);
} else {
    // Jika mode tidak tersimpan di localStorage, set default mode
    localStorage.setItem("mode", "light-mode");
    setBulatPosition("light-mode");
}

// Kode JavaScript untuk mengganti mode antara dark dan light
modeToggle.addEventListener("click", () => {
    body.classList.toggle("dark");
    const currentMode = body.classList.contains("dark") ? "dark-mode" : "light-mode";
    localStorage.setItem("mode", currentMode);
    modeToggle.classList.toggle("active", currentMode === "dark-mode");
    setBulatPosition(currentMode);
});

// Menyimpan posisi awal bulat saat pertama kali dimuat
let initialBulatPosition = localStorage.getItem("bulatPosition");
if (initialBulatPosition) {
    bulat.style.right = '77%';
    bulat.style.transform = 'rotate(0deg)'; // Rotasi ke 0 derajat
    bulat.style.transition = '3s all';
    bulat2.style.right = '70%';
    bulat2.style.transform = 'rotate(0deg)'; // Rotasi ke 0 derajat
    bulat2.style.transition = '3s all';
} else {
    // Jika belum ada posisi yang tersimpan, simpan posisi awal
    localStorage.setItem("bulatPosition", "77%");
}


// Kode JavaScript untuk mengaktifkan/menonaktifkan kotak pencarian
searchToggle.addEventListener("click", () => {
    searchToggle.classList.toggle("active");
});

menuTombol.addEventListener('click', function () {
    nav.classList.toggle('active');
    menuTombol.classList.toggle('active');
    navLink.classList.toggle('active');

    if (nav.classList.contains('active')) {
        menuTombol.style.zIndex = 131;
    } else {
        menuTombol.style.zIndex = 2;
    }

});



// conten ke 2 menugubah warna huruf dan gambar
function onThumbClick(imagePath, circleColor, titleText, paragraphText) {
    const circle = document.querySelector('.circle');
    const cir = document.querySelector('.cir');
    const title = document.getElementById('title');
    const paragraph = document.getElementById('paragraph');
    const img = document.querySelector('.funweb');

    circle.style.backgroundColor = `var(${circleColor})`;
    cir.style.backgroundColor = `var(${circleColor})`;
    title.innerHTML = titleText;
    paragraph.innerHTML = paragraphText;
    img.src = imagePath;
}


// membuat delai pada tombol li

// Cek apakah lebar layar kurang dari atau sama dengan 950px
function isMobile() {
    return window.matchMedia('(max-width: 950px)').matches;
}

function addScrollListenerToElement(elementId) {
    document.getElementById(elementId).addEventListener('click', function () {
        const targetElement = document.getElementById('target');
        const delay = 650; // Delay dalam milidetik (6 mili detik)

        if (targetElement) {
            setTimeout(function () {
                targetElement.scrollIntoView({
                    behavior: 'smooth'
                });
            }, delay);
        }
    });
}

document.addEventListener('DOMContentLoaded', function () {
    if (isMobile()) {
        addScrollListenerToElement('scrollLink1');
        addScrollListenerToElement('scrollLink2');
        addScrollListenerToElement('scrollLink3');
    }
});


// buat perbagus halaman navbar 

// Membuat elemen span yang tidak terlihat
var hiddenSpan = document.createElement("span");
hiddenSpan.style.visibility = "hidden";
hiddenSpan.style.position = "absolute";
hiddenSpan.style.fontSize = "15px"; // Sesuaikan dengan ukuran font yang Anda gunakan
hiddenSpan.textContent = "HOME";
document.body.appendChild(hiddenSpan);

// Mengukur lebar huruf
var letterWidth = hiddenSpan.clientWidth;

// Menghapus elemen span yang tidak terlihat
document.body.removeChild(hiddenSpan);

// Mendapatkan nama halaman saat ini
var currentPath = window.location.pathname;
var currentPage = currentPath.split("/").pop();

// Daftar halaman dan warna yang sesuai
var pageLinks = {
    'staf_user.php': 'home-link', // HOME
    'staf_kegiatan.php': 'kegiatan-link', // MENU
    'staf_status.php': 'status-link', // MENU
    'staf_berita.php': 'berita-link', // PESANAN
    'staf_akun.php': 'akun-link', // RIWAYAT PEMESANAN
    'logout.php': 'logout-link' // LOGOUT PEMESANAN
};

// Mengubah warna teks link dan menambahkan kelas 'active-link' pada link yang aktif
if (pageLinks[currentPage]) {
    var activeLinkId = pageLinks[currentPage];
    var activeLink = document.getElementById(activeLinkId);
    activeLink.style.color = '#ff9853'; // Ganti dengan warna yang diinginkan
    activeLink.classList.add('active-link'); // Tambahkan kelas 'active-link' pada link yang aktif

    // Menyesuaikan lebar 'before' sesuai dengan lebar huruf
    var beforeElement = activeLink.querySelector('::before');
    beforeElement.style.width = letterWidth + "px";
    beforeElement.style.left = "50%";
    beforeElement.style.transform = "translateX(-50%)"; // Pusatkan elemen ::before
}