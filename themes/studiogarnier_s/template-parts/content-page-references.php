<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package studiogarnier
 */

?>
<div class="col-md-5 vignette">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'full' ) ?></a>
       
    </article><!-- #post-## -->
</div><!-- .vignette -->
