@extends('layout')

@section('title', 'Property - Homepage')
@section('content')
    {{-- HERO --}}
    <div class="hero">
        <div class="hero-slide">
            <div class="img overlay" style="background-image: url('images/hero_bg_3.jpg')"></div>
            <div class="img overlay" style="background-image: url('images/hero_bg_2.jpg')"></div>
            <div class="img overlay" style="background-image: url('images/hero_bg_1.jpg')"></div>
        </div>

        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-9 text-center">
                    <h1 class="headin text-white display-6 " data-aos="fade-up">
                        Découvrez l'excellence immobilière avec FADYINTEX GROUP
                    </h1>
                    <h5 class="text-white my-5 fw-light ">Votre partenaire de confiance pour des
                        propriétés haut de gamme, des résidences de luxe et des investissements sécurisés.</h5>

                    <form action="#" class="narrow-w form-search d-flex align-items-stretch mb-3" data-aos="fade-up"
                        data-aos-delay="200">
                        <select class="form-control" placeholder="dd" name="title">
                            <option value="#">Je recherche... Ex: Villa etc...</option>
                            <option value="terrain">Terrain</option>
                            <option value="villa">villa</option>
                            <option value="duplex">duplex</option>
                        </select>
                        {{-- <input type="text" class="form-control px-4" name="title"
                            placeholder="Your District or City. e.g. Abobo Avocatier" value="{{ $input ?? '' }}" /> --}}
                        <button type="submit" class="btn btn-primary px-3" style="background: #005555;">Rechercher</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row mb-5 align-items-center">
                <div class="col-lg-6">
                    <h2 class="font-weight-bold text-primary heading">
                        Nos propriétés récentes
                    </h2>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <p>
                        <a href="{{ route('property.index') }}" class="btn btn-primary text-white btn-sm">Toutes nos propriétés
                            &rarr;
                        </a>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="property-slider-wrap">
                        <div class="property-slider">
                            @forelse ($properties as $property)
                                <!-- .item -->
                                @php
                                    $imgPath = str_contains($property->images->first()?->name, 'https://')
                                        ? $property->images->first()?->name
                                        : $property->images->first()?->imageUrl();
                                @endphp
                                <x-properties.property-item :property="$property"
                                    :image="$imgPath"></x-properties.property-item>
                            @empty
                                <div class="alert text-white mt-4 " style="background: #005555">
                                    Aucune propriété
                                    trouvée</div>
                            @endforelse


                        </div>

                        <div id="property-nav" class="controls" tabindex="0" aria-label="Carousel Navigation">
                            <span class="prev" data-controls="prev" aria-controls="property"
                                tabindex="-1">Précédant</span>
                            <span class="next" data-controls="next" aria-controls="property" tabindex="-1">Suivant</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="features-1">
        <div class="container">
            <div class="row">
                <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="box-feature">
                        <span class="flaticon-house"></span>
                        <h3 class="mb-3">Nos Propriétés</h3>
                        <p>
                            Découvrez notre vaste portefeuille de propriétés, allant des résidences de luxe aux propriétés
                            commerciales, soigneusement sélectionnées pour répondre à tous vos besoins immobiliers.
                        </p>
                        <p><a href="{{ route('property.index') }}" class="learn-more">En savoir plus</a></p>
                    </div>
                </div>
                <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
                    <div class="box-feature">
                        <span class="flaticon-building"></span>
                        <h3 class="mb-3">Propriétés à Vendre</h3>
                        <p>
                            Parcourez notre sélection exclusive de propriétés à vendre, offrant des opportunités uniques
                            pour trouver votre prochaine maison ou investissement idéal.
                        </p>
                        <p><a href="{{ route('property.index') }}" class="learn-more">En savoir plus</a></p>
                    </div>
                </div>
                <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                    <div class="box-feature">
                        <span class="flaticon-house-3"></span>
                        <h3 class="mb-3">Agent Immobilier</h3>
                        <p>
                            Faites connaissance avec nos agents immobiliers expérimentés, prêts à vous accompagner à chaque
                            étape de votre parcours immobilier avec expertise et dévouement.
                        </p>
                        <p><a href="#agents" class="learn-more">En savoir plus</a></p>
                    </div>
                </div>
                <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="600">
                    <div class="box-feature">
                        <span class="flaticon-house-1"></span>
                        <h3 class="mb-3">Terrains à Vendre</h3>
                        <p>
                            Trouvez le terrain de vos rêves parmi nos annonces de terrains à vendre, offrant des options
                            variées dans des emplacements prisés.
                        </p>
                        <p><a href="{{ route('property.index') }}" class="learn-more">En savoir plus</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="section sec-testimonials">
        <div class="container">
            <div class="row mb-5 align-items-center">
                <div class="col-md-6">
                    <h2 class="font-weight-bold heading text-primary mb-4 mb-md-0">
                        Nos clients témoignent
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
                            <div class="rate">
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                            </div>
                            <h3 class="h5 text-primary mb-4">James Smith</h3>
                            <blockquote>
                                <p>
                                    &ldquo;Grâce à FADYINTEX GROUP, nous avons trouvé la résidence de nos rêves. Leur équipe
                                    a été à l'écoute de nos besoins et a fait preuve d'une grande réactivité tout au long du
                                    processus. Nous sommes très satisfaits de leur service et de leur accompagnement
                                    personnalisé..&rdquo;
                                </p>
                            </blockquote>
                            <p class="text-black-50">Designer, Co-founder</p>
                        </div>
                    </div>

                    <div class="item">
                        <div class="testimonial">
                            <img src="images/person_2-min.jpg" alt="Image"
                                class="img-fluid rounded-circle w-25 mb-4" />
                            <div class="rate">
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                            </div>
                            <h3 class="h5 text-primary mb-4">Mike Houston</h3>
                            <blockquote>
                                <p>
                                    &ldquo;J'ai récemment vendu une propriété commerciale avec l'aide de FADYINTEX GROUP.
                                    Leur connaissance du marché et leurs conseils avisés ont été essentiels pour conclure la
                                    vente rapidement et au meilleur prix. Un grand merci à toute l'équipe pour leur soutien
                                    et leur professionnalisme.&rdquo;
                                </p>
                            </blockquote>
                            <p class="text-black-50">Designer, Co-founder</p>
                        </div>
                    </div>

                    <div class="item">
                        <div class="testimonial">
                            <img src="images/person_3-min.jpg" alt="Image"
                                class="img-fluid rounded-circle w-25 mb-4" />
                            <div class="rate">
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                            </div>
                            <h3 class="h5 text-primary mb-4">Cameron Webster</h3>
                            <blockquote>
                                <p>
                                    &ldquo;Nous avons fait appel à FADYINTEX GROUP pour la gestion de nos propriétés locatives, et
                                    nous n'avons pas été déçus. Leur service client est impeccable, et ils s'occupent de
                                    tout avec une grande efficacité. C'est un véritable soulagement de travailler avec une
                                    équipe aussi compétente.&rdquo;
                                </p>
                            </blockquote>
                            <p class="text-black-50">Designer, Co-founder</p>
                        </div>
                    </div>

                    <div class="item">
                        <div class="testimonial">
                            <img src="images/person_4-min.jpg" alt="Image"
                                class="img-fluid rounded-circle w-25 mb-4" />
                            <div class="rate">
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                            </div>
                            <h3 class="h5 text-primary mb-4">Dave Smith</h3>
                            <blockquote>
                                <p>
                                    &ldquo;FADYINTEX GROUP a su répondre à toutes nos attentes lors de l'achat de notre
                                    nouvelle maison. Leur expertise et leur professionnalisme ont rendu le processus
                                    incroyablement fluide et sans stress. Nous recommandons vivement cette agence pour tout
                                    projet immobilier.&rdquo;
                                </p>
                            </blockquote>
                            <p class="text-black-50">Designer, Co-founder</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section section-4 bg-light">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-lg-5">
                    <h2 class="font-weight-bold heading text-primary mb-4">
                        Trouvons la maison qui est parfaite pour vous
                    </h2>
                    <p class="text-black-50">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam
                        enim pariatur similique debitis vel nisi qui reprehenderit.
                    </p>
                </div>
            </div>
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

    <div class="section">
        <div class="row justify-content-center footer-cta" data-aos="fade-up">
            <div class="col-lg-7 mx-auto text-center">
                <h2 class="mb-4">Faites partie de notre équipe d'agents immobiliers en pleine croissance</h2>
                <p>
                    <a href="#" target="_blank" class="btn btn-primary text-white py-3 px-4">
                        Postulez pour devenir agent immobilier
                    </a>
                </p>
            </div>
            <!-- /.col-lg-7 -->
        </div>
        <!-- /.row -->
    </div>

    <div class="section section-5 bg-light" id="agents">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-lg-6 mb-5">
                    <h2 class="font-weight-bold heading text-primary mb-4">
                        Nos Agents
                    </h2>
                    <p class="text-black-50">
                        Découvrez notre équipe d'experts en immobilier, dédiée à vous offrir un service personnalisé et de
                        qualité. Nos agents sont reconnus pour leur professionnalisme, leur connaissance approfondie du
                        marché et leur engagement à trouver les meilleures solutions pour vos besoins immobiliers.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0">
                    <div class="h-100 person">
                        <img src="images/person_1-min.jpg" alt="Image" class="img-fluid" />

                        <div class="person-contents">
                            <h2 class="mb-0"><a href="#">James Doe</a></h2>
                            <span class="meta d-block mb-3">Expert en Location de Luxe</span>
                            <p>
                                David se spécialise dans les locations de luxe depuis 8 ans. Son réseau et son dévouement
                                permettent de connecter les locataires exigeants avec des propriétés exclusives, offrant un
                                service sur-mesure.
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
                <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0">
                    <div class="h-100 person">
                        <img src="images/person_2-min.jpg" alt="Image" class="img-fluid" />

                        <div class="person-contents">
                            <h2 class="mb-0"><a href="#">Isabelle Smith</a></h2>
                            <span class="meta d-block mb-3">Conseillère en Investissements Immobiliers</span>
                            <p>
                                Isabelle, avec 12 ans d'expertise, guide ses clients vers des investissements immobiliers
                                rentables. Son analyse du marché et son flair pour les bonnes affaires font d'elle une
                                conseillère de confiance.
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
                <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0">
                    <div class="h-100 person">
                        <img src="images/person_3-min.jpg" alt="Image" class="img-fluid" />

                        <div class="person-contents">
                            <h2 class="mb-0"><a href="#">Alicia Huston</a></h2>
                            <span class="meta d-block mb-3"> Spécialiste en Propriétés Commerciales</span>
                            <p>
                                Alicia, fort de 15 ans d'expérience, est un spécialiste des propriétés commerciales. Il aide
                                les entreprises à trouver des locaux idéaux, négociant toujours les meilleures conditions
                                pour ses clients.
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
