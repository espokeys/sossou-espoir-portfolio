@extends('layouts.master')

@section('content')

    <!--================ Start Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                    <h2>Contactez-moi</h2>
                    <div class="page_link">
                        <a href="/">Accueil</a>
                        <a href="#">Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Banner Area =================-->

    <!--================Contact Area =================-->
    <section class="contact_area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="contact_info">
                        <div class="info_item">
                            <i class="lnr lnr-home"></i>
                            <h6>SOMAYAF SOGBOSSITO, Togo</h6>
                            <p>Quartier: Sogbossito, Lomé</p>
                        </div>
                        <div class="info_item">
                            <i class="lnr lnr-phone-handset"></i>
                            <h6><a href="tel:+22890803347">+228 90-80-33-47</a></h6>
                            <p>Disponible du lundi au vendredi, de 9 h à 18 h</p>
                        </div>
                        <div class="info_item">
                            <i class="lnr lnr-envelope"></i>
                            <h6><a href="mailto:sossouespoir91@gmail.com">sossouespoir91@gmail.com</a></h6>
                            <p>Envoyez-nous vos questions à tout moment !</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-9">


                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form class="row contact_form" action="{{ route('contact.send') }}" method="POST" id="contactForm">
                        @csrf
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Entrez votre nom"
                                    required>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Entrez votre adresse email" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="subject" name="subject"
                                    placeholder="Entrez le sujet" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control" name="message" id="message" rows="4"
                                    placeholder="Entrez votre message" required></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 text-right">
                            <button type="submit" class="primary_btn">
                                <span>Envoyer le message</span>
                            </button>
                        </div>
                    </form>

                </div>
            </div>
            <div id="mapBox" class="mapBox" data-lat="6.254886158057334" data-lon="1.1670179102383442" data-zoom="13"
                data-info="SOMAYAF SOGBOSSITO, Togo" data-mlat="6.254886158057334" data-mlon="1.1670179102383442">
            </div>

        </div>
    </section>
    <!--================Contact Area =================-->


@endsection
