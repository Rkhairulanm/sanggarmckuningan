@extends('main')

@section('content')
    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section" style="background-color: #211f1f">
        <div class="container">
            <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
                <div class="col-xl-10">
                    <div class="text-center">
                        <h3>Berita</h3>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Call To Action Section -->
    <!-- ======= Search Results ======= -->
    <section id="search-result" class="search-result">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6 mb-2">
                    <h2>Berita</h2>
                    @if ($title == 'Berita')
                        <p>Berita Terbaru</p>
                    @elseif($title == 'Hasil Pencarian')
                        <p>Hasil Pencarian</p>
                    @endif
                </div>
                <div class="col-lg-3">
                    <!-- Search Widget -->
                    <div class="search-widget widget-item">

                        <form action="" method="get">
                            <input type="text" name="keyword">
                            <button type="submit" title="Search"><i class="bi bi-search"></i></button>
                        </form>

                    </div><!--/Search Widget -->
                </div>
            </div>
        </div><!-- End Section Title -->
    </section> <!-- End Search Result -->

    <section id="search-result" class="search-result" style="margin-top: -100px">
        <div class="container">
            <div class="row">
                @foreach ($berita as $k)
                    <div class="col-md-12">
                        <div class="d-md-flex post-entry-2 small-img">
                            <a href="/berita-detail-{{ $k->slug }}" class="me-4 thumbnail">
                                <img src="{{ Storage::url($k->thumbnail) }}" alt="" class="img-fluid rounded">
                            </a>
                            <div>
                                <div class="post-meta"><span class="date">{{ $k->categoryBerita->name }}</span> <span
                                        class="mx-1">&bullet;</span>
                                    <span>{{ $k->created_at->format('M d, Y') }}</span>
                                </div>
                                <h3><a href="/berita-detail-{{ $k->slug }}">{{ $k->title }}</a></h3>
                                <p>{!! \Illuminate\Support\Str::limit($k->content ?? '', 150) !!}</p>
                                <div class="d-flex align-items-center author">
                                    <div class="photo">
                                        <img style="width: 40px; height: 40px; object-fit: cover"
                                            src="{{ Storage::url($k->authorBerita->authorImage) }}" alt=""
                                            class="img-fluid">
                                    </div>
                                    <div class="name">
                                        <h3 class="m-0 p-0">{{ $k->authorBerita->name }}</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="mb-3 container">
                    {{ $berita->withQueryString()->links() }}
                </div>
                <style>
                    .pagination .page-link {
                        background-color: #211f1f !important;
                        color: white !important;
                        border: none !important;
                        outline: none;
                    }

                    .pagination .page-link:hover,
                    .pagination .page-item.active .page-link {
                        background-color: #ffc451 !important;
                        color: black !important;
                        border: none !important;
                        outline: none;
                        cursor: pointer;
                    }
                </style>
            </div>
        </div>
    </section> <!-- End Search Result -->
@endsection
