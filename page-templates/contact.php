<?php
/**
 * Template Name: Contact Page Template
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
			<main class="site-main" id="main">

				<?php
				while ( have_posts() ) {
					the_post();
					get_template_part( 'loop-templates/content', 'contact' );
				}
				?>

			</main><!-- #main -->
	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php
get_footer();