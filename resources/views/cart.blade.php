@extends('template')
@section('content')



    <!-- Breadcrumb Section Start -->
    <div class="section">

        <!-- Breadcrumb Area Start -->
        <div class="breadcrumb-area bg-light">
            <div class="container-fluid">
                <div class="breadcrumb-content text-center">
                    <h1 class="title">Shopping Cart</h1>
                    <ul>
                        <li>
                            <a href="index.html">Home </a>
                        </li>
                        <li class="active"> Shopping Cart</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Breadcrumb Area End -->

    </div>
    <!-- Breadcrumb Section End -->

    <!-- Shopping Cart Section Start -->
    <div class="section section-margin">
        <div class="container">
            @if (Cart::name('shopping')->countItems() > 0)
            <div class="row">
                <div class="col-12">

                    <!-- Cart Table Start -->
                    <div class="cart-table table-responsive">
                        <table class="table table-bordered">

                            <!-- Table Head Start -->

                            <thead>
                                <tr>
                                    <th class="pro-thumbnail">Image</th>
                                    <th class="pro-title">Product</th>
                                    <th class="pro-price">Price</th>
                                    <th class="pro-quantity">Quantity</th>
                                    <th class="pro-subtotal">Total</th>
                                    <th class="pro-remove">Remove</th>
                                </tr>
                            </thead>
                            <!-- Table Head End -->

                            <!-- Table Body Start -->
                            <tbody>

                                @foreach ($items as $item)


                                <tr>
                                    <td class="pro-thumbnail"><a href="#"><img class="img-fluid" src="assets/images/products/small-product/1.jpg" alt="Product" /></a></td>
                                    <td class="pro-title"><a href="#">{{ $item->getTitle() }}</a></td>
                                    <td class="pro-price"><span>{{ $item->getPrice() }}</span></td>
                                    <td class="pro-quantity">
                                        <div class="quantity">
                                            <div class="cart-plus-minus">
                                                <input class="cart-plus-minus-box" value="{{ $item->getQuantity() }}" type="text">
                                                <div class="dec qtybutton">-</div>
                                                <div class="inc qtybutton">+</div>
                                                <div class="dec qtybutton"><i class="fa fa-minus"></i></div>
                                                <div class="inc qtybutton"><i class="fa fa-plus"></i></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="pro-subtotal"><span>{{ $item->getQuantity() * $item->getPrice() }}</span></td>

                                    <td class="pro-remove"><a href="{{ URL('cart/destroy') }}"><i class="pe-7s-trash"></i></a></td>
                                </tr>

                                @endforeach

                            </tbody>
                            <!-- Table Body End -->

                        </table>
                    </div>
                    <!-- Cart Table End -->

                    <!-- Cart Update Option Start -->
                    <div class="cart-update-option d-block d-md-flex justify-content-between">

                        <!-- Apply Coupon Wrapper Start -->
                        <div class="apply-coupon-wrapper">
                            <form action="#" method="post" class=" d-block d-md-flex">
                                <input type="text" placeholder="Enter Your Coupon Code" required />
                                <button class="btn btn-dark btn-hover-primary rounded-0">Apply Coupon</button>
                            </form>
                        </div>
                        <!-- Apply Coupon Wrapper End -->
                        <!-- Cart Update Start -->
                        <form action="{{ URL('cart/empty') }}" method="post">
                            @csrf
                        <div class="cart-update mt-sm-16">
                            <button type="submit" class="btn btn-dark btn-hover-primary rounded-0">Empty Cart</button>
                        </div>
                        </form>
                        <!-- Cart Update Start -->

                        <form action="{{ URL('/cart/update') }}" method="post">
                            @csrf
                            @method('put')
                        <div class="cart-update mt-sm-16">
                            <button type="submit" class="btn btn-dark btn-hover-primary rounded-0">Update Cart</button>
                        </div>
                        </form>
                        <!-- Cart Update End -->

                    </div>
                    <!-- Cart Update Option End -->

                </div>
            </div>

            <div class="row">
                <div class="col-lg-5 ms-auto col-custom">

                    <!-- Cart Calculation Area Start -->
                    <div class="cart-calculator-wrapper">

                        <!-- Cart Calculate Items Start -->
                        <div class="cart-calculate-items">

                            <!-- Cart Calculate Items Title Start -->
                            <h3 class="title">Cart Totals</h3>
                            <!-- Cart Calculate Items Title End -->

                            <!-- Responsive Table Start -->
                            <div class="table-responsive">
                                <table class="table">
                                    <tr>
                                        <td>Sub Total</td>
                                        <td>{{ $total }}</td>
                                    </tr>
                                    <tr>
                                        <td>Shipping</td>
                                        <td>$70</td>
                                    </tr>
                                    <tr class="total">
                                        <td>Total</td>
                                        <td class="total-amount">{{ $total }}</td>
                                    </tr>
                                </table>
                            </div>
                            <!-- Responsive Table End -->

                        </div>
                        <!-- Cart Calculate Items End -->

                        <!-- Cart Checktout Button Start -->
                        <a href="{{ URL('checkout') }}" class="btn btn-dark btn-hover-primary rounded-0 w-100">Proceed To Checkout</a>
                        <!-- Cart Checktout Button End -->

                    </div>
                    <!-- Cart Calculation Area End -->

                </div>

            </div>

            @else
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <h2>Your cart is empty !</h2>
                                        <h5 class="mt-3">Add items to it now.</h5>

                                        <a href="{{ URL('shop') }}" class="newsletter-btn btn btn-primary btn-hover-dark mt-5" type="submit">Shop Now</a>

                                    </div>
                                </div>
                                @endif

        </div>

    </div>


    <!-- Shopping Cart Section End -->
@endsection
