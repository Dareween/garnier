

<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
                        <div class="row">
                            <section class="col-md-10">

                            <?php query_posts(array( 
                                     'post_type' => 'reference',
                                     'showposts' => 10 
                                        ) );  

                            while ( have_posts() ) : the_post();
                                    
                                    get_template_part( 'template-parts/content', 'page-references' );
                                    



                                    // If comments are open or we have at least one comment, load up the comment template.
                                    if ( comments_open() || get_comments_number() ) :
                                            comments_template();
                                    endif;

                            endwhile; // End of the loop.
                            ?>
                            </section>
                           
                    <aside class="col-md-2">
                       test
                    </aside>
                            </div> 
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
