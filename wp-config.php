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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */
define( 'WP_DEBUG', true );
define( 'WP_HOME', 'http://vrsea.dev' );
define( 'WP_SITEURL', 'http://vrsea.dev' );

define( 'GOOGLE_MAPS_API_KEY', '123' );
// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'vrse41294970463' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '*{!vG5t VIrKH#$rMK0?yPD{rG;$`C8$5`]FB-p-QZ&$z+GbhQ]cl*`_ob+;A$T_');
define('SECURE_AUTH_KEY',  'aVU6X.$WaC: ,hxznF;m.6d.(--eHbRIv.N3KF{sd%6f*#NR,{I~; t%8Ug>K&8a');
define('LOGGED_IN_KEY',    '6x[Vmn(INZkXqz-VmxHl4.ERaT!H]uwIi Qo1;tR-F#a{;4e+PZu3V+kRz4@IpS0');
define('NONCE_KEY',        'XfTF(@`RHI bN|-s_/<XlE@fzP <};I*YI#?$3Zw#7?c[=#*~L?bmL0*AI++LeHZ');
define('AUTH_SALT',        ',MxfZh(5HKjoN2(%)DJYj@4mZc3:stn5Dg`qL!)ZLR*uS>|C*[2;-{yF9f^`IoOQ');
define('SECURE_AUTH_SALT', 'l]UlsS3|7b+(yG8O~|6ehYcGpJPkQp,yp~?Zl(BqGTP;Ep*]!Z&JMDpU0bf(wq64');
define('LOGGED_IN_SALT',   'sN!9u.6[kwx-u CizR5U`8|(:y|#ir8BMxd9,w_QI+ 7&%=/|?A%sX+bLS}n)[M!');
define('NONCE_SALT',       'kTTN|5<zCo-#2Bj#;L$ nvg}7~+mdXI|43A3(%B*jUj2{9kCJ+:w~3v_I_!. HKN');


/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
