<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package underscores
 */

?>

<article class="brick entry format-standard animate-this">
    <div class="entry-thumb">
        <a href="<?php esc_html( the_permalink() ); ?>" class="thumb-link">
            <!-- <img src="<?php echo get_template_directory_uri(); ?>/images/thumbs/diagonal-building.jpg" alt="building"> -->
            <?php
                if ( has_post_thumbnail() ) :
                    the_post_thumbnail();
                endif;
            ?>
        </a>
    </div>

    <div class="entry-text">
        <div class="entry-header">
            <div class="entry-meta">
                <span class="cat-links">
                    <a href="#">Design</a>
                    <a href="#">Photography</a>
                </span>
            </div>
            <h1 class="entry-title"><a href="<?php esc_html( the_permalink() ); ?>"><?php the_title(); ?></a></h1>
        </div>
        <div class="entry-excerpt">
            <?php the_excerpt(); ?>
        </div>
    </div>
</article> <!-- end article -->
