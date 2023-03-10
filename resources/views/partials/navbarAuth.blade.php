<?php
use App\Models\Cart;

$count = Cart::where('user_id', Auth::user()->id)->count()

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Fab-Rics Butik Terpercaya</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

<<<<<<< HEAD
{{-- perubahan 4 --}}
=======
{{-- perubahan 2 --}}
<!-- perubahan=3 -->
>>>>>>> f8caec66772d1313fe6b3f5753f9402c5b348103
    <link rel="stylesheet" href="/css/aos.css">

    <link rel="stylesheet" href="/css/style.css">

</head>

<body>
    <div class="site-wrap">
        <!-- HEADER START  -->
        <header class="site-navbar" role="banner">
            <div class="site-navbar-top">
                <div class="container">
                    <div class="row align-items-center">

                        <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">
                            <form action="/catalogue" class="site-block-top-search shadow mb-5 bg-white rounded">
                                <span class="icon icon-search2 px-2"></span>
                                <input type="text" name="search" class="form-control border-0 mx-2" placeholder="Search" value="{{ request('search') }}">
                            </form>
                        </div>

                        <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
                            <div class="site-logo">
                                <a href="/afterLogin" class="js-logo-clone">Fab-Rics</a>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 order-3 order-md-3 text-right site-navigation">
                            <div class="site-top-icons">
                                <ul class="site-menu js-clone-nav d-none d-md-block">
                                    <li class="has-children active">
                                        <a href="#"><span class="icon icon-person">{{ Auth::user()->name }}</span></a>
                                        <ul class="dropdown">
                                            <li><a href="/account/profile">Profile</a></li>
                                            <li><a href="/account/logout">Log out</a></li>
                                            <li><a href="#">Pembayaran</a></li>
                                        </ul>
                                    </li>

                                    @can('admin')
                                    <li><a href="/adminCheck"><span class="icon icon-check"></span></a></li>
                                    @endcan
                                    <li><a href="/history"><span class="icon icon-history"></span></a></li>
                                    <li>
                                        <a href="/cart" class="site-cart">
                                            <span class="icon icon-shopping_cart"></span>
                                            <span class="count">{{ $count }}</span>
                                        </a>
                                    </li>
                                    <li class="d-inline-block d-md-none ml-md-0"><a href="#"
                                            class="site-menu-toggle js-menu-toggle"><span class="icon-menu"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <nav class="site-navigation text-right text-md-center" role="navigation">
                <div class="container">
                    <ul class="site-menu js-clone-nav d-none d-md-block">
                        <li class="has-children active">
                            <a href="">Categories</a>
                            <ul class="dropdown">
                                <li><a href="/baju/mens">Baju Pria</a></li>
                                <li><a href="/baju/woman">Baju Wanita</a></li>
                                <li><a href="/baju/kids">Baju Anak-anak</a></li>
                            </ul>
                        </li>
                        <li><a href="/catalogue">Shop</a></li>
                        <li><a href="/contact">Contact</a></li>
                        <li><a href="/about">About</a></li>
                    </ul>
                </div>
            </nav>
        </header>


    </div>

    <div class="row">
        <div class="col">
            @yield('content')
        </div>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>

    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
