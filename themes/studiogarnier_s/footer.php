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
            <div class="row">
                <div class='col-md-12 logo-footer footer1'>
                    
                    <div class='col-md-12'>
                    <img src="<?php echo bloginfo('wpurl');?>/wp-content/themes/studiogarnier_s/img/LogoGARNIER-STUDIOS_blanc-900.png" alt="logo Garnier Studios ">
                    
                    </div>
                      <div class='col-xs-12 footer1-1'>
                          <p class="yapas-photos">Y'a pas photos...</p>
                          <p>Garnier Event pôle événementiel de Garnier Studios. Depuis 1978, Garnier Studios met ses photographes, ses réalisateurs, ses régisseurs, au service de votre image.</p>

                        </div>
                    <div class="row"><div class="hidden-xs col-sm-4"></div><div class="col-xs-7 col-sm-4 trait-qqs-ref2"></div><div class="col-xs-5 col-sm-4"></div>
                </div>
            </div><!-- end row -->
            <div class="row footer2">
                    
                            <div class='col-xs-12 col-md-5 footer2-1'>
                                <img src="<?php echo bloginfo('wpurl');?>/wp-content/themes/studiogarnier_s/img/LogoGARNIER-STUDIOS_blanc-900.png" alt="logo Garnier Studios ">
                    
                                <ul>
                                    <li><a href="#">Habitat.</a></li>
                                    <li><a href="#">Industrie.</a></li>
                                    <li><a href="#">Food.</a></li>
                                    <li><a href="#">Digital.</a></li>
                                    <li><a href="#">Event.</a></li>
                                </ul>
                            </div>
                            <div class='col-xs-12 col-md-4 footer2-2 '>
                                <a href=#" class="btn btn-default btn-contact">Nous contacter</a>
                                <div class="adresse">Garnier Event<br>
                                7 rue Jan Palach<br>
                                BP 31031<br>
                                44801 Saint-Herblain CEDEX<br>
                                tél : 02 51 78 67 70<br>
                                </div>
                                <a href=#">Mentions légales</a><br>
                                <!--<a href=#">Presse</a><br>-->
                                
                            </div>

                            <div class=' hidden-xs hidden-sm col-xs-12 col-md-3 footer2-3'>
                              
                              <a class="twitter-timeline" data-width="420" data-height="400" data-theme="dark" data-link-color="#ff007a" href="https://twitter.com/Garnier_Event">Tweets by Garnier_Event</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                                </div>

                            </div>
                          
                </div><!-- end row -->
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
