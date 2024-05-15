<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'test' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'Nd(p#ONrxHF=Djww(uQ9&-`T.E%x)(( =DtZOrqe 0a+:|%>CJDNkv*O1&{b7Cbb' );
define( 'SECURE_AUTH_KEY',  'gx~g3X9$YHE`%pM^0DN7pfb;bVri31Dy,<B$BObxwIYiYf6*]m5X^.WD1)P*ux%4' );
define( 'LOGGED_IN_KEY',    'Lk|*U8:t-+A=_DcdeIfbNgUMPBa2?/#F{qFg$(AFFHMTU.#f20YQt%v68|h%zj~5' );
define( 'NONCE_KEY',        '114!8bAs8 %yW2WyA0L7B1+)QY&Fn0<BKY9yt:FM67j+E3DG9ei|VMX?TL:$`C<~' );
define( 'AUTH_SALT',        'dpd?8/SmFji6Rd&5;mHd3K9_%(v[bUs&]E[{kmBAg>d7xnNej%aA(kDk1-kXz;Ow' );
define( 'SECURE_AUTH_SALT', '<LDF8.,kho[PzI#S2N{K-3r/Gu;nL,-}}sarZ5QZneU`=_epe0{241{F)~H/z;~i' );
define( 'LOGGED_IN_SALT',   '/@kf@TxZ~i[zu-ik_OrXr!8uK)kl5|e^pb[wgvIrd+eed`}Ahp[.)5~hPYU0u028' );
define( 'NONCE_SALT',       'qGH{=.y IewH{#bTb3-kUV#Z!Us|C6t??}W:~yFZ7v[7)<9ggK0#^@uw^F#Q,9yz' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
