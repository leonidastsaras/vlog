<?php get_header(); ?>

<main id = "home">
	<h2>Welcome to my site</h2>
<?php 
	if(have_posts()) {
		while(have_posts()) {
			the_post();
			?>
			
			<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>

			<?php
		}
	}
?>
</main>

<?php get_footer(); ?>