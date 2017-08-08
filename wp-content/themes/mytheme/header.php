<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<?php wp_head();?>

</head>

<body>
	<header>
		<h2><a href="<?php echo site_url();?>"><?=bloginfo('name');?></a></h2>
		<?php wp_nav_menu(array(

			'theme_location' => 'header_menu'
		));?>
	</header>