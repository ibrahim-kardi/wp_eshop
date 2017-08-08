<?php get_header();?>

<section class="post_area">
	<?php
		if (have_posts()) {
			
			while (have_posts()) {

				the_post();?>

				<div class="single_post">
					<h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
					<?php the_post_thumbnail('img_thumb');?>
					<?php the_excerpt();?>
				</div>
				<hr>
		<?php	} 

		}
		else{
			echo "No posts";
		}
	?>
</section>



<?php get_footer();?>