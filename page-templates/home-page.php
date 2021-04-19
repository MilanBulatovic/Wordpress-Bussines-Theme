<?php
/**
 * Template Name: Home Page Template
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

?>

<div class="wrapper" id="full-width-page-wrapper">
	<div class="container-custom">

		<!-- Hero Slider -->
		<section class="hero-slider">
			<?php echo do_shortcode('[wonderplugin_slider id=1]'); ?>
		</section>

		<!-- About Us -->
		<section id="about-us">
			<div class="container">
				<div class="about-us-holder">
				<?php
					$args = array(
						'post_type' => 'page',
						'page_id' => '39'
					); 
					// The Query
					$the_query = new WP_Query( $args );
					
					// The Loop
					if ( $the_query->have_posts() ) { ?>

						<div class="row">

						<?php
						while ( $the_query->have_posts() ) {
							$the_query->the_post(); ?>

							<div class="col-lg-6 animate-entry">
								<?php echo '<h1>'. get_the_title() . '</h1>'; ?>
							</div>
							
							<div class="col-lg-6 d-flex flex-column align-items-end animate-entry">
								<?php echo the_excerpt(); ?>
							</div>
							
						<?php }
						/* Restore original Post Data */
						wp_reset_postdata();
					} else {
						// no posts found
					} ?>
					</div>
				</div>
			</div>
		</section>

		<!-- Investments -->
		<section id="investment">
			<div class="container text-center">
				<p>Imagine Group</p>
				<h1>We invest in</h1>
				<div class="row d-flex justify-content-between flex-wrap">

				<?php
					$args = array(
							'post_type' => 'investicije',
							'posts_per_page' => 6,
							'order' => 'ASC'
						); 
						// The Query
						$the_query = new WP_Query( $args );
						
						// The Loop
						if ( $the_query->have_posts() ) : ?>

							<div class="row">

							<?php
							while ( $the_query->have_posts() ) :
								$the_query->the_post(); ?>

								<div class="col-lg-2 col-md-6 drop-in">
									<div class="building test">
										
										<?php 
											$image = get_field('icon');
											if( !empty( $image ) ): ?>
												<a href="<?php the_permalink();?>"><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="icon" /></a>
										<?php endif; ?>
										<a href="<?php the_permalink();?>"><h4><?php echo get_the_title(); ?></h4></a>

									</div>
								</div>
							<?php 
							endwhile;
						endif;
					wp_reset_postdata();
				?>
							
				</div>
			</div>
		</section>

		<!-- Counter -->
		<section id="counter">
			<div class="container">
				<?php echo do_shortcode( '[COUNTER_NUMBER id=51]' ); ?>
			</div>
		</section>

	</div><!-- .container-custom -->
</div><!-- #full-width-page-wrapper -->

<?php
get_footer();
