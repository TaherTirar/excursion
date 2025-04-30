@extends('layouts.base')
@section('content')
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="breadcrumb-wrap">
                        <h2>Contactez-nous</h2>
                        <ul class="breadcrumb-links">
                            <li>
                                <a href="index.html">Acceuil</a>
                                <i class="bx bx-chevron-right"></i>
                            </li>
                            <li>Contactez-nous</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="contact-wrapper pt-90">
        <div class="contact-cards">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="contact-card">
                            <div class="contact-icon"><i class="flaticon-arrival"></i>
                            </div>
                            <div class="contact-info">
                                <h5>Addresse</h5>
                                <p>{{ setting('site.Adresse') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="contact-card">
                            <div class="contact-icon"><i class="flaticon-customer-service"></i>
                            </div>
                            <div class="contact-info">
                                <h5>Email et téléphone</h5>
                                <p>{{ setting('site.phone') }}
                                    <a href="https://demo.egenslab.com/cdn-cgi/l/email-protection" class="__cf_email__"
                                        data-cfemail="660e030a0a0926010b070f0a4805090b">
                                        {{ setting('site.Email') }}</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="contact-card">
                            <div class="contact-icon"><i class="flaticon-thumbs-up"></i>
                            </div>
                            <div class="contact-info">
                                <h5>réseau social</h5>
                                <ul class="contact-icons">
                                    <li><a href="#"><i class="bx bxl-instagram"></i></a></li>
                                    <li><a href="#"><i class="bx bxl-facebook"></i></a></li>
                                    <li><a href="#"><i class="bx bxl-twitter"></i></a></li>
                                    <li><a href="#"><i class="bx bxl-whatsapp"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="contact-inputs pt-120">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contact-details">
                            <h5 class="contact-d-head">Restons en contact</h5>
                            <p> {{ setting('site.contact') }}
                            </p>
                            <ul class="office-clock">
                                <li>
                                    <div class="clock-icon"><i class="flaticon-clock-1"></i></div>
                                    <div class="clock-info">
                                        <h5>Horaire de travail</h5>
                                        <p>Sat - Thu At <br> 10.00Am to 10.00PM</p>
                                    </div>
                                </li>
                                <li>
                                    <!-- <div class="clock-icon"><i class="flaticon-clock-1"></i></div> -->
                                    <!-- <div class="clock-info">
        <h5>Close Hour</h5>
        <p>Friday Office Close</p>
        </div> -->
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-form">

                            <form action="{{ route('store') }}" method="POST">
                                @csrf
                                <h5 class="contact-d-head">Contactez-nous</h5>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" name='nom' id='nom' placeholder="Nom complet">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" name='sujet' id='sujet' placeholder="Sujet">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="email" name='email' id='email' placeholder="votre Email">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" name='tel' id='tel' placeholder="téléphone">
                                    </div>
                                    <div class="col-lg-12">
                                        <textarea cols="30" rows="7" name='message' id='message' placeholder="écrire un message"></textarea>
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="submit" value="Envoyer">

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
