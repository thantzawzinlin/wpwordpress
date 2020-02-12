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

 //customizing word count

 function set_excerpt_length(){
     return 25;
 }
 add_filter('excerpt_length','set_excerpt_length');

 function init_widgets($id){
     register_sidebar(array(
        'name'=>'Sidebar',
        'id'=>'sidebar',
        'before_widget'=>'<div class="side-widget">',
        'after_widget'=>'</div>',
        'before_title'=>'<h3>',
        'after_title'=>'</h3>'
     ));
 }
 add_action('widgets_init','init_widgets');