<?php get_header(); ?>

<?php the_post(); ?>

<div class="content-right twelve columns">
	<div id="content">
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-posted">
			<?php twentyeleven_posted_on(); ?>
		</div>
		<?php endif; ?>
		<hr>

		<?php get_template_part( 'content', 'page' ); ?>
		<?php comments_template( '', true ); ?>
	</div>
	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
