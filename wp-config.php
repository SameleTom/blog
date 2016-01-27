
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
    define('DB_NAME', 'blog');
    
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
    define('AUTH_KEY',         '2Jo,2>K|7%fSY%|<]5%kR*NM;[XLh>|}|7Ywb7SY(J*`B={m$]yJ@{!q?mO7}Cnc');
    define('SECURE_AUTH_KEY',  're:`M}kq$OsJhmmJl(#U57Te60hGJg)5Uhj;LMf7mNg/;|M=G<sC6|frXmS_FARm');
    define('LOGGED_IN_KEY',    'z#~VlO?t|Akdk>97m5E.q?w{vgnn9hz?tu>&l6WCNg^=!7=OcO<5{O->%m8&2/5:');
    define('NONCE_KEY',        '/*/(Fv+=^0IbEvLf/c;1>SmT?N+v}||Z*s=S-)9~8ZUvf4*EVT%wPf(A5]^P~f:)');
    define('AUTH_SALT',        't)jcZ^w%GVzrLd:x+ce*z7|=G7{ejl7;*C*,5j ftPru8Ts(H+RLO+%6(([!g7-|');
    define('SECURE_AUTH_SALT', '+.7z4s&ml6Rfrca+JR!&{|T&WI8 %0P3p6+/Two|Mp-gq|s`6eOW3;XN$5M#SMA-');
    define('LOGGED_IN_SALT',   'nvi |@+m.q|A5qm*V3E{T]Y2]YYtx<wb-+:.}T;MVE%=7CY55[<J+E Oa0Kf$nbW');
    define('NONCE_SALT',       '^f^F1w=Ed]G*mY/r,th+^.;BHNw+8RX.A~JWxD|F-)[-L@v2@,+oY)_+EP+a&qi(');
    
    /**#@-*/
    
    /**
     * WordPress Database Table prefix.
     *
     * You can have multiple installations in one database if you give each
     * a unique prefix. Only numbers, letters, and underscores please!
     */
    $table_prefix  = 'b_';
    
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
