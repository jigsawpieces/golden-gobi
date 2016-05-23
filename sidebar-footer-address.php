<?php
/**
 * The footer sidebar
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package golden-gobi
 */

if ( ! is_active_sidebar( 'footer-address-sidebar' ) ) {
	return;
}
?>

<aside id="secondary" role="complementary">
	<?php dynamic_sidebar( 'footer-address-sidebar' ); ?>
</aside><!-- #secondary -->
