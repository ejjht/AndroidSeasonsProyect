<?php
define('WP_CACHE', true); // Added by WP Rocket

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
define('AUTH_KEY',         'PlEXNHPVEyEyxrScB2ruDaLJ8Ubuj4Ti3sqsOiMLeecf8Ju8ftOOiaBAdMDV4owO/LLFTNx9NH/8q1xp8tKPDA==');
define('SECURE_AUTH_KEY',  'r/CTtAL2qjFNHM7UaHmzgsMkCyP2YY+o4SQHGZIn/pgDgoFZwqnhq5+dYIsNxGSin671odvR6sbKZwRKU3Uwnw==');
define('LOGGED_IN_KEY',    'Vs3zBK/NW+iLaJfxtjxcBz3Zzyl9yurMf3ytowgNOIERlWgK1UDagPkxzuJ8ZiZ3zkyyG7dE7v1hA1R+i5arcw==');
define('NONCE_KEY',        'g7QNrbiM+S8hyuGSJ0ZyKkv/tpBUiK15kY3nAmYcXBcpht+mWU/Pug+ta5HiCIoDGb/6xj8T3mhYrCVyhLW6VA==');
define('AUTH_SALT',        '9C7qfDqv1FrvFOnbWhJuP/CmyOafID9Ki6+ztBhtDw59gv2ndOrBO86ZR+CRDJjTiBP6vVWf72o0ti2+JpQ6zg==');
define('SECURE_AUTH_SALT', 'N+s1c7HWip/mQH89SEp67fwU691f0VcjRY3obPIzApruxdcW2bO+5VwVxdLDijlmHPKhDiadBryXRndkvkrP/Q==');
define('LOGGED_IN_SALT',   'UNu3md4FBb0OZ6Pd50gVdeR82taGVYoQ7OqWj6ahnoKmV5p9KMkzstKghRBiGFlmNXZ5v+AKxcUrCnrREvJvLA==');
define('NONCE_SALT',       'c0oAmfjqq97G5fDhVS69ZruHwUcFqMDvaa3PB0condV1ao6pqDubUhLwanwHsfqY7o0wmphTxOcGUdXn344i+w==');

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
