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
          <div class="container">
            
            <div class="row footer2">
                         <?php if ( ! is_active_sidebar( 'footer-widget' ) ) {
                                             return;
                                                }
                                             ?>
                                    
                                            <?php dynamic_sidebar( 'footer-widget' ); ?>
                            

               
		<!--<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'studiogarnier' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'studiogarnier' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'studiogarnier' ), 'studiogarnier', '<a href="http://underscores.me/" rel="designer">Vincent Gicquel</a>' ); ?>
		</div><!-- .site-info -->
                 
          </div>
       </footer><!-- #colophon -->
    </div><!-- end.container -->
</div><!-- #page -->

<?php wp_footer(); ?>
    
</body>
</html>
