<?php
/**
 * @package Recettes de cuisine
 * @version 1.0.0
 */
/*
Plugin Name: Recette de cuisine
Plugin URI: http://localhost/wordpress/plugins/Recette/
Description: Une extension qui ajoute un nouveau type dans les création de posts
Author: Jean Paul SOSSAH
Version: 1.0.0
Author URI: http://localhost/wordpress/
*/


//fonctionc callback
function create_posttype() 
{
    register_post_type('cuisine', 

    //options
    array('labels' => array(
    'name' => _('Recettes de cuisine'),
    'singular_name' => _('Recette de cuisine')
    ),
    'public' => true,
    'has_archive' => true,
    'rewrite' => array('slug' => 'cuisine'),
    'show_in_rest' => true,
    )
);
}
//ajout du hook WordPress
add_action('init', 'create_posttype');