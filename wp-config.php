<?php
# Database Configuration
define( 'DB_NAME', 'cinchsharecom');
define( 'DB_USER', 'root');
define( 'DB_PASSWORD', 'kUfXEeTaI9NR0c4q');
define( 'DB_HOST', 'devkinsta_db');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wp_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         '6]I-|5C@2t]Kog=7bb--NVq6P^;K5k5c7_B(5;h[JJWGSbyMh|H@G(<)K8w8*wz ');
define('SECURE_AUTH_KEY',  '3f!_YLRhp-b@|Y#gWXJ$DwRiKILvIU!BT9](p-+.Ec_;m@-A:xO( fwRR=Y4VtAs');
define('LOGGED_IN_KEY',    'tQ1zCSA<|Bd66XFq`>@Z@88-TlCzoJ+r&aAZ-vKT#D2|eCa%]jc|-zDk[4^ciH<[');
define('NONCE_KEY',        '`:cBM;`U,/mKz+>>S}f3<ln<VEwcU<LC{J[S+zKk<4E+sm9[-!|w:4zR_f>cj5Zh');
define('AUTH_SALT',        'SGvqVP.u99(P9;TG2]AYF*X!Wm/>/vb_X)snz_5kL3, 7=P<X+31 zEsdq4Ngdo=');
define('SECURE_AUTH_SALT', '|EMS1v=AQs|q<1^;5r:A158,D=A@TViA2+<n--{%EI1_?Bc:=-0IJ)@sBdNrI:j ');
define('LOGGED_IN_SALT',   '>*`uM}5A~V@OL-$V]a:`8qHy39etE+N2ex`- l1nq)Ji3Kb[m-WQX]>~Rs9LBX7K');
define('NONCE_SALT',       '&uwIt.%(Y~$6=DAgW:}|tI8T`hO0;kHH5H3G;k8s U~*R  ZwQ|+KQ:n0lNkiVk_');

# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0755 );

define( 'FS_CHMOD_FILE', 0644 );

define( 'DISALLOW_FILE_MODS', FALSE );

define( 'DISALLOW_FILE_EDIT', FALSE );

define( 'DISABLE_WP_CRON', false );

define( 'FORCE_SSL_LOGIN', false );

define( 'WP_POST_REVISIONS', FALSE );

define( 'WP_TURN_OFF_ADMIN_BAR', false );

define('WPLANG','');

# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', __DIR__ . '/');
require_once(ABSPATH . 'wp-settings.php');
