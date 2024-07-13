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
                <p>About {{ $profile->name }}</p>
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
                                            <div class="custom-font">
                                                <span class="custom-font">{!! $profile->content !!}</span>
                                            </div>
                                            </p>
                                            <div class="social-links d-flex mt-4">
                                                @if ($profile->twitter)
                                                    <a href="{{ $profile->twitter }}"><i class="bi bi-twitter-x"></i></a>
                                                @endif
                                                @if ($profile->facebook)
                                                    <a href="{{ $profile->facebook }}"><i class="bi bi-facebook"></i></a>
                                                @endif
                                                @if ($profile->instagram)
                                                    <a href="{{ $profile->instagram }}"><i class="bi bi-instagram"></i></a>
                                                @endif
                                                @if ($profile->linkedin)
                                                    <a href="{{ $profile->linkedin }}"><i class="bi bi-linkedin"></i></a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 text-center my-auto">
                                        <img src="{{ Storage::url($profile->image) }}"
                                            style="object-fit: cover; width: 165px; height: 165px;"
                                            class="img-fluid profile-img" alt="">
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
