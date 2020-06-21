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
define( 'DB_NAME', 'ultrite_db' );

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
define( 'AUTH_KEY',         'j#fSPJ*@Y6Yit__5~H^F#{8F;@+aWG|TGey:Xb =pX~Nq{pi%ej>&JI-a&]:6>`R' );
define( 'SECURE_AUTH_KEY',  'P?Gl>QHL/<~(!y*|sir~u)8=E8?UB~/d!RbO2tS*,iEw&I~tsC$V{VD4L!%oj?(1' );
define( 'LOGGED_IN_KEY',    '{Y<}:t+ihnBLQIE|>g[WJe1)%/YV$ L!.>XGa.,)yI#>R~SzKx)D2B(N0V0xYcD1' );
define( 'NONCE_KEY',        'H_f[`OH>?Crh}MG153WCT,7kMTeHhOIq1/&}L]A2gxwEa%u=eR`fQX L(n,m,>iy' );
define( 'AUTH_SALT',        'Yie3={F~MEyh`6xp(]q!ckGT4WPcVW2!g)~{-Y6<{5Y!bUTxX~7{AZSC>Y,%)t~{' );
define( 'SECURE_AUTH_SALT', '9a10l(bT8cJQ97_ZQv<^vHYBek)=)Sw_;>l#YdPH^k&7OzVIX`/]*]!Fggea4pVA' );
define( 'LOGGED_IN_SALT',   'h/Z^26^Ob!8/w?RfJB*MrB dlPKG|UYYi6-JeaN[e&H%{d@lvvP-7-ngzVGv!YVw' );
define( 'NONCE_SALT',       'aeDSY2G)o7JuJG4_BAHRa3 l&Y~)hJ_EM_tTuxRMUQ2<lec9L/5G|<zkBfDq,!FI' );

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
