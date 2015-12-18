<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Andrés Dguez</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="<?php bloginfo("stylesheet_url")?>" >
	<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/flexboxgrid.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/font-awesome.css">
	<link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto+Slab:300,400,700%7CLato:300,700,800,900" media="all">
	<link href='https://fonts.googleapis.com/css?family=Crimson+Text:400,400italic,600,600italic' rel='stylesheet' type='text/css'>
	<?php wp_head(); ?>
</head>
<body>
	<header class="middle-xs">
		<div class="container center middle-xs">
			<img class="logo" src="http://www.andresdominguez.mx/beta/img/logo2.png" alt="Andrés Domínguez">
			<div class="menu-movil">
				<span class="fa fa-bars"></span>
			</div>
			
			<nav id="menu">
			    <?php
					wp_nav_menu(
						array(
							'container' => false,
							'menu_class' => 'menu',
							'menu_id' => '',
							'items_wrap' => '<ul>%3$s</ul>',
							'items_class' => 'li-class',
							'theme_location' => 'menu'


						)
					);
				?>
			</nav>
		</div>
	</header>