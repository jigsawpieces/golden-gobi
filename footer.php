<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package golden-gobi
 */

?>

	</div><!-- #content -->

</div><!-- #page -->

</div><!-- .container -->

<footer id="colophon" class="site-footer" role="contentinfo">

	<div class="container">

		<div class="row logos">
			<div class="col-md-12">

				<h2>Find us on</h2>

				<a href="http://hotels.lonelyplanet.com/hotel/Ulaanbaatar-Golden-Gobi-Guesthouse-P1000250278.html" target="_blank"><img src="http://localhost:8888/golden-gobi-wp/wp-content/uploads/2016/05/lp-logo.png"></a>

				<a href="http://www.hostels.com/hostels/ulaanbaatar/golden-gobi/14709" target="_blank"><img src="http://localhost:8888/golden-gobi-wp/wp-content/uploads/2016/05/hostels-com.png"></a>

				<a href="http://www.tripadvisor.com/Hotel_Review-g293956-d782964-Reviews-Golden_Gobi-Ulaanbaatar.html" target="_blank"><img src="http://localhost:8888/golden-gobi-wp/wp-content/uploads/2016/05/TripAdvisor_w.png"></a>

				<a href="http://www.hostelworld.com/hosteldetails.php/Golden-Gobi/Ulaanbaatar/14709" target="_blank"><img src="http://localhost:8888/golden-gobi-wp/wp-content/uploads/2016/05/hostelworld-w.png"></a>

			</div>
		</div>
		<div class="site-info row">

			<div class="col-md-3">

				<?php wp_nav_menu( array( 'theme_location' => 'footer-menu-1', 'menu_id' => 'footer-menu-1' ) ); ?>

			</div>

			<div class="col-md-3">

				<?php wp_nav_menu( array( 'theme_location' => 'footer-menu-2', 'menu_id' => 'footer-menu-2' ) ); ?>

			</div>

			<div class="col-md-3">

				<?php get_sidebar('footer-address'); ?>

			</div>

			<div class="col-md-3">

				<?php get_sidebar('footer-contact'); ?>

			</div>


		</div><!-- .site-info -->
	</div>
</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>
