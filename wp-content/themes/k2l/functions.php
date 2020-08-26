<?php
function k2l_theme_support(){
  add_theme_support('title-tag');
}
add_action('after_setup_theme', 'k2l_theme_support');

function k2l_menus(){
  $locations = array(
    'primary' => 'Desktop Primary Menu',
    'footer' => 'Footer Menu Items'
  );
  register_nav_menus($locations);
}
add_action('init', 'k2l_menus');


function k2l_register_styles(){
  $version = wp_get_theme()->get('Version');
  wp_enqueue_style('k2l-style', get_template_directory_uri() . "/style.css", array('k2l-bootstrap'), $version, 'all');
  wp_enqueue_style('k2l-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', array(), '4.4.1', 'all');
  wp_enqueue_style('k2l-fontawesome','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css', array(), '5.13.0', 'all');
}
add_action('wp_enqueue_scripts', 'k2l_register_styles');

function k2l_register_scripts() {
	wp_enqueue_script('k2l-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), '4.4.1', true);
	wp_enqueue_script('k2l-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '4.4.1', true);
	wp_enqueue_script('k2l-jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '4.4.1', true);
	wp_enqueue_script('k2l-main', get_template_directory_uri() . "/assets/js/main.js", array(), '4.4.1', true);
}

add_action('wp_enqueue_scripts', 'k2l_register_scripts');
?>