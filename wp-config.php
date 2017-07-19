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
define('DB_NAME', 'acetourist');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'Rc~Qf{%MZZI~F[-_:a1`Mug<@/mdzZP:L9#C^oX&;@RR3rh0(]N+3axwVJM7k2SZ');
define('SECURE_AUTH_KEY',  'v.H!NFzqwopVz#(Uu[d ZI>JH5=JaA1q,z5@pf(BHTY$[5rh8piRHm`96j>GO}xt');
define('LOGGED_IN_KEY',    'b^ycaYMYE)u3OTM;yM.1[YrAN*lY!W))J$nSeAEkZd+pO*:&~BNW|VPI/mc;k2lg');
define('NONCE_KEY',        'f~?)IF^@CjVg)GH#4: !NN[q}~;*ai5Cf0*Dx7_2XGU @Th?kQ7N6&YUO]IGe#t:');
define('AUTH_SALT',        '@Rk6=,xhUyiIi5vk}axGqQ#oWI8)I|sb.,RWlb1kUlK2FFpOsYYb.SHvka%>*Mn$');
define('SECURE_AUTH_SALT', 'f|#p7A}6RA]*!_E~~u?s /s(4yJnEy?9W~%azGXXMyt2^1TW~Ek)<7IlG54n&~05');
define('LOGGED_IN_SALT',   'A&9-8-~kI.@h>z?rnQz~PxVZc*8;:r?o}!8I*X/t/#Q.u8B{;>5c;yo}]mZ`r3/h');
define('NONCE_SALT',       '}M[pD5vl.Eq.w:owCEhRvwO>op1CQ|nT=lBD@jQm+hk!-J=6;0Udlmp`H3F#6(-k');

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
