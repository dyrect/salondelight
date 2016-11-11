<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp_salondelight');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'password');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'd;!Xy!%:`d,s1E0u{|SctqDnLS-|3H]WOhXntthHinep7XqH(%?Wv_P--oqpsk.B');
define('SECURE_AUTH_KEY',  'zDQ.y*-OI+p&2!`|Eppd/;}nJ0=qRh[|R&V>tW0eyatjPus0@fw)4$3V@0*(3 S*');
define('LOGGED_IN_KEY',    'O4Ijk/:n![&KNiMxA(]%=dGbK`DJ&__i;U=1yaLi!I%p55fn`%hsY+3,P/KD|.V.');
define('NONCE_KEY',        'U<C.[_>5$3A&fe!R| aBnqxBOQY/Ha1W32Rd:s]GSeSsz%0E?dv|5[LFXV>0OD&K');
define('AUTH_SALT',        'W,Fps|`6]RQ>P.2lx;i&M2O+Sh!}|=.^xWS$OPR&DDGA9dHHHqEtD*]YUFOFVSeZ');
define('SECURE_AUTH_SALT', '#;J]aX&a:%9W5$VgZbIwms~Tq3,A3[dt$[v=T~+Nb>bR+Dt|]qNO2^~OC!=KB%H:');
define('LOGGED_IN_SALT',   'u/={@J3w/]gIXTqemK&WTAtOs/J]O~C:F~x.Hw<|{|Y+PXu[xrYjdpEmrmJ:6D*M');
define('NONCE_SALT',       '{Ky7.T-w>| _d$</T1QbqNp~-er<-H1m|8:~29VZ@JMQm,uOP53pm-_h#EUO3D5h');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

define( 'WP_CONTENT_DIR', dirname(__FILE__) . '/wp-content' );
define( 'WP_CONTENT_URL', 'http://localhost/salondelight/wp-content' );

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
