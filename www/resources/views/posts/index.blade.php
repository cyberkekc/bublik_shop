@extends('layout')

@section('content')

    <div class = "body__overlay"></div>
    <!-- Start Offset Wrapper -->
    <div class = "offset__wrapper">
        <!-- Start Search Popap -->
        <div class = "search__area">
            <div class = "container">
                <div class = "row">
                    <div class = "col-md-12">
                        <div class = "search__inner">
                            <form action = "#" method = "get">
                                <input placeholder = "Search here... " type = "text">
                                <button type = "submit"></button>
                            </form>
                            <div class = "search__close__btn">
                                <span class = "search__close__btn_icon"><i class = "zmdi zmdi-close"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Search Popap -->
        <!-- Start Offset MEnu -->
        <div class = "offsetmenu">
            <div class = "offsetmenu__inner">
                <div class = "offsetmenu__close__btn">
                    <a href = "#"><i class = "zmdi zmdi-close"></i></a>
                </div>
                <div class = "off__contact">
                    <div class = "logo">
                        <a href = "index.html">
                            <img src = "images/logo/logo.png" alt = "logo">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Offset MEnu -->
        <!-- Start Cart Panel -->
        <div class = "shopping__cart">
            <div class = "shopping__cart__inner">
                <div class = "offsetmenu__close__btn">
                    <a href = "#"><i class = "zmdi zmdi-close"></i></a>
                </div>
                <div class = "shp__cart__wrap">
                    <div class = "shp__single__product">
                        <div class = "shp__pro__thumb">
                            <a href = "#">
                                <img src = "images/product/sm-img/1.jpg" alt = "product images">
                            </a>
                        </div>
                        <div class = "shp__pro__details">
                            <h2><a href = "product-details.html">BO&Play Wireless Speaker</a></h2>
                            <span class = "quantity">QTY: 1</span>
                            <span class = "shp__price">$105.00</span>
                        </div>
                        <div class = "remove__btn">
                            <a href = "#" title = "Remove this item"><i class = "zmdi zmdi-close"></i></a>
                        </div>
                    </div>
                    <div class = "shp__single__product">
                        <div class = "shp__pro__thumb">
                            <a href = "#">
                                <img src = "images/product/sm-img/2.jpg" alt = "product images">
                            </a>
                        </div>
                        <div class = "shp__pro__details">
                            <h2><a href = "product-details.html">Brone Candle</a></h2>
                            <span class = "quantity">QTY: 1</span>
                            <span class = "shp__price">$25.00</span>
                        </div>
                        <div class = "remove__btn">
                            <a href = "#" title = "Remove this item"><i class = "zmdi zmdi-close"></i></a>
                        </div>
                    </div>
                </div>
                <ul class = "shoping__total">
                    <li class = "subtotal">Subtotal:</li>
                    <li class = "total__price">$130.00</li>
                </ul>
                <ul class = "shopping__btn">
                    <li><a href = "cart.html">View Cart</a></li>
                    <li class = "shp__checkout"><a href = "checkout.html">Checkout</a></li>
                </ul>
            </div>
        </div>
        <!-- End Cart Panel -->
    </div>
    <!-- End Offset Wrapper -->
    <!-- Start Feature Product -->
    <section class = "categories-slider-area bg__white">
        <div class = "container">
            <div class = "row">

                <div class = "col-md-3 col-lg-3 col-sm-4 col-xs-12 float-right-style">
                    <div class = "categories-menu mrg-xs">
                        <div class = "category-heading">
                            <h3>Categories</h3>
                        </div>
                        <div class = "category-menu-list">
                            <ul>
                                <li><a href = "#"><img alt = "" src = "images/icons/thum7.png"> Notebooks</a></li>
                                <li><a href = "#"><img alt = "" src = "images/icons/thum8.png"> Mouses</a></li>
                                <li><a href = "#"><img alt = "" src = "images/icons/thum9.png"> Processors </a></li>
                                <li><a href = "#"><img alt = "" src = "images/icons/thum10.png"> Motherboards</a></li>
                                <li><a href = "#"><img alt = "" src = "images/icons/thum2.png"> Printers</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Left Feature -->
            </div>
        </div>
    </section>
    <!-- End Feature Product -->
@endsection
