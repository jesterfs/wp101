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
define('AUTH_KEY',         'JwYKVRLrgB56pZg4YmN6TxsC16do315yMUBumWYfYux/AH+nvLBq7hZ/g/XJIURhY+2drcYYx7tHR36AWqPesQ==');
define('SECURE_AUTH_KEY',  'hUbGnmWbxOwXlA6Q5svzSGr1evan8HYxbZFhq9gQrXe0hkNh/zzCgYkHBFztPLVl+pDYx7bKy0MuSQgze++BPg==');
define('LOGGED_IN_KEY',    'qRsExmQCqVJkVPK+3FHP1OUsldPfYNHxwrtwuilhnyzHrplOMdnKO9hQy9UqAx+BJ134qSSdYyueZyVdEuczAQ==');
define('NONCE_KEY',        '/awUFLHsQzjO6j79QO2RbthpNuKlHPNV5tw2eS4WTy3VEkR6NwhCTMFkdXOg1gJ8KsHwJOSm3lNtlIRbw/bMOA==');
define('AUTH_SALT',        '/yfRUJeackifQE22J/VmWqxM0AKuxwFp8NtYBV+pG73MDN7HOiiE7xvcx3gH+jVChRbLKhrlGvTkwb6yUS4Stw==');
define('SECURE_AUTH_SALT', 'cIm/F/+PFV4V8wNsBWhjigWHzCYurg4iiHtKNjGPMC2bjdjXeQ5lsJL7yTX05NA9sQxoBUc5ByGJRf1ye/D4qw==');
define('LOGGED_IN_SALT',   'AHetr8PwRsZq5FzRFlPjnItOsRHDbsWLa1vRYQCAkCfKJN4qDssIjP4e1WJwhimJTY+U/tA0jvJAVnZNHuB53A==');
define('NONCE_SALT',       'NZwC4xflx00yB68Ry76xea6+QdD5oRY4la61QHlPWR7GhpvPgUd2G9gTT7/cZx2uxTzrqN9SJC/TFIfXawBMqg==');

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
