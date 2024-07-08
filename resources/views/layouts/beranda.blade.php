@extends('main')
@section('content')
    <section id="hero">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <ol class="carousel-indicators" id="hero-carousel-indicators">
                <li data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#heroCarousel" data-bs-slide-to="1"></li>
            </ol>

            <div class="carousel-inner" role="listbox">
                <!-- Slide 1 -->
                <div class="carousel-item active"
                    style="background-image: url({{ asset('assets/img/slide/slide-1.jpg') }})">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">{!! $heroTitle->content !!}</h2>
                            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read
                                More</a>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item" style="background-image: url({{ asset('assets/img/slide/slide-2.jpg') }})">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">{!! $heroTitle->content !!}</h2>
                            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read
                                More</a>
                        </div>
                    </div>
                </div>
            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>
        </div>
    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section" style="margin-top:-30px;">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">
                <div class="col-lg-6 order-1 order-lg-2">
                    <img src="assets/img/about.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 order-2 order-lg-1 content" style="font-family: Raleway, sans-serif;">
                    {!! $aboutSection->content !!}
                </div>

            </div>

        </div>

    </section><!-- /About Section -->



    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">
        <div class="container section-title" data-aos="fade-up">
            <h2 style="font-size: 24px">Testimomi Mitra</h2>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row align-items-center">
                <center>
                    <div class="col-lg-9" data-aos="fade-up" data-aos-delay="200">

                        <div class="swiper init-swiper">
                            <script type="application/json" class="swiper-config">
                    {
                      "loop": true,
                      "speed": 600,
                      "autoplay": {
                        "delay": 5000
                      },
                      "slidesPerView": "auto",
                      "pagination": {
                        "el": ".swiper-pagination",
                        "type": "bullets",
                        "clickable": true
                      }
                    }
                  </script>
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="">
                                            <img src="assets/img/testimonials/testimonials-1.jpg"
                                                class="testimonial-img flex-shrink-0" alt="">
                                            <div class="text-start text-center pt-2">
                                                <h3>Novi Setia Nurviat</h3>
                                                <h4>OWNER PT. INOVINDO DIGITAL MEDIA</h4>
                                                <!-- <div class="stars">
                                                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                                      class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                                                  </div> -->
                                            </div>
                                        </div>
                                        <p>
                                            <i class="bi bi-quote quote-icon-left"></i>
                                            <span>AMA Bandung berhasil menyelenggarakan acara-acara seminar
                                                motivasi yang
                                                sangat
                                                bermanfaat</span>
                                            <i class="bi bi-quote quote-icon-right"></i>
                                        </p>
                                    </div>
                                </div><!-- End testimonial item -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="">
                                            <img src="assets/img/testimonials/testimonials-1.jpg"
                                                class="testimonial-img flex-shrink-0" alt="">
                                            <div class="text-start text-center pt-2">
                                                <h3>Novi Setia Nurviat</h3>
                                                <h4>OWNER PT. INOVINDO DIGITAL MEDIA</h4>
                                                <!-- <div class="stars">
                                                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                                      class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                                                  </div> -->
                                            </div>
                                        </div>
                                        <p>
                                            <i class="bi bi-quote quote-icon-left"></i>
                                            <span>AMA Bandung berhasil menyelenggarakan acara-acara seminar
                                                motivasi yang
                                                sangat
                                                bermanfaat</span>
                                            <i class="bi bi-quote quote-icon-right"></i>
                                        </p>
                                    </div>
                                </div><!-- End testimonial item -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="">
                                            <img src="assets/img/testimonials/testimonials-1.jpg"
                                                class="testimonial-img flex-shrink-0" alt="">
                                            <div class="text-start text-center pt-2">
                                                <h3>Novi Setia Nurviat</h3>
                                                <h4>OWNER PT. INOVINDO DIGITAL MEDIA</h4>
                                                <!-- <div class="stars">
                                                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                                      class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                                                  </div> -->
                                            </div>
                                        </div>
                                        <p>
                                            <i class="bi bi-quote quote-icon-left"></i>
                                            <span>AMA Bandung berhasil menyelenggarakan acara-acara seminar
                                                motivasi yang
                                                sangat
                                                bermanfaat</span>
                                            <i class="bi bi-quote quote-icon-right"></i>
                                        </p>
                                    </div>
                                </div><!-- End testimonial item -->

                            </div>
                            <div class="swiper-pagination"></div>
                        </div>

                    </div>
                </center>

            </div>

        </div>

    </section><!-- /Testimonials Section -->


    <!-- Clients Section -->
    <section id="clients" class="clients section">
        <div class="container section-title" data-aos="fade-up">
            <h2 style="font-size: 24px">Klien Kami</h2>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="swiper init-swiper">
                <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 2,
                  "spaceBetween": 40
                },
                "480": {
                  "slidesPerView": 3,
                  "spaceBetween": 60
                },
                "640": {
                  "slidesPerView": 4,
                  "spaceBetween": 80
                },
                "992": {
                  "slidesPerView": 6,
                  "spaceBetween": 120
                }
              }
            }
          </script>
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid"
                            alt="">
                    </div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid"
                            alt="">
                    </div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid"
                            alt="">
                    </div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid"
                            alt="">
                    </div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid"
                            alt="">
                    </div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid"
                            alt="">
                    </div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid"
                            alt="">
                    </div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid"
                            alt="">
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>

    </section><!-- /Clients Section -->
@endsection
