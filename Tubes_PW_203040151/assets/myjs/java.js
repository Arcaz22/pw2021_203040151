// const tombolCari = document.querySelector('.tombol-cari');
// const keyword = document.querySelector('.keyword');
// const container = document.querySelector('.container');


// tombolCari.style.display = 'none';

// //event ketika kita menuliskan keywoard
// keyword.addEventListener('keyup', function() {
//     //ajax
//   xmlhttprequest
//   const xhr = new XMLHttpRequest();

//   xhr.onreadystatechange = function() {
//     if(xhr.readyState == 4 && xhr.status == 200) {
//       container.innerHTML = xhr.responseText;
//     }
//   };

//   xhr.open('get', '../app/helper/ajax.php?keyword=' +keyword.value);
//   xhr.send();
  //fetch
//   fetch('../../app/helper/ajax.php?keyword=' +keyword.value)
//   .then((response) => response.text())
//   .then((response) => (container.innerHTML = response));
// });

// Preview Image untuk Tambah dan Ubah
function previewImage() {
  const gambar = document.querySelector('.gambar');
  const imgPreview = document.querySelector('.img-preview');

  const oFReader = new FileReader();
  oFReader.readAsDataURL(gambar.files[0]);

  oFReader.onload = function (oFREvent) {
    imgPreview.src = oFREvent.target.result;
  };
}