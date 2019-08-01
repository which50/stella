<!-- Logo -->
<div class="vw-logo" <?php vw_itemtype('Organization'); ?>>
	
	<a class="vw-logo__link" href="<?php echo esc_url( home_url() ); ?>" <?php vw_itemprop('url'); ?>>
		<?php $logo = vw_get_theme_option( 'logo' ); ?>
		<?php $logo_2x = vw_get_theme_option( 'logo_2x' ); ?>

		<?php if ( ! empty( $logo[ 'url' ] ) ): ?>

			<?php if ( ! empty( $logo_2x[ 'url' ] ) ): ?>
				<img class="vw-logo__image vw-logo__image--2x" src="<?php echo esc_url( $logo_2x[ 'url' ] ); ?>" width="<?php echo esc_attr( $logo[ 'width' ] ) ?>" height="<?php echo esc_attr( $logo[ 'height' ] ) ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" <?php vw_itemprop('logo'); ?>>
			<?php endif; ?>

			<img class="vw-logo__image vw-logo__image--1x" src="<?php echo esc_url( $logo[ 'url' ] ); ?>" width="<?php echo esc_attr( $logo[ 'width' ] ) ?>" height="<?php echo esc_attr( $logo[ 'height' ] ) ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" <?php vw_itemprop('logo'); ?>>

		<?php else: ?>

			<h1 class="vw-logo__title" <?php vw_itemprop('name'); ?>><?php echo esc_html( get_bloginfo( 'name' ) ); ?></h1>
		<?php endif; ?>

		<?php if ( vw_get_theme_option( 'show_site_tagline' ) && get_bloginfo( 'description' ) ): ?>
			<p class="vw-logo__tagline" <?php vw_itemprop('description'); ?>><?php echo esc_html( get_bloginfo( 'description' ) ); ?></p>
		<?php endif; ?>
			
	</a>

</div>
<!-- End Logo -->