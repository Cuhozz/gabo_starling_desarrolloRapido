<?php

require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

function load_assets(){   
    wp_enqueue_style('bootstrap_css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css');
    wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.3.1.js'); 
    wp_enqueue_script('popper','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js');
    wp_enqueue_script( 'bootstrap_js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js');
    wp_enqueue_script('wow_js', 'https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js');
    wp_enqueue_script( 'slider_js', 'https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.12/jquery.bxslider.min.js');
    wp_enqueue_script( 'scripts_js',get_template_directory_uri().'/assets/js/scripts.js');
    wp_enqueue_style('style',get_stylesheet_uri()); 
    wp_enqueue_style( 'slider_css', 'https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.12/jquery.bxslider.min.css' );   
}

register_nav_menus( array( 'primary' => __( 'Primary Menu', 'CoffePlace' ), )); 
add_action('wp_enqueue_scripts','load_assets');

add_theme_support('post-thumbnails');


function create_main_slider() {
        $args = array(
            'labels' => array(
                'name' => __( 'Main Slider' ),
                'singular_name' => __( 'Main Slider' ),
                'menu_name' => __( 'Main Slider' ),
                'name_admin_bar' => __( 'Main Slider' ),
                'add_new' => __('Add new'),
                'add_new_item' => __('Add New Slider'),
                'new_item' => __('New Slider'),
                'edit_item' => __('Edit Slider'),
                'view_item' => __('View Sliders'),
                'all_items' => __('All Sliders'),
                'search_items' => __('Search Slider'),
                'parent_item_color' => __('Parent Sliders:'),
                'not_found' => __('No sliders found.'),
                'not_found_in_trash' => __('No sliders found in Trash')
            ),
            'public' => true,
            'menu_icon' => 'dashicons-format-gallery',
            'supports' => array( 'title', 'editor', 'thumbnail' ),
            'capability_type' => 'post',
            'rewrite' => array("slug" => "main slider")
        );

        register_post_type('main-slider', $args);
    }
    
    add_action( 'init', 'create_main_slider' );
?>