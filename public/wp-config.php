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
define('AUTH_KEY',         '6qsemEpdV2wUndhYhpO5Tw2BM7fiYZGnEQ8dzW8m5bTD78pokm1uP3u1mOQKVh6O5QAet/a4r0aXcSGOqXyhQg==');
define('SECURE_AUTH_KEY',  '0B0vmLCdlTrG/ywIWAjlZqBHbaAQPiHFrZqZvlGDcdT2uAOi9WS43dRzhuJNp0tkQyQ1eXge7dCiyUMCOhMIOA==');
define('LOGGED_IN_KEY',    '3jJqaXQx9pG40nz4wkOQvgxrK0QylCip4oE3RAuokpiuYK/yYIi1C1YS9wNXGP3KPeCzquYuEclFY9QUuTmfWA==');
define('NONCE_KEY',        'UmACUKOk2rQ/G23/5iDH8OTx28DO/gSzmmX44+vW0aJ3ESJn2mPPddMjFu4seDhnR46cEKSsxy9hhwi1p3kQvQ==');
define('AUTH_SALT',        'ms8oo0BkDY4lMm7J6AMmsZrVazh1CAfGPPkZIbwtTpTiz4IJ7jU+Dc8eKSSndNo3QTpIeHjzsT4sK4gejaA27g==');
define('SECURE_AUTH_SALT', 'd67Dx0c9t+BiMdnEglxFw1h4HJ4QU1NdLy9BLO1g/QGyAKod4IWocobPkGgxDEfX7p17Lpv8FgylSstzML/s8w==');
define('LOGGED_IN_SALT',   'TgKxV4RXTyaPla+xJr6ldWu3tI4vHWGRxkK3wZcIM5HEEzKEp8UbV4IAGrVSbI89q5kuUy3rK3AIdYVjj+A0Xw==');
define('NONCE_SALT',       'swoGuB1sxAHHpUigwJX586A5g2TINMhS8AqbHKeiAZ1SWrWcpZaF6TtdOHOIRoIn29Md3Ipu6vyAVpeD/H3T9Q==');

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
