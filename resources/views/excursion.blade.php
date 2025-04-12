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
    <a href="index.html">Acceuil</a>
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
<h5>Afficher 1-5 de 10 resultats</h5>
</div>
</div>
<div class="col-lg-1 col-md-6 col-sm-6">
<div class="custom-select package-option">
<select name='service_id'>
@foreach($services as $service)
<option value="{{$service->id}}">{{$service->titre}}</option>
@endforeach
<option value="1">les cascades d'ouzoud</option>
<option value="2">desert d'Agafay</option>
<option value="3">Essaouira</option>
</select>
<script>
    document.getElementById('ervice_id').addEventListener('change', function() {
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
<div class="col-lg-3 col-md-3 col-sm-3">
@foreach($services as $service)
<div class="package-card">
<div class="package-thumb">
<img src="{{asset('storage/'.$service->image)}}" alt class="img-fluid">
</div>
<div class="package-details">
<div class="package-info">
<h5><span>${{$service->price}}</span>/Per Person</h5>
<h5><i class="flaticon-calendar"></i> {{$service->duree +1}}Jour/ {{$service->duree}}Nuitées</h5>
</div>
<h3><i class="flaticon-arrival"></i>
<a href="{{ route('activity.show', ['id' => $service->id]) }}">{{$service->titre}}</a>
</h3>
<p>{{$service->description}}</p>
<div class="package-rating">
<strong><i class="bx bxs-star"></i><span>8K+</span> Rating</strong>
</div>
</div>
</div>
@endforeach
</div>
<div class="col-lg-6 col-md-6 col-sm-6">
<div class="package-card">
<div class="package-thumb">
<img src="{{ asset('assets/images/package/p-2.png')}}" alt class="img-fluid">
</div>
<div class="package-details">
<div class="package-info">
<h5><span>$280</span>/Per Person</h5>
<h5><i class="flaticon-calendar"></i>5 Days/6 night</h5>
</div>
<h3><i class="flaticon-arrival"></i>
<a href="package-details.html">Lake Garda, Italy</a>
</h3>
<div class="package-rating">
<strong><i class="bx bxs-star"></i><span>8K+</span> Rating</strong>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6">
<div class="package-card">
<div class="package-thumb">
<img src="{{asset('assets/images/package/p-3.png')}}" alt class="img-fluid">
</div>
<div class="package-details">
<div class="package-info">
<h5><span>$120</span>/Per Person</h5>
<h5><i class="flaticon-calendar"></i>5 Days/6 night</h5>
</div>
<h3><i class="flaticon-arrival"></i>
<a href="package-details.html">Mount Dtna, Italyr</a>
</h3>
<div class="package-rating">
<strong><i class="bx bxs-star"></i><span>8K+</span> Rating</strong>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6">
<div class="package-card">
<div class="package-thumb">
<img src="{{('assets/images/package/p-4.png')}}" alt class="img-fluid">
</div>
<div class="package-details">
<div class="package-info">
<h5><span>$300</span>/Per Person</h5>
<h5><i class="flaticon-calendar"></i>5 Days/6 night</h5>
</div>
<h3><i class="flaticon-arrival"></i>
<a href="package-details.html">Amalfi Costa, Italy</a>
</h3>
<div class="package-rating">
<strong><i class="bx bxs-star"></i><span>8K+</span> Rating</strong>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6">
<div class="package-card">
<div class="package-thumb">
<img src="{{ asset('assets/images/package/p-5.png')}}" alt class="img-fluid">
</div>
<div class="package-details">
<div class="package-info">
<h5><span>$240</span>/Per Person</h5>
<h5><i class="flaticon-calendar"></i>5 Days/6 night</h5>
</div>
<h3><i class="flaticon-arrival"></i>
<a href="package-details.html">French Rivira, France</a>
</h3>
<div class="package-rating">
<strong><i class="bx bxs-star"></i><span>8K+</span> Rating</strong>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6">
<div class="package-card">
<div class="package-thumb">
<img src="{{asset('assets/images/package/p-6.png')}}" alt class="img-fluid">
</div>
<div class="package-details">
<div class="package-info">
<h5><span>$145</span>/Per Person</h5>
<h5><i class="flaticon-calendar"></i>5 Days/6 night</h5>
</div>
<h3><i class="flaticon-arrival"></i>
<a href="package-details.html">Lake Geneva, France</a>
</h3>
<div class="package-rating">
<strong><i class="bx bxs-star"></i><span>8K+</span> Rating</strong>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6">
<div class="package-card">
<div class="package-thumb">
<img src="{{ asset('assets/images/package/p-1.png')}}" alt class="img-fluid">
</div>
<div class="package-details">
<div class="package-info">
<h5><span>$180</span>/Per Person</h5>
<h5><i class="flaticon-calendar"></i>5 Days/6 night</h5>
</div>
<h3><i class="flaticon-arrival"></i>
<a href="package-details.html">Paris Hill Tour</a>
</h3>
<div class="package-rating">
<strong><i class="bx bxs-star"></i><span>8K+</span> Rating</strong>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6">
<div class="package-card">
<div class="package-thumb">
<img src="{{ asset('assets/images/package/p-2.png')}}" alt class="img-fluid">
</div>
<div class="package-details">
<div class="package-info">
<h5><span>$280</span>/Per Person</h5>
<h5><i class="flaticon-calendar"></i>5 Days/6 night</h5>
</div>
<h3><i class="flaticon-arrival"></i>
<a href="package-details.html">Lake Garda, Italy</a>
</h3>
<div class="package-rating">
<strong><i class="bx bxs-star"></i><span>8K+</span> Rating</strong>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6">
<div class="package-card">
<div class="package-thumb">
<img src="{{asset('assets/images/package/p-3.png')}}" alt class="img-fluid">
</div>
<div class="package-details">
<div class="package-info">
<h5><span>$120</span>/Per Person</h5>
<h5><i class="flaticon-calendar"></i>5 Days/6 night</h5>
</div>
<h3><i class="flaticon-arrival"></i>
<a href="package-details.html">Mount Dtna, Italyr</a>
</h3>
<div class="package-rating">
<strong><i class="bx bxs-star"></i><span>8K+</span> Rating</strong>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6">
<div class="package-card">
<div class="package-thumb">
<img src="{{ asset('assets/images/package/p-4.png')}}" alt class="img-fluid">
</div>
<div class="package-details">
<div class="package-info">
<h5><span>$300</span>/Per Person</h5>
<h5><i class="flaticon-calendar"></i>5 Days/6 night</h5>
</div>
<h3><i class="flaticon-arrival"></i>
<a href="package-details.html">Amalfi Costa, Italy</a>
</h3>
<div class="package-rating">
<strong><i class="bx bxs-star"></i><span>8K+</span> Rating</strong>
</div>
</div>
</div>
</div>
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
<!-- <div class="col-lg-4">
<div class="package-sidebar">
<div class="row">
<div class="col-lg-12 col-md-12">
<div class="sidebar-searchbox">
<div class="input-group search-box">
<input type="text" class="form-control" placeholder="Chercher une Excursion..." aria-label="Recipient's username" aria-describedby="button-addon2">
<button class="btn btn-outline-secondary" type="button"><i class="bx bx-paper-plane"></i></button>
</div>
</div>
</div>
<div class="col-lg-12 col-md-12">
<div class="sidebar-range mt-40">
<h5 class="categorie-head">Price Range</h5>
<div class="dual-range" data-min="20" data-max="1000">
<span class="handle left"></span>
<span class="highlight"></span>
<span class="handle right"></span>
</div>
</div>
</div>
<div class="col-lg-12 col-md-6">
<div class="sidebar-duration mt-40">
<h5 class="categorie-head">Durations</h5>
<div class="durations-option radio-box">
<div class="single-option">
<input type="radio" name="duration" id="duration1">
<label for="duration1">0 - 24 Hour</label>
</div>
<div class="single-option">
<input type="radio" name="duration" id="duration2">
<label for="duration2">1 - 2 Days</label>
</div>
<div class="single-option">
<input type="radio" name="duration" id="duration3">
<label for="duration3">2 - 3 Days</label>
</div>
<div class="single-option">
<input type="radio" name="duration" id="duration4">
<label for="duration4">3 - 4 Days</label>
</div>
<div class="single-option">
<input type="radio" name="duration" id="duration5">
<label for="duration5">5 - 6 Days</label>
</div>
</div>
</div>
</div>
<div class="col-lg-12 col-md-6">
<div class="sidebar-categorie mt-40">
<h5 class="categorie-head">Categories</h5>
<div class="durations-option radio-box">
<div class="single-option">
<input type="radio" name="categorie" id="categorie1">
<label for="categorie1">Adventure Tour</label>
</div>
<div class="single-option">
<input type="radio" name="categorie" id="categorie2">
<label for="categorie2">City Tour</label>
</div>
<div class="single-option">
<input type="radio" name="categorie" id="categorie3">
<label for="categorie3">Group Tour</label>
</div>
<div class="single-option">
<input type="radio" name="categorie" id="categorie4">
<label for="categorie4">Couple Tour</label>
</div>
<div class="single-option">
<input type="radio" name="categorie" id="categorie5">
<label for="categorie5">Village Tour</label>
</div>
</div>
</div>
</div>
<div class="col-lg-12 col-md-6">
<div class="sidebar-banner mt-40">
<img src="{{ asset('assets/images/sidebar-banner.png')}}" alt class="img-fluid">
<div class="sidebar-banner-overlay">
<div class="overlay-content">
<h3>Reçevoir un coupon de 20% sur votre prochain voyage</h3>
<div class="sidebar-banner-btn">
<a href="#">Réserver</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div> -->
<!-- </div> -->
</div>l
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
<img src="{{ asset('assets/images/logo-2.png')}}" alt class="img-fluid">
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
<img src="{{ asset('assets/images/payment/payment-card-2.png')}}" alt class="img-fluid">
<img src="{{ asset('assets/images/payment/payment-card-1.png')}}" alt class="img-fluid">
<img src="{{ asset('assets/images/payment/payment-card-3.png')}}" alt class="img-fluid">
<img src="{{ asset('assets/images/payment/payment-card-4.png')}}" alt class="img-fluid">
<img src="{{ asset('assets/images/payment/payment-card-5.png')}}" alt class="img-fluid">
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


<!-- <script src="{{ asset('assets/js/jquery-3.6.0.min.js')}}"></script>
<script src="{{ asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('assets/js/jquery-ui.min.js')}}"></script>
<script src="{{ asset('assets/js/popper.min.js')}}"></script>
<script src="{{ asset('assets/js/priceSlider.js')}}"></script>
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{ asset('assets/js/wow.min.js')}}"></script>
<script src="{{ asset('assets/js/typed.js')}}"></script>

<script src="{{ asset('assets/js/main.js')}}"></script> -->
@endsection

<!-- Mirrored from demo.egenslab.com/html/tourx/package-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Mar 2024 11:05:13 GMT -->
