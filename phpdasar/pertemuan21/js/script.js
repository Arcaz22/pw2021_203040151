$(document).ready(function() {

    // hilangkann tombol cari
    $('#tombol-cari').hide();

    // event ketika keywoard di tulis
    $('#keywoard').on('keyup', function() {
        // munculkan icon loader
        $('.loader').show();

        // ajak menggunakan load
        // $('#container').load('ajax/mahasiswa.php=' + $('#keywoard').val());

        // $.get
        $.get('ajax/mahasiswa.php?keywoard=' + $('#keywoard').val(), function(data) {

            $('#container').html(data);
            $('.loader').hide;
        });
    });
});