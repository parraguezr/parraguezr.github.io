<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'raconton_wordpress678');

/** MySQL database username */
define('DB_USER', 'raconton_word678');

/** MySQL database password */
define('DB_PASSWORD', 'yDb2awldZxCU');

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
define('AUTH_KEY', '>hKWoPluX+EYvQ$TkH}sr}edE(uFp<Mq-aQ!D;SF^P@YJTXK)u^L+iQAOAMhMBI/K[m_(e](ShyGs@=uiAdJ<T&E|C&JY;hnj=KxGycAq=dfz%n_&e%]%>+mn[%D|<&d');
define('SECURE_AUTH_KEY', 'qw>O)peF*-WL&WFsi&r;+>lfu}!AGhj)!KoiTQzRabAv)on^!<nftz/z]@Grgtz<Xq/ZiQ|y-jlc@S@TrGL|^;!rL]Avgbhm=vzcf^uH|hUMtn?thTwz?-PZ<l+o]EE)');
define('LOGGED_IN_KEY', '_}=HNiks-ud|RjGDr+pwRwQXpXWyvQnJWuEUtAUjWOd^>K/ph[!)q}H=v[>ncFB}*EGHmUUTTByZqX_-_>s(VyROU%eV!/&cL%{&RI%>_MgRgiTxL<jo]q>QN](d-J@?');
define('NONCE_KEY', 'eB[)rF{RBHDU$jY=Y(=]CgjY(ROMC)(B/Zy|*XacLRiHLKU??UXupf&btUATtr^&IDH^|/seTrQXQfuZrghM%phYS&d%A(Jbj[TQyl!ciKwIbFdMUhaaj%s/s[NweIS=');
define('AUTH_SALT', 'Ht;@>TJ*UgDYAYE++hSjHqLL%RXBV+{BQKA/FuT%te%oSSeVy!gXNg(qKFn[ahA($-PInMd(G=l><KI-+zZc=mcg^HrzGZbvbhu*<%hIF^D^YPnJ=Plx]dB[%L;Bwo-s');
define('SECURE_AUTH_SALT', 'QK;gHXdm]<&sukmbqvF({cFM?mtGo*ItCR<=ah<JfzBkm(AQp]Qt[L^EPTF_^g&d?>d@rOVejezaXHG<S-chTpnn]cdC!y)kWSgecX?<VD(ET]vnUa?npAIX$=@S%XAg');
define('LOGGED_IN_SALT', 'HV=EF[;nxBgrjacxU>nd@?JszmRIF;NGEj_eROzW-$Ty-trbnaWuPc$d=<;{!ngcdJ@NMGpbi]dTSvz/RaqAG{_(^F}RZ%aK*vO?J=!bTm|oBtStX-{MFwc<s@dg)D(Y');
define('NONCE_SALT', '!zaTA(yD[YiB(KfT-!VZp%W?(gu<%gCHBNJDsw@qgDf-ENbWrA}k<eQYV+co{bhq<Zsc[ZV|<%pPhn<Ys%_<GB=r+@?DGAvI|p>!ksMqQscGcYVyGV(SA}HmiT)mQ<Fb');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_cjve_';

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

/**
 * Include tweaks requested by hosting providers.  You can safely
 * remove either the file or comment out the lines below to get
 * to a vanilla state.
 */
if (file_exists(ABSPATH . 'hosting_provider_filters.php')) {
	include('hosting_provider_filters.php');
}
