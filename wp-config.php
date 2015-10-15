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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'rr_mvc');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'wrH3A&m;]P|R.2I^p|ou?6RXCRI|W`S8g~7$EUtb{SI6Zg1M!XX-;/qVbuTQ[`,X');
define('SECURE_AUTH_KEY',  't{ycqds4`9qBr;k^X:iG3}W+&LZp^srAIW-J%?>irMaR=|ha3hRUX[Al|z*VChp!');
define('LOGGED_IN_KEY',    'Am{Ge6[X[-LuTNpaud~+Fm;!^5Okz|pR*h8gyq#OI+Y1k`V:r@s,Y3(fG7mtu$:0');
define('NONCE_KEY',        '[K|3Lyx6hPH.TJhXRuz.-y+b<T|Ixm[[VR_eA+u8C0Ze}8aLG W0<CZb+wnh#$aH');
define('AUTH_SALT',        'aoiji4:M@i]IOid%)0p*XzxG--71?fQJP]U6XZAb~lUj$[[.,j_f7M_[@a}Q|Rtl');
define('SECURE_AUTH_SALT', '9)yi82TJr23+<c$`A7u)V`YM3>wcGz+,clKz6;i*}7A)Pn9k}3wn$yAvWlU/uiCJ');
define('LOGGED_IN_SALT',   '9z+tbDUJ}I!iU-0$h|Kr5Bp|i.0CYla-j8hY{XS:<9+->|s|R4uDE;u63 5~9/-l');
define('NONCE_SALT',       'Q[P[Y/&+hd2=[is/[_T T)xLi<dcYn$s+g3IXFE?I6>pQX%hGE*BL&Dm[?R)Qna,');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
