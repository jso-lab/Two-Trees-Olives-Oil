<?php
/**
 * @package Logscreen
 * @version 1.0.0
 */
/*
Plugin Name: Logscreen
Plugin URI: http://localhost/wordpress/plugins/login/
Description: Modifier et personnaliser votre écran de connexion WordPress
Author: Jean Paul SOSSAH
Version: 1.0.0
Author URI: http://localhost/wordpress/
*/

//fonction callback
function add_login_message() {
    echo '<h1>Bienvenue sur ce site ! Veuillez vous connecter.</h1>';
}

//définition du hook personnalisé 
add_filter('login_message', 'add_login_message');

function login_extra_note(){
    echo '<p>Veuillez saisir votre nom d\'utilisateur et votre mot de passe.</p>';
}

//definition du filtre wordpress
add_action('login_form', 'login_extra_note');
