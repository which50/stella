<?php
add_filter( 'the_excerpt', 'vwxss_context' );
add_filter( 'vw_filter_spc_custom_content_body', 'vwxss_context' );
add_filter( 'vw_filter_custom_tiled_gallery_caption', 'vwxss_context' );
if ( ! function_exists( 'vwxss_context' ) ) {
	function vwxss_context( $context ) {
		return wp_kses_post( $context );
	}
}