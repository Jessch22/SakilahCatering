// Pilih elemen-elemen yang kita butuhkan dari HTML
const galleryWrapper = document.querySelector('.gallery-wrapper');
const leftArrow = document.querySelector('.left-arrow');
const rightArrow = document.querySelector('.right-arrow');
const galleryItems = document.querySelectorAll('.gallery-item');

// Dapatkan jumlah total item gambar
const totalItems = galleryItems.length;

// Variabel untuk melacak posisi gambar saat ini (dimulai dari 0)
let currentIndex = 0;

// Fungsi untuk menggeser galeri
function updateGalleryPosition() {
    // Lebar pergeseran adalah 50% karena kita menampilkan 2 gambar
    const offset = -currentIndex * 50; 
    galleryWrapper.style.transform = `translateX(${offset}%)`;
}

// Tambahkan event listener untuk tombol panah kanan
rightArrow.addEventListener('click', () => {
    // Cek apakah kita belum berada di slide terakhir.
    // Karena menampilkan 2 gambar, slide terakhir adalah saat gambar ke (totalItems - 2) ada di paling kiri.
    if (currentIndex < totalItems - 2) {
        currentIndex++; // Pindah ke slide berikutnya
        updateGalleryPosition();
    }
});

// Tambahkan event listener untuk tombol panah kiri
leftArrow.addEventListener('click', () => {
    // Cek apakah kita tidak berada di slide pertama (indeks 0)
    if (currentIndex > 0) {
        currentIndex--; // Pindah ke slide sebelumnya
        updateGalleryPosition();
    }
});