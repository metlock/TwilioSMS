<?php

error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', 1);

$root = realpath(dirname(dirname(__FILE__)));
$library = "$root/Services";
$tests = "$root/tests";

$path = array($library, $tests, get_include_path());
set_include_path(implode(PATH_SEPARATOR, $path));

require_once '../../twilio-twilio-php-3252c53/tests/Mockery/Loader.php';
$loader = new \Mockery\Loader;
$loader->register();

require_once '../../twilio-twilio-php-3252c53/tests/Twilio.php';

unset($root, $library, $tests, $path);

