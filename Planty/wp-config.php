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
define( 'DB_NAME', 'planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '{+DpvH8uX%Y4nS[viz)0CXwl`KHMv/{G[}Kp>z<_L|klVw$Y@U)5n,FVc^bV-85-' );
define( 'SECURE_AUTH_KEY',  'Q.ovWa}oPHcc&.x_o(:0uWJaqO2b KIRJ4{}VieQj!>bj6+{R-r+q].<QXdKMT7O' );
define( 'LOGGED_IN_KEY',    '~.^hRGFV~,3O^<n n%^AB3^.l7ZkpP?V%Wm-oJdLff1LarG:1PWhF8@bNC(ioIHP' );
define( 'NONCE_KEY',        'a-cxhM,e?eH=O.v4)n6lUr`+QueKt*x4eKy/!-qxNgUK#w:-6(jyiWDA#3n!/zl2' );
define( 'AUTH_SALT',        'OLe2vx_Y#9yOE+I;9k>:dRF@HbG1vpw(rUUQ`{j8tJc*:=-t#T%|>f<fhp${`hex' );
define( 'SECURE_AUTH_SALT', '(z{^[$d<R46A)ex1~5Ks:_8mdsN%wEg@b#>xQVd0r0wT|ORC~6w/pO1Ep2r5G7uR' );
define( 'LOGGED_IN_SALT',   '#sebu&e]8:/~}Cv3||UGKK7).cav~?AIAHzUGfsNJ_`$gfxZG|_(-J<wOf&Eeb)d' );
define( 'NONCE_SALT',       'ptY_k@?qmK%>GypZ?oB,+){@$3WmE$AVILUM>2;`L1nYeq}IgQaKIS!UTtNZ}X1C' );
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
