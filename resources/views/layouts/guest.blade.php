<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <title>@yield('title', config('app.name'))</title>

    <style>
        .logo-img {
            width: 150px !important;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/elegant-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slicknav.min.css') }}">
    @stack('styles')
    {{-- @vite(['resources/js/app.js']) --}}

</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img class="w-8" src="{{ 'img/oldlogo.png' }}" alt="{{ config('app.name') }}"></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
            <div class="header__cart__price">item: <span>$150.00</span></div>
        </div>
        <div class="humberger__menu__widget">
            {{-- <div class="header__top__right__language">
                <img src="{{'img/language.png'}}" alt="{{ config('app.name') }}">
                <div>English</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="#">Spanis</a></li>
                    <li><a href="#">English</a></li>
                </ul>
            </div> --}}
            <div class="header__top__right__auth">
                <a href="{{ route('login') }}"><i class="fa fa-user"></i> Login</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="{{ request()->is('/') ? 'active' : 'hidden' }}"><a href="/">Home</a></li>
                <li class="{{ request()->is('shop') ? 'active' : 'hidden' }}"><a
                        href="{{ route('shop') }}">Products</a>
                <li class="{{ request()->is('shop') ? 'active' : 'hidden' }}"><a href="{{ route('shop') }}">Shops</a>
                </li>
                {{-- <li class=""><a href="#">Pages</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="{{ route('shop') }}">Shop Details</a></li>
                        <li><a href="{{ route('cart') }}">Shoping Cart</a></li>
                        <li><a href="{{ route('checkout') }}">Check Out</a></li>
                        <li><a href="./blog-details.html">Blog Details</a></li>
                    </ul>
                </li> --}}
                <li class="{{ request()->is('contact') ? 'active ' : 'hidden' }}"><a
                        href="{{ route('contact') }}">Sell</a>
                </li>
                <li class="{{ request()->is('contact') ? 'active ' : 'hidden' }}"><a
                        href="{{ route('contact') }}">Network</a>
                <li class="{{ request()->is('contact') ? 'active ' : 'hidden' }}"><a
                        href="{{ route('contact') }}">Account</a>
                </li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> hello@binters.com</li>
                {{-- <li>Free Shipping for all Order of $99</li> --}}
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
                                <li><i class="fa fa-envelope"></i>hello@binters.com</li>
                                {{-- <li>Free Shipping for all Order of $99</li> --}}
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                            {{-- <div class="header__top__right__language">
                                <img src="{{'img/language.png'}}" alt="{{ config('app.name') }}">
                                <div>English</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="#">Spanis</a></li>
                                    <li><a href="#">English</a></li>
                                </ul>
                            </div> --}}
                            <div class="header__top__right__auth">
                                <a href="{{ route('login') }}"><i class="fa fa-user"></i> Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="/"><img class="logo-img" src="{{ 'img/oldlogo.png' }}"
                                alt="{{ config('app.name') }}"></a>
                    </div>
                </div>
                <div class="col-lg-9">
                    <nav class="header__menu">
                        <ul>
                            <li class="{{ request()->is('/') ? 'active ' : 'hidden' }}">
                                <a href="/">Home</a>
                            </li>
                            <li class="{{ request()->is('shop') ? 'active ' : 'hidden' }}">
                                <a href="{{ route('shop') }}">Products</a>
                            </li>
                            <li class="{{ request()->is('shop') ? 'active ' : 'hidden' }}">
                                <a href="{{ route('shop') }}">Shops</a>
                            </li>
                            <li class="{{ request()->is('shop') ? 'active ' : 'hidden' }}">
                                <a href="{{ route('shop') }}">Sell</a>
                            </li>
                            {{-- <li class=""><a href="#">Pages</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="{{ route('shop') }}">Shop Details</a></li>
                                    <li><a href="{{ route('cart') }}">Shoping Cart</a></li>
                                    <li><a href="{{ route('checkout') }}">Check Out</a></li>
                                </ul>
                            </li> --}}
                            </li>
                            <li class="{{ request()->is('contact') ? 'active ' : 'hidden' }}"><a
                                    href="{{ route('contact') }}">Network</a></li>
                            <li class="{{ request()->is('contact') ? 'active ' : 'hidden' }}"><a
                                    href="{{ route('contact') }}">Account</a></li>
                            {{-- <li class="{{ request()->is('contact') ? 'active ' : 'hidden' }}"><a
                                    href="{{ route('contact') }}">Contact</a></li> --}}
                        </ul>
                    </nav>
                </div>
                {{-- <div class="col-lg-2">
                    <div class="header__cart">
                        <ul>
                            <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                            <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                        </ul>
                        <div class="header__cart__price">item: <span>$150.00</span></div>
                    </div>
                </div> --}}
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->
    {{-- @yield('header') --}}
    <x-page-header />
    @yield('contents')
    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="/">
                                <img class="logo-img" src="{{ 'img/oldlogo.png' }}"
                                    alt="{{ config('app.name') }}"></a>
                        </div>
                        <ul>
                            <li class="" style="line-height: 1!important; font-size: 22px"><small
                                    style="line-height: 1!important">
                                    Smart people shop at Binters!</small></li>
                            <li>Phone: +234 817 9333 448</li>
                            <li>Email: hello@binters.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6" style="white-space: nowrap!important">
                    <div class="footer__widget">
                        <h6>MY ACCOUNT</h6>
                        <ul>
                            <li><a href="{{ route('register') }}">Create Account</a></li>
                            <li><a href="{{ route('login') }}">Logins</a></li>
                            {{-- <li><a href="{{ route('shop') }}">Products</a></li> --}}
                            <li><a href="{{ route('shop') }}">Shops</a></li>
                            <li><a href="#">Sell</a></li>
                            <li><a href="#">Network</a></li>
                            <li><a href="#">Feedback</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6" style="white-space: nowrap!important">
                    <div class="footer__widget">
                        <h6>INFORMATION</h6>
                        <ul>
                            <li><a href="{{ route('terms') }}">Terms & Condition</a></li>
                            <li><a href="{{ route('return') }}">Return & Refund Policy</a></li>
                            <li><a href="{{ route('privacy') }}">Privacy & Cookie Policy</a></li>
                            <li><a href="{{ route('about') }}">About Us</a></li>
                            <li><a href="{{ route('faq') }}">FAQS</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="footer__widget">
                        <h6>FOLLOW US</h6>
                        <p>Get E-mail updates about our latest shop and special offers.</p>
                        <form action="#">
                            <input type="text" placeholder="Enter your mail">
                            <button type="submit" class="site-btn">Subscribe</button>
                        </form>
                        <div class="footer__widget__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text">
                            <p>
                                Copyright &copy; Binters {{ date('Y') }}. All rights reserved | Desinged and
                                Developed
                                by
                                <a href="https://bowofade.com" target="_blank">Networker</a>
                            </p>
                        </div>
                        {{-- <div class="footer__copyright__payment"><img src="{{'img/payment-item.png'}}"
                                alt="{{ config('app.name') }}">
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    {{-- <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script> --}}
    <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('js/mixitup.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    @stack('scripts')
</body>

</html>
