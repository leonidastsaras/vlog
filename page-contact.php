<?php get_header(); ?>

<main id = "contact">
	<h2>Επικοινωνία</h2>
<?php 
	if(have_posts()) {
		while(have_posts()) {
			the_post();
			?>
			
			<h2><?php //the_title(); ?></h2>
			<?php the_content(); ?>

			<?php
		}
	}
?>
</main>

<?php get_footer(); ?>