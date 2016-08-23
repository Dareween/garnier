
<?php
/*
Template Name: Prestation
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
                        
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page-prestation' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
                                
                                // check if the flexible content field has rows of data
                    
            
             if( have_rows('prestation-1') ):
                        

              // loop through the rows of data
                while ( have_rows('prestation-1') ) : the_row();     
                                
                  ?><div class="row prestation col-xs-12"><?php
                                
                    if( have_rows('flexible_content_prestation') ):
                        
                        
                    // loop through the rows of data
                        while ( have_rows('flexible_content_prestation') ) : the_row();
                            
                        if( get_row_layout() == 'bloc-image' ):

                        $image = get_sub_field('visuel_de_la_prestation');

				?>
                                
				 <div class="col-xs-12 col-md-6 image-prestation element"><img src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt'] ?>" /></div>
                                 
			<?php

                        elseif( get_row_layout() == 'bloc-description' ): 
                             
                            ?>
                               
                                <div class="col-xs-12 col-md-6 description-prestation element">
                                <article><h3><?php echo the_sub_field('nom_de_la_prestation'); ?>;</h3>
                                <p><?php echo the_sub_field('sous_titre_presta'); ?></p>
                                <p><?php echo the_sub_field('description_de_la_prestation'); ?></p></article>
                                <a href="<?php echo the_sub_field('url_bouton_prestation'); ?>" class="btn btn-default btn-voir"><?php echo the_sub_field('bouton-voir-prestation'); ?></a>
                                </div>   
                               
                                    <?php
                      

                        endif;

                    endwhile;
                    

                    else :
                        
                     // no layouts found

                    endif;
                     ?></div><?php
                    
                      endwhile;

                    else :

                     // no layouts found
                        
                        

                    endif;

			endwhile; // End of the loop.
			?>
                    
                    <?php

                    

                    ?>
                    
                    

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
