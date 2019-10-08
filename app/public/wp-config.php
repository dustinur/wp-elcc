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
define( 'DB_NAME', 'local' );

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
define('AUTH_KEY',         're1Me2Rcqk6xdEXhKkOvl4rNQgpTgZajwF0md+IFLsI9FBolRG4GvFI1zrIlM5GXrupc7RENJVUD80Rf0eVzIg==');
define('SECURE_AUTH_KEY',  'nKiDugHZfXiRWKPavTv7VBlU1tRn+515j3OEpqSmnfZuOzt6Ejj9IF5bcWBqufsjccTGEjOqjE1ZFMmMpdpbYg==');
define('LOGGED_IN_KEY',    'dsalWbSf9+/L3NjM3G8wz6Wk4xlfJamxabASzTzPYyJvRkRUYTRutzOhWVFrsNvGvgqxnFVD2C2uHSKV4mwPgw==');
define('NONCE_KEY',        'QTiOwYY8Xz2C+nJYb8Wp+y6mdL95WYXTSvmXQBEbWbkLuEFdinzu9uZI5eRHalSOz4zXzIyWr2FB6lcH+FL1hQ==');
define('AUTH_SALT',        'fBy7tdL0u/IlnMeVCbVJMKD78pN0/H5/fzy2NM/BXn6WKSTAMbXwMPWQOHMDLzz+U7cMijyfaF9o6lP9FLTMNQ==');
define('SECURE_AUTH_SALT', '38V7IcNWjWwkxrSg1WN2OsU3o5iNSCiEqDVUTk4s6XJFdJle2fO5nqk7au6dLbWkybAv9QY+4OLfCiVpbpvX0A==');
define('LOGGED_IN_SALT',   'RPKQpvNEOyY7I21XlMpLIl7KQsVBgeVFPj7F/Ne+E81zCTCr2N/0PxOeedDw1nfQ0ZzsKVr4GTkX3BXceU4Wdw==');
define('NONCE_SALT',       'j8HwIdXa+UePxU8tQEX2DX0gv1WZ5XDf+KIkuh4/zI4P3VOyMfFKHbL6f4Hgq2PmdUF7US5bKKRHm1NQ9ih3wA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
