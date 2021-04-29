<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '0_W+=Alu>:B^lklO$3gSvz@9/kg5BDQyom<)i#mD9*WAFS:ou::ybv0sX8%;Q:Q_' );
define( 'SECURE_AUTH_KEY',  '&JB_RkMKi$F{1gCGqh}adsLY-<6p[YW6/?64uZaV#?3m :&nU|;GwgP,b*@j&zd5' );
define( 'LOGGED_IN_KEY',    'wbo}K>..F0Hk5QtVg3_{{l@A6nV^Hc%03Obdu,uvb>,>vN?Q83XH+;4|Pz=8k~Rc' );
define( 'NONCE_KEY',        'vYU$vc!On!QMVWq:?|9R|BEN.V4QV)O5:o@zv.bp6Z$P*_;05tn6G/W?{4J]7.L8' );
define( 'AUTH_SALT',        'XUovO7O|?fqNc$sFgXH4>X>{wTj[K4M.8)0ubnLjIdULF)LMMjH&`T+{3!EDq.0U' );
define( 'SECURE_AUTH_SALT', '${UW`!D@UL6p=Px-A$q]8o~4nj0G2EuG6+?7I>V~:kb(p dLOmry<(7w]=5CE7Se' );
define( 'LOGGED_IN_SALT',   'k,;6m`8oN2|oS?$>)]v^~wT2M:95,H{jveeqw_;cBi*LBxst#fzcB<*XYawtI?wD' );
define( 'NONCE_SALT',       'Q53Jlo1:Kjj|izqthaZKP)]+Zq7<T1HDaa#JqJ<E%YG[Y|mv2u$[JI6/TTy~r;2:' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
