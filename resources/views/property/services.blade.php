@extends('layout')

@section('title', 'Nos services')

@section('content')

    <div class="hero page-inner overlay" style="background-image: url('images/hero_bg_1.jpg')">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-9 text-center mt-5">
                    <h1 class="heading" data-aos="fade-up">Nos Services</h1>

                    <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
                        <ol class="breadcrumb text-center justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('homepage') }}">Acceuil</a></li>
                            <li class="breadcrumb-item active text-white-50" aria-current="page">
                                Nos Services
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="box-feature">
                        <span class="flaticon-house"></span>
                        <h3 class="mb-3">Aménagement Foncier</h3>
                        <p>
                            Notre service d'aménagement foncier transforme des terrains bruts en espaces constructibles et
                            viabilisés. Nous nous occupons de toutes les étapes, de l'acquisition des terrains à la
                            réalisation des infrastructures nécessaires. </p>
                        <p><a href="{{ route('property.index') }}" class="learn-more">En savoir plus</a></p>
                    </div>
                </div>

                <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
                    <div class="box-feature">
                        <span class="flaticon-building"></span>
                        <h3 class="mb-3"> Agence Immobilière</h3>
                        <p>
                            Nous offrons une gamme complète de services immobiliers, incluant la vente, la location et la
                            gestion de propriétés résidentielles et commerciales. Notre expertise et notre connaissance du
                            marché vous assurent des transactions rapides et sécurisées.
                        </p>
                        <p><a href="{{ route('property.index') }}" class="learn-more">En savoir plus</a></p>
                    </div>
                </div>

                <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                    <div class="box-feature">
                        <span class="flaticon-house-3"></span>
                        <h3 class="mb-3">Promoteur Constructeur</h3>
                        <p>
                            En tant que promoteur constructeur, nous réalisons des projets de construction innovants et de
                            haute qualité. De la conception à la livraison, nous nous engageons à créer des espaces de vie
                            modernes et fonctionnels qui répondent aux besoins de nos clients.
                        </p>
                        <p><a href="{{ route('property.index') }}" class="learn-more">En savoir plus</a></p>
                    </div>
                </div>

                <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="box-feature mb-4">
                        <span class="flaticon-house-4 mb-4 d-block"></span>
                        <h3 class="text-black mb-3 font-weight-bold">
                            Import-Export </h3>
                        <p class="text-black-50">Spécialisés dans l'import-export, nous fournissons des matériaux de
                            construction de qualité supérieure et divers biens nécessaires aux projets immobiliers et de
                            construction. Nos partenariats internationaux garantissent des produits fiables et compétitifs.
                        </p>
                        <p><a href="#" class="learn-more">Read more</a></p>
                    </div>
                </div>
                <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                    <div class="box-feature mb-4">
                        <span class="flaticon-building mb-4 d-block-3"></span>
                        <h3 class="text-black mb-3 font-weight-bold"> Entreprise de Construction</h3>
                        <p class="text-black-50">Nous réalisons des projets de construction résidentiels, commerciaux et
                            industriels avec un engagement inébranlable envers la qualité et la durabilité. Nos équipes
                            expérimentées assurent une exécution parfaite de chaque projet.
                        </p>
                        <p><a href="#" class="learn-more">Read more</a></p>
                    </div>
                </div>
                <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
                    <div class="box-feature mb-4">
                        <span class="flaticon-house mb-4 d-block"></span>
                        <h3 class="text-black mb-3 font-weight-bold">
                            Gestion de Patrimoine
                        </h3>
                        <p class="text-black-50">Notre expertise en gestion de patrimoine vous aide à maximiser la valeur de
                            vos investissements immobiliers. Nous offrons des services personnalisés pour gérer, optimiser
                            et faire croître votre portefeuille immobilier.
                        </p>
                        <p><a href="#" class="learn-more">Read more</a></p>
                    </div>
                </div>
                <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="600">
                    <div class="box-feature mb-4">
                        <span class="flaticon-house-1 mb-4 d-block-1"></span>
                        <h3 class="text-black mb-3 font-weight-bold">Matériaux de Construction</h3>
                        <p class="text-black-50">Nous fournissons une gamme complète de matériaux de construction pour tous
                            vos projets. Nos produits, sélectionnés avec soin, garantissent solidité, durabilité et
                            esthétisme pour des constructions de qualité.
                        </p>
                        <p><a href="#" class="learn-more">Read more</a></p>
                    </div>
                </div>
                <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="600">
                    <div class="box-feature mb-4">
                        <span class="flaticon-house-1 mb-4 d-block-1"></span>
                        <h3 class="text-black mb-3 font-weight-bold">Conseil en Investissement Immobilier</h3>
                        <p class="text-black-50">Nos conseillers en investissement immobilier vous offrent des stratégies
                            personnalisées pour maximiser vos rendements. Avec une analyse approfondie du marché, nous
                            identifions les meilleures opportunités pour diversifier et optimiser votre portefeuille
                            immobilier.
                        </p>
                        <p><a href="#" class="learn-more">Read more</a></p>
                    </div>
                </div>
            </div>

            <div class="section sec-testimonials" data-aos="fade-up" data-aos-delay="600">
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
                                            &ldquo;Grâce à FADYINTEX GROUP, nous avons trouvé la résidence de nos rêves.
                                            Leur
                                            équipe
                                            a été à l'écoute de nos besoins et a fait preuve d'une grande réactivité tout au
                                            long du
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
                                            &ldquo;J'ai récemment vendu une propriété commerciale avec l'aide de FADYINTEX
                                            GROUP.
                                            Leur connaissance du marché et leurs conseils avisés ont été essentiels pour
                                            conclure la
                                            vente rapidement et au meilleur prix. Un grand merci à toute l'équipe pour leur
                                            soutien
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
                                            &ldquo;Nous avons fait appel à FADYINTEX GROUP pour la gestion de nos propriétés
                                            locatives, et
                                            nous n'avons pas été déçus. Leur service client est impeccable, et ils
                                            s'occupent de
                                            tout avec une grande efficacité. C'est un véritable soulagement de travailler
                                            avec
                                            une
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
                                            &ldquo;FADYINTEX GROUP a su répondre à toutes nos attentes lors de l'achat de
                                            notre
                                            nouvelle maison. Leur expertise et leur professionnalisme ont rendu le processus
                                            incroyablement fluide et sans stress. Nous recommandons vivement cette agence
                                            pour
                                            tout
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
        </div>
    </div>

@endsection
