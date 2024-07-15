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

    <!-- Contact Section -->
    <section id="contact" class="contact section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Contact</h2>
            <p>Contact Us</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="mb-4" data-aos="fade-up" data-aos-delay="200">
                <iframe style="border:0; width: 100%; height: 270px;"
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7920.530610480621!2d108.478829!3d-6.977991!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f15866913ae17%3A0x6f899fe47f454b58!2sPondok%20Quran%20%26%20Yatim%20Daarul%20Adzkar!5e0!3m2!1sen!2sus!4v1720159333049!5m2!1sen!2sus"
                    frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div><!-- End Google Maps -->

            <div class="row gy-4 mt-3">

                <div class="col-lg-4">
                    @if (isset($address))
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h3>Address</h3>
                                <p>{{ $address->content }}</p>
                            </div>
                        </div><!-- End Info Item -->
                    @endif

                    @if (isset($phone))
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-telephone flex-shrink-0"></i>
                            <div>
                                <h3>Call Us</h3>
                                <p>{{ $phone->content }}</p>
                            </div>
                        </div><!-- End Info Item -->
                    @endif

                    @if (isset($email))
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h3>Email Us</h3>
                                <p>{{ $email->content }}</p>
                            </div>
                        </div><!-- End Info Item -->
                    @endif

                </div>

                <div class="col-lg-8 pt-3 mt-lg-0">
                    @if (Session::has('status'))
                        <div class="alert alert-success text-secondary opacity-5" role="alert">
                            {{ Session::get('message') }}
                        </div>
                    @endif
                    <form action="/kontak-send" method="post" role="form" class="php-email-form">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name"
                                    placeholder="Your Name" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                                required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>

                </div>

            </div>

        </div>

    </section><!-- /Contact Section -->
@endsection
