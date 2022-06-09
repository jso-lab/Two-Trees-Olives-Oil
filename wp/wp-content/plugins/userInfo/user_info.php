<?php
/**
 * @package User_Info
 * @version 1.0.0
 */
/*
Plugin Name: User_Info
Plugin URI: http://localhost/wordpress/plugins/userInfo/
Description: Une extension qui affiche les identifants de l'utilisateur
Author: Jean Paul SOSSAH
Version: 1.0.0
Author URI: http://localhost/wordpress/
*/


/*
function userInfo() 
{
    do_action( 'userInfo');
}

add_action('userInfo', 'display_user_info');

function display_user_info() {

    $current_user = wp_get_current_user();

    echo '<p> Bienvenue ' .$current_user->display_name . '! Votre adresse mail est ' . $current_user->user_email . '</p>';
}

add_action( 'admin_notices', 'callback_admin_notices');

function callback_admin_notices() {
    display_user_info();
}
*/

//function callback pour dire "Bonjour"
function say_hello() {
    do_action( 'say_hello');

    echo '<p>Bonjour!</p>';

}

//function callback qui affichent le nom et le prenom
function say_name() {

    do_action('say_name');
    //On récupère les données de l'utilisateur depuis la variable global $user
    global $user;

    $user = get_userdata(1);
    $last_name = $user->last_name;
    $first_name = $user->first_name;

    //On affiche les données
    echo '<p>' . $first_name . ' ' . $last_name . '</p>';
}

add_action('admin_notices', 'say_hello');
add_action('admin_notices', 'say_name');