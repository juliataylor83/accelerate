<?php
/**
 * The template for displaying for the archive of case studies
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

			<?php 
			global $query_string;
			query_posts( $query_string.'&order=ASC' );
			while ( have_posts() ) : the_post(); 
				$image_1 = get_field("image_1");
	    		$size = "full";
	    		$services = get_field('services');
				$client = get_field('client');
				$link = get_field('site_link');
			?>

		<article class="case-study">
			<aside class="case-study-sidebar">
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<p><?php echo $services; ?></p>

				<?php the_excerpt(); ?>

				<p><strong><a href="<?php the_permalink(); ?>">View Project</a></strong></p>
			</aside>

			<div class="case-study-images">
				<a href="<?php the_permalink(); ?>">
				<?php if($image_1) {
					echo wp_get_attachment_image( $image_1, $size );
				} ?>
				</a>
			</div>
		
		</article>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>