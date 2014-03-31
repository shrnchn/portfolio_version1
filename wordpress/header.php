<!-- header -->

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php wp_title(); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?> /mq.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/script.js"></script>
	<script>!window.jQuery && document.write('<script src="<?php bloginfo('template_directory');?>/js/jQuery.js"><\/script>')</script>
</head>

<body <?php body_class(); ?>>

	<div class="nav">
		<?php wp_nav_menu(
			array(
				'theme_location' => 'header-menu',
				'container' => false
				) ); ?>
	</div>



