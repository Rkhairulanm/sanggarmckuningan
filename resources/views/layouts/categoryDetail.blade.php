@extends('main')
@section('content')
    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section" style="background-color: #211f1f">
        <div class="container">
            <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
                <div class="col-xl-10">
                    <div class="text-center">
                        <h3>Artikel</h3>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Call To Action Section -->
    <!-- Blog Posts Section -->
    <section id="blog-posts" class="blog-posts section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6">
                    <h2>Artikel</h2>
                    <p style="font-size: 30px">{{ $title }}</p>
                </div>
                <div class="col-lg-3">
                    <!-- Search Widget -->
                    <div class="search-widget widget-item">

                        <form action="/artikel" method="get">
                            <input type="text" name="keyword">
                            <button type="submit" title="Search"><i class="bi bi-search"></i></button>
                        </form>

                    </div><!--/Search Widget -->
                </div>
            </div>
        </div><!-- End Section Title -->


        <div class="container">
            <div class="row gy-4">
                @foreach ($artikel as $item)
                    <div class="col-lg-4">
                        <article>
                            <div class="post-img position-relative overflow-hidden">
                                <img src="{{ Storage::url($item->thumbnail) }}" alt="{{ $item->title }}"
                                    style="object-fit: cover; width: 416px; height: 240px" class="img-fluid">
                                <span class="post-date">{{ $item->created_at->format('M d, Y') }}</span>
                            </div>
                            <p class="post-category">{{ $item->category->name }}</p>
                            <h2 class="title">
                                <a href="/artikel-detail-{{ $item->slug }}">{{ $item->title }}</a>
                            </h2>
                        </article>
                    </div><!-- End post list item -->
                @endforeach
            </div>
        </div>

    </section><!-- /Blog Posts Section -->

    <!-- Blog Pagination Section -->

    <div class="mb-3 container">
        {{ $artikel->withQueryString()->links() }}
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
@endsection
