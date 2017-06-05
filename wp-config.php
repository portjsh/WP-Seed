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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'joshtyle_481' );

/** MySQL database username */
define( 'DB_USER', 'joshtyle_481' );

/** MySQL database password */
define( 'DB_PASSWORD', 'CFD731E5Bt2fg9p46dr8x0' );

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
define('AUTH_KEY',         '6=tJzcG9KG+GX$x[i!RE:t:qW_NZU%vr39Gv$P)=|+I6gO$&v-C]o)(8x6GFO6Vw');
define('SECURE_AUTH_KEY',  'sBp-cW|Pnzj4GL}(pwO<d]5fQ~Y=RGYx4%KgKYrgXJ L+ &@k/|?XFaK+Nl[f6B9');
define('LOGGED_IN_KEY',    'T2+!@uymaeA23@VLusGx7`.l2)[FaUJ5Y@=yP+1LNU0$:n80]HT)Y+*3gLV2Ou-:');
define('NONCE_KEY',        '0]HnF =~]X6B3i:n*un=qBo&?irayeWXn:W-l4S[,ysvJdomR=PUdh6{@VPj+8Sg');
define('AUTH_SALT',        '~j0`Y-vD4|+cgI}Cx._++r`$[,14F@R{Sf[AM(q(yUV82NEgU.8~E*>Ed*W}=8@X');
define('SECURE_AUTH_SALT', 'Fh(2EtW3I+ShAzwjtK@@;p8-l-Ppz/Fjr>U<GMU,Qai_^A).[)XPmC^7Eu-a{YHF');
define('LOGGED_IN_SALT',   'YAweXhS+g{wrA-Yi JcD|G;1|u^Hze&p8Gz6!x9)TXag9w1l|lr99NKI`H1)mTlH');
define('NONCE_SALT',       '-QHM``l;?-G+4u-<AZ]t2/Iqrt}>9497w<)[ ws?t)7VetWLmq-P2}-B2,HScOh-');


/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '481_';



define( 'AUTOSAVE_INTERVAL',    300  );
define( 'WP_POST_REVISIONS',    5    );
define( 'EMPTY_TRASH_DAYS',     7    );
define( 'WP_AUTO_UPDATE_CORE',  true );
define( 'WP_CRON_LOCK_TIMEOUT', 120  );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
