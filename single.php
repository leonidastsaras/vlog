<?php get_header(); ?>

<main id = "post">
<?php 
	if(have_posts()) {
		while(have_posts()) {
			the_post();
			?>
			<h2><?php the_title(); ?></h2>
            <?php the_author(); ?>
			<?php the_content(); ?>
			
			<?php
		}
	}
?>
</main>

<?php get_footer(); ?>