<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <title>🧑‍💻🚀Portfolio-Espoir-SOSSOU</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ secure_asset('assets/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ secure_asset('assets/vendors/linericon/style.css') }}" />
    <link rel="stylesheet" href="{{ secure_asset('assets/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ secure_asset('assets/vendors/owl-carousel/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ secure_asset('assets/css/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ secure_asset('assets/vendors/nice-select/css/nice-select.css') }}" />
    <!-- main css -->
    <link rel="stylesheet" href="{{ secure_asset('assets/css/style.css') }}" />

    <style>
        .logo_h img {
            max-height: 120px;
            /* Ajuste la hauteur max du logo */
            width: auto;
            /* Garde les proportions */
            object-fit: contain;
            /* Évite la déformation */
        }

        .section_gap {
            padding: 50px 0;
        }

        .home_banner_area .banner_inner .home_right_img {
            padding-top: 100px;
        }

        .home_right_img {
            display: flex !important;
            justify-content: center;
            align-items: center;
            width: 100%;
        }

        .home_right_img img {
            display: block !important;
            width: 80%;
            max-width: 300px;
        }


        .hover-effect img {
            transition: transform 0.4s ease-in-out, box-shadow 0.4s ease-in-out;
        }

        .hover-effect img:hover {
            transform: scale(1.15) rotate(5deg);
            box-shadow: 0px 10px 20px rgba(0, 170, 255, 0.5);
            filter: brightness(1.1);
        }
    </style>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelectorAll('a.nav-link[href^="#"]').forEach(anchor => {
                anchor.addEventListener("click", function(e) {
                    e.preventDefault();
                    const targetId = this.getAttribute("href").substring(1);
                    const targetElement = document.getElementById(targetId);
                    if (targetElement) {
                        window.scrollTo({
                            top: targetElement.offsetTop -
                                50, // Ajuste selon la hauteur du menu
                            behavior: "smooth"
                        });
                    }
                });
            });
        });
    </script>


</head>

<body>


    @include('layouts.partials.navbar')


    @yield('content')


    @include('layouts.partials.footer')


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ secure_asset('assets/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ secure_asset('assets/js/popper.js') }}"></script>
    <script src="{{ secure_asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ secure_asset('assets/js/stellar.js') }}"></script>
    <script src="{{ secure_asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ secure_asset('assets/vendors/nice-select/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ secure_asset('assets/vendors/isotope/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ secure_asset('assets/vendors/isotope/isotope-min.js') }}"></script>
    <script src="{{ secure_asset('assets/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ secure_asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ secure_asset('assets/js/mail-script.js') }}"></script>
    <!-- Google Maps API (Reste en HTTPS) -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="{{ secure_asset('assets/js/gmaps.min.js') }}"></script>
    <script src="{{ secure_asset('assets/js/theme.js') }}"></script>

</body>


</html>
