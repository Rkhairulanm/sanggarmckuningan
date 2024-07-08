@extends('main')
@section('content')
    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section" style="background-color: #211f1f">
        <div class="container">
            <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
                <div class="col-xl-10">
                    <div class="text-center">
                        <h3>Galeri</h3>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Call To Action Section -->
    <!-- Gallery Section -->
    <section id="gallery" class="gallery section">

        <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4 justify-content-center">
                @foreach ($foto as $k)
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="gallery-item h-100">
                            <img src="{{ Storage::url($k->image) }}" class="img-fluid" alt="">
                            <div class="gallery-links d-flex align-items-center justify-content-center">
                                <a href="{{ Storage::url($k->image) }}" title="{{ $k->title }}"
                                    class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                            </div>
                        </div>
                    </div><!-- End Gallery Item -->
                @endforeach

            </div>

        </div>

    </section><!-- /Gallery Section -->
@endsection
