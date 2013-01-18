<?php get_header(); ?>

<?php the_post(); ?>

<div class="content-right twelve columns">
	<div id="content">
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<hr>

		<?php get_template_part( 'content', 'page' ); ?>
		<?php comments_template( '', true ); ?>
	</div>
	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
