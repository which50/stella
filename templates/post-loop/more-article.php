<div class="vw-post-box vw-post-box--more-article vw-post-box--medium vw-post-box--medium-2 <?php vw_the_post_format_class(); ?>" <?php vw_itemtype('Article'); ?>>

	<?php if ( has_post_thumbnail() ) : ?>

	<a class="vw-post-box__thumbnail" href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark" data-mfp-src="<?php echo esc_url( vw_get_embed_video_url() ); ?>">

		<?php the_post_thumbnail( VW_CONST_THUMBNAIL_SIZE_POST_MEDIUM ); ?>

		<?php vw_the_post_format_icon(); ?>

		<?php vw_the_review_summary(); ?>

	</a>

	<?php endif; ?>





	<div class="vw-post-box__inner">



		<?php vw_the_category(); ?>



		<h3 class="vw-post-box__title">

			<a href="<?php the_permalink(); ?>" class="" <?php vw_itemprop('url'); ?>>

				<?php the_title(); ?>

			</a>

		</h3>



		<div class="vw-post-box__footer">

			<a class="vw-post-box__read-more" href="<?php the_permalink(); ?>">

				<?php _e( 'READ MORE', 'envirra' ); ?>

			</a>

		</div>

		

	</div>

	

</div>