<?php get_header(); ?>
	<section id="contents">
<?php
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		get_template_part( 'content' );
	endwhile;
	if ( in_category( 'column' ) ) :
		comments_template( '', true );
	endif;
endif;
?>
<?php get_template_part( 'back-to-top' ); ?>
		</section><!-- #contents end -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
