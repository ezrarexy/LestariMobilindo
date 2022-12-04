@extends('tmp\main')

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
                        <div class="shop_bar">
                            <div class="row">
                                <div class="col-md-6 category_bar">
                                <nav class="woocommerce-breadcrumb">
                                    <a href="../../index.html">Home</a> <i>/</i> NEW CARS
                                </nav>
                                <p class="woocommerce-result-count">16 Products</p>
                                </div>

                                <div class="col-md-6">
                                <div class="shop-filters">
                                    <div class="filter-trigger-box">
                                    <button
                                        id="et-shop-filters"
                                        class="filter-trigger filter-popup"
                                    >
                                        <span class="icon-filter"
                                        ><svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="24"
                                            height="24"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="feather feather-sliders"
                                        >
                                            <line x1="4" y1="21" x2="4" y2="14"></line>
                                            <line x1="4" y1="10" x2="4" y2="3"></line>
                                            <line x1="12" y1="21" x2="12" y2="12"></line>
                                            <line x1="12" y1="8" x2="12" y2="3"></line>
                                            <line x1="20" y1="21" x2="20" y2="16"></line>
                                            <line x1="20" y1="12" x2="20" y2="3"></line>
                                            <line x1="1" y1="14" x2="7" y2="14"></line>
                                            <line x1="9" y1="8" x2="15" y2="8"></line>
                                            <line
                                            x1="17"
                                            y1="16"
                                            x2="23"
                                            y2="16"
                                            ></line></svg
                                        ></span>
                                        Filters<span
                                        class="et-active-filters-count"
                                        ></span>
                                    </button>
                                    </div>

                                    <form class="woocommerce-ordering" method="get">
                                    <select
                                        name="orderby"
                                        class="orderby"
                                        aria-label="Shop order"
                                    >
                                        <option value="menu_order" selected="selected">
                                        Default sorting
                                        </option>
                                        <option value="popularity">
                                        Sort by popularity
                                        </option>
                                        <option value="rating">
                                        Sort by average rating
                                        </option>
                                        <option value="date">Sort by latest</option>
                                        <option value="price">
                                        Sort by price: low to high
                                        </option>
                                        <option value="price-desc">
                                        Sort by price: high to low
                                        </option>
                                    </select>
                                    <input type="hidden" name="paged" value="1" />
                                    </form>

                                    <div class="shop-views list-1 small-1">
                                    <button
                                        id="shop-display-grid"
                                        class="shop-display grid-icon active"
                                        data-display="grid"
                                    >
                                        <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-grid"
                                        >
                                        <rect x="3" y="3" width="7" height="7"></rect>
                                        <rect x="14" y="3" width="7" height="7"></rect>
                                        <rect x="14" y="14" width="7" height="7"></rect>
                                        <rect x="3" y="14" width="7" height="7"></rect>
                                        </svg>
                                    </button>
                                    <button
                                        id="shop-display-small"
                                        class="shop-display small-icon"
                                        data-display="small"
                                    >
                                        <svg
                                        version="1.1"
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        >
                                        <path
                                            d="M20.016 8.016v-4.031h-4.031v4.031h4.031zM20.016 14.016v-4.031h-4.031v4.031h4.031zM20.016 20.016v-4.031h-4.031v4.031h4.031zM14.016 8.016v-4.031h-4.031v4.031h4.031zM14.016 14.016v-4.031h-4.031v4.031h4.031zM14.016 20.016v-4.031h-4.031v4.031h4.031zM8.016 8.016v-4.031h-4.031v4.031h4.031zM8.016 14.016v-4.031h-4.031v4.031h4.031zM8.016 20.016v-4.031h-4.031v4.031h4.031zM20.016 2.016q0.797 0 1.383 0.586t0.586 1.383v16.031q0 0.797-0.586 1.383t-1.383 0.586h-16.031q-0.797 0-1.383-0.586t-0.586-1.383v-16.031q0-0.797 0.586-1.383t1.383-0.586h16.031z"
                                        ></path>
                                        </svg>
                                    </button>
                                    <button
                                        id="shop-display-list"
                                        class="shop-display list-icon"
                                        data-display="list"
                                    >
                                        <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-menu"
                                        >
                                        <line x1="3" y1="12" x2="21" y2="12"></line>
                                        <line x1="3" y1="6" x2="21" y2="6"></line>
                                        <line x1="3" y1="18" x2="21" y2="18"></line>
                                        </svg>
                                    </button>
                                    </div>
                                </div>
                                </div>
                            </div>

                            <div id="side-filters" class="side-panel">
                                <header>
                                <div class="side-panel-title">Filters</div>
                                <a href="#" class="et-close button btn-sm" title="Done"
                                    >Done</a
                                >
                                </header>
                                <div class="side-panel-content custom_scroll">
                                <ul class="shop-sidebar shop-widget-scroll">
                                    <div id="block-14" class="widget cf widget_block">
                                    <h5>Categories</h5>
                                    </div>
                                    <div id="block-13" class="widget cf widget_block">
                                    <div
                                        data-block-name="woocommerce/product-categories"
                                        class="wp-block-woocommerce-product-categories wc-block-product-categories is-list"
                                        style=""
                                    >
                                        <ul
                                        class="wc-block-product-categories-list wc-block-product-categories-list--depth-0"
                                        >
                                        <li
                                            class="wc-block-product-categories-list-item"
                                        >
                                            <a style="" href="../indent-cars/index.html"
                                            >INDENT CARS</a
                                            >
                                            <span
                                            class="wc-block-product-categories-list-item-count"
                                            ><span aria-hidden="true">6</span
                                            ><span class="screen-reader-text"
                                                >6 products</span
                                            ></span
                                            >
                                        </li>
                                        <li
                                            class="wc-block-product-categories-list-item"
                                        >
                                            <a style="" href="index.html">NEW CARS</a>
                                            <span
                                            class="wc-block-product-categories-list-item-count"
                                            ><span aria-hidden="true">16</span
                                            ><span class="screen-reader-text"
                                                >16 products</span
                                            ></span
                                            >
                                        </li>
                                        <li
                                            class="wc-block-product-categories-list-item"
                                        >
                                            <a style="" href="../used-cars/index.html"
                                            >USED-CARS</a
                                            >
                                            <span
                                            class="wc-block-product-categories-list-item-count"
                                            ><span aria-hidden="true">14</span
                                            ><span class="screen-reader-text"
                                                >14 products</span
                                            ></span
                                            >
                                        </li>
                                        </ul>
                                    </div>
                                    </div>
                                    <div
                                    id="berocket_product_brand_widget-4"
                                    class="widget cf widget_berocket_product_brand_widget"
                                    >
                                    <style>
                                        .br_brand_berocket_product_brand_widget-4
                                        .br_widget_brand_element_slider {
                                        width: 50%;
                                        }
                                        .widget_berocket_product_brand_widget
                                        .brcs_slider_brands_container {
                                        display: flex;
                                        flex-wrap: wrap;
                                        justify-content: space-between;
                                        }
                                        .widget_berocket_product_brand_widget
                                        .brcs_slider_brands_container
                                        .brand_slider_image
                                        a {
                                        display: block;
                                        text-align: center;
                                        }
                                        .widget_berocket_product_brand_widget
                                        .brcs_slider_brands_container
                                        .brand_slider_image
                                        a
                                        img {
                                        margin: 0 auto;
                                        }
                                        .br_brand_berocket_product_brand_widget-4
                                        .br_widget_brand_element_slider {
                                        box-sizing: border-box;
                                        }
                                    </style>
                                    <div
                                        class="brcs_slider_brands brcs_slider_brands_container br_brand_berocket_product_brand_widget-4 br_brands_hierarchy_all"
                                        data-columns="2"
                                    >
                                        <div class="br_widget_brand_element_slider list">
                                        <div class="brand_info brand_slider_image">
                                            <a href="../../brands/bentley/index.html"
                                            ><img
                                                src="../../wp-content/uploads/2022/03/Bentleypng.png"
                                                alt="Bentley"
                                                style="height: 64px; object-fit: cover"
                                            />
                                            </a>
                                        </div>
                                        </div>
                                        <div class="br_widget_brand_element_slider list">
                                        <div class="brand_info brand_slider_image">
                                            <a href="../../brands/bmw/index.html"
                                            ><img
                                                src="../../wp-content/uploads/2022/03/bmwpng.png"
                                                alt="BMW"
                                                style="height: 64px; object-fit: cover"
                                            />
                                            </a>
                                        </div>
                                        </div>
                                        <div class="br_widget_brand_element_slider list">
                                        <div class="brand_info brand_slider_image">
                                            <a href="../../brands/ferrari/index.html"
                                            ><img
                                                src="../../wp-content/uploads/2022/03/ferraripng.png"
                                                alt="Ferrari"
                                                style="height: 64px; object-fit: cover"
                                            />
                                            </a>
                                        </div>
                                        </div>
                                        <div class="br_widget_brand_element_slider list">
                                        <div class="brand_info brand_slider_image">
                                            <a href="../../brands/hummer/index.html"
                                            ><img
                                                src="../../wp-content/uploads/2022/04/hummer-logo-new.png"
                                                alt="Hummer"
                                                style="height: 64px; object-fit: cover"
                                            />
                                            </a>
                                        </div>
                                        </div>
                                        <div class="br_widget_brand_element_slider list">
                                        <div class="brand_info brand_slider_image">
                                            <a href="../../brands/lamborghini/index.html"
                                            ><img
                                                src="../../wp-content/uploads/2022/03/lamborghinipng.png"
                                                alt="Lamborghini"
                                                style="height: 64px; object-fit: cover"
                                            />
                                            </a>
                                        </div>
                                        </div>
                                        <div class="br_widget_brand_element_slider list">
                                        <div class="brand_info brand_slider_image">
                                            <a href="../../brands/land-rover/index.html"
                                            ><img
                                                src="../../wp-content/uploads/2022/04/logo-land-rover.html"
                                                alt="Land Rover"
                                                style="height: 64px; object-fit: cover"
                                            />
                                            </a>
                                        </div>
                                        </div>
                                        <div class="br_widget_brand_element_slider list">
                                        <div class="brand_info brand_slider_image">
                                            <a href="../../brands/mc-laren/index.html"
                                            ><img
                                                src="../../wp-content/uploads/2022/03/mclarenpng.png"
                                                alt="Mc Laren"
                                                style="height: 64px; object-fit: cover"
                                            />
                                            </a>
                                        </div>
                                        </div>
                                        <div class="br_widget_brand_element_slider list">
                                        <div class="brand_info brand_slider_image">
                                            <a
                                            href="../../brands/mercedes-benz/index.html"
                                            ><img
                                                src="../../wp-content/uploads/2022/03/mercedesbenzpng.png"
                                                alt="Mercedes Benz"
                                                style="height: 64px; object-fit: cover"
                                            />
                                            </a>
                                        </div>
                                        </div>
                                        <div class="br_widget_brand_element_slider list">
                                        <div class="brand_info brand_slider_image">
                                            <a href="../../brands/porsche/index.html"
                                            ><img
                                                src="../../wp-content/uploads/2022/03/porschepng.png"
                                                alt="Porsche"
                                                style="height: 64px; object-fit: cover"
                                            />
                                            </a>
                                        </div>
                                        </div>
                                        <div class="br_widget_brand_element_slider list">
                                        <div class="brand_info brand_slider_image">
                                            <a href="../../brands/rolls-royce/index.html"
                                            ><img
                                                src="../../wp-content/uploads/2022/03/rollsroycepng.png"
                                                alt="Rolls Royce"
                                                style="height: 64px; object-fit: cover"
                                            />
                                            </a>
                                        </div>
                                        </div>
                                        <div class="br_widget_brand_element_slider list">
                                        <div class="brand_info brand_slider_image">
                                            <a href="../../brands/tesla/index.html"
                                            ><img
                                                src="../../wp-content/uploads/2022/03/teslapng.png"
                                                alt="Tesla"
                                                style="height: 64px; object-fit: cover"
                                            />
                                            </a>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                    <div
                                    id="woocommerce_product_tag_cloud-2"
                                    class="widget cf woocommerce widget_product_tag_cloud"
                                    >
                                    <h2 class="widgettitle">CAR TYPES</h2>
                                    <div class="tagcloud">
                                        <ul class="wp-tag-cloud" role="list">
                                        <li>
                                            <a
                                            href="../../product-tag/convertible/index.html"
                                            class="tag-cloud-link tag-link-122 tag-link-position-1"
                                            style="font-size: 1em"
                                            >Convertible</a
                                            >
                                        </li>
                                        <li>
                                            <a
                                            href="../../product-tag/hatchback/index.html"
                                            class="tag-cloud-link tag-link-125 tag-link-position-2"
                                            style="font-size: 1em"
                                            >Hatchback</a
                                            >
                                        </li>
                                        </ul>
                                    </div>
                                    </div>
                                </ul>
                                </div>
                            </div>
                        </div>

                        <div class="woocommerce-notices-wrapper"></div>

                        @if (count($cars)>0)
                            <ul class="products row et-main-products hover-animation-zoom-jump show-rating main-shop-archive" data-columns="4" data-mobile-columns="2" data-navigation="true" data-pagination="true" data-layoutmode="packery">
                                @foreach ($cars as $v)
                                    <li class="item et-listing-style1 col-6 col-sm-6 col-md-4 col-lg-3 small_grid_5 product type-product post-9050 status-publish first instock product_cat-new-cars has-post-thumbnail shipping-taxable purchasable product-type-simple">
                                        <div class="product-inner animation fade">
                                            <figure class="product_thumbnail">
                                                <a
                                                href="/product/{{ $v->id }}"
                                                title="Bentley BENTAYGA Hybird First Edition &#8211; 2022"
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
                                                    href="../../product/bentley-bentayga-hybird-first-edition-2022/index.html"
                                                    title="Bentley BENTAYGA Hybird First Edition &#8211; 2022"
                                                    >{{ $v->name }}</a
                                                    >
                                                </h2>

                                                <div
                                                    class="yith-wcwl-add-to-wishlist add-to-wishlist-9050 wishlist-fragment on-first-load"
                                                    data-fragment-ref="9050"
                                                    data-fragment-options='{"base_url":"","in_default_wishlist":false,"is_single":false,"show_exists":false,"product_id":9050,"parent_product_id":9050,"product_type":"simple","show_view":false,"browse_wishlist_text":"Browse wishlist","already_in_wishslist_text":"The product is already in your wishlist!","product_added_text":"Product added!","heading_icon":"fa-heart-o","available_multi_wishlist":false,"disable_wishlist":false,"show_count":false,"ajax_loading":false,"loop_position":"shortcode","item":"add_to_wishlist"}'
                                                >
                                                    <!-- ADD TO WISHLIST -->
                                                    <div class="yith-wcwl-add-button et-tooltip">
                                                    <a
                                                        href="index5d3b.html?add_to_wishlist=9050"
                                                        rel="nofollow"
                                                        data-product-id="9050"
                                                        data-product-type="simple"
                                                        data-original-product-id="9050"
                                                        class="add_to_wishlist single_add_to_wishlist"
                                                        data-title="Add to wishlist"
                                                        ><span class="text">Add to wishlist</span
                                                        ><span class="icon"
                                                        ><span class="et-icon et-heart"></span
                                                        ></span>
                                                    </a>
                                                    </div>
                                                    <!-- COUNT TEXT -->
                                                </div>
                                                </div>

                                                <div class="product_after_title">
                                                <div class="product_after_shop_loop_price">
                                                    <span class="price"
                                                    ><span class="woocommerce-Price-amount amount"
                                                        ><bdi
                                                        ><span
                                                            class="woocommerce-Price-currencySymbol"
                                                            >Rp</span
                                                        >{{ $v->price }}</bdi
                                                        ></span
                                                    ></span
                                                    >
                                                </div>

                                                <div class="product-excerpt">
                                                    <p>
                                                        {!! $v->spec !!}
                                                    </p>
                                                </div>

                                                <div class="after_shop_loop_actions">
                                                    <a
                                                    href="indexab9e.html?add-to-cart=9050"
                                                    data-quantity="1"
                                                    class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                    data-product_id="9050"
                                                    data-product_sku=""
                                                    aria-label="Add &ldquo;Bentley BENTAYGA Hybird First Edition - 2022&rdquo; to your cart"
                                                    rel="nofollow"
                                                    ><span class="text">Add to cart</span
                                                    ><span class="icon"
                                                        ><span
                                                        class="et-icon et-shopping-cart"
                                                        ></span></span
                                                    ></a>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>                            
                                @endforeach
                            </ul>
                        @else
                            <h3 align="center">No Product to display</h3>
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