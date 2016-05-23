<?php
/**
 * Template Name: Homepage
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package golden-gobi
 */

get_header(); ?>

	<div id="carousel" class="carousel slide" data-ride="carousel">

	  <!-- Wrapper for slides -->
	  <div class="carousel-inner" role="listbox">
	    
	    <?php if( get_field('image_1') ): ?>
			<div class="item active">
				<div class="carousel-image" style="background-image:url('<?php the_field('image_1'); ?>');"></div>
			</div>
		<?php endif; ?>

		<?php if( get_field('image_2') ): ?>
			<div class="item">
				<div class="carousel-image" style="background-image:url('<?php the_field('image_2'); ?>');"></div>
			</div>
		<?php endif; ?>

		<?php if( get_field('image_3') ): ?>
			<div class="item">
				<div class="carousel-image" style="background-image:url('<?php the_field('image_3'); ?>');"></div>
			</div>
		<?php endif; ?>

		<?php if( get_field('image_4') ): ?>
			<div class="item">
				<div class="carousel-image" style="background-image:url('<?php the_field('image_4'); ?>');"></div>
			</div>
		<?php endif; ?>

		<?php if( get_field('image_5') ): ?>
			<div class="item">
				<div class="carousel-image" style="background-image:url('<?php the_field('image_5'); ?>');"></div>
			</div>
		<?php endif; ?>

		<?php if( get_field('image_6') ): ?>
			<div class="item">
				<div class="carousel-image" style="background-image:url('<?php the_field('image_6'); ?>');"></div>
			</div>
		<?php endif; ?>

		<a class="left carousel-buttons" href="#carousel" role="button" data-slide="prev">
			<i class="fa fa-angle-left"></i>
		</a>

		<a class="right carousel-buttons" href="#carousel" role="button" data-slide="next">
			<i class="fa fa-angle-right"></i>
		</a>

	  </div>

	</div>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<div class="homepage secondary-content col-md-12">
		
		<div class="row">

			<div class="col-md-5">

				<div class="latest-news">

					<h2>Latest news</h2>

						<ul>
						<?php

						    $args = array(
						    	'numberposts' => '3',
						    );
						    
						    $recent_posts = wp_get_recent_posts( $args );

						    foreach( $recent_posts as $recent ){
						        echo '<li class="recent-post"><a class="post-title" href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >'. get_the_post_thumbnail($recent['ID'], array(200,133)) . ' <h4>' .   $recent["post_title"].'</h4></a></li>';
						    }
						?>
						</ul>
					

				</div>

			</div>


			<div class="col-md-5 col-md-offset-2">

				<div class="facebook-page">

					<div class="fb-page" data-href="https://www.facebook.com/GoldenGobiGuesthouseTours" data-height="400" data-width="500" data-tabs="timeline" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/GoldenGobiGuesthouseTours"><a href="https://www.facebook.com/GoldenGobiGuesthouseTours">Golden Gobi guesthouse &amp; tours</a></blockquote></div></div>

				</div>

			</div>

		</div>
	</div>


<?php
get_footer();
