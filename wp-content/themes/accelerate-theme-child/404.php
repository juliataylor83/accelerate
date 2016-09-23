<?php
/**
 * The template for displaying the 404 page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content-404">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>

			<div class="superdog"></div>

			<div class="text-404">
				<h4>Whoops! Looks like you are lost!</h4>
            	<p>Not to worry - Super Dog is here to save the day. <br>He'll lead you <a href="/home">home</a> or back to <a href="/case-studies">work</a> - where would you like to go?</p>
			</div>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>