// ambil elemen2 yang dibutuhkan
var keywoard = document.getElementById('keywoard');
var tombolCari = document.getElementById('tombol-cari');
var container = document.getElementById('container');

// tambahkan event ketika keywoard di tulis
keywoard.addEventListener('keyup', function() {
    
    //buat object ajax
    var xhr = new XMLHttpRequest();

    //cek kesiapan ajax
    xhr.onreadystatechange = function() {
        if( xhr.readyState == 4 && xhr.status == 200 ) {
            container.innerHTML = xhr.responseText;
        }
    }

    //eksekusi ajax
    xhr.open('GET', 'ajax/mahasiswa.php?keywoard=' + keywoard.value, true);
    xhr.send();
});