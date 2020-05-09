@extends('layouts.app')

@section('content')
<div class="site-wrap">
    <div class="site-navbar bg-white py-2">
        <div class="search-wrap">
            <div class="container">
                <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
                <form action="#" method="post">
                    <input type="text" class="form-control" placeholder="Search keyword and hit enter...">
                </form>
            </div>
        </div>
        <div class="container">
            <div class="d-flex align-items-center justify-content-between">
                <div class="logo">
                    <div class="site-logo">
                        <a href="index.html" class="js-logo-clone">FireTour</a>
                    </div>
                </div>
                <div class="main-nav d-none d-lg-block">
                    <nav class="site-navigation text-right text-md-center" role="navigation">
                        <ul class="site-menu js-clone-nav d-none d-lg-block">
{{--                            <li class="has-children active">--}}
{{--                                <a href="index.html">Страны</a>--}}
{{--                                <ul class="dropdown">--}}
{{--                                    <li><a href="/ex?country=1">Турция</a></li>--}}
{{--                                    <li><a href="/ex?country=2">Египет</a></li>--}}
{{--                                    <li><a href="/ex?country=3">Тайланд</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
                            <li><a href="/ex">Туры</a></li>
                            <li><a href="/ex/to">Туроператоры</a></li>
                            <li><a href="/ex/ag">Агентства</a></li>
                        </ul>
                    </nav>
                </div>
{{--                <div class="icons">--}}
{{--                    <a href="cart.html" class="icons-btn d-inline-block bag">--}}
{{--                        <span class="icon-shopping-bag"></span>--}}
{{--                        <span class="number">2</span>--}}
{{--                    </a>--}}
{{--                    <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span class="icon-menu"></span></a>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
    <div class="site-blocks-cover">
        <div class="container">
            <div class="row">
                <div class="col-md-6 ml-auto order-md-2 align-self-start">
                    <div class="site-block-cover-content">
                        <h2 class="sub-title">#Hot 2020</h2>
                        <h1>Горящие туры</h1>
                        <p><a href="/ex" class="btn btn-black rounded-0">Подбор тура</a></p>
                    </div>
                </div>
                <div class="col-md-6 order-1 align-self-end">
                    <img src="https://colorlib.com/preview/theme/shopmax/images/model_3.png" alt="Image" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <style>
        .product-item img {
            left: 0;
            top:0;
            transform: none;
            width: 100%;
            height: 100%;
            max-width: 100%;

        }
    </style>
    <div class="site-section">
        <div class="container">
            <div class="title-section mb-5">
                <h2 class="text-uppercase"><span class="d-block">Ну очень</span> Горячие туры</h2>
            </div>
            <div class="row align-items-stretch">
                <div class="col-lg-8">
                    <div class="product-item sm-height full-height bg-gray">
                        <a href="/ex?country_id=46" class="product-category">Египет <span>25 туров</span></a>
                        <img src="https://360travel.by/images/news/egypt/-1.jpg" alt="Image" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="product-item sm-height bg-gray mb-4">
                        <a href="/ex?country_id=140" class="product-category">Турция <span>5 туров</span></a>
                        <img src="https://rosting.by/t1.jpg" alt="Image" class="img-fluid">
                    </div>
                    <div class="product-item sm-height bg-gray">
                        <a href="/ex?country_id=138" class="product-category">Тунис <span>1 тур</span></a>
                        <img src="https://omega-tour.by/wp-content/uploads/2017/04/http-makvak.com-images-stories-Tunis_Sidi_Bu_Said_12.jpg" alt="Image" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
{{--    <div class="site-section">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="title-section mb-5 col-12">--}}
{{--                    <h2 class="text-uppercase">Популярные направления</h2>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-4 col-md-6 item-entry mb-4">--}}
{{--                    <a href="#" class="product-item md-height bg-gray d-block">--}}
{{--                        <img src="images/prod_2.png" alt="Image" class="img-fluid">--}}
{{--                    </a>--}}
{{--                    <h2 class="item-title"><a href="#">Gray Shoe</a></h2>--}}
{{--                    <strong class="item-price">$20.00</strong>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-md-6 item-entry mb-4">--}}
{{--                    <a href="#" class="product-item md-height bg-gray d-block">--}}
{{--                        <img src="images/prod_3.png" alt="Image" class="img-fluid">--}}
{{--                    </a>--}}
{{--                    <h2 class="item-title"><a href="#">Blue Shoe High Heels</a></h2>--}}
{{--                    <strong class="item-price"><del>$46.00</del> $28.00</strong>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-md-6 item-entry mb-4">--}}
{{--                    <a href="#" class="product-item md-height bg-gray d-block">--}}
{{--                        <img src="images/model_5.png" alt="Image" class="img-fluid">--}}
{{--                    </a>--}}
{{--                    <h2 class="item-title"><a href="#">Denim Jacket</a></h2>--}}
{{--                    <strong class="item-price"><del>$46.00</del> $28.00</strong>--}}
{{--                    <div class="star-rating">--}}
{{--                        <span class="icon-star2 text-warning"></span>--}}
{{--                        <span class="icon-star2 text-warning"></span>--}}
{{--                        <span class="icon-star2 text-warning"></span>--}}
{{--                        <span class="icon-star2 text-warning"></span>--}}
{{--                        <span class="icon-star2 text-warning"></span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-md-6 item-entry mb-4">--}}
{{--                    <a href="#" class="product-item md-height bg-gray d-block">--}}
{{--                        <img src="images/prod_1.png" alt="Image" class="img-fluid">--}}
{{--                    </a>--}}
{{--                    <h2 class="item-title"><a href="#">Leather Green Bag</a></h2>--}}
{{--                    <strong class="item-price"><del>$46.00</del> $28.00</strong>--}}
{{--                    <div class="star-rating">--}}
{{--                        <span class="icon-star2 text-warning"></span>--}}
{{--                        <span class="icon-star2 text-warning"></span>--}}
{{--                        <span class="icon-star2 text-warning"></span>--}}
{{--                        <span class="icon-star2 text-warning"></span>--}}
{{--                        <span class="icon-star2 text-warning"></span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-md-6 item-entry mb-4">--}}
{{--                    <a href="#" class="product-item md-height bg-gray d-block">--}}
{{--                        <img src="images/model_1.png" alt="Image" class="img-fluid">--}}
{{--                    </a>--}}
{{--                    <h2 class="item-title"><a href="#">Smooth Cloth</a></h2>--}}
{{--                    <strong class="item-price"><del>$46.00</del> $28.00</strong>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-md-6 item-entry mb-4">--}}
{{--                    <a href="#" class="product-item md-height bg-gray d-block">--}}
{{--                        <img src="images/model_7.png" alt="Image" class="img-fluid">--}}
{{--                    </a>--}}
{{--                    <h2 class="item-title"><a href="#">Yellow Jacket</a></h2>--}}
{{--                    <strong class="item-price">$58.00</strong>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="site-section">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="title-section text-center mb-5 col-12">--}}
{{--                    <h2 class="text-uppercase">Most Rated</h2>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-12 block-3">--}}
{{--                    <div class="nonloop-block-3 owl-carousel">--}}
{{--                        <div class="item">--}}
{{--                            <div class="item-entry">--}}
{{--                                <a href="#" class="product-item md-height bg-gray d-block">--}}
{{--                                    <img src="images/model_1.png" alt="Image" class="img-fluid">--}}
{{--                                </a>--}}
{{--                                <h2 class="item-title"><a href="#">Smooth Cloth</a></h2>--}}
{{--                                <strong class="item-price"><del>$46.00</del> $28.00</strong>--}}
{{--                                <div class="star-rating">--}}
{{--                                    <span class="icon-star2 text-warning"></span>--}}
{{--                                    <span class="icon-star2 text-warning"></span>--}}
{{--                                    <span class="icon-star2 text-warning"></span>--}}
{{--                                    <span class="icon-star2 text-warning"></span>--}}
{{--                                    <span class="icon-star2 text-warning"></span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="item">--}}
{{--                            <div class="item-entry">--}}
{{--                                <a href="#" class="product-item md-height bg-gray d-block">--}}
{{--                                    <img src="images/prod_3.png" alt="Image" class="img-fluid">--}}
{{--                                </a>--}}
{{--                                <h2 class="item-title"><a href="#">Blue Shoe High Heels</a></h2>--}}
{{--                                <strong class="item-price"><del>$46.00</del> $28.00</strong>--}}
{{--                                <div class="star-rating">--}}
{{--                                    <span class="icon-star2 text-warning"></span>--}}
{{--                                    <span class="icon-star2 text-warning"></span>--}}
{{--                                    <span class="icon-star2 text-warning"></span>--}}
{{--                                    <span class="icon-star2 text-warning"></span>--}}
{{--                                    <span class="icon-star2 text-warning"></span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="item">--}}
{{--                            <div class="item-entry">--}}
{{--                                <a href="#" class="product-item md-height bg-gray d-block">--}}
{{--                                    <img src="images/model_5.png" alt="Image" class="img-fluid">--}}
{{--                                </a>--}}
{{--                                <h2 class="item-title"><a href="#">Denim Jacket</a></h2>--}}
{{--                                <strong class="item-price"><del>$46.00</del> $28.00</strong>--}}
{{--                                <div class="star-rating">--}}
{{--                                    <span class="icon-star2 text-warning"></span>--}}
{{--                                    <span class="icon-star2 text-warning"></span>--}}
{{--                                    <span class="icon-star2 text-warning"></span>--}}
{{--                                    <span class="icon-star2 text-warning"></span>--}}
{{--                                    <span class="icon-star2 text-warning"></span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="item">--}}
{{--                            <div class="item-entry">--}}
{{--                                <a href="#" class="product-item md-height bg-gray d-block">--}}
{{--                                    <img src="images/prod_1.png" alt="Image" class="img-fluid">--}}
{{--                                </a>--}}
{{--                                <h2 class="item-title"><a href="#">Leather Green Bag</a></h2>--}}
{{--                                <strong class="item-price"><del>$46.00</del> $28.00</strong>--}}
{{--                                <div class="star-rating">--}}
{{--                                    <span class="icon-star2 text-warning"></span>--}}
{{--                                    <span class="icon-star2 text-warning"></span>--}}
{{--                                    <span class="icon-star2 text-warning"></span>--}}
{{--                                    <span class="icon-star2 text-warning"></span>--}}
{{--                                    <span class="icon-star2 text-warning"></span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="item">--}}
{{--                            <div class="item-entry">--}}
{{--                                <a href="#" class="product-item md-height bg-gray d-block">--}}
{{--                                    <img src="images/model_7.png" alt="Image" class="img-fluid">--}}
{{--                                </a>--}}
{{--                                <h2 class="item-title"><a href="#">Yellow Jacket</a></h2>--}}
{{--                                <strong class="item-price">$58.00</strong>--}}
{{--                                <div class="star-rating">--}}
{{--                                    <span class="icon-star2 text-warning"></span>--}}
{{--                                    <span class="icon-star2 text-warning"></span>--}}
{{--                                    <span class="icon-star2 text-warning"></span>--}}
{{--                                    <span class="icon-star2 text-warning"></span>--}}
{{--                                    <span class="icon-star2 text-warning"></span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
</div>

@endsection
