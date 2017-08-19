<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package underscores
 */

get_header(); ?>

    <section id="content-wrap" class="blog-single">
        <div class="row">
            <div class="col-twelve">

            <?php
            while ( have_posts() ) : the_post(); ?>

                <article class="format-standard">
                    <div class="content-media">
                        <div class="post-thumb">
                            <?php
                                if ( has_post_thumbnail() ) :
                                    the_post_thumbnail();
                                endif;
                            ?>
                        </div>
                    </div>

                    <div class="primary-content">
                        <h1 class="page-title"><?php the_title(); ?></h1>

                        <ul class="entry-meta">
                            <li class="date"><?php the_date( 'F j, Y' ); ?></li>
                            <li class="cat"><a href="">Wordpress</a><a href="">Design</a></li>
                        </ul>

                        <?php the_content(); ?>

                        <p class="tags">
                            <span>Tagged in :</span>
                            <a href="#">orci</a><a href="#">lectus</a><a href="#">varius</a><a href="#">turpis</a>
                        </p>

                        <div class="author-profile">
                            <img src="<?php echo esc_attr_e( get_template_directory_uri() ); ?>/images/avatars/user-05.jpg" alt="">

                            <div class="about">
                                <h4><a href="#"><?php echo get_the_author_meta( 'display_name' ); ?></a></h4>

                                <p>Alias aperiam at debitis deserunt dignissimos dolorem doloribus, fuga fugiat impedit laudantium magni maxime nihil nisi quidem quisquam sed ullam voluptas voluptatum. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </p>

                                <ul class="author-social">
                                    <li><a href="#">Facebook</a></li>
                                    <li><a href="#">Twitter</a></li>
                                    <li><a href="#">GooglePlus</a></li>
                                    <li><a href="#">Instagram</i></a></li>
                                </ul>
                            </div>
                        </div> <!-- end author-profile -->
                    </div>

                    <div class="pagenav group">
                        <div class="prev-nav">
                            <a href="#" rel="prev">
                                <span>Previous</span>
                                Tips on Minimalist Design
                            </a>
                        </div>
                        <div class="next-nav">
                            <a href="#" rel="next">
                                <span>Next</span>
                                Less Is More
                            </a>
                        </div>
                    </div>
                </article>

                <?php

                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;

                ?>

            <?php endwhile; ?>

		    </div>
	    </div>

        <div class="comments-wrap">
            <div id="comments" class="row">
                <div class="col-full">
                    <h3>5 Comments</h3>
                    <!-- commentlist -->
                    <ol class="commentlist">
                        <li class="depth-1">
                            <div class="avatar">
                                <img width="50" height="50" class="avatar" src="<?php echo esc_attr_e( get_template_directory_uri() ); ?>/images/avatars/user-01.jpg" alt="">
                            </div>

                            <div class="comment-content">
                                <div class="comment-info">
                                    <cite>Itachi Uchiha</cite>
                                    <div class="comment-meta">
                                        <time class="comment-time" datetime="2014-07-12T23:05">Jul 12, 2014 @ 23:05</time>
                                        <span class="sep">/</span><a class="reply" href="#">Reply</a>
                                    </div>
                                </div>

                                <div class="comment-text">
                                    <p>Adhuc quaerendum est ne, vis ut harum tantas noluisse, id suas iisque mei. Nec te inani ponderum vulputate,
                                        facilisi expetenda has et. Iudico dictas scriptorem an vim, ei alia mentitum est, ne has voluptua praesent.</p>
                                </div>
                            </div>
                        </li>

                        <li class="thread-alt depth-1">
                            <div class="avatar">
                                <img width="50" height="50" class="avatar" src="<?php echo esc_attr_e( get_template_directory_uri() ); ?>/images/avatars/user-04.jpg" alt="">
                            </div>

                            <div class="comment-content">
                                <div class="comment-info">
                                    <cite>John Doe</cite>
                                    <div class="comment-meta">
                                        <time class="comment-time" datetime="2014-07-12T24:05">Jul 12, 2014 @ 24:05</time>
                                        <span class="sep">/</span><a class="reply" href="#">Reply</a>
                                    </div>
                                </div>
                                <div class="comment-text">
                                    <p>Sumo euismod dissentiunt ne sit, ad eos iudico qualisque adversarium, tota falli et mei. Esse euismod
                                        urbanitas ut sed, et duo scaevola pericula splendide. Primis veritus contentiones nec ad, nec et
                                        tantas semper delicatissimi.</p>
                                </div>
                            </div>

                            <ul class="children">
                                <li class="depth-2">
                                    <div class="avatar">
                                        <img width="50" height="50" class="avatar" src="<?php echo esc_attr_e( get_template_directory_uri() ); ?>/images/avatars/user-03.jpg" alt="">
                                    </div>

                                    <div class="comment-content">
                                        <div class="comment-info">
                                            <cite>Kakashi Hatake</cite>
                                            <div class="comment-meta">
                                                <time class="comment-time" datetime="2014-07-12T25:05">Jul 12, 2014 @ 25:05</time>
                                                <span class="sep">/</span><a class="reply" href="#">Reply</a>
                                            </div>
                                        </div>

                                        <div class="comment-text">
                                            <p>Duis sed odio sit amet nibh vulputate
                                                cursus a sit amet mauris. Morbi accumsan ipsum velit. Duis sed odio sit amet nibh vulputate
                                                cursus a sit amet mauris</p>
                                        </div>
                                    </div>

                                    <ul class="children">
                                        <li class="depth-3">
                                            <div class="avatar">
                                                <img width="50" height="50" class="avatar" src="<?php echo esc_attr_e( get_template_directory_uri() ); ?>/images/avatars/user-04.jpg" alt="">
                                            </div>

                                            <div class="comment-content">
                                                <div class="comment-info">
                                                    <cite>John Doe</cite>
                                                    <div class="comment-meta">
                                                        <time class="comment-time" datetime="2014-07-12T25:15">July 12, 2014 @ 25:15</time>
                                                        <span class="sep">/</span><a class="reply" href="#">Reply</a>
                                                    </div>
                                                </div>

                                                <div class="comment-text">
                                                    <p>Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est
                                                        etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="depth-1">
                            <div class="avatar">
                                <img width="50" height="50" class="avatar" src="<?php echo esc_attr_e( get_template_directory_uri() ); ?>/images/avatars/user-02.jpg" alt="">
                            </div>

                            <div class="comment-content">
                                <div class="comment-info">
                                    <cite>Shikamaru Nara</cite>
                                    <div class="comment-meta">
                                        <time class="comment-time" datetime="2014-07-12T25:15">July 12, 2014 @ 25:15</time>
                                        <span class="sep">/</span><a class="reply" href="#">Reply</a>
                                    </div>
                                </div>

                                <div class="comment-text">
                                    <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.</p>
                                </div>
                            </div>
                        </li>
                    </ol> <!-- Commentlist End -->

                    <!-- respond -->
                    <div class="respond">
                        <h3>Leave a Comment</h3>
                        <form name="contactForm" id="contactForm" method="post" action="">
                            <fieldset>
                                <div class="form-field">
                                    <input name="cName" type="text" id="cName" class="full-width" placeholder="Your Name" value="">
                                </div>
                                <div class="form-field">
                                    <input name="cEmail" type="text" id="cEmail" class="full-width" placeholder="Your Email" value="">
                                </div>
                                <div class="form-field">
                                    <input name="cWebsite" type="text" id="cWebsite" class="full-width" placeholder="Website"  value="">
                                </div>
                                <div class="message form-field">
                                    <textarea name="cMessage" id="cMessage" class="full-width" placeholder="Your Message" ></textarea>
                                </div>
                                <button type="submit" class="submit button-primary">Submit</button>
                            </fieldset>
                        </form> <!-- Form End -->
                    </div> <!-- Respond End -->
                </div> <!-- end col-full -->
            </div> <!-- end row comments -->
        </div>
    </section>

<?php
// get_sidebar();
get_footer();
