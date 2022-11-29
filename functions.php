<?php 

add_action( 'wp_enqueue_scripts', function() {
   
   // <link rel="shortcut icon" href="favicon.ico">
   //  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
   //  <link rel="stylesheet" href="css/style.css">
	wp_enqueue_style( 'icon', get_template_directory_uri() . '/assets/favicon.ico' );
	wp_enqueue_style( 'font', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap' );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css' );

   // <!-- <script src="js/script.js"></script> -->
   wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/script.js', array(), 'null', true );  
});

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');

show_admin_bar(false);

?>