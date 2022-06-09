<?php
/**
 * @package Admin_phpinfo
 * @version 1.0.0
 */
/*
Plugin Name: Admin_phpinfo
Plugin URI: http://localhost/wordpress/plugins/admin_php/
Description: Une extension pour PhpInfo
Author: Jean Paul SOSSAH
Version: 1.0.0
Author URI: http://localhost/wordpress/
*/


add_action( 'admin_menu', 'submenu_page' );

function submenu_page() {
   add_submenu_page( 'tools.php', 'Informations PHP', 'PhpInfo', 'administrator', 'admin-phpinfo.php', 'admin_phpinfo_page', 99 );
}

function admin_phpinfo_page() {
    // Affichage de phpinfo en désactivant le style
    ob_start();
    phpinfo();
    // Pour contourner l'altération de l'affichage dans WordPress on extrait le contenu entre les balises <body> pour ne renvoyer que le contenu sans le style
    $pinfo = ob_get_contents();
    ob_end_clean();
    // Utilisation d'une règle RegEx pour n'extraire que les données situées entre les balises <body>     
    $pinfo = preg_replace( '%^.*<body>(.*)</body>.*$%ms','$1',$pinfo);
    echo $pinfo;
}

function third_warning() {
    echo '<li>Customize to be different</li>';
}

add_action('notifications', 'third_warning');