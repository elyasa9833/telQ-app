// untuk tombol (lebih lanjut)
function toggleDataDiri(element) {
  var clickedRow = element.parentNode;
  clickedRow.classList.toggle("clicked");
}

// untuk pop up profil di kanan atas 
document.addEventListener('DOMContentLoaded', function() {
  let tombolLogout = document.getElementById('tombol-logout');
  let keluar = document.getElementById('log-out');

  tombolLogout.addEventListener('click', function(event) {
    if (keluar.style.display === 'none') {
      keluar.style.display = 'grid';
    } else {
      keluar.style.display = 'none';
    }
  });

  document.addEventListener('click', function(event) {
    if (!keluar.contains(event.target) && event.target !== tombolLogout) {
      keluar.style.display = 'none';
    }
  });
});

// untuk popup hapus 

document.addEventListener('DOMContentLoaded', function() {
  const hapusBtns = document.querySelectorAll('.hapus');

  hapusBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      const confirmation = confirm('Apakah kamu yakin ingin menghapus ini?');

      if (confirmation) {
        // tambahkan kode untuk menghapus data di sini
        console.log('Data sudah dihapus');
      }
    });
  });
}); 

// untuk popup di viewuser

document.addEventListener('DOMContentLoaded', function() {
  // Ambil semua tombol ceklis dan silang
  const centangButtons = document.querySelectorAll('.action img[src="../Img/Icon/sampah.svg"]');
  const silangButtons = document.querySelectorAll('.action img[src="../Img/Icon/restore.svg"]');

  // Tambahkan event listener untuk setiap tombol ceklis
  centangButtons.forEach(button => {
    button.addEventListener('click', () => {
      const username = button.parentElement.parentElement.querySelector('.name_akun').textContent;
      const confirmation = confirm(`Apakah kamu yakin ingin menghapus "${username}" tersebut?`);
      // if (confirmation) {
      //   alert(`"${username}" berhasil dihapus`);
      // }
    });
  });

  // Tambahkan event listener untuk setiap tombol silang
  silangButtons.forEach(button => {
    button.addEventListener('click', () => {
      const username = button.parentElement.parentElement.querySelector('.name_akun').textContent;
      const confirmation = confirm(`Apakah benar beliau ini tidak benar benar bersalah atas tuduhan itu?`);
      if (confirmation) {
        alert(`Baiklah jika memang begitu wahai ndoro`);
      }
    });
  });
});
// untuk tampil preview gambar ketika upload profil di register
function previewImage(event) {
  var reader = new FileReader();
  reader.onload = function() {
    var output = document.getElementById('preview');
    output.src = reader.result;
  };
  reader.readAsDataURL(event.target.files[0]);
}
