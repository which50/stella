<?php



/* -----------------------------------------------------------------------------

 * Render Custom CSS

 * -------------------------------------------------------------------------- */

add_action( 'wp_head', 'vw_render_custom_css', 99 );

if ( ! function_exists( 'vw_render_custom_css' ) ) {

	function vw_render_custom_css() {

		global $vw_stella;

	?>

	<!-- Theme's Custom CSS -->

	<style type="text/css">

		/* Global */
		.vw-page-wrapper,
		.vw-page-wrapper .vw-post-box--medium .vw-post-box__excerpt { color: #000; }

		/* Fix admin bar */

		.admin-bar .mm-page { padding-top: 32px !important; }

		@media screen and ( max-width: 782px ) {

			.admin-bar .mm-page { padding-top: 46px !important; }

		}



		html { margin-top: 0px !important; }

		* html body { margin-top: 0px !important; }

		@media screen and ( max-width: 782px ) {

			html { margin-top: 0px !important; }

			* html body { margin-top: 0px !important; }

		}

		/* End */

		

		a, a:hover, a:focus,

		.vw-page-subtitle,

		.vw-post-style-classic .vw-post-box-title a:hover,

		.vw-post-likes-count.vw-post-liked .vw-icon,

		.vw-menu-location-bottom .main-menu-link:hover,

		.vw-accordion-header.ui-accordion-header-active span,

		.vw-404-text,

		#wp-calendar thead,

		.vw-accordion .ui-state-hover span,

		.vw-breadcrumb a:hover,

		h1 em, h2 em, h3 em, h4 em, h5 em, h6 em,

		.vw-post-share-big-number .vw-number,

		.vw-post-categories a {

			color: <?php echo $vw_stella['accent_color'] ?>;

		}



		.vw-site-social-profile-icon:hover,

		.vw-post-style-box:hover,

		.vw-post-box:hover .vw-post-format-icon i,

		.vw-gallery-direction-button:hover,

		.widget_tag_cloud .tagcloud a:hover,

		.vw-page-navigation-pagination .page-numbers:hover,

		.vw-page-navigation-pagination .page-numbers.current,

		#wp-calendar tbody td:hover,

		.vw-widget-category-post-count,

		.vwspc-section-full-page-link:hover .vw-button,

		

		.vw-tag-links a,

		.vw-hamburger-icon:hover,

		.pace .pace-progress,

		.vw-review-score-percentage .vw-review-item-score, .vw-review-score-points .vw-review-item-score,

		.vw-pricing-featured .vw-pricing-title,

		.vw-menu-location-top .menu-item-depth-0:after,

		.no-touch input[type=button]:hover, .no-touch input[type=submit]:hover, .no-touch button:hover, .no-touch .vw-button:hover, .no-touch .woocommerce a.button:hover, .no-touch .woocommerce button.button:hover, .no-touch .woocommerce input.button:hover, .no-touch .woocommerce #respond input#submit:hover,

		/*.vw-page-content .vw-page-title-box .vw-label,*/

		.vw-quote-icon,

		.vw-dropcap-circle, .vw-dropcap-box,

		.vw-accordion .ui-icon:before,

		.no-touch .vw-swiper-arrow-left:hover, .no-touch .vw-swiper-arrow-right:hover,

		.vw-previous-link-page:hover, .vw-next-link-page:hover,

		.vw-review__item-score,

		.vw-instant-search-buton:hover,

		.vw-scroll-to-top,

		.vw-post-box .vw-post-format-icon,

		.vw-review-summary,

		.vw-button-accent,

		.vw-post-share-count,

		.mfp-arrow,

		.mfp-close,

		.mfp-arrow:hover, .no-touch .mfp-arrow:hover,

		.mfp-close:hover, .no-touch .mfp-close:hover

		{

			background-color: <?php echo $vw_stella['accent_color'] ?>;

		}



		.vw-about-author-section .vw-author-name,

		.vw-post-meta-large .vw-date-box,

		#wp-calendar caption,

		.vw-widget-feedburner-text,

		.vw-login-title,

		.widget_search label,

		.vw-author-socials .vw-icon-social:hover,

		.vw-tabs.vw-style-top-tab .vw-tab-titles,

		.vw-fixed-tab .vw-fixed-tab-title:hover, .vw-fixed-tab .vw-fixed-tab-title.is-active

		{

			border-color: <?php echo $vw_stella['accent_color'] ?>;

		}



		.vw-tabs.vw-style-top-tab .vw-tab-title.active {

			background-color: <?php echo $vw_stella['accent_color'] ?>;

			border-color: <?php echo $vw_stella['accent_color'] ?>;

		}



		/* Header font */

		input[type=button], input[type=submit], button, .vw-button,

		.woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit,

		.vw-header-font-family,

		/*.vw-pricing-price,*/

		.vw-quote, blockquote,

		.vw-copyright,

		.vw-mega-menu-type-links-4-cols .menu-item-depth-1 > .menu-link,

		.vw-post-box--medium-2 .vw-post-box__read-more,

		.vw-content-slider .vw-swiper-arrow-nav .vw-swiper-arrow-left, .vw-content-slider .vw-swiper-arrow-nav .vw-swiper-arrow-right,



		.woocommerce td.product-name > a {

			font-family: <?php echo $vw_stella['typography_header']['font-family'] ?>;

		}



		/*NEW */

		/* rhombus */

		.vw-page-navigation-pagination .page-numbers.current,

		.vw-page-navigation-pagination .page-numbers:hover,

		.vw-post-box--medium-2 .vw-post-box__read-more:hover

		{

			background-color: <?php echo $vw_stella['accent_color'] ?>;

		}



		.vw-page-navigation-pagination .page-numbers.current:before,

		.vw-page-navigation-pagination .page-numbers:hover:before,

		.vw-post-box--medium-2 .vw-post-box__read-more:hover:before {

			border-right-color: <?php echo $vw_stella['accent_color'] ?>;

		}

		.vw-page-navigation-pagination .page-numbers.current:after,

		.vw-page-navigation-pagination .page-numbers:hover:after,

		.vw-post-box--medium-2 .vw-post-box__read-more:hover:after {

			border-left-color: <?php echo $vw_stella['accent_color'] ?>;

		}



		/* Body font */

		.vw-breaking-news-link {

			font-family: <?php echo $vw_stella['typography_body']['font-family'] ?>;

		}



		.vw-page-title-section--has-background .vw-page-title-section__inner {

			min-height: <?php echo $vw_stella['full_featured_image_height'] ?>px;

		}



		<?php if ( function_exists( 'is_shop' ) ) : ?>

		/* WooCommerce */

		.woocommerce .widget_price_filter .ui-slider .ui-slider-range, .woocommerce-page .widget_price_filter .ui-slider .ui-slider-range,

		.woocommerce .widget_layered_nav_filters ul li a:hover, .woocommerce-page .widget_layered_nav_filters ul li a:hover,

		.woocommerce span.onsale

		{

			background: <?php echo $vw_stella['accent_color'] ?>;

		}



		.woocommerce div.product span.price, .woocommerce div.product p.price,

		.woocommerce ul.products li.product .price

		{

			color: <?php echo $vw_stella['accent_color'] ?>;

		}



		.woocommerce div.product .woocommerce-tabs ul.tabs li.active

		{

			border-color: <?php echo $vw_stella['accent_color'] ?>;

		}



		.woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .woocommerce #respond input#submit:hover,

		.woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce #respond input#submit.alt

		{

			background: <?php echo $vw_stella['accent_color'] ?>;

			border-color: <?php echo $vw_stella['accent_color'] ?>;

		}

		<?php endif; ?>



		/* bbPress */

		<?php if ( function_exists( 'is_shop' ) ) : ?>

		#bbpress-forums .bbp-forum-title {

			color: <?php echo $vw_stella['typography_header']['color'] ?>;

		}

		<?php endif; ?>



		<?php if ( function_exists( 'is_shop' ) ) : ?>

		/* buddypress */

		#buddypress div.item-list-tabs ul li.current a:hover, #buddypress div.item-list-tabs ul li.selected a:hover,

		#buddypress .comment-reply-link:hover, #buddypress a.button:hover, #buddypress button:hover, #buddypress div.generic-button a:hover, #buddypress input[type=button]:hover, #buddypress input[type=reset]:hover, #buddypress input[type=submit]:hover, #buddypress ul.button-nav li a:hover, a.bp-title-button:hover

		{

			background-color: <?php echo $vw_stella['accent_color'] ?>;

		}

		<?php endif; ?>



		/* Custom Styles */

		<?php do_action( 'vw_action_render_custom_css' ); ?>

	</style>

	<!-- End Theme's Custom CSS -->

	<?php

	}

}



/* -----------------------------------------------------------------------------

 * Render Custom CSS option

 * -------------------------------------------------------------------------- */

add_action( 'vw_action_render_custom_css', 'vw_render_custom_css_option' );

if ( ! function_exists( 'vw_render_custom_css_option' ) ) {

	function vw_render_custom_css_option() {

		echo wp_kses_data( vw_get_theme_option( 'custom_css' ) );

	}

}