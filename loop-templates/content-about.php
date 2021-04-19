<?php
/**
 * Template for content in about-us.php
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<div id="wrapper-about">
	

	<!-- CONTENT -->
	<section class="entry-content">
		<div class="container">
			<p class="lead">Imagine Group</p>
			<h1>About Us</h1>
			<div class="row p-3">
				<?php the_content(); ?>
			</div>
		</div>
	</section><!-- .entry-content -->

	<!-- EMPLOYEES -->
	<section class="employees">
		<p class="lead">More about us</p>
		<h1>Company managment</h1>
		<?php echo do_shortcode('[wpteam id="105"]'); ?>
	</section>

	<section class="container social-responsibility text-center">
		<h1 class="m-btm">Business headline work</h1>
		<div class="row">
			<div class="col-lg-6 text-left">
				<p>Pellentesque ut neque. Nunc sed turpis. Suspendisse feugiat. Proin magna. Vivamus elementum semper nisi.
				Cras id dui. Suspendisse faucibus, nunc et pellentesque egestas, lacus ante convallis tellus, vitae iaculis lacus elit id tortor. Praesent ac sem eget est egestas volutpat. Donec vitae orci sed dolor rutrum auctor. Suspendisse pulvinar, augue ac venenatis condimentum, sem libero volutpat nibh, nec pellentesque velit pede quis nunc.</p>
				<a href="#" class="custom-button">Opširnije</a>
			</div>
			
		</div>
	</section>
	
	<div class="entry-footer">

		<?php edit_post_link( __( 'Edit', 'understrap' ), '<span class="edit-link">', '</span>' ); ?>

	</div><!-- .entry-footer -->

</div>

