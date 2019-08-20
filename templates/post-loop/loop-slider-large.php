<?php

global $vw_secondary_query;

$vw_secondary_query = new WP_Query( array( 'tag' => 'Featured' ) );

if ( empty( $vw_secondary_query ) ) return;

?>

<div class="vw-loop vw-loop--slider vw-loop--slider-large">

	<div class="clearfix"></div>

	<div class="container">

		<div class="row">

			<div class="col-sm-12">

				<div class="swiper-container vw-swiper-large-nav">

					<div class="swiper-wrapper">

					<?php while ( $vw_secondary_query->have_posts() ) : $vw_secondary_query->the_post(); ?>

						<div class="swiper-slide">

							<?php get_template_part( 'templates/post-loop/post-slide-large', get_post_format() ); ?>

						</div>

					<?php endwhile; ?>

					</div>

				</div>

			</div>

		</div>

	</div>

</div>