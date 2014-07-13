<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'seniorhu_database');

/** MySQL database username */
define('DB_USER', 'seniorhu_dbadmin');

/** MySQL database password */
define('DB_PASSWORD', '0K[c@#qd.mSIADCxr[');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'kkYwvwDDGFD02KaiZ7z42ATYVl7nt5vm7Xo1jo9yWrClZfODEF8lwrwnCQ3wFO6h');
define('SECURE_AUTH_KEY',  '88kPQwL4CkzdADgX4CqP_Tc9oMrQ1YExpK3V8fkFu0SnqA2oi9KxrGr9_17wXE7q');
define('LOGGED_IN_KEY',    'vnZpcxU_HIEc9fEgpQeQzXbzI2MA_Fbei0kBeCVI8riOCdBgviKn01mtjx5YUfWe');
define('NONCE_KEY',        'DYZCPshjS7B6N3hSkf70r0YX5m1mW0f7KdEcIvqPkNY1E2IINGLj0Z9EzsswPEns');
define('AUTH_SALT',        'tPF9lBpRzedb5mm8oMjdPDXwceyJ1ZSs3dxe_ov5Y_s61m31m2z_1pkdSOUjuFKU');
define('SECURE_AUTH_SALT', 'feW1jfAvIhLjOBp1Ts6S9aKPeC_8L7x5VDczxtTaZ33wRKvVYpIE0mu_9EYybmew');
define('LOGGED_IN_SALT',   'psRO9iyr3Vrg_e4ZTQZtSp6kTF3sI0NIARCnrZrWkJP9PF95K9SGqxhaiGybyZkE');
define('NONCE_SALT',       '09xKAJ6FuIWmQZXLwSYITAKCCBxWMSK_DR3QumgP1VT2wOsDYooqIItjvdRCWYlj');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
