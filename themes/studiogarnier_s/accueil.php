
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
    
                               <header class="entry-header entry-header-page container-fluid">
                                
                                            <?php $loop = new WP_Query( array( 'post_type' => 'carousel-home', 'posts_per_page' => '1', 'orderby' => 'rand', ) ); ?>
                                            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                                             
                                                  <?php the_post_thumbnail( 'full' ) ?>
                                                    <div class="bloc-h1">
                                                     <?php the_title( '<h1 class="entry-title entry-title-page">', '.</h1>' ); ?>
                                                     </div>
                                            <?php endwhile; wp_reset_query(); ?>
                                        
                                  
                                  
                  
                              </header><!-- .entry-header -->
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
                            <div class="row">
                                
                                  
                                  <img id="forme-oblique" src="<?php echo bloginfo('wpurl');?>/wp-content/themes/studiogarnier_s/img/fond-oblique-3px.svg">
                           
                                    
                                            <div class="lien-prestation-home lien-presta-1 col-sm-6 col-md-3"><a href="<?php the_field('lien-prestation-1'); ?>"><?php the_field('titre-lien-1'); ?></a></div>
                                            <div class="lien-prestation-home lien-presta-2 col-sm-6 col-md-3"><a href="<?php the_field('lien-prestation-2'); ?>"><?php the_field('titre-lien-2'); ?></a></div>
                                            <div class="lien-prestation-home lien-presta-3 col-sm-6 col-md-3"><a href="<?php the_field('lien-prestation-3'); ?>"><?php the_field('titre-lien-3'); ?></a></div>
                                            <div class="lien-prestation-home lien-presta-4 col-sm-6 col-md-3"><a href="<?php the_field('lien-prestation-4'); ?>"><?php the_field('titre-lien-4'); ?></a></div>
                                   
                                
                                 
                                
                                    <div class="fond-gris col-sm-12"></div>
                                    
                               
                            
                            </div>     
                        </div> 

                    <div class="container-fluid">
                       
                       
                          
                            <section class="quelques-references">  
                                   <div class="titre2-home"> 
                                        <h2 class="titre-home"><a href="http://devgarnier.dareween.fr/fr/references/">Nos références</a></h2>
                                    
                                         <!--<div class="row"><div class="col-xs-5"></div><div class="col-xs-2 trait-qqs-ref"></div><div class="col-xs-5"></div>-->
                                         </div>
                                   </div>
                                    <section class="section-vignettes">
                                        <div class="row vignettes-ref-home">
                                            <?php $loop = new WP_Query( array( 'post_type' => 'reference', 'posts_per_page' => '8' ) ); ?>
                                            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                                             <div class="col-xs-6 col-sm-6 col-md-3 vignette vignette-accueil">
                                                 
                                                <a href="<?php the_permalink() ?>"><article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                                    <div class="thumbnail-reference-home"><div class="thumbnail-bg"><?php the_post_thumbnail( 'medium-750' ) ?></div></div>
                                                    <div class="thumbnail-text">
                                                        <h5><?php the_field('titre_vignette'); ?></h5>
                                                        <p class="thumbnail-sous-titre">
                                                            <?php the_field('sous-titre_vignette'); ?></p>
                                                        
                                                         
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
                        </div><!-- fin container-->
                        <div class="container-fluid partenaires-background">
                             <section class="partenaires container">
                                 <div class="row">
                                      <div class="col-md-12 partenaires-ref-home">
                                          <div class="row">
                                        <?php $loop = new WP_Query( array( 'post_type' => 'partenaires', 'posts_per_page' => '8' ) ); ?>
                                    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                                     
                                         <!-- <div class="col-xs-6 col-sm-4 col-md-2 partenaire"> -->
                                           <div class="partenaire">
                                    
                                            <a href="<?php the_field('lien'); ?>">
                                            <img title="logo" onmouseover="this.src='<?php the_field('logo-survol'); ?>'" onmouseout="this.src='<?php the_field('logo'); ?>'" src="<?php the_field('logo'); ?>" alt="Logo" width="100" height="100" /></a>
                
                                        </div><!-- .vignette -->
                                     
                                    <?php endwhile; wp_reset_query(); ?>
                                        </div>
                                    </div>
                                     
                                 </div>
                             </section>
                        </div>
                        <section class="nombres container">
                            <div class="row">
                            <!--<?php the_field('nombres_1', 123); ?>-->
                        
                               <div class="col-md-3">
  
                                    <div class="nombre  circle">302</div>
                                    <div class="suite-nombre">x 1000 photos imprimées</div>
                                </div>
                                <div class="col-md-3">
                                    <div class="nombre  circle">115</div>
                                    <div class="suite-nombre">moments inoubliables par an </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="nombre  circle">6</div>
                                    <div class="suite-nombre">collaborateurs sur le pont </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="nombre  circle">18</div>
                                    <div class="suite-nombre">ans d'expérience</div>
                                </div>
                            </div>
                        </section>
                        
                       
                            <?php

                        else :

			get_template_part( 'template-parts/content', 'none' );

                        endif; ?>
                    

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();

