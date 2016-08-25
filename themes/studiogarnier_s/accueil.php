
<?php
/*
Template Name: Accueil
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
                   
		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				

			<?php
			endif;

                           ?><header>
                               <?php echo do_shortcode('[image-carousel]'); ?> 
                              
                            </header>  
                            <section class="content-home">
                                 <h1 class="titre-home"><?php single_post_title(); ?></h1>
                                 <?php the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'studiogarnier' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );    ?>
                            </section>  
                    
                    <!-- Insère la liste des liens Evenements avec le widgtet Custom Taxonomy dans la side bar Cat_accueil</div>-->
                            <?php if ( ! is_active_sidebar( 'sidebar-2' ) ) {
                                    return;
                                    }
                            ?>
                            <section>
                                    <?php dynamic_sidebar( 'sidebar-2' ); ?>
                           
                            </section>
                            
                    <div class="container-fluid">
                            
                            <section class="prestations-home">
                                    <div class="row container-oblique">
                                        <div class="col-md-6 oblique-1"></div>
                                        <div class="col-md-6 oblique-2"></div>
                                    </div>    
                                    <div class="row">
                                        <div class="lien-prestation-home lien-presta-1 col-sm-6 col-md-3"><a href="<?php the_field('lien-prestation-1'); ?>"><?php the_field('titre-lien-1'); ?></a></div>
                                         <div class="lien-prestation-home lien-presta-2 col-sm-6 col-md-3"><a href="<?php the_field('lien-prestation-2'); ?>"><?php the_field('titre-lien-2'); ?></a></div>
                                         <div class="lien-prestation-home lien-presta-3 col-sm-6 col-md-3"><a href="<?php the_field('lien-prestation-3'); ?>"><?php the_field('titre-lien-3'); ?></a></div>
                                        <div class="lien-prestation-home lien-presta-4 col-sm-6 col-md-3"><a href="<?php the_field('lien-prestation-4'); ?>"><?php the_field('titre-lien-4'); ?></a></div>
                                   </div>
                                <div class="row">
                                    <div class="fond-gris"></div>
                                    
                                </div>
                            </section>
                            <section class="quelques-references">  
                                <h3 class="titre-home">Quelques références</h3>
                                <div class="row"><div class="col-md-4"></div><div class="col-md-4 trait-qqs-ref"></div><div class="col-md-4"></div></div>
                                    <div class="vignettes-ref-home">
                                        <?php $loop = new WP_Query( array( 'post_type' => 'reference', 'posts_per_page' => '8' ) ); ?>
                                    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                                     <div class="col-md-3 vignette">
                                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                    <a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'full' ) ?></a>

                                    </article><!-- #post-## -->
                                    </div><!-- .vignette -->
                                    <?php endwhile; wp_reset_query(); ?>
                                    </div>
                                    
                             </section>
                             <section>
                                 <div class="row">
                                      <div class="vignettes-ref-home">
                                        <?php $loop = new WP_Query( array( 'post_type' => 'partenaires', 'posts_per_page' => '6' ) ); ?>
                                    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                                     <div class="col-md-2 vignette">
                                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                    <a href="<?php the_field('lien'); ?>"><img src="<?php the_field('logo'); ?>"></a>
                                     <a href="<?php the_field('lien'); ?>"><div style="background-image: url(<?php the_field('logo'); ?>); height: 200px; width: 400px; border: 1px solid black;"></div></a>
                             
                                    

                                    </article><!-- #post-## -->
                                    </div><!-- .vignette -->
                                    <?php endwhile; wp_reset_query(); ?>
                                    </div>
                                     
                                 </div>
                             </section>
                        
                        QqSQswqqqqqqqqqqqqqqqqqqqq
                       </div>
                            <?php

                        else :

			get_template_part( 'template-parts/content', 'none' );

                        endif; ?>
                    

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();

