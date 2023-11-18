<?php

function development_scripts(){
    
    
    wp_enqueue_style( 'style.css', get_stylesheet_directory_uri() . '/style.css');
    wp_enqueue_script('main.js', get_template_directory_uri() . '/main.js');

}

add_action('wp_enqueue_scripts' , 'development_scripts');



// The proper way to enqueue GSAP script in WordPress

// wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer );
function theme_gsap_script(){
    // The core GSAP library
    wp_enqueue_script( 'gsap-js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js', array() );
    // ScrollTrigger - with gsap.js passed as a dependency
    wp_enqueue_script( 'gsap-st', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/ScrollTrigger.min.js', array('gsap-js') );
    // Your animation code file - with gsap.js passed as a dependency
    wp_enqueue_script( 'gsap-js2', get_template_directory_uri() . 'js/app.js', array('gsap-js') );
}

add_action( 'wp_enqueue_scripts', 'theme_gsap_script' );
