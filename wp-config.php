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
define('DB_NAME', 'royal_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'admin');

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
define('AUTH_KEY',         'EQw=v-| a~#egI2#nlb^=!n=sH+S-h9!3|oO&K1(t?Y,S-n9AV7L=Y%+V%8D)_m ');
define('SECURE_AUTH_KEY',  'W?v%3Y]<R8<[7cAdOT3NZ:3;h.bEYI%Jk|lDmmfhtG{f[L|8eqfC48._{B8+H=Do');
define('LOGGED_IN_KEY',    '%^mR9Azm~.bu<p,{>Pk)&.DI#(0Q/hj&o4o||sSnNSz;*~Ar(-.XRgt]=Rj,)&`+');
define('NONCE_KEY',        '+)9gSSGh&l4|(H-.a8C&38H8fStEm,bID~RNK2|xt-`~[YIqnnroDAQlBi#Spvbp');
define('AUTH_SALT',        'iDG}b/-[~3GVq-fsJ[X0^3n([+rQEQvJLMsx:;su}di9v`[NgQp^8. fhe>_;4Fa');
define('SECURE_AUTH_SALT', 'whVw|n>[+6lBtt x]o(F+}jYXdB{((bsRYU>l]ZuI_;oE=[=T+< a`No8UxGG0-k');
define('LOGGED_IN_SALT',   ')[7(Fzt-qevo/s/P_(Te-L`$uxiy/<xL_!6urFV]1vG)I}k2]5{![)UwA&0P:|V!');
define('NONCE_SALT',       'AuR!z@1Mmlc|f|s+b{gs/I3,dok6^$w=z2eV9L6w@Z)U[upGip|lODA>xK`Dk}=;');

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
