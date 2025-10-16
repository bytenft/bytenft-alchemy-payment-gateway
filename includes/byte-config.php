<?php
// config.php
if (!defined('BYTENFTALCHEMY_PROTOCOL')) {
    define('BYTENFTALCHEMY_PROTOCOL', is_ssl() ? 'https://' : 'http://');
}

if (!defined('BYTENFTALCHEMY_HOST')) {
    define('BYTENFTALCHEMY_HOST', 'pay.bytenft.xyz');
}

if (!defined('BYTENFTALCHEMY_BASE_URL')) {
	define('BYTENFTALCHEMY_BASE_URL', BYTENFTALCHEMY_PROTOCOL . BYTENFTALCHEMY_HOST);
}
