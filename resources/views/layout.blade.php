<!-- /*
* Template Name: Property
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Untree.co" />
    <link rel="shortcut icon" href="favicon.png" />

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap5" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet" />
    {{-- bootstrap icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    {{-- Remix Icon --}}
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    {{-- SweetAlert for Toast Notifications --}}
    <link rel="stylesheet" href="../sweetalert.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link rel="stylesheet" href="fonts/icomoon/style.css" />
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css" />

    <link rel="stylesheet" href="@yield('dir')css/tiny-slider.css" />
    <link rel="stylesheet" href="@yield('dir')css/aos.css" />
    <link rel="stylesheet" href="@yield('dir')css/style.css" />
    <link rel="stylesheet" href="@yield('dir')css/customized.css" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>
        @yield('title')
    </title>
</head>

<body>
    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close">
                <span class="icofont-close js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>



    {{-- NAVBAR --}}
    <nav class="site-nav">
        <div class="container">
            <div class="menu-bg-wrap">
                <div class="site-navigation">
                    {{-- <a href="{{ route('homepage') }}" class="logo m-0 float-start"><img src="images/fadyintex-logo.jpg" alt="fadyintex" height="60px"></a> --}}
                    <a href="{{ route('homepage') }}" class="logo m-0 float-start">FadyIntex</a>

                    <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end">
                        <li class="active"><a href="{{ route('homepage') }}" class="fs-6">Acceuil</a></li>
                        <li class="has-children">
                            <a href="{{ route('property.index') }}" class="fs-6">Nos biens</a>
                            <ul class="dropdown">
                                <li><a href="#" class="fs-6">Acheter un bien</a></li>
                                <li><a href="#" class="fs-6">Vendre un bien</a></li>
                                <li><a href="#" class="fs-6">Faire gérer un son bien</a></li>
                                <li class="has-children">
                                    <a href="#">Dropdown</a>
                                    <ul class="dropdown">
                                        <li><a href="#">Sub Menu One</a></li>
                                        <li><a href="#">Sub Menu Two</a></li>
                                        <li><a href="#">Sub Menu Three</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="{{ route('property.services') }}" class="fs-6">Services</a></li>
                        <li><a href="{{ route('property.about') }}" class="fs-6">A propos</a></li>
                        <li><a href="{{ route('property.contactus') }}" class="fs-6">Contactez-nous</a></li>
                    </ul>

                    <a href="#"
                        class="burger light me-auto float-end mt-1 site-menu-toggle js-menu-toggle d-inline-block d-lg-none"
                        data-toggle="collapse" data-target="#main-navbar">
                        <span></span>
                    </a>
                </div>
            </div>
        </div>
    </nav>



    {{-- Displaying section's content --}}
    @yield('content')

   

    <!-- Preloader -->
    <div id="overlayer"></div>
    <div class="loader">
        <div class="spinner-border" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>


    <!-- FOOTER -->
    <footer class="bg-dark">
        <div class="footer-top">
            <div class="container">
                <div class="row gy-5">
                    <div class="col-lg-3 col-sm-6">
                        <a href="#" class="fw-semibold fs-3">Fadyintex 
                                Group</a>
                        <div class="line"></div>
                        <p>Entreprise de construction · Entreprise de gestion de patrimoine · Matériaux de construction
                        </p>
                        <div class="social-icons">
                            <a href="#"><i class="bi bi-facebook"></i></a>
                            <a href="#"><i class="bi bi-twitter"></i></a>
                            <a href="#"><i class="bi bi-youtube"></i></a>
                            <a href="#"><i class="bi bi-github"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <h5 class="mb-0 text-white text-uppercase">SERVICES</h5>
                        <div class="line"></div>
                        <ul>
                            <li><a href="#">Acheter un bien</a></li>
                            <li><a href="#">Vendre un bien</a></li>
                            <li><a href="#">Faire gérer son bien</a></li>
                            <li><a href="#">Achat de matériaux</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <h5 class="mb-0 text-white text-uppercase">A propos
                        </h5>
                        <div class="line"></div>
                        <ul>
                            <li><a href="#">Nos propiétés</a></li>
                            <li><a href="#">Nos Services</a></li>
                            <li><a href="#">Contactez-nous</a></li>
                            <li><a href="#">Postuler pour devenir agent immobilier</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <h5 class="mb-0 text-white text-uppercase">CONTACT</h5>
                        <div class="line"></div>
                        <ul>
                            <li>Cocody-Riviera Bonoumin, Abidjan, Côte d'Ivoire</li>
                            <li>(+225) 0709101444</li>
                            <li> <a href="mailto:fadygroupe@yahoo.com">fadygroupe@yahoo.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row g-4 justify-content-between">
                    <div class="col-auto">
                        <p class="mb-0">Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script> <a href="#">Fadyintex Group</a> .
                            Tous droits réservés. &mdash; Template designed with love by
                            <a href="https://untree.co">Untree.co</a>
                            <!-- License information: https://untree.co/license/ -->
                            {{-- Distributed by
                            <a href="https://themewagon.com/" target="_blank">themewagon</a> --}}
                        </p>
                    </div>
                    <div class="col-auto">
                        <p class="mb-0">Réalisé par <a href="">LeCoderon</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>



    {{--  SWEET ALERT  --}}
    {{-- FORMS FIELDS ERRORS --}}
    @error('name')
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                iconColor: 'white',
                customClass: {
                    popup: 'colored-toast',
                },
                showConfirmButton: false,
                timer: 1500,
                timerProgressBar: true,
            });

            Toast.fire({
                icon: 'error',
                title: "{{ $message }}",
            })
        </script>
    @enderror

    {{-- SUCCESS REQUEST --}}
    @if (session()->has('success'))
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                iconColor: 'white',
                customClass: {
                    popup: 'colored-toast',
                },
                showConfirmButton: false,
                timer: 1500,
                timerProgressBar: true,
            });

            Toast.fire({
                icon: 'success',
                title: "{{ session()->get('success') }}",
            })
        </script>
    @endif

    {{-- ERRORS REQUEST --}}
    @if (session()->has('error'))
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                iconColor: 'white',
                customClass: {
                    popup: 'colored-toast',
                },
                showConfirmButton: false,
                timer: 1500,
                timerProgressBar: true,
            });

            Toast.fire({
                icon: 'error',
                title: "{{ session()->get('error') }}",
            })
        </script>
    @endif


    <script src="@yield('dir')js/bootstrap.bundle.min.js"></script>
    <script src="@yield('dir')js/tiny-slider.js"></script>
    <script src="@yield('dir')js/aos.js"></script>
    <script src="@yield('dir')js/navbar.js"></script>
    <script src="@yield('dir')js/counter.js"></script>
    <script src="@yield('dir')js/custom.js"></script>

</body>

</html>
