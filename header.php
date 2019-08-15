<!DOCTYPE html>

<!--[if IE 9]>         <html class="no-js lt-ie10" <?php vw_html_tag_schema(); ?> <?php language_attributes(); ?>> <![endif]-->

<!--[if gt IE 9]><!--> <html class="no-js" <?php vw_html_tag_schema(); ?> <?php language_attributes(); ?>> <!--<![endif]-->

	<head>

		<meta charset="<?php echo esc_attr( get_bloginfo('charset') ); ?>">

		

		<!-- WP Header -->

		<?php wp_head(); ?>

		<!-- End WP Header -->
</head>

	<body id="site-top" <?php body_class(); ?>>



		<!-- Site Wrapper -->

		<div class="vw-site-wrapper marto">



			<?php vw_the_site_top_bar(); ?>



			<?php get_template_part( '/templates/site-header', vw_get_theme_option( 'site_header_layout' ) ); ?>



			<?php do_action( 'vw_action_site_header' ); ?>