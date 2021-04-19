<?php
/**
 * Template Name: Company Page Template
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );

?>

<div class="wrapper" id="page-wrapper">

	<div class="container-custom">

		<!-- Feature Image -->
		<section class="feature-image" 
			<?php if ( has_post_thumbnail() ) : ?>
				style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>);">
				<?php endif; ?>

			<div class="overlay"></div>
				<div class="entry-title">
					<?php the_title( '<h1 class="entry-tit">', '</h1>' ); ?>
				</div><!-- .entry-title -->
		</section>

		<main class="site-main" id="main">

			<?php
			while ( have_posts() ) {
				the_post();
				get_template_part( 'loop-templates/content', 'company' );
			}
			?>
		</main><!-- #main -->

		<!-- Counter -->
		<section id="counter">
			<div class="container">
				<?php echo do_shortcode( '[COUNTER_NUMBER id=79]' ); ?>
			</div>
		</section>

	</div>
	
</div><!-- #page-wrapper -->

<?php
get_footer();
