<?php
global $vw_secondary_query;
if ( empty( $vw_secondary_query ) ) return;
?>

<div class="vw-loop vw-loop--medium vw-loop--medium-3 vw-loop--col-3">
	<div class="row">
		<div class="col-sm-12">
			<div class="vw-block-grid vw-block-grid-xs-1 vw-block-grid-sm-2 vw-block-grid-md-4">

			<?php while( $vw_secondary_query->have_posts() ) : $vw_secondary_query->the_post(); ?>
				<div class="vw-block-grid-item">
					<?php get_template_part( 'templates/post-loop/post-medium-3', get_post_format() ); ?>
				</div>
			<?php endwhile; ?>

			</div>
		</div>
	</div>
</div>