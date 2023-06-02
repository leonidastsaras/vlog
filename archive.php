<?php get_header(); ?>

<main id = "archive">
<?php 
	if(have_posts()) {
		while(have_posts()) {
			the_post();
			?>
			<h2><?php the_title(); ?></h2>
			<h4><?php the_author(); ?></h4>
			<?php
		}
	}
?>
</main>

<?php get_footer(); ?>