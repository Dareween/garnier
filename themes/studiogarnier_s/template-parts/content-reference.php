<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package studiogarnier
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header-single-reference">
            
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title-reference">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title-reference"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
                 
		<div class="entry-meta">
			<?php studiogarnier_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	
        <div class="entry-content-single-reference">
                
                 <?php get_template_part( 'template-parts/carousel', 'carousel' );
                  ?>
                <div class="ref-description"> <?php the_field('description'); ?></div>
                 
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'studiogarnier' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'studiogarnier' ),
				'after'  => '</div>',
			) );
                        
		?>
                
                
                
                <div class="categories">Tags : </div>
                 <span class="meta-post">
                <?php echo get_the_term_list( $post->ID, 'animations', '', ', ', ',' ); ?>
                 
               <?php echo get_the_term_list( $post->ID, 'evenements', '', ', ', ',' ); ?>
                
                <?php echo get_the_term_list( $post->ID, 'prestations', '', ', ', '' ); ?>
                    
                </span><br>
                
                <div class="hidden-xs social-links-menu social-links-menu-reference">
                                            <ul class="nav navbar-nav navbar-left ">
                                                 <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>"></a></li>
                                                <li><a href="https://twitter.com/Garnier_Event"><div></div></a></li>
                                                 <li><a href="https://twitter.com/intent/tweet/?url=<?php the_permalink(); ?>&text=Garnier event. <?php the_title() ?> - <?php the_permalink(); ?> "><div></div></a></li>
                                                  
                                                

                                            </ul>
                                        </div>
               
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php studiogarnier_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

