<footer id="footer" class="footer dark-background">
    @php
        $instagram = \App\Models\Info::where('type', 'Instagram')->first();
        $phone = \App\Models\Info::where('type', 'Phone Number')->first();
        $email = \App\Models\Info::where('type', 'Email')->first();
        $address = \App\Models\Info::where('type', 'Address')->first();
        $youtube = \App\Models\Info::where('type', 'Youtube')->first();
    @endphp
    <div class="footer-top">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-6 col-md-6 footer-about">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <span class="sitename" style="color: #ffc451">Sanggar MC Kuningan</span>
                    </a>
                    <div class="footer-contact pt-3">
                        @if(isset($address))
                            <div class="d-flex">
                                <p class="me-3"><strong>Lokasi </strong></p>
                                <p>
                                    {{ $address->content }}
                                </p>
                            </div>
                        @endif
                        @if(isset($phone))
                            <div class="d-flex">
                                <p class="me-3"><strong>Phone </strong></p>
                                <p style="font-family: sans-serif">
                                    {{ $phone->content }}
                                </p>
                            </div>
                        @endif
                        @if(isset($email))
                            <div class="d-flex">
                                <p class="me-3"><strong>Email ‎ </strong></p>
                                <p>
                                    {{ $email->content }}
                                </p>
                            </div>
                        @endif
                    </div>
                    <div class="social-links d-flex mt-4 justify-content-center justify-content-lg-start">
                        @if(isset($phone))
                            <a href="https://wa.me/62{{ $phone->content }}" target="_blank"><i class="bi bi-whatsapp"></i></a>
                        @endif
                        @if(isset($instagram))
                            <a href="{{ $instagram->content }}" target="_blank"><i class="bi bi-instagram"></i></a>
                        @endif
                        @if(isset($youtube))
                            <a href="{{ $youtube->content }}" target="_blank"><i class="bi bi-youtube"></i></a>
                        @endif
                        @if(isset($email))
                            <a href="mailto:{{ $email->content }}" target="_blank"><i class="bi bi-envelope"></i></a>
                        @endif
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 footer-newsletter">
                    @if (Session::has('status'))
                        <div class="alert alert-success text-secondary opacity-5" role="alert">
                            {{ Session::get('message') }}
                        </div>
                    @endif
                    <h4>Berlangganan</h4>
                    <p>Dapatkan informasi terbaru tentang acara, layanan, dan promosi spesial dari Sanggar MC Kuningan
                    </p>
                    <form action="/subs-send" method="post" class="php-email-form">
                        @csrf
                        <div class="newsletter-form">
                            <input type="email" name="email" placeholder="Masukkan email Anda">
                            <input type="submit" value="Subscribe">
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class="copyright">
        <div class="container text-center">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">Sanggar MC Kuningan</strong> <span>All Rights
                    Reserved</span></p>
            <div class="credits">
                Designed by Inovindo
            </div>
        </div>
    </div>
</footer>

<style>
    @media (max-width: 768px) {
        .social-links {
            justify-content: center !important;
        }
    }
</style>
