<?php
/**
 * Single post partial template
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<?php echo get_the_post_thumbnail( $post->ID, 'full' ); ?>

	<div class="post-content">

		<header class="date-title">
			<div class="date">
				<?php echo get_the_date('d. m. Y.'); ?>
			</div><!-- .entry-meta -->
			<?php the_title( '<h1 class="post-title">', '</h1>' ); ?>
		</header><!-- .entry-header -->

		<div class="entry-content">

			<?php the_content(); ?>

			<?php
			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
					'after'  => '</div>',
				)
			);
			?>

		</div><!-- .entry-content -->
	</div>
	
</article><!-- #post-## -->
