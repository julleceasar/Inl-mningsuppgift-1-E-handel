<?php

// Lägger till support för olika komponenter

add_theme_support('post-thumbnails');
add_theme_support('menus');
add_theme_support('widgets');

// Registrerar menyerna som finns på sidan

function register_menu() {
    register_nav_menu('mainmenu', 'Main menu');
    register_nav_menu('socialmenu', 'Social menu');
    register_nav_menu('sidemenu', 'side menu');
   

}

add_action('after_setup_theme', 'register_menu');


// Registrerar widgets så att de kan användas och modifieras i admin-panelen.

register_sidebar( 
    [
    'name' => 'Kort om oss',
    'id' => 'about',
    'description' => 'info blabla...',
    'before_widget' => '<div>',
    'after_widget' => '</div>'
    ]
);

register_sidebar( 
    [
    'name' => 'Kontakt Uppgifter',
    'id' => 'contact',
    'description' => 'info blabla...',
    'before_widget' => '<div>',
    'after_widget' => '</div>'
    ]
);

register_sidebar( 
    [
    'name' => 'Social Media',
    'id' => 'social',
    'description' => 'info blabla...',
    'before_widget' => '<div>',
    'after_widget' => '</div>'
    ]
);

register_sidebar( 
    [
    'name' => 'Copy right',
    'id' => 'copy',
    'description' => 'info blabla...',
    'before_widget' => '<div>',
    'after_widget' => '</div>'
    ]
);

register_sidebar( 
    [
    'name' => 'sidebar',
    'id' => 'sidebar',
    'description' => 'info blabla...',
    'before_widget' => '<div>',
    'after_widget' => '</div>'
    ]
);

register_sidebar( 
    [
    'name' => 'Logo',
    'id' => 'logo',
    'description' => 'info blabla...',
    'before_widget' => '<div>',
    'after_widget' => '</div>'
    ]
);


// "Köar" in all script och styling

function mina_script() {

    //Javascript
    wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', [], false, true);
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery.js', [], false , true);
    
    // CSS
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
    wp_enqueue_style('fontawsome', get_template_directory_uri() . '/css/font-awsome.css');
    wp_enqueue_style( 'font-awesome-free', '//use.fontawesome.com/releases/v5.6.3/css/all.css' );
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
    
}


add_action('wp_enqueue_scripts', 'mina_script');
