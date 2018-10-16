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
define('DB_NAME', 'events');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '}$YuH0XNOt[vOaMI(8T;P`L(^b}jX8S+CK`v08[($tm7f>IxhEASMm$])N&t2#v,');
define('SECURE_AUTH_KEY',  '4d+Tjc79FwGg-ChAsc#zPAgatA]BJo`$O}y%r}268,vhn+TDeX}5_dr5IwB5FX<C');
define('LOGGED_IN_KEY',    '8~P`&qGBmAUJ]Bgy$mF,f,*bb|je-!J5zZ@Y~jLU%W]KyD^s}<xS~Z2?YSX1~Oy`');
define('NONCE_KEY',        '`h};7b.r91K4W(2^5w~e6U;pu7@X^?zQeQ}:J=&@nF<}8fuB>xN,63yG=}>Gf:nM');
define('AUTH_SALT',        ':r!9PAO#,u4y^PJ6ub1/0B]>*XGufRfs{pp9uiAWX+S}pV{h^G~5T~-l^JO46est');
define('SECURE_AUTH_SALT', ' @2L2K`V%S;l^)hgq:xX1fm#LAp,~%t*4;7PG7U<ti.QMg[aRT-B0ui/j[q,^DE=');
define('LOGGED_IN_SALT',   'DcAiYYBNXR=Vk|>W~68]&8FhsS#<yJa$e|HA_hjbl#TN53rt~4FH@@i&),nH#]qL');
define('NONCE_SALT',       '=dR@A8)}t94] WB;i4Wrdk9-rgkJ+QxXpEN$5sY9q_e~XrhX`B]:u0V0v3-`h+kA');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'events_';

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
