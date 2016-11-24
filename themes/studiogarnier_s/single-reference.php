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
                    <div class="bloc-lien-retour-ref">
                    <a href="<?php echo bloginfo('wpurl');?>/fr/references-animations-photos-videos/">retour aux références</a>
                    </div>
		<?php
		while ( have_posts() ) : the_post(); ?>
               
                        <div id="nav-reference">
                            <div class="left single-reference-nav-item"><?php previous_post_link('%link', 'projet précédent'); ?></div>
                            <div class="right single-reference-nav-item"><?php next_post_link('%link', 'projet suivant'); ?></div>
                        </div>
                    
                    <?php
                    get_template_part( 'template-parts/content-reference', get_post_format() );
                        
                      
                        

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
