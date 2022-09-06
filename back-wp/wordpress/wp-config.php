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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'DmXoMq` X0Xl8}$>ag^>4(Ec#h!HlK=K{>yEGEj96 nF:n+`gBL<HIEab[I+0:t^' );
define( 'SECURE_AUTH_KEY',  'Z-acE9rZ6Ks@~7P+X]W>d#u2[K4!1{i5]&hk36t4A]!T|0DSb#Ct01W,X?DvI2G)' );
define( 'LOGGED_IN_KEY',    ';_bGNf:@OKlF&`%-Mj>P=2|m=Fst@$Rc9%%jPo-<sx/LpFaDgcz,<34!uk>o8LZO' );
define( 'NONCE_KEY',        'ol>hiYiOIUsd2B!qD%gt&{D(]w:pNS@:;(G$=f~Mn(AEE0Uu#}|)}]L%3PRS=n&2' );
define( 'AUTH_SALT',        'p{Arok9=hS?Ya(VnvXD?NB<{VT*L]&]su%e 3<0X pXs=?tU8<u]?@qXk+2:i=V}' );
define( 'SECURE_AUTH_SALT', 'Luii/k:n+HE+d?w`y,NECF4g,/Z@-MT8%Q$G[B.{5_VIc/9uoRfq[imiDN`q!h2[' );
define( 'LOGGED_IN_SALT',   'Z7c?|:+oJL%ZB`h+O&5Wbz>#4TzHLY{29sm-jaK1Q!jv([-CgdJRf,c+LN]JGK>r' );
define( 'NONCE_SALT',       'y ]W*ab~1B8Lp.,=/@#U&>@~dzJC+r@P L1;DdW+q9-k<tJLt;.kJaxnt3|qGAcv' );
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
