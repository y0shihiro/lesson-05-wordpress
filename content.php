<article>
	<header class="page-header">
		<?php the_category_image(); ?>
		<h1 class="page-title">
			<?php the_title(); ?>
		</h1>
		<?php
		if ( is_single() && in_category( 'column' ) ) :
			get_template_part( 'social-button' );
		endif;
		?>
	</header>
	<section class="entry-content">
		<?php the_content(); ?>
		<?php
		if ( is_single() ) :
			?>
			<div id="content_date_author">
				<ul class="alignright">
					<li>
						<time pubdate="pubdate" datetime="<?php the_time( 'Y-m-d' ); ?>" class="entry-date"><?php the_time( get_option( 'date_format' ) ); ?></time>
					</li>
					<li>
						<?php the_author_posts_link(); ?>
				</li>
				</ul>
			</div>
			<?php
			endif;
		?>
	</section>
</article>
<?php
if ( is_single() ) :
	if ( in_category( 'column' ) ) :
		get_template_part( 'social-button' );
		get_template_part( 'social-script' );
	endif;
	?>
	<nav class="adjacent_post_links">
		<ul>
			<li class="previous">
				<?php previous_post_link( '%link', '%title', true ); ?>
			</li>
			<li class="next">
				<?php next_post_link( '%link', '%title', true ); ?>
			</li>
		</ul>
	</nav>
	<?php
	if ( in_category( 'column' ) ) :
		?>
	<div class="fb-comments" data-href="<?php the_permalink(); ?>" data-width="600" data-numposts="20"></div>
		<?php
	endif;
	endif;
?>
