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
define('DB_NAME', 'wordpress02');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'c-$;}=CZB/PIu)zaq!sxEy G91[I%3)S J:#%m@l,Zx1YWWPBaiA66<3,iI`0g?T');
define('SECURE_AUTH_KEY',  'qnc(^>){r!k{8;jU}(U~&#7>Y}}Ot3kJLF&;sBoT$t{46V{C*Egy-taXP1=upNi]');
define('LOGGED_IN_KEY',    '+rG#vs3;Ojpy:`5TC,?w}m?8 N:Nxy}F 48D=aM|V*D k`Xe$^,Cwc~$Vlw!A`[6');
define('NONCE_KEY',        'aN5ez5?pI9&N9# 0[:;6:{u1[F@uP-O^Y?x(m=1lo(]>p0!/0$y-oA6;O,!=;-#<');
define('AUTH_SALT',        ')_L.fGmB,)p7MiGzWNr{Kk=^G/U,,q eH.s:8;2Oh  Hnd(7.B2+eFI`3VKB ,(D');
define('SECURE_AUTH_SALT', 'bI:.4?V;}w.=:im:PCBSLfXE3s8Tzzx:J0uO0AcPSy %T@}OJm^=5Zlw][4t=$mv');
define('LOGGED_IN_SALT',   ':p~5KEL9dOq$J1Bz9Wl>8q8< lE;Eh|*|(gtbF `9TK{~9g`&^D_#E/weiz7)P:b');
define('NONCE_SALT',       'tNi.RE>KQklMasX4vXQPPd[}e g`=N](C<,:zn^CtqFY m]R1l4|=2qY^2%#bc; ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
