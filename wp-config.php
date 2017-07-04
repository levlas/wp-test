<?php
define('DB_NAME', 'wordpress');
define('DB_USER', 'wordpress');
define('DB_PASSWORD', 'piebohmaivee3bair7xeZ2ohlech4lah');
define('DB_HOST', 'db');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

define('AUTH_KEY',         '<VA]|;K5bH4L=}-G&gslAN^A1js= CgM`;R@6+@Ep1S0VB+GvSvwCs-QrAGv*/|`');
define('SECURE_AUTH_KEY',  'dSA){y>ejc-lfBlA&>z)X~4G5^&i%03._OfJbfPs({#UDpgq/$Z+86+|?qaGPn[M');
define('LOGGED_IN_KEY',    '9myOyspnZLu Q@!.3X0+vvi8a;RsjJh.nC}pcm&)%^o.$JLJ1tn!OjY4w` &uW~>');
define('NONCE_KEY',        'I?lc1;5tpM3HC1p~i+MCP>!|=EvDe2 /o<oh|jJwzg-M^ 9wLEf.30MdR:,+_@8W');
define('AUTH_SALT',        '2|&wnmkA~*L`&fr:%RHN:c.aW@)Co~:+c[L6~El_aQ<77!+%(D#w`[hJU#nF*H$9');
define('SECURE_AUTH_SALT', '~I-E.DS;P=u-Ff-UH_kHI| !3k=Zn&^Y_<tJ07<9jB4et3JF%khTCcT1wu4kS#bK');
define('LOGGED_IN_SALT',   'Y6C7yyyChl48dulq%<eI|)LI+w#Fcr$qeo[&)<{UqVGg-yrLWH!;,3po4M2JSW6C');
define('NONCE_SALT',       '/z4jiGh9wu]|KtU%|CzbGTdIxAh;6e&jd.L^tcQ2pyYhqt:Mjl:;`W_i^XDPfbX=');

 
 $table_prefix  = 'wp_';
 
 define('DISALLOW_FILE_EDIT', true);
 define('WP_DEBUG', false);
 
 /* That's all, stop editing! Happy blogging. */
 
 /** Absolute path to the WordPress directory. */
 if ( !defined('ABSPATH') )
         define('ABSPATH', dirname(__FILE__) . '/');
 
 /** Sets up WordPress vars and included files. */
 require_once(ABSPATH . 'wp-settings.php');

