<?php
/**
 * The template for displaying all refrences.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package studiogarnier
 */

get_header(); ?>

	<div id="primary" class="content-area">
            <main role="main" role="main">
		
                <div class="container">
                <section class="reference-content">
		<?php
		while ( have_posts() ) : the_post();
                        
                        
                        the_post_navigation();
                        previous_post_link('%link', '%title', TRUE);
                        next_post_link( '%link', '%title', TRUE );
                        
                   
			get_template_part( 'template-parts/content-reference', get_post_format() );
                        
                        the_post_navigation();
                        previous_post_link('%link','<i class="fa fa-chevron-left"></i><span class="label hidden-mobile">Précédent</span>', TRUE, ' ', '' );
                        next_post_link( '%link', '<span class="label hidden-mobile">Suivant</span><i class="fa fa-chevron-right"></i>', TRUE, ' ', ''  );
                                                    
			
                        

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
                    
                
                </section>
                    
                </div>
               

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
