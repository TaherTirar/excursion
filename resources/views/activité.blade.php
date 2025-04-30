@extends('layouts.base')
@section('content')
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="breadcrumb-wrap">
                        <h2>activités</h2>
                        <ul class="breadcrumb-links">
                            <li>
                                <a href="index.html">Acceuil</a>
                                <i class="bx bx-chevron-right"></i>
                            </li>
                            <li>activités</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="package-standard-wrapper pt-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row mb-30">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="package-filter">
                                <h5>Afficher 1-5 de 10 résultats</h5>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <!-- <div class="custom-select package-option"> -->
                            <!-- <select id='selectOption'>
    @foreach ($services as $service)
    <option value="{{ $service->id }}">{{ $service->titre }}</option>
    @endforeach
    <option value="1">Hamam & Massage</option>
    <option value="2">montgolfière</option>
    <option value="3">Equitation</option>
    </select> -->

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        @foreach ($services as $service)
                            <div class="package-card-xl">
                                <div class="package-thumb-xl">
                                    <img src="{{ asset('assets/images/package/pv-1.png') }}" alt class="img-fluid">
                                </div>
                                <div class="package-details-xl">
                                    <div class="package-info">
                                        <h5><span>${{ $service->price }}</span>/Per Person</h5>
                                        <h5><i
                                                class="flaticon-calendar"></i>{{ $service->duree + 1 }}Jours/{{ $service->duree }}Nuitées
                                        </h5>
                                    </div>
                                    <h3><i class="flaticon-arrival"></i>
                                        <a
                                            href="{{ route('activity.show', ['id' => $service->id]) }}">{{ $service->titre }}</a>
                                    </h3>
                                    <p>{{ $service->description }}</p>
                                    <div class="package-rating">
                                        <strong><i class="bx bxs-star"></i><span>8K+</span> Rating</strong>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="package-card-xl">
                            <div class="package-thumb-xl">
                                <img src="{{ asset('assets/images/package/pv-2.png') }}" alt class="img-fluid">
                            </div>
                            <div class="package-details-xl">
                                <div class="package-info">
                                    <h5><span>$300</span>/Per Person</h5>
                                    <h5><i class="flaticon-calendar"></i>5 Days/6 night</h5>
                                </div>
                                <h3><i class="flaticon-arrival"></i>
                                    <a href="package-details.html">Lake Garda, Spain</a>
                                </h3>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem saepe amet magni!</p>
                                <div class="package-rating">
                                    <strong><i class="bx bxs-star"></i><span>3K+</span> Rating</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="package-card-xl">
                            <div class="package-thumb-xl">
                                <img src="{{ asset('assets/images/package/pv-3.png') }}" alt class="img-fluid">
                            </div>
                            <div class="package-details-xl">
                                <div class="package-info">
                                    <h5><span>$140</span>/Per Person</h5>
                                    <h5><i class="flaticon-calendar"></i>5 Days/6 night</h5>
                                </div>
                                <h3><i class="flaticon-arrival"></i>
                                    <a href="package-details.html">Mount Dtna, Spain</a>
                                </h3>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem saepe amet magni!</p>
                                <div class="package-rating">
                                    <strong><i class="bx bxs-star"></i><span>1K+</span> Rating</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="package-card-xl">
                            <div class="package-thumb-xl">
                                <img src="{{ asset('assets/images/package/pv-4.png') }}" alt class="img-fluid">
                            </div>
                            <div class="package-details-xl">
                                <div class="package-info">
                                    <h5><span>$250</span>/Per Person</h5>
                                    <h5><i class="flaticon-calendar"></i>5 Days/6 night</h5>
                                </div>
                                <h3><i class="flaticon-arrival"></i>
                                    <a href="package-details.html">Amalfi Costa, Italy</a>
                                </h3>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem saepe amet magni!</p>
                                <div class="package-rating">
                                    <strong><i class="bx bxs-star"></i><span>0.5K+</span> Rating</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="package-card-xl">
                            <div class="package-thumb-xl">
                                <img src="{{ asset('assets/images/package/pv-5.png') }}" alt class="img-fluid">
                            </div>
                            <div class="package-details-xl">
                                <div class="package-info">
                                    <h5><span>$460</span>/Per Person</h5>
                                    <h5><i class="flaticon-calendar"></i>5 Days/6 night</h5>
                                </div>
                                <h3><i class="flaticon-arrival"></i>
                                    <a href="package-details.html">Fench Rivira, Italy</a>
                                </h3>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem saepe amet magni!</p>
                                <div class="package-rating">
                                    <strong><i class="bx bxs-star"></i><span>1.2K+</span> Rating</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="package-card-xl">
                            <div class="package-thumb-xl">
                                <img src="{{ asset('assets/images/package/pv-7.png') }}" alt class="img-fluid">
                            </div>
                            <div class="package-details-xl">
                                <div class="package-info">
                                    <h5><span>$160</span>/Per Person</h5>
                                    <h5><i class="flaticon-calendar"></i>5 Days/6 night</h5>
                                </div>
                                <h3><i class="flaticon-arrival"></i>
                                    <a href="package-details.html">Lake Geneva, Italy</a>
                                </h3>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem saepe amet magni!</p>
                                <div class="package-rating">
                                    <strong><i class="bx bxs-star"></i><span>4K+</span> Rating</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="package-card-xl">
                            <div class="package-thumb-xl">
                                <img src="{{ asset('assets/images/package/pv-6.png') }}" alt class="img-fluid">
                            </div>
                            <div class="package-details-xl">
                                <div class="package-info">
                                    <h5><span>$310</span>/Per Person</h5>
                                    <h5><i class="flaticon-calendar"></i>5 Days/6 night</h5>
                                </div>
                                <h3><i class="flaticon-arrival"></i>
                                    <a href="package-details.html">Maritime Heritage</a>
                                </h3>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem saepe amet magni!</p>
                                <div class="package-rating">
                                    <strong><i class="bx bxs-star"></i><span>1K+</span> Rating</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="pagination mt-40">
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
    <input type="text" class="form-control" placeholder="Chercher une activité..." aria-label="Recipient's username" aria-describedby="button-addon2">
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
    </div> -->
            <!-- </div> -->
            <!-- </div>
    <div class="col-lg-12 col-md-6">
    <div class="sidebar-categorie mt-40">
    <h5 class="categorie-head">Catégories</h5>
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
    <img src="{{ asset('assets/images/sidebar-banner.png') }}" alt class="img-fluid">
    <div class="sidebar-banner-overlay">
    <div class="overlay-content">
    <h3>Bénéficier de 20% de réduction sur votre prochaine réservation</h3>
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
        </div>
    </div>
    </div>
@endsection
