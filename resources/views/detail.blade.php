@extends('layouts.base')
@section('content')
<div class="breadcrumb-area">
<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12">
<div class="breadcrumb-wrap">
<h2>{{$activity->titre}}</h2>
<ul class="breadcrumb-links">
<li>
<a href="index.html">Acceuil</a>
<i class="bx bx-chevron-right"></i>
</li>
<li>Détail de l'{{$activity->type}} </li>
</ul>
</div>
</div>
</div>
</div>
</div>

<div class="package-details-wrapper pt-120">
<div class="container">
<div class="row">
<div class="col-lg-8">
<div class="package-details">
<div class="package-thumb">
<img src="{{ asset('assets/images/package/pd-thumb.png')}}" alt>
</div>
<div class="package-header">
<div class="package-title">
<h3>{{$activity->titre}}</h3>
<strong><i class="flaticon-arrival"></i>
{{$activity->localisation}}
</strong>
</div>
<div class="pd-review">
<p><span class='price'>${{$activity->price}}/</span>personne</span>
<!-- <ul>
<li><i class="bx bxs-star"></i></li>
<li><i class="bx bxs-star"></i></li>
<li><i class="bx bxs-star"></i></li>
<li><i class="bx bxs-star"></i></li>
<li><i class="bx bx-star"></i></li>
</ul>  -->
<!-- <p>par per</p> -->
</div>
</div>
<div class="p-short-info">
<div class="single-info">
<i class="flaticon-clock"></i>
<div class="info-texts">
<strong>Durée</strong>
<p>{{$activity->duree}}</p>
</div>
</div>
<div class="single-info">
<i class="flaticon-footprints"></i>
<div class="info-texts">
<strong>Type d'excursion</strong>
<p>{{$activity->categorie}}</p>
</div>
</div>
<div class="single-info">
<i class="flaticon-traveller"></i>
<div class="info-texts">
<strong>Taille du groupe</strong>
<p>{{$activity->grouptaille}}</p>
</div>
</div>
<div class="single-info">
<i class="flaticon-translate"></i>
<div class="info-texts">
<strong>Langues</strong>
<p>Anglais</p>
</div>
</div>
</div>
<div class="package-tab">
<ul class="nav nav-pills" id="pills-tab" role="tablist">
<li class="nav-item" role="presentation">
<button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true"><i class="flaticon-info"></i>
Information</button>
</li>
<li class="nav-item" role="presentation">
<button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false"><i class="flaticon-clipboard"></i>
Plan du voyage</button>
</li>
<li class="nav-item" role="presentation">
<button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false"> <i class="flaticon-gallery"></i>
Galerie</button>
</li>
</ul>
<div class="tab-content p-tab-content" id="pills-tabContent">
<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
<div class="row">
<div class="col-lg-12">
<div class="tab-content-1">
<div class="p-overview">
<h5>Description</h5>
<p>{{$activity->description}}</p>
</div>
<!-- <div class="p-highlight">
<h5>Highlight</h5>
<ul>
<li><i class="bx bx-circle"></i> <p>Pellentesque accumsan magna in augue sagittis, non fringilla eros molestie.</p></li>
<li><i class="bx bx-circle"></i> <p>Pellentesque accumsan magna in augue sagittis, non fringilla eros molestie.</p></li>
<li><i class="bx bx-circle"></i> <p>Pellentesque accumsan magna in augue sagittis, non fringilla eros molestie.</p></li>
<li><i class="bx bx-circle"></i> <p>Pellentesque accumsan magna in augue sagittis, non fringilla eros molestie.</p></li>
<li><i class="bx bx-circle"></i> <p>Pellentesque accumsan magna in augue sagittis, non fringilla eros molestie.</p></li>
<li><i class="bx bx-circle"></i> <p>Pellentesque accumsan magna in augue sagittis, non fringilla eros molestie.</p></li>
</ul>
</div> -->
<div class="p-details-table">
<table class="table caption-top">
<tbody>
<tr>
<td>Destination</td>
<td>{{$activity->distination}}</td>
</tr>
<tr>
<td>Départ</td>
<td>{{$activity->depart}}</td>
</tr>
<tr>
<td>heure de départ</td>
<td>{{$activity->heuredepart}}</td>
</tr>
<tr>
<td>heure du retour</td>
<td>{{$activity->heureRetour}}</td>
</tr>
<tr>
<td>Ce qui est inclus</td>
<td>
{{$activity->inclusion}}
</td>
</tr>
<tr>
<td>Ce qui n'est pas inclus</td>
<td>
<ul class="table-list-disallow">
<li> <i class="bx bx-x"></i> Additional Services</li>
<li><i class="bx bx-x"></i> Insurance</li>
<li><i class="bx bx-x"></i> Drink</li>
<li><i class="bx bx-x"></i> Tickets</li>
</ul>
</td>
</tr>
<!-- <tr>
<td colspan="2" class="table-bottom"><i class="flaticon-public-transport"></i>
Travel With Bus</td>
</tr> -->
</tbody>
</table>
</div>
<div class="p-rationg">
<h5>Note</h5>
<div class="rating-card">
<div class="r-card-avarag">
<h2>4.9</h2>
<h5>Excellent</h5>
</div>
<div class="r-card-info">
<ul>
<li>
<strong>Hébergement</strong>
<ul class="r-rating">
<li>
<i class="bx bxs-star"></i>
<i class="bx bxs-star"></i>
<i class="bx bxs-star"></i>
<i class="bx bxs-star"></i>
<i class="bx bxs-star"></i>
</li>
</ul>
</li>
<li>
<strong>Transport</strong>
<ul class="r-rating">
<li>
<i class="bx bxs-star"></i>
<i class="bx bxs-star"></i>
<i class="bx bxs-star"></i>
<i class="bx bx-star"></i>
<i class="bx bx-star"></i>
</li>
</ul>
</li>
<li>
<strong>Confort</strong>
<ul class="r-rating">
<li>
<i class="bx bxs-star"></i>
<i class="bx bxs-star"></i>
<i class="bx bxs-star"></i>
<i class="bx bxs-star"></i>
<i class="bx bx-star"></i>
</li>
</ul>
</li>
<li>
<strong>Hospitalité</strong>
<ul class="r-rating">
<li>
<i class="bx bxs-star"></i>
<i class="bx bxs-star"></i>
<i class="bx bxs-star"></i>
<i class="bx bxs-star"></i>
<i class="bx bx-star"></i>
</li>
</ul>
</li>
<li>
<strong>Nourriture</strong>
<ul class="r-rating">
<li>
<i class="bx bxs-star"></i>
<i class="bx bxs-star"></i>
<i class="bx bx-star"></i>
<i class="bx bx-star"></i>
<i class="bx bx-star"></i>
</li>
</ul>
</li>
</ul>
</div>
</div>
</div>
<div class="p-review">
<!-- <ul>
<li class="p-review-card">
<div class="p-review-info">
<div class="p-reviewr-img">
<img src="{{ asset('assets/images/package/pr-1.png')}}" alt>
</div>
<div class="p-reviewer-info">
<strong>Bertram Bil</strong>
<p>2 April, 2021 10.00PM</p>
<ul class="review-star">
<li> <i class="bx bxs-star"></i> </li>
<li> <i class="bx bxs-star"></i> </li>
<li> <i class="bx bxs-star"></i> </li>
<li> <i class="bx bxs-star"></i> </li>
<li> <i class="bx bxs-star"></i> </li>
</ul>
</div>
</div>
<div class="p-review-texts">
<p>Morbi dictum pulvinar velit, id mollis lorem faucibus acUt sed
lacinia ipsum. Suspendisse massa augue lorem faucibus acUt
sed lacinia ipsum. Suspendisse </p>
</div>
<a href="#" class="r-reply-btn"><i class="bx bx-reply"></i> Répondre</a>
</li>
<li class="p-review-card">
<div class="p-review-info">
<div class="p-reviewr-img">
<img src="{{ asset('assets/images/package/pr-1.png')}}" alt>
</div>
<div class="p-reviewer-info">
<strong>Bertram Bil</strong>
<p>2 April, 2021 10.00PM</p>
<ul class="review-star">
<li> <i class="bx bxs-star"></i> </li>
<li> <i class="bx bxs-star"></i> </li>
<li> <i class="bx bxs-star"></i> </li>
<li> <i class="bx bxs-star"></i> </li>
<li> <i class="bx bxs-star"></i> </li>
</ul>
</div>
</div>
<div class="p-review-texts">
<p>Morbi dictum pulvinar velit, id mollis lorem faucibus acUt sed
lacinia ipsum. Suspendisse massa augue lorem faucibus acUt
sed lacinia ipsum. Suspendisse </p>
</div>
<a href="#" class="r-reply-btn"><i class="bx bx-reply"></i> Répondre</a>
</li>
<li class="p-review-card">
<div class="p-review-info">
<div class="p-reviewr-img">
<img src="{{ asset('assets/images/package/pr-1.png')}}" alt>
</div>
<div class="p-reviewer-info">
<strong>Bertram Bil</strong>
<p>2 April, 2021 10.00PM</p>
<ul class="review-star">
<li> <i class="bx bxs-star"></i> </li>
<li> <i class="bx bxs-star"></i> </li>
<li> <i class="bx bxs-star"></i> </li>
<li> <i class="bx bxs-star"></i> </li>
<li> <i class="bx bxs-star"></i> </li>
</ul>
</div>
</div>
<div class="p-review-texts">
<p>Morbi dictum pulvinar velit, id mollis lorem faucibus acUt sed
lacinia ipsum. Suspendisse massa augue lorem faucibus acUt
sed lacinia ipsum. Suspendisse </p>
</div>
<a href="#" class="r-reply-btn"><i class="bx bx-reply"></i> Répondre</a>
</li>
</ul> -->
</div>
<!-- <div class="p-review-input"> -->
<!-- <form>
<h5>Partager votre retour avec nous</h5>
<div class="row">
<div class="col-lg-6">
<input type="text" placeholder="Nom complet">
</div>
<div class="col-lg-6">
<input type="text" placeholder="votre Email">
</div>
<div class="col-lg-12">
<input type="text" placeholder="Type du voyage">
</div>
<div class="col-lg-12">
<textarea cols="30" rows="7" placeholder="Ecrire un message"></textarea>
</div>
<div class="col-lg-12">
<ul class="input-rating">
<li><i class="bx bx-star"></i></li>
<li><i class="bx bx-star"></i></li>
<li><i class="bx bx-star"></i></li>
<li><i class="bx bx-star"></i></li>
<li><i class="bx bx-star"></i></li>
</ul>
<input type="submit" value="Evoyer">
</div>
</div>
</form> -->
<!-- </div> -->
</div>
</div>
</div>
</div>
<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
<div class="tab-content-2">
<div class="row">
<div class="col-lg-12">
<div class="p-timeline-overview">
<h5>Overview</h5>
<p>{{$activity->plan}}</p>
</div>
<ul class="p-timeline">
<li>
<div class="timeline-index">
<div class="index-circle">
<h5>01</h5>
</div>
</div>
<div class="timeline-content">
<h5>DAY 1 : Departure And Small Tour</h5>
<strong>10.00 AM to 10.00 PM</strong>
<p>Pellentesque accumsan magna in augue sagittis, non fringilla eros molestie. Sed feugiat mi nec ex vehicula, nec vestibulum orci semper. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec tristique commodo fringilla.</p>
<ul>
<li><li><i class="bx bx-check"></i>Specilaized Bilingual Guide</li>
<li><li><i class="bx bx-check"></i>Private Transport</li>
<li><li><i class="bx bx-check"></i>Entrance Fees</li>
<li><li><i class="bx bx-check"></i>Box Lunch,Water,Dinner and Snacks</li>
</ul>
</div>
</li>
<li>
<div class="timeline-index">
<div class="index-circle">
<h5>02</h5>
</div>
</div>
<div class="timeline-content">
<h5>DAY 2 : Departure And Small Tour</h5>
<strong>10.00 AM to 10.00 PM</strong>
<p>Pellentesque accumsan magna in augue sagittis, non fringilla eros molestie. Sed feugiat mi nec ex vehicula, nec vestibulum orci semper. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec tristique commodo fringilla.</p>
<ul>
<li><li><i class="bx bx-check"></i>Specilaized Bilingual Guide</li>
<li><li><i class="bx bx-check"></i>Private Transport</li>
<li><li><i class="bx bx-check"></i>Entrance Fees</li>
<li><li><i class="bx bx-check"></i>Box Lunch,Water,Dinner and Snacks</li>
</ul>
</div>
</li>
<li>
<div class="timeline-index">
<div class="index-circle">
<h5>03</h5>
</div>
</div>
<div class="timeline-content">
<h5>DAY 3 : Departure And Small Tour</h5>
<strong>10.00 AM to 10.00 PM</strong>
<p>Pellentesque accumsan magna in augue sagittis, non fringilla eros molestie. Sed feugiat mi nec ex vehicula, nec vestibulum orci semper. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec tristique commodo fringilla.</p>
<ul>
<li><li><i class="bx bx-check"></i>Specilaized Bilingual Guide</li>
<li><li><i class="bx bx-check"></i>Private Transport</li>
<li><li><i class="bx bx-check"></i>Entrance Fees</li>
<li><li><i class="bx bx-check"></i>Box Lunch,Water,Dinner and Snacks</li>
</ul>
</div>
</li>
<li>
<div class="timeline-index">
<div class="index-circle">
<h5>04</h5>
</div>
</div>
<div class="timeline-content">
<h5>DAY 4 : Departure And Small Tour</h5>
<strong>10.00 AM to 10.00 PM</strong>
<p>Pellentesque accumsan magna in augue sagittis, non fringilla eros molestie. Sed feugiat mi nec ex vehicula, nec vestibulum orci semper. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec tristique commodo fringilla.</p>
<ul>
<li><li><i class="bx bx-check"></i>Specilaized Bilingual Guide</li>
<li><li><i class="bx bx-check"></i>Private Transport</li>
<li><li><i class="bx bx-check"></i>Entrance Fees</li>
<li><li><i class="bx bx-check"></i>Box Lunch,Water,Dinner and Snacks</li>
</ul>
</div>
</li>
<li>
<div class="timeline-index">
<div class="index-circle">
<h5>05</h5>
</div>
</div>
<div class="timeline-content">
<h5>DAY 5 : Departure And Small Tour</h5>
<strong>10.00 AM to 10.00 PM</strong>
<p>Pellentesque accumsan magna in augue sagittis, non fringilla eros molestie. Sed feugiat mi nec ex vehicula, nec vestibulum orci semper. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec tristique commodo fringilla.</p>
<ul>
<li><li><i class="bx bx-check"></i>Specilaized Bilingual Guide</li>
<li><li><i class="bx bx-check"></i>Private Transport</li>
<li><li><i class="bx bx-check"></i>Entrance Fees</li>
<li><li><i class="bx bx-check"></i>Box Lunch,Water,Dinner and Snacks</li>
</ul>
</div>
</li>
</ul>
</div>
</div>
</div>
</div>
<div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
<div class="tab-contant-3">
<div class="row">
<div class="col-lg-8 col-md-8">
<div class="package-grid-one">
<div class="single-grid">
<a class="g-img-sm-1 main-gallary" href="{{ asset('assets/images/gallary/gl-1.png')}}">
<img src="{{ asset('assets/images/gallary/gl-1.png')}}" alt>
</a>
<a class="g-img-sm-2 main-gallary" href="{{ asset('assets/images/gallary/gl-2.png')}}">
<img src="{{ asset('assets/images/gallary/gl-2.png')}}" alt>
</a>
<a class="g-img-md main-gallary" href="{{ asset('assets/images/gallary/g-xxl-1.png')}}">
<img src="{{ asset('assets/images/gallary/g-xxl-1.png')}}" alt>
</a>
</div>
<div class="single-grid mt-24">
<a class="g-img-sm-1 main-gallary" href="{{ asset('assets/images/gallary/gl-2.png')}}">
<img src="{{ asset('assets/images/gallary/gl-2.png')}}" alt>
</a>
<a class="g-img-sm-2 main-gallary" href="{{ asset('assets/images/gallary/gl-4.png')}}">
<img src="{{ asset('assets/images/gallary/gl-4.png')}}" alt>
</a>
<a class="g-img-md main-gallary" href="{{ asset('assets/images/gallary/g-xxl-2.png')}}">
<img src="{{ asset('assets/images/gallary/g-xxl-2.png')}}" alt>
</a>
</div>
<div class="single-grid mt-24">
<a class="g-img-sm-1 main-gallary" href="{{ asset('assets/images/gallary/gl-5.png')}}">
<img src="{{ asset('assets/images/gallary/gl-5.png')}}" alt>
</a>
<a class="g-img-sm-2 main-gallary" href="{{ asset('assets/images/gallary/gl-6.png')}}">
<img src="{{ asset('assets/images/gallary/gl-6.png')}}" alt>
</a>
<a class="g-img-md main-gallary" href="{{ asset('assets/images/gallary/g-xxl-3.png')}}">
<img src="{{ asset('assets/images/gallary/g-xxl-3.png')}}" alt>
</a>
</div>
<div class="single-grid mt-24">
<a class="g-img-sm-1 main-gallary" href="{{ asset('assets/images/gallary/gl-17.png')}}">
<img src="{{ asset('assets/images/gallary/gl-17.png')}}" alt>
</a>
<a class="g-img-sm-2 main-gallary" href="{{ asset('assets/images/gallary/gl-16.png')}}">
<img src="{{ asset('assets/images/gallary/gl-16.png')}}" alt>
</a>
<a class="g-img-md main-gallary" href="{{ asset('assets/images/gallary/g-xxl-4.png')}}">
<img src="{{ asset('assets/images/gallary/g-xxl-4.png')}}" alt>
</a>
</div>
</div>
</div>
<div class="col-lg-4 col-md-4">
<div class="package-grid-two">
<div class="single-grid-2">
<a class="main-gallary" href="{{ asset('assets/images/gallary/g-xl-1.png')}}">
<img src="{{ asset('assets/images/gallary/g-xl-1.png')}}" alt>
</a>
</div>
<div class="single-grid-2 mt-24">
<a class="single-grid-2 main-gallary mt-30" href="{{ asset('assets/images/gallary/g-xl-1.png')}}">
<img src="{{ asset('assets/images/gallary/g-xl-2.png')}}" alt>
</a>
</div>
<div class="single-grid-2 mt-24">
<a class="main-gallary mt-30" href="{{ asset('assets/images/gallary/g-xl-1.png')}}">
<img src="{{ asset('assets/images/gallary/g-xl-3.png')}}" alt>
</a>
</div>
<div class="single-grid-2 mt-24">
<a class="main-gallary mt-30" href="{{ asset('assets/images/gallary/g-xl-1.png')}}">
<img src="{{ asset('assets/images/gallary/g-xl-4.png')}}" alt>
</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4">
<div class="package-d-sidebar">
<div class="row">
<div class="col-lg-12 col-md-6">
<div class="p-sidebar-form">
<form>
<h5 class="package-d-head">Réserver cette {{$activity->type}}</h5>
<div class="row">
<div class="col-lg-12">
<input type="text" placeholder="Nom complet">
</div>
<div class="col-lg-12">
<input type="email" placeholder="Email">
</div>
<div class="col-lg-12">
<input type="tel" placeholder="Téléphone">
</div>
<!-- <div class="col-lg-12">
<select class="form-select" aria-label="Default select example">
<option selected>Tickets Type</option>
<option value="1">Travel With Bus</option>
<option value="2">Travel With Plane</option>
</select>
</div> -->
<div class="col-lg-6">
<select class="form-select" aria-label="Default select example">
<option selected>Adulte</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
</select>
</div>
<div class="col-lg-6">
<select class="form-select" aria-label="Default select example">
<option selected>Enfant</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
</select>
</div>
<div class="col-lg-12">
<div class="calendar-input">
<input type="text" name="check-in" class="input-field check-in" placeholder="dd-mm-yy">
<i class="flaticon-calendar"></i>
</div>
</div>
<div class="col-lg-12">
<textarea cols="30" rows="7" placeholder="Message"></textarea>
</div>
<div class="col-lg-12">
<button  class='total' type="text" value="Total:$80">Total:$80</button>
<input type="submit" value="Réserver">

</div>
</div>
</form>
</div>
</div>
<div class="col-lg-12 col-md-6">
<div class="p-sidebar-cards mt-40">
<h5 class="package-d-head">Autre aventure</h5>
<ul class="package-cards">
@foreach($activities as $item)
<li class="package-card-sm">

<div class="p-sm-img">
<img src="{{ asset('assets/images/package/p-sm-1.png')}}" alt>
</div>
<div class="package-info">
<div class="package-date-sm">
<strong><i class="flaticon-calendar"></i>{{$item->duree +1}}Jours/{{$item->duree}}Nuitées</strong>
</div>
<h3><i class="flaticon-arrival"></i>
<a href="package-details.html">{{$item->titre}}</a>
</h3>
<h5><span>${{$item->price}}</span>/Personne</h5>
</div>
</li>
@endforeach
<li class="package-card-sm">
<div class="p-sm-img">
<img src="{{ asset('assets/images/package/p-sm-4.png')}}" alt>
</div>
<div class="package-info">
<div class="package-date-sm">
<strong><i class="flaticon-calendar"></i>5 Days/6 night</strong>
</div>
<h3><i class="flaticon-arrival"></i>
<a href="package-details.html">Paris Hill Tour</a>
</h3>
<h5><span>$180</span>/ Per Person</h5>
</div>
</li>
<li class="package-card-sm">
<div class="p-sm-img">
<img src="{{ asset('assets/images/package/p-sm-2.png')}}" alt>
</div>
<div class="package-info">
<div class="package-date-sm">
<strong><i class="flaticon-calendar"></i>5 Days/6 night</strong>
</div>
<h3><i class="flaticon-arrival"></i>
<a href="package-details.html">Amalfi Costa</a>
</h3>
<h5><span>$180</span>/ Per Person</h5>
</div>
</li>
<li class="package-card-sm">
<div class="p-sm-img">
<img src="{{ asset('assets/images/package/p-sm-3.png')}}" alt>
</div>
<div class="package-info">
<div class="package-date-sm">
<strong><i class="flaticon-calendar"></i>5 Days/6 night</strong>
</div>
<h3><i class="flaticon-arrival"></i>
<a href="package-details.html">Mount Dtna</a>
</h3>
<h5><span>$180</span>/ Per Person</h5>
</div>
</li>
<li class="package-card-sm">
<div class="p-sm-img">
<img src="{{ asset('assets/images/package/p-sm-4.png')}}" alt>
</div>
<div class="package-info">
<div class="package-date-sm">
<strong><i class="flaticon-calendar"></i>5 Days/6 night</strong>
</div>
<h3><i class="flaticon-arrival"></i>
<a href="package-details.html">Fench Rivirany</a>
</h3>
<h5><span>$180</span>/ Per Person</h5>
</div>
</li>
</ul>
</div>
</div>
<!-- <div class="col-lg-12 col-md-6">
<div class="p-sidebar-organizer mt-40">
<h5 class="package-d-head">Organized By</h5>
<div class="organizer-card">
<div class="organizer-img">
<img src="{{ asset('assets/images/organizer.png')}}" alt>
</div>
<div class="organizer-info">
<h5>Travelhotel</h5>
<p>Member since 2021</p>
<ul class="organizer-rating">
<li><i class="bx bxs-star"></i></li>
<li><i class="bx bxs-star"></i></li>
<li><i class="bx bxs-star"></i></li>
<li><i class="bx bxs-star"></i></li>
<li><i class="bx bx-star"></i></li>
</ul>
<h5>500 Reviews</h5>
</div>
</div>
<div class="p-ask-btn">
<a href="#">ASK A QUESTION</a>
</div>
</div>
</div> -->
<div class="col-lg-12 col-md-6">
<div class="p-sidebar-banner mt-40">
<img src="{{ asset('assets/images/sidebar-banner.png')}}" alt class="img-fluid">
<div class="sidebar-banner-overlay">
<div class="overlay-content">
<h3>Gagner un coupon de 20% de votre voyage suivant</h3>
<div class="sidebar-banner-btn">
<a href="#">Book Now</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection