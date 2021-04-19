<?php
/**
 * Single investment post template
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$image = get_field('manager_picture');
$size = 'medium_large'; // (thumbnail, medium, large, full or custom size)
$name = get_field('manager_name');
$contact = get_field('manager_contact');

?>

	
	
	<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

		<div class="entry-content">

			<?php echo get_the_post_thumbnail( $post->ID, /*'large'*/ ); ?>
			<div class="container p-3">
				<?php the_title( '<h1 class="investments-post-title">', '</h1>' ); ?>
				<?php the_content(); ?>
			</div>
		</div><!-- .entry-content -->
		<div class="manager-wrapper">
			<div class="manager-image">
				<?php 
					if( $image ) {
						echo wp_get_attachment_image( $image, $size);
					}
				?>
			</div>
		
			<div class="info-holder">
				<h2><?php echo $name ?></h2>
				<p class="lead"><?php echo $contact ?></p>
			</div>
		</div>

	</article><!-- #post-## -->
