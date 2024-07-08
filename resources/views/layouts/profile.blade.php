@extends('main')
@section('content')
    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section" style="background-color: #211f1f">
        <div class="container">
            <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
                <div class="col-xl-10">
                    <div class="text-center">
                        <h3>Profile MC</h3>
                        <p>Berikut Adalah Profile Dari MC Kami</p>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Call To Action Section -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Profile</h2>
            <p>Profile MC</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

                <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".filter-AllEvent">All Event</li>
                    <li data-filter=".filter-Wedding">Wedding</li>
                    <li data-filter=".filter-Gradu">Graduation</li>
                    <li data-filter=".filter-Event">Formal Event</li>
                    <li data-filter=".filter-Others">Others</li>
                </ul><!-- End Portfolio Filters -->

                <div class="row gy-4 isotope-container items-center mx-auto" data-aos="fade-up" data-aos-delay="200">
                    @foreach ($profile as $item)
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-{{ $item->tag }}">
                            <div class="portfolio-img-wrapper">
                                <img src="{{ Storage::url($item->image) }}"
                                    style="width: 432px; height: 336px; object-fit: cover;" class="img-fluid"
                                    alt="">
                                <div class="social">
                                    @if ($item->twitter)
                                        <a href="{{ $item->twitter }}"><i class="bi bi-twitter-x"></i></a>
                                    @endif
                                    @if ($item->facebook)
                                        <a href="{{ $item->facebook }}"><i class="bi bi-facebook"></i></a>
                                    @endif
                                    @if ($item->instagram)
                                        <a href="{{ $item->instagram }}"><i class="bi bi-instagram"></i></a>
                                    @endif
                                    @if ($item->linkedin)
                                        <a href="{{ $item->linkedin }}"><i class="bi bi-linkedin"></i></a>
                                    @endif
                                </div>

                            </div>
                            <div class="portfolio-info">
                                <h4>{{ $item->name }}</h4>
                                <a href="/profile-detail-{{ $item->id }}" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div><!-- End Portfolio Item -->
                    @endforeach

                </div><!-- End Portfolio Container -->

            </div>

        </div>

    </section><!-- /Portfolio Section -->
@endsection
