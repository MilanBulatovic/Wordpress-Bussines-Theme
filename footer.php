<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

?>

<!-- /<?php //get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?> -->

		<div class="wrapper" id="wrapper-footer">
			<footer class="site-footer" id="colophon">
				<div class="container">
					<div class="row d-flex justify-content-between align-items-center">
						<div class="align start">
							© 2021. All rights reserved.
						</div>
							
						<div class="align end">
							<img src="<?php echo get_template_directory_uri(); ?>/img/sgs-logo.png">
							
						</div>
							
						<div class="align start down">
							Coded by Milan
						</div>
					</div><!-- row end -->
				</div><!-- container end -->
			</footer><!-- #colophon -->
		</div><!-- wrapper end -->

	</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

