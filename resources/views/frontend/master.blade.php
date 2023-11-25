<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>

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
    {{-- toster msg --}}
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    @stack('styles')
</head>

<body>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="{{ route('home') }}"><img src="{{ asset('admin/site-logo/'. generalSettings('header_logo')) }}" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="{{ route('wishlist') }}"><i class="fa fa-heart"></i> <span class="wishlist-count">0</span></a></li>
                <li><a href="{{ route('cart') }}"><i class="fa fa-shopping-bag"></i> <span class="cart-count">0</span></a></li>
            </ul>
        </div>
        @if(auth()->user())
        <div class="humberger__menu__widget">
            <div class="header__top__right__auth">
                <a href="{{ route('user.profile') }}" class="login-btn text-white"><i class="fa fa-user"></i>{{ auth()->user()->name }}</a>
            </div>
            <form method="POST" action="{{ route('logout') }}" style="display: inline">
                @csrf
                <input name="_method" type="hidden">
                <button type="submit" class="logout-btn text-white" data-toggle="tooltip"><i class=""></i> Logout</button>
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
            <a href="{{ generalSettings('facebook_link') }}"><i class="fa fa-facebook"></i></a>
            <a href="{{ generalSettings('instagram_link') }}"><i class="fa fa-instagram"></i></a>
            <a href="{{ generalSettings('twitter_link') }}"><i class="fa fa-twitter"></i></a>
            <a href="{{ generalSettings('linkedin_link') }}"><i class="fa fa-linkedin"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i>{{ generalSettings('shop_email') }}</li>
                <li>{{ generalSettings('header_message') }}</li>
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
                                <li><i class="fa fa-envelope"></i>{{ generalSettings('shop_email') }}</li>
                                <li>{{ generalSettings('header_message') }}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="{{ generalSettings('facebook_link') }}"><i class="fa fa-facebook"></i></a>
                                <a href="{{ generalSettings('instagram_link') }}"><i class="fa fa-instagram"></i></a>
                                <a href="{{ generalSettings('twitter_link') }}"><i class="fa fa-twitter"></i></a>
                                <a href="{{ generalSettings('linkedin_link') }}"><i class="fa fa-linkedin"></i></a>
                            </div>
                            @if(auth()->user())
                            <div class="header__top__right__auth dropdown">
                                <a href="" class="login-btn text-white dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-user"></i> {{ auth()->user()->name }}</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('user.profile') }}">Profile</a></li>
                                    <li><a class="dropdown-item" href="{{ route('user.orders') }}">My Orders</a></li>
                                    <form method="POST" action="{{ route('logout') }}" style="display: inline">
                                        @csrf
                                        <input name="_method" type="hidden">
                                        <button type="submit" class="dropdown-item" data-toggle="tooltip">Logout <i class="fa fa-arrow-left"></i></button>
                                    </form>
                                  </ul>
                            </div>
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
                        <a href="{{ route('home') }}"><img src="{{ asset('admin/site-logo/'. generalSettings('header_logo')) }}" width="120" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{ route('home') }}">Home</a></li>
                            <li class="{{ Request::is('shop') ? 'active' : '' }}"><a href="{{ route('shop') }}">Shop</a></li>
                            <li class="{{ Request::is('blogs') ? 'active' : '' }}"><a href="{{ route('blogs') }}">Blog</a></li>
                            <li class="{{ Request::is('contact') ? 'active' : '' }}"><a href="{{ route('contact') }}">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="{{ route('wishlist') }}"><i class="fa fa-heart"></i> <span class="wishlist-count">0</span></a></li>
                            <li><a href="{{ route('cart') }}"><i class="fa fa-shopping-bag"></i> <span class="cart-count">0</span></a></li>
                        </ul>
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
                            <a href="{{ route('home') }}"><img src="{{ asset('admin/site-logo/'. generalSettings('footer_logo')) }}" height="40" alt=""></a>
                        </div>
                        <ul>
                            <li>Address: {{ generalSettings('shop_address') }}</li>
                            <li>Phone: {{ generalSettings('shop_phone') }}</li>
                            <li>Email: {{ generalSettings('shop_email') }}</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>Useful Links</h6>
                        <ul>
                            <li><a href="{{ route('aboutUs') }}">About Us</a></li>
                            <li><a href="{{ route('deliveryInformation') }}">Delivery infomation</a></li>
                            <li><a href="{{ route('privacyPolicy') }}">Privacy Policy</a></li>
                            <li><a href="{{ route('termsAndCondition') }}">Terms and Conditions</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12">
                    <div class="footer__widget">
                        <h6>Join Our Newsletter Now</h6>
                        <p>Get E-mail updates about our latest shop and special offers.</p>
                        <form action="#">
                            <input type="text" placeholder="Enter your mail">
                            <button type="submit" class="site-btn">Subscribe</button>
                        </form>
                        <div class="footer__widget__social">
                            <a href="{{ generalSettings('facebook_link') }}"><i class="fa fa-facebook"></i></a>
                            <a href="{{ generalSettings('instagram_link') }}"><i class="fa fa-instagram"></i></a>
                            <a href="{{ generalSettings('twitter_link') }}"><i class="fa fa-twitter"></i></a>
                            <a href="{{ generalSettings('linkedin_link') }}"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text"><p>
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This Website is made by <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://www.facebook.com/sarkermajid" target="_blank">Sarker Majid</a></p></div>
                        {{-- <div class="footer__copyright__payment"><img src="{{ asset('/') }}frontend/assets/img/payment-item.png" alt=""></div> --}}
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>

    @include('frontend.ajax')
    <script>
        @if (Session::has('message'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.success("{{ session('message') }}");
        @endif

        @if (Session::has('error'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.error("{{ session('error') }}");
        @endif

        @if (Session::has('info'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.info("{{ session('info') }}");
        @endif

        @if (Session::has('warning'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.warning("{{ session('warning') }}");
        @endif
    </script>
    @stack('scripts')
</body>
</html>
