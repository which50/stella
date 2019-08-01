<?php

add_action( 'after_setup_theme', 'vw_setup_sidebars' );
function vw_setup_sidebars() {
	add_action( 'widgets_init', 'vw_register_sidebars' );
}

/* -----------------------------------------------------------------------------
 * Register sidebars
 * -------------------------------------------------------------------------- */
if ( ! function_exists( 'vw_register_sidebars' ) ) {
	function vw_register_sidebars() {
		/**
		 * Blog widget sidebar
		 */

		register_sidebar( array(
			'name' => 'Blog Right Sidebar',
			'id'   => 'blog-right-sidebar',
			'description'   => 'These are widgets for the Blog sidebar.',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title"><span>',
			'after_title'   => '</span></h3>'
		) );

		register_sidebar( array(
			'name' => 'Blog Left Sidebar',
			'id'   => 'blog-left-sidebar',
			'description'   => 'These are widgets for the Blog sidebar.',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title"><span>',
			'after_title'   => '</span></h3>'
		) );

		/**
		 * Page widget sidebar
		 */
		register_sidebar( array(
			'name' => 'Page Sidebar',
			'id'   => 'page-sidebar',
			'description'   => 'These are widgets for the static page.',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title"><span>',
			'after_title'   => '</span></h3>'
		) );
		
		/**
		 * Footer sidebar
		 */
		register_sidebar( array(
			'name' => 'Footer Sidebar 1',
			'id'   => 'footer-sidebar-1',
			'description'   => 'These are widgets for the Footer.',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title"><span>',
			'after_title'   => '</span></h3>'
		) );
		register_sidebar( array(
			'name' => 'Footer Sidebar 2',
			'id'   => 'footer-sidebar-2',
			'description'   => 'These are widgets for the Footer.',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title"><span>',
			'after_title'   => '</span></h3>'
		) );
		register_sidebar( array(
			'name' => 'Footer Sidebar 3',
			'id'   => 'footer-sidebar-3',
			'description'   => 'These are widgets for the Footer.',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title"><span>',
			'after_title'   => '</span></h3>'
		) );
		register_sidebar( array(
			'name' => 'Footer Sidebar 4',
			'id'   => 'footer-sidebar-4',
			'description'   => 'These are widgets for the Footer.',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title"><span>',
			'after_title'   => '</span></h3>'
		) );

		/**
		 * Custom sidebar
		 */
		if ( ! defined( 'VW_CONST_DISABLE_CUSTOM_SIDEBAR' ) ) {
			register_sidebar( array(
				'name' => 'Custom Sidebar 1',
				'id'   => 'custom-sidebar-1',
				'description'   => 'These are widgets for custom sidebar.',
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title"><span>',
				'after_title'   => '</span></h3>'
			) );
			register_sidebar( array(
				'name' => 'Custom Sidebar 2',
				'id'   => 'custom-sidebar-2',
				'description'   => 'These are widgets for custom sidebar.',
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title"><span>',
				'after_title'   => '</span></h3>'
			) );
			register_sidebar( array(
				'name' => 'Custom Sidebar 3',
				'id'   => 'custom-sidebar-3',
				'description'   => 'These are widgets for custom sidebar.',
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title"><span>',
				'after_title'   => '</span></h3>'
			) );
			register_sidebar( array(
				'name' => 'Custom Sidebar 4',
				'id'   => 'custom-sidebar-4',
				'description'   => 'These are widgets for custom sidebar.',
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title"><span>',
				'after_title'   => '</span></h3>'
			) );
			register_sidebar( array(
				'name' => 'Custom Sidebar 5',
				'id'   => 'custom-sidebar-5',
				'description'   => 'These are widgets for custom sidebar.',
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title"><span>',
				'after_title'   => '</span></h3>'
			) );
			register_sidebar( array(
				'name' => 'Custom Sidebar 6',
				'id'   => 'custom-sidebar-6',
				'description'   => 'These are widgets for custom sidebar.',
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title"><span>',
				'after_title'   => '</span></h3>'
			) );
		}
	}
}