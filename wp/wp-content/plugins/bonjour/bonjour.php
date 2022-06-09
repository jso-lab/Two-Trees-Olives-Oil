<?php
/**
 * @package Bonjour
 * @version 1.0.0
 */
/*
Plugin Name: Bonjour
Plugin URI: http://localhost/wordpress/plugins/bonjour/
Description: Ma première extension pour WordPress
Author: Jean Paul SOSSAH
Version: 1.0.0
Author URI: http://localhost/wordpress/
*/


function mon_menu_admin() {
	add_menu_page( 'Menu Admin', 'Mon plugin', 'administrator', 'private_plugin/ma-page-admin.php', 'ma_page_admin', 'dashicons-admin-customizer', 5 );
}

//Affichage du titre de la page admin de l'extension
function ma_page_admin(){
	echo 
	'<div class="wrap">
		<h1>Gestion de l\'extension : Bonjour </h1>
	</div>';
}

add_action('admin_menu', 'mon_menu_admin') ;



// Afffichage d'un shortcode dans l'article "Le loto"
function first_shortcode() {
    return  
	//Récupération du contenu de l'article à partir du fichier
    file_get_contents('content.txt', true);
}
add_shortcode('Bonjour', 'first_shortcode');

// Ajout d'un hook personnalisé qui renvoie le second point d'attention
function second_warning() {
    echo '<li>Activate the extensions you created</li>';
}
add_action('notifications', 'second_warning');

/*
// Chargement de la feuille de style qui donne la couleur de fond des articles
function add_custom_css() {
  wp_enqueue_style( 'custom', get_template_directory_uri().'/custom.css' );
}

add_action('wp_enqueue_scripts', 'add_custom_css');
//Définition du filtre personnalisé 
add_filter('filter_strtoupper', 'callback_filter_strtoupper');

//Fonction callback
function callback_filter_strtoupper($title) {
	return strtoupper($title);
}

//déclaration du filtre wordpress
add_filter('the_title','callback_title');

//fonction callback
function callback_title($title) {
	return apply_filters('filter_strtoupper', $title);
}
*/
