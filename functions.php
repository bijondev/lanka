<?php
function register_my_menu() {
  register_nav_menu('main-menu',__( 'Main Menu' ));
}
add_action( 'init', 'register_my_menu' );
require_once 'walker.php';

function home_widgets_init() {

  register_sidebar( array(
    'name' => 'Home Icon',
    'id' => 'home_after_slider',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<h2 class="rounded">',
    'after_title' => '</h2>',
  ) );
}
add_action( 'widgets_init', 'home_widgets_init' );
?>