<?php

/*
Template Name: blog
*/


get_header(); ?>



	<div id="primary" class="content-area container">
		<main id="main" class="site-main" role="main">
                    <div class="row">
                        <section class="col-md-12 single-content reference-content">
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', get_post_format() );

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
