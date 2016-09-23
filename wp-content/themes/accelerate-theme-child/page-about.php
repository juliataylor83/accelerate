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
				<?php the_content(); ?>
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

				<article class="services_individual">
					
					<div class="services_img_1">
						<img src="<?php the_field('image_1'); ?>" alt="Bullseye" />
					</div>
					<div class="services_text_1">
						<h2><?php the_field('services_title_1'); ?></h2>
						<p><?php the_field('services_text_1'); ?></p>
					</div>
			
					<div class="services_text_2">
						<h2><?php the_field('services_title_2'); ?></h2>
						<p><?php the_field('services_text_2'); ?></p>
					</div>
					<div class="services_img_2">
						<img src="<?php the_field('image_2'); ?>" alt="Atom" />
					</div>

					<div class="services_img_3">
						<img src="<?php the_field('image_3'); ?>" alt="Thumbs Up" />
					</div>
					<div class="services_text_3">
						<h2><?php the_field('services_title_3'); ?></h2>
						<p><?php the_field('services_text_3'); ?></p>
					</div>

					<div class="services_text_4">
						<h2><?php the_field('services_title_4'); ?></h2>
						<p><?php the_field('services_text_4'); ?></p>
					</div>
					<div class="services_img_4">
						<img src="<?php the_field('image_4'); ?>" alt="Wand" />
					</div>

				</article>

				<div class="working_with">
					<h2>Interested in working with us?</h2>
					<a class="button" href="<?php echo home_url(); ?>/contact">Contact Us</a>
				</div>

			<?php endwhile; // end of the loop. ?>


		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>