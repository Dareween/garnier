
<?php
/*
Template Name: Prestation
*/

get_header(); ?>

	<div id="primary" class="content-area page-prestations">
		<main id="main" class="site-main" role="main">
                        
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page-prestation' );

                                ?><div class="lien-ancre-animations" ><a href="#ancre-animations"><img src="<?php echo bloginfo('wpurl');?>/wp-content/themes/studiogarnier_s/img/FlecheGrandeRose-01.png" alt="plus d'infos"></a></div>
                                <div id="ancre-animations"></div>
                                <?php
                            if( have_rows('prestation-1') ):


                             // loop through the rows of data
                               while ( have_rows('prestation-1') ) : the_row();     

                                ?><div class="row prestation"><?php

                                   if( have_rows('flexible_content_prestation') ):


                                   // loop through the rows of data
                                       while ( have_rows('flexible_content_prestation') ) : the_row();

                                            if( get_row_layout() == 'bloc-image' ):
                                                
                                                the_field('video'); 
                                                if( get_sub_field('video') ): ?>
                                                <div class="col-xs-12 col-md-6 image-prestation element"><div class="embed-container"><?php the_sub_field('video'); ?></div></div>
                                                <?php
                                                else:
                                                $image = get_sub_field('visuel_de_la_prestation');
                                                $lienImage = get_sub_field('url_bouton_prestation');
                                              
                                                ?>
                                                <div class="col-xs-12 col-md-6 image-prestation element"><img src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt'] ?>" /></div>
                                                <?php endif;
                                            
                                            
                                            elseif( get_row_layout() == 'bloc-description' ): 
                                                ?>

                                               <div class="col-xs-12 col-md-6 description-prestation element">
                                                   
                                                   <article class="content-prestation">
                                                       <h3><a href="<?php echo the_sub_field('url_bouton_prestation'); ?>" class="h3-animation"><?php echo the_sub_field('nom_de_la_prestation'); ?></a></h3>                                              
                                                        <?php echo the_sub_field('description_de_la_prestation'); ?>
                                                        <a href="<?php echo the_sub_field('url_bouton_prestation'); ?>" class="btn btn-default btn-voir"><?php echo the_sub_field('bouton-voir-prestation'); ?></a>
                                                   </article>
                                               
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
                        
                        

                            endif;?>
                                <div class ="retrouvez-aussi">
                             
                                    <p><?php echo the_field('retrouvez_aussi'); ?><br>                                            
                                    <a href="<?php echo the_field('prestation-suivante'); ?>" class="btn btn-default btn-voir"><?php echo the_field('prestation-suivante'); ?></a>
                                  </p>
                                </div>  
                             
<?php 
			endwhile; // End of the loop.
			?>
                    
                    <?php if ( get_edit_post_link() ) : ?>
                            <footer class="entry-footer">
                                <?php
				edit_post_link(
					sprintf(
						/* translators: %s: Name of current post */
						esc_html__( 'Edit %s', 'studiogarnier' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					),
					'<span class="edit-link">',
					'</span>'
                                       );
                                    ?>
                        </footer><!-- .entry-footer -->
                        <?php endif; ?>
                    
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
