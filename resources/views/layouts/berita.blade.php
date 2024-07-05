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
            <h2 style="font-size: 35px;color:black">Berita</h2>
        </div><!-- End Section Title -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="d-md-flex post-entry-2 small-img">
                        <a href="/berita-detail" class="me-4 thumbnail">
                            <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
                        </a>
                        <div>

                            <h3><a href="/berita-detail" style="color: #211f1f">What is the son of Football Coach John
                                    Gruden, Deuce Gruden doing
                                    Now?</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio placeat exercitationem
                                magni voluptates dolore. Tenetur fugiat voluptates quas.</p>
                            <div class="d-flex align-items-center author">
                                <div class="photo"><img src="assets/img/blog/blog-author-2.jpg" alt=""
                                        class="img-fluid">
                                </div>
                                <div class="name">
                                    <h3 class="m-0 p-0">Wade Warren</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section> <!-- End Search Result -->
@endsection
