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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', '123456');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '9A4(9Seodp,Ftl#+>-9E@to#Oz<VAbdK(u?Ow~mO|T$cOmfHK1lTs.qIdWz~@v~O');
define('SECURE_AUTH_KEY',  '([$-gAR~|wrm8B.N^X5 U0}I/79w9AOXMGjK< 61!:?+DmUdIG-wS%27p%DL)D5C');
define('LOGGED_IN_KEY',    '-Q!X.7dSlMoH}m9|0j>kdSV4=VHUn%qfgxc$`[lcCPrh88kOR)@7Wc>_`MS<K%sR');
define('NONCE_KEY',        '<D=&Z%Zg;oNko.TJ0?mDok+Z@U}i#;noLI*w.A`7pysnBeBwm%:q**;M+eS)*$sy');
define('AUTH_SALT',        '3AD|G(BpM}RJ{fNr4<@v(>(}hh4hWu^Y2r iJwR.I:fSfiR.zZcx-Pc87OFl5MTB');
define('SECURE_AUTH_SALT', 'C_u#F%J*sj}kG=DQRnQ#czH+lQf*~pca)=J;x?_kXzGfN3_K|)MYlN>=uGp:1zS:');
define('LOGGED_IN_SALT',   '!@_O=#;hV}t=soou@<qpa=Y*z:QKkQ=_PUw0q(S</10^1Ch#.^Qh.`I^h%u_J>{D');
define('NONCE_SALT',       'j4M[|mV,liU%id*ZeXGO<MCEbju=-L:N^($bhb3),{NAj?_jiJVcD;wt~?+MeII=');

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
