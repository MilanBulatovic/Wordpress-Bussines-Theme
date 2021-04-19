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
	    <section class="feature-image media-center">
		    <div class="overlay"></div>
			<div class="entry-title">
				<?php single_post_title( '<h1 class="entry-tit">', '</h1>' ); ?>
			</div><!-- .entry-title -->
	    </section><!-- .feature-image -->
	
        <div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">
            <div class="row d-flex flex-column align-items-center justify-content-center pt-5">
                <p class="lead">Imagine Group</p>
                <h1>News - Blog</h1>

                <div class="categories-holder">
                    <?php 
                        $categories = get_categories( array(
                            'name'    => array('Recent news', 'Social responsibility'),
                            'orderby' => 'name',
                            'order'   => 'ASC',
                            'hide-empty'  => 0,
                        ) );

                        foreach ($categories as $category) {
                        echo '<a href="' . get_category_link($category->term_id) . '" class="custom-button sidebar-links">' . $category->name . '</a>';
                        }
                    ?>
                </div>

                <main class="site-main d-flex flex-wrap" id="main">

                    <?php
                    if ( have_posts() ) {
                    
                            while ( have_posts() ) {
                                the_post();

                                /*
                                * Include the Post-Format-specific template for the content.
                                * If you want to override this in a child theme, then include a file
                                * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                                */
                                get_template_part( 'loop-templates/content', get_post_format() );
                            }
                            
                    } else {
                            get_template_part( 'loop-templates/content', 'none' );
                            
                        }
                    ?>

                </main><!-- #main -->

                <!-- The pagination component -->
                <?php understrap_pagination(); ?>

            </div><!-- .row -->
        </div><!-- #content -->
        
    </div>

    <section id="counter" class="grey">
        <div class="container">
            <?php echo do_shortcode( '[COUNTER_NUMBER id=79]' ); ?>
        </div>
    </section>

</div><!-- #index-wrapper -->

<?php
get_footer();
