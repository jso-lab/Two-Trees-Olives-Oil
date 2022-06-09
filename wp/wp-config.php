<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'workpanel' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '{ML@;q:^uqQ&C5G#kcY(60Pe3A]% pyjRjT8$4Fw5NQTOD-?k|znO6![eJMK)kh}' );
define( 'SECURE_AUTH_KEY',  '!yK5>KRFw58E*6BNm:IZ&5xJK/+EI7|y?%EuJI@)!?n}v~<rWA7?TLAl+h[A%4bH' );
define( 'LOGGED_IN_KEY',    'VeH3QW4~3yKmL]%t%ff!!+i_5o{?.GWzA9.g5dz&u,,CdsFU ^E>f{ld`DhBfn`b' );
define( 'NONCE_KEY',        ')m<?8p9~oy?OR*bi)K+O_u@.P;<pM|5si,`8CPRBQV?h68g~?,TlioggrNGn4{td' );
define( 'AUTH_SALT',        '5{49nh*]ER{YtEI7_{[U:jlC~Kne6+!YnC(h{iAJ/k.HNpF@^.(6LV;8N=!$vu_8' );
define( 'SECURE_AUTH_SALT', '(xJj2|[E0AA3{>LS0$p`7vkWGt?%t9hU]W {N<z5u(x52.N{Q`_av|16k/-TvIk[' );
define( 'LOGGED_IN_SALT',   'E#eu$zg^R#I8`Xk.OkLF|]{m^g}g/#LhIaM}^f8*W(k Cq8Sj4z_[.K/U*op9 -W' );
define( 'NONCE_SALT',       'da4&v<Eo@)qq2U7Y9Z2-E^Gu6<3ra)$#E]Lv-,(34bWPWqlvQi C?=Y*}4<2r2{7' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
