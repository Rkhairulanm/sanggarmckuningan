<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

        <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <img src="assets/img/logo.png" class="w-100 rounded-circle" alt="">
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="/" class=" {{ $title == 'Beranda' ? 'active' : '' }}">Beranda</a></li>
                <li><a href="/profile" class="{{ $title == 'Profile' ? 'active' : '' }}">Profile
                        MC</a></li>
                <li><a href="/artikel" class="{{ $title == 'Artikel' ? 'active' : '' }}">Artikel
                        MC</a></li>

                <li class="dropdown"><a href="#"
                        class="{{ $title == 'Galeri' ? 'active' : '' }}"><span>Galeri</span>
                        <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="/galeri">Galeri
                                Foto</a></li>
                        <li><a href="/video">Galeri Video</a></li>
                    </ul>
                </li>
                <li><a href="/berita" class="{{ $title == 'Berita' ? 'active' : '' }}">Berita</a></li>
                <li><a href="/kontak" class="{{ $title == 'Kontak' ? 'active' : '' }}">Kontak</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

    </div>
</header>
