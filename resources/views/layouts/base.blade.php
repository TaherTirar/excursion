<!doctype html>
<html lang="en">

<head>
    <title>TourX </title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/boxicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/font/flaticon.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    @stack('styles')
</head>

<body>

    <div class="preloader">
        <div class="loader loader1">
            <span style="--i:1;"></span>
            <span style="--i:2;"></span>
            <span style="--i:3;"></span>
            <span style="--i:4;"></span>
            <span style="--i:5;"></span>
            <span style="--i:6;"></span>
            <span style="--i:7;"></span>
            <span style="--i:8;"></span>
            <span style="--i:9;"></span>
            <span style="--i:10;"></span>
            <span style="--i:11;"></span>
            <span style="--i:12;"></span>
            <span style="--i:13;"></span>
            <span style="--i:14;"></span>
            <span style="--i:15;"></span>
            <span style="--i:16;"></span>
            <span style="--i:17;"></span>
            <span style="--i:18;"></span>
            <span style="--i:19;"></span>
            <span style="--i:20;"></span>
            <div class="rocket"></div>
        </div>
    </div>


    <!-- <div class="topbar-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 tob-contact-row">
                    <div class="topbar-contact">
                        <ul>
                            <li><i class="bx bxs-phone"></i><a
                                    href="tel:{{ setting('site.phone') }}">{{ setting('site.phone') }}</a></li>
                            <li><i class="bx bxs-envelope"></i><a
                                    href="https://demo.egenslab.com/cdn-cgi/l/email-protection#7910171f16391c01181409151c571a1614"><span
                                        class="__cf_email__"
                                        data-cfemail="f39a9d959cb3968b929e839f96dd909c9e">{{ setting('site.Email') }}</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 col-6">
                    <div class="topbar-social">
                        <ul>
                            <li>
                                <a href="#"><i class="bx bxl-instagram"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="bx bxl-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="bx bxl-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="bx bxl-whatsapp"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-6">
                    <div class="custom-select languege-select">
                        <select>
                            <option value="0">ENG</option>
                            <option value="1">BAN</option>
                            <option value="2">FSP</option>
                            <option value="3">CHI</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div> -->


    <header>
        <div class="header-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12">
                        <div class="navbar-wrap">
                            <div class="logo d-flex justify-content-between">
                                <a href="{{ route('home') }}" class="navbar-brand"> <img
                                        src="{{ asset('assets/images/logo.png') }}" alt></a>
                            </div>
                            <div class="navbar-icons">
                                <div class="searchbar-open">
                                    <i class="flaticon-magnifier"></i>
                                </div>
                                <div class="user-dropdown-icon">
                                    <i class="flaticon-user"></i>
                                    <div class="account-dropdown">
                                        <ul>
                                            <li class="account-el">
                                                <i class="bx bx-user-pin"></i>
                                                <a href="#">Se connecter</a>
                                            </li>
                                            <li class="account-el">
                                                <i class="bx bxs-user-account"></i>
                                                <a href="#">Mon compte</a>
                                            </li>
                                            <li class="account-el">
                                                <i class="bx bx-extension"></i>
                                                <a href="#">Paramètres</a>
                                            </li>
                                            <li class="account-el">
                                                <i class="bx bx-log-in-circle"></i>
                                                <a href="#">Se déconnecter</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="mobile-menu d-flex ">
                                    <div class="top-search-bar m-0 d-block d-xl-none">
                                    </div>
                                    <a href="javascript:void(0)" class="hamburger d-block d-xl-none">
                                        <span class="h-top"></span>
                                        <span class="h-middle"></span>
                                        <span class="h-bottom"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                        <nav class="main-nav">
                            <div class="navber-logo-sm">
                                <img src="{{ asset('assets/images/logo-2.png') }}" alt class="img-fluid">
                            </div>
                            <ul>
                                <li>
                                    <a href="{{ route('home') }}">Acceuil</a>
                                </li>
                                <li><a href="{{ route('info') }}">À propos de nous</a></li>
                                <li class="has-child-menu">
                                    <a href="javascript:void(0)">Nos services</a>
                                    <i class="fl flaticon-plus">+</i>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('excursion') }}" class="sub-item">Excursions</a>
                                        </li>
                                        <li><a href="{{ route('activite') }}" class="sub-item">activités</a>
                                        </li>
                                        <!-- <li><a href="package.html" class="sub-item">Demandes Privée</a></li> -->
                                    </ul>
                                </li>
                                <li><a href="{{ route('contact') }}">Contactez-nous </a></li>
                            </ul>
                            <div class="navbar-icons-2">
                                <div class="searchbar-open">
                                    <i class="flaticon-magnifier"></i>
                                </div>
                                <div class="user-dropdown-icon">
                                    <!-- <i class="flaticon-user"></i> -->
                                    <div class="account-dropdown">
                                        <!-- <ul>
<li class="account-el">
<i class="bx bx-user-pin"></i>
<a href="#">Se connecter</a>
</li>
<li class="account-el">
<i class="bx bxs-user-account"></i>
<a href="#">Mon compte</a>
</li>
<li class="account-el">
<i class="bx bx-extension"></i>
<a href="#">Parramètres</a>
</li>
<li class="account-el">
<i class="bx bx-log-in-circle"></i>
<a href="#">Se déconnecter</a>
</li>
</ul> -->
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-contact">
                                <ul>
                                    <li class="sidebar-single-contact"><i class="bx bxs-phone"></i> <a
                                            href="tel:+17632275032">+1 763-227-5032</a></li>
                                    <li class="sidebar-single-contact"><i class="bx bxs-envelope"></i><a
                                            href="https://demo.egenslab.com/cdn-cgi/l/email-protection#dbb2b5bdb49bbea3bab6abb7bef5b8b4b6"><span
                                                class="__cf_email__"
                                                data-cfemail="cfa6a1a9a08faab7aea2bfa3aae1aca0a2">[email&#160;protected]</span></a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <form>
                <div class="main-searchbar">
                    <div class="searchbar-close">
                        <i class="bx bx-x"></i>
                    </div>
                    <input type="text" placeholder="Recherche">
                    <div class="searchbar-icon">
                        <i class="bx bx-search"></i>
                    </div>
                </div>
            </form>
        </div>
    </header>


    @yield('content')


    <div class="newsletter-area pt-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="newsletter-wrapper">
                        <h2>Abonnez pour voir nos acctualités</h2>
                        <form>
                            <div class="input-group newsletter-input">
                                <input type="text" class="form-control" placeholder="Saisir votre Email"
                                    aria-label="Recipient's username" aria-describedby="button-addon2">
                                <button class="btn btn-outline-secondary" type="button"
                                    id="button-addon2">S'abonner</button>
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
                        <p>
                            {{ setting('site.informations') }}
                        </p>
                        <div class="footer-social-icons">
                            <h5>Suivez nous:</h5>
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
                                <h5 class="widget-title">Contactez nous</h5>
                                <div class="contact-box">
                                    <span><i class="bx bx-phone"></i></span>
                                    <div>
                                        <a href="tel:+01852-1265122">{{ setting('site.phone') }}</a>
                                        <a href="tel:+01852-1265122">{{ setting('site.phone') }}</a>
                                    </div>
                                </div>
                                <div class="contact-box">
                                    <span><i class="bx bx-mail-send"></i></span>
                                    <div>
                                        <a
                                            href="https://demo.egenslab.com/cdn-cgi/l/email-protection#5b32353d341b3e233a362b373e75383436"><span
                                                class="__cf_email__"
                                                data-cfemail="9df4f3fbf2ddf8e5fcf0edf1f8b3fef2f0">{{ setting('site.Email') }}</span></a>
                                        <a
                                            href="https://demo.egenslab.com/cdn-cgi/l/email-protection#44373134342b363004213c25293428216a272b29"><span
                                                class="__cf_email__"
                                                data-cfemail="2c5f595c5c435e586c49544d415c4049024f4341">{{ setting('site.Email') }}</span></a>
                                    </div>
                                </div>
                                <div class="contact-box">
                                    <span><i class="bx bx-location-plus"></i></span>
                                    <div>
                                        <a href="#">{{ setting('site.Adresse') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-5">
                            <div class="footer-links">
                                <h5 class="widget-title">support</h5>
                                <div class="category-list">
                                    <ul>
                                        <li><a href="{{ route('contact') }}">Contactez nous</a></li>
                                        <li><a href="{{ route('info') }}">A propos de nous</a></li>
                                        <li><a href="{{ route('excursion') }}">Excursions</a></li>
                                        <li><a href="{{ route('activite') }}">Activités</a></li>
                                        <li><a href="#">termes et conditions</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="footer-links payment-links">
                                <h5 class="widget-title">Nous acceptons:</h5>
                                <div class="payment-cards">
                                    <img src="{{ asset('assets/images/payment/payment-card-2.png') }}" alt
                                        class="img-fluid">
                                    <img src="{{ asset('assets/images/payment/payment-card-1.png') }}" alt
                                        class="img-fluid">
                                    <img src="{{ asset('assets/images/payment/payment-card-3.png') }}" alt
                                        class="img-fluid">
                                    <img src="{{ asset('assets/images/payment/payment-card-4.png') }}" alt
                                        class="img-fluid">
                                    <img src="{{ asset('assets/images/payment/payment-card-5.png') }}" alt
                                        class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyrigth-area">
                        <p>Copyright 2025 <a href="#">TourX</a> | Design By <a href="https://www.linkedin.com/in/tirarmohamedtaher/">24CONFIG Technologie</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/typed.js') }}"></script>

    <script src="{{ asset('assets/js/main.js') }}"></script>

    @stack('scripts')
</body>

</html>
