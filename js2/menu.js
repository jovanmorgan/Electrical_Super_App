$(document).ready(function () {
    $('.buy-button').on('click', function () {
        var id_menu = $(this).data('id');
        var nama_menu = $(this).data('nama');
        var modal = $('#exampleModal');

        modal.find('#id_menu').val(id_menu);
        modal.find('#nama_menu').val(nama_menu);
        modal.find('#exampleModalLabel').text('Masukkan Jumlah Pesanan untuk ' + nama_menu);
    });

    $('#exampleModal').on('show.bs.modal', function (event) {
        var modal = $(this);
        modal.find('input[name="jumlah"]').val('');
        modal.find('#jumlahError').hide();

        $('#jumlah').on('input', function () {
            var jumlahPesanan = $(this).val();
            if (jumlahPesanan === '') {
                modal.find('#beliButton').prop('disabled', true);
                modal.find('#jumlahError').show();
            } else {
                modal.find('#beliButton').prop('disabled', false);
                modal.find('#jumlahError').hide();
            }
        });
    });
});

$(document).ready(function () {
    $('a[data-gambar-target="#gambarPopup"]').on('click', function () {
        var gambarSrc = $(this).data('src');
        // Tampilkan gambar dalam popup
        $('#gambarPopup').modal('show');
        $('#gambarProduk').attr('src', gambarSrc);
    });

    $('a[data-info-target="#infoPopup"]').on('click', function () {
        var namaMenu = $(this).data('nama');
        var jenisMenu = $(this).data('jenis');
        var stok = $(this).data('stok');
        var harga = $(this).data('harga');
        var harga = $(this).data('harga');
        var deskripsi = $(this).data('deskripsi');

        $('#infoNamaMenu').text(namaMenu);
        $('#infoJenisMenu').text(jenisMenu);
        $('#infoStok').text(stok);
        $('#infoHarga').text('Rp. ' + harga);
        $('#infoDeskripsi').text(deskripsi);

        // Tampilkan popup informasi
        $('#infoPopup').modal('show');
    });
});