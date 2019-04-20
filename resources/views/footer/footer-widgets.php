<?php
/**
 * Displays footer widgets if assigned
 *
 */
?>

<?php
if ( is_active_sidebar( 'footer-1' ) ||
	 is_active_sidebar( 'footer-2' ) ||
	 is_active_sidebar( 'footer-3' ) ||
	 is_active_sidebar( 'footer-4' ) ) :
?>
	<aside class="widget-area" role="complementary" aria-label="<?php esc_attr_e( 'Footer', 'mag' ); ?>">
		<div class="container">
			<div class="row">
                <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
                    <div class="widget-column col footer-widget-1">
						<?php dynamic_sidebar( 'footer-1' ); ?>
					</div>
                <?php endif; ?>

                <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
                    <div class="widget-column col footer-widget-2">
						<?php dynamic_sidebar( 'footer-2' ); ?>
					</div>
                <?php endif; ?>

                <?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
                    <div class="widget-column col footer-widget-3">
						<?php dynamic_sidebar( 'footer-3' ); ?>
					</div>
                <?php endif; ?>

                <?php if ( is_active_sidebar( 'footer-4' ) ) : ?>
                    <div class="widget-column col footer-widget-4">
						<?php dynamic_sidebar( 'footer-4' ); ?>
					</div>
                <?php endif; ?>
			</div>
		</div>
	</aside><!-- .widget-area -->

<?php endif; ?>
