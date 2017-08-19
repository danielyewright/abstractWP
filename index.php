<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package underscores
 */

get_header(); ?>

    <section id="bricks">
        <div class="row masonry">
            <!-- brick-wrapper -->
            <div class="bricks-wrapper">
                <div class="grid-sizer"></div>

                <?php
                if ( have_posts() ) :

                    if ( is_home() || is_front_page() ) : ?>
                        <div class="brick entry featured-grid animate-this">
                            <div class="entry-content">
                                <div id="featured-post-slider" class="flexslider">
                                    <ul class="slides">
                                        <li>
                                            <div class="featured-post-slide">
                                                <div class="post-background" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/thumbs/featured/featured-1.jpg');"></div>
                                                <div class="overlay"></div>
                                                <div class="post-content">
                                                    <ul class="entry-meta">
                                                        <li>September 06, 2016</li>
                                                        <li><a href="#" >Naruto Uzumaki</a></li>
                                                    </ul>
                                                    <h1 class="slide-title"><a href="single-standard.html" title="">Minimalism Never Goes Out of Style</a></h1>
                                                </div>
                                            </div>
                                        </li> <!-- /slide -->
                                        <li>
                                            <div class="featured-post-slide">
                                                <div class="post-background" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/thumbs/featured/featured-2.jpg');"></div>
                                                <div class="overlay"></div>
                                                <div class="post-content">
                                                    <ul class="entry-meta">
                                                        <li>August 29, 2016</li>
                                                        <li><a href="#">Sasuke Uchiha</a></li>
                                                    </ul>
                                                    <h1 class="slide-title"><a href="single-standard.html" title="">Enhancing Your Designs with Negative Space</a></h1>
                                                </div>
                                            </div>
                                        </li> <!-- /slide -->
                                        <li>
                                            <div class="featured-post-slide">
                                                <div class="post-background" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/thumbs/featured/featured-3.jpg');"></div>
                                                <div class="overlay"></div>
                                                <div class="post-content">
                                                    <ul class="entry-meta">
                                                        <li>August 27, 2016</li>
                                                        <li><a href="#" class="author">Naruto Uzumaki</a></li>
                                                    </ul>
                                                    <h1 class="slide-title"><a href="single-standard.html" title="">Music Album Cover Designs for Inspiration</a></h1>
                                                </div>
                                            </div>
                                        </li> <!-- end slide -->
                                    </ul> <!-- end slides -->
                                </div> <!-- end featured-post-slider -->
                            </div> <!-- end entry content -->
                        </div>

                    <?php
                    endif;

                    /* Start the Loop */
                    while ( have_posts() ) : the_post();

                        /*
                         * Include the Post-Format-specific template for the content.
                         * If you want to override this in a child theme, then include a file
                         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                         */
                        get_template_part( 'template-parts/content', get_post_format() );

                    endwhile;

                    the_posts_navigation();

                else :

                    get_template_part( 'template-parts/content', 'none' );

                endif; ?>

                </div>
            </div>
        </div>
    </section>

<?php
// get_sidebar();
get_footer();
