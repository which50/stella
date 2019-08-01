<div class="vw-post-navigation clearfix">
	<?php $prev_post = get_previous_post(); ?>
	<?php if ( ! empty( $prev_post ) ) : ?>
	<a class="vw-post-navigation-previous" href="<?php echo esc_url( get_permalink( $prev_post->ID ) ); ?>">
		<div class="vw-post-navigation-content">
			<span class="vw-post-navigation-label"><?php _e( 'Previous post', 'envirra' ); ?></span>
			<h4 class="vw-post-navigation-title">
				<?php echo esc_html( $prev_post->post_title ); ?>
			</h4>
		</div>
	</a>
	<?php else: ?>
		<div class="vw-post-navigation-previous">
			<div class="vw-post-navigation-content">
				<span class="vw-post-navigation-label"><?php _e( 'Previous post', 'envirra' ); ?></span>
				<h4 class="vw-post-navigation-title vw-post-navigation-title-no-link">
					<?php _e( 'There is no more story.', 'envirra' ); ?>
				</h4>
			</div>
		</div>
	<?php endif; ?>
	
	<?php $next_post = get_next_post(); ?>
	<?php if ( ! empty( $next_post ) ) : ?>
	<a class="vw-post-navigation-next" href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>">
		<div class="vw-post-navigation-content">
			<span class="vw-post-navigation-label"><?php _e( 'Next post', 'envirra' ); ?></span>
			<h4 class="vw-post-navigation-title">
				<?php echo esc_html( $next_post->post_title ); ?>
			</h4>
		</div>
	</a>
	<?php else: ?>
		<div class="vw-post-navigation-next">
			<div class="vw-post-navigation-content">
				<span class="vw-post-navigation-label"><?php _e( 'Next post', 'envirra' ); ?></span>
				<h4 class="vw-post-navigation-title vw-post-navigation-title-no-link">
					<?php _e( 'This is the most recent story.', 'envirra' ); ?>
				</h4>
			</div>
		</div>
	<?php endif; ?>
</div>