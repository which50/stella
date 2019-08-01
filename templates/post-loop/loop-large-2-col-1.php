<?php
global $vw_secondary_query;
if ( empty( $vw_secondary_query ) ) return;
?>

<div class="vw-loop vw-loop--large vw-loop--large-2 vw-loop--col-1">
	<div class="row">
		<div class="col-sm-12">

			<?php while( $vw_secondary_query->have_posts() ) : $vw_secondary_query->the_post(); ?>
				<?php get_template_part( 'templates/post-loop/post-large-2', get_post_format() ); ?>
			<?php endwhile; ?>

		</div>
	</div>
</div>