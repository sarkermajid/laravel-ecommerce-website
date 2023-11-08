<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ecommerce Website</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('/') }}frontend/assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('/') }}frontend/assets/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('/') }}frontend/assets/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('/') }}frontend/assets/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('/') }}frontend/assets/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('/') }}frontend/assets/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('/') }}frontend/assets/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('/') }}frontend/assets/css/style.css" type="text/css">
</head>

<body>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="{{ route('home') }}"><img src="{{ asset('/') }}frontend/assets/img/logo_blue.png" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
            <div class="header__cart__price">item: <span>$150.00</span></div>
        </div>
        @if(auth()->user())
        <div class="humberger__menu__widget">
            <div class="header__top__right__auth">
                <a href="" class="login-btn text-white"><i class="fa fa-user"></i>{{ auth()->user()->name }}</a>
            </div>
            <form method="POST" action="{{ route('logout') }}" style="display: inline">
                @csrf
                <input name="_method" type="hidden">
                <button type="submit" class="logout-btn text-white" data-toggle="tooltip"><i class=""></i> Delete</button>
            </form>
        </div>
        @else
        <div class="humberger__menu__widget">
            <div class="header__top__right__auth">
                <a href="{{ route('login')}}" class="login-btn text-white"><i class="fa fa-user"></i> Login</a>
            </div>
            <div class="header__top__right__auth">
                <a href="{{ route('register')}}"  class="login-btn text-white"><i class="fa fa-user"></i> Register</a>
            </div>
        </div>
        @endif
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('shop') }}">Shop</a></li>
                <li><a href="{{ route('blogs') }}">Blog</a></li>
                <li class="{{ Request::is('/contact') ? 'active' : '' }}"><a href="{{ route('contact') }}" >Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
                <li>Free Shipping for all Order of $99</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
                                <li>Free Shipping for all Order of $99</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                            @if(auth()->user())
                            <div class="header__top__right__auth">
                                <a href="" class="login-btn text-white"><i class="fa fa-user"></i> {{ auth()->user()->name }}</a>
                            </div>
                            <form method="POST" action="{{ route('logout') }}" style="display: inline">
                                @csrf
                                <input name="_method" type="hidden">
                                <button type="submit" class="logout-btn text-white" data-toggle="tooltip"><i class="fa fa-arrow-left"></i> Logout</button>
                            </form>
                            @else
                            <div class="header__top__right__auth">
                                <a href="{{ route('login') }}" class="login-btn text-white"><i class="fa fa-user"></i> Login</a>
                            </div>
                            <div class="header__top__right__auth">
                                <a href="{{ route('register') }}" class="login-btn text-white"><i class="fa fa-user"></i> Register</a>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="{{ route('home') }}"><img src="{{ asset('/') }}frontend/assets/img/logo_blue.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('shop') }}">Shop</a></li>
                            <li><a href="{{ route('blogs') }}">Blog</a></li>
                            <li class="{{ Request::is('/contact') ? 'active' : '' }}"><a href="{{ route('contact') }}">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                            <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                        </ul>
                        <div class="header__cart__price">item: <span>$150.00</span></div>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    @yield('body')

    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="{{ route('home') }}"><img src="{{ asset('/home') }}frontend/assets/img/logo_blue.png" alt=""></a>
                        </div>
                        <ul>
                            <li>Address: 60-49 Road 11378 New York</li>
                            <li>Phone: +65 11.188.888</li>
                            <li>Email: hello@colorlib.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>Useful Links</h6>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">About Our Shop</a></li>
                            <li><a href="#">Secure Shopping</a></li>
                            <li><a href="#">Delivery infomation</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Our Sitemap</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Who We Are</a></li>
                            <li><a href="#">Our Services</a></li>
                            <li><a href="#">Projects</a></li>
                            <li><a href="{{ route('contact') }}">Contact</a></li>
                            <li><a href="#">Innovation</a></li>
                            <li><a href="#">Testimonials</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>Join Our Newsletter Now</h6>
                        <p>Get E-mail updates about our latest shop and special offers.</p>
                        <form action="#">
                            <input type="text" placeholder="Enter your mail">
                            <button type="submit" class="site-btn">Subscribe</button>
                        </form>
                        <div class="footer__widget__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text"><p>
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This Website is made by <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://www.facebook.com/sarkermajid" target="_blank">Sarker Majid</a></p></div>
                        <div class="footer__copyright__payment"><img src="{{ asset('/') }}frontend/assets/img/payment-item.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="{{ asset('/') }}frontend/assets/js/jquery-3.3.1.min.js"></script>
    <script src="{{ asset('/') }}frontend/assets/js/bootstrap.min.js"></script>
    <script src="{{ asset('/') }}frontend/assets/js/jquery.nice-select.min.js"></script>
    <script src="{{ asset('/') }}frontend/assets/js/jquery-ui.min.js"></script>
    <script src="{{ asset('/') }}frontend/assets/js/jquery.slicknav.js"></script>
    <script src="{{ asset('/') }}frontend/assets/js/mixitup.min.js"></script>
    <script src="{{ asset('/') }}frontend/assets/js/owl.carousel.min.js"></script>
    <script src="{{ asset('/') }}frontend/assets/js/main.js"></script>
</body>
</html>
