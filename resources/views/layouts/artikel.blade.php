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
            <h2>Profile</h2>
            <p>Profile MC</p>
        </div><!-- End Section Title -->

        <div class="container">
            <div class="row gy-4">

                <div class="col-lg-4">
                    <article>

                        <div class="post-img">
                            <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
                        </div>

                        <p class="post-category">Politics</p>

                        <h2 class="title">
                            <a href="/artikel-detail">Dolorum optio tempore voluptas dignissimos</a>
                        </h2>

                    </article>
                </div><!-- End post list item -->

            </div>
        </div>

    </section><!-- /Blog Posts Section -->

    <!-- Blog Pagination Section -->
    <section id="blog-pagination" class="blog-pagination section">

        <div class="container">
            <div class="d-flex justify-content-center">
                <ul>
                    <li><a href="#"><i class="bi bi-chevron-left"></i></a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#" class="active">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li>...</li>
                    <li><a href="#">10</a></li>
                    <li><a href="#"><i class="bi bi-chevron-right"></i></a></li>
                </ul>
            </div>
        </div>

    </section><!-- /Blog Pagination Section -->
@endsection
