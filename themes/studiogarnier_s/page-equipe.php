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
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
