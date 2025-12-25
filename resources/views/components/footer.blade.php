<!-- resources/views/layouts/footer.blade.php -->
@php
    $phone = config('sakilah.whatsapp');
    $email = config('sakilah.email');
    $brand = config('sakilah.nama_brand');
    if (substr($phone, 0, 1) == '0') {
        $waLink = '62' . substr($phone, 1);
    } else {
        $waLink = $phone;
    }
    $instagram = 'https://www.instagram.com/' . config('sakilah.instagram');
    $tiktok = 'https://www.tiktok.com/@' . config('sakilah.tiktok');
@endphp


<footer>
    <div class="footer-container">
        <div class="footer-section">
            <h1>{{ $brand }}</h1>
            <div class="social-icons">
                <a href="{{ $instagram }}" target="_blank">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="{{ $tiktok }}" target="_blank">
                    <i class="fab fa-tiktok"></i>
                </a>
                <a href="mailto:{{ $email }}">
                    <i class="fas fa-envelope"></i>
                </a>
            </div>
        </div>

        <div class="footer-section">
            <h3>LAYANAN</h3>
            <ul>
                <li>Paket Catering</li>
                <li>Sewa Peralatan Catering</li>
                <li>Sewa Waitress</li>
                <li>Event Organizer</li>
            </ul>
        </div>

        <div class="footer-section">
            <h3>MENU</h3>
            <ul>
                <li>Buffet</li>
                <li>Gubugan</li>
                <li>Dessert</li>
            </ul>
        </div>

        <div class="footer-section">
            <h3>KONTAK KAMI</h3>
            <!-- No Telp -->
            <div class="contact-item">
                <i class="fab fa-whatsapp"></i>
                <a href="https://wa.me/{{ $waLink }}" target="_blank">
                    {{ $phone }}
                </a>
            </div>

            <!-- Email -->
            <div class="contact-item">
                <i class="fas fa-envelope"></i>
                <a href="mailto:{{ $email }}">{{ $email }}</a>
            </div>

            <!-- Alamat -->
            <div class="contact-item address">
                <i class="fas fa-map-marker-alt"></i>
                <span>{{ config('sakilah.alamat') }}</span>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <p>© 2025 Sakilah Catering. All rights reserved.</p>
    </div>
</footer>
