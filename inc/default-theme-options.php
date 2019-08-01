<?php
/* -----------------------------------------------------------------------------
 * This file will be loaded only ReduxFramework is not activated
 * -------------------------------------------------------------------------- */

global $vw_stella;
$vw_stella = json_decode( '{"site_enable_open_graph":1,"site_force_enable_rtl":0,"page_force_disable_comments":0,"site_layout":"boxed","site_enable_sticky_sidebar":1,"site_top_bar":"menu-social","site_header_layout":"left-logo","site_enable_sticky_menu":1,"site_header_padding":{"top":"15px","bottom":"10px"},"site_bottom_bar":"copyright-social","copyright_text":"Copyright &copy;, All Rights Reserved.","site_footer_layout":"4,4,4","blog_default_layout":"medium-1-col-2","blog_default_sidebar_position":"right","blog_default_left_sidebar":"blog-left-sidebar","blog_default_right_sidebar":"blog-right-sidebar","blog_excerpt_length":"50","blog_enable_masonry_layout":1,"blog_enable_more_articles":1,"blog_avoid_duplicate_post":0,"blog_enable_post_views":1,"post_views_forgery":"0","enable_breaking_news":1,"show_breaking_news_on_front_page":1,"breaking_news_source":"latest","post_default_layout":"classic","post_default_sidebar_position":"right","full_featured_image_height":"500","enable_next_page_links":0,"post_footer_sections":{"enabled":{"post-navigation":"Next/Previous Post","about-author":"About Author","related-posts":"Related Posts","comments":"Comments"},"disabled":{"custom-1":"Custom Section 1","custom-2":"Custom Section 2"}},"related_post_count":"4","enable_pros_cons":1,"enable_user_rating":1,"blog_enable_custom_tiled_gallery":"1","blog_custom_tiled_gallery_layout":"213","typography_header":{"color":"#000000","font-style":"400","font-family":"Playfair Display","google":true,"text-transform":"capitalize","letter-spacing":"0px"},"typography_main_menu":{"font-weight":"600","font-family":"Open Sans","google":true,"font-size":"14px","text-transform":"none","letter-spacing":"0px"},"typography_body":{"color":"#666666","font-style":"400","font-family":"Open Sans","google":true,"font-size":"14px"},"show_site_tagline":1,"logo_margin":{"margin-top":"30px","margin-bottom":"30px","margin-left":"0px","margin-right":"0px","units":"px"},"icon_iconic":0,"icon_elusive":0,"icon_awesome":0,"icon_typicons":0,"social_facebook":"https://facebook.com","social_googleplus":"https://plus.google.com","social_twitter":"https://twitter.com","slider_slide_duration":"4000","slider_transition_speed":"500","slider_enable_kenburns":1,"accent_color":"#e8c24f","header_background":{"background-color":"#ffffff"},"body_background":{"background-color":"#ffffff"},"topbar_background":"#000000","top_main_menu_link":{"regular":"#888888","hover":"#3e3e3e"},"top_sub_menu_background":"#ffffff","top_sub_menu_link":{"regular":"#111111","hover":"#888888"},"top_sub_menu_hover_background":"#f5f5f5","main_menu_background":"#ffffff","main_main_menu_link":{"regular":"#000000","hover":"#e8c24f"},"main_sub_menu_background":"#ffffff","main_sub_menu_link":{"regular":"#111111","hover":"#888888"},"main_sub_menu_hover_background":"#f5f5f5","footer_background":{"background-color":"#222222"},"footer_header_color":"#ffffff","footer_color":"#dcdcdc","bottombar_background":"#111111","bottombar_color":"#b4b4b4","woocommerce_show_breaking_news":1,"woocommerce_show_breadcrumb":1,"woocommerce_products_per_page":"9","woocommerce_product_default_sidebar_position":"right","woocommerce_product_default_left_sidebar":"blog-left-sidebar","woocommerce_product_default_right_sidebar":"blog-right-sidebar","themeforest_username":"","themeforest_api_key":"","site_404":"","header_ads_banner":"","header_ads_leaderboard":"","before_post_content":"","after_post_content":"","post_footer_section_custom_1":"","post_footer_section_custom_2":"","custom_font1_ttf":"","custom_font1_woff":"","custom_font1_svg":"","custom_font1_eot":"","custom_font2_ttf":"","custom_font2_woff":"","custom_font2_svg":"","custom_font2_eot":"","logo":"","logo_2x":"","fav_icon":"","fav_icon_iphone":"","fav_icon_iphone_retina":"","fav_icon_ipad":"","fav_icon_ipad_retina":"","social_delicious":"","social_digg":"","social_dribbble":"","social_flickr":"","social_forrst":"","social_github":"","social_instagram":"","social_lastfm":"","social_linkedin":"","social_pinterest":"","social_rss":"","social_skype":"","social_tumblr":"","social_vimeo":"","social_yahoo":"","social_youtube":"","site_background":"","custom_css":"","redux_import_export":"","redux-backup":1}',true );

add_action( 'wp_head', 'vw_render_default_theme_script', 99 );
if ( ! function_exists( 'vw_render_default_theme_script' ) ) {
	function vw_render_default_theme_script() {
		?>
		<!-- VW Default Theme Options -->
		<link rel='stylesheet' id='redux-google-fonts-vw_stella-css'  href='http://fonts.googleapis.com/css?family=Oswald%3A300%2C400%2C700%7COpen+Sans%3A300%2C400%2C600%2C700%2C800%2C300italic%2C400italic%2C600italic%2C700italic%2C800italic&#038;ver=1426839419' type='text/css' media='all' />
		<style type="text/css" title="dynamic-css" class="options-output">.vw-site-header__inner{padding-top:15px;padding-bottom:10px;}h1, h2, h3, h4, h5, h6, .vw-header-font,#wp-calendar caption,.vw-accordion-header-text,.vw-review-item-title,.vw-previous-link-page, .vw-next-link-page,#bbpress-forums .bbp-topic-title .bbp-topic-permalink, #bbpress-forums .bbp-forum-info .bbp-forum-title,#bbpress-forums #bbp-user-wrapper h2.entry-title,.widget.widget_display_topics li .bbp-forum-title, .widget.widget_display_replies li .bbp-forum-title{font-family:"Playfair Display";text-transform:capitalize;letter-spacing:0px;font-weight:normal;font-style:400;color:#000000;opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading h1, h2, h3, h4, h5, h6, .vw-header-font,.wf-loading #wp-calendar caption,.wf-loading .vw-accordion-header-text,.wf-loading .vw-review-item-title,.wf-loading .vw-previous-link-page, .vw-next-link-page,.wf-loading #bbpress-forums .bbp-topic-title .bbp-topic-permalink, #bbpress-forums .bbp-forum-info .bbp-forum-title,.wf-loading #bbpress-forums #bbp-user-wrapper h2.entry-title,.wf-loading .widget.widget_display_topics li .bbp-forum-title, .widget.widget_display_replies li .bbp-forum-title,{opacity: 0;}.ie.wf-loading h1, h2, h3, h4, h5, h6, .vw-header-font,.ie.wf-loading #wp-calendar caption,.ie.wf-loading .vw-accordion-header-text,.ie.wf-loading .vw-review-item-title,.ie.wf-loading .vw-previous-link-page, .vw-next-link-page,.ie.wf-loading #bbpress-forums .bbp-topic-title .bbp-topic-permalink, #bbpress-forums .bbp-forum-info .bbp-forum-title,.ie.wf-loading #bbpress-forums #bbp-user-wrapper h2.entry-title,.ie.wf-loading .widget.widget_display_topics li .bbp-forum-title, .widget.widget_display_replies li .bbp-forum-title,{visibility: hidden;}.vw-menu-location-main{font-family:"Open Sans";text-transform:none;letter-spacing:0px;font-weight:600;font-style:normal;font-size:14px;opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading .vw-menu-location-main,{opacity: 0;}.ie.wf-loading .vw-menu-location-main,{visibility: hidden;}body,cite{font-family:"Open Sans";font-weight:normal;font-style:400;color:#666666;font-size:14px;opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading body,.wf-loading cite,{opacity: 0;}.ie.wf-loading body,.ie.wf-loading cite,{visibility: hidden;}.vw-logo__link{margin-top:30px;margin-right:0;margin-bottom:30px;margin-left:0;}body{background-attachment:fixed;background-image:url('http://192.168.137.1:81/wp-content/uploads/2015/05/site-background.jpg');}.vw-site-header,.vw-site-header-background{background-color:#ffffff;}.vw-site-wrapper,.vw-page-navigation-pagination{background-color:#ffffff;}.vw-top-bar__inner{background:#000000;}.vw-menu-location-top .sub-menu{background:#ffffff;}.vw-menu-location-top .sub-menu-link{color:#111111;}.vw-menu-location-top .sub-menu-link:hover{color:#888888;}.vw-menu-location-top .sub-menu-link:hover{background:#f5f5f5;}.vw-menu-main-inner{background:#ffffff;}.vw-menu-location-main .main-menu-link{color:#000000;}.vw-menu-location-main .main-menu-link:hover{color:#e8c24f;}.vw-menu-location-main .sub-menu{background:#ffffff;}.vw-menu-location-main .sub-menu-link{color:#111111;}.vw-menu-location-main .sub-menu-link:hover{color:#888888;}.vw-menu-location-main .sub-menu-link:hover{background:#f5f5f5;}.vw-site-footer{background-color:#222222;}.vw-site-footer-sidebars h1,.vw-site-footer-sidebars h2,.vw-site-footer-sidebars h3,.vw-site-footer-sidebars h4,.vw-site-footer-sidebars h5,.vw-site-footer-sidebars h6,.vw-site-footer-sidebars .widget-title,.vw-site-footer-sidebars .vw-widget-category-title,.vw-site-footer-sidebars .vw-social-counter-count{color:#ffffff;}.vw-site-footer-sidebars{color:#dcdcdc;}.vw-bottom-bar{background:#111111;}.vw-bottom-bar{color:#b4b4b4;}</style>
		<?php
	}
}