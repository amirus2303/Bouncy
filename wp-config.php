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
define('DB_NAME', 'bouncy');

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
define('AUTH_KEY',         'q7xpq,QW4Y^,%~8|rN]4n:/NdS$SD(xoH(WYV)oE***YtBc)DzN kXo|d,Z#{iIx');
define('SECURE_AUTH_KEY',  '2@seQ|K={hZqGyv_fg%qfKn`K[&;`A%7$*(AZR<n0o]sQrr)z=D?EHe+O|,btEgQ');
define('LOGGED_IN_KEY',    '?|x&&X-@]B!?,hW~|e6loa3~g~;GcTQXhfn3dNvNE<X7[8(OQOWas|Uvb_E4xPhR');
define('NONCE_KEY',        'iEOtK=-aOP|WL~O^[GDcIbSxu6C6KeB-|]7H+%ZA]C|=i`!6;M;TY]_76/Y239Qp');
define('AUTH_SALT',        'q,<7U*A,DM12Pz09?^zV.*fF`>fvS,Q:9|4|T|)^{C1e5ob}$.mafzGY+!i7[xfv');
define('SECURE_AUTH_SALT', 'Q6Qm.J*7kJ%w-y8EC!>-8XS% ewg{h3F}p{4Z&BV8dA!vx]3AAWrv]n;8|I25za*');
define('LOGGED_IN_SALT',   'h*7E,[6@p<]9|QqnQ|jXu^4afYP_9eK4yVP=+_r+$d-+`Hj%$<(M@bxb[JJ$SpF,');
define('NONCE_SALT',       '{{YMBsEGpDO[]-^PEZ|)vN)rH!@)GY9ho:c`&blj8JghLbKTS{|~md(;Ug@vj*L8');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

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