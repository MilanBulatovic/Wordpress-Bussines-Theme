<?php
/**
 * Blog page
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>


<div class="wrapper" id="index-wrapper">

    <div class="container-custom">

		<!-- FEATURE IMAGE -->
	    <section class="feature-image" 
			<?php if ( has_post_thumbnail() ) : ?>
				style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>);">
				<?php endif; ?>

			<div class="overlay"></div>
				<div class="entry-title">
					<?php the_title( '<h1 class="entry-tit">', '</h1>' ); ?>
				</div><!-- .entry-title -->
		</section><!-- .feature-image -->

        <div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">
            <div class="row d-flex flex-column align-items-center justify-content-center pt-5">
                <p class="lead">Imagine Group</p>
                <h1>References</h1>

                <!-- <div class="categories-holder">
                    <?php 
                        //$categories = get_categories( array(
                            //'name'    => array('Active projects', 'Developing zones' , 'Finished project'),
                            //'orderby' => 'name',
                            //'order'   => 'ASC',
                            //'hide-empty'  => 0,
                        //) );

                        //foreach ($categories as $category) {
                            //echo '<p class="lead">' . $category->name . '</p>';
                        //}
                    ?>
                </div>  -->

                

                <main class="site-main d-flex flex-wrap" id="main-ref">

                    <?php
                    if ( have_posts() ) {
                    
                            while ( have_posts() ) {
                                the_post();

                                /*
                                * Include the Post-Format-specific template for the content.
                                * If you want to override this in a child theme, then include a file
                                * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                                */
                                get_template_part( 'loop-templates/content', 'references' );
                            }
                            
                    } else {
                            get_template_part( 'loop-templates/content', 'none' );
                            
                        }
                    ?>

                </main>

                <!-- The pagination component -->
                <?php understrap_pagination(); ?>

            </div><!-- .row -->
        </div><!-- #content -->

    </div>

    <!-- Counter -->
    <section id="counter" class="grey">
        <div class="container">
            <?php echo do_shortcode( '[COUNTER_NUMBER id=79]' ); ?>
        </div>
    </section>

</div><!-- #index-wrapper -->

<?php
get_footer();
