<?php

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
                    <div class="container-fuid page-taxonomy">
                        <div class="row">
                          <div class="col-sm-9">
                     
                     
                  
		<?php
		if ( have_posts() ) : ?>
                       
			<div class="page-header header-taxonomy">
                            <h1 class="page-title">Nos références</h1><br><hr>
					
			</div><!-- .page-header -->
                        <section class="boucle-references">
			 
                                           <?php $loop = new WP_Query( array( 'post_type' => 'reference', 'posts_per_page' => '22' ) ); ?>
                                            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                                             <div class="col-xs-12 col-sm-6 col-md-6 vignette">
                                                <a href="<?php the_permalink() ?>"><article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                                    <div class="thumbnail-reference-home"><div class="thumbnail-bg"><?php the_post_thumbnail( 'medium-750' ) ?></div></div>
                                                    <div class="thumbnail-text"><h5><?php the_title() ?></h5>
                                                        
                                                        <div class="liens-taxo-thumbnail"><?php echo get_the_term_list( $post->ID, 'animations', '', ', ', ',' ); ?>
                                                        <?php echo get_the_term_list( $post->ID, 'evenements', '', ', ', ',' ); ?>
                                                       <?php echo get_the_term_list( $post->ID, 'prestations', '', ', ', '' ); ?></div>
                                                    </div>

                                                </article><!-- #post-## -->
                                                </a>
                                             </div><!-- .vignette -->
                                            <?php endwhile; wp_reset_query(); ?>
                                        
                            
                            
                            
                            
                            <?php
		

			

		else :
                            
			get_template_part( 'template-parts/content', 'none' );
                       
                       
                 
		endif; ?>
          
 
                        </section>
                </div>
                    <aside class="col-sm-3">
                        
               <?php 
               
               if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('Sidebar') ) ?>
                      
                </aside>
                    </div>        
                    </div>    
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
