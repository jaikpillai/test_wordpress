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
define( 'DB_NAME', 'testdatabase_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'uLgXTw749lECu.BDqwdFbkeFonc[U-BpA07ayk{[Xu%sCekoQZc=1C,d%un#KETj' );
define( 'SECURE_AUTH_KEY',  'RA .CfipHfl_kw[90_q2@lWM*wlp=]ZiA=r4gW0cOLO4%c|<H`9Bl8fI:kONWsED' );
define( 'LOGGED_IN_KEY',    '*5ku04Oi*G 47pM;IVP#=~i>J$sCp_gAt`h d5 6ioWnVG#,m;rt$1?r&-GC62Be' );
define( 'NONCE_KEY',        '3:nxwWbb=+o*N?*/^^ko(S]^d&6S[HcO7;jC.K?KzDJQ(SmssHhmf|Nt:#(uT/e*' );
define( 'AUTH_SALT',        '?7`ui7KrxK8<b_|3m6SM_+wI3RMxEbd)&n.18R%?J=M?gCh]V,*I=412R*]#8i!R' );
define( 'SECURE_AUTH_SALT', '8IEE^wS&(8~_dw|:~9C%rO~H:?MAM0o?_^H^U&QZF@AggxP/c0z/9b`e?xoNbkIt' );
define( 'LOGGED_IN_SALT',   'R_$y/f[<3b^9./9Q=%BD9Xw(>9p}KDc!Rc# yU];thtM]AaciP=V7^/_LOo-T-#t' );
define( 'NONCE_SALT',       'hS6Cg)?EP}:yZSc.!XK]mW5&6sD.i>kg;SiI. g4u$0v?fS=F-b^NciQ~Ns+,My}' );

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
