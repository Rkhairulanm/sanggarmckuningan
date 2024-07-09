<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
@php
    try {
        $beranda = \App\Models\Keyword::where('page', 'beranda')->pluck('name')->implode(', ');
        $tentang = \App\Models\Content::where('type', 'About Section')->first();

        $pageKeywords = [
            'Beranda' => \App\Models\Keyword::where('page', 'beranda')->pluck('name')->implode(', '),
            'Profile' => \App\Models\Profile::select('name', 'tag')
                ->get()
                ->map(function ($profile) {
                    return $profile->name . ', ' . $profile->tag;
                })
                ->implode(', '),
            'Artikel' => App\Models\Artikel::with(['category', 'author'])
                ->get()
                ->map(function ($artikel) {
                    return $artikel->title . ', ' . $artikel->category->name . ', ' . $artikel->author->name;
                })
                ->implode(', '),
            'Hasil Pencarian Artikel' => App\Models\Artikel::with(['category', 'author'])
                ->get()
                ->map(function ($artikel) {
                    return $artikel->title . ', ' . $artikel->category->name . ', ' . $artikel->author->name;
                })
                ->implode(', '),
            'Postingan dengan Kategori Terkait' => App\Models\Artikel::with(['category', 'author'])
                ->get()
                ->map(function ($artikel) {
                    return $artikel->title . ', ' . $artikel->category->name . ', ' . $artikel->author->name;
                })
                ->implode(', '),
            'Berita' => App\Models\Berita::with(['categoryBerita', 'authorBerita'])
                ->get()
                ->map(function ($berita) {
                    return $berita->title . ', ' . $berita->categoryBerita->name . ', ' . $berita->authorBerita->name;
                })
                ->implode(', '),
            'Hasil Pencarian Berita' => App\Models\Berita::with(['categoryBerita', 'authorBerita'])
                ->get()
                ->map(function ($berita) {
                    return $berita->title . ', ' . $berita->categoryBerita->name . ', ' . $berita->authorBerita->name;
                })
                ->implode(', '),
            'Berita dengan Kategori Terkait' => App\Models\Berita::with(['categoryBerita', 'authorBerita'])
                ->get()
                ->map(function ($berita) {
                    return $berita->title . ', ' . $berita->categoryBerita->name . ', ' . $berita->authorBerita->name;
                })
                ->implode(', '),
            'Galeri' => \App\Models\Gallery::pluck('title')->concat(\App\Models\Video::pluck('title'))->implode(', '),
            'Kontak' => \App\Models\Info::pluck('content')->implode(', '),
        ];
        $keywords = $pageKeywords[$title] ?? '';
        $tentangContent = $tentang->content ?? 'Deskripsi tidak tersedia';
    } catch (\Exception $e) {
        // Handle exception (e.g., log the error, display a generic message)
        $errorMessage = 'Terjadi kesalahan saat memuat data.';
        // You can log $e->getMessage() for more specific error details if needed
        $beranda = '';
        $pageKeywords = [];
        $keywords = '';
        $tentangContent = '';
    }
@endphp
{{-- @dd($keywords) --}}

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Sanggar MC Kuningan | {{ $title }}</title>
    <meta content="{!! $tentangContent !!}" name="description">
    <meta name="keywords" content="{{ $title != 'Beranda' ? $beranda : 'Sanggar MC, ' }} {{ $keywords }}">
    {{-- <meta name="keywords" content="Sanggar MC, {{ $title != 'Beranda' ? $keywords : $beranda . ', ' . $keywords }}"> --}}

    <!-- Favicons -->
    <link href="{{ asset('assets/img/logo.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <script src="https://kit.fontawesome.com/04deebaf3b.js" crossorigin="anonymous"></script>
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
</head>

<body class="index-page">
    @include('partials.header')

    <main class="main">
        @yield('content')
    </main>

    @include('partials.footer')
    @include('partials.scrolltop')

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
