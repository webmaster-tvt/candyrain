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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/home/u389210813/domains/candyrain.com.ng/public_html/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', 'u389210813_candyrain' );

/** MySQL database username */
define( 'DB_USER', 'u389210813_candyrain' );

/** MySQL database password */
define( 'DB_PASSWORD', 'tAaV3tT1' );

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
define( 'AUTH_KEY',         'ni76efl3cj0o7khe3gi8zcycj9jwrxlmmzuo4vizzcwjdaqq1uetw7ycm6r0f20q' );
define( 'SECURE_AUTH_KEY',  'ge1dd07emyprjcb4vxrieoqw2q5qupl49avk2vdqcsxqc8exyfsgzsqo2qpow7v9' );
define( 'LOGGED_IN_KEY',    'leotmcngmywz7rq5xp0vckn0grgtvoptguhbr0nuhvlxeiplpjtjhjdkmhswr3dl' );
define( 'NONCE_KEY',        'wld4aw1ij1kdbpw7zfrvm5qwsk3nwbxrrt4zyilbnn0tbahkdiqvddojzvvhbkk6' );
define( 'AUTH_SALT',        'xjtr91jorxqj336gdkgsvjtko3qtewmiv6lgltex0hqnrb7jwm7j7fnyoroxfm61' );
define( 'SECURE_AUTH_SALT', 'oa4ekxpdbdz2ab1nhwu4k5dugwovrrwacxbjnaan6ndxlub0sgdmqjzgomul5ehy' );
define( 'LOGGED_IN_SALT',   '8wsms01iizestgajfa50jlyixbyi0vqpsbfcusfnnxkmv3zstpakwpbuitrjcsqf' );
define( 'NONCE_SALT',       'dnvhgwabtm8lrltgghs0eriymxqkaomuzw2kl80juqjuaypmwpmv9b1fguouuudy' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp0s_';

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

define( 'FS_METHOD', 'direct' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';


define( 'WP_MEMORY_LIMIT', '256M' );
