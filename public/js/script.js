$(function() {

    $('.tombolTambahData').on('click', function() {
        $('#formModalLabel').html('Tambah Data Siswa');
    });


    $('.tampilModalUbah').on('click', function() {
        $('#formModalLabel').html('Ubah Data Siswa');
        $('.modal-footer button[type=submit]').html('Ubah Data')
    });

});