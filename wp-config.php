<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '{L,~.N@)x+8qpNj.A8uiK!~tT1oq7Xp.uyAnN&n7wfh4W_z_Q@pf9{7.#)dzS1HQ' );
define( 'SECURE_AUTH_KEY',  'S?7ha,i0R}!6i+0~yW16@[~+h`e17JU96b2bJ?uAdG:GMD15d>SN=(SE1]D3N-m!' );
define( 'LOGGED_IN_KEY',    '|x9T>J@Z1A.SBxk&CGSLW% Ak.L$@eAx_#* $*_/:k5K$|9U.VDwtF|:?^}S@mSI' );
define( 'NONCE_KEY',        's*2(yit+``MOX/)6t}G(S^<LAfJ]YzC2%c<8lf9i&bI7+ORTa&pJU,_EhPE.xH+R' );
define( 'AUTH_SALT',        'C3Ipx=MGi`tO=N(3*>$=~-?la*,!r9*j_@MeL~,;_KE+PR2~-=fjwj7L4wi!XDHI' );
define( 'SECURE_AUTH_SALT', '8Qry5uf#;,K=9yPy<wlNO=:cX+NOY^K$m[DgKU.yG*KtrV9j{zjL%L1h(xa?>[{$' );
define( 'LOGGED_IN_SALT',   'g|54Iq>#.Y,ol}sEGe{4EJORsJ9@K_V423&kCcU_rAoJ?R~P.PxinAV8Eq+Tmw9 ' );
define( 'NONCE_SALT',       'V//Ft@*9fHP5W[59W03NiN8Ib5d{r`}iV~>C <~qz6Z9e @< LoS^Jgw(8{B!S)E' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = "wp2h_";

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
