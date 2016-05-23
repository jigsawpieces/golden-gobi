<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package golden-gobi
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
				while ( have_posts() ) : the_post();

					if ( has_post_thumbnail() ) {

					    $thumb_id = get_post_thumbnail_id();
						$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
						$thumb_url = $thumb_url_array[0];

						echo '<div class="page-header" style="background-image:url(' . $thumb_url . ');"></div>';
					}
					else {
					    echo '<div class="page-header no-image"></div>';
					}

					echo '<div class="col-md-8">';
					
						get_template_part( 'template-parts/content', get_post_format() );
					
				
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

					echo '</div>';
					
				endwhile; // End of the loop.

			?>
		
		<?php
			// get the sidebar
			get_sidebar();
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
