@extends('layouts.base')
@section('content')
    <div class="main-banner">
    <div class="banner-slider owl-carousel">
    <div class="slider-item slider-item-1">
    <div class="container">
    <div class="slider-content wow fadeInLeft animated" data-wow-delay="300ms" data-wow-duration="1500ms">
    <h2>Excursion Formidable à Essaouira </h2>
    <!-- <h5>7 Days, 8 Night Tour</h5> -->
    <div class="banner-btn">
    <a href="package.html" class="btn-common">Réserver maintenant</a>
    </div>
    </div>
    </div>
    </div>
    <div class="slider-item slider-item-2">
    <div class="container">
    <div class="slider-content wow fadeInLeft animated" data-wow-delay="300ms" data-wow-duration="1500ms">
    <h2>Excursion Extraordinaire à Agafay </h2>
    <!-- <h5>7 Days, 8 Night Tour</h5> -->
    <div class="banner-btn">
    <a href="package.html" class="btn-common">Réserver maintenant</a>
    </div>
    </div>
    </div>
    </div>
    <div class="slider-item slider-item-3">
    <div class="container">
    <div class="slider-content wow fadeInLeft animated" data-wow-delay="300ms" data-wow-duration="1500ms">
    <h2>Excursion Incroyable à Ourika </h2>
    <!-- <h5>7 Days, 8 Night Tour</h5> -->
    <div class="banner-btn">
    <a href="package.html" class="btn-common">Réserver maintenant</a>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>


    <!-- <div class="find-form">
    <div class="container">
    <form class="findfrom-wrapper">
    <div class="row">
    <div class="col-lg-3">
    <input type="text" name="whereto" placeholder="destination">
    </div>
    <div class="col-lg-3">
    <div class="calendar-input">
    <input type="text" name="check-in" class="input-field check-in" placeholder="dd-mm-yy">
    <i class="flaticon-calendar"></i>
    </div>
    </div>
    <div class="col-lg-3">
    <div class="custom-select">
    <select>
    <option value="0">Type du Voyage</option>
    <option value="1">Tour dans la ville</option>
    <option value="2">Tour pour vacances</option>
    <option value="3">Tour pour couple </option>
    <option value="4">Tour des Adventure </option>
    <option value="5">Tour pour Groupe</option>
    </select>
    </div>
    </div>
    <div class="col-lg-3">
    <div class="find-btn">
    <a href="#" class="btn-second"><i class="bx bx-search-alt"></i>Rechercher</a>
    </div>
    </div>
    </div>
    </form>
    </div>
    </div> -->


    <div class="package-area pt-120">
    
    <div class="container">
    <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
    
    <div class="section-head pb-45">
    <h5>Choisir votre Excursion</h5>
    <h2>Sélectionner les meilleurs excursions pour votre voyage</h2>
    </div>
    </div>
    </div>
    <div class="row">

    @foreach($services as $item)
    
    <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp animated" data-wow-duration="1500ms" data-wow-delay="0ms">
    <div class="package-card">
    <div class="package-thumb">
    <img src="assets/images/package/p-1.png" alt class="img-fluid">
    </div>
    <div class="package-details">
    <div class="package-info">
    <h5><span>${{$item->price}}</span>/Par personne</h5>
    <!-- <h5><i class="flaticon-calendar"></i>5 Days/6 night</h5> -->
    </div>
    <h3><i class="flaticon-arrival"></i>
    <a href="{{ route('activity.show', ['id' => $item->id]) }}">{{$item->titre}}</a>
    </h3>
    <div class="package-rating">
    <strong><i class="bx bxs-star"></i><span>8K+</span></strong>
    </div>
    </div>
    </div>
    </div>
    
    @endforeach
    
    <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp animated" data-wow-duration="1500ms" data-wow-delay="300ms">
    <div class="package-card">
    <div class="package-thumb">
    <img src="assets/images/package/p-2.png" alt class="img-fluid">
    </div>
    <div class="package-details">
    <div class="package-info">
    <h5><span>$28</span>/Par personne</h5>
    <!-- <h5><i class="flaticon-calendar"></i>5 Days/6 night</h5> -->
    </div>
    <h3><i class="flaticon-arrival"></i>
    <a href="package-details.html">Dinner et Quad au cocher de soleil au desert d'Agafay</a>
    </h3>
    <div class="package-rating">
    <strong><i class="bx bxs-star"></i><span>8K+</span> </strong>
    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp animated" data-wow-duration="1500ms" data-wow-delay="600ms">
    <div class="package-card">
    <div class="package-thumb">
    <img src="assets/images/package/p-3.png" alt class="img-fluid">
    </div>
    <div class="package-details">
    <div class="package-info">
    <h5><span>$28</span>/Par personne</h5>
    <!-- <h5><i class="flaticon-calendar"></i>5 Days/6 night</h5> -->
    </div>
    <h3><i class="flaticon-arrival"></i>
    <a href="package-details.html">Les cascades d'ouzoud</a>
    </h3>
    <div class="package-rating">
    <strong><i class="bx bxs-star"></i><span>8K+</span> </strong>
    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp animated" data-wow-duration="1500ms" data-wow-delay="0ms">
    <div class="package-card">
    <div class="package-thumb">
    <img src="assets/images/package/p-4.png" alt class="img-fluid">
    </div>
    <div class="package-details">
    <div class="package-info">
    <h5><span>$30</span>/Par personne</h5>
    <!-- <h5><i class="flaticon-calendar"></i>5 Days/6 night</h5> -->
    </div>
    <h3><i class="flaticon-arrival"></i>
    <a href="package-details.html">Une journée à Essaouira</a>
    </h3>
    <div class="package-rating">
    <strong><i class="bx bxs-star"></i><span>8K+</span> </strong>
    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp animated" data-wow-duration="1500ms" data-wow-delay="300ms">
    <div class="package-card">
    <div class="package-thumb">
    <img src="assets/images/package/p-5.png" alt class="img-fluid">
    </div>
    <div class="package-details">
    <div class="package-info">
    <h5><span>$240</span>/Par personne</h5>
    <!-- <h5><i class="flaticon-calendar"></i>5 Days/6 night</h5> -->
    </div>
    <h3><i class="flaticon-arrival"></i>
    <a href="package-details.html">Desert de Merzouga</a>
    </h3>
    <div class="package-rating">
    <strong><i class="bx bxs-star"></i><span>8K+</span></strong>
    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp animated" data-wow-duration="1500ms" data-wow-delay="600ms">
    <div class="package-card">
    <div class="package-thumb">
    <img src="assets/images/package/p-6.png" alt class="img-fluid">
    </div>
    <div class="package-details">
    <div class="package-info">
    <h5><span>$145</span>/Par personne</h5>
    <!-- <h5><i class="flaticon-calendar"></i>5 Days/6 night</h5> -->
    </div>
    <h3><i class="flaticon-arrival"></i>
    <a href="package-details.html">Desert de Zagoura</a>
    </h3>
    <div class="package-rating">
    <strong><i class="bx bxs-star"></i><span>8K+</span></strong>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    
    </div>


    <div class="destinations-area pt-105">
    <div class="container">
    <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
    <div class="section-head pb-40">
    <h5>Les activités les plus demandés</h5>
    <h2>Sélectionner les meilleurs activités</h2>
    </div>
    </div>
    </div>
    <div class="row">
    <div class="col-lg-3 col-md-3">
    <div class="package-slider-wrap">
    <img src="assets/images/destination/d-1.png" alt class="img-fluid">
    <div class="pakage-overlay">
    <strong>Marrakech</strong>
    </div>
    </div>
    </div>
    <div class="col-lg-9 col-md-9">
    
    <div class="row owl-carousel destinations-1">
    @foreach ($kechActivities as $item)
    <div class="package-card">
    <div class="package-thumb">
    <img src="assets/images/destination/d-4.png" alt class="img-fluid">
    </div>
    <div class="package-details">
    <div class="package-info">
    <h5><span>${{$item->price}}</span>/Par personne</h5>
    </div>
    <h3><i class="flaticon-arrival"></i>
    <a href="{{ route('activity.show', ['id' => $item->id]) }}">{{$item->titre}}</a>
    </h3>
    <div class="package-rating">
    <i class="bx bxs-star"></i>
    <strong><span>1.3K+</span></strong>
    </div>
    </div>
    </div>
    @endforeach
    <div class="package-card">
    <div class="package-thumb">
    <img src="assets/images/destination/d-5.png" alt class="img-fluid">
    </div>
    <div class="package-details">
    <div class="package-info">
    <h5><span>$220</span>/Par personne</h5>
    </div>
    <h3><i class="flaticon-arrival"></i>
    <a href="package-details.html">montgolfière</a>
    </h3>
    <div class="package-rating">
    <i class="bx bxs-star"></i>
    <strong><span>1.3K+</span> </strong>
    </div>
    </div>
    </div>
    <div class="package-card">
    <div class="package-thumb">
    <img src="assets/images/destination/d-6.png" alt class="img-fluid">
    </div>
    <div class="package-details">
    <div class="package-info">
    <h5><span>$30</span>/Par personne</h5>
    </div>
    <h3><i class="flaticon-arrival"></i>
    <a href="package-details.html">Quad à la Palemerie</a>
    </h3>
    <div class="package-rating">
    <i class="bx bxs-star"></i>
    <strong><span>1.3K+</span> </strong>
    </div>
    </div>
    </div>
    <div class="package-card">
    <div class="package-thumb">
    <img src="assets/images/destination/d-7.png" alt class="img-fluid">
    </div>
    <div class="package-details">
    <div class="package-info">
    <h5><span>$50</span>/Par personne</h5>
    </div>
    <h3><i class="flaticon-arrival"></i>
    <a href="package-details.html">Hamam and Massage</a>
    </h3>
    <div class="package-rating">
    <i class="bx bxs-star"></i>
    <strong><span>1.3K+</span> </strong>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="row">
    <div class="col-lg-9 col-md-9">
    
    <div class="row owl-carousel destinations-2">
    @foreach ($AgafayActivities as $item)
    <div class="package-card">
    <div class="package-thumb">
    <img src="assets/images/destination/d-7.png" alt class="img-fluid">
    </div>
    <div class="package-details">
    <div class="package-info">
    <h5><span>${{$item->price}}</span>/Par personne</h5>
    </div>
    <h3><i class="flaticon-arrival"></i>
    <a href="{{ route('activity.show', ['id' => $item->id]) }}">{{$item->titre}}</a>
    </h3>
    <div class="package-rating">
    <i class="bx bxs-star"></i>
    <strong><span>1.3K+</span></strong>
    </div>
    </div>
    </div>
    @endforeach
    <div class="package-card">
    <div class="package-thumb">
    <img src="assets/images/destination/d-8.png" alt class="img-fluid">
    </div>
    <div class="package-details">
    <div class="package-info">
    <h5><span>$50</span>/Par personne</h5>
    </div>
    <h3><i class="flaticon-arrival"></i>
    <a href="package-details.html">Dinner avec les spectacles</a>
    </h3>
    <div class="package-rating">
    <i class="bx bxs-star"></i>
    <strong><span>1.3K+</span> </strong>
    </div>
    </div>
    </div>
    <div class="package-card">
    <div class="package-thumb">
    <img src="assets/images/destination/d-9.png" alt class="img-fluid">
    </div>
    <div class="package-details">
    <div class="package-info">
    <h5><span>$120</span>/Par personne</h5>
    </div>
    <h3><i class="flaticon-arrival"></i>
    <a href="package-details.html">Buggy Agafay</a>
    </h3>
    <div class="package-rating">
    <i class="bx bxs-star"></i>
    <strong><span>1.3K+</span></strong>
    </div>
    </div>
    </div>
    <div class="package-card">
    <div class="package-thumb">
    <img src="assets/images/destination/d-10.png" alt class="img-fluid">
    </div>
    <div class="package-details">
    <div class="package-info">
    <h5><span>$80</span>/Per personne</h5>
    </div>
    <h3><i class="flaticon-arrival"></i>
    <a href="package-details.html">Day pass piscine et Déjeuner au desert d'Agafay</a>
    </h3>
    <div class="package-rating">
    <i class="bx bxs-star"></i>
    <strong><span>1.3K+</span> </strong>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-3 col-md-3">
    <div class="package-slider-wrap">
    <img src="assets/images/destination/d-2.png" alt class="img-fluid">
    <div class="pakage-overlay">
    <strong>Agafay</strong>
    </div>
    </div>
    </div>
    </div>
    <div class="row">
    <div class="col-lg-3 col-md-3">
    <div class="package-slider-wrap">
    <img src="assets/images/destination/d-3.png" alt class="img-fluid">
    <div class="pakage-overlay">
    <strong>Essaouira</strong>
    </div>
    </div>
    </div>
    <div class="col-lg-9 col-md-9">
    <div class="row owl-carousel destinations-1">
    @foreach($EssaouiraActivities as $item)
    <div class="package-card">
    <div class="package-thumb">
    <img src="assets/images/destination/d-11.png" alt class="img-fluid">
    </div>
    <div class="package-details">
    <div class="package-info">
    <h5><span>${{$item->price}}</span>/Par personne</h5>
    </div>
    <h3><i class="flaticon-arrival"></i>
    <a href="{{ route('activity.show', ['id' => $item->id]) }}">{{$item->titre}}</a>
    </h3>
    <div class="package-rating">
    <i class="bx bxs-star"></i>
    <strong><span>1.3K+</span></strong>
    </div>
    </div>
    </div>
    @endforeach
    <div class="package-card">
    <div class="package-thumb">
    <img src="assets/images/destination/d-5.png" alt class="img-fluid">
    </div>
    <div class="package-details">
    <div class="package-info">
    <h5><span>$24</span>/Par personne</h5>
    </div>
    <h3><i class="flaticon-arrival"></i>
    <a href="package-details.html">Equitation à la plage d'Essaouira </a>
    </h3>
    <div class="package-rating">
    <i class="bx bxs-star"></i>
    <strong><span>1.3K+</span></strong>
    </div>
    </div>
    </div>
    <div class="package-card">
    <div class="package-thumb">
    <img src="assets/images/destination/d-9.png" alt class="img-fluid">
    </div>
    <div class="package-details">
    <div class="package-info">
    <h5><span>$200</span>/Par personne</h5>
    </div>
    <h3><i class="flaticon-arrival"></i>
    <a href="package-details.html">Surf sur la côte Atlantique</a>
    </h3>
    <div class="package-rating">
    <i class="bx bxs-star"></i>
    <strong><span>1.3K+</span></strong>
    </div>
    </div>
    </div>
    <div class="package-card">
    <div class="package-thumb">
    <img src="assets/images/destination/d-4.png" alt class="img-fluid">
    </div>
    <div class="package-details">
    <div class="package-info">
    <h5><span>$12</span>/Par personne</h5>
    </div>
    <h3><i class="flaticon-arrival"></i>
    <a href="package-details.html">En dromadaire</a>
    </h3>
    <div class="package-rating">
    <i class="bx bxs-star"></i>
    <strong><span>1.3K+</span></strong>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>


    <div class="achievement-area p-80 mt-120">
    <div class="container">
    <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
    <div class="section-head pb-30">
    <h5>Pourquoi TourX</h5>
    <h2>Pourquoi vous voyagez avec tourx</h2>
    </div>
    </div>
    </div>
    <div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInLeft animated" data-wow-duration="1500ms" data-wow-delay="0ms">
    <div class="achievement-card mt-30">
    <div class="achievement-icon">
    <i class="flaticon-guide"></i>
    </div>
    <h5>2000+ de guide expert localement</h5>
    </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInLeft animated" data-wow-duration="1500ms" data-wow-delay="200ms">
    <div class="achievement-card mt-30">
    <div class="achievement-icon">
    <i class="flaticon-trust"></i>
    </div>
    <h5>100% agence de voyage de confiance</h5>
    </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInLeft animated" data-wow-duration="1500ms" data-wow-delay="400ms">
    <div class="achievement-card mt-30">
    <div class="achievement-icon">
    <i class="flaticon-experience"></i>
    </div>
    <h5>10+ ans d'expérience d'organisation de voyage</h5>
    </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInLeft animated" data-wow-duration="1500ms" data-wow-delay="600ms">
    <div class="achievement-card mt-30">
    <div class="achievement-icon">
    <i class="flaticon-traveller"></i>
    </div>
    <h5>90% de nos voyageurs sont satisfaits</h5>
    </div>
    </div>
    </div>
    </div>
    </div>


    <!-- <div class="review-area mt-120">
    <div class="container">
    <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
    <div class="section-head pb-40">
    <h5>Les retours de nos Clients</h5>
    <h2>Ce que nos voyageurs disent de nous</h2>
    </div>
    </div>
    </div>
    <div class="review-slider owl-carousel">
    <div class="review-card ">
    <div class="reviewer-img">
    <img src="assets/images/reviewer/reviewer-1.png" alt class="img-fluid">
    </div>
    <div class="reviewer-info">
    <h3>Dina Jems</h3>
    <h5>Traveller</h5>
    <p>Fusce aliquam luctus est, eget tincidunt velit scelerisque rhoncus. Aliquam lacinia ipsum ornare, porttitor risus nec,
    mattis mauris. </p>
    </div>
    </div>
    <div class="review-card">
    <div class="reviewer-img">
    <img src="assets/images/reviewer/reviewer-2.png" alt class="img-fluid">
    </div>
    <div class="reviewer-info">
    <h3>Jahid Hassan</h3>
    <h5>Traveller</h5>
    <p>Fusce aliquam luctus est, eget tincidunt velit scelerisque rhoncus. Aliquam lacinia ipsum ornare, porttitor risus nec,
    mattis mauris. </p>
    </div>
    </div>
    <div class="review-card">
    <div class="reviewer-img">
    <img src="assets/images/reviewer/reviewer-3.png" alt class="img-fluid">
    </div>
    <div class="reviewer-info">
    <h3>Shwan Pull</h3>
    <h5>Traveller</h5>
    <p>Fusce aliquam luctus est, eget tincidunt velit scelerisque rhoncus. Aliquam lacinia ipsum ornare, porttitor risus nec,
    mattis mauris. </p>
    </div>
    </div>
    <div class="review-card ">
    <div class="reviewer-img">
    <img src="assets/images/reviewer/reviewer-1.png" alt class="img-fluid">
    </div>
    <div class="reviewer-info">
    <h3>Dina Jems</h3>
    <h5>Traveller</h5>
    <p>Fusce aliquam luctus est, eget tincidunt velit scelerisque rhoncus. Aliquam lacinia ipsum ornare, porttitor risus nec,
    mattis mauris. </p>
    </div>
    </div>
    <div class="review-card">
    <div class="reviewer-img">
    <img src="assets/images/reviewer/reviewer-2.png" alt class="img-fluid">
    </div>
    <div class="reviewer-info">
    <h3>Jahid Hassan</h3>
    <h5>Traveller</h5>
    <p>Fusce aliquam luctus est, eget tincidunt velit scelerisque rhoncus. Aliquam lacinia ipsum ornare, porttitor risus nec,
    mattis mauris. </p>
    </div>
    </div>
    <div class="review-card">
    <div class="reviewer-img">
    <img src="assets/images/reviewer/reviewer-3.png" alt class="img-fluid">
    </div>
    <div class="reviewer-info">
    <h3>Shwan Pull</h3>
    <h5>Traveller</h5>
    <p>Fusce aliquam luctus est, eget tincidunt velit scelerisque rhoncus. Aliquam lacinia ipsum ornare, porttitor risus nec,
    mattis mauris. </p>
    </div>
    </div>
    <div class="review-card ">
    <div class="reviewer-img">
    <img src="assets/images/reviewer/reviewer-1.png" alt class="img-fluid">
    </div>
    <div class="reviewer-info">
    <h3>Dina Jems</h3>
    <h5>Traveller</h5>
    <p>Fusce aliquam luctus est, eget tincidunt velit scelerisque rhoncus. Aliquam lacinia ipsum ornare, porttitor risus nec,
    mattis mauris. </p>
    </div>
    </div>
    </div>
    </div>
    </div> -->


    <div class="feature-area mt-120 p-80">
    <div class="container">
    <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
    <div class="section-head pb-60">
    <h5>Excursion en Lumière</h5>
    <h2>Voir nos meilleurs forfaits populaires</h2>
    </div>
    </div>
    </div>
    <div class="row">
    <div class="col-lg-12">
    <div class="feature-slider owl-carousel">
    <div class="feature-card">
    <div class="feature-img">
    <img src="assets/images/feature/f-1.png" alt class="img-fluid">
    </div>
    <div class="feature-content">
    <a href="package-details.html" class="title">Quad et Chameaux au cocher de soleil au desert d'agafay et dinner avec spectacles </a>
    <h5><i class="bx bxs-star"></i><span> 7K+</span></h5>
    <strong>$150 <span>$200</span></strong>
    </div>
    </div>
    <div class="feature-card">
    <div class="feature-img">
    <img src="assets/images/feature/f-2.png" alt class="img-fluid">
    </div>
    <div class="feature-content">
    <a href="package-details.html" class="title">Visite des villages berbères, déjeuner au bout de la rivière et explore les montagnes d'atlas  </a>
    <h5><i class="bx bxs-star"></i><span> 7K+</span></h5>
    <strong>$25 <span>$200</span></strong>
    </div>
    </div>
    <div class="feature-card">
    <div class="feature-img">
    <img src="assets/images/feature/f-1.png" alt class="img-fluid">
    </div>
    <div class="feature-content">
    <a href="package-details.html" class="title">Group Travel Go To Bea
    Amsterdam</a>
    <h5><i class="bx bxs-star"></i><span> 7K+</span>Rating</h5>
    <strong>$150 <span>$200</span></strong>
    </div>
    </div>
    <div class="feature-card">
    <div class="feature-img">
    <img src="assets/images/feature/f-2.png" alt class="img-fluid">
    </div>
    <div class="feature-content">
    <a href="package-details.html" class="title">Group Travel Go To Bea
    Amsterdam</a>
    <h5><i class="bx bxs-star"></i><span> 7K+</span>Rating</h5>
    <strong>$150 <span>$200</span></strong>
    </div>
    </div>
    <div class="feature-card">
    <div class="feature-img">
    <img src="assets/images/feature/f-1.png" alt class="img-fluid">
    </div>
    <div class="feature-content">
    <a href="package-details.html" class="title">Group Travel Go To Bea
    Amsterdam</a>
    <h5><i class="bx bxs-star"></i><span> 7K+</span>Rating</h5>
    <strong>$150 <span>$200</span></strong>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
@endsection