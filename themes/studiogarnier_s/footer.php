<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package studiogarnier
 */

?>

	</div><!-- #content -->
    <div class="container-fluid">
	<footer id="colophon" class="site-footer" role="contentinfo">
            <div class='logo-footer footer1'>
            </div>
            <div class='footer2'>
                <div class='footer2-1'></div>
                <div class='footer2-2'></div>
                <div class='footer2-3'></div>
            </div>
            
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'studiogarnier' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'studiogarnier' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'studiogarnier' ), 'studiogarnier', '<a href="http://underscores.me/" rel="designer">Vincent Gicquel</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
    </div>><!-- footer .container -->
</div><!-- #page -->

<?php wp_footer(); ?>
    </div>
  </div>
</body>
</html>
