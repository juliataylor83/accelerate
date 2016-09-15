<?php
/**
 * The template for displaying the about page.
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

<section class="home-page-about">
	<div class="site-content-about">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class='homepage-hero'>
				<h1><span>Accelerate</span> is a strategy and marketing agency located in the heart of NYC. Our goal is to build businesses by making our clients visible and making their customers smile.</h1>
			</div>
		<?php endwhile; // end of the loop. ?>
	</div><!-- .container -->
</section><!-- .home-page -->


	<div id="primary" class="site-content-about">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="services">
					<h3>Our Services</h3>
					<p>We take pride in our clients and the content we create for them. <br>Here's a brief overview of our offered services.</p>
				</div>
				<div class="services-individual">
					<?php the_content(); ?>
				</div>
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<div class="site-info-about">
	<h2>Interested in working with us?</h2>
	<a class="button" href="<?php echo home_url(); ?>/contact">Contact Us</a>

<?php get_footer(); ?>