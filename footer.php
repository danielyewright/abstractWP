<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package underscores
 */

?>

	</section><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'underscores' ) ); ?>"><?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'underscores' ), 'WordPress' );
			?></a>
			<span class="sep"> | </span>
			<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'underscores' ), 'underscores', '<a href="http://underscores.me/">Underscores.me</a>' );
			?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->





<footer>
    <div class="footer-main">
        <div class="row">
            <div class="col-four tab-full mob-full footer-info">
                <h4>About Our Site</h4>
                <p>
                    Lorem ipsum Ut velit dolor Ut labore id fugiat in ut fugiat nostrud qui in dolore commodo eu magna Duis cillum dolor officia esse mollit proident Excepteur exercitation nulla. Lorem ipsum In reprehenderit commodo aliqua irure labore.
                </p>
            </div> <!-- end footer-info -->

            <div class="col-two tab-1-3 mob-1-2 site-links">
                <h4>Site Links</h4>
                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Terms</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </div> <!-- end site-links -->

            <div class="col-two tab-1-3 mob-1-2 social-links">
                <h4>Social</h4>
                <ul>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Dribbble</a></li>
                    <li><a href="#">Google+</a></li>
                    <li><a href="#">Instagram</a></li>
                </ul>
            </div> <!-- end social links -->

            <div class="col-four tab-1-3 mob-full footer-subscribe">
                <h4>Subscribe</h4>
                <p>Keep yourself updated. Subscribe to our newsletter.</p>
                <div class="subscribe-form">
                    <form id="mc-form" class="group" novalidate="true">
                        <input type="email" value="" name="dEmail" class="email" id="mc-email" placeholder="Type &amp; press enter" required="">
                        <input type="submit" name="subscribe" >
                        <label for="mc-email" class="subscribe-message"></label>
                    </form>
                </div>
            </div> <!-- end subscribe -->
        </div> <!-- end row -->
    </div> <!-- end footer-main -->

    <div class="footer-bottom">
        <div class="row">
            <div class="col-twelve">
                <div class="copyright">
                    <span>© Copyright <?php bloginfo( 'name' ); ?> <?php the_date( 'Y' ); ?></span>
                    <span>
                        <?php
                            /* translators: 1: Theme name, 2: Theme author. */
                            printf( esc_html__( 'Theme: %1$s by %2$s.', 'abstract' ), 'Abstract', '<a href="http://www.styleshout.com">Styleshout</a>' );
                        ?>
                    </span>
                    <span>
                        <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'abstract' ) ); ?>"><?php
                            /* translators: %s: CMS name, i.e. WordPress. */
                            printf( esc_html__( 'Proudly powered by %s', 'abstract' ), 'WordPress' );
                            ?></a>
                    </span>
                </div>

                <div id="go-top">
                    <a class="smoothscroll" title="Back to Top" href="#top"><i class="icon icon-arrow-up"></i></a>
                </div>
            </div>
        </div>
    </div> <!-- end footer-bottom -->
</footer>

<div id="preloader">
    <div id="loader"></div>
</div>

<?php wp_footer(); ?>

</body>
</html>
