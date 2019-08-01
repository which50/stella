<?php
/* -----------------------------------------------------------------------------
 * More Articles
 * -------------------------------------------------------------------------- */
add_action( 'after_setup_theme', 'vw_init_more_articles' );
if ( ! function_exists( 'vw_init_more_articles' ) ) {
	function vw_init_more_articles() {
		if ( vw_get_theme_option( 'blog_enable_more_articles' ) ) {
			add_action( 'wp_footer', 'vw_render_more_articles' );
		}
	}
}

if ( ! function_exists( 'vw_render_more_articles' ) ) {
	function vw_render_more_articles() {
		global $vw_secondary_query;

		if ( is_single() && 'post' == get_post_type() ) {
			$query_args = array(
				'post__not_in' => array( get_queried_object_id() ),
				'orderby' => 'rand',
				'posts_per_page'=> 1,
				'ignore_sticky_posts'=> 1,
				);

			// ==== Begin temp query =====================================
			// $query_args['p'] = 1292;
			// $query_args['post__in'] = array( 1292, 1304 );
			$query_args['meta_query'][] = array(
				'key' => '_thumbnail_id',
				'compare' => 'EXISTS'
			);
			// ==== End temp query =====================================

			$vw_secondary_query = new WP_Query( apply_filters( 'vw_filter_more_articles_query_args', $query_args ) );
			
			if ( $vw_secondary_query->have_posts() ) { $vw_secondary_query->the_post();
				get_template_part( 'templates/more-articles', get_post_format() );
			}

			wp_reset_postdata();
		}
	}
}
