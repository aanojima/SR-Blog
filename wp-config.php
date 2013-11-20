<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'aanojima+sr-blog');

/** MySQL database username */
define('DB_USER', 'aanojima');

/** MySQL database password */
define('DB_PASSWORD', 'roon3th');

/** MySQL hostname */
define('DB_HOST', 'sql.mit.edu');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '9+|=+/k+DYU1~{YO8u#Fl_R6j ~ia,#V<}>G[<z0>c)H@k<<XLK-a16gjM%I~J*5');
define('SECURE_AUTH_KEY',  '*xLF1gjW9@1~p+!t<8|f7|iWm4%og#P;8`&jXXXl6B!]z^$ld2MJww24ZZNoB3>+');
define('LOGGED_IN_KEY',    'hMImy$^mAw8nC&4%Un3/c1-Kp)j$-hH 2b~|9];g4 /lM,SsA5kp3!iqRvU-nb>a');
define('NONCE_KEY',        'lrRabn[w=b`g}TN> +}F^%/Z5sO)|w#Vjf#;d^%vm6~W-r|/+AlA~xP[)u[QU(5@');
define('AUTH_SALT',        ':GubRS$$I5f)QJv{e$2*-+:BwdCr|`^-#=#XHQs!@q .b6r4,G+ol-Ub{}{S5~-&');
define('SECURE_AUTH_SALT', '|]]V&`-am/i{3a$PzB%m bk^,62Mjm$@gJg?`4W&AyLU`,2%cM]]Q1#(u~JW~!La');
define('LOGGED_IN_SALT',   '4T&G]-y+*ff-S3KI~+[cQnL4OMW@]!N5RGX^</WQI$CQOiC;dI>kv2DmJ$lZqu $');
define('NONCE_SALT',       '%fhBdc+-.i b=liTC?%94.YmZqiYmV G{$9]^#|VHk(pCkAceby#uRv4R[4OhoH#');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
