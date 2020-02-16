<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'vankleef' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'csTRrhw b3{QqFx;HYKtyW^Q[eUg{9se$R[Bad4)~zG[JAyq0|wSV4>x{NrU9]iR' );
define( 'SECURE_AUTH_KEY',  'ZB#U~fn6orTfMv4Yx2YMwm1xOO roYzw1=,,J=qK,5^=J7q1rje^7w6uQb:qC6%+' );
define( 'LOGGED_IN_KEY',    'QrPl-0geNP3r=r3iuP8E`! ni)=X!M/KayMM$YERv(zOFx&1qaGs@S+x%Hd]}.&e' );
define( 'NONCE_KEY',        '#q]a)(RhdD 34q2nt/NG#t_G?!}E0s)6lA6A|[o%_t7V7?y#+rZhlP6w/hr6VpE?' );
define( 'AUTH_SALT',        '[H!ruokpYX$eRCFq(`.wM4 OzV1$ Y}-yf-m$>Y{E{`C(tVl9N=`nIT:=c%VX!rZ' );
define( 'SECURE_AUTH_SALT', 'ET4y^Ls=E NOFfh~sqn]kiY5_1**0ie!DI|E_!)Mn[*vI+!g^E8[y-!]j0}1|jJ]' );
define( 'LOGGED_IN_SALT',   'w1zuE}Rb*~Nlv?w7)kqD$-~^dO0vmF7M.a=CK5ed;i]uz&R e17#Yg&1_WNZ%GNL' );
define( 'NONCE_SALT',       'U3PF4_jMovUpT@l-yMF/Wm._7F#|iJr0T_B_YNy?fs%m1b*Of>`ozg&[+|k?^[6 ' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
