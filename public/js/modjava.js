// Ambil semua elemen dengan kelas ".isi// Menggunakan document.querySelectorAll()
const isiList = document.querySelectorAll('.isi');

// Loop melalui setiap elemen .isi dan tambahkan event listener ke tautan "(lebih lanjut)"
isiList.forEach(function(isi) {
  const lebihLanjutLink = isi.querySelector('a.text-blue-600');
  const detail = isi.querySelector('.detail');

  lebihLanjutLink.addEventListener('click', function(event) {
    event.preventDefault();

    if (isi.classList.contains('expanded')) {
      isi.classList.remove('expanded');
      detail.style.display = 'none';
    } else {
      isi.classList.add('expanded');
      detail.style.display = 'block';
    }
  });
});