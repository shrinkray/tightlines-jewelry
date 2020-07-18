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
define('AUTH_KEY',         'ADvE7+RAzoVAZhMKu9Zaua8YAdfjQD/vfEZsBMcalAPDu4rNqr98Gbu79Ky99z+802uXJG++cyd0JJ9u1j/n/g==');
define('SECURE_AUTH_KEY',  'Jb5w/jXEMwMaFx8mUNbsgZfeNWvmnu+WL0ur9nmyiADl+qPMQoKM31w4I51aZIDMYQhcvMSwDPYS0NrLpkrVlA==');
define('LOGGED_IN_KEY',    '7GgEXmbrunnklmEKjNmXrW68l32UPNEn7xzUQZBhkriJfIAtcsXu2fGly3DCYqTvxDOQdMDg+oF5Ffnjup2+EQ==');
define('NONCE_KEY',        '0px3OWy9qRQtDu4uOC9U4QhXTrorU+6NFpF7Iq5wQ3otP1axPacbxutbzDDsP3c8LkdZp0Dt/gXjEZYKxSXBUw==');
define('AUTH_SALT',        'vuo9fBGzYsdpECg94Cv8MAnFFTlyujqimr8xGpWauqzSy5iFT+HvvOCYGdP+9krQMtmS5e6H/sOMvzXmHFZ/iw==');
define('SECURE_AUTH_SALT', '01nMT+fpVele8irtl6i1VOwn4t+5AugHaLwVv3RR1ZSMoeXtXczaroWvePTFmqLW7yAA9AwGdySc24/gC1vOrA==');
define('LOGGED_IN_SALT',   'rhBmzUKrHpSgvFFHSGbXZr6+eJZd8KnXOo7iXjL/7teLuJVWh+gIkMcAQP6v2jGA7eTTaiXM/sv0B5EY3sip9g==');
define('NONCE_SALT',       'XtznDTMheqYPLS1JUIMd1LaPKmWEhSVllZDZ9eIeelfonVGnc5DPsQjKe7PZgq8b/4QTIJHNEzjBlhVH2vRmuw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
