<?php
/*
Template Name: Equipe
*/

get_header(); ?>

	<div id="primary" class="content-area page-equipe">
		<main id="main" class="site-main" role="main">
                        
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

			endwhile; // End of the loop.
		
                        $images = get_field('galerie_equipe');

                        if( $images ): ?>
                            <section class="equipe container">
                               <div class="row vignettes-equipe">
                                <?php foreach( $images as $image ): ?>
                                        <div class="vignette">
                                            <div class="thumbnail-equipe">
                                                <div class="thumbnail-bg-equipe">
                                                    <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
                                                    <div class="thumbnail-text-equipe">
                                                        <div class="nom-membre-equipe"><?php echo $image['title']; ?></div><br>
                                                    <div class="fonction-membre-equipe"> <?php echo $image['caption']; ?></div>
                                                    </div>  
                                                </div>
                                                  
                                            </div>
                                            
                                   
                                            </div>
                                      <?php endforeach; ?>
                                     
                               </div>
                              <?php the_field('textes_suivants_les_photos'); ?>
                              
                              </section> 
                    
                              
                        <?php endif; ?>
                  
                       
                         

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
