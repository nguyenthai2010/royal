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
define('DB_NAME', 'aqva_db');

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
define('AUTH_KEY',         'fqA,U=SH-R,[+D CQ$JvfZ;|x3h@a=ZdnG:k*?0|>T&F<#+iCPUR Mq-~/%N/g:+');
define('SECURE_AUTH_KEY',  'On%&vr-yN:b<=el`_1kcS+nZ[[<kac92i+Jz_?%`UQN_[t<a+HmB/6W:Z5RmLN#2');
define('LOGGED_IN_KEY',    'ys|hJz@5J1:!dp-c4e#gWu8E7Jk~--k4kViTS<InK!f(XJy_`I$+cBq3^An|<_iu');
define('NONCE_KEY',        'oKwHk|mo!~[@3(@$?LgZq>@Ec{1LP#7.oH46fSl&T<V+q2UnuP+aYSrD&~Z2~:jJ');
define('AUTH_SALT',        'RZX)[!TDa<cj#lf0Z)RGUZ:)9AFHi[79sQ_ar;}qf;#Ox>xl3^ag.p-E+t)*FbAD');
define('SECURE_AUTH_SALT', 'o}(8Jd-6aA|F][YEL*|e1`9[ |{NF=G0LMpJq5_nE5s<P![R6}jILcCr1li68l9!');
define('LOGGED_IN_SALT',   ' W@IsdB>n<uoxf&|Db^|:I8N{m5A}6!!Q1.t9B-}ozyZ@>^$&/6{id;Jc7@pxA_H');
define('NONCE_SALT',       '?x_OZqNd4g^0=M&H!FBHH{eUg+-9vwBeTMNU5svYDR0^s+<(SNrh*Ae*vHhwOCsk');

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

define('WP_HOME','http://localhost/PHP/BLISS/YVES/royal/sourcecode/main');
define('WP_SITEURL','http://localhost/PHP/BLISS/YVES/royal/sourcecode/main');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
