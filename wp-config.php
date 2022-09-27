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
define( 'DB_NAME', 'wp_eval_dixeed' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'wp_eval_dixeed' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'J&IBaHs4574@mz' );

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
define( 'AUTH_KEY',         'BOy//7&RnU? }%eh6#<8O;{{DOd{#,6$2l+$gdZOZ?0_w|-hQw7?!F:*%<~#4)mb' );
define( 'SECURE_AUTH_KEY',  'L[PQ9]vy*=z%Tzv<:ca$B@Nm_sWG&Tqo^E;*vU<USX4_4+;E5Gqe/h-:098]8SGN' );
define( 'LOGGED_IN_KEY',    '>[BmhY4MR?X: &KJW!!vwp+5u 7GNK-p!wF. 2>{Caf0QS-#MCz7F:T%(y=;s2I`' );
define( 'NONCE_KEY',        '}$S*s/Sp(HN2y;9BN,f)K==A,WmyKa|6Gz,nlh>!{@Xr8v6$T4g<MC9}`F:bb4j,' );
define( 'AUTH_SALT',        'C3oLJa#-jO[]tzbi,_:R{3@/m{S3P8TuxY<xq*HQX]lKd#9R,g8`qO.yak1??G[H' );
define( 'SECURE_AUTH_SALT', 'jv+Ws,wM.DlquZz0jY@7R|s|R#`{j=w)DVws2heB:Gvx4HA_ipy:.N~.Wt2Z&xa8' );
define( 'LOGGED_IN_SALT',   'QB8Ob,pPMmo)EFIH#(.yK0Qh&qs9z?vnQ`5s;C!,Wr){6C!Ha.%SY<J5x:=F6pb4' );
define( 'NONCE_SALT',       's<oQIp`h$jL^$4@rr8H=qtST+qId|cH%IQIp81B6)Xxfj)@Fso=gyJ=qplEUPu=Q' );
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
