<?php
/*
Template Name: Contact
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
                    
			<?php
			while ( have_posts() ) : the_post(); ?>

                            
                            <header class="entry-header entry-header-page container-fluid">
                
                                        <?php the_post_thumbnail( 'full' ); ?>
                                       
                                        <div class="bloc-h1">
                                        <?php the_title( '<h1 class="entry-title entry-title-page">', '.</h1>' ); ?>
                                        </div>
                            </header><!-- .entry-header -->
                            <div class="second-header container">
                                <h2 style="text-align: center;">Contact</h2>
                                 <hr class="separateur" />
                                 <p>Rencontrons-nous, et parlons de votre prochain événement.</p>
                            
                            </div>
                              
                            <div class="container">
                                <div class="row">
                                 
                                    <article class="col-md-9" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                     
                                    <div class="entry-content container">
                                            <?php
                                                    the_content();

                                                    wp_link_pages( array(
                                                            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'studiogarnier' ),
                                                            'after'  => '</div>',
                                                    ) );
                                            ?>
                                    </div><!-- .entry-content -->
                                
                               

                                    <?php if ( get_edit_post_link() ) : ?>
                                    <footer class="entry-footer container">
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
                            
                                
                                
                                        <?php
                                        // If comments are open or we have at least one comment, load up the comment template.
                                        if ( comments_open() || get_comments_number() ) :
                                                comments_template();
                                        endif;

                                    endwhile; // End of the loop.
                                    ?>
                                    </article><!-- #post-## -->
                        
                
                                    <aside class="col-md-3 sidebar-contact">
                                        <div>
                                        Garnier Studios<br>
                                        7, rue Jan Palach<br>
                                        BP 30031<br>
                                        44801 Saint-Herblain cedex<br>
                                        02 51 78 67 70<br>
                                        Garnier Event

                                        </div>

                                    </aside>
                                    <section class=" col-md-12 googlemap">
                                         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2829.3010760185703!2d-1.6542790596946726!3d47.22918892271877!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480593303c1e43c1%3A0x81e5a5e3e0514d97!2s7+Rue+Jan+Palach%2C+44800+Saint-Herblain!5e1!3m2!1sfr!2sfr!4v1474398575490" width="100%" height="700" frameborder="0" style="border:0" allowfullscreen></iframe>
                                        
                                    </section>
                                </div> 
                            </div>
                        

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
