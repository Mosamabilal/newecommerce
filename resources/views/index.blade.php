@extends('template')

@section('content')
    <!-- Hero/Intro Slider Start -->
    <div class="section">
        <div class="hero-slider">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <!-- Single Hero Slider Item Start -->

                    @foreach($sliders as $slider)

                    <div class="hero-slide-item-two swiper-slide">

                        <!-- Hero Slider Background Image Start-->
                        <div class="hero-slide-bg">
                            <img src="{{ asset('uploads/'.$slider->image) }}" alt="" />
                        </div>
                        <!-- Hero Slider Background Image End-->

                        <!-- Hero Slider Container Start -->
                        <div class="container">

                            <div class="row">
                                <div class="hero-slide-content col-lg-8 col-xl-6 col-12 text-lg-center text-left">
                                    <h2 class="title">
                                        {{ $slider->heading }}
                                    </h2>
                                    <p>{{ $slider->description }}</p>
                                    <a href="{{ $slider->link }}" target="_blank" class="btn btn-lg btn-primary btn-hover-dark">{{ $slider->link_name }}</a>
                                </div>
                            </div>

                        </div>
                        <!-- Hero Slider Container End -->

                    </div>
                    @endforeach
                    <!-- Single Hero Slider Item End -->
                </div>

                <!-- Swiper Pagination Start -->
                <div class="swiper-pagination d-md-none"></div>
                <!-- Swiper Pagination End -->

                <!-- Swiper Navigation Start -->
                <div class="home-slider-prev swiper-button-prev main-slider-nav d-md-flex d-none"><i class="pe-7s-angle-left"></i></div>
                <div class="home-slider-next swiper-button-next main-slider-nav d-md-flex d-none"><i class="pe-7s-angle-right"></i></div>
                <!-- Swiper Navigation End -->

            </div>
        </div>
    </div>
    <!-- Hero/Intro Slider End -->

    <!-- Feature Section Start -->
    <div class="section section-margin">
        <div class="container">
            <div class="feature-wrap">
                <div class="row row-cols-lg-4 row-cols-xl-auto row-cols-sm-2 row-cols-1 justify-content-between mb-n5">
                    <!-- Feature Start -->
                    <div class="col mb-5" data-aos="fade-up" data-aos-delay="300">
                        <div class="feature">
                            <div class="icon text-primary align-self-center">
                                <img src="assets/images/icons/feature-icon-2.png" alt="Feature Icon">
                            </div>
                            <div class="content">
                                <h5 class="title">Free Shipping</h5>
                                <p>Free shipping on all order</p>
                            </div>
                        </div>
                    </div>
                    <!-- Feature End -->

                    <!-- Feature Start -->
                    <div class="col mb-5" data-aos="fade-up" data-aos-delay="500">
                        <div class="feature">
                            <div class="icon text-primary align-self-center">
                                <img src="assets/images/icons/feature-icon-3.png" alt="Feature Icon">
                            </div>
                            <div class="content">
                                <h5 class="title">Support 24/7</h5>
                                <p>Support 24 hours a day</p>
                            </div>
                        </div>
                    </div>
                    <!-- Feature End -->
                    <!-- Feature Start -->
                    <div class="col mb-5" data-aos="fade-up" data-aos-delay="700">
                        <div class="feature">
                            <div class="icon text-primary align-self-center">
                                <img src="assets/images/icons/feature-icon-4.png" alt="Feature Icon">
                            </div>
                            <div class="content">
                                <h5 class="title">Money Return</h5>
                                <p>Back guarantee under 5 days</p>
                            </div>
                        </div>
                    </div>
                    <!-- Feature End -->

                    <!-- Feature Start -->
                    <div class="col mb-5" data-aos="fade-up" data-aos-delay="900">
                        <div class="feature">
                            <div class="icon text-primary align-self-center">
                                <img src="assets/images/icons/feature-icon-1.png" alt="Feature Icon">
                            </div>
                            <div class="content">
                                <h5 class="title">Order Discount</h5>
                                <p>Onevery order over $150</p>
                            </div>
                        </div>
                    </div>
                    <!-- Feature End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Feature Section End -->

    <!-- Banner Section Start -->
    <div class="section">
        <div class="container">

            <!-- Banners Start -->
            <div class="row mb-n6 overflow-hidden">
                <!-- Banner Start -->
                <div class="col-md-6 col-12 mb-6">
                    <div class="banner" data-aos="fade-right" data-aos-delay="300">
                        <div class="banner-image">
                            <a href="shop-grid.html"><img src="assets/images/banner/banner-4.jpg" alt="Banner Image"></a>
                        </div>
                        <div class="info">
                            <div class="small-banner-content">
                                <h4 class="sub-title">Up to <span>50%</span> Off</h4>
                                <h3 class="title">Office Dress</h3>
                                <a href="shop-grid.html" class="btn btn-primary btn-hover-dark btn-sm">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Banner End -->

                <!-- Banner Start -->
                <div class="col-md-6 col-12 mb-6">
                    <div class="banner" data-aos="fade-left" data-aos-delay="500">
                        <div class="banner-image">
                            <a href="shop-grid.html"><img src="assets/images/banner/banner-5.jpg" alt="Banner Image"></a>
                        </div>
                        <div class="info">
                            <div class="small-banner-content">
                                <h4 class="sub-title">Up to <span>40%</span> Off</h4>
                                <h3 class="title">All Products</h3>
                                <a href="shop-grid.html" class="btn btn-primary btn-hover-dark btn-sm">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Banner End -->

            </div>
            <!-- Banners End -->
        </div>
    </div>
    <!-- Banner Section End -->

    <!-- Product Section Start -->
    <div class="section section-padding mt-0">
        <div class="container">
            <!-- Section Title & Tab Start -->
            <div class="row">
                <!-- Tab Start --
                <div class="col-12">
                    <ul class="product-tab-nav nav justify-content-center mb-10 title-border-bottom mt-n3">
                        <li class="nav-item" data-aos="fade-up" data-aos-delay="300"><a class="nav-link active mt-3" data-bs-toggle="tab" href="#tab-product-all">New Arrivals</a></li>
                        <li class="nav-item" data-aos="fade-up" data-aos-delay="400"><a class="nav-link mt-3" data-bs-toggle="tab" href="#tab-product-clothings">Best Sellers</a></li>
                        <li class="nav-item" data-aos="fade-up" data-aos-delay="500"><a class="nav-link mt-3" data-bs-toggle="tab" href="#tab-product-all">Sale Items</a></li>
                    </ul>
                </div>
                <!-- Tab End -->
            </div>
            <!-- Section Title & Tab End -->









<!-- Shop Wrapper Start -->
<div class="row shop_wrapper grid_4">

    <!-- Single Product Start -->
    @foreach ($homeproducts as $homeproduct)


    <div class="col-lg-3 col-md-3 col-sm-6 product" data-aos="fade-up" data-aos-delay="200">
        <div class="product-inner">
            <div class="thumb">
                <a href={{ URL('detail/'.$homeproduct->id) }} class="image">
                    <img class="first-image" src="{{ asset('uploads/'.$homeproduct->image) }}" alt="Product" />
                    <img class="second-image" src="{{ asset('uploads/'.$homeproduct->image_2) }}" alt="Product" />
                </a>
                <div class="actions">

                    <a href="#" title="Quickview" class="action quickview" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="pe-7s-search"></i></a>

                </div>
            </div>
            <div class="content">
                <h5 class="title"><a href="{{ URL('detail/'.$homeproduct->id)  }}">{{ $homeproduct->name }}</a></h5>
                <span class="ratings">
                        <span class="rating-wrap">
                            <span class="star" style="width: 100%"></span>
                </span>
                <span class="rating-num">(4)</span>
                </span>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
                <span class="price">
                        <span class="new">{{ $homeproduct->price.'Rs' }}</span>

                </span>

            </div>
        </div>
    </div>
    <!-- Single Product End -->
    @endforeach


</div>
<!-- Shop Wrapper End -->


        </div>

    </div>














    <!-- Banner Fullwidth Start -->
    <div class="section">
        <div class="container mb-5">
            <div class="row">
                <div class="col-12" data-aos="fade-up" data-aos-delay="300">
                    <div class="banner">
                        <div class="banner-image">
                            <a href="shop-grid.html"><img src="assets/images/banner/big-banner.jpg" alt="Banner"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Fullwidth End -->





@endsection
