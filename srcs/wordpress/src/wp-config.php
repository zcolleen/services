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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'zcolleen' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mypass' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql-service' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'YIR64VW`p-dM$RWM)mG5_)sRl#6+ALD/ P</Mw=Mg/@XZ`93-N+/g0++aFjF~7:O');
define('SECURE_AUTH_KEY',  'id/>B,8,m]VCdH|mI*CFl+IE]]|`08xT;5_fP^E9P0VB%/|w+--%Zq+X[JX)_%iQ');
define('LOGGED_IN_KEY',    '_*fL$IRpXER~Fd5hrQ^}DiTDPiKcnR5bgd%l;3thB:zQko]|u+#bQ;,zo?-j>Avt');
define('NONCE_KEY',        ')|$/|k z M:{uaWsmtWFH71*EYH^6dPrZ94k<<_;.Q7;{)DDrr`#+++j|,AI$6- ');
define('AUTH_SALT',        'QAtSi--5AN[@!%0>WI&xp}RzeWA1ZH.w/gwG0@9=jRfDko|J91nN&5b(,X|C:gs ');
define('SECURE_AUTH_SALT', '+m.^-Qi0#dlbNlT+L<3mZYaw;c~P|Rc2 0zvmuG}w&C67i`]KCRURve]+p#jll$K');
define('LOGGED_IN_SALT',   '4bu[`- p.i]<aS?$k0G?I4 ) aPx{Qi?br4BnJOYf|8CIoiDBSAE|^NFEMnJ4dE-');
define('NONCE_SALT',       'cvAq.T5l|4R9pu/T^:y(o_-Sh-T7NyyTf$[P$W_qW(i[1yj>`g&x*-HUJ`c|e!(/');

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

