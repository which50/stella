<?php
global $vw_secondary_query;
if ( empty( $vw_secondary_query ) ) return;
?>

<div class="vw-loop vw-loop--mix vw-loop--mix-1 vw-loop--col-2">

	<div class="row">
		<div class="col-sm-6">
			<?php if ( $vw_secondary_query->have_posts() ) : $vw_secondary_query->the_post(); ?>
				<?php get_template_part( 'templates/post-loop/post-medium-1', get_post_format() ); ?>
			<?php endif; ?>
		</div>

		<div class="col-sm-6">
			<?php if ( $vw_secondary_query->have_posts() ) : $vw_secondary_query->the_post(); ?>
				<?php get_template_part( 'templates/post-loop/post-medium-1', get_post_format() ); ?>
			<?php endif; ?>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-12">
			<div class="vw-block-grid vw-block-grid-xs-1 vw-block-grid-sm-2">

			<?php while ( $vw_secondary_query->have_posts() ) : $vw_secondary_query->the_post(); ?>
				<div class="vw-block-grid-item">
					<?php get_template_part( 'templates/post-loop/post-small-left-thumbnail', get_post_format() ); ?>
				</div>
			<?php endwhile; ?>

			</div>
		</div>
	</div>
</div>