<?php get_header();?>
	<h2><?php printf('Search Result for: %s',get_search_query());?></h2>
	<?php 
		if (have_posts()) {

			while (have_posts) {
				the_post();?>

				<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
				<?php the_excerpt();?>
		<?php 	}
		}
		else{
			echo "No results found";
		}

	?>
<?php get_footer();?>