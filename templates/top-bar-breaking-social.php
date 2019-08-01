<!-- Top Bar -->
<div class="vw-top-bar vw-top-bar--breaking-social">

	<div class="container">
		<div class="vw-top-bar__inner">

			<div class="vw-top-bar__placeholder vw-top-bar__placeholder--left">
				<?php get_template_part( 'templates/breaking-news-bar' ); ?>
			</div>
			
			<div class="vw-top-bar__placeholder vw-top-bar__placeholder--right">
				<?php vw_the_site_social_profiles(); ?>

				<?php echo apply_filters( 'vw_filter_top_bar_right_additional_items', '' ); ?>
			</div>

		</div>
	</div>

</div>
<!-- End Top Bar -->