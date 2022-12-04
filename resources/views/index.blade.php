@extends('tmp\main')

@section('title', 'Home - Lestari Mobilindo')

@section('stylesheet')

    <link rel='stylesheet' id='berocket_product_brand_style-css' href='/assets/plugins/brands-for-woocommerce/css/frontendc08c.css?ver=3.7.0.2' media='all' />
    <link rel='stylesheet' id='wp-block-library-css' href='/assets/css/dist/block-library/style.min6a4d.css?ver=6.1.1' media='all' />
    <style id='wp-block-library-theme-inline-css'>
        .wp-block-audio figcaption {
            color: #555;
            font-size: 13px;
            text-align: center
        }

        .is-dark-theme .wp-block-audio figcaption {
            color: hsla(0, 0%, 100%, .65)
        }

        .wp-block-audio {
            margin: 0 0 1em
        }

        .wp-block-code {
            border: 1px solid #ccc;
            border-radius: 4px;
            font-family: Menlo, Consolas, monaco, monospace;
            padding: .8em 1em
        }

        .wp-block-embed figcaption {
            color: #555;
            font-size: 13px;
            text-align: center
        }

        .is-dark-theme .wp-block-embed figcaption {
            color: hsla(0, 0%, 100%, .65)
        }

        .wp-block-embed {
            margin: 0 0 1em
        }

        .blocks-gallery-caption {
            color: #555;
            font-size: 13px;
            text-align: center
        }

        .is-dark-theme .blocks-gallery-caption {
            color: hsla(0, 0%, 100%, .65)
        }

        .wp-block-image figcaption {
            color: #555;
            font-size: 13px;
            text-align: center
        }

        .is-dark-theme .wp-block-image figcaption {
            color: hsla(0, 0%, 100%, .65)
        }

        .wp-block-image {
            margin: 0 0 1em
        }

        .wp-block-pullquote {
            border-top: 4px solid;
            border-bottom: 4px solid;
            margin-bottom: 1.75em;
            color: currentColor
        }

        .wp-block-pullquote__citation,
        .wp-block-pullquote cite,
        .wp-block-pullquote footer {
            color: currentColor;
            text-transform: uppercase;
            font-size: .8125em;
            font-style: normal
        }

        .wp-block-quote {
            border-left: .25em solid;
            margin: 0 0 1.75em;
            padding-left: 1em
        }

        .wp-block-quote cite,
        .wp-block-quote footer {
            color: currentColor;
            font-size: .8125em;
            position: relative;
            font-style: normal
        }

        .wp-block-quote.has-text-align-right {
            border-left: none;
            border-right: .25em solid;
            padding-left: 0;
            padding-right: 1em
        }

        .wp-block-quote.has-text-align-center {
            border: none;
            padding-left: 0
        }

        .wp-block-quote.is-large,
        .wp-block-quote.is-style-large,
        .wp-block-quote.is-style-plain {
            border: none
        }

        .wp-block-search .wp-block-search__label {
            font-weight: 700
        }

        .wp-block-search__button {
            border: 1px solid #ccc;
            padding: .375em .625em
        }

        :where(.wp-block-group.has-background) {
            padding: 1.25em 2.375em
        }

        .wp-block-separator.has-css-opacity {
            opacity: .4
        }

        .wp-block-separator {
            border: none;
            border-bottom: 2px solid;
            margin-left: auto;
            margin-right: auto
        }

        .wp-block-separator.has-alpha-channel-opacity {
            opacity: 1
        }

        .wp-block-separator:not(.is-style-wide):not(.is-style-dots) {
            width: 100px
        }

        .wp-block-separator.has-background:not(.is-style-dots) {
            border-bottom: none;
            height: 1px
        }

        .wp-block-separator.has-background:not(.is-style-wide):not(.is-style-dots) {
            height: 2px
        }

        .wp-block-table {
            margin: "0 0 1em 0"
        }

        .wp-block-table thead {
            border-bottom: 3px solid
        }

        .wp-block-table tfoot {
            border-top: 3px solid
        }

        .wp-block-table td,
        .wp-block-table th {
            word-break: normal
        }

        .wp-block-table figcaption {
            color: #555;
            font-size: 13px;
            text-align: center
        }

        .is-dark-theme .wp-block-table figcaption {
            color: hsla(0, 0%, 100%, .65)
        }

        .wp-block-video figcaption {
            color: #555;
            font-size: 13px;
            text-align: center
        }

        .is-dark-theme .wp-block-video figcaption {
            color: hsla(0, 0%, 100%, .65)
        }

        .wp-block-video {
            margin: 0 0 1em
        }

        .wp-block-template-part.has-background {
            padding: 1.25em 2.375em;
            margin-top: 0;
            margin-bottom: 0
        }
    </style>
    <link rel='stylesheet' id='wc-blocks-vendors-style-css' href='/assets/plugins/woocommerce/packages/woocommerce-blocks/build/wc-blocks-vendors-style5379.css?ver=6.7.3' media='all' />
    <link rel='stylesheet' id='wc-blocks-style-css' href='/assets/plugins/woocommerce/packages/woocommerce-blocks/build/wc-blocks-style5379.css?ver=6.7.3' media='all' />
    <link rel='stylesheet' id='jquery-selectBox-css' href='/assets/plugins/yith-woocommerce-wishlist//assets/css/jquery.selectBox7359.css?ver=1.2.0' media='all' />
    <link rel='stylesheet' id='yith-wcwl-font-awesome-css' href='/assets/plugins/yith-woocommerce-wishlist//assets/css/font-awesome1849.css?ver=4.7.0' media='all' />
    <link rel='stylesheet' id='woocommerce_prettyPhoto_css-css' href='/assets/plugins/woocommerce//assets/css/prettyPhoto005e.css?ver=3.1.6' media='all' />
    <link rel='stylesheet' id='yith-wcwl-main-css' href='/assets/plugins/yith-woocommerce-wishlist//assets/css/styleaf6c.css?ver=3.6.0' media='all' />
    <style id='yith-wcwl-main-inline-css'>
        .yith-wcwl-share li a {
            color: #FFFFFF;
        }

        .yith-wcwl-share li a:hover {
            color: #FFFFFF;
        }

        .yith-wcwl-share a.facebook {
            background: #39599E;
            background-color: #39599E;
        }

        .yith-wcwl-share a.facebook:hover {
            background: #39599E;
            background-color: #39599E;
        }

        .yith-wcwl-share a.twitter {
            background: #45AFE2;
            background-color: #45AFE2;
        }

        .yith-wcwl-share a.twitter:hover {
            background: #39599E;
            background-color: #39599E;
        }

        .yith-wcwl-share a.pinterest {
            background: #AB2E31;
            background-color: #AB2E31;
        }

        .yith-wcwl-share a.pinterest:hover {
            background: #39599E;
            background-color: #39599E;
        }

        .yith-wcwl-share a.email {
            background: #FBB102;
            background-color: #FBB102;
        }

        .yith-wcwl-share a.email:hover {
            background: #39599E;
            background-color: #39599E;
        }

        .yith-wcwl-share a.whatsapp {
            background: #00A901;
            background-color: #00A901;
        }

        .yith-wcwl-share a.whatsapp:hover {
            background: #39599E;
            background-color: #39599E;
        }
    </style>
    <link rel='stylesheet' id='classic-theme-styles-css' href='/assets/css/classic-themes.min68b3.css?ver=1' media='all' />
    <style id='global-styles-inline-css'>
        body {
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--color--gutenberg-white: #ffffff;
            --wp--preset--color--gutenberg-shade: #f8f8f8;
            --wp--preset--color--gutenberg-gray: #ffffff;
            --wp--preset--color--gutenberg-dark: #000000;
            --wp--preset--color--gutenberg-accent: #4b96d4;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');
            --wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');
            --wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');
            --wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');
            --wp--preset--duotone--midnight: url('#wp-duotone-midnight');
            --wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');
            --wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');
            --wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
        }

        :where(.is-layout-flex) {
            gap: 0.5em;
        }

        body .is-layout-flow>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-flow>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-flow>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-constrained>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-constrained>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
            max-width: var(--wp--style--global--content-size);
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained>.alignwide {
            max-width: var(--wp--style--global--wide-size);
        }

        body .is-layout-flex {
            display: flex;
        }

        body .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        body .is-layout-flex>* {
            margin: 0;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }

        .wp-block-navigation a:where(:not(.wp-element-button)) {
            color: inherit;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        .wp-block-pullquote {
            font-size: 1.5em;
            line-height: 1.6;
        }
    </style>
    <style id='woocommerce-inline-inline-css'>
        .woocommerce form .form-row .required {
            visibility: visible;
        }
    </style>
    <link rel='stylesheet' id='wp-bottom-menu-style-css' href='/assets/plugins/wp-bottom-menu/inc/style370e.css?ver=1.4.3' media='all' />
    <link rel='stylesheet' id='font-awesome-css' href='/assets/plugins/wp-bottom-menu/inc/customizer-repeater/css/font-awesome.minf488.css?ver=1.1.0' media='all' />
    <style id='font-awesome-inline-css'>
        [data-font="FontAwesome"]:before {
            font-family: 'FontAwesome' !important;
            content: attr(data-icon) !important;
            speak: none !important;
            font-weight: normal !important;
            font-variant: normal !important;
            text-transform: none !important;
            line-height: 1 !important;
            font-style: normal !important;
            -webkit-font-smoothing: antialiased !important;
            -moz-osx-font-smoothing: grayscale !important;
        }
    </style>
    <link rel='stylesheet' id='goya-grid-css' href='/assets/themes/goya//assets/css/grid664d.css?ver=1.0.6.7' media='all' />
    <link rel='stylesheet' id='goya-core-css' href='/assets/themes/goya//assets/css/core664d.css?ver=1.0.6.7' media='all' />
    <link rel='stylesheet' id='goya-icons-css' href='/assets/themes/goya//assets/icons/theme-icons/style664d.css?ver=1.0.6.7' media='all' />
    <link rel='stylesheet' id='goya-shop-css' href='/assets/themes/goya//assets/css/shop664d.css?ver=1.0.6.7' media='all' />
    <link rel='stylesheet' id='goya-elements-css' href='/assets/themes/goya//assets/css/vc-elements664d.css?ver=1.0.6.7' media='all' />
    <style id='goya-customizer-styles-inline-css'>
        body,
        blockquote cite,
        div.vc_progress_bar .vc_single_bar .vc_label,
        div.vc_toggle_size_sm .vc_toggle_title h4 {
            font-size: 16px;
        }

        .wp-caption-text,
        .woocommerce-breadcrumb,
        .post.listing .listing_content .post-meta,
        .footer-bar .footer-bar-content,
        .side-menu .mobile-widgets p,
        .side-menu .side-widgets p,
        .products .product.product-category a div h2 .count,
        #payment .payment_methods li .payment_box,
        #payment .payment_methods li a.about_paypal,
        .et-product-detail .summary .sizing_guide,
        #reviews .commentlist li .comment-text .woocommerce-review__verified,
        #reviews .commentlist li .comment-text .woocommerce-review__published-date,
        .commentlist>li .comment-meta,
        .widget .type-post .post-meta,
        .widget_rss .rss-date,
        .wp-block-latest-comments__comment-date,
        .wp-block-latest-posts__post-date,
        .commentlist>li .reply,
        .comment-reply-title small,
        .commentlist .bypostauthor .post-author,
        .commentlist .bypostauthor>.comment-body .fn:after,
        .et-portfolio.et-portfolio-style-hover-card .type-portfolio .et-portfolio-excerpt {
            font-size: 14px;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            color: #ffffff;
        }

        .et-banner .et-banner-content .et-banner-title.color-accent,
        .et-banner .et-banner-content .et-banner-subtitle.color-accent,
        .et-banner .et-banner-content .et-banner-link.link.color-accent,
        .et-banner .et-banner-content .et-banner-link.link.color-accent:hover,
        .et-banner .et-banner-content .et-banner-link.outlined.color-accent,
        .et-banner .et-banner-content .et-banner-link.outlined.color-accent:hover {
            color: #4b96d4;
        }

        .et-banner .et-banner-content .et-banner-subtitle.tag_style.color-accent,
        .et-banner .et-banner-content .et-banner-link.solid.color-accent,
        .et-banner .et-banner-content .et-banner-link.solid.color-accent:hover {
            background: #4b96d4;
        }

        .et-iconbox.icon-style-background.icon-color-accent .et-feature-icon {
            background: #4b96d4;
        }

        .et-iconbox.icon-style-border.icon-color-accent .et-feature-icon,
        .et-iconbox.icon-style-simple.icon-color-accent .et-feature-icon {
            color: #4b96d4;
        }

        .et-counter.counter-color-accent .h1,
        .et-counter.icon-color-accent i {
            color: #4b96d4;
        }

        .et_btn.solid.color-accent {
            background: #4b96d4;
        }

        .et_btn.link.color-accent,
        .et_btn.outlined.color-accent,
        .et_btn.outlined.color-accent:hover {
            color: #4b96d4;
        }

        .et-animatype.color-accent .et-animated-entry,
        .et-stroketype.color-accent * {
            color: #4b96d4;
        }

        .slick-prev:hover,
        .slick-next:hover,
        .flex-prev:hover,
        .flex-next:hover,
        .mfp-wrap.quick-search .mfp-content [type="submit"],
        .et-close,
        .single-product .pswp__button:hover,
        .content404 h4,
        .woocommerce-tabs .tabs li a span,
        .woo-variation-gallery-wrapper .woo-variation-gallery-trigger:hover:after,
        .mobile-menu li.menu-item-has-children.active>.et-menu-toggle:after,
        .remove:hover,
        a.remove:hover,
        span.minicart-counter.et-count-zero,
        .tag-cloud-link .tag-link-count,
        .star-rating>span:before,
        .comment-form-rating .stars>span:before,
        .wpmc-tabs-wrapper li.wpmc-tab-item.current,
        div.argmc-wrapper .tab-completed-icon:before,
        div.argmc-wrapper .argmc-tab-item.completed .argmc-tab-number,
        .widget ul li.active,
        .et-wp-gallery-popup .mfp-arrow {
            color: #4b96d4;
        }

        .menu-item.accent-color a,
        .accent-color:not(.fancy-tag),
        .accent-color:not(.fancy-tag) .wpb_wrapper>h1,
        .accent-color:not(.fancy-tag) .wpb_wrapper>h2,
        .accent-color:not(.fancy-tag) .wpb_wrapper>h3,
        .accent-color:not(.fancy-tag) .wpb_wrapper>h4,
        .accent-color:not(.fancy-tag) .wpb_wrapper>h5,
        .accent-color:not(.fancy-tag) .wpb_wrapper>h6,
        .accent-color:not(.fancy-tag) .wpb_wrapper>p {
            color: #4b96d4 !important;
        }

        .accent-color.fancy-tag,
        .wpb_text_column .accent-color.fancy-tag:last-child,
        .accent-color.fancy-tag .wpb_wrapper>h1,
        .accent-color.fancy-tag .wpb_wrapper>h2,
        .accent-color.fancy-tag .wpb_wrapper>h3,
        .accent-color.fancy-tag .wpb_wrapper>h4,
        .accent-color.fancy-tag .wpb_wrapper>h5,
        .accent-color.fancy-tag .wpb_wrapper>h6,
        .accent-color.fancy-tag .wpb_wrapper>p {
            background-color: #4b96d4;
        }

        .wpmc-tabs-wrapper li.wpmc-tab-item.current .wpmc-tab-number,
        .wpmc-tabs-wrapper li.wpmc-tab-item.current:before,
        .tag-cloud-link:hover,
        div.argmc-wrapper .argmc-tab-item.completed .argmc-tab-number,
        div.argmc-wrapper .argmc-tab-item.current .argmc-tab-number,
        div.argmc-wrapper .argmc-tab-item.last.current+.argmc-tab-item:hover .argmc-tab-number {
            border-color: #4b96d4;
        }

        .vc_progress_bar.vc_progress-bar-color-bar_orange .vc_single_bar span.vc_bar,
        span.minicart-counter,
        .filter-trigger .et-active-filters-count,
        .et-active-filters-count,
        div.argmc-wrapper .argmc-tab-item.current .argmc-tab-number,
        div.argmc-wrapper .argmc-tab-item.visited:hover .argmc-tab-number,
        div.argmc-wrapper .argmc-tab-item.last.current+.argmc-tab-item:hover .argmc-tab-number,
        .slick-dots li button:hover,
        .wpb_column.et-light-column .postline:before,
        .wpb_column.et-light-column .postline-medium:before,
        .wpb_column.et-light-column .postline-large:before,
        .et-feat-video-btn:hover .et-featured-video-icon:after,
        .post.type-post.sticky .entry-title a:after {
            background-color: #4b96d4;
        }

        div.argmc-wrapper .argmc-tab-item.visited:before {
            border-bottom-color: #4b96d4;
        }

        .yith-wcan-loading:after,
        .blockUI.blockOverlay:after,
        .easyzoom-notice:after,
        .woocommerce-product-gallery__wrapper .slick:after,
        .add_to_cart_button.loading:after,
        .et-loader:after {
            background-color: #4b96d4;
        }

        .fancy-title,
        h1.fancy-title,
        h2.fancy-title,
        h3.fancy-title,
        h4.fancy-title,
        h5.fancy-title,
        h6.fancy-title {
            color: #4b96d4
        }

        .fancy-tag,
        h1.fancy-tag,
        h2.fancy-tag,
        h3.fancy-tag,
        h4.fancy-tag,
        h5.fancy-tag,
        h6.fancy-tag {
            background-color: #4b96d4
        }

        @media only screen and (min-width:992px) {

            .header,
            .header-spacer,
            .product-header-spacer {
                height: 110px;
            }

            .page-header-transparent .hero-header .hero-title {
                padding-top: 110px;
            }

            .et-product-detail.et-product-layout-no-padding.product-header-transparent .showcase-inner .product-information {
                padding-top: 110px;
            }

            .header_on_scroll:not(.megamenu-active) .header,
            .header_on_scroll:not(.megamenu-active) .header-spacer,
            .header_on_scroll:not(.megamenu-active) .product-header-spacer {
                height: 115px;
            }
        }

        @media only screen and (max-width:991px) {

            .header,
            .header_on_scroll .header,
            .header-spacer,
            .product-header-spacer {
                height: 50px;
            }

            .page-header-transparent .hero-header .hero-title {
                padding-top: 50px;
            }
        }

        @media screen and (min-width:576px) and (max-width:767px) {
            .sticky-product-bar {
                height: 50px;
            }

            .product-bar-visible.single-product.fixed-product-bar-bottom .footer {
                margin-bottom: 50px;
            }

            .product-bar-visible.single-product.fixed-product-bar-bottom #scroll_to_top.active {
                bottom: 60px;
            }
        }

        .page-header-regular .header,
        .header_on_scroll .header {
            background-color: #000000;
        }

        @media only screen and (max-width:576px) {
            .page-header-transparent:not(.header-transparent-mobiles):not(.header_on_scroll) .header {
                background-color: #000000;
            }
        }

        .header a,
        .header .menu-toggle,
        .header .goya-search button {
            color: #000000;
        }

        @media only screen and (max-width:767px) {

            .sticky-header-light .header .menu-toggle:hover,
            .header-transparent-mobiles.sticky-header-light.header_on_scroll .header a.icon,
            .header-transparent-mobiles.sticky-header-light.header_on_scroll .header .menu-toggle,
            .header-transparent-mobiles.light-title:not(.header_on_scroll) .header a.icon,
            .header-transparent-mobiles.light-title:not(.header_on_scroll) .header .menu-toggle {
                color: #ffffff;
            }
        }

        @media only screen and (min-width:768px) {

            .light-title:not(.header_on_scroll) .header .site-title,
            .light-title:not(.header_on_scroll) .header .et-header-menu>li>a,
            .sticky-header-light.header_on_scroll .header .et-header-menu>li>a,
            .light-title:not(.header_on_scroll) span.minicart-counter.et-count-zero,
            .sticky-header-light.header_on_scroll .header .icon,
            .sticky-header-light.header_on_scroll .header .menu-toggle,
            .light-title:not(.header_on_scroll) .header .icon,
            .light-title:not(.header_on_scroll) .header .menu-toggle {
                color: #ffffff;
            }
        }

        .et-header-menu .menu-label,
        .mobile-menu .menu-label {
            background-color: #ffffff;
        }

        .et-header-menu ul.sub-menu:before,
        .et-header-menu .sub-menu .sub-menu {
            background-color: #ffffff !important;
        }

        .et-header-menu>li.menu-item-has-children>a:after {
            border-bottom-color: #ffffff;
        }

        .et-header-menu .sub-menu li.menu-item-has-children:after,
        .et-header-menu ul.sub-menu li a {
            color: #000000;
        }

        .side-panel .mobile-bar,
        .side-panel .mobile-bar.dark {
            background: #f8f8f8;
        }

        .side-mobile-menu,
        .side-mobile-menu.dark {
            background: #000000;
        }

        .side-fullscreen-menu,
        .side-fullscreen-menu.dark {
            background: #000000;
        }

        .site-footer,
        .site-footer.dark {
            background-color: #000000;
        }

        .site-footer .footer-bar.custom-color-1,
        .site-footer .footer-bar.custom-color-1.dark {
            background-color: #000000;
        }

        .mfp #et-quickview {
            max-width: 960px;
        }

        .easyzoom-flyout,
        .single-product .pswp__bg,
        .single-product .pswp__img--placeholder--blank,
        .product-showcase {
            background: #f8f8f8;
        }

        .woocommerce-Tabs-panel.custom_scroll {
            max-height: 400px;
        }

        .product_meta .trap {
            display: none !important;
        }

        .shop-widget-scroll .widget>ul,
        .shop-widget-scroll .widget:not(.widget-woof)>.widgettitle+*,
        .shop-widget-scroll .wcapf-layered-nav {
            max-height: 150px;
        }

        .free-shipping-progress-bar .progress-bar-indicator {
            background: linear-gradient(270deg, #b9a16b 0, #ffffff 200%);
            background-color: #b9a16b;
            flex-grow: 1;
        }

        .rtl .free-shipping-progress-bar .progress-bar-indicator {
            background: linear-gradient(90deg, #b9a16b 0, #ffffff 200%);
        }

        .progress-bar-status.success .progress-bar-indicator {
            background: #67bb67;
        }

        .star-rating>span:before,
        .comment-form-rating .stars>span:before {
            color: #ffffff;
        }

        .product-inner .badge.onsale,
        .wc-block-grid .wc-block-grid__products .wc-block-grid__product .wc-block-grid__product-onsale {
            color: #ef5c5c;
            background-color: #ffffff;
        }

        .et-product-detail .summary .badge.onsale {
            border-color: #ef5c5c;
        }

        .product-inner .badge.new {
            color: #585858;
            background-color: #ffffff;
        }

        .product-inner .badge.out-of-stock {
            color: #585858;
            background-color: #ffffff;
        }

        @media screen and (min-width:768px) {
            .wc-block-grid__products .wc-block-grid__product .wc-block-grid__product-image {
                margin-top: 5px;
            }

            .wc-block-grid__products .wc-block-grid__product:hover .wc-block-grid__product-image {
                transform: translateY(-5px);
            }

            .wc-block-grid__products .wc-block-grid__product:hover .wc-block-grid__product-image img {
                -moz-transform: scale(1.05, 1.05);
                -ms-transform: scale(1.05, 1.05);
                -webkit-transform: scale(1.05, 1.05);
                transform: scale(1.05, 1.05);
            }
        }

        .et-blog.hero-header .hero-title {
            background-color: #f8f8f8;
        }

        .post.post-detail.hero-title .post-featured.title-wrap {
            background-color: #f8f8f8;
        }

        .page-id-861 #wrapper div[role="main"] {
            background-color: #000000
        }

        .has-gutenberg-white-color {
            color: #ffffff !important;
        }

        .has-gutenberg-white-background-color {
            background-color: #ffffff;
        }

        .wp-block-button.outlined .has-gutenberg-white-color {
            border-color: #ffffff !important;
            background-color: transparent !important;
        }

        .has-gutenberg-shade-color {
            color: #f8f8f8 !important;
        }

        .has-gutenberg-shade-background-color {
            background-color: #f8f8f8;
        }

        .wp-block-button.outlined .has-gutenberg-shade-color {
            border-color: #f8f8f8 !important;
            background-color: transparent !important;
        }

        .has-gutenberg-gray-color {
            color: #ffffff !important;
        }

        .has-gutenberg-gray-background-color {
            background-color: #ffffff;
        }

        .wp-block-button.outlined .has-gutenberg-gray-color {
            border-color: #ffffff !important;
            background-color: transparent !important;
        }

        .has-gutenberg-dark-color {
            color: #000000 !important;
        }

        .has-gutenberg-dark-background-color {
            background-color: #000000;
        }

        .wp-block-button.outlined .has-gutenberg-dark-color {
            border-color: #000000 !important;
            background-color: transparent !important;
        }

        .has-gutenberg-accent-color {
            color: #4b96d4 !important;
        }

        .has-gutenberg-accent-background-color {
            background-color: #4b96d4;
        }

        .wp-block-button.outlined .has-gutenberg-accent-color {
            border-color: #4b96d4 !important;
            background-color: transparent !important;
        }

        .commentlist .bypostauthor>.comment-body .fn:after {
            content: 'Post Author';
        }

        .et-inline-validation-notices .form-row.woocommerce-invalid-required-field:after {
            content: 'Required field';
        }

        .post.type-post.sticky .entry-title a:after {
            content: 'Featured';
        }
    </style>
    <link rel='stylesheet' id='qlwapp-css'
        href='/assets/plugins/wp-whatsapp-chat//assets/frontend/css/frontendce52.css?ver=5.0.2' media='all' />
    <link rel='stylesheet' id='js_composer_front-css'
        href='/assets/plugins/js_composer//assets/css/js_composer.min8e94.css?ver=6.8.0' media='all' />
    <link rel='stylesheet' id='woo-variation-swatches-css'
        href='/assets/plugins/woo-variation-swatches//assets/css/frontend.min573a.css?ver=1.1.19' media='all' />
    <style id='woo-variation-swatches-inline-css'>
        .variable-item:not(.radio-variable-item) {
            width: 30px;
            height: 30px;
        }

        .wvs-style-squared .button-variable-item {
            min-width: 30px;
        }

        .button-variable-item span {
            font-size: 16px;
        }
    </style>
    <link rel='stylesheet' id='woo-variation-swatches-theme-override-css'
        href='/assets/plugins/woo-variation-swatches//assets/css/wvs-theme-override.min573a.css?ver=1.1.19'
        media='all' />
    <link rel='stylesheet' id='woo-variation-swatches-tooltip-css'
        href='/assets/plugins/woo-variation-swatches//assets/css/frontend-tooltip.min573a.css?ver=1.1.19'
        media='all' />

    <script type="text/template" id="tmpl-unavailable-variation-template">
        <p>Sorry, this product is unavailable. Please choose a different combination.</p>
    </script>
    <script src='/assets/js/jquery/jquery.mina7a0.js?ver=3.6.1' id='jquery-core-js'></script>
    <script src='/assets/js/jquery/jquery-migrate.mind617.js?ver=3.3.2' id='jquery-migrate-js'></script>
    <script src='/assets/plugins/woocommerce//assets/js/jquery-blockui/jquery.blockUI.min6459.js?ver=2.7.0-wc.6.2.2'
        id='jquery-blockui-js'></script>
    <script id='wc-add-to-cart-js-extra'>
        var wc_add_to_cart_params = {
            "ajax_url": "\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
            "i18n_view_cart": "View cart",
            "cart_url": "https:\/\/prestigecars.co.id\/cart\/",
            "is_cart": "",
            "cart_redirect_after_add": "no"
        };
    </script>
    <script src='/assets/plugins/woocommerce//assets/js/frontend/add-to-cart.min3781.js?ver=6.2.2' id='wc-add-to-cart-js'>
    </script>
    <script src='/assets/plugins/js_composer//assets/js/vendors/woocommerce-add-to-cart8e94.js?ver=6.8.0'
        id='vc_woocommerce-add-to-cart-js-js'></script>
    <script src='/assets/themes/goya//assets/js/vendor/jquery.cookie.min330a.js?ver=1.4.1' id='cookie-js'></script>
    <link rel="https://api.w.org/" href="wp-json/index.html" />
    <link rel="alternate" type="application/json" href="wp-json/wp/v2/pages/861.json" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="/assets/wlwmanifest.xml" />
    <meta name="generator" content="WordPress 6.1.1" />
    <meta name="generator" content="WooCommerce 6.2.2" />
    <link rel='shortlink' href='index.html' />
    <link rel="alternate" type="application/json+oembed"
        href="wp-json/oembed/1.0/embed8d99.json?url=https%3A%2F%2Fprestigecars.co.id%2F" />
    <link rel="alternate" type="text/xml+oembed"
        href="wp-json/oembed/1.0/embed4e76?url=https%3A%2F%2Fprestigecars.co.id%2F&amp;format=xml" />
    <style></style> <noscript>
        <style>
            .woocommerce-product-gallery {
                opacity: 1 !important;
            }
        </style>
    </noscript>
    <meta name="generator" content="Powered by WPBakery Page Builder - drag and drop page builder for WordPress." />
    <style type="text/css">
        body.custom-background #wrapper {
            background-color: #000000;
        }
    </style>



    <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    {{-- <link rel="manifest" href="/manifest.json"> --}}
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">



    <script>
        function setREVStartSize(e) {
            //window.requestAnimationFrame(function() {
            window.RSIW = window.RSIW === undefined ? window.innerWidth : window.RSIW;
            window.RSIH = window.RSIH === undefined ? window.innerHeight : window.RSIH;
            try {
                var pw = document.getElementById(e.c).parentNode.offsetWidth,
                    newh;
                pw = pw === 0 || isNaN(pw) ? window.RSIW : pw;
                e.tabw = e.tabw === undefined ? 0 : parseInt(e.tabw);
                e.thumbw = e.thumbw === undefined ? 0 : parseInt(e.thumbw);
                e.tabh = e.tabh === undefined ? 0 : parseInt(e.tabh);
                e.thumbh = e.thumbh === undefined ? 0 : parseInt(e.thumbh);
                e.tabhide = e.tabhide === undefined ? 0 : parseInt(e.tabhide);
                e.thumbhide = e.thumbhide === undefined ? 0 : parseInt(e.thumbhide);
                e.mh = e.mh === undefined || e.mh == "" || e.mh === "auto" ? 0 : parseInt(e.mh, 0);
                if (e.layout === "fullscreen" || e.l === "fullscreen")
                    newh = Math.max(e.mh, window.RSIH);
                else {
                    e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
                    for (var i in e.rl)
                        if (e.gw[i] === undefined || e.gw[i] === 0) e.gw[i] = e.gw[i - 1];
                    e.gh = e.el === undefined || e.el === "" || (Array.isArray(e.el) && e.el.length == 0) ? e.gh : e.el;
                    e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
                    for (var i in e.rl)
                        if (e.gh[i] === undefined || e.gh[i] === 0) e.gh[i] = e.gh[i - 1];

                    var nl = new Array(e.rl.length),
                        ix = 0,
                        sl;
                    e.tabw = e.tabhide >= pw ? 0 : e.tabw;
                    e.thumbw = e.thumbhide >= pw ? 0 : e.thumbw;
                    e.tabh = e.tabhide >= pw ? 0 : e.tabh;
                    e.thumbh = e.thumbhide >= pw ? 0 : e.thumbh;
                    for (var i in e.rl) nl[i] = e.rl[i] < window.RSIW ? 0 : e.rl[i];
                    sl = nl[0];
                    for (var i in nl)
                        if (sl > nl[i] && nl[i] > 0) {
                            sl = nl[i];
                            ix = i;
                        }
                    var m = pw > (e.gw[ix] + e.tabw + e.thumbw) ? 1 : (pw - (e.tabw + e.thumbw)) / (e.gw[ix]);
                    newh = (e.gh[ix] * m) + (e.tabh + e.thumbh);
                }
                var el = document.getElementById(e.c);
                if (el !== null && el) el.style.height = newh + "px";
                el = document.getElementById(e.c + "_wrapper");
                if (el !== null && el) {
                    el.style.height = newh + "px";
                    el.style.display = "block";
                }
            } catch (e) {
                console.log("Failure at Presize of Slider:" + e)
            }
            //});
        };
    </script>
    <style id="wp-custom-css">
        a {
            color: #ffffff;
        }

        a:hover {
            color: #0084ff;
        }

        .widget.widget_product_categories li.current-cat>a,
        .widget .wcapf-layered-nav ul li.chosen>a,
        .widget.woocommerce li.chosen>a,
        .widget_rating_filter li.chosen>a {
            color: #0084ff;
        }

        .widget .wcapf-active-filters a {
            color: #ffffff;
        }

        .side-panel .side-panel-content {
            background-color: #000000;
        }

        .button,
        input[type=submit],
        button[type=submit],
        #side-filters .et-close,
        .nf-form-cont .nf-form-content .submit-wrap .ninja-forms-field,
        .yith-wcwl-popup-footer a.button.wishlist-submit {
            background-color: #000000;
        }

        .button,
        input[type=submit],
        button[type=submit],
        #side-filters .et-close,
        .nf-form-cont .nf-form-content .submit-wrap .ninja-forms-field,
        .yith-wcwl-popup-footer a.button.wishlist-submit {
            background-color: #000000;
        }

        .tag-cloud-link {
            color: #ffffff;
        }

        .vc_gitem_row .vc_gitem-col {
            background-color: #000000;
        }

        div#jsvehiclemanager-header-main-wrapper {
            background: #000000;
            border-bottom: 0px solid #000000;
            box-shadow: 0px 0px 0px #d4d4d5;
        }

        div#jsvehiclemanager-header-main-wrapper a.headerlinks {
            color: #000000;
        }

        div#jsvehiclemanager-wrapper div.control-pannel-header span.heading {
            color: #000000;
        }

        div#jsvehiclemanager-wrapper div#jsvehiclemanager-veh-detail-wrapper div#jsvehiclemanager-overview div.jsvehiclemanager-feature-detail-list div.jsvehiclemanager-feature-detail-sub-heading span.jsvehiclemanager-sub-heading-text {
            color: #ffffff;
        }

        div#jsvehiclemanager-wrapper div#jsvehiclemanager-model-price div#jsvehiclemanager-model span#jsvehiclemanager-model-text {
            color: #ffffff;
        }

        div#jsvehiclemanager-wrapper div#jsvehiclemanager-veh-detail-wrapper div#jsvehiclemanager-data div.jsvehiclemanager-condition-featured-detail span.jsvehiclemanager-middle-sec-value {
            color: #ffffff;
        }

        div#jsvehiclemanager-wrapper div#jsvehiclemanager-veh-detail-wrapper div.jsvehiclemanager-feature-detail-list div.jsvehiclemanager-vehicle-details-wrapper div.jsvehiclemanager-vehicle-detail span.jsvehiclemanager-detail-title {
            color: #ffffff;
        }

        div#jsvehiclemanager-wrapper div#jsvehiclemanager-veh-detail-wrapper div.jsvehiclemanager-feature-detail-list div.jsvehiclemanager-vehicle-details-wrapper div.jsvehiclemanager-vehicle-detail span.jsvehiclemanager-details-value {
            color: #ffffff;
        }

        div#jsvehiclemanager-wrapper div.jsvehiclemanager_vehicle_wrapper div.jsvehiclemanager_vehicle_top_wrap div.jsvehiclemanager_vehicle_right_content div.jsvehiclemanager_vehicle_detail_row span.jsvehiclemanager_vehicle_create_date {
            color: #ffffff;
        }

        div#jsvehiclemanager-wrapper div.jsvehiclemanager_vehicle_wrapper div.jsvehiclemanager_vehicle_top_wrap div.jsvehiclemanager_vehicle_right_content div.jsvehiclemanager_vehicle_detail_row span.jsvehiclemanager_vehicle_fuel_title {
            color: #ffffff;
        }

        div#jsvehiclemanager-wrapper div.jsvehiclemanager_vehicle_wrapper div.jsvehiclemanager_vehicle_top_wrap div.jsvehiclemanager_vehicle_right_content div.jsvehiclemanager_vehicle_detail_row span.jsvehiclemanager_vehicle_value {
            color: #ffffff;
        }

        div#jsvehiclemanager-wrapper div.jsvehiclemanager_vehicle_wrapper div.jsvehiclemanager_vehicle_top_wrap div.jsvehiclemanager_vehicle_right_content div.jsvehiclemanager_vehicle_detail_row span.jsvehiclemanager_vehicle_loction_title {
            color: #ffffff;
        }

        form.cart {
            display: none !important;
            /* Menghilangkan button pada single produk */
        }

        .woocommerce .products .add_to_cart_button {
            display: none !important;
            /* Menghilangkan button pada thumbnail produk/produk katalog */
        }

        .et-counter .h1 {
            font-size: 35px;
        }

        .et-header-menu ul.sub-menu li a {
            text-align: center;
        }

        @media only screen and (max-width: 600px) {

            .footer {
                display: none;
            }
        }

        .col-1,
        .col-2,
        .col-3,
        .col-4,
        .col-5,
        .col-6,
        .col-7,
        .col-8,
        .col-9,
        .col-10,
        .col-11,
        .col-12,
        .col,
        .col-auto,
        .col-sm-1,
        .col-sm-2,
        .col-sm-3,
        .col-sm-4,
        .col-sm-5,
        .col-sm-6,
        .col-sm-7,
        .col-sm-8,
        .col-sm-9,
        .col-sm-10,
        .col-sm-11,
        .col-sm-12,
        .col-sm,
        .col-sm-auto,
        .col-md-1,
        .col-md-2,
        .col-md-3,
        .col-md-4,
        .col-md-5,
        .col-md-6,
        .col-md-7,
        .col-md-8,
        .col-md-9,
        .col-md-10,
        .col-md-11,
        .col-md-12,
        .col-md,
        .col-md-auto,
        .col-lg-1,
        .col-lg-2,
        .col-lg-3,
        .col-lg-4,
        .col-lg-5,
        .col-lg-6,
        .col-lg-7,
        .col-lg-8,
        .col-lg-9,
        .col-lg-10,
        .col-lg-11,
        .col-lg-12,
        .col-lg,
        .col-lg-auto,
        .col-xl-1,
        .col-xl-2,
        .col-xl-3,
        .col-xl-4,
        .col-xl-5,
        .col-xl-6,
        .col-xl-7,
        .col-xl-8,
        .col-xl-9,
        .col-xl-10,
        .col-xl-11,
        .col-xl-12,
        .col-xl,
        .col-xl-auto {
            padding-bottom: 35px;
        }

        .products .actions-wrapper .icon,
        .products .caption .icon,
        .yith-wcwl-add-to-wishlist .icon,
        .yith-wcwl-wishlistexistsbrowse .icon {
            color: #7770;
        }

        .price {
            display: none;
        }

        .wp-block-button__link,
        .nf-form-cont .nf-form-content .submit-wrap .ninja-forms-field,
        .btn-ghost,
        .button,
        input[type=submit],
        button[type=submit] {
            border: 2px solid #ffffff;
        }

        @media only screen and (max-device-width: 769px) {
            .products {
                font-size: 14px;
            }
        }

        .post .post-title h3 {
            font-size: 1rem;
        }

        .slick .slick-dots {
            padding: 0px;
            display: none;
        }

        .vc_grid.vc_row.vc_grid-gutter-10px .vc_grid-item {
            padding-right: 0px;
            padding-bottom: 30px;
        }

        .vc_gitem_row .vc_gitem-col {
            padding: 5px;
        }

        @media only screen and (max-device-width: 769px) {
            .vc-gitem-zone-height-mode-auto:before {
                padding-top: 80%;
            }
        }

        @media only screen and (max-device-width: 769px) {}

        .vc-gitem-zone-height-mode-auto:before {
            padding-top: 30%;
        }
    </style>
    <style>
        :root {
            --qlwapp-scheme-font-family: inherit;
            --qlwapp-scheme-font-size: 18;
        }

        #qlwapp {
            font-family: var(--qlwapp-scheme-font-family);
        }

        #qlwapp {
            font-size: calc(var(--qlwapp-scheme-font-size)*1px);
        }
    </style>
    <style id="kirki-inline-styles">
        .header,
        .header-spacer,
        .product-header-spacer {
            height: 120px;
            background-color: rgba(0, 0, 0, 0);
        }

        .header .header-bottom {
            height: 40px;
            max-height: 40px;
            min-height: 40px;
        }

        .header .logolink img {
            max-height: 80px;
        }

        .side-panel .mobile-bar,
        .side-panel .mobile-bar.dark {
            background-color: #f8f8f8;
        }

        .side-fullscreen-menu,
        .side-fullscreen-menu.dark {
            background-color: #000000;
        }

        .side-mobile-menu li,
        .side-mobile-menu li a,
        .side-mobile-menu .bottom-extras,
        .side-mobile-menu .bottom-extras a,
        .side-mobile-menu .selected {
            color: #ffffff;
        }

        .side-menu.side-mobile-menu,
        .side-menu.side-mobile-menu.dark {
            background-color: #000000;
        }

        .site-footer,
        .site-footer.dark {
            background-color: #000000;
        }

        .site-footer .footer-bar.custom-color-1,
        .site-footer .footer-bar.custom-color-1.dark {
            background-color: #000000;
        }

        .footer-bar.custom-color-1 .social-icons a {
            color: #ffffff;
        }

        .mfp #et-quickview {
            max-width: 960px;
        }

        .mfp-wrap.quick-search .mfp-content [type="submit"],
        .et-close,
        .single-product .pswp__button:hover,
        .content404 h4,
        .woocommerce-tabs .tabs li a span,
        .woo-variation-gallery-wrapper .woo-variation-gallery-trigger:hover:after,
        .mobile-menu li.menu-item-has-children.active>.et-menu-toggle:after,
        .remove:hover,
        a.remove:hover,
        .minicart-counter.et-count-zero,
        .tag-cloud-link .tag-link-count,
        .wpmc-tabs-wrapper li.wpmc-tab-item.current,
        div.argmc-wrapper .tab-completed-icon:before,
        .et-wp-gallery-popup .mfp-arrow {
            color: #4b96d4;
        }

        .slick-dots li.slick-active button {
            background-color: #4b96d4;
        }

        body,
        table,
        .shop_table,
        blockquote cite,
        .et-listing-style1 .product_thumbnail .et-quickview-btn,
        .products .single_add_to_cart_button.button,
        .products .add_to_cart_button.button,
        .products .added_to_cart.button,
        .side-panel header h6 {
            color: #ffffff;
        }

        .cart-collaterals .woocommerce-shipping-destination strong,
        #order_review .shop_table,
        #payment .payment_methods li label,
        .et-product-detail .summary .variations label,
        .woocommerce-tabs .tabs li a:hover,
        .woocommerce-tabs .tabs li.active a,
        .et-product-detail .product_meta>span *,
        .sticky-product-bar .variations label,
        .et-product-detail .summary .sizing_guide,
        #side-cart .woocommerce-mini-cart__total,
        .woocommerce-Price-amount,
        .cart-collaterals .shipping-calculator-button,
        .woocommerce-terms-and-conditions-wrapper a,
        .et-checkout-login-title a,
        .et-checkout-coupon-title a,
        .woocommerce-checkout h3,
        .order_review_heading,
        .woocommerce-Address-title h3,
        .woocommerce-MyAccount-content h3,
        .woocommerce-MyAccount-content legend,
        .et-product-detail.et-cart-mixed .summary .yith-wcwl-add-to-wishlist>div>a,
        .et-product-detail.et-cart-stacked .summary .yith-wcwl-add-to-wishlist>div>a,
        .hentry table th,
        .entry-content table th,
        #reviews .commentlist li .comment-text .meta strong,
        .et-feat-video-btn,
        #ship-to-different-address label,
        .woocommerce-account-fields p.create-account label,
        .et-login-wrapper a,
        .floating-labels .form-row.float-label input:focus~label,
        .floating-labels .form-row.float-label textarea:focus~label,
        .woocommerce-info,
        .order_details li strong,
        table.order_details th,
        table.order_details a:not(.button),
        .variable-items-wrapper .variable-item:not(.radio-variable-item).button-variable-item.selected,
        .woocommerce-MyAccount-content p a:not(.button),
        .woocommerce-MyAccount-content header a,
        .woocommerce-MyAccount-navigation ul li a,
        .et-MyAccount-user-info .et-username strong,
        .woocommerce-MyAccount-content .shop_table tr th,
        mark,
        .woocommerce-MyAccount-content strong,
        .product_list_widget a,
        .search-panel .search-field,
        .goya-search .search-button-group select,
        .widget .slider-values p span {
            color: #ffffff;
        }

        input[type=radio]:checked:before,
        input[type=checkbox]:checked,
        .select2-container--default .select2-results__option--highlighted[aria-selected],
        .widget .noUi-horizontal .noUi-base .noUi-origin:first-child {
            background-color: #ffffff;
        }

        label:hover input[type=checkbox],
        label:hover input[type=radio],
        input[type="text"]:focus,
        input[type="password"]:focus,
        input[type="number"]:focus,
        input[type="date"]:focus,
        input[type="datetime"]:focus,
        input[type="datetime-local"]:focus,
        input[type="time"]:focus,
        input[type="month"]:focus,
        input[type="week"]:focus,
        input[type="email"]:focus,
        input[type="search"]:focus,
        input[type="tel"]:focus,
        input[type="url"]:focus,
        input.input-text:focus,
        select:focus,
        textarea:focus {
            border-color: #ffffff;
        }

        input[type=checkbox]:checked {
            border-color: #ffffff !important;
        }

        .et-product-detail .summary .yith-wcwl-add-to-wishlist a .icon svg,
        .sticky-product-bar .yith-wcwl-add-to-wishlist a .icon svg {
            stroke: #ffffff;
        }

        .et-product-detail .summary .yith-wcwl-wishlistaddedbrowse a svg,
        .et-product-detail .summary .yith-wcwl-wishlistexistsbrowse a svg,
        .sticky-product-bar .yith-wcwl-wishlistaddedbrowse a svg,
        .sticky-product-bar .yith-wcwl-wishlistexistsbrowse a svg {
            fill: #ffffff;
        }

        .woocommerce-breadcrumb,
        .woocommerce-breadcrumb a,
        .widget .wcapf-layered-nav ul li .count,
        .category_bar .header-active-filters,
        #reviews .commentlist li .comment-text .woocommerce-review__verified,
        #reviews .commentlist li .comment-text .woocommerce-review__published-date,
        .woof_container_inner h4,
        #side-filters .header-active-filters .active-filters-title,
        #side-filters .widget h6,
        .sliding-menu .sliding-menu-back,
        .type-post .post-meta {
            color: #000000;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            color: #ffffff;
        }

        .yith-wcan-loading:after,
        .blockUI.blockOverlay:after,
        .easyzoom-notice:after,
        .woocommerce-product-gallery__wrapper .slick:after,
        .add_to_cart_button.loading:after,
        .et-loader:after,
        .wcapf-before-update:after,
        #side-filters.ajax-loader .side-panel-content:after {
            background-color: #4b96d4;
        }

        .et-page-load-overlay .dot3-loader {
            color: #4b96d4;
        }

        .button,
        input[type=submit],
        button[type=submit],
        #side-filters .et-close,
        .nf-form-cont .nf-form-content .submit-wrap .ninja-forms-field,
        .yith-wcwl-popup-footer a.button.wishlist-submit {
            background-color: #000000;
        }

        .button,
        .button:hover,
        button[type=submit],
        button[type=submit]:hover,
        input[type=submit],
        input[type=submit]:hover,
        .nf-form-cont .nf-form-content .submit-wrap .ninja-forms-field,
        .nf-form-cont .nf-form-content .submit-wrap .ninja-forms-field:hover,
        .yith-wcwl-popup-footer a.button.wishlist-submit {
            color: #ffffff;
        }

        .button.outlined,
        .button.outlined:hover,
        .button.outlined:focus,
        .button.outlined:active,
        .woocommerce-Reviews .comment-reply-title:hover {
            color: #ffffff;
        }

        .fancy-title {
            color: #4b96d4;
        }

        .fancy-tag {
            background-color: #4b96d4;
        }

        .page-header-regular .header,
        .header_on_scroll .header {
            background-color: rgba(0, 0, 0, 0);
        }

        .header .goya-search button,
        .header .et-switcher-container .selected,
        .header .et-header-text,
        .header .product.wcml-dropdown li>a,
        .header .product.wcml-dropdown .wcml-cs-active-currency>a,
        .header .product.wcml-dropdown .wcml-cs-active-currency:hover>a,
        .header .product.wcml-dropdown .wcml-cs-active-currency:focus>a,
        .header .menu-toggle,
        .header a {
            color: #000000;
        }

        .et-header-menu .menu-label {
            background-color: #ffffff;
        }

        .et-header-menu ul.sub-menu li a {
            color: #000000;
        }

        .et-header-menu .sub-menu .sub-menu,
        .et-header-menu ul.sub-menu:before {
            background-color: #ffffff;
        }

        .et-header-menu>li.menu-item-has-children>a:after {
            border-bottom-color: #ffffff;
        }

        .et-product-detail .single_add_to_cart_button,
        .sticky-product-bar .single_add_to_cart_button,
        .sticky-product-bar .add_to_cart_button,
        .woocommerce-mini-cart__buttons .button.checkout,
        .button.checkout-button,
        #place_order.button,
        .woocommerce .argmc-wrapper .argmc-nav-buttons .argmc-submit,
        .wishlist_table .add_to_cart {
            background-color: #000000;
        }

        .woocommerce-mini-cart__buttons .button:not(.checkout) {
            color: #000000;
        }

        .product-showcase-light-text .showcase-inner .single_add_to_cart_button {
            background-color: #ffffff;
        }

        .product-showcase-light-text .et-product-detail .single_add_to_cart_button {
            color: #000000;
        }

        .shop_bar button,
        .shop_bar .woocommerce-ordering .select2-container--default .select2-selection--single,
        .shop_bar .shop-filters .orderby,
        .shop_bar .woocommerce-ordering:after {
            color: #ffffff;
        }

        .products .product-title h3 a,
        .et-product-detail .summary h1 {
            color: #ffffff;
        }

        .products .product_after_title .price ins,
        .products .product_after_title .price>.amount,
        .price ins,
        .price>.amount,
        .price del,
        .price .woocommerce-Price-amount {
            color: #ffffff;
        }

        .star-rating>span:before,
        .comment-form-rating .stars>span:before {
            color: #ffffff;
        }

        .product-inner .badge.onsale,
        .wc-block-grid .wc-block-grid__products .wc-block-grid__product .wc-block-grid__product-onsale {
            color: #ef5c5c;
            background-color: #ffffff;
        }

        .et-product-detail .summary .badge.onsale {
            border-color: #ef5c5c;
        }

        .product-inner .badge.new {
            background-color: #ffffff;
        }

        .product-inner .badge.out-of-stock {
            color: #585858;
            background-color: #ffffff;
        }

        input[type="text"],
        input[type="password"],
        input[type="number"],
        input[type="date"],
        input[type="datetime"],
        input[type="datetime-local"],
        input[type="time"],
        input[type="month"],
        input[type="week"],
        input[type="email"],
        input[type="search"],
        input[type="tel"],
        input[type="url"],
        input.input-text,
        select,
        textarea,
        .wp-block-button__link,
        .nf-form-cont .nf-form-content .list-select-wrap .nf-field-element>div,
        .nf-form-cont .nf-form-content input:not([type="button"]),
        .nf-form-cont .nf-form-content textarea,
        .nf-form-cont .nf-form-content .submit-wrap .ninja-forms-field,
        .button,
        .comment-form-rating,
        .woocommerce a.ywsl-social,
        .login a.ywsl-social,
        input[type=submit],
        .select2.select2-container--default .select2-selection--single,
        .woocommerce .woocommerce-MyAccount-content .shop_table .woocommerce-button,
        .woocommerce .sticky-product-bar .quantity,
        .woocommerce .et-product-detail .summary .quantity,
        .et-product-detail .summary .yith-wcwl-add-to-wishlist>div>a,
        .wishlist_table .add_to_cart.button,
        .yith-wcwl-add-button a.add_to_wishlist,
        .yith-wcwl-popup-button a.add_to_wishlist,
        .wishlist_table a.ask-an-estimate-button,
        .wishlist-title a.show-title-form,
        .hidden-title-form a.hide-title-form,
        .woocommerce .yith-wcwl-wishlist-new button,
        .wishlist_manage_table a.create-new-wishlist,
        .wishlist_manage_table button.submit-wishlist-changes,
        .yith-wcwl-wishlist-search-form button.wishlist-search-button,
        #side-filters.side-panel .et-close,
        .header .search-button-group {
            -webkit-border-radius: 0px;
            -moz-border-radius: 0px;
            border-radius: 0px;
        }

        body,
        blockquote cite {
            font-family: Poppins;
        }

        body,
        blockquote cite,
        div.vc_progress_bar .vc_single_bar .vc_label,
        div.vc_toggle_size_sm .vc_toggle_title h4 {
            font-size: 16px;
        }

        .wp-caption-text,
        .woocommerce-breadcrumb,
        .post.listing .listing_content .post-meta,
        .footer-bar .footer-bar-content,
        .side-menu .mobile-widgets p,
        .side-menu .side-widgets p,
        .products .product.product-category a div h2 .count,
        #payment .payment_methods li .payment_box,
        #payment .payment_methods li a.about_paypal,
        .et-product-detail .summary .sizing_guide,
        #reviews .commentlist li .comment-text .woocommerce-review__verified,
        #reviews .commentlist li .comment-text .woocommerce-review__published-date,
        .commentlist>li .comment-meta,
        .widget .type-post .post-meta,
        .widget_rss .rss-date,
        .wp-block-latest-comments__comment-date,
        .wp-block-latest-posts__post-date,
        .commentlist>li .reply,
        .comment-reply-title small,
        .commentlist .bypostauthor .post-author,
        .commentlist .bypostauthor>.comment-body .fn:after,
        .et-portfolio.et-portfolio-style-hover-card .type-portfolio .et-portfolio-excerpt {
            font-size: 14px;
        }

        @media only screen and (min-width: 992px) {
            .header_on_scroll:not(.megamenu-active) .header {
                /* background-color: #db0b0b; */
                background-image: linear-gradient(to left, rgba(255, 0, 0, 0), rgba(255, 0, 0, 1));
                height: 125px;
            }

            .header_on_scroll:not(.megamenu-active) .header .logolink img {
                max-height: 80px;
            }
        }

        @media only screen and (max-width: 991px) {

            .header,
            .header-spacer,
            .header_on_scroll .header,
            .product-header-spacer,
            .sticky-product-bar {
                background-image: linear-gradient(rgba(255, 0, 0, 1), rgba(255, 0, 0, 0));
                height: 60px;
            }

            .header .logolink img {
                max-height: 45px;
            }
        }

        @media only screen and (max-width: 767px) {

            .header-transparent-mobiles.light-title:not(.header_on_scroll) .header .menu-toggle,
            .header-transparent-mobiles.light-title:not(.header_on_scroll) .header a.icon,
            .header-transparent-mobiles.sticky-header-light.header_on_scroll .header .menu-toggle,
            .header-transparent-mobiles.sticky-header-light.header_on_scroll .header a.icon,
            .sticky-header-light .header .menu-toggle:hover {
                color: #ffffff;
            }
        }

        @media only screen and (min-width: 768px) {

            .light-title:not(.header_on_scroll) .header .site-title,
            .light-title:not(.header_on_scroll) .header .et-header-menu>li>a,
            .sticky-header-light.header_on_scroll .header .et-header-menu>li>a,
            .light-title:not(.header_on_scroll) span.minicart-counter.et-count-zero,
            .sticky-header-light.header_on_scroll .header .et-header-text,
            .sticky-header-light.header_on_scroll .header .et-header-text a,
            .light-title:not(.header_on_scroll) .header .et-header-text,
            .light-title:not(.header_on_scroll) .header .et-header-text a,
            .sticky-header-light.header_on_scroll .header .header .icon,
            .light-title:not(.header_on_scroll) .header .icon,
            .sticky-header-light.header_on_scroll .header .menu-toggle,
            .light-title:not(.header_on_scroll) .header .menu-toggle,
            .sticky-header-light.header_on_scroll .header .et-switcher-container .selected,
            .light-title:not(.header_on_scroll) .header .et-switcher-container .selected,
            .light-title:not(.header_on_scroll) .header .product.wcml-dropdown li>a,
            .light-title:not(.header_on_scroll) .header .product.wcml-dropdown .wcml-cs-active-currency>a,
            .light-title:not(.header_on_scroll) .header .product.wcml-dropdown .wcml-cs-active-currency:hover>a,
            .light-title:not(.header_on_scroll) .header .product.wcml-dropdown .wcml-cs-active-currency:focus>a,
            .sticky-header-light.header_on_scroll .header .product.wcml-dropdown li>a,
            .sticky-header-light.header_on_scroll .header .product.wcml-dropdown .wcml-cs-active-currency>a,
            .sticky-header-light.header_on_scroll .header .product.wcml-dropdown .wcml-cs-active-currency:hover>a,
            .sticky-header-light.header_on_scroll .header .product.wcml-dropdown .wcml-cs-active-currency:focus>a {
                color: #ffffff;
            }

            .products:not(.shop_display_list) .et-listing-style4 .after_shop_loop_actions .button {
                background-color: #000000;
            }
        }

        /* devanagari */
        @font-face {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(/assets/fonts/poppins/pxiEyp8kv8JHgFVrJJbedHFHGPezSQ.woff) format('woff');
            unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
        }

        /* latin-ext */
        @font-face {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(/assets/fonts/poppins/pxiEyp8kv8JHgFVrJJnedHFHGPezSQ.woff) format('woff');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(/assets/fonts/poppins/pxiEyp8kv8JHgFVrJJfedHFHGPc.woff) format('woff');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* cyrillic */
        @font-face {
            font-family: 'Jost';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(/assets/fonts/jost/92zPtBhPNqw79Ij1E865zBUv7myjJTVFNI4un_HKCEl-Cw.woff) format('woff');
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        /* latin-ext */
        @font-face {
            font-family: 'Jost';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(/assets/fonts/jost/92zPtBhPNqw79Ij1E865zBUv7myjJTVPNI4un_HKCEl-Cw.woff) format('woff');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Jost';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(/assets/fonts/jost/92zPtBhPNqw79Ij1E865zBUv7myjJTVBNI4un_HKCEk.woff) format('woff');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* devanagari */
        @font-face {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(/assets/fonts/poppins/pxiEyp8kv8JHgFVrJJbedHFHGPezSQ.woff) format('woff');
            unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
        }

        /* latin-ext */
        @font-face {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(/assets/fonts/poppins/pxiEyp8kv8JHgFVrJJnedHFHGPezSQ.woff) format('woff');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(/assets/fonts/poppins/pxiEyp8kv8JHgFVrJJfedHFHGPc.woff) format('woff');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* cyrillic */
        @font-face {
            font-family: 'Jost';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(/assets/fonts/jost/92zPtBhPNqw79Ij1E865zBUv7myjJTVFNI4un_HKCEl-Cw.woff) format('woff');
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        /* latin-ext */
        @font-face {
            font-family: 'Jost';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(/assets/fonts/jost/92zPtBhPNqw79Ij1E865zBUv7myjJTVPNI4un_HKCEl-Cw.woff) format('woff');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Jost';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(/assets/fonts/jost/92zPtBhPNqw79Ij1E865zBUv7myjJTVBNI4un_HKCEk.woff) format('woff');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* devanagari */
        @font-face {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(/assets/fonts/poppins/pxiEyp8kv8JHgFVrJJbedHFHGPezSQ.woff) format('woff');
            unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
        }

        /* latin-ext */
        @font-face {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(/assets/fonts/poppins/pxiEyp8kv8JHgFVrJJnedHFHGPezSQ.woff) format('woff');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(/assets/fonts/poppins/pxiEyp8kv8JHgFVrJJfedHFHGPc.woff) format('woff');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* cyrillic */
        @font-face {
            font-family: 'Jost';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(/assets/fonts/jost/92zPtBhPNqw79Ij1E865zBUv7myjJTVFNI4un_HKCEl-Cw.woff) format('woff');
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        /* latin-ext */
        @font-face {
            font-family: 'Jost';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(/assets/fonts/jost/92zPtBhPNqw79Ij1E865zBUv7myjJTVPNI4un_HKCEl-Cw.woff) format('woff');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Jost';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(/assets/fonts/jost/92zPtBhPNqw79Ij1E865zBUv7myjJTVBNI4un_HKCEk.woff) format('woff');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
    </style>
    <style type="text/css" data-type="vc_shortcodes-custom-css">
        .vc_custom_1648440752285 {
            padding-top: 30px !important;
        }

        .vc_custom_1653901949015 {
            margin-top: 30px !important;
        }

        .vc_custom_1650442099428 {
            margin-top: -30px !important;
        }

        .vc_custom_1648462442179 {
            padding-top: 50px !important;
            padding-right: 50px !important;
            padding-left: 50px !important;
        }

        .vc_custom_1650441016289 {
            margin-top: -20px !important;
        }

        .vc_custom_1650440367090 {
            margin-top: -50px !important;
            margin-bottom: 0px !important;
            padding-right: 0px !important;
            padding-bottom: 0px !important;
            padding-left: 0px !important;
        }

        .vc_custom_1652342431881 {
            margin-top: px !important;
        }

        .vc_custom_1650445903492 {
            margin-top: 0px !important;
            margin-bottom: 0px !important;
            border-bottom-width: 0px !important;
            padding-top: 0px !important;
            padding-bottom: 0px !important;
        }

        .vc_custom_1650440951105 {
            margin-top: 0px !important;
        }

        .vc_custom_1650527112185 {
            margin-top: -30px !important;
            margin-bottom: -90px !important;
        }

        .vc_custom_1650444293521 {
            margin-top: 30px !important;
        }

        .vc_custom_1650440367090 {
            margin-top: -50px !important;
            margin-bottom: 0px !important;
            padding-right: 0px !important;
            padding-bottom: 0px !important;
            padding-left: 0px !important;
        }

        .vc_custom_1652342452269 {
            margin-top: 30px !important;
        }

        .vc_custom_1650445860431 {
            margin-top: 0px !important;
            margin-bottom: 0px !important;
            border-bottom-width: 0px !important;
            padding-top: 0px !important;
            padding-bottom: 0px !important;
        }

        .vc_custom_1650606574321 {
            margin-top: -30px !important;
        }

        .vc_custom_1650440367090 {
            margin-top: -50px !important;
            margin-bottom: 0px !important;
            padding-right: 0px !important;
            padding-bottom: 0px !important;
            padding-left: 0px !important;
        }

        .vc_custom_1652342642238 {
            margin-top: 0px !important;
            margin-bottom: 0px !important;
            border-bottom-width: 0px !important;
            padding-top: 0px !important;
            padding-bottom: 0px !important;
        }

        .vc_custom_1650606574321 {
            margin-top: -30px !important;
        }
    </style><noscript>
        <style>
            .wpb_animate_when_almost_visible {
                opacity: 1;
            }
        </style>
    </noscript>

@endsection

@section('bodyClass', 'home page-template-default page page-id-861 custom-background wp-embed-responsive theme-goya woocommerce-no-js woo-variation-swatches wvs-theme-goya wvs-theme-child-goya wvs-style-squared wvs-attr-behavior-blur wvs-tooltip wvs-css wvs-show-label blog-id-1 wp-gallery-popup header-sticky header-full-width goya-lazyload floating-labels login-single-column header-border-no sticky-header-light header-transparent-mobiles page-header-regular light-title wpb-js-composer js-comp-ver-6.8.0 vc_responsive')

@section('content')

    <div role="main" class="site-content">

        {{-- <div class="header-spacer"></div> --}}




        <div class="page-padding post-861 page type-page status-publish hentry">

            <div id="main-slider-row" class="sec_row container-fluid">
                <div class="vc_row wpb_row vc_row-fluid no-padding align-center">
                    <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-xs-12 et-dark-column">
                        <div class="vc_column-inner  vc_custom_1650442099428">
                            <div class="wpb_wrapper">
                                <!-- START Slider 3 REVOLUTION SLIDER 6.5.14 -->
                                <p class="rs-p-wp-fix"></p>
                                <rs-module-wrap id="rev_slider_4_1_wrapper" data-source="gallery" style="visibility:hidden;background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
                                    <rs-module id="rev_slider_4_1" style="" data-version="6.5.14">
                                        <rs-slides>
                                            <rs-slide style="position: absolute;" data-key="rs-31" data-title="Slide" data-in="o:0;" data-out="a:false;">
                                                <img src="/assets/plugins/revslider/public//assets//assets/dummy.png" alt="" title="Titles" width="2376" height="1584" class="rev-slidebg tp-rs-img rs-lazyload" data-lazyload="/assets/uploads/banner/2.jpg" data-bg="p:center bottom;" data-no-retina>

                                                <rs-layer id="slider-4-slide-11-layer-0" data-type="shape" data-rsp_ch="on" data-xy="x:-2452px;y:-240px;" data-text="w:normal;" data-dim="w:6026px;h:1271.97px;" data-frame_999="o:0;st:w;" style="z-index:5;background-color:rgba(0,0,0,0.5);">
                                                </rs-layer>

                                            </rs-slide>
                                            <rs-slide style="position: absolute;" data-key="rs-30" data-title="Slide" data-in="o:0;" data-out="a:false;">
                                                <img src="/assets/plugins/revslider/public//assets//assets/dummy.png" alt="" title="RANS-Cilegon-FC-Bukber-70-1-1" width="750" height="500" class="rev-slidebg tp-rs-img rs-lazyload" data-lazyload="/assets/uploads/banner/1.jpg" data-no-retina>
                                                <rs-layer id="slider-4-slide-29-layer-4" data-type="shape" data-rsp_ch="on" data-xy="x:-2500px;y:-24px;" data-text="w:normal;" data-dim="w:6236px;h:1195px;" data-frame_999="o:0;st:w;" style="z-index:5;background-color:rgba(0,0,0,0.5);">
                                                </rs-layer>
                                            </rs-slide>
                                        </rs-slides>
                                    </rs-module>
                                    <script>
                                        setREVStartSize({
                                            c: 'rev_slider_4_1',
                                            rl: [1240, 1024, 778, 480],
                                            el: [900],
                                            gw: [1080],
                                            gh: [900],
                                            type: 'standard',
                                            justify: '',
                                            layout: 'fullwidth',
                                            mh: "0"
                                        });
                                        if (window.RS_MODULES !== undefined && window.RS_MODULES.modules !== undefined && window.RS_MODULES.modules["revslider41"] !== undefined) {
                                            window.RS_MODULES.modules["revslider41"].once = false;
                                            window.revapi4 = undefined;
                                            if (window.RS_MODULES.checkMinimal !== undefined) window.RS_MODULES.checkMinimal()
                                        }
                                    </script>
                                </rs-module-wrap>
                                <!-- END REVOLUTION SLIDER -->
                                <div class="vc_empty_space" style="height: 10px"><span class="vc_empty_space_inner"></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="sec_row container">
                <div class="vc_row wpb_row vc_row-fluid">
                    <div class="wpb_column vc_column_container vc_col-sm-12 vc_hidden-xs et-dark-column">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <div class="vc_empty_space" style="height: 10px"><span class="vc_empty_space_inner"></span></div>
                                <h2 style="color: #ffffff;text-align: center" class="vc_custom_heading heading1 vc_custom_1648462442179">Our Brands</h2>
                                <div id="et-image-slider-345" class="et-image-slider slick slick-slider slick-dotted slick-dots-centered   " data-adaptive-height="false" variable-width="true" data-pagination="" data-navigation="true" data-center="true" data-fade="" data-columns="5" data-infinite="" data-autoplay="true" data-autoplay-speed="" data-pause="">
                                    @php
                                        $brand = \App\Models\Brand::all();
                                    @endphp
                                    @foreach ($brand as $res => $v)
                                        <div class="gallery-item">
                                            <div class="et-image-inner">
                                                <img width="100" height="100" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="attachment-thumbnail size-thumbnail et-lazyload lazyload" alt="" decoding="async" loading="lazy" data-src="/img/brand/{{ $v->logo }}.png" data-sizes="(max-width: 150px) 100vw, 150px" data-srcset="/img/brand/{{ $v->logo }} 150w, /img/brand/{{ $v->logo }} 300w, /img/brand/{{ $v->logo }} 1024w, /img/brand/{{ $v->logo }} 768w, /img/brand/{{ $v->logo }} 900w, /img/brand/{{ $v->logo }} 100w, /img/brand/{{ $v->logo }} 1080w" />
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="sec_row container">
                <div class="vc_row wpb_row vc_row-fluid">
                    <div class="wpb_column vc_column_container vc_col-sm-12 vc_hidden-xs et-dark-column">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <div class="vc_empty_space" style="height: 30px"><span class="vc_empty_space_inner"></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="sec_row container">
                <div class="vc_row wpb_row vc_row-fluid vc_custom_1648440752285">
                    <div class="wpb_column vc_column_container vc_col-sm-8 vc_hidden-lg et-dark-column">
                        <div class="vc_column-inner  vc_custom_1650441016289">
                            <div class="wpb_wrapper">
                                <h1 style="font-size: 20px;color: #ffffff;text-align: left" class="vc_custom_heading vc_custom_1652342431881"><b>NEW CARS</b></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="sec_row container">
                <div class="vc_row wpb_row vc_row-fluid">
                    <div class="wpb_column vc_column_container vc_col-sm-6 vc_hidden-xs et-dark-column">
                        <div class="vc_column-inner  vc_custom_1650440951105">
                            <div class="wpb_wrapper">
                                <h5 style="color: #ffffff;text-align: left" class="vc_custom_heading"><b>NEW CARS</b></h5>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="wpb_column vc_column_container vc_col-sm-6 vc_hidden-xs et-dark-column">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <h6 style="color: #ffffff;text-align: right" class="vc_custom_heading"><a href="#"><b>SEE ALL</b></a></h6>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>

            {{-- ============================================================== New Cars ================================================================= --}}        
            <div class="sec_row container">
                <div class="vc_row wpb_row vc_row-fluid">
                    <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-0 et-dark-column">
                        <div class="vc_column-inner  vc_custom_1650527112185">
                            <div class="wpb_wrapper">
                                <div class="carousel-container">
                                    <ul class="et-product et-main-products products row et-product-style1 hover-animation-zoom-jump products-by-category et-no-variations carousel et-product-slider slick slick-arrows-outside slick-controls-gray slick-dots-centered slick-dots-active-small" data-columns="5" data-mobile-columns="2" data-slides-to-scroll="5" data-navigation="true" data-pagination="">
                                        @for($i=0; $i<10; $i++)
                                        <li class="item et-listing-style1 col-6 col-sm-6 col-md-4 large_grid_5 small_grid_6 product type-product post-{{ $i }} status-publish first outofstock product_cat-new-cars has-post-thumbnail shipping-taxable purchasable product-type-simple">
                                            <div class="product-inner animation fade">
                                                <figure class="product_thumbnail ">
                                                    <a href="product/{{ $i }}" title="New Cars {{ $i }}"><img width="1080" height="1080" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="main-image et-lazyload lazyload wp-post-image" alt="" decoding="async" data-src="/img/products/new.jpg" data-sizes="auto" /></a>
                                                    <div class="actions-wrapper">
                                                        <div class="actions-inner">
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="caption">
                                                    
                                                    <div class="product-title">
                                                        <h2><a class="product-link" href="#" title="New Cars Title">New Cars Title {{ $i }}</a></h2>
                                                    </div>

                                                </div>
                                            </div>
                                        </li>
                                        @endfor
                                    </ul>
                                </div>                      
                                <div class="vc_empty_space" style="height: 10px"><span class="vc_empty_space_inner"></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-12 vc_hidden-xs et-dark-column">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <div class="vc_empty_space" style="height: 60px"><span class="vc_empty_space_inner"></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="sec_row container">
                <div class="vc_row wpb_row vc_row-fluid vc_custom_1653901949015">
                    <div class="wpb_column vc_column_container vc_col-sm-8 vc_hidden-lg et-dark-column">
                        <div class="vc_column-inner  vc_custom_1650444293521">
                            <div class="wpb_wrapper">
                                <h1 style="font-size: 20px;color: #ffffff;text-align: left" class="vc_custom_heading vc_custom_1652342452269"><b>USED CARS</b></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="sec_row container">
                <div class="vc_row wpb_row vc_row-fluid">
                    <div class="wpb_column vc_column_container vc_col-sm-6 vc_hidden-xs et-dark-column">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <h5 style="color: #ffffff;text-align: left" class="vc_custom_heading"><b>USED CARS</b></h5>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="wpb_column vc_column_container vc_col-sm-6 vc_hidden-xs et-dark-column">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <h6 style="color: #ffffff;text-align: right" class="vc_custom_heading"><a href="#"><b>SEE ALL</b></a></h6>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>

            {{-- ============================================================== Used Cars ================================================================= --}}
            <div class="sec_row container">
                <div class="vc_row wpb_row vc_row-fluid">
                    <div class="wpb_column vc_column_container vc_col-sm-12 et-dark-column">
                        <div class="vc_column-inner  vc_custom_1650606574321">
                            <div class="wpb_wrapper">
                                <div class="carousel-container">
                                    <ul class="et-product et-main-products products row et-product-style1 hover-animation-zoom-jump products-by-category et-no-variations carousel et-product-slider slick slick-arrows-outside slick-controls-gray slick-dots-centered slick-dots-active-small" data-columns="5" data-mobile-columns="2" data-slides-to-scroll="5" data-navigation="true" data-pagination="" data-autoplay="true" data-autoplay-speed="4000">

                                        @for($i=0; $i<10; $i++)
                                        <li class="item et-listing-style1 col-6 col-sm-6 col-md-4 large_grid_5 small_grid_6 product type-product post-{{ $i }} status-publish first instock product_cat-used-cars has-post-thumbnail shipping-taxable purchasable product-type-simple">
                                            <div class="product-inner animation fade">
                                                <figure class="product_thumbnail ">
                                                    <a href="product/{{ $i }}" title="Used Car {{ $i }}"><img width="1080" height="1080" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="main-image et-lazyload lazyload wp-post-image" alt="" decoding="async" loading="lazy" data-src="/img/products/used.jpg" data-sizes="auto" /></a>
                                                    <div class="actions-wrapper">
                                                        <div class="actions-inner">
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="caption">
                                                    <div class="product-title">
                                                        <h2><a class="product-link" href="#" title="Used Car {{ $i }}">Used Car {{ $i }}</a></h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        @endfor
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="sec_row container">
                <div class="vc_row wpb_row vc_row-fluid">
                    <div class="wpb_column vc_column_container vc_col-sm-8 vc_hidden-lg et-dark-column">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <h1 style="font-size: 20px;color: #ffffff;text-align: left" class="vc_custom_heading"><b>INDENT CARS</b></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="sec_row container">
                <div class="vc_row wpb_row vc_row-fluid">
                    <div class="wpb_column vc_column_container vc_col-sm-6 vc_hidden-xs et-dark-column">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <h5 style="color: #ffffff;text-align: left" class="vc_custom_heading"><b>INDENT CARS</b></h5>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="wpb_column vc_column_container vc_col-sm-6 vc_hidden-xs et-dark-column">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <h6 style="color: #ffffff;text-align: right" class="vc_custom_heading"><a href="#"><b>SEE ALL</b></a></h6>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
            
            {{-- ============================================================== Indent Cars ================================================================= --}}
            <div class="sec_row container">
                <div class="vc_row wpb_row vc_row-fluid">
                    <div class="wpb_column vc_column_container vc_col-sm-12 et-dark-column">
                        <div class="vc_column-inner  vc_custom_1650606574321">
                            <div class="wpb_wrapper">
                                <div class="carousel-container">
                                    <ul class="et-product et-main-products products row et-product-style1 hover-animation-zoom-jump products-by-category et-no-variations carousel et-product-slider slick slick-arrows-outside slick-controls-gray slick-dots-centered slick-dots-active-small" data-columns="5" data-mobile-columns="2" data-slides-to-scroll="5" data-navigation="true" data-pagination="" data-autoplay="true" data-autoplay-speed="4000">

                                        @for($i=0; $i<10; $i++)
                                        <li class="item et-listing-style1 col-6 col-sm-6 col-md-4 large_grid_5 small_grid_6 product type-product post-{{ $i }} status-publish last instock product_cat-indent-cars has-post-thumbnail shipping-taxable product-type-simple">
                                            <div class="product-inner animation fade">
                                                <figure class="product_thumbnail ">
                                                    <a href="product/{{ $i }}" title="Indent Car {{ $i }}"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="main-image et-lazyload lazyload wp-post-image" alt="" decoding="async" loading="lazy" data-src="/img/products/indent.jpg" data-sizes="auto" /></a>
                                                    <div class="actions-wrapper">
                                                        <div class="actions-inner">
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="caption">
                                                    <div class="product-title">
                                                        <h2><a class="product-link" href="#" title="Indent Car {{ $i }}">Indent Car {{ $i }}</a></h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        @endfor
                                    </ul>
                                </div>
                                <div class="vc_empty_space" style="height: 20px"><span class="vc_empty_space_inner"></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="sec_row container">
                <div class="vc_row wpb_row vc_row-fluid">
                    <div class="wpb_column vc_column_container vc_col-sm-12 et-dark-column">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <div class="wpb_text_column wpb_content_element  ">
                                    <div class="wpb_wrapper">
                                        <p></b></b></b></b></b></b></b></b></p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="sec_row container">
                <div class="vc_row wpb_row vc_row-fluid">
                    <div class="wpb_column vc_column_container vc_col-sm-12 et-dark-column">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <div class="wpb_text_column wpb_content_element  ">
                                    <div class="wpb_wrapper">
                                        <p></b></b></b></b></p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div><!-- End role["main"] -->

@endsection


@section('scripts')

    <script src='/assets/themes/goya//assets/js/vendor/jquery.autocomplete.min330a.js?ver=1.4.1' id='autocomplete-js'></script>
    <script src='/assets/themes/goya//assets/js/vendor/jquery.magnific-popup.min41fe.js?ver=3.0.1' id='magnific-popup-js'></script>

    <script src='/assets/themes/goya//assets/js/vendor/sticky-kit.minc358.js?ver=1.1.3' id='sticky-kit-js'></script>
    <script src='/assets/themes/goya//assets/js/vendor/slick.minc245.js?ver=1.8.1' id='jquery-slick-js'></script>
    <script src='/assets/themes/goya//assets/js/vendor/isotope.pkgd.min7c45.js?ver=3.0.6' id='isotope-pk-js'></script>
    <script src='/assets/themes/goya//assets/js/vendor/packery-mode.pkgd.min7406.js?ver=2.0.1' id='packery-js'></script>

    <script>
        if (typeof revslider_showDoubleJqueryError === "undefined") {
            function revslider_showDoubleJqueryError(sliderID) {
                console.log(
                    "You have some jquery.js library include that comes after the Slider Revolution files js inclusion."
                    );
                console.log("To fix this, you can:");
                console.log(
                    "1. Set 'Module General Options' -> 'Advanced' -> 'jQuery & OutPut Filters' -> 'Put JS to Body' to on"
                    );
                console.log("2. Find the double jQuery.js inclusion and remove it");
                return "Double Included jQuery Library";
            }
        }
    </script>
    <link rel='stylesheet' id='berocket_framework_tippy-css' href='/assets/plugins/brands-for-woocommerce/berocket//assets/tippy/tippy6a4d.css?ver=6.1.1' media='all' />
    <link rel='stylesheet' id='berocket_framework_popup-animate-css' href='/assets/plugins/brands-for-woocommerce/berocket//assets/popup/animate6a4d.css?ver=6.1.1' media='all' />
    <link rel='stylesheet' id='rs-plugin-settings-css' href='/assets/plugins/revslider/public//assets/css/rs6097f.css?ver=6.5.14' media='all' />
    <style id='rs-plugin-settings-inline-css'>
        #rev_slider_4_1_wrapper .goya .tp-bullet {
            width: 8px;
            height: 8px;
            position: absolute;
            background: #ffffff;
            border-radius: 50%;
            cursor: pointer;
            opacity: 0.3;
            transition: 0.4s
        }

        #rev_slider_4_1_wrapper .goya .tp-bullet.rs-touchhover,
        #rev_slider_4_1_wrapper .goya .tp-bullet.selected {
            background: #ffffff;
            opacity: 1
        }

        #rev_slider_4_1[data-slideactive="rs-11"] .goya .tp-bullet {
            width: 8px !important;
            height: 8px !important;
            background: #ffffff !important
        }

        #rev_slider_4_1[data-slideactive="rs-11"] .goya .tp-bullet.rs-touchhover,
        #rev_slider_4_1[data-slideactive="rs-11"] .goya .tp-bullet.selected {
            background: #ffffff !important
        }

        #rev_slider_4_1[data-slideactive="rs-13"] .goya .tp-bullet {
            width: 8px !important;
            height: 8px !important;
            background: #ffffff !important
        }

        #rev_slider_4_1[data-slideactive="rs-13"] .goya .tp-bullet.rs-touchhover,
        #rev_slider_4_1[data-slideactive="rs-13"] .goya .tp-bullet.selected {
            background: #ffffff !important
        }
    </style>
    <script src='/assets/plugins/brands-for-woocommerce/berocket//assets/tippy/tippy.min6a4d.js?ver=6.1.1' id='berocket_framework_tippy-js'></script>
    <script src='/assets/plugins/brands-for-woocommerce/js/front6a4d.js?ver=6.1.1' id='berocket_front-js'></script>
    <script src='/assets/plugins/yith-woocommerce-wishlist//assets/js/jquery.selectBox.min7359.js?ver=1.2.0' id='jquery-selectBox-js'></script>
    <script src='/assets/plugins/woocommerce//assets/js/prettyPhoto/jquery.prettyPhoto.min005e.js?ver=3.1.6' id='prettyPhoto-js'></script>

    <script src='/assets/plugins/yith-woocommerce-wishlist//assets/js/jquery.yith-wcwl.minaf6c.js?ver=3.6.0' id='jquery-yith-wcwl-js'></script>
    <script src='/assets/plugins/revslider/public//assets/js/rbtools.min097f.js?ver=6.5.14' defer async id='tp-tools-js'></script>
    <script src='/assets/plugins/revslider/public//assets/js/rs6.min097f.js?ver=6.5.14' defer async id='revmin-js'></script>
    <script src='/assets/plugins/woocommerce//assets/js/js-cookie/js.cookie.minc6bb.js?ver=2.1.4-wc.6.2.2' id='js-cookie-js'></script>
    <script src='/assets/plugins/woocommerce//assets/js/frontend/woocommerce.min3781.js?ver=6.2.2' id='woocommerce-js'></script>
    <script src='/assets/plugins/woocommerce//assets/js/frontend/cart-fragments.min3781.js?ver=6.2.2' id='wc-cart-fragments-js'></script>

    <script id="rs-initialisation-scripts">
        var tpj = jQuery;

        var revapi4;

        if (window.RS_MODULES === undefined) window.RS_MODULES = {};
        if (RS_MODULES.modules === undefined) RS_MODULES.modules = {};
        RS_MODULES.modules["revslider41"] = {
            once: RS_MODULES.modules["revslider41"] !== undefined ? RS_MODULES.modules["revslider41"].once : undefined,
            init: function() {
                window.revapi4 = window.revapi4 === undefined || window.revapi4 === null || window.revapi4
                    .length === 0 ? document.getElementById("rev_slider_4_1") : window.revapi4;
                if (window.revapi4 === null || window.revapi4 === undefined || window.revapi4.length == 0) {
                    window.revapi4initTry = window.revapi4initTry === undefined ? 0 : window.revapi4initTry + 1;
                    if (window.revapi4initTry < 20) requestAnimationFrame(function() {
                        RS_MODULES.modules["revslider41"].init()
                    });
                    return;
                }
                window.revapi4 = jQuery(window.revapi4);
                if (window.revapi4.revolution == undefined) {
                    revslider_showDoubleJqueryError("rev_slider_4_1");
                    return;
                }
                revapi4.revolutionInit({
                    revapi: "revapi4",
                    DPR: "dpr",
                    sliderLayout: "fullwidth",
                    visibilityLevels: "1920, 1660, 1240,1024,778,480",
                    gridwidth: 1080,
                    gridheight: 1080,
                    lazyType: "smart",
                    perspective: 600,
                    perspectiveType: "global",
                    editorheight: "900,768,960,720",
                    responsiveLevels: "1240,1024,778,480",
                    progressBar: {
                        disableProgressBar: true
                    },
                    navigation: {
                        wheelCallDelay: 1000,
                        onHoverStop: false,
                        touch: {
                            touchenabled: true
                        },
                        bullets: {
                            enable: true,
                            tmp: "",
                            style: "goya",
                            v_offset: 15
                        }
                    },
                    viewPort: {
                        global: true,
                        globalDist: "-200px",
                        enable: false
                    },
                    fallbacks: {
                        allowHTML5AutoPlayOnAndroid: true
                    },
                });

            }
        } // End of RevInitScript

        if (window.RS_MODULES.checkMinimal !== undefined) {
            window.RS_MODULES.checkMinimal();
        };
    </script>
    
@endsection

