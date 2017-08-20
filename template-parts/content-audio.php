<?php
/**
 * Template part for displaying audio posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package abstract
 */
?>

<!-- format audio here -->
<article class="brick entry format-audio animate-this">
    <div class="entry-thumb">
        <a href="single-audio.html" class="thumb-link">
            <?php
                if ( has_post_thumbnail() ) :
                    the_post_thumbnail();
                endif;
            ?>
        </a>
        <div class="audio-wrap">
            <!-- <audio id="player" src="<?php echo get_template_directory_uri(); ?>/media/AirReview-Landmarks-02-ChasingCorporate.mp3" width="100%" height="42" controls="controls"></audio> -->
            <?php
                $audio_attachments = get_posts( array(
                    'post_parent' => $post->ID,
                    'post_type' => 'attachment',
                    'post_mime_type' => 'audio'
                ) );

                $audio_attachment_url = wp_get_attachment_url( $audio_attachments[0]->ID );
            ?>
            <audio id="player" src="<?php echo esc_html( $audio_attachment_url ); ?>" width="100%" height="42" controls="controls"></audio>
        </div>
    </div>

    <div class="entry-text">
        <div class="entry-header">
            <div class="entry-meta">
                <span class="cat-links">
                    <?php if ( has_category() ) : ?>
                        <a href="#"><?php echo get_the_category_list(); ?></a>
                    <?php endif; ?>
                </span>
            </div>
            <h1 class="entry-title"><a href="single-audio.html"><?php the_title(); ?>.</a></h1>
        </div>
        <div class="entry-excerpt">
            <?php the_excerpt(); ?>
        </div>
    </div>
</article> <!-- /article -->
