document.addEventListener('DOMContentLoaded', function() {
    const images = document.querySelectorAll('.cp-container img');
    const prevBtn = document.querySelector('.prev');
    const nextBtn = document.querySelector('.next');
    let currentIndex = 0;
    const totalImages = images.length;

    // Fungsi untuk menggeser gambar
    function updateCarousel() {
        images.forEach((img) => {
            // Geser gambar berdasarkan index saat ini (-100%, -200%, dst)
            img.style.transform = `translateX(-${currentIndex * 100}%)`;
        });
    }

    // Tombol Next
    nextBtn.addEventListener('click', () => {
        currentIndex++;
        if (currentIndex >= totalImages) {
            currentIndex = 0; // Balik ke awal jika sudah di akhir
        }
        updateCarousel();
    });

    // Tombol Prev
    prevBtn.addEventListener('click', () => {
        currentIndex--;
        if (currentIndex < 0) {
            currentIndex = totalImages - 1; // Lompat ke akhir jika di awal
        }
        updateCarousel();
    });
});