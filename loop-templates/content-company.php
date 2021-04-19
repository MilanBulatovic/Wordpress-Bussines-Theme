<?php
/**
 * Template for content in company.php
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<div id="wrapper-company">

	<!-- Content -->
	<section class="text-center">
		<div class="container">
			<p class="lead">What we do</p>
			<h1>We invest in</h1>

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

								<div class="col-lg-4 col-md-6">
									<a href="<?php the_permalink();?>" class="link-card">
										<div class="card">
											<div class="icon-holder">
												<?php 
													$image = get_field('icon');
													if( !empty( $image ) ): ?>
														<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="icon-investments"/>
												<?php endif; ?>
												<div class="on-hover"></div>
											</div>
											<div class="headline-card">
												<h4 class="a-padding"><?php echo get_the_title(); ?></h4>
											</div>
										</div>
									</a>
								</div>
							<?php 
							endwhile;
						endif;
					wp_reset_postdata();
				?>
    
            </div>
		</div>
	</section>

	<div class="entry-footer">
		<?php edit_post_link( __( 'Edit', 'understrap' ), '<span class="edit-link">', '</span>' ); ?>
	</div>

</div>

