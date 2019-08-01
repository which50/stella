<?php
$ads_banner = trim( vw_get_theme_option( 'header_ads_banner' ) );
$ads_leaderboard = trim( vw_get_theme_option( 'header_ads_leaderboard' ) );

if ( empty( $ads_banner ) && empty( $ads_leaderboard ) ) return;

$single_ads_class = '';
if ( empty( $ads_banner ) xor empty( $ads_leaderboard ) ) {
	$single_ads_class = 'vw-header-ads__placeholder--single visible-xs visible-sm visible-md visible-lg';
}
?>
<div class="vw-header-ads" <?php vw_itemtype('WPAdBlock'); ?>>

	<?php if ( ! empty( $ads_banner ) ) : ?>
	<div class="vw-header-ads__placeholder vw-header-ads__placeholder--leader visible-md visible-lg <?php echo esc_attr( $single_ads_class ); ?>">
		<?php echo do_shortcode( wp_kses_post( $ads_banner ) ); ?>
	</div>
	<?php endif; ?>

	<?php if ( ! empty( $ads_leaderboard ) ) : ?>
	<div class="vw-header-ads__placeholder vw-header-ads__placeholder--banner visible-xs visible-sm <?php echo esc_attr( $single_ads_class ); ?>">
		<?php echo do_shortcode( wp_kses_post( $ads_leaderboard ) ); ?>
	</div>
	<?php endif; ?>

</div>