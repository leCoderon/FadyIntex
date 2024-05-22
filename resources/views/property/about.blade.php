@extends('layout')

@section('title', 'Our services')

@section('content')

    <div class="hero page-inner overlay" style="background-image: url('images/hero_bg_3.jpg')">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-9 text-center mt-5">
                    <h1 class="heading" data-aos="fade-up">À propos de FADYINTEX GROUP</h1>

                    <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
                        <ol class="breadcrumb text-center justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('homepage') }}">Acceuil</a></li>
                            <li class="breadcrumb-item active text-white-50" aria-current="page">
                                A propos
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row text-left mb-5">
                <div class="col-12">
                    <h2 class="font-weight-bold heading text-primary mb-4">À propos de FADYINTEX GROUP</h2>
                </div>
                <div class="col-lg-6">
                    <p class="text-black-50">
                        FADYINTEX GROUP est une entreprise de premier plan dans le domaine de l'immobilier, offrant une
                        gamme complète de services pour répondre aux besoins variés de ses clients. En tant qu'agence
                        immobilière réputée, nous nous spécialisons dans la vente, la location et la gestion de propriétés
                        résidentielles et commerciales. Notre équipe d'experts dévoués utilise son vaste réseau et sa
                        connaissance approfondie du marché pour garantir des transactions immobilières fluides et
                        sécurisées.
                    </p>
                    <p class="text-black-50">
                        En tant que promoteur constructeur, FADYINTEX GROUP réalise des projets de construction de haute
                        qualité, depuis la conception jusqu'à la livraison. Nous nous engageons à créer des espaces de vie
                        modernes et fonctionnels, adaptés aux exigences de nos clients. Nos projets incluent des résidences
                        de luxe, des bâtiments commerciaux et des infrastructures industrielles, tous conçus avec une
                        attention particulière aux détails et à la durabilité.
                    </p>

                </div>
                <div class="col-lg-6">
                    <p class="text-black-50">
                        Notre service d'aménagement foncier est dédié à transformer des terrains bruts en espaces
                        constructibles viabilisés. Nous prenons en charge toutes les étapes du processus, de l'acquisition
                        des terrains à la réalisation des infrastructures nécessaires, en veillant à ce que chaque projet
                        soit mené à bien dans le respect des normes environnementales et réglementaires. De plus, notre
                        activité d'import-export nous permet de fournir des matériaux de construction de haute qualité,
                        garantissant ainsi la fiabilité et la compétitivité de nos projets.
                    </p>
                    <p class="text-black-50">
                        FADYINTEX GROUP est également une entreprise de gestion de patrimoine, aidant nos clients à
                        maximiser la valeur de leurs investissements immobiliers. Nous offrons des services personnalisés de
                        gestion, d'optimisation et de croissance de portefeuille immobilier. Notre équipe de conseillers en
                        investissement immobilier propose des stratégies sur mesure pour diversifier et optimiser les
                        rendements, assurant ainsi la pérennité et la rentabilité des investissements de nos clients.
                    </p>

                </div>
            </div>
        </div>
    </div>

    <div class="section section-4 bg-light py-5">
        <div class="container">

            <div class="row justify-content-between mb-5">
                <div class="col-lg-7 mb-5 mb-lg-0 order-lg-2">
                    <div class="img-about dots">
                        <img src="images/hero_bg_3.jpg" alt="Image" class="img-fluid" />
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex feature-h">
                        <span class="wrap-icon me-3">
                            <span class="icon-home2"></span>
                        </span>
                        <div class="feature-text">
                            <h3 class="heading">2M de propriétés</h3>
                            <p class="text-black-50">
                                Explorez notre vaste sélection de plus de 2 millions de propriétés, soigneusement choisies
                                pour répondre à tous vos besoins immobiliers.
                            </p>
                        </div>
                    </div>

                    <div class="d-flex feature-h">
                        <span class="wrap-icon me-3">
                            <span class="icon-person"></span>
                        </span>
                        <div class="feature-text">
                            <h3 class="heading">Les meilleurs agents</h3>
                            <p class="text-black-50">
                                Rencontrez nos agents immobiliers d'élite, reconnus pour leur expertise, leur dévouement et
                                leur service client exceptionnel.
                            </p>
                        </div>
                    </div>

                    <div class="d-flex feature-h">
                        <span class="wrap-icon me-3">
                            <span class="icon-security"></span>
                        </span>
                        <div class="feature-text">
                            <h3 class="heading">Propriétés légales</h3>
                            <p class="text-black-50">
                                Faites confiance à notre agence pour des transactions immobilières sécurisées et conformes
                                aux réglementations légales.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="0">
                    <img src="images/img_1.jpg" alt="Image" class="img-fluid" />
                </div>
                <div class="col-md-4 mt-lg-5" data-aos="fade-up" data-aos-delay="100">
                    <img src="images/img_3.jpg" alt="Image" class="img-fluid" />
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <img src="images/img_2.jpg" alt="Image" class="img-fluid" />
                </div>
            </div>
            <div class="row section-counter mt-5">
                <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="counter-wrap mb-5 mb-lg-0">
                        <span class="number"><span class="countup text-primary">15</span></span>
                        <span class="caption text-black-50"># Propriétés achetées</span>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                    <div class="counter-wrap mb-5 mb-lg-0">
                        <span class="number"><span class="countup text-primary">15</span></span>
                        <span class="caption text-black-50"># Propriétés vendues</span>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
                    <div class="counter-wrap mb-5 mb-lg-0">
                        <span class="number"><span class="countup text-primary">15</span></span>
                        <span class="caption text-black-50"># Propriétés</span>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="600">
                    <div class="counter-wrap mb-5 mb-lg-0">
                        <span class="number"><span class="countup text-primary">15</span></span>
                        <span class="caption text-black-50"># Agents</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section sec-testimonials bg-light">
        <div class="container">
            <div class="row mb-5 align-items-center">
                <div class="col-md-6">
                    <h2 class="font-weight-bold heading text-primary mb-4 mb-md-0">
                        L'équipe
                    </h2>
                </div>
                <div class="col-md-6 text-md-end">
                    <div id="testimonial-nav">
                        <span class="prev" data-controls="prev">Précédant</span>

                        <span class="next" data-controls="next">Suivant</span>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4"></div>
            </div>
            <div class="testimonial-slider-wrap">
                <div class="testimonial-slider">
                    <div class="item">
                        <div class="testimonial">
                            <img src="images/person_1-min.jpg" alt="Image"
                                class="img-fluid rounded-circle w-25 mb-4" />
                            <h3 class="h5 text-primary">James Smith</h3>
                            <p class="text-black-50">Designer, Co-founder</p>

                            <p>
                                Far far away, behind the word mountains, far from the
                                countries Vokalia and Consonantia, there live the blind texts.
                                Separated they live in Bookmarksgrove right at the coast of
                                the Semantics, a large language ocean.
                            </p>

                            <ul class="social list-unstyled list-inline dark-hover">
                                <li class="list-inline-item">
                                    <a href="#"><span class="icon-twitter"></span></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#"><span class="icon-facebook"></span></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#"><span class="icon-linkedin"></span></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#"><span class="icon-instagram"></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="item">
                        <div class="testimonial">
                            <img src="images/person_2-min.jpg" alt="Image"
                                class="img-fluid rounded-circle w-25 mb-4" />
                            <h3 class="h5 text-primary">Carol Houston</h3>
                            <p class="text-black-50">Designer, Co-founder</p>

                            <p>
                                Far far away, behind the word mountains, far from the
                                countries Vokalia and Consonantia, there live the blind texts.
                                Separated they live in Bookmarksgrove right at the coast of
                                the Semantics, a large language ocean.
                            </p>

                            <ul class="social list-unstyled list-inline dark-hover">
                                <li class="list-inline-item">
                                    <a href="#"><span class="icon-twitter"></span></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#"><span class="icon-facebook"></span></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#"><span class="icon-linkedin"></span></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#"><span class="icon-instagram"></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="item">
                        <div class="testimonial">
                            <img src="images/person_3-min.jpg" alt="Image"
                                class="img-fluid rounded-circle w-25 mb-4" />
                            <h3 class="h5 text-primary">Synthia Cameron</h3>
                            <p class="text-black-50">Designer, Co-founder</p>

                            <p>
                                Far far away, behind the word mountains, far from the
                                countries Vokalia and Consonantia, there live the blind texts.
                                Separated they live in Bookmarksgrove right at the coast of
                                the Semantics, a large language ocean.
                            </p>

                            <ul class="social list-unstyled list-inline dark-hover">
                                <li class="list-inline-item">
                                    <a href="#"><span class="icon-twitter"></span></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#"><span class="icon-facebook"></span></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#"><span class="icon-linkedin"></span></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#"><span class="icon-instagram"></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="item">
                        <div class="testimonial">
                            <img src="images/person_1-min.jpg" alt="Image" class="img-fluid rounded-circle w-25 mb-4" />
                            <h3 class="h5 text-primary">Davin Smith</h3>
                            <p class="text-black-50">Designer, Co-founder</p>

                            <p>
                                Far far away, behind the word mountains, far from the
                                countries Vokalia and Consonantia, there live the blind texts.
                                Separated they live in Bookmarksgrove right at the coast of
                                the Semantics, a large language ocean.
                            </p>

                            <ul class="social list-unstyled list-inline dark-hover">
                                <li class="list-inline-item">
                                    <a href="#"><span class="icon-twitter"></span></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#"><span class="icon-facebook"></span></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#"><span class="icon-linkedin"></span></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#"><span class="icon-instagram"></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
