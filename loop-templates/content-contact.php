<?php
/**
 * Template for content in contact.php
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<div id="wrapper-contact">

	<!-- Feature Image -->
	<section class="feature-image contact-img" 
		<?php if ( has_post_thumbnail() ) : ?>
			style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>);">
			<?php endif; ?>
	</section>
    <div class="entry-info">
        <?php the_content(); ?>
    </div>

	<!-- Content -->
	<section class="hr-team text-center">
		<div class="container">
			<p class="lead">Meet our HR</p>
			<h1>Our team</h1>

            <div class="row">
                <div class="col-lg-4">
                    <div class="box first"></div>
                </div>
                <div class="col-lg-4">
                    <div class="box second"></div>
                </div>
                <div class="col-lg-4">
                    <div class="box third"></div>
                </div>
            </div>
		</div>
	</section>

	<div class="entry-footer">
		<?php edit_post_link( __( 'Edit', 'understrap' ), '<span class="edit-link">', '</span>' ); ?>
	</div>

</div>