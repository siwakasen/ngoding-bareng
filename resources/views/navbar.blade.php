<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ngoding Bareng</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    {{-- Owl Carousel --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
</head>

<body>
    <nav class="navbar navbar-sticky navbar-expand bg-body-tertiary shadow" id="nav">
        <div class="brand">
            <a href="{{asset('/')}}" class="nav-link">
                ngoding-bareng
            </a>
        </div>
        <div class="container-fluid justify-content-end">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="{{ asset('/dashboard') }}" class="nav-link">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a href="{{ asset('/courses') }}" class="nav-link">Courses</a>
                </li>
                <li class="nav-item">
                    <a href="{{ asset('/articles') }}" class="nav-link">Articles</a>
                </li>
            </ul>
            <div class="image-container">
                <a href="{{ asset('/profile') }}">
                    <img src="{{ asset('images/ryan-gosling.jpg') }}" alt="">
                </a>
            </div>
            <div class="dropdown">
                <a class="navbar-brand" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false"><i class=" fa-solid fa-bars fa-xl"></i></a>
                <div class="dropdown-menu dropdown-menu-end mt-4">
                    <a href="" class="dropdown-item pt-1">
                        <div class="icons">
                            <i class="fa-solid fa-gear fa-lg"></i>
                        </div>
                        <span class="ms-1">Setting</span>
                    </a>
                    <a href="{{ asset('/cartPage') }}" class="dropdown-item pt-1">
                        <div class="icons">
                            <i class="fa-solid fa-cart-shopping fa-lg"></i>
                        </div>
                        <span class="ms-1">My Cart</span>
                    </a>
                    <a href="" class="dropdown-item pt-1">
                        <div class="icons">
                            <i class="fa-regular fa-circle-question fa-lg"></i>
                        </div>
                        <span class="ms-1">Help</span>
                    </a>
                    <a href="{{ asset('/login') }}" class="dropdown-item pt-1">
                        <div class="icons">
                            <i class="fa-solid fa-arrow-right-from-bracket fa-lg"></i>
                        </div>
                        <span class="ms-1">Log out</span>
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <nav class="navbar bg-body-tertiary shadow navbar-sticky" id="offcanvas">
        <div class="container-fluid">
            <div class="brand">
                <a href="" class="nav-link">
                    ngoding-bareng
                </a>
            </div>
            <button class="custom-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <i class="fa-solid fa-bars fa-2xl"></i>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header justify-content-end">
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="image-container ps-4">
                    <a href="{{ asset('/profile') }}">
                        <img src="{{ asset('images/ryan-gosling.jpg') }}" alt="">
                    </a>
                    <div class="side-text">
                        <span class="fw-bold">Hi, Ryan Gosling</span>
                        <span id="message">Welcome back</span>
                    </div>
                </div>
                <div class="offcanvas-body p-4">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a href="{{ asset('/dashboard') }}" class="nav-link">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ asset('/courses') }}" class="nav-link">Courses</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ asset('/articles') }}" class="nav-link">Articles</a>
                        </li>
                    </ul>
                    <hr>
                    <a href="" class="dropdown-item pe-5 pt-1">
                        <div class="icons">
                            <i class="fa-solid fa-gear fa-lg"></i>
                        </div>
                        <span class="ms-1">Setting</span>
                    </a>
                    <a href="{{ asset('/cartPage') }}" class="dropdown-item pe-5 pt-1">
                        <div class="icons">
                            <i class="fa-solid fa-cart-shopping fa-lg"></i>
                        </div>
                        <span class="ms-1">My Cart</span>
                    </a>
                    <a href="" class="dropdown-item pe-5 pt-1">
                        <div class="icons">
                            <i class="fa-regular fa-circle-question fa-lg"></i>
                        </div>
                        <span class="ms-1">Help</span>
                    </a>
                    <a href="{{ asset('/login') }}" class="dropdown-item pe-5 pt-1">
                        <div class="icons">
                            <i class="fa-solid fa-arrow-right-from-bracket fa-lg"></i>
                        </div>
                        <span class="ms-1">Log out</span>
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        @yield('content')
    </div>
    <section class="section-footer text-center mt-1">
        <div class="py-3 m-0">
            <h6>&copy;Copyright 2023</h6>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- Owl Carousel JS --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    

    <script>
        $('.owl-carousel').owlCarousel({
            loop: true, 
            autoplay: true,
            autoplayTimeout: 2000,
            autoplayHoverPause: true,
            smartSpeed:700,
            dots:false,
            responsive: {
                0: {
                    items: 1
                },
                500: {
                    items: 2
                },
                800: {
                    items: 3
                },
                1200: {
                    items: 4
                },
            }
        });
    </script>
</body>

</html>
