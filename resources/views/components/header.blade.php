<header>
    <nav class="navbar">
        <div class="logo">
            <a href="{{ url('/') }}">
                <img src="{{ asset('img/Logo_Sakilah.png') }}" alt="Sakilah Catering Logo">
            </a>
        </div>

        <ul class="nav-links">
            <li><a href="{{ url('/') }}">Beranda</a></li>
            <li class="dropdown">
                <a>Tentang Kami</a>
                <ul class="dropdown-menu">
                    <li><a href="{{ url('/visi-misi') }}">Visi & Misi</a></li>
                    <li><a href="{{ url('/sejarah') }}">Sejarah</a></li>
                </ul>
            </li>
            <li><a href="{{ url('/event') }}">Event Kami</a></li>
            <li><a href="{{ url('/layanan') }}">Layanan</a></li>
            <li><a href="{{ url('/menu') }}">Menu</a></li>
        </ul>
        <div class="contact-btn">
            <a href="{{ url('/kontak') }}" class="btn-hubungi">Hubungi Kami</a>
        </div>

        <div class="hamburger" id="hamburger">
            <i class="fas fa-bars"></i>
        </div>
    </nav>
</header>
