<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package studiogarnier
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header entry-header-page container-fluid">
                <?php the_post_thumbnail( 'full' ); ?>
			<?php the_title( '<h1 class="entry-title entry-title-page">', '.</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content-page-prestation container">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'studiogarnier' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	
</article><!-- #post-## -->
