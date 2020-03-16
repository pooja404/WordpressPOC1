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
define('AUTH_KEY',         '0mDRubbCfz90J+TmpdGuxzUPGpVya4qD69x3ytXsC//MxdD3n8ZbM1OiaRV4Nduo/lNZZHg+nnSQ4/e/oDc9Fg==');
define('SECURE_AUTH_KEY',  'jCGDhyIs7lT1G444zMZhnYuXAT9+IQIYGerZa3JNQM8jEnFxkMXIHRDvojVtj8boBItII1PwVJm/4v474CxXuw==');
define('LOGGED_IN_KEY',    '1cQw9zsIwNHaCDpk4tsNblm9s7FoNUAncmZng4v7izKjBiSusCnWsjeuuEqHHxodFJe6hyOCOHANVuSGMf08+g==');
define('NONCE_KEY',        'O3hteYko0rnvl1B4wsgkmKBdMzETAXQWD8IcQN73d0wCTcdkobWnnwBl4IIyuG4NJzsOkttFARseBoWsuo0joA==');
define('AUTH_SALT',        'TkgxoOm1wkbiEhCPfmHCL/LWpSFfoTOhWD5X82QjE4Zpt99C01E+RWztXJQAgOk5s13WgtVKU2kayTufxEcTTA==');
define('SECURE_AUTH_SALT', '4LZwEAnXtait7weO6fb0t3k3F0Ed5M4ONun/au8+dNy7cYF2vm9arHpihF5aq4GlYf8AbYKLvTs2YukeveXbUA==');
define('LOGGED_IN_SALT',   'uKiCOhtURxTw0431J4EVL1L3gDDHJuDPSAAU6svREkjN6Gfc6pygNJBnu03f2Hb7Anc41a1hqbqjS4xJF/8Mvg==');
define('NONCE_SALT',       'JFBDcHnXxW7gv9n+IWuBgTUd4feNLHhKYi6/Q5gA1n1yzS46046zGf+BbmZMHXAe4PiA7GkP/2LQAI5vgYhrVg==');

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
