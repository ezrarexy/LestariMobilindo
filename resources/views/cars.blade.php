@extends('tmp.main')

@section('title', 'Lestari Mobilindo - '.$pej->name)

@section('stylesheet')

@endsection

@section('bodyClass', 'archive tax-product_cat term-new-cars term-108 custom-background wp-embed-responsive theme-goya woocommerce woocommerce-page woocommerce-no-js woo-variation-swatches wvs-theme-goya wvs-theme-child-goya wvs-style-squared wvs-attr-behavior-blur wvs-tooltip wvs-css wvs-show-label blog-id-1 wp-gallery-popup header-sticky header-full-width goya-lazyload floating-labels login-single-column header-border-1 hero-light-title sticky-header-light header-transparent-mobiles page-header-regular light-title wpb-js-composer js-comp-ver-6.8.0 vc_responsive')

@section('content')

    <div role="main" class="site-content">
        <div class="header-spacer"></div>

        <div class="hero-header page-padding">
            <div class="regular-title">
                <div class="container hero-header-container">
                <header class="row woocommerce-products-header">
                    <div class="col-lg-8">
                    <h1 class="et-shop-title woocommerce-products-header__title page-title">
                        {{ $pej->name }}
                    </h1>
                    </div>
                </header>
                </div>
            </div>
        </div>

        <div class="shop-container shop-full-width shop-sidebar-popup">
            <div id="shop-products" class="shop-products container">
                <div class="row">
                    <div class="shop-products-col col">


                        <div class="woocommerce-notices-wrapper"></div>

                        @if (count($cars)>0)
                            <ul class="products row et-main-products hover-animation-zoom-jump show-rating main-shop-archive" data-columns="4" data-mobile-columns="2" data-navigation="true" data-pagination="true" data-layoutmode="packery">
                                @foreach ($cars as $v)
                                    <li class="item et-listing-style1 col-6 col-sm-6 col-md-4 col-lg-3 small_grid_5 product type-product post-9050 status-publish first instock product_cat-new-cars has-post-thumbnail shipping-taxable purchasable product-type-simple">
                                        <div class="product-inner animation fade">
                                            <figure class="product_thumbnail">
                                                <a
                                                href="/product/{{ $v->id }}"
                                                title="{{ $v->name }}"
                                                ><img
                                                    width="1080"
                                                    height="1080"
                                                    src="/img/products/{{ $v->img[0] }}"
                                                    class="main-image skip-lazy wp-post-image"
                                                    alt=""
                                                    decoding="async"
                                                /></a>
                                                <div class="actions-wrapper">
                                                <div class="actions-inner"></div>
                                                </div>
                                            </figure>
                                            <div class="caption">
                                                <div class="product-title">
                                                <h2>
                                                    <a
                                                    class="product-link"
                                                    href="/product/{{ $v->id }}"
                                                    title="{{ $v->name }}"
                                                    >{{ $v->name }}</a
                                                    >
                                                </h2>
                                            </div>
                                        </div>
                                    </li>                            
                                @endforeach
                            </ul>
                        @else
                            <h3 align="center">Tidak ada produk yang sesuai</h3>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')

<script src="../wp-content/themes/goya/assets/js/vendor/odometer.min699f.js?ver=0.4.8" id="counter-js" ></script>

@endsection