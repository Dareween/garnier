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
   
        <footer id="colophon" class="site-footer" role="contentinfo">
          <div class="container-fluid">
            <div class="row">
             <div class="container">
              <div class="row">
                <div class='col-md-12 logo-footer footer1'>
                    
                    <div class='col-md-5'>
                    <img src="<?php echo bloginfo('wpurl');?>/wp-includes/images/studiogarnier/LogoGARNIER-STUDIOS_blanc-900.png" alt="logo Garnier Studios ">
                    
                    </div>
                </div><!-- end row -->
                <div class="row">
                    <div class='footer2'>
                        <div class='col-xs-12 col-md-5 footer2-1'>
                            Garnier Event est une marque du groupe <span>Garnier Studio</span>.<br>
    Depuis 1978, le groupe Garnier Studio réunit des photographes, des stylistes, des modeleurs 3D, au service de votre image.

                    </div>
                    <div class='col-xs-12 col-md-4 footer2-2 '>
                        <div class="adresse">Garnier Event<br>
                        7 rue Jan Palach<br>
                        BP 310031<br>
                        44801 Saint-Herblain CEDEX<br>
                        tél : 02 51 78 67 70<br>
                        </div>
                        <a href=#" class="btn btn-default btn-contact">Nous contacter</a>
                    </div>
                        
                    <div class='col-xs-12 col-md-3 footer2-3'>
                        <div><a href="#">Presse</a></div>
                        
                        <div>Nous suivre
                        <div id="hr"><hr></div>
                        <ul class="reseaux-sociaux-footer">
                                        <li><a href="https://twitter.com/Garnier_Event"><img src="<?php echo bloginfo('wpurl');?>/wp-includes/images/studiogarnier/twitter-footer-300.png" alt="twitter"></a></li>
                                        <li><a href="https://www.facebook.com/GarnierEvent"><img src="<?php echo bloginfo('wpurl');?>/wp-includes/images/studiogarnier/facebook-footer-300.png" alt="facebook"></a></li>
                                         <li><a href="https://vimeo.com/studiosgarnier"><img src="<?php echo bloginfo('wpurl');?>/wp-includes/images/studiogarnier/vimeo-footer-300.png" alt="vimeo"></a></li>
                                    
                                    </ul>
                        </div>
                        
                        <div><a href="#">Mentions légales et crédits</a></div>
                    </div>
                  </div><!-- end footer2 -->
            </div><!-- end row -->
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'studiogarnier' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'studiogarnier' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'studiogarnier' ), 'studiogarnier', '<a href="http://underscores.me/" rel="designer">Vincent Gicquel</a>' ); ?>
		</div><!-- .site-info -->
                 </div><!-- end.container -->
               </div><!-- end row -->
              </div><!-- footer .container -->
       </footer><!-- #colophon -->
    
</div><!-- #page -->

<?php wp_footer(); ?>
    </div>
  </div>
</body>
</html>
