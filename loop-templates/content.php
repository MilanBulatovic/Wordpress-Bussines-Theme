<?php
/**
 * Blog Post page template /Media center
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<div class="col-lg-4 col-md-6">
	<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

		<div class="thumbnail-holder" 
			<?php if ( has_post_thumbnail() ) : ?>
				style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>);">
			<?php endif; ?>
		</div>

		<header class="date-title">

			<?php if ( 'post' === get_post_type() ) : ?>

				<div class="date">
					<?php echo get_the_date('d. m. Y.'); ?>
				</div><!-- .entry-meta -->

			<?php endif; ?>

			<?php
				the_title(
					sprintf( '<h2 class="post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
					'</a></h2>'
				);
			?>

		</header><!-- .entry-header -->

		<div class="excerpt">
			<?php the_excerpt(); ?>
		</div><!-- excerpt -->

		<!-- <footer class="entry-footer"> -->

			<?php //understrap_entry_footer(); ?>

		<!-- </footer> -->

	</article><!-- #post-## -->
	
</div>