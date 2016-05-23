<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package golden-gobi
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php

		if ( has_post_thumbnail() ) {

		    $thumb_id = get_post_thumbnail_id();
			$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
			$thumb_url = $thumb_url_array[0];

			echo '<div class="page-header" style="background-image:url(' . $thumb_url . ');">';

			if ( is_single() ) {
				the_title( '<h1 class="entry-title">', '</h1>' );
			} else {
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			}

			echo '</div>';
		}
		else {
		    echo '<div class="page-header no-image">';

		    if ( is_single() ) {
				the_title( '<h1 class="entry-title">', '</h1>' );
			} else {
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			}

		    echo '</div>';
		}

	?>

	<div class="entry-content">
		
		<?php
			the_excerpt();
		?>
		
		<div class="read-more">
			<a href="<?php echo get_permalink(); ?>">Read more</a>
		</div>
	</div><!-- .entry-content -->

	

	<!--<footer class="entry-footer">
		<?php golden_gobi_entry_footer(); ?>
	</footer> -->

</article><!-- #post-## -->
