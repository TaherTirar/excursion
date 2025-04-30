@extends('layouts.base')
@section('content')
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="breadcrumb-wrap">
                        <h2>Excursion</h2>
                        <ul class="breadcrumb-links">
                            <li>
                                <a href="{{ url('home') }}">Acceuil</a>
                                <i class="bx bx-chevron-right"></i>
                            </li>
                            <li>excursion</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="package-sidebar-wrapper pt-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row mb-30">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="package-filter">
                                <h5>Afficher 1-5 de {{ count($services) }} resultats</h5>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="custom-select package-option">
                                <select id="service_id">
                                    <option value="">Sélectionner une excursion</option>
                                    @foreach ($services as $service)
                                        <option value="{{ $service->id }}">{{ $service->titre }}</option>
                                    @endforeach
                                </select>
                                <script>
                                    document.getElementById('service_id').addEventListener('change', function() {
                                        var selectedValue = this.value;
                                        if (selectedValue) {
                                            window.location.href = '/detail/' + selectedValue;
                                        }
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($services as $service)
                            <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                                <div class="package-card">
                                    <div class="package-thumb">
                                        <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->titre }}" class="img-fluid">
                                    </div>
                                    <div class="package-details">
                                        <div class="package-info">
                                            <h5><span>${{ $service->price }}</span>/Per Person</h5>
                                            <h5><i class="flaticon-calendar"></i>
                                                @if(is_numeric($service->duree))
                                                    {{ $service->duree + 1 }}Jour/{{ $service->duree }}Nuitées
                                                @else
                                                    {{ $service->duree }}
                                                @endif
                                            </h5>
                                        </div>
                                        <h3><i class="flaticon-arrival"></i>
                                            <a
                                                href="{{ route('activity.show', ['id' => $service->id]) }}">{{ $service->titre }}</a>
                                        </h3>
                                        <p>{{ Str::limit($service->description, 100) }}</p>
                                        <div class="package-rating">
                                            <strong><i class="bx bxs-star"></i><span>8K+</span> Rating</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="pagination mt-30">
                                <a href="#"><i class="bx bx-chevron-left"></i></a>
                                <a href="#" class="active">1</a>
                                <a href="#">2</a>
                                <a href="#">3</a>
                                <a href="#">4</a>
                                <a href="#"><i class="bx bx-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- <div class="newsletter-area pt-120">
    <div class="container">
    <div class="row">
    <div class="col-lg-12 col-md-12">
    <div class="newsletter-wrapper">
    <h2>S'abonner à notre Newsletter pour suivre nos acctualités</h2>
    <form>
    <div class="input-group newsletter-input">
    <input type="text" class="form-control" placeholder="Saisir votre Email" aria-label="Recipient's username" aria-describedby="button-addon2">
    <button class="btn btn-outline-secondary" type="button" id="button-addon2">S'abonner</button>
    </div>
    </form>
    </div>
    </div>
    </div>
    </div>
    </div>


    <div class="footer-area">
    <div class="container">
    <div class="row">
    <div class="col-lg-4 col-md-12">
    <div class="footer-info">
    <div class="footer-logo">
    <img src="{{ asset('assets/images/logo-2.png') }}" alt class="img-fluid">
    </div>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid maxime aut ut voluptate
    dolorum nisi ducimus ratione</p>
    <div class="footer-social-icons">
    <h5>Suivez-nous:</h5>
    <ul>
    <li><a href="#"><i class="bx bxl-facebook"></i></a></li>
    <li><a href="#"><i class="bx bxl-instagram"></i></a></li>
    <li><a href="#"><i class="bx bxl-twitter"></i></a></li>
    <li><a href="#"><i class="bx bxl-dribbble"></i></a></li>
    </ul>
    </div>
    </div>
    </div>
    <div class="col-lg-8 col-md-12">
    <div class="row">
    <div class="col-lg-5 col-md-5 col-sm-7">
    <div class="footer-links">
    <h5 class="widget-title">Contactez-nous</h5>
    <div class="contact-box">
    <span><i class="bx bx-phone"></i></span>
    <div>
    <a href="tel:+01852-1265122">+01852-1265122</a>
    <a href="tel:+01852-1265122">+01852-1265122</a>
    </div>
    </div>
    <div class="contact-box">
    <span><i class="bx bx-mail-send"></i></span>
    <div>
    <a href="https://demo.egenslab.com/cdn-cgi/l/email-protection#61080f070e210419000c110d044f020e0c"><span class="__cf_email__" data-cfemail="b7ded9d1d8f7d2cfd6dac7dbd299d4d8da">[email&#160;protected]</span></a>
    <a href="https://demo.egenslab.com/cdn-cgi/l/email-protection#2c5f595c5c435e586c49544d415c4049024f4341"><span class="__cf_email__" data-cfemail="3c4f494c4c534e487c59445d514c5059125f5351">[email&#160;protected]</span></a>
    </div>
    </div>
    <div class="contact-box">
    <span><i class="bx bx-location-plus"></i></span>
    <div>
    <a href="#">2752 Willison Street <br>
    Eagan, United State</a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-5">
    <div class="footer-links">
    <h5 class="widget-title">support</h5>
    <div class="category-list">
    <ul>
    <li><a href="contact.html">Contactez-nous</a></li>
    <li><a href="about.html"> À propos de nous</a></li>
    <li><a href="#">Nos services</a></li> -->
        <!-- <li><a href="blog.html">our Blogs</a></li> -->
        <!-- <li><a href="#">terms et conditions</a></li>
    </ul>
    </div>
    </div>
    </div>
    <div class="col-lg-4 col-md-4">
    <div class="footer-links payment-links">
    <h5 class="widget-title">Nous acceptons:</h5>
    <div class="payment-cards">
    <img src="{{ asset('assets/images/payment/payment-card-2.png') }}" alt class="img-fluid">
    <img src="{{ asset('assets/images/payment/payment-card-1.png') }}" alt class="img-fluid">
    <img src="{{ asset('assets/images/payment/payment-card-3.png') }}" alt class="img-fluid">
    <img src="{{ asset('assets/images/payment/payment-card-4.png') }}" alt class="img-fluid">
    <img src="{{ asset('assets/images/payment/payment-card-5.png') }}" alt class="img-fluid">
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="row">
    <div class="col-lg-12">
    <div class="copyrigth-area">
    <p>Copyright 2021 <a href="#">TourX</a> | Design By <a href="#">Egens Lab</a></p>
    </div>
    </div>
    </div>
    </div>
    </div> -->


    <!-- <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/priceSlider.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/typed.js') }}"></script>

    <script src="{{ asset('assets/js/main.js') }}"></script> -->
@endsection

    <!-- Mirrored from demo.egenslab.com/html/tourx/package-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Mar 2024 11:05:13 GMT -->
