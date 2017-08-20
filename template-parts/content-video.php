<?php
/**
 * Template part for displaying video posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package abstract
 */
?>

<article class="brick entry format-video animate-this">
    <div class="entry-thumb video-image">
        <?php
            $video_attachments = get_posts( array(
                'post_parent' => $post->ID,
                'post_type' => 'attachment',
                'post_mime_type' => 'video'
            ) );

            $video_attachment_url = wp_get_attachment_url( $video_attachments[0]->ID );
        ?>
        <a href="<?php echo esc_html( $video_attachment_url ); ?>" data-lity>
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
                    <a href="#">Branding</a>
                </span>
            </div>
            <h1 class="entry-title"><a href="<?php esc_html( the_permalink() ); ?>"><?php the_title(); ?></a></h1> 
        </div>
        <div class="entry-excerpt">
            <?php the_excerpt(); ?>
        </div>
    </div>
</article>
<!-- end article -->
            