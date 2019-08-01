<?php
$score_style = esc_html( get_post_meta( get_the_id(), 'vw_review_score_style', true ) );
$review_position = esc_html( get_post_meta( get_the_id(), 'vw_review_position', true ) );
$review_pros = wp_kses_data( get_post_meta( get_the_id(), 'vw_review_pros', true ) );
$review_cons = wp_kses_data( get_post_meta( get_the_id(), 'vw_review_cons', true ) );
?>
<div class="vw-review clearfix <?php echo esc_attr( sprintf( 'vw-review--%s vw-review--%s', $review_position, $score_style ) ) ?>" itemscope itemtype="http://schema.org/Review">
	<meta itemprop="itemReviewed" content="<?php echo esc_attr( get_the_title() ); ?>">
	<meta itemprop="author" content="<?php echo esc_attr( get_the_author() ); ?>">
	<meta itemprop="datePublished" content="<?php echo esc_attr( get_the_date( 'Y-m-d' ) ); ?>">

	<h3 class="vw-review__title"><span><?php _e( "Editor's Rating", 'envirra' ); ?></span></h3>

	<div class="vw-review__summary">
		<?php $review_summary = esc_html( get_post_meta( get_the_id(), 'vw_review_summary', true ) ); ?>
		<?php $total_score = get_post_meta( get_the_id(), 'vw_review_average_score', true ); ?>

		<?php if ( 'percentage' == $score_style ) : ?>
			<?php $display_score = intval( $total_score ); ?>
			<div class="vw-review__total vw-review__total--percentage" itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating">
				<span><?php echo $display_score; ?></span>

				<meta itemprop="worstRating" content="0">
				<meta itemprop="bestRating" content="100">
				<meta itemprop="ratingValue" content="<?php echo esc_attr( $display_score ); ?>">
			</div>

		<?php elseif ( 'points' == $score_style ) : ?>
			<?php $display_score = number_format( $total_score / 10.0, 1 ); ?>
			<div class="vw-review__total vw-review__total--point" itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating">
				<span><?php echo $display_score; ?></span>

				<meta itemprop="worstRating" content="0">
				<meta itemprop="bestRating" content="10">
				<meta itemprop="ratingValue" content="<?php echo esc_attr( $display_score ); ?>">
			</div>
		<?php endif; ?>

		<div class="vw-review__review-summary" itemprop="reviewBody"><?php echo wp_kses_data( $review_summary ); ?></div>
		
	</div>

	<?php if ( vw_get_theme_option( 'enable_user_rating' ) ) :
		$user_rating_count = intval( get_post_meta( get_the_id(), 'vw_user_rating_count', true ) );
		$user_rating_sum = floatval( get_post_meta( get_the_id(), 'vw_user_rating_sum', true ) );

		if ( $user_rating_count > 0 ) {
			$user_rating_avg = $user_rating_sum / $user_rating_count;
		} else {
			$user_rating_avg = 0;
		}
	?>

	<div class="vw-review__user-rating clearfix">
		<div class="vw-review__user-rating-score" data-score="<?php echo esc_attr( $user_rating_avg ); ?>" data-post-id="<?php echo esc_attr( get_the_id() ); ?>"></div>
		<div class="vw-review__user-rating-title"><?php printf( __( '%s User ratings' , 'envirra' ), $user_rating_count ); ?></div>
	</div>

	<?php endif; ?>

	<div class="vw-review__items">
		<?php
		$counter = 1;
		for( $counter=1; $counter<=10; $counter++ ) :
			$label = get_post_meta( get_the_id(), 'vw_review_score_'.$counter.'_label', true );
			$score = get_post_meta( get_the_id(), 'vw_review_score_'.$counter.'_score', true );

			if ( empty( $score ) ) break;

			$score_percent = floatval( $score ) . '%';
		?>
		<div class="vw-review__item clearfix">
			<div class="vw-review__item-title">

				<span><?php echo esc_html( $label ) ?></span>

				<?php if ( 'percentage' == $score_style ) : ?>
					<span class="vw-review__item-title-separator">&ndash;</span>
					<span class="vw-review__item-title-score"><?php echo $score_percent; ?></span>

				<?php elseif ( 'points' == $score_style ) : ?>
					<span class="vw-review__item-title-separator">&ndash;</span>
					<span class="vw-review__item-title-score"><?php echo number_format( $score / 10.0, 1 ); ?></span>

				<?php endif; ?>

			</div>

			<?php if ( 'percentage' == $score_style || 'points' == $score_style ) : ?>
				<div class="vw-review__item-score" style="width: <?php echo esc_attr( $score_percent ); ?>;"></div>
			<?php endif; ?>

		</div>
		<?php endfor; ?>
	</div>

	<?php if ( vw_get_theme_option( 'enable_pros_cons' ) && ( ! empty( $review_pros ) && ! empty( $review_cons ) ) ) : ?>

	<div class="vw-review__pros-cons">

		<div class="vw-review__pros">
			<h4 class="vw-review__pros-title"><?php _e( 'PROS', 'envirra' ) ?></h4>
			<div class="vw-review__pros-summary"><?php echo wp_kses_data( $review_pros ); ?></div>
		</div>

		<div class="vw-review__cons">
			<h4 class="vw-review__cons-title"><?php _e( 'CONS', 'envirra' ) ?></h4>
			<div class="vw-review__cons-summary"><?php echo wp_kses_data( $review_cons ); ?></div>
		</div>

	</div>

	<?php endif; ?>
</div>