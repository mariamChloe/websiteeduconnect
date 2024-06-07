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
define( 'DB_NAME', 'edu-connect' );

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
define( 'AUTH_KEY',         '$Q3SUr<zc13=/}A`I9Gc1+FYG~a1t!hPjR9(uC(j)} 8p_.7U~2@ZZc`Lj| KP[Y' );
define( 'SECURE_AUTH_KEY',  '|bJxZW8ZYcXC~s*umPG`Q]$ h?5gYn9[P&h<e{G(0MaC_k5zO %wy=uG_-s5Q_NE' );
define( 'LOGGED_IN_KEY',    '8)R^<na_GLd80~c?tzUgM/iq4Dw/p2}T+Kg}*eUl1]#ZdT>M#1.jXW!R//?3NNW8' );
define( 'NONCE_KEY',        '6XgKQ~S3N8dnV@37E}bjso)6W.!=Bz)>Yd;knWrx)sAJ~/+5~47qN+|5raIUo]wN' );
define( 'AUTH_SALT',        '1Pn$5e5bS~KUw~)#E.Z.>|PsFtA-1H%.fCq*mQ 3;lN>yAy=*!)+F~tQ%cxK(;.]' );
define( 'SECURE_AUTH_SALT', 'Ll&3MlVPBSfG:o0/25{fNC6{BJt{3Po!M)u^mPy(UO?ku<65TL5S.H9?`my4]8k)' );
define( 'LOGGED_IN_SALT',   '/OEKZKm8Al-I?L[h_@QFeo(BYBr{{j+ZZt;g=IERn[MWR(@D$t~62k30C4Cu[^rB' );
define( 'NONCE_SALT',       'a^ql: (7hZU}rQr{2`san;hvK(eq>w$hDHtd.>;kqI*DKb.l}c }9.r@}P1Dd+:T' );
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
