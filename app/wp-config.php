<?php


// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'joia_jm2016');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('AUTH_KEY',         'w5YE06N>>cg%r4k}m><>jvpRV5eA3Jj6yA?@j#=-pD(iJ$VNyo=zByNT8]y!#_[;');
define('SECURE_AUTH_KEY',  '{5y{z+uTmmD+[wE@?1zn_D k0u,-~kj@*dE%gOYwWiWY.ITL.z{|Us:6w)Ts#{ud');
define('LOGGED_IN_KEY',    '4.$ZoT1u%PeU4678ur[9ME6||AfQndd,P6+bwqvCe#,e%~kev>4(=}7x:$eX5-?i');
define('NONCE_KEY',        '+ZuQEe8 %DsV3r7e9zJ-n@]?g|ZM r<3j&^ G7XR|s8Z8(A-t^6vfv%XFuw- V#Z');
define('AUTH_SALT',        '7@~MEam,^QqAo6%dXQi=8P]U5@B/e*9Gz]-zxMdQ]9^oJ#-<7]5s/|.XbF$%Bo(y');
define('SECURE_AUTH_SALT', '[G_ME2-K=fVeA6p6a46&L6~{S-zy>kS[sH}KL[{|(3*$Qv{+$GQ5TRkY0]*b:>7r');
define('LOGGED_IN_SALT',   'A6Vr/x`Rc<2%?-Ed?gfGGOR&OQ+^r0jJWsW1aUrk~%9v2Ct4c*.nv*mK({nj6@X-');
define('NONCE_SALT',       '|V.]rA[##=^9@PFkBM hhdG1~&H?|@8,TqsM9A._*XYTv)`BVX#WG; {J}K.5+Y.');


$table_prefix = 'jm_';





/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
