@extends('tmp.main')

@section('title', 'Product - '.$product->name)

@section('stylesheet')

  <style id='goya-customizer-styles-inline-css'>
    body,blockquote cite,div.vc_progress_bar .vc_single_bar .vc_label,div.vc_toggle_size_sm .vc_toggle_title h4 {font-size:16px;}.wp-caption-text,.woocommerce-breadcrumb,.post.listing .listing_content .post-meta,.footer-bar .footer-bar-content,.side-menu .mobile-widgets p,.side-menu .side-widgets p,.products .product.product-category a div h2 .count,#payment .payment_methods li .payment_box,#payment .payment_methods li a.about_paypal,.et-product-detail .summary .sizing_guide,#reviews .commentlist li .comment-text .woocommerce-review__verified,#reviews .commentlist li .comment-text .woocommerce-review__published-date,.commentlist > li .comment-meta,.widget .type-post .post-meta,.widget_rss .rss-date,.wp-block-latest-comments__comment-date,.wp-block-latest-posts__post-date,.commentlist > li .reply,.comment-reply-title small,.commentlist .bypostauthor .post-author,.commentlist .bypostauthor > .comment-body .fn:after,.et-portfolio.et-portfolio-style-hover-card .type-portfolio .et-portfolio-excerpt {font-size:14px;}h1, h2, h3, h4, h5, h6{color:#ffffff;}.et-banner .et-banner-content .et-banner-title.color-accent,.et-banner .et-banner-content .et-banner-subtitle.color-accent,.et-banner .et-banner-content .et-banner-link.link.color-accent,.et-banner .et-banner-content .et-banner-link.link.color-accent:hover,.et-banner .et-banner-content .et-banner-link.outlined.color-accent,.et-banner .et-banner-content .et-banner-link.outlined.color-accent:hover {color:#4b96d4;}.et-banner .et-banner-content .et-banner-subtitle.tag_style.color-accent,.et-banner .et-banner-content .et-banner-link.solid.color-accent,.et-banner .et-banner-content .et-banner-link.solid.color-accent:hover {background:#4b96d4;}.et-iconbox.icon-style-background.icon-color-accent .et-feature-icon {background:#4b96d4;}.et-iconbox.icon-style-border.icon-color-accent .et-feature-icon,.et-iconbox.icon-style-simple.icon-color-accent .et-feature-icon {color:#4b96d4;}.et-counter.counter-color-accent .h1,.et-counter.icon-color-accent i {color:#4b96d4;}.et_btn.solid.color-accent {background:#4b96d4;}.et_btn.link.color-accent,.et_btn.outlined.color-accent,.et_btn.outlined.color-accent:hover {color:#4b96d4;}.et-animatype.color-accent .et-animated-entry,.et-stroketype.color-accent *{color:#4b96d4;}.slick-prev:hover,.slick-next:hover,.flex-prev:hover,.flex-next:hover,.mfp-wrap.quick-search .mfp-content [type="submit"],.et-close,.single-product .pswp__button:hover,.content404 h4,.woocommerce-tabs .tabs li a span,.woo-variation-gallery-wrapper .woo-variation-gallery-trigger:hover:after,.mobile-menu li.menu-item-has-children.active > .et-menu-toggle:after,.remove:hover, a.remove:hover,span.minicart-counter.et-count-zero,.tag-cloud-link .tag-link-count,.star-rating > span:before,.comment-form-rating .stars > span:before,.wpmc-tabs-wrapper li.wpmc-tab-item.current,div.argmc-wrapper .tab-completed-icon:before,div.argmc-wrapper .argmc-tab-item.completed .argmc-tab-number,.widget ul li.active,.et-wp-gallery-popup .mfp-arrow {color:#4b96d4;}.menu-item.accent-color a,.accent-color:not(.fancy-tag),.accent-color:not(.fancy-tag) .wpb_wrapper > h1,.accent-color:not(.fancy-tag) .wpb_wrapper > h2,.accent-color:not(.fancy-tag) .wpb_wrapper > h3,.accent-color:not(.fancy-tag) .wpb_wrapper > h4,.accent-color:not(.fancy-tag) .wpb_wrapper > h5,.accent-color:not(.fancy-tag) .wpb_wrapper > h6,.accent-color:not(.fancy-tag) .wpb_wrapper > p {color:#4b96d4 !important;}.accent-color.fancy-tag,.wpb_text_column .accent-color.fancy-tag:last-child,.accent-color.fancy-tag .wpb_wrapper > h1,.accent-color.fancy-tag .wpb_wrapper > h2,.accent-color.fancy-tag .wpb_wrapper > h3,.accent-color.fancy-tag .wpb_wrapper > h4,.accent-color.fancy-tag .wpb_wrapper > h5,.accent-color.fancy-tag .wpb_wrapper > h6,.accent-color.fancy-tag .wpb_wrapper > p {background-color:#4b96d4;}.wpmc-tabs-wrapper li.wpmc-tab-item.current .wpmc-tab-number,.wpmc-tabs-wrapper li.wpmc-tab-item.current:before,.tag-cloud-link:hover,div.argmc-wrapper .argmc-tab-item.completed .argmc-tab-number,div.argmc-wrapper .argmc-tab-item.current .argmc-tab-number,div.argmc-wrapper .argmc-tab-item.last.current + .argmc-tab-item:hover .argmc-tab-number {border-color:#4b96d4;}.vc_progress_bar.vc_progress-bar-color-bar_orange .vc_single_bar span.vc_bar,span.minicart-counter,.filter-trigger .et-active-filters-count,.et-active-filters-count,div.argmc-wrapper .argmc-tab-item.current .argmc-tab-number,div.argmc-wrapper .argmc-tab-item.visited:hover .argmc-tab-number,div.argmc-wrapper .argmc-tab-item.last.current + .argmc-tab-item:hover .argmc-tab-number,.slick-dots li button:hover,.wpb_column.et-light-column .postline:before,.wpb_column.et-light-column .postline-medium:before,.wpb_column.et-light-column .postline-large:before,.et-feat-video-btn:hover .et-featured-video-icon:after,.post.type-post.sticky .entry-title a:after {background-color:#4b96d4;}div.argmc-wrapper .argmc-tab-item.visited:before {border-bottom-color:#4b96d4;}.yith-wcan-loading:after,.blockUI.blockOverlay:after,.easyzoom-notice:after,.woocommerce-product-gallery__wrapper .slick:after,.add_to_cart_button.loading:after,.et-loader:after {background-color:#4b96d4;}.fancy-title,h1.fancy-title,h2.fancy-title,h3.fancy-title,h4.fancy-title,h5.fancy-title,h6.fancy-title {color:#4b96d4}.fancy-tag,h1.fancy-tag,h2.fancy-tag,h3.fancy-tag,h4.fancy-tag,h5.fancy-tag,h6.fancy-tag {background-color:#4b96d4}@media only screen and (min-width:992px) {.header,.header-spacer,.product-header-spacer {height:120px;}.page-header-transparent .hero-header .hero-title {padding-top:120px;}.et-product-detail.et-product-layout-no-padding.product-header-transparent .showcase-inner .product-information {padding-top:120px;}.header_on_scroll:not(.megamenu-active) .header,.header_on_scroll:not(.megamenu-active) .header-spacer,.header_on_scroll:not(.megamenu-active) .product-header-spacer {height:125px;}}@media only screen and (max-width:991px) {.header,.header_on_scroll .header,.header-spacer,.product-header-spacer {height:60px;}.page-header-transparent .hero-header .hero-title {padding-top:60px;}}@media screen and (min-width:576px) and (max-width:767px) {.sticky-product-bar {height:60px;}.product-bar-visible.single-product.fixed-product-bar-bottom .footer {margin-bottom:60px;}.product-bar-visible.single-product.fixed-product-bar-bottom #scroll_to_top.active {bottom:70px;}}.page-header-regular .header,.header_on_scroll .header {background-color:#000000;}@media only screen and (max-width:576px) {.page-header-transparent:not(.header-transparent-mobiles):not(.header_on_scroll) .header {background-color:#000000;}}.header a,.header .menu-toggle,.header .goya-search button {color:#000000;}@media only screen and (max-width:767px) {.sticky-header-light .header .menu-toggle:hover,.header-transparent-mobiles.sticky-header-light.header_on_scroll .header a.icon,.header-transparent-mobiles.sticky-header-light.header_on_scroll .header .menu-toggle,.header-transparent-mobiles.light-title:not(.header_on_scroll) .header a.icon,.header-transparent-mobiles.light-title:not(.header_on_scroll) .header .menu-toggle {color:#ffffff;}}@media only screen and (min-width:768px) {.light-title:not(.header_on_scroll) .header .site-title,.light-title:not(.header_on_scroll) .header .et-header-menu>li> a,.sticky-header-light.header_on_scroll .header .et-header-menu>li> a,.light-title:not(.header_on_scroll) span.minicart-counter.et-count-zero,.sticky-header-light.header_on_scroll .header .icon,.sticky-header-light.header_on_scroll .header .menu-toggle,.light-title:not(.header_on_scroll) .header .icon,.light-title:not(.header_on_scroll) .header .menu-toggle {color:#ffffff;}}.et-header-menu .menu-label,.mobile-menu .menu-label {background-color:#ffffff;}.et-header-menu ul.sub-menu:before,.et-header-menu .sub-menu .sub-menu {background-color:#ffffff !important;}.et-header-menu>li.menu-item-has-children > a:after {border-bottom-color:#ffffff;}.et-header-menu .sub-menu li.menu-item-has-children:after,.et-header-menu ul.sub-menu li a {color:#000000;}.side-panel .mobile-bar,.side-panel .mobile-bar.dark {background:#f8f8f8;}.side-mobile-menu,.side-mobile-menu.dark { background:#000000;}.side-fullscreen-menu,.side-fullscreen-menu.dark { background:#000000;}.site-footer,.site-footer.dark {background-color:#000000;}.site-footer .footer-bar.custom-color-1,.site-footer .footer-bar.custom-color-1.dark {background-color:#000000;}.mfp #et-quickview {max-width:960px;}.easyzoom-flyout,.single-product .pswp__bg,.single-product .pswp__img--placeholder--blank,.product-showcase {background:#000000;}.woocommerce-Tabs-panel.custom_scroll {max-height:400px;}.product_meta .trap {display:none !important;}.shop-widget-scroll .widget > ul,.shop-widget-scroll .widget:not(.widget-woof) > .widgettitle + *,.shop-widget-scroll .wcapf-layered-nav {max-height:150px;}.free-shipping-progress-bar .progress-bar-indicator {background:linear-gradient(270deg, #b9a16b 0, #ffffff 200%);background-color: #b9a16b;flex-grow:1;}.rtl .free-shipping-progress-bar .progress-bar-indicator {background:linear-gradient(90deg, #b9a16b 0, #ffffff 200%);}.progress-bar-status.success .progress-bar-indicator { background:#67bb67;}.star-rating > span:before,.comment-form-rating .stars > span:before {color:#ffffff;}.product-inner .badge.onsale,.wc-block-grid .wc-block-grid__products .wc-block-grid__product .wc-block-grid__product-onsale {color:#ef5c5c;background-color:#ffffff;}.et-product-detail .summary .badge.onsale {border-color:#ef5c5c;}.product-inner .badge.new {color:#585858;background-color:#ffffff;}.product-inner .badge.out-of-stock {color:#585858;background-color:#ffffff;}@media screen and (min-width:768px) {.wc-block-grid__products .wc-block-grid__product .wc-block-grid__product-image {margin-top:5px;}.wc-block-grid__products .wc-block-grid__product:hover .wc-block-grid__product-image {transform:translateY(-5px);}
    .wc-block-grid__products .wc-block-grid__product:hover .wc-block-grid__product-image img {-moz-transform:scale(1.05, 1.05);-ms-transform:scale(1.05, 1.05);-webkit-transform:scale(1.05, 1.05);transform:scale(1.05, 1.05);}}.et-blog.hero-header .hero-title {background-color:#f8f8f8;}.post.post-detail.hero-title .post-featured.title-wrap {background-color:#f8f8f8;}.has-gutenberg-white-color { color:#ffffff !important; }.has-gutenberg-white-background-color { background-color:#ffffff; }.wp-block-button.outlined .has-gutenberg-white-color { border-color:#ffffff !important; background-color:transparent !important; }.has-gutenberg-shade-color { color:#f8f8f8 !important; }.has-gutenberg-shade-background-color { background-color:#f8f8f8; }.wp-block-button.outlined .has-gutenberg-shade-color { border-color:#f8f8f8 !important; background-color:transparent !important; }.has-gutenberg-gray-color { color:#ffffff !important; }.has-gutenberg-gray-background-color { background-color:#ffffff; }.wp-block-button.outlined .has-gutenberg-gray-color { border-color:#ffffff !important; background-color:transparent !important; }.has-gutenberg-dark-color { color:#000000 !important; }.has-gutenberg-dark-background-color { background-color:#000000; }.wp-block-button.outlined .has-gutenberg-dark-color { border-color:#000000 !important; background-color:transparent !important; }.has-gutenberg-accent-color { color:#4b96d4 !important; }.has-gutenberg-accent-background-color { background-color:#4b96d4; }.wp-block-button.outlined .has-gutenberg-accent-color { border-color:#4b96d4 !important; background-color:transparent !important; }.commentlist .bypostauthor > .comment-body .fn:after {content:'Post Author';}.et-inline-validation-notices .form-row.woocommerce-invalid-required-field:after{content:'Required field';}.post.type-post.sticky .entry-title a:after {content:'Featured';}
  </style>

  <style id="kirki-inline-styles">
    .header,.header-spacer,.product-header-spacer{
      height:120px;
    }
    .header .header-bottom{
      height:40px;max-height:40px;min-height:40px;
    }
    .header .logolink img{
      max-height:80px;
    }
    .side-panel .mobile-bar,.side-panel .mobile-bar.dark{
      background-color:#f8f8f8;
    }
    .side-fullscreen-menu,.side-fullscreen-menu.dark{
      background-color:#000000;
    }
    .side-mobile-menu li, .side-mobile-menu li a, .side-mobile-menu .bottom-extras, .side-mobile-menu .bottom-extras a, .side-mobile-menu .selected{color:#ffffff;}.side-menu.side-mobile-menu,.side-menu.side-mobile-menu.dark{background-color:#000000;}.site-footer,.site-footer.dark{background-color:#000000;}.site-footer .footer-bar.custom-color-1,.site-footer .footer-bar.custom-color-1.dark{background-color:#000000;}.footer-bar.custom-color-1 .social-icons a{color:#ffffff;}.mfp #et-quickview{max-width:960px;}.mfp-wrap.quick-search .mfp-content [type="submit"], .et-close, .single-product .pswp__button:hover, .content404 h4, .woocommerce-tabs .tabs li a span, .woo-variation-gallery-wrapper .woo-variation-gallery-trigger:hover:after, .mobile-menu li.menu-item-has-children.active > .et-menu-toggle:after, .remove:hover, a.remove:hover, .minicart-counter.et-count-zero, .tag-cloud-link .tag-link-count, .wpmc-tabs-wrapper li.wpmc-tab-item.current, div.argmc-wrapper .tab-completed-icon:before, .et-wp-gallery-popup .mfp-arrow{color:#4b96d4;}.slick-dots li.slick-active button{background-color:#4b96d4;}body, table, .shop_table, blockquote cite, .et-listing-style1 .product_thumbnail .et-quickview-btn, .products .single_add_to_cart_button.button, .products .add_to_cart_button.button, .products .added_to_cart.button, .side-panel header h6{color:#ffffff;}.cart-collaterals .woocommerce-shipping-destination strong, #order_review .shop_table, #payment .payment_methods li label, .et-product-detail .summary .variations label, .woocommerce-tabs .tabs li a:hover, .woocommerce-tabs .tabs li.active a, .et-product-detail .product_meta > span *, .sticky-product-bar .variations label, .et-product-detail .summary .sizing_guide, #side-cart .woocommerce-mini-cart__total, .woocommerce-Price-amount, .cart-collaterals .shipping-calculator-button, .woocommerce-terms-and-conditions-wrapper a, .et-checkout-login-title a, .et-checkout-coupon-title a, .woocommerce-checkout h3, .order_review_heading, .woocommerce-Address-title h3, .woocommerce-MyAccount-content h3, .woocommerce-MyAccount-content legend, .et-product-detail.et-cart-mixed .summary .yith-wcwl-add-to-wishlist > div > a, .et-product-detail.et-cart-stacked .summary .yith-wcwl-add-to-wishlist > div > a, .hentry table th, .entry-content table th, #reviews .commentlist li .comment-text .meta strong, .et-feat-video-btn, #ship-to-different-address label, .woocommerce-account-fields p.create-account label, .et-login-wrapper a, .floating-labels .form-row.float-label input:focus ~ label, .floating-labels .form-row.float-label textarea:focus ~ label, .woocommerce-info, .order_details li strong, table.order_details th, table.order_details a:not(.button), .variable-items-wrapper .variable-item:not(.radio-variable-item).button-variable-item.selected, .woocommerce-MyAccount-content p a:not(.button), .woocommerce-MyAccount-content header a, .woocommerce-MyAccount-navigation ul li a, .et-MyAccount-user-info .et-username strong, .woocommerce-MyAccount-content .shop_table tr th, mark, .woocommerce-MyAccount-content strong, .product_list_widget a, .search-panel .search-field, .goya-search .search-button-group select, .widget .slider-values p span{color:#ffffff;}input[type=radio]:checked:before, input[type=checkbox]:checked,.select2-container--default .select2-results__option--highlighted[aria-selected], .widget .noUi-horizontal .noUi-base .noUi-origin:first-child{background-color:#ffffff;}label:hover input[type=checkbox], label:hover input[type=radio], input[type="text"]:focus, input[type="password"]:focus, input[type="number"]:focus, input[type="date"]:focus, input[type="datetime"]:focus, input[type="datetime-local"]:focus, input[type="time"]:focus, input[type="month"]:focus, input[type="week"]:focus, input[type="email"]:focus, input[type="search"]:focus, input[type="tel"]:focus, input[type="url"]:focus, input.input-text:focus, select:focus, textarea:focus{border-color:#ffffff;}input[type=checkbox]:checked{border-color:#ffffff!important;}.et-product-detail .summary .yith-wcwl-add-to-wishlist a .icon svg, .sticky-product-bar .yith-wcwl-add-to-wishlist a .icon svg{stroke:#ffffff;}.et-product-detail .summary .yith-wcwl-wishlistaddedbrowse a svg, .et-product-detail .summary .yith-wcwl-wishlistexistsbrowse a svg, .sticky-product-bar .yith-wcwl-wishlistaddedbrowse a svg, .sticky-product-bar .yith-wcwl-wishlistexistsbrowse a svg{fill:#ffffff;}.woocommerce-breadcrumb, .woocommerce-breadcrumb a, .widget .wcapf-layered-nav ul li .count, .category_bar .header-active-filters, #reviews .commentlist li .comment-text .woocommerce-review__verified, #reviews .commentlist li .comment-text .woocommerce-review__published-date, .woof_container_inner h4, #side-filters .header-active-filters .active-filters-title, #side-filters .widget h6, .sliding-menu .sliding-menu-back, .type-post .post-meta{color:#000000;}h1, h2, h3, h4, h5, h6{color:#ffffff;}.yith-wcan-loading:after, .blockUI.blockOverlay:after, .easyzoom-notice:after, .woocommerce-product-gallery__wrapper .slick:after, .add_to_cart_button.loading:after, .et-loader:after, .wcapf-before-update:after, #side-filters.ajax-loader .side-panel-content:after{background-color:#4b96d4;}.et-page-load-overlay .dot3-loader{color:#4b96d4;}.button, input[type=submit], button[type=submit], #side-filters .et-close, .nf-form-cont .nf-form-content .submit-wrap .ninja-forms-field, .yith-wcwl-popup-footer a.button.wishlist-submit{background-color:#000000;}.button, .button:hover, button[type=submit], button[type=submit]:hover, input[type=submit], input[type=submit]:hover, .nf-form-cont .nf-form-content .submit-wrap .ninja-forms-field, .nf-form-cont .nf-form-content .submit-wrap .ninja-forms-field:hover, .yith-wcwl-popup-footer a.button.wishlist-submit{color:#ffffff;}.button.outlined, .button.outlined:hover, .button.outlined:focus, .button.outlined:active, .woocommerce-Reviews .comment-reply-title:hover{color:#ffffff;}.fancy-title{color:#4b96d4;}.fancy-tag{background-color:#4b96d4;}.page-header-regular .header, .header_on_scroll .header{background-color:#000000;}.header .goya-search button, .header .et-switcher-container .selected, .header .et-header-text, .header .product.wcml-dropdown li>a, .header .product.wcml-dropdown .wcml-cs-active-currency>a, .header .product.wcml-dropdown .wcml-cs-active-currency:hover>a, .header .product.wcml-dropdown .wcml-cs-active-currency:focus>a,.header .menu-toggle,.header a{color:#000000;}.et-header-menu .menu-label{background-color:#ffffff;}.et-header-menu ul.sub-menu li a{color:#000000;}.et-header-menu .sub-menu .sub-menu,.et-header-menu ul.sub-menu:before{background-color:#ffffff;}.et-header-menu>li.menu-item-has-children > a:after{border-bottom-color:#ffffff;}.et-product-detail .single_add_to_cart_button, .sticky-product-bar .single_add_to_cart_button, .sticky-product-bar .add_to_cart_button, .woocommerce-mini-cart__buttons .button.checkout, .button.checkout-button, #place_order.button, .woocommerce .argmc-wrapper .argmc-nav-buttons .argmc-submit, .wishlist_table .add_to_cart{background-color:#000000;}.woocommerce-mini-cart__buttons .button:not(.checkout){color:#000000;}.product-showcase-light-text .showcase-inner .single_add_to_cart_button{background-color:#ffffff;}.product-showcase-light-text .et-product-detail .single_add_to_cart_button{color:#000000;}.shop_bar button, .shop_bar .woocommerce-ordering .select2-container--default .select2-selection--single, .shop_bar .shop-filters .orderby, .shop_bar .woocommerce-ordering:after{color:#ffffff;}.products .product-title h3 a, .et-product-detail .summary h1{color:#ffffff;}.products .product_after_title .price ins, .products .product_after_title .price>.amount, .price ins, .price > .amount, .price del, .price .woocommerce-Price-amount{color:#ffffff;}.star-rating > span:before, .comment-form-rating .stars > span:before{color:#ffffff;}.product-inner .badge.onsale, .wc-block-grid .wc-block-grid__products .wc-block-grid__product .wc-block-grid__product-onsale{color:#ef5c5c;background-color:#ffffff;}.et-product-detail .summary .badge.onsale{border-color:#ef5c5c;}.product-inner .badge.new{background-color:#ffffff;}.product-inner .badge.out-of-stock{color:#585858;background-color:#ffffff;}input[type="text"], input[type="password"], input[type="number"], input[type="date"], input[type="datetime"], input[type="datetime-local"], input[type="time"], input[type="month"], input[type="week"], input[type="email"], input[type="search"], input[type="tel"], input[type="url"], input.input-text, select, textarea, .wp-block-button__link, .nf-form-cont .nf-form-content .list-select-wrap .nf-field-element > div, .nf-form-cont .nf-form-content input:not([type="button"]), .nf-form-cont .nf-form-content textarea, .nf-form-cont .nf-form-content .submit-wrap .ninja-forms-field, .button, .comment-form-rating, .woocommerce a.ywsl-social, .login a.ywsl-social, input[type=submit], .select2.select2-container--default .select2-selection--single, .woocommerce .woocommerce-MyAccount-content .shop_table .woocommerce-button, .woocommerce .sticky-product-bar .quantity, .woocommerce .et-product-detail .summary .quantity, .et-product-detail .summary .yith-wcwl-add-to-wishlist > div > a, .wishlist_table .add_to_cart.button, .yith-wcwl-add-button a.add_to_wishlist, .yith-wcwl-popup-button a.add_to_wishlist, .wishlist_table a.ask-an-estimate-button, .wishlist-title a.show-title-form, .hidden-title-form a.hide-title-form, .woocommerce .yith-wcwl-wishlist-new button, .wishlist_manage_table a.create-new-wishlist, .wishlist_manage_table button.submit-wishlist-changes, .yith-wcwl-wishlist-search-form button.wishlist-search-button, #side-filters.side-panel .et-close, .header .search-button-group{-webkit-border-radius:0px;-moz-border-radius:0px;border-radius:0px;}
    body, blockquote cite{
      font-family:Poppins;
    }
    body, blockquote cite, div.vc_progress_bar .vc_single_bar .vc_label, div.vc_toggle_size_sm .vc_toggle_title h4{font-size:16px;}.wp-caption-text, .woocommerce-breadcrumb, .post.listing .listing_content .post-meta, .footer-bar .footer-bar-content, .side-menu .mobile-widgets p, .side-menu .side-widgets p, .products .product.product-category a div h2 .count, #payment .payment_methods li .payment_box, #payment .payment_methods li a.about_paypal, .et-product-detail .summary .sizing_guide, #reviews .commentlist li .comment-text .woocommerce-review__verified, #reviews .commentlist li .comment-text .woocommerce-review__published-date, .commentlist > li .comment-meta, .widget .type-post .post-meta, .widget_rss .rss-date, .wp-block-latest-comments__comment-date, .wp-block-latest-posts__post-date, .commentlist > li .reply, .comment-reply-title small, .commentlist .bypostauthor .post-author, .commentlist .bypostauthor > .comment-body .fn:after, .et-portfolio.et-portfolio-style-hover-card .type-portfolio .et-portfolio-excerpt{font-size:14px;}@media only screen and (min-width: 992px){.header_on_scroll:not(.megamenu-active) .header{height:125px;}.header_on_scroll:not(.megamenu-active) .header .logolink img{max-height:80px;}}@media only screen and (max-width: 991px){.header,.header-spacer,.header_on_scroll .header,.product-header-spacer,.sticky-product-bar{height:60px;}.header .logolink img{max-height:45px;}}@media only screen and (max-width: 767px){.header-transparent-mobiles.light-title:not(.header_on_scroll) .header .menu-toggle,.header-transparent-mobiles.light-title:not(.header_on_scroll) .header a.icon,.header-transparent-mobiles.sticky-header-light.header_on_scroll .header .menu-toggle,.header-transparent-mobiles.sticky-header-light.header_on_scroll .header a.icon,.sticky-header-light .header .menu-toggle:hover{color:#ffffff;}}@media only screen and (min-width: 768px){.light-title:not(.header_on_scroll) .header .site-title, .light-title:not(.header_on_scroll) .header .et-header-menu > li> a, .sticky-header-light.header_on_scroll .header .et-header-menu > li> a, .light-title:not(.header_on_scroll) span.minicart-counter.et-count-zero, .sticky-header-light.header_on_scroll .header .et-header-text, .sticky-header-light.header_on_scroll .header .et-header-text a, .light-title:not(.header_on_scroll) .header .et-header-text, .light-title:not(.header_on_scroll) .header .et-header-text a, .sticky-header-light.header_on_scroll .header .header .icon, .light-title:not(.header_on_scroll) .header .icon, .sticky-header-light.header_on_scroll .header .menu-toggle, .light-title:not(.header_on_scroll) .header .menu-toggle, .sticky-header-light.header_on_scroll .header .et-switcher-container .selected, .light-title:not(.header_on_scroll) .header .et-switcher-container .selected, .light-title:not(.header_on_scroll) .header .product.wcml-dropdown li>a, .light-title:not(.header_on_scroll) .header .product.wcml-dropdown .wcml-cs-active-currency>a, .light-title:not(.header_on_scroll) .header .product.wcml-dropdown .wcml-cs-active-currency:hover>a, .light-title:not(.header_on_scroll) .header .product.wcml-dropdown .wcml-cs-active-currency:focus>a, .sticky-header-light.header_on_scroll .header .product.wcml-dropdown li>a, .sticky-header-light.header_on_scroll .header .product.wcml-dropdown .wcml-cs-active-currency>a, .sticky-header-light.header_on_scroll .header .product.wcml-dropdown .wcml-cs-active-currency:hover>a, .sticky-header-light.header_on_scroll .header .product.wcml-dropdown .wcml-cs-active-currency:focus>a{color:#ffffff;}.products:not(.shop_display_list) .et-listing-style4 .after_shop_loop_actions .button{background-color:#000000;}}/* devanagari */

    @font-face {
    font-family: 'Poppins';
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: url(/wp-content/fonts/poppins/pxiEyp8kv8JHgFVrJJbedHFHGPezSQ.woff) format('woff');
    unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
    }
    /* latin-ext */
    @font-face {
    font-family: 'Poppins';
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: url(/wp-content/fonts/poppins/pxiEyp8kv8JHgFVrJJnedHFHGPezSQ.woff) format('woff');
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }
    /* latin */
    @font-face {
    font-family: 'Poppins';
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: url(/wp-content/fonts/poppins/pxiEyp8kv8JHgFVrJJfedHFHGPc.woff) format('woff');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }/* cyrillic */
    @font-face {
    font-family: 'Jost';
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: url(/wp-content/fonts/jost/92zPtBhPNqw79Ij1E865zBUv7myjJTVFNI4un_HKCEl-Cw.woff) format('woff');
    unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }
    /* latin-ext */
    @font-face {
    font-family: 'Jost';
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: url(/wp-content/fonts/jost/92zPtBhPNqw79Ij1E865zBUv7myjJTVPNI4un_HKCEl-Cw.woff) format('woff');
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }
    /* latin */
    @font-face {
    font-family: 'Jost';
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: url(/wp-content/fonts/jost/92zPtBhPNqw79Ij1E865zBUv7myjJTVBNI4un_HKCEk.woff) format('woff');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }/* devanagari */
    @font-face {
    font-family: 'Poppins';
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: url(/wp-content/fonts/poppins/pxiEyp8kv8JHgFVrJJbedHFHGPezSQ.woff) format('woff');
    unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
    }
    /* latin-ext */
    @font-face {
    font-family: 'Poppins';
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: url(/wp-content/fonts/poppins/pxiEyp8kv8JHgFVrJJnedHFHGPezSQ.woff) format('woff');
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }
    /* latin */
    @font-face {
    font-family: 'Poppins';
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: url(/wp-content/fonts/poppins/pxiEyp8kv8JHgFVrJJfedHFHGPc.woff) format('woff');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }/* cyrillic */
    @font-face {
    font-family: 'Jost';
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: url(/wp-content/fonts/jost/92zPtBhPNqw79Ij1E865zBUv7myjJTVFNI4un_HKCEl-Cw.woff) format('woff');
    unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }
    /* latin-ext */
    @font-face {
    font-family: 'Jost';
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: url(/wp-content/fonts/jost/92zPtBhPNqw79Ij1E865zBUv7myjJTVPNI4un_HKCEl-Cw.woff) format('woff');
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }
    /* latin */
    @font-face {
    font-family: 'Jost';
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: url(/wp-content/fonts/jost/92zPtBhPNqw79Ij1E865zBUv7myjJTVBNI4un_HKCEk.woff) format('woff');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }/* devanagari */
    @font-face {
    font-family: 'Poppins';
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: url(/wp-content/fonts/poppins/pxiEyp8kv8JHgFVrJJbedHFHGPezSQ.woff) format('woff');
    unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
    }
    /* latin-ext */
    @font-face {
    font-family: 'Poppins';
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: url(/wp-content/fonts/poppins/pxiEyp8kv8JHgFVrJJnedHFHGPezSQ.woff) format('woff');
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }
    /* latin */
    @font-face {
    font-family: 'Poppins';
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: url(/wp-content/fonts/poppins/pxiEyp8kv8JHgFVrJJfedHFHGPc.woff) format('woff');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }/* cyrillic */
    @font-face {
    font-family: 'Jost';
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: url(/wp-content/fonts/jost/92zPtBhPNqw79Ij1E865zBUv7myjJTVFNI4un_HKCEl-Cw.woff) format('woff');
    unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }
    /* latin-ext */
    @font-face {
    font-family: 'Jost';
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: url(/wp-content/fonts/jost/92zPtBhPNqw79Ij1E865zBUv7myjJTVPNI4un_HKCEl-Cw.woff) format('woff');
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }
    /* latin */
    @font-face {
    font-family: 'Jost';
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: url(/wp-content/fonts/jost/92zPtBhPNqw79Ij1E865zBUv7myjJTVBNI4un_HKCEk.woff) format('woff');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }
  </style>

  <link rel="stylesheet" href="/wp-content/plugins/js_composer/assets/lib/flexslider2/flexslider-rtl-min.css?ver=2.7.2.0">

@endsection

@section('bodyClass', 'product-template-default single single-product postid-9050 custom-background wp-embed-responsive theme-goya woocommerce woocommerce-page woocommerce-no-js woo-variation-swatches wvs-theme-goya wvs-theme-child-goya wvs-style-squared wvs-attr-behavior-blur wvs-tooltip wvs-css wvs-show-label blog-id-1 wp-gallery-popup header-sticky header-full-width goya-lazyload floating-labels login-single-column product-showcase-light-text sticky-header-light header-transparent-mobiles page-header-transparent light-title wpb-js-composer js-comp-ver-6.8.0 vc_responsive')

@section('content')

  <div role="main" class="site-content">
    <div class="header-spacer"></div>

    <div id="product-9050" class="et-product-detail et-product-layout-regular product-header-transparent et-cart-mixed product-details-vertical single-ajax-atc et-variation-style-table et-product-gallery-carousel thumbnails-vertical thumbnails-mobile-dots sticky-section sticky-summary has-breadcrumbs product type-product post-9050 status-publish first instock product_cat-new-cars has-post-thumbnail shipping-taxable purchasable product-type-simple">
      <div class="product-showcase showcase-regular showcase-disabled product-title-right">
        <div class="product-header-spacer"></div>
        <div class="container showcase-inner">
          <div class="row showcase-row">
            <div class="col-12 col-lg-7 product-gallery woocommerce-product-gallery-parent zoom-disabled lightbox-enabled has-additional-thumbnails video-link-gallery">
              <div class="product-gallery-inner">
                <div class="woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images" data-columns="4" style=" opacity: 0; transition: opacity 0.25s ease-in-out;">

                  <figure class="woocommerce-product-gallery__wrapper">

                    <div id="slider" class="flexslider">
                      <ul class="slides">
                        @foreach ($product->img as $val )
                          <li>
                            <img src="/img/products/{{ $val }}" />
                          </li>                            
                        @endforeach
                      </ul>
                    </div>
                    
                    <div id="carousel" class="flexslider">
                      <ul class="slides">
                        @foreach ($product->img as $val)
                          <li>
                            <img src="/img/products/{{ $val }}" />
                          </li>    
                        @endforeach
                        
                      </ul>
                    </div>

                  </figure>

                </div>

                <div
                  class="et-featured-video video-gallery animation bottom-to-top"
                ></div>
              </div>
            </div>
            <div class="col-12 col-lg-5 product-information">
              <div class="summary entry-summary">
                <div id="woo-notices-wrapper"></div>
                <nav class="woocommerce-breadcrumb">
                  <a href="/">BERANDA</a> <a><i class="fal fa-angle-right text-white"></i></a>
                  <a href="/car/{{ $product->link }}"><span style="text-transform: uppercase">{{ $product->condition }}</span></a>
                </nav>
                <div class="et-pro-summary-top">
                  <h1 class="product_title entry-title">
                    {{ $product->name }}
                  </h1>
                  <p class="price">
                    <span class="woocommerce-Price-amount amount" ><bdi ><span class="woocommerce-Price-currencySymbol" >Rp</span><span class="harga">{{ $product->price }}</span></bdi></span>
                  </p>
                  <div class="clearfix price-separator"></div>
                </div>
                <div class="et-pro-summary-content">

                  <div class="clearfix sticky-bar-trigger"></div>
                  <div class="product_meta">
                    <span class="posted_in">
                      Tag: <a href="/brand/{{ $product->brand_id }}" rel="tag" style="text-transform: uppercase">{{ $product->brand }}</a>, <a href="/tag/{{ $product->category }}" rel="tag" style="text-transform: uppercase">{{ $product->category }}</a>, <a href="/car/{{ $product->link }}" rel="tag" style="text-transform: uppercase">{{ $product->condition }}</a>
                    </span>
                  </div>

                  <div class="post-share">
                    <ul class="social-icons share-article">
                      <li class="share-label">Edo</li>
                      
                      <li>
                        <a aria-label="WhatsApp" href="https://wa.me/6281373986868?text=Hallo%20saya%20tertarik%20dengan%20produk%20anda%20{{ Request::url() }}"> <img alt="Chat on WhatsApp" src="/img/WhatsAppButtonGreenSmall.svg" /></a>
                      </li>
                    </ul>
                  </div>

                  @php
                  use \App\Models\sales;

                  $sales = Sales::all();
                  @endphp

                  @foreach ($sales as $k=>$v)
                  <div class="post-share">
                    <ul class="social-icons share-article">
                      <li class="share-label">{{$v->name}}</li>
                      
                      <li>
                        <a aria-label="WhatsApp" href="https://wa.me/{{ $v->phone }}?text=Hallo%20saya%20tertarik%20dengan%20produk%20anda%20{{ Request::url() }}"> <img alt="Chat on WhatsApp" src="/img/WhatsAppButtonGreenSmall.svg" /></a>
                      </li>
                    </ul>
                  </div>
                  @endforeach


                </div>

              </div>
            </div>
            <!-- .product-information -->
          </div>
          <!-- .showcase-row -->
        </div>
        <!-- .showcase-inner -->
      </div>
      <!-- .product-showcase -->

      <div class="woocommerce-tabs wc-tabs-wrapper product-details-vertical" >
        <div class="container">
          <div class="row justify-content-md-center">
            <div class="col-12">
              <ul class="tabs wc-tabs" role="tablist">
                <li
                  class="description_tab"
                  id="tab-title-description"
                  role="tab"
                  aria-controls="tab-description"
                >
                  <a href="#tab-description" class="tab-link">
                    Spesifikasi
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div
          class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content wc-tab"
          id="tab-description"
          role="tabpanel"
          aria-labelledby="tab-title-description"
        >
          <div class="container">
            <div class="row justify-content-md-center">
              <div class="col-12">
                <h2>Spesifikasi</h2>
                <div class="desc-layout-boxed">
                  {!! $product->spec !!}
                  
                  <p>Price : Rp<span class="harga">{{ $product->price }}</span> OFF THE ROAD</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>

@endsection

@section('scripts')


  <script src="{{ asset('/assets/js/jquery_number.min.js') }}"></script>
  <script type="text/javascript">
    
    $(document).ready(function () {
      $('.harga').number( true, 2 );
    });

    (function () {
      var c = document.body.className;
      c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
      document.body.className = c;
    })();
  </script>
  <link rel='stylesheet' id='berocket_framework_tippy-css' href='/wp-content/plugins/brands-for-woocommerce/berocket/assets/tippy/tippy6a4d.css?ver=6.1.1' media='all' />
  <link rel='stylesheet' id='berocket_framework_popup-animate-css' href='/wp-content/plugins/brands-for-woocommerce/berocket/assets/popup/animate6a4d.css?ver=6.1.1' media='all' />
  <link rel='stylesheet' id='rs-plugin-settings-css' href='/wp-content/plugins/revslider/public/assets/css/rs6097f.css?ver=6.5.14' media='all' />
  <style id='rs-plugin-settings-inline-css'>
    #rs-demo-id {}
  </style>
  <script src='/wp-content/plugins/brands-for-woocommerce/berocket/assets/tippy/tippy.min6a4d.js?ver=6.1.1' id='berocket_framework_tippy-js'></script>
  <script src='/wp-content/plugins/brands-for-woocommerce/js/front6a4d.js?ver=6.1.1' id='berocket_front-js'></script>
  <script src='/wp-content/plugins/yith-woocommerce-wishlist/assets/js/jquery.selectBox.min7359.js?ver=1.2.0' id='jquery-selectBox-js'></script>
  <script src='/wp-content/plugins/woocommerce/assets/js/prettyPhoto/jquery.prettyPhoto.min005e.js?ver=3.1.6' id='prettyPhoto-js'></script>
  <script id='jquery-yith-wcwl-js-extra'>
    var yith_wcwl_l10n = {"ajax_url":"\/wp-admin\/admin-ajax.php","redirect_to_cart":"no","multi_wishlist":"","hide_add_button":"1","enable_ajax_loading":"","ajax_loader_url":"https:\/\/prestigecars.co.id\/wp-content\/plugins\/yith-woocommerce-wishlist\/assets\/images\/ajax-loader-alt.svg","remove_from_wishlist_after_add_to_cart":"1","is_wishlist_responsive":"1","time_to_close_prettyphoto":"3000","fragments_index_glue":".","reload_on_found_variation":"","mobile_media_query":"768","labels":{"cookie_disabled":"We are sorry, but this feature is available only if cookies on your browser are enabled.","added_to_cart_message":"<div class=\"woocommerce-notices-wrapper\"><div class=\"woocommerce-message\" role=\"alert\">Product added to cart successfully<\/div><\/div>"},"actions":{"add_to_wishlist_action":"add_to_wishlist","remove_from_wishlist_action":"remove_from_wishlist","reload_wishlist_and_adding_elem_action":"reload_wishlist_and_adding_elem","load_mobile_action":"load_mobile","delete_item_action":"delete_item","save_title_action":"save_title","save_privacy_action":"save_privacy","load_fragments":"load_fragments"},"nonce":{"add_to_wishlist_nonce":"e28556e506","remove_from_wishlist_nonce":"b01be96437","reload_wishlist_and_adding_elem_nonce":"cfe25150b3","load_mobile_nonce":"e738c916a9","delete_item_nonce":"54d0e4c28e","save_title_nonce":"ff6f048549","save_privacy_nonce":"1f9db5afc6","load_fragments_nonce":"f85aa82d0c"}};
  </script>
  <script src='/wp-content/plugins/revslider/public/assets/js/rbtools.min097f.js?ver=6.5.14' defer async id='tp-tools-js'></script>
  <script src='/wp-content/plugins/revslider/public/assets/js/rs6.min097f.js?ver=6.5.14' defer async id='revmin-js'></script>
  <script src='/wp-content/plugins/js_composer/assets/lib/flexslider2/jquery.flexslider-min.js?ver=2.7.2.0' id='flexslider-js'></script>
  <script src='/wp-content/plugins/woocommerce/assets/js/photoswipe/photoswipe.min8505.js?ver=4.1.1-wc.6.2.2' id='photoswipe-js'></script>
  <script src='/wp-content/plugins/woocommerce/assets/js/photoswipe/photoswipe-ui-default.min8505.js?ver=4.1.1-wc.6.2.2' id='photoswipe-ui-default-js'></script>
  <script src='/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.minc6bb.js?ver=2.1.4-wc.6.2.2' id='js-cookie-js'></script>
  <script id='woocommerce-js-extra'>
    var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%"};
  </script>
  <script src='/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min3781.js?ver=6.2.2' id='woocommerce-js'></script>
  <script src='/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min3781.js?ver=6.2.2' id='wc-cart-fragments-js'></script>

  <script src='/wp-includes/js/imagesloaded.mineda1.js?ver=4.1.4' id='imagesloaded-js'></script>
  <script src='/wp-content/themes/goya/assets/js/vendor/jquery.autocomplete.min330a.js?ver=1.4.1' id='autocomplete-js'></script>
  <script src='/wp-content/themes/goya/assets/js/vendor/jquery.magnific-popup.min41fe.js?ver=3.0.1' id='magnific-popup-js'></script>
  <script src='/wp-content/themes/goya/assets/js/vendor/perfect-scrollbar.jquery.min23b5.js?ver=0.8.0' id='perfect-scrollbar-js'></script>
  <script src='/wp-content/themes/goya/assets/js/vendor/sticky-kit.minc358.js?ver=1.1.3' id='sticky-kit-js'></script>
  <script src='/wp-content/themes/goya/assets/js/vendor/slick.minc245.js?ver=1.8.1' id='jquery-slick-js'></script>
  <script src='/wp-content/themes/goya/assets/js/vendor/isotope.pkgd.min7c45.js?ver=3.0.6' id='isotope-pk-js'></script>
  <script src='/wp-content/themes/goya/assets/js/vendor/packery-mode.pkgd.min7406.js?ver=2.0.1' id='packery-js'></script>
  <script src='/wp-includes/js/underscore.mind584.js?ver=1.13.4' id='underscore-js'></script>
  <script src='/wp-includes/js/comment-reply.min6a4d.js?ver=6.1.1' id='comment-reply-js'></script>
  <script id='wp-util-js-extra'>
    var _wpUtilSettings = {"ajax":{"url":"\/wp-admin\/admin-ajax.php"}};
  </script>
  <script src='/wp-includes/js/wp-util.min6a4d.js?ver=6.1.1' id='wp-util-js'></script>
  <script id='wc-add-to-cart-variation-js-extra'>
    var wc_add_to_cart_variation_params = {"wc_ajax_url":"\/?wc-ajax=%%endpoint%%","i18n_no_matching_variations_text":"Sorry, no products matched your selection. Please choose a different combination.","i18n_make_a_selection_text":"Please select some product options before adding this product to your cart.","i18n_unavailable_text":"Sorry, this product is unavailable. Please choose a different combination."};
  </script>
  <script src='/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart-variation.min3781.js?ver=6.2.2' id='wc-add-to-cart-variation-js'></script>
  <script id='goya-app-js-extra'>
    var goya_theme_vars = {"ajaxUrl":"https:\/\/prestigecars.co.id\/wp-admin\/admin-ajax.php","l10n":{"back":"Back","view_cart":"View cart"},"icons":{"prev_arrow":"<svg xmlns=\"http:\/\/www.w3.org\/2000\/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-chevron-left\"><polyline points=\"15 18 9 12 15 6\"><\/polyline><\/svg>","next_arrow":"<svg xmlns=\"http:\/\/www.w3.org\/2000\/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-chevron-right\"><polyline points=\"9 18 15 12 9 6\"><\/polyline><\/svg>"},"settings":{"current_url":"https:\/\/prestigecars.co.id\/product\/bentley-bentayga-hybird-first-edition-2022\/","site_url":"https:\/\/prestigecars.co.id","pageLoadTransition":false,"ajaxSearchActive":true,"ajaxAddToCartSingle":true,"cart_icon":"cart-page","minicart_auto":true,"shop_infinite_load":"button","shop_update_url":false,"ajaxWishlistCounter":false,"YITH_WCWL_Premium":false,"posts_per_page":"10","related_slider":true,"popup_length":1,"is_front_page":false,"is_blog":false,"is_cart":false,"is_checkout":false,"checkoutTermsPopup":true,"single_atc_nonce":"bd4cb7bc8b","facebook4WC":false}};
  </script>

  <script src='/wp-content/uploads/wpmss/wpmssab.minb7a8.js?ver=1649242387' id='wpmssab-js'></script>
  <script src='/wp-content/plugins/mousewheel-smooth-scroll/js/SmoothScroll.min5b3c.js?ver=1.4.10' id='SmoothScroll-js'></script>

  <script src='/wp-content/uploads/wpmss/wpmss.minb7a8.js?ver=1649242387' id='wpmss-js'></script>
  <script src='/wp-content/plugins/wp-whatsapp-chat/assets/frontend/js/frontend3a8d.js?ver=021fa4de1c6ea4db860e85f702082b24' id='qlwapp-js'></script>
  <script id='woo-variation-swatches-js-extra'>
    var woo_variation_swatches_options = {"is_product_page":"1","show_variation_label":"1","variation_label_separator":":","wvs_nonce":"110b3c8473"};
  </script>
  <script src='/wp-content/plugins/woo-variation-swatches/assets/js/frontend.min573a.js?ver=1.1.19' id='woo-variation-swatches-js'></script>


<script>
  $(document).ready(function() {
    // The slider being synced must be initialized first
    $('#carousel').flexslider({
      animation: "slide",
      controlNav: false,
      animationLoop: false,
      slideshow: false,
      itemWidth: 100,
      itemMargin: 8,
      asNavFor: '#slider'
    });
   
    $('#slider').flexslider({
      animation: "slide",
      controlNav: false,
      animationLoop: false,
      slideshow: false,
      sync: "#carousel"
    });
  });
</script>

@endsection