
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
			endif;?> 

                        <div class="container-fluid">
                            <div class="row">
                                <header>
                                <?php echo do_shortcode('[image-carousel]'); ?> 
                                </header> 
                            </div>     
                        </div>
                       
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <section class="content-home">
                                        <article>
                                             <?php the_content( sprintf(
                                            /* translators: %s: Name of current post. */
                                            wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'studiogarnier' ), array( 'span' => array( 'class' => array() ) ) ),
                                            the_title( '<span class="screen-reader-text">"', '"</span>', false )
                                                    ) 
                                                );    
                                            ?>
                                        </article>
                                    </section>
                                </div>     
                            </div>
                        
                    <!-- Insère la liste des liens Evenements avec le widgtet Custom Taxonomy dans la side bar Cat_accueil</div>-->
                            <div class="row">
                                <div class="col-md-12">
                                    <section class="widget-liens-catégories">
                                        
                                            <?php if ( ! is_active_sidebar( 'sidebar-2' ) ) {
                                             return;
                                                }
                                             ?>
                                    
                                            <?php dynamic_sidebar( 'sidebar-2' ); ?>
                           
                                    </section>
                                </div>
                            </div>
                        </div> <!-- fin container-->
                            
                    <div class="container-fluid">
                        <section class="prestations-home">
                                    <div class="titre2-home">
                                        <h2 class="titre-home">Nos prestations</h2>
                                        <div class="row"><div class="col-xs-5"></div><div class="col-xs-2 trait-qqs-ref"></div><div class="col-xs-5"></div>
                                        </div>
                                    </div>
                                    <div class="row box-liens-relative">
                                            <div id="myobliqueDiv" class="oblique col-xs-6" >
                                            </div>
                                            <div id="myobliqueDiv2" class="oblique col-xs-6">
                                            </div>
                                     </div>
                                    <div class="row" >
                                            <div class="lien-prestation-home lien-presta-1 col-sm-6 col-md-3"><a href="<?php the_field('lien-prestation-1'); ?>"><?php the_field('titre-lien-1'); ?></a></div>
                                            <div class="lien-prestation-home lien-presta-2 col-sm-6 col-md-3"><a href="<?php the_field('lien-prestation-2'); ?>"><?php the_field('titre-lien-2'); ?></a></div>
                                            <div class="lien-prestation-home lien-presta-3 col-sm-6 col-md-3"><a href="<?php the_field('lien-prestation-3'); ?>"><?php the_field('titre-lien-3'); ?></a></div>
                                            <div class="lien-prestation-home lien-presta-4 col-sm-6 col-md-3"><a href="<?php the_field('lien-prestation-4'); ?>"><?php the_field('titre-lien-4'); ?></a></div>
                                    </div>
                                
                                 
                                <div class="row">
                                    <div class="fond-gris"></div>
                                    
                                </div>
                            </section>
                        </div><!-- fin container-->
                        <div class="container-fluid">
                        
                            <section class="quelques-references">  
                                   <div class="titre2-home"> 
                                        <h2 class="titre-home"><a href="http://devgarnier.dareween.fr/fr/references/">Nos références</a></h2>
                                    
                                         <div class="row"><div class="col-xs-5"></div><div class="col-xs-2 trait-qqs-ref"></div><div class="col-xs-5"></div>
                                         </div>
                                   </div>
                                    <section class="section-vignettes">
                                        <div class="row vignettes-ref-home">
                                            <?php $loop = new WP_Query( array( 'post_type' => 'reference', 'posts_per_page' => '8' ) ); ?>
                                            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                                             <div class="vignette">
                                                <!-- col-xs-6 col-sm-6 col-md-3 -->
                                                <a href="<?php the_permalink() ?>"><article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                                    <div class="thumbnail-reference-home"><div class="thumbnail-bg"><?php the_post_thumbnail( 'full' ) ?></div></div>
                                                    <div class="thumbnail-text"><h5><?php the_title() ?></h5>
                                                        
                                                        <div class="liens-taxo-thumbnail"><?php echo get_the_term_list( $post->ID, 'animations', '', ', ', ',' ); ?>
                                                        <?php echo get_the_term_list( $post->ID, 'evenements', '', ', ', ',' ); ?>
                                                       <?php echo get_the_term_list( $post->ID, 'prestations', '', ', ', '' ); ?></div>
                                                    </div>

                                                </article><!-- #post-## -->
                                                </a>
                                             </div><!-- .vignette -->
                                            <?php endwhile; wp_reset_query(); ?>
                                        </div>
                                    </section>    
                                  
                          
                             </section>
                        </div>
                             
                        <div class="container">
                             <section class="partenaires">
                                 <div class="row">
                                      <div class="col-md-12 partenaires-ref-home">
                                          <div class="row">
                                        <?php $loop = new WP_Query( array( 'post_type' => 'partenaires', 'posts_per_page' => '6' ) ); ?>
                                    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                                     
                                          <div class="col-xs-6 col-sm-4 col-md-2 partenaire">
                                    
                                            <a href="<?php the_field('lien'); ?>">
                                            <img title="logo" onmouseover="this.src='<?php the_field('logo-survol'); ?>'" onmouseout="this.src='<?php the_field('logo'); ?>'" src="<?php the_field('logo'); ?>" alt="Logo" width="100" height="100" /></a>
                
                                        </div><!-- .vignette -->
                                     
                                    <?php endwhile; wp_reset_query(); ?>
                                        </div>
                                    </div>
                                     
                                 </div>
                             </section>
                        <section class="nombres">
                            <div class="row">
                               <div class="col-md-3">
                                    <div class="nombre  circle">302</div>
                                    <div class="suite-nombre">x 1000 photos imprimées</div>
                                </div>
                                <div class="col-md-3">
                                    <div class="nombre  circle">115</div>
                                    <div class="suite-nombre">moments inoubliables par an </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="nombre  circle">8</div>
                                    <div class="suite-nombre">collaborateurs sur le pont </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="nombre  circle">18</div>
                                    <div class="suite-nombre">ans d'expérience</div>
                                </div>
                        </section>
                        
                        </div>
                            <?php

                        else :

			get_template_part( 'template-parts/content', 'none' );

                        endif; ?>
                    

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();

