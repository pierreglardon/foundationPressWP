<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Le script de création wp-config.php utilise ce fichier lors de l'installation.
 * Vous n'avez pas à utiliser l'interface web, vous pouvez directement
 * renommer ce fichier en "wp-config.php" et remplir les variables à la main.
 *
 * Ce fichier contient les configurations suivantes :
 *
 * * réglages MySQL ;
 * * clefs secrètes ;
 * * préfixe de tables de la base de données ;
 * * ABSPATH.
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'foundationpress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N'y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '+-(:OpWc3J(D{V6F56FHON+7s8!Y4a]2d%FM$]c^ATo4Er&4zMwT :)nbIfWkM^,');
define('SECURE_AUTH_KEY',  'Pp3,epYe/7zJwoUM(T&@$T8+`H^g<]i0:4iQ4yUqq=90^#n,yNV;Jf:JEg5j|:R`');
define('LOGGED_IN_KEY',    '}YX1+u+Rpb)36J+y`6n#YPV*|js-}qx33E<+G??B;*FzEwVWs=cr+BRi4+)q5[(9');
define('NONCE_KEY',        'z>Wg`oI7!&/gZ44<Hn tz-)IzGpttS-e:plt-uUzo&&mGvjM-]J>,,N-%rLs|}4S');
define('AUTH_SALT',        'qyINuk54LJ|X.~YcK5J,^M8B4.Y6B*7QT4fkJ|Az>73dk0fLv5X|]IsWKU`5w/Uq');
define('SECURE_AUTH_SALT', 'M#Ra4lIZSS;%&6$=|Y$fw|4zAq4_?J7+l{^00m]-RiUsTH|5f<NNBDnO]&6.{?hp');
define('LOGGED_IN_SALT',   'l7JOW@RI4<IMd8$r )s:`XFx_e!|at2?5pArKrH4Ppx]eQ=@v)GcASBk+hvgh752');
define('NONCE_SALT',       'q|G2jUmra&Bbz<1+xN[y-dhEajr05jLb-ral-0MnfqQ_5!iH/hJdKg67GhG*0^j2');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_fp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour obtenir plus d'information sur les constantes
 * qui peuvent être utilisée pour le déboguage, consultez le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
