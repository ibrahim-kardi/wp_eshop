<?php get_header();?>
<h2>This is first</h2>

<section class="search_form">

	<div>
		<?php 
			if (!dynamic_sidebar('1st_wid')) {
				echo "No sidebar 1";
			}
		?>
	</div>
	<?php get_search_form();
		if (!dynamic_sidebar('2nd_wid')) {
			echo "no sidebar2";
		}
	?>


</section>



<section class="custom_post" style="border: 2px solid gray">
	<div class="all_posts">
		<?php
			$my_post= null;
			$my_post= new WP_Query(array(

				'post_type'=>'my_product',
				'post_per_page'=>5

				)) ;

			if ($my_post->have_posts()) {
				while ($my_post->have_posts()) {
					$my_post->the_post();
					$mobile=get_post_meta(get_the_ID(),'mobaile',true);
					$email=get_post_meta(get_the_ID(),'email',true);
					?>

					<div class="single_post" style="border:1px solid green">
						<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
						<h3><?php echo $mobile;?></h3>
						<h3><?php echo $email;?></h3>
					</div>

				<?php }
			}


			else{
				echo "no post";
			}

			wp_reset_postdata();
		?>
	</div>
</section>
<section class="custom_post" style="border: 2px solid gray">
	<div class="all_posts">
		<?php
			$my_post= null;
			$my_post= new WP_Query(array(

				'post_type'=>'page',
				'post_per_page'=>5,
				// 'category_name'=>'kardi'

				)) ;

			if ($my_post->have_posts()) {
				while ($my_post->have_posts()) {
					$my_post->the_post();
					$service=get_post_meta(get_the_ID(),'service',true);
					
					?>

					<div class="single_post" style="border:1px solid green">
						<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
						<h3><?php echo $service;?></h3>
						
					</div>

				<?php }
			}


			else{
				echo "no post";
			}

			wp_reset_postdata();
		?>
	</div>
</section>
<?php get_footer();?>