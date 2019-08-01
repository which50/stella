<div class="vw-breaking-news-bar container">
	<div class="vw-breaking-news clearfix">
		<span class="vw-breaking-news-title vw-header-font"><?php _e( 'BREAKING', 'envirra' ); ?></span>

		<ul class="vw-breaking-news-list">

			<?php
			global $vw_secondary_query;
			$vw_secondary_query = vw_query_get_breaking_news_posts(); ?>

			<?php if ( $vw_secondary_query->have_posts() ) : ?>

				<?php while( $vw_secondary_query->have_posts() ) : $vw_secondary_query->the_post(); ?>

					<li><?php the_title( '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a>' ); ?></li>

				<?php endwhile; ?>
				
				<?php wp_reset_postdata(); ?>

			<?php endif; ?>

		</ul>
	</div>
</div>