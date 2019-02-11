<?php

    function beto_setup(){
        add_theme_support('post-thumbnails');
    }
    add_action('after_setup_theme','beto_setup');

    function beto_styles(){
        //registrar estilos
        
        wp_register_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.1' );
        wp_register_style('fontawesome', get_template_directory_uri() .'/css/all.css', array('normalize'), '5.0.13');
        wp_register_style('style', get_template_directory_uri() . '/style.css', array(), '1.0' );
        wp_register_style('aos', get_template_directory_uri() . '/css/aos.css', false, null);
        wp_register_style('google_fonts', 'https://fonts.googleapis.com/css?family=Lato:400,700,900|Roboto:400,700,900&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet', array(), '1.0.0');
        
        
        //llamar estilos
        wp_enqueue_style('normalize');
        wp_enqueue_style('style');
        wp_enqueue_style('fontawesome');
        wp_enqueue_style('aos');
        
        //js aguas con el aos, fue complicado
        wp_register_script('scripts', get_template_directory_uri() .'/js/scripts.js', array(), '1.0.0', true);
        wp_register_script('aosjs', get_template_directory_uri(). '/js/aos.js', false, null, true);
        wp_register_script('aosinitjs', get_template_directory_uri(). '/js/aosinit.js', false, null, true);
        
        wp_enqueue_script('scripts');
        wp_enqueue_script('jquery');
        wp_enqueue_script('aosjs');
        wp_enqueue_script('aosinitjs');
    }
    

    
    add_action('wp_enqueue_scripts', 'beto_styles');
    
    function beto_menus(){
        register_nav_menus(array(
            'header-menu' => __('Header Menu', 'betovw9rhcp'),
            'social-menu' => __('Social Menu', 'betovw9rhcp'),
        ));
        
    }
    add_action('init', 'beto_menus');