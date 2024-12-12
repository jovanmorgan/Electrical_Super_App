// service-worker.js
self.addEventListener('push', function (event) {
    var options = {
        body: event.data.text(),
        icon: 'images/7.png', // Gantilah dengan path ke ikon notifikasi
    };

    event.waitUntil(
        self.registration.showNotification('Judul Pemberitahuan', options)
    );
});