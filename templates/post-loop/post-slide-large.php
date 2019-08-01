<div class="vw-post-box vw-post-box--slide vw-post-box--slide-large <?php vw_the_post_format_class(); ?>" <?php vw_itemtype('Article'); ?>>

	<?php if ( has_post_thumbnail() ) : ?>
		<a class="vw-post-box__thumbnail" href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark">
			<?php the_post_thumbnail( VW_CONST_THUMBNAIL_SIZE_POST_SLIDER_LARGE ); ?>
		</a>
	<?php endif; ?>

	<div class="vw-post-box__inner">
		<?php vw_the_category(); ?>
		<h2 class="vw-post-box__title"><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php printf( esc_attr__('Permalink to %s', 'envirra'), the_title_attribute('echo=0') ); ?>" rel="bookmark" <?php vw_itemprop('url'); ?>><?php the_title(); ?></a></h2>

		<a href="<?php echo esc_url( get_permalink() ); ?>" class="vw-button vw-button-accent"><?php _e( 'Read More' , 'envirra' ); ?></a>

	</div>
	
</div>