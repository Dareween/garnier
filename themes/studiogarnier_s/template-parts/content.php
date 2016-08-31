<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package studiogarnier
 */

?>




<div class=row">
<div class='col-md-12'>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
    <?php the_post_thumbnail( 'full' ); ?>
    <div class="cadre">
        
	<header class="entry-header">
                
		<?php
                
		if ( is_single() ) :
			the_title( '<h1 class="entry-title entry-title-single">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title entry-title-single"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;?>
                <div class=row">
                <div class="col-md-12 single-date"><hr><time>le <?php the_time("j F Y"); ?></time></div>
                </div>       
                        
		
	</header><!-- .entry-header -->

	<div class="entry-content">
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
                
             <div class="single-cat-hr"><hr></div>
                <div class="categories-single">
                    <div class="categories">Catégories : 
                       <span><?php echo get_the_category_list(',','',''); ?></span>
                    </div>
                    <div class="categories">Tags :
                        <span><?php echo get_the_tag_list( '', ', ','', $post->ID); ?></span> 
                    </div>
                </div>
	</div><!-- .entry-content -->
        <footer class="entry-content">
            
        </footer>
	
    </div>
</article><!-- #post-## -->
</div>
</div>
