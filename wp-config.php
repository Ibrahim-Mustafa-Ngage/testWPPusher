<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'Xse79pvh5+nFlWiaFATvF9DcMfzpLE9minNgfkRVd1q9yo8RcmrZjSwRo3qEUGUbNnKBAu4e/BcLIjm+5SkMdQ==');
define('SECURE_AUTH_KEY',  '6y6RzHZtV6yoE7XnxA/j7hmsQfPCvviMjLN2PTTzu3TD6Py2VHY8CnAw/cRYaYi4wvd94QPhrjNG2agdJiagWA==');
define('LOGGED_IN_KEY',    'jJyuhOG48vi2FsJWU8vY/pUcWUnSTL5Q83FXCgFQnSx6y0W0EwYTRokQN1PGXf32OWxSlLD+/D9/1LUlcNSeoA==');
define('NONCE_KEY',        'EiVRWxVIS0UaFGsM7AHq3hjvztT41erFbYUcfCuagCjtK6y7BHoBcRtcUPsL715+JDGtzLoEGYwgVX+70BZgMw==');
define('AUTH_SALT',        'MI+eyr+OVFJOxfJY7uonn+bqNv7uJ/SSPX9mY7x9kBfmDdhzuirYujjNn/ZMyItg2fEJN36j0p8aiBHv6F0OBg==');
define('SECURE_AUTH_SALT', 'lvnkRKmBpFCDDNUB1wljgoeechp7UT/BqdxOQU2QqxgYn7zj5kNxZLL8aV5vvYM/5M6vsJGs6R0znDgI+2gU0g==');
define('LOGGED_IN_SALT',   'N7B0fzBHW6Z4T3iSXfBS8jZ8jTIommQNuXRpcfg8cTR9e5j7XxlWhVyyXSL4fC70VL7LjNQpMPsOaqGGapCEQQ==');
define('NONCE_SALT',       'fYgKWzB7wA/yaxqoKtJt68IorN63Y2RGGe41DxB+KrHLbuo9LmO2nCcsnTyP8uQ2S2hQXm3ToF83z5ZuU8hf2w==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
