<?php get_header();?>
	<section class="single_post">
		<div class="post_area">
			<?php 

				if (have_posts()) {
					while (have_posts()) {
						the_post();
					
					?>

					<h2><?php the_title();?></h2>
					<?php the_post_thumbnail();?>
					<?php the_content();?>

					<?php }
					}
				else{
					echo "not found";
				}
			?>

		</div>
	</section>
<?php get_footer();?>