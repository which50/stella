<?php

query_posts( 'tag=Featured' );

?>

<div class="vw-loop vw-loop--slider vw-loop--slider-large marto-1">

	<div class="clearfix"></div>

	<div class="container">

		<div class="row">

			<div class="col-sm-12">

				<div class="swiper-container vw-swiper-large-nav">

					<div class="swiper-wrapper">

					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

						<div class="swiper-slide">

							<?php get_template_part( 'templates/post-loop/post-slide-large', get_post_format() ); ?>

						</div>

					<?php endwhile; endif; ?>

					</div>

				</div>

			</div>

		</div>

	</div>

</div>