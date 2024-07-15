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

    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <!-- Blog Details Section -->
                <section id="blog-details" class="blog-details section">
                    <div class="container">
                        <article class="article">
                            <style>
                                @media (max-width: 768px) {
                                    .blog-posts .post-img {
                                        max-height: none;
                                        margin: 0 0 15px 0;
                                    }

                                    .blog-posts .post-img img {
                                        object-fit: cover;
                                        width: 100%;
                                        height: auto;
                                    }
                                }
                            </style>
                            <div class="post-img">
                                <img id="post-thumbnail" src="{{ Storage::url($artikel->thumbnail) }}" alt=""
                                    class="img-fluid">
                            </div>

                            <h2 class="title">{{ $artikel->title }}</h2>

                            <div class="meta-top">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="bi bi-person"></i>
                                        {{ $artikel->author->name }}</li>
                                    <li class="d-flex align-items-center"><i
                                            class="bi bi-clock"></i>{{ $artikel->created_at->format('M d, Y') }}</li>
                                </ul>
                            </div><!-- End meta top -->

                            <div class="content">
                                {!! $artikel->content !!}
                            </div><!-- End post content -->

                            <div class="meta-bottom">
                                <i class="bi bi-folder"></i>
                                <ul class="cats">
                                    <li><a
                                            href="/category-{{ $artikel->category->name }}">{{ $artikel->category->name }}</a>
                                    </li>
                                </ul>
                            </div><!-- End meta bottom -->
                        </article>
                    </div>
                </section><!-- /Blog Details Section -->
            </div>

            <div class="col-lg-4 sidebar">
                <div class="widgets-container">
                    <!-- Categories Widget -->
                    <!-- Tags Widget -->
                    <div class="tags-widget widget-item mb-3">
                        <h3 class="widget-title">Tags</h3>
                        <ul>
                            @foreach ($categories as $category)
                                @if ($category->artikel_count != 0)
                                    <li><a href="/category-{{ $category->slug }}">{{ $category->name }}
                                            ({{ $category->artikel_count }})
                                        </a></li>
                                @endif
                            @endforeach
                        </ul>
                    </div><!--/Tags Widget -->

                    <!-- Recent Posts Widget -->
                    <div class="recent-posts-widget widget-item">
                        <h3 class="widget-title">Recent Posts</h3>
                        @foreach ($recentPost as $item)
                            <div class="post-item">
                                <img src="{{ Storage::url($item->thumbnail) }}" alt="" class="flex-shrink-0 w-25">
                                <div>
                                    <h4><a href="/artikel-detail-{{ $item->slug }}">{{ $item->title }}</a></h4>
                                    <time>{{ $item->created_at->format('M d, Y') }}</time>
                                </div>
                            </div><!-- End recent post item-->
                        @endforeach
                    </div><!--/Recent Posts Widget -->
                </div>
            </div>
        </div>
    </div>

    <script>
        function updateImageSize() {
            const img = document.getElementById('post-thumbnail');
            if (window.innerWidth >= 992) {
                img.style.width = '832px';
                img.style.height = '624px';
            } else {
                img.style.width = '100%';
                img.style.height = 'auto';
            }
        }

        // Initial call
        updateImageSize();

        // Update on resize
        window.addEventListener('resize', updateImageSize);
    </script>
@endsection
