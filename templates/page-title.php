<?php /* Init the post data */
if ( is_single() && have_posts() ) { the_post(); }
?>

<?php if (
	has_post_format( 'gallery' )
	|| 'large-featured-image' == vw_get_post_layout()
	|| 'large-title' == vw_get_post_layout()
	|| 'page_big_featured_image.php' == get_page_template_slug()

) : ?>

<?php
$classes = 'vw-page-title-section--no-background';
if ( 'large-featured-image' == vw_get_post_layout() ) {
	$classes .= ' vw-page-title-section--no-title';
}
?>
<div class="vw-page-title-section <?php echo esc_attr( $classes ); ?> clearfix">

	<div class="container">
		<div class="vw-page-title-section__inner">
			<?php if ( is_single() && has_post_format( 'gallery' ) ): ?>
			<div class="vw-page-title-section__gallery-direction">
				<a href="#" class="vw-page-title-section__gallery-button vw-page-title-section__gallery-button--prev">
					<i class="vw-icon icon-entypo-left-open-big"></i>
				</a>
				<a href="#" class="vw-page-title-section__gallery-button vw-page-title-section__gallery-button--next">
					<i class="vw-icon icon-entypo-right-open-big"></i>
				</a>
			</div>
			<?php endif; ?>
			
			<?php if ( is_single() && 'large-title' == vw_get_post_layout() ): ?>
			<div class="vw-page-title-section__title-box">

				<?php vw_the_category(); ?>

				<h2 class="vw-page-title-section__title"><?php the_title(); ?></h2>
				<?php vw_the_subtitle(); ?>

				<div class="vw-post-meta">
			
					<?php vw_the_author(); ?>

					<span class="vw-post-meta-separator">/</span>

					<?php vw_the_post_date(); ?>

					<span class="vw-post-meta-separator">/</span>

					<?php vw_the_comment_link(); ?>
					
				</div>

			</div>
			<?php endif; ?>
		</div>
	</div>

</div>

<?php endif; ?>

<?php /* Rewind the post data */
if ( is_single() && have_posts() ) { rewind_posts(); }
?>