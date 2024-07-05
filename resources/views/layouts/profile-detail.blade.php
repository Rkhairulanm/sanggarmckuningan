@extends('main')
@section('content')
    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section" style="background-color: #211f1f">
        <div class="container">
            <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
                <div class="col-xl-10">
                    <div class="text-center">
                        <h3>Profile MC</h3>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Call To Action Section -->

    <div class="container" style="margin-top: 100px; margin-bottom: 100px">
        <!-- profiles Section -->
        <section id="profiles" class="profiles section light-background">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>profileS</h2>
                <p>What Are They <span class="description-title">Saying About Us</span></p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="swiper init-swiper">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="profile-item">
                                <div class="row gy-4 justify-content-center">
                                    <div class="col-lg-6">
                                        <div class="profile-content ">
                                            <p>
                                                <i class="bi bi-quote quote-icon-left"></i>
                                                <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora
                                                    entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam
                                                    eget nibh et. Maecen aliquam, risus at semper.</span>
                                                <i class="bi bi-quote quote-icon-right"></i>
                                            </p>
                                            <h3>Saul Goodman</h3>
                                            <h4>Ceo &amp; Founder</h4>
                                            <div class="social-links d-flex mt-4">
                                                <a href=""><i class="bi bi-twitter-x"></i></a>
                                                <a href=""><i class="bi bi-facebook"></i></a>
                                                <a href=""><i class="bi bi-instagram"></i></a>
                                                <a href=""><i class="bi bi-linkedin"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 text-center mb-5">
                                        <img src="assets/img/team/team-1.jpg" class="img-fluid profile-img" alt="">
                                    </div>
                                </div>
                            </div>
                        </div><!-- End profile item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>

        </section><!-- /profiles Section -->
    </div>
@endsection
