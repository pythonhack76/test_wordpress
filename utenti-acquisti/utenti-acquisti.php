<?php
/*
Plugin Name: Utenti Acquisti
Version: 1.0
Description: esempio test plugin per la gestione di acquisti sul nostro sito ecommerce
Author: Luca Rulvoni
Author URI: https://www.lucarulvoni.it/wordpress-plugins.html
License: GPLv2 or later
Text Domain: lucarulvoni

*/
function acquisti_register_post_type()
{

    // acquisti
    $labels = array(
        'name' => __('Acquisti', 'acquisti'),
        'singular_name' => __('Acquisto', 'acquisti'),
        'add_new' => __('Nuovo Acquisto', 'acquisti'),
        'add_new_item' => __('Add Nuovo Acquisto', 'acquisti'),
        'edit_item' => __('Edit Acquisto', 'acquisti'),
        'new_item' => __('New Acquisto', 'acquisti'),
        'view_item' => __('View Acquisto', 'acquisti'),
        'search_items' => __('Search Acquisto', 'acquisti'),
        'not_found' =>  __('Nessun acquisto trovato', 'acquisti'),
        'not_found_in_trash' => __('Nessun Acquisto trovato nel cestino', 'acquisti'),
    );
    $args = array(
        'labels' => $labels,
        'has_archive' => true,
        'public' => true,
        'hierarchical' => false,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'custom-fields',
            'thumbnail',
            'page-attributes'
        ),
        'rewrite'   => array('slug' => 'acquisti'),
        'show_in_rest' => true

    );
    register_post_type('acquisti_acquisti', $args);
}

add_action('init', 'acquisti_register_post_type');
