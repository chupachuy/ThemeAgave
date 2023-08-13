<?php

function agave_solutions_styles() {
 $parent_style = 'parent-style'; // Estos son los estilos del tema padre recogidos por el tema hijo.
 wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
 wp_enqueue_style( 'child-style',
 get_stylesheet_directory_uri() . '/style.css',
 array( $parent_style ),
 wp_get_theme()->get('Version')
 );
}
add_action( 'wp_enqueue_scripts', 'agave_solutions_styles' );

add_action( 'woocommerce_share', 'dcms_question_whatsapp' );


// ADD YOUTUBE VIDEO 

add_action('woocommerce_share', 'youtube_video_single_product');

function youtube_video_single_product(){
  if(get_post_meta( get_the_ID(), 'video_youtube_product', true ) ){
      echo '<div class="video-youtube-product"><iframe width="560" height="315" src="https://www.youtube.com/embed/'.get_post_meta(get_the_ID(), 'video_youtube_product', true).'" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>';
    //echo get_post_meta(get_the_ID(), 'video_youtube_product', true);
  }
}

function dcms_question_whatsapp(){
	$phone = '5213781070928';
	$message = 'Quiero información del producto: '.get_the_title().' en '.get_permalink().' ';
	$text = 'Preguntar por Whatsapp';
	$ico = '<img src="'.get_stylesheet_directory_uri().'/img/whatsaap.png" width=50 height=50 />';

	$url = 'https://api.whatsapp.com/send?phone='.$phone.'&amp;text='.str_replace(' ', '%20', $message);
	$link = '<div class="logo-whatsapp"><a class="dc-link" href="'.$url.'" target="_blank">'.$ico. ' <span>'.$text.'</span></a></div>';

	echo '<div class="dc-whatsapp-container">'. $link. '</div>';
};

add_action( 'admin_init', 'my_remove_menu_pages' );
function my_remove_menu_pages() {
 
 
  global $user_ID;
 
  if ( $user_ID != 1 ) { //
 
   //remove_menu_page('edit.php'); // Posts
   //remove_menu_page('users.php'); // Users
   //remove_menu_page('plugins.php'); // Plugins
   remove_menu_page('themes.php'); // Appearance
   //remove_menu_page('tools.php'); // Tools
   //remove_menu_page('options-general.php'); // Settings
   //remove_menu_page('upload.php'); // Media
   //remove_menu_page('link-manager.php'); // Links
   //remove_menu_page('edit-comments.php'); // Comments
   //remove_menu_page('edit.php?post_type=page'); // Pages
  }
}


?>