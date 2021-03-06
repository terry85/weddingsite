<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wedding
 */

?>


	</div><!-- #content -->
        

	<footer id="colophon" class="site-footer">
		<div class="site-info">
                    
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'wedding' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				//printf( esc_html__( 'Proudly powered by %s', 'wedding' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				//printf( esc_html__( 'Theme: %1$s by %2$s.', 'wedding' ), 'wedding', '<a href="http://renatabogdan.com">Tereza Kostenko</a>' );
				?>
		</div><!-- .site-info -->
                <div id="footer-lace"> </div>
                <div id="footer-beforelace"> </div>
                <div id="footer-top"> </div>
                <div id="footer">  </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
