<?php 

register_nav_menus(array(
	'menu' => 'Menu superior',
));

add_theme_support('post-thumbnails');
add_theme_support('dynamic-featured-image');


 register_sidebar( array(
        'name' => 'Sidebar',
        'description' => 'Apareceran en la pagina de articulos.',
        'before_widget' => '<div class="widget-article">',
	'after_widget'  => '</div>',
	'before_title'  => '<h3 class="widgettitle">',
	'after_title'   => '</h3>',
    ) );

?>