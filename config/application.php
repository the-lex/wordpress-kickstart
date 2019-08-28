<?php

/** @var string Directory containing all of the site's files */
$root_dir = dirname(__DIR__);

/** @var string Document Root */
$webroot_dir = $root_dir . '/web';

if(getenv("CONTEXT")){
	$environment = getenv("CONTEXT");
}else{
	$environment = "Production";
}

define('WP_ENV', $environment);

$env_config = __DIR__ . '/environments/' . WP_ENV . '.php';

if (file_exists($env_config)) {
    require_once $env_config;
}

/**
 * Custom Content Directory
 */
define('CONTENT_DIR', '/app');
define('WP_CONTENT_DIR', $webroot_dir . CONTENT_DIR);
define('WP_CONTENT_URL', WP_HOME . CONTENT_DIR);

/**
 * Authentication Unique Keys and Salts
 */
define('AUTH_KEY',         'ae=dR7#y=&<6(Y^p]cYe8D[J[+dWWHVA{x=K##MHIY}fcyG/~n),*S]U/Pf)QYmF');
define('SECURE_AUTH_KEY',  'v|%s0kvw`w[SAqWun`^_16IqGta/k?a$P/!%D*c>^80SaT@[B %4HHs~E sT:S%7');
define('LOGGED_IN_KEY',    '{!Bkn#W4eJSth[vo7NYq]]OP|Z]KfJQ_vI~``^G9 LS4dv2v^m|BSh;6C%8Yezn&');
define('NONCE_KEY',        'XloS|B]Mx8huuWR+mj)N>>xrK%<j3J.j>+*9yo1+;=+[P5tyDtHQ3>[-;xIFMY1E');
define('AUTH_SALT',        'XHHPPp`_VVn-8l?UWy.Hd@,yQg6i8Qp>+Sn)tD0Vr|@<|*^cj+B$VH`glV`A+vpY');
define('SECURE_AUTH_SALT', '2~=P6(qH+zKr0twvi6MgV2pfY~F;<&D<gnpFXM(OOTtt_H:qWYqZAPL` .C:Mc-Y');
define('LOGGED_IN_SALT',   ';^(+#E]E&e2CPCx,*K:^_{LmxG!*2GIoAK.w;6o::iX9<Nq^*o.<3sU&XFy3k./;');
define('NONCE_SALT',       'mP~6*UL~7/M|N}ul$kUm|-oX7pJiz8Ma4vZzj5R6yGmaRkNp!Y,DNQ]nu<)X;4:c');

/**
 * Custom Settings
 */
define('AUTOMATIC_UPDATER_DISABLED', true);
define('DISALLOW_FILE_EDIT', true);

// =======================
// Load WordPress Settings
// =======================
$table_prefix  = 'wp_';
/**
 * Bootstrap WordPress
 */
if (!defined('ABSPATH')) {
    define('ABSPATH', $webroot_dir . '/wp/');
}
