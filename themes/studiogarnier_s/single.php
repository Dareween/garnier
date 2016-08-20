<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package studiogarnier
 */

get_header(); ?>
<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
         <div class="row">
              <section class="col-md-12 single-content reference-content">
                  

		<?php
		while ( have_posts() ) : the_post();
                
                        the_post_navigation();
                        
                        
			get_template_part( 'template-parts/content', get_post_format() );
                        
                        
                        previous_post_link('%link', '%title', TRUE);
                        next_post_link( '%link', '%title', TRUE );                        
			
                        

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
get_sidebar();
get_footer();
