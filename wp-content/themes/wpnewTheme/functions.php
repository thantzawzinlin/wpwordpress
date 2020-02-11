<?php
 function simple_theme_setup(){
     //Featured Image Supporting
     add_theme_support('post-thumbnails');
     //Creating menu
     register_nav_menus(array(
         'primary' =>__('Primary MenuK')
     ));
 }
 add_action('after_setup_theme','simple_theme_setup');

 function set_excerpt_length(){
     return 25;
 }
 add_filter('excerpt_length','set_excerpt_length');