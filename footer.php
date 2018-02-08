<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>

	</div><!-- #content -->

	<div class="columns footer-bordered">
		<div class="column">
			<footer id="colophon" class="site-footer">
				<div class="site-info">
					<a href="<?php echo esc_url( __( 'https://wordpress.org/', '_s' ) ); ?>"><?php
						/* translators: %s: CMS name, i.e. WordPress. */
						printf( esc_html__( 'Proudly powered by %s', '_s' ), 'WordPress' );
					?></a>
					<span class="sep"> | </span>
					<?php
						/* translators: 1: Theme name, 2: Theme author. */
						printf( esc_html__( 'Tenor by Edward M.', '_s' ), '_s', '<a href="http://bigewiki.org/tenor/">Edward M.</a>' );
					?>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- column -->
	</div><!-- columns -->
<!-- these close divs in header.php -->
</div><!-- column -->
</div><!-- columns -->
</div><!-- container -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

