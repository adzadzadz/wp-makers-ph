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
define('DB_NAME', 'admin_makersph');

/** MySQL database username */
define('DB_USER', 'admin_makersph');

/** MySQL database password */
define('DB_PASSWORD', 'Gtzkhclnejlm!234');

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
define('AUTH_KEY',         's3k[/Qq]DjvUm5|&0={NTLx%N!$},VDSlq~D)bKi^n7&zK$3coF0=a/xpu+|js8b');
define('SECURE_AUTH_KEY',  'D+,x|Mx @@T.O f%!,>oy:66_S,7*p5brvF1K=LU}DKHlKAHsNt$`0aIYC2U(iZ^');
define('LOGGED_IN_KEY',    'fZ,_8$YR?P>4~W)lR|J{NL`), ?xcnrBg:iL1QM=nN!4s>q@sO0wY%OqI)2xVmx8');
define('NONCE_KEY',        'W9)+uqMdSSev^6*0*A~-y=07y2/OO*Vf[6lHK3Xt(4`?uMK!5BiG7nrIs`y]$g/l');
define('AUTH_SALT',        ',0r=w3bL6I?%_,D1a`Jl@h:8}vN8Z1!{u,[/cB$snm%qb49@:~=JMTaXr*oYvwE@');
define('SECURE_AUTH_SALT', 'EaSx*4jbQf%tq5|0|wp`Q>M%E<HfHE1jJ{e)D@Nw]`sS}QH)(`R)^tP`|RnG?P(^');
define('LOGGED_IN_SALT',   'wf=+I0Bv( l7<5xG8h/E;g{?IZ<#Ked(}oG^i&QI{XlHRrBX:F^w$K,.GWa96m9<');
define('NONCE_SALT',       'aC.eob8^!5.;}eWbBPw?8;kJ_^pW;WFp_>(MLN)q95.{18Aegr##xEw:o3?O|{;N');

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

