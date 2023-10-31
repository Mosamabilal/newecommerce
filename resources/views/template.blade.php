<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $settings->name }}</title>
    <!-- Favicons -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">


    <!-- Vendor CSS (Icon Font) -->

    <!--
    <link rel="stylesheet" href="assets/css/vendor/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/vendor/pe-icon-7-stroke.min.css">
    -->

    <!-- Plugins CSS (All Plugins Files) -->

    <!--
    <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/animate.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/aos.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/nice-select.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/jquery-ui.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/lightgallery.min.css" />
    -->

    <!-- Main Style CSS -->

    <!--
    <link rel="stylesheet" href="assets/css/style.css" />
    -->


    <!-- Use the minified version files listed below for better performance and remove the files listed above -->



    <link rel="stylesheet" href="{{ asset('assets/css/vendor.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.min.css') }}">


</head>

<body>
    <div class="header section">

        <!-- Header Top Start -->
        <div class="header-top bg-light">
            <div class="container">
                <div class="row row-cols-xl-2 align-items-center">

                    <!-- Header Top Language, Currency & Link Start -->
                    <div class="col d-none d-lg-block">
                        <div class="header-top-lan-curr-link">


                            <div class="header-top-links">
                                <span>Call Us</span><a href="#"> {{ $settings->phone }}</a>
                            </div>
                        </div>
                    </div>
                    <!-- Header Top Language, Currency & Link End -->

                    <!-- Header Top Message Start -->
                    <div class="col">
                        <p class="header-top-message">{{ $settings->text_header }} <a href="{{ URL('shop') }}">Shop Now</a></p>
                    </div>
                    <!-- Header Top Message End -->

                </div>
            </div>
        </div>
        <!-- Header Top End -->

        <!-- Header Bottom Start -->
        <div class="header-bottom">
            <div class="header-sticky">
                <div class="container">
                    <div class="row align-items-center">

                        <!-- Header Logo Start -->
                        <div class="col-xl-2 col-6">
                            <div class="header-logo">
                                <a href="{{ URL('home') }}"><img src="{{ asset('uploads/' .  $settings->logo )}}" alt="Site Logo" /></a>
                            </div>
                        </div>
                        <!-- Header Logo End -->

                        <!-- Header Menu Start -->
                        <div class="col-xl-8 d-none d-xl-block">
                            <div class="main-menu position-relative">
                                <ul>
                                    <li><a href="{{ URL('home') }}"> <span>Home</span></a></li>
                                    <li><a href="{{ URL('shop') }}"> <span>Shop</span></a></li>
                                    <li><a href="{{ URL('about') }}"> <span>About</span></a></li>
                                    <li><a href="{{ URL('contact') }}"> <span>Contact</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Header Menu End -->

                        <!-- Header Action Start -->
                        <div class="col-xl-2 col-6">
                            <div class="header-actions">

                                <!-- Search Header Action Button Start -->
                                <a href="javascript:void(0)" class="header-action-btn header-action-btn-search"><i class="pe-7s-search"></i></a>
                                <!-- Search Header Action Button End -->

                                <!-- User Account Header Action Button Start -->
                                <a href="login-register.html" class="header-action-btn d-none d-md-block"><i class="pe-7s-user"></i></a>
                                <!-- User Account Header Action Button End -->

                                <!-- Wishlist Header Action Button Start -->
                                <a href="wishlist.html" class="header-action-btn header-action-btn-wishlist d-none d-md-block">
                                    <i class="pe-7s-like"></i>
                                </a>
                                <!-- Wishlist Header Action Button End -->

                                <!-- Shopping Cart Header Action Button Start -->
                                <a href="javascript:void(0)" class="header-action-btn header-action-btn-cart">
                                    <i class="pe-7s-shopbag"></i>
                                    <span class="header-action-num">{{ $items_count }}</span>
                                </a>
                                <!-- Shopping Cart Header Action Button End -->

                                <!-- Mobile Menu Hambarger Action Button Start -->
                                <a href="javascript:void(0)" class="header-action-btn header-action-btn-menu d-xl-none d-lg-block">
                                    <i class="fa fa-bars"></i>
                                </a>
                                <!-- Mobile Menu Hambarger Action Button End -->

                            </div>
                        </div>
                        <!-- Header Action End -->

                    </div>
                </div>
            </div>
        </div>
        <!-- Header Bottom End -->

        <!-- Mobile Menu Start -->
        <div class="mobile-menu-wrapper">
            <div class="offcanvas-overlay"></div>

            <!-- Mobile Menu Inner Start -->
            <div class="mobile-menu-inner">

                <!-- Button Close Start -->
                <div class="offcanvas-btn-close">
                    <i class="pe-7s-close"></i>
                </div>
                <!-- Button Close End -->

                <!-- Mobile Menu Start -->
                <div class="mobile-navigation">
                    <nav>
                        <ul class="mobile-menu">
                                <li><a href="{{ URL('home') }}"> <span>Home</span></a></li>
                                <li><a href="{{ URL('shop') }}"> <span>Shop</span></a></li>
                                <li><a href="{{ URL('about') }}"> <span>About</span></a></li>
                                <li><a href="{{ URL('contact') }}"> <span>Contact</span></a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Mobile Menu End -->


                <!-- Contact Links/Social Links Start -->
                <div class="mt-auto">

                    <!-- Contact Links Start -->
                    <ul class="contact-links">
                        <li><i class="fa fa-phone"></i><a href="#"> {{ $settings->phone }}</a></li>
                        <li><i class="fa fa-envelope-o"></i><a href="#"> {{ $settings->email }}</a></li>
                        <li><i class="fa fa-clock-o"></i> <span>Monday - Sunday 9.00 - 18.00</span> </li>
                    </ul>
                    <!-- Contact Links End -->

                    <!-- Social Widget Start -->
                    <div class="widget-social">
                        <a title="Facebook" href="{{ $settings->facebook }}"><i class="fa fa-facebook-f"></i></a>
                        <a title="Twitter" href="{{ $settings->twitter }}"><i class="fa fa-twitter"></i></a>

                        <a title="Youtube" href="{{ $settings->youtube }}"><i class="fa fa-youtube"></i></a>

                    </div>
                    <!-- Social Widget Ende -->
                </div>
                <!-- Contact Links/Social Links End -->
            </div>
            <!-- Mobile Menu Inner End -->
        </div>
        <!-- Mobile Menu End -->

        <!-- Offcanvas Search Start -->
        <div class="offcanvas-search">
            <div class="offcanvas-search-inner">

                <!-- Button Close Start -->
                <div class="offcanvas-btn-close">
                    <i class="pe-7s-close"></i>
                </div>
                <!-- Button Close End -->

                <!-- Offcanvas Search Form Start -->
                <form class="offcanvas-search-form" action="#">
                    <input type="text" placeholder="Search Product..." class="offcanvas-search-input">
                </form>
                <!-- Offcanvas Search Form End -->

            </div>
        </div>
        <!-- Offcanvas Search End -->

        <!-- Cart Offcanvas Start -->
        <div class="cart-offcanvas-wrapper">
            <div class="offcanvas-overlay"></div>

            <!-- Cart Offcanvas Inner Start -->
            <div class="cart-offcanvas-inner">

                <!-- Button Close Start -->
                <div class="offcanvas-btn-close">
                    <i class="pe-7s-close"></i>
                </div>
                <!-- Button Close End -->

                <!-- Offcanvas Cart Content Start -->
                <div class="offcanvas-cart-content">
                    <!-- Offcanvas Cart Title Start -->
                    <h2 class="offcanvas-cart-title mb-10">Shopping Cart</h2>
                    <!-- Offcanvas Cart Title End -->

                    <!-- Cart Product/Price Start -->
                    @foreach ($items as $item)


                    <div class="cart-product-wrapper mb-6">

                        <!-- Single Cart Product Start -->
                        <div class="single-cart-product">
                            <div class="cart-product-thumb">
                                <a href="single-product.html"><img src="assets/images/products/small-product/1.jpg" alt="Cart Product"></a>
                            </div>
                            <div class="cart-product-content">
                                <h3 class="title"><a href="single-product.html">{{ $item->getTitle() }}</a></h3>
                                <span class="price">
								<span class="new">{{ $item->getPrice(). "Rs" }}</span>

                                </span>
                            </div>
                        </div>
                        <!-- Single Cart Product End -->

                        <!-- Product Remove Start -->
                        <div class="cart-product-remove">
                            <a href="#"><i class="fa fa-trash"></i></a>
                        </div>
                        <!-- Product Remove End -->

                    </div>
                    <!-- Cart Product/Price End -->


                    @endforeach


                    <!-- Cart Product Total Start -->
                    <div class="cart-product-total">
                        <span class="value">Subtotal</span>
                        <span class="price">{{ $total }} </span>
                    </div>
                    <!-- Cart Product Total End -->

                    <!-- Cart Product Button Start -->
                    <div class="cart-product-btn mt-4">
                        <a href="{{ URL('cart') }}" class="btn btn-dark btn-hover-primary rounded-0 w-100">View cart</a>
                        <a href="checkout.html" class="btn btn-dark btn-hover-primary rounded-0 w-100 mt-4">Checkout</a>
                    </div>
                    <!-- Cart Product Button End -->

                </div>
                <!-- Offcanvas Cart Content End -->

            </div>
            <!-- Cart Offcanvas Inner End -->
        </div>
        <!-- Cart Offcanvas End -->

    </div>








    @yield('content')







    <!-- Footer Section Start -->
    <footer class="section footer-section">
        <!-- Footer Top Start -->
        <div class="footer-top section-padding">
            <div class="container">
                <div class="row mb-n10">
                    <div class="col-12 col-sm-6 col-lg-4 col-xl-4 mb-10" data-aos="fade-up" data-aos-delay="200">
                        <div class="single-footer-widget">
                            <h2 class="widget-title">Contact Us</h2>
                            <p class="desc-content">{{ $settings->about }}</p>
                            <!-- Contact Address Start -->
                            <ul class="widget-address">
                                <li><span>Address: </span> {{ $settings->address }}</li>
                                <li><span>Call to: </span> <a href="#"> {{ $settings->phone }}</a></li>
                                <li><span>Mail to: </span> <a href="#"> {{ $settings->email }}</a></li>
                            </ul>
                            <!-- Contact Address End -->

                            <!-- Soclial Link Start -->
                            <div class="widget-social justify-content-start mt-4">
                                <a title="Facebook" href="{{ $settings->facebook }}"><i class="fa fa-facebook-f"></i></a>
                                <a title="Twitter" href="{{ $settings->twitter }}"><i class="fa fa-twitter"></i></a>

                                <a title="Youtube" href="{{ $settings->youtube }}"><i class="fa fa-youtube"></i></a>

                            </div>
                            <!-- Social Link End -->
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-2 col-xl-2 mb-10" data-aos="fade-up" data-aos-delay="300">
                        <div class="single-footer-widget">
                            <h2 class="widget-title">Information</h2>
                            <ul class="widget-list">
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="about.html">Delivery Information</a></li>
                                <li><a href="about.html">Privacy Policy</a></li>
                                <li><a href="about.html">Terms & Conditions</a></li>
                                <li><a href="about.html">Customer Service</a></li>
                                <li><a href="about.html">Return Policy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-2 col-xl-2 mb-10" data-aos="fade-up" data-aos-delay="400">
                        <div class="single-footer-widget aos-init aos-animate">
                            <h2 class="widget-title">My Account</h2>
                            <ul class="widget-list">
                                <li><a href="account.html">My Account</a></li>
                                <li><a href="wishlist.html">Wishlist</a></li>
                                <li><a href="contact.html">Newsletter</a></li>
                                <li><a href="contact.html">Help Center</a></li>
                                <li><a href="contact.html">Conditin</a></li>
                                <li><a href="contact.html">Term Of Use</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 col-xl-4 mb-10" data-aos="fade-up" data-aos-delay="500">
                        <div class="single-footer-widget">
                            <h2 class="widget-title">Newsletter</h2>
                            <div class="widget-body">
                                <p class="desc-content mb-0">Get E-mail updates about our latest shop and special offers.</p>

                                <!-- Newsletter Form Start -->
                                <div class="newsletter-form-wrap pt-4">
                                    <form id="mc-form" class="mc-form">
                                        <input type="email" id="mc-email" class="form-control email-box mb-4" placeholder="Enter your email here.." name="EMAIL">
                                        <button id="mc-submit" class="newsletter-btn btn btn-primary btn-hover-dark" type="submit">Subscribe</button>
                                    </form>
                                    <!-- mailchimp-alerts Start -->
                                    <div class="mailchimp-alerts text-centre">
                                        <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                        <div class="mailchimp-success text-success"></div><!-- mailchimp-success end -->
                                        <div class="mailchimp-error text-danger"></div><!-- mailchimp-error end -->
                                    </div>
                                    <!-- mailchimp-alerts end -->
                                </div>
                                <!-- Newsletter Form End -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Top End -->

        <!-- Footer Bottom Start -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 text-center">
                        <div class="copyright-content">
                            <p class="mb-0">Copyright © 2021 <a href="#">{{ $settings->name }}</a> All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->
    </footer>
    <!-- Footer Section End -->

    <!-- Scroll Top Start -->
    <a href="#" class="scroll-top" id="scroll-top">
        <i class="arrow-top fa fa-long-arrow-up"></i>
        <i class="arrow-bottom fa fa-long-arrow-up"></i>
    </a>
    <!-- Scroll Top End -->


    <!-- Modal Start  -->
    <div class="modalquickview modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button class="btn close" data-bs-dismiss="modal">×</button>
                <div class="row">
                    <div class="col-md-6 col-12">

                        <!-- Product Details Image Start -->
                        <div class="modal-product-carousel">

                            <!-- Single Product Image Start -->
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <a class="swiper-slide" href="#">
                                        <img class="w-100" src="assets/images/products/large-size/1.jpg" alt="Product">
                                    </a>
                                    <a class="swiper-slide" href="#">
                                        <img class="w-100" src="assets/images/products/large-size/2.jpg" alt="Product">
                                    </a>
                                    <a class="swiper-slide" href="#">
                                        <img class="w-100" src="assets/images/products/large-size/3.jpg" alt="Product">
                                    </a>
                                    <a class="swiper-slide" href="#">
                                        <img class="w-100" src="assets/images/products/large-size/4.jpg" alt="Product">
                                    </a>
                                    <a class="swiper-slide" href="#">
                                        <img class="w-100" src="assets/images/products/large-size/5.jpg" alt="Product">
                                    </a>
                                    <a class="swiper-slide" href="#">
                                        <img class="w-100" src="assets/images/products/large-size/6.jpg" alt="Product">
                                    </a>
                                </div>

                                <!-- Swiper Pagination Start -->
                                <!-- <div class="swiper-pagination d-md-none"></div> -->
                                <!-- Swiper Pagination End -->

                                <!-- Next Previous Button Start -->
                                <div class="swiper-product-button-next swiper-button-next"><i class="pe-7s-angle-right"></i></div>
                                <div class="swiper-product-button-prev swiper-button-prev"><i class="pe-7s-angle-left"></i></div>
                                <!-- Next Previous Button End -->
                            </div>
                            <!-- Single Product Image End -->

                        </div>
                        <!-- Product Details Image End -->

                    </div>
                    <div class="col-md-6 col-12 overflow-hidden position-relative">

                        <!-- Product Summery Start -->
                        <div class="product-summery">

                            <!-- Product Head Start -->
                            <div class="product-head mb-3">
                                <h2 class="product-title">Sample product</h2>
                            </div>
                            <!-- Product Head End -->

                            <!-- Price Box Start -->
                            <div class="price-box mb-2">
                                <span class="regular-price">$80.00</span>
                                <span class="old-price"><del>$90.00</del></span>
                            </div>
                            <!-- Price Box End -->

                            <!-- Rating Start -->
                            <span class="ratings justify-content-start">
                        <span class="rating-wrap">
                            <span class="star" style="width: 100%"></span>
                            </span>
                            <span class="rating-num">(4)</span>
                            </span>
                            <!-- Rating End -->

                            <!-- SKU Start -->
                            <div class="sku mb-3">
                                <span>SKU: 12345</span>
                            </div>
                            <!-- SKU End -->

                            <!-- Description Start -->
                            <p class="desc-content mb-5">I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>
                            <!-- Description End -->

                            <!-- Product Meta Start -->
                            <div class="product-meta mb-3">
                                <!-- Product Size Start -->
                                <div class="product-size">
                                    <span>Size :</span>
                                    <a href=""><strong>S</strong></a>
                                    <a href=""><strong>M</strong></a>
                                    <a href=""><strong>L</strong></a>
                                    <a href=""><strong>XL</strong></a>
                                </div>
                                <!-- Product Size End -->
                            </div>
                            <!-- Product Meta End -->

                            <!-- Product Color Variation Start -->
                            <div class="product-color-variation mb-3">
                                <button type="button" class="btn bg-danger"></button>
                                <button type="button" class="btn bg-primary"></button>
                                <button type="button" class="btn bg-dark"></button>
                                <button type="button" class="btn bg-success"></button>
                            </div>
                            <!-- Product Color Variation End -->

                            <!-- Product Meta Start -->
                            <div class="product-meta mb-5">
                                <!-- Product Metarial Start -->
                                <div class="product-metarial">
                                    <span>Metarial :</span>
                                    <a href=""><strong>Metal</strong></a>
                                    <a href=""><strong>Resin</strong></a>
                                    <a href=""><strong>Lather</strong></a>
                                    <a href=""><strong>Polymer</strong></a>
                                </div>
                                <!-- Product Metarial End -->
                            </div>
                            <!-- Product Meta End -->

                            <!-- Quantity Start -->
                            <div class="quantity mb-5">
                                <div class="cart-plus-minus">
                                    <input class="cart-plus-minus-box" value="0" type="text">
                                    <div class="dec qtybutton"></div>
                                    <div class="inc qtybutton"></div>
                                </div>
                            </div>
                            <!-- Quantity End -->

                            <!-- Cart & Wishlist Button Start -->
                            <div class="cart-wishlist-btn pb-4 mb-n3">
                                <div class="add-to_cart mb-3">
                                    <a class="btn btn-outline-dark btn-hover-primary" href="cart.html">Add to cart</a>
                                </div>
                                <div class="add-to-wishlist mb-3">
                                    <a class="btn btn-outline-dark btn-hover-primary" href="wishlist.html">Add to Wishlist</a>
                                </div>
                            </div>
                            <!-- Cart & Wishlist Button End -->

                            <!-- Social Shear Start -->
                            <div class="social-share">
                                <span>Share :</span>
                                <a href="{{ $settings->facebook }}"><i class="fa fa-facebook-square facebook-color"></i></a>
                                <a href="{{ $settings->twitter }}"><i class="fa fa-twitter-square twitter-color"></i></a>

                            </div>

                            <!-- Product Delivery Policy Start -->
                            <ul class="product-delivery-policy border-top pt-4 mt-4 border-bottom pb-4">
                                <li> <i class="fa fa-check-square"></i> <span>Security Policy (Edit With Customer Reassurance Module)</span></li>
                                <li><i class="fa fa-truck"></i><span>Delivery Policy (Edit With Customer Reassurance Module)</span></li>
                                <li><i class="fa fa-refresh"></i><span>Return Policy (Edit With Customer Reassurance Module)</span></li>
                            </ul>
                            <!-- Product Delivery Policy End -->

                        </div>
                        <!-- Product Summery End -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal End  -->

    <!-- Scripts -->
    <!-- Scripts -->
    <!-- Global Vendor, plugins JS -->

    <!-- Vendors JS -->

    <!--
    <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="assets/js/vendor/jquery-3.5.1.min.js"></script>
    <script src="assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>
    <script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>
    -->

    <!-- Plugins JS -->

    <!--
    <script src="assets/js/plugins/countdown.min.js"></script>
    <script src="assets/js/plugins/aos.min.js"></script>
    <script src="assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="assets/js/plugins/nice-select.min.js"></script>
    <script src="assets/js/plugins/jquery.ajaxchimp.min.js"></script>
    <script src="assets/js/plugins/jquery-ui.min.js"></script>
    <script src="assets/js/plugins/lightgallery-all.min.js"></script>
    <script src="assets/js/plugins/thia-sticky-sidebar.min.js"></script>
    -->

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->


    <script src="{{ asset('assets/js/vendor.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.min.js') }}"></script>



    <!--Main JS-->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>





