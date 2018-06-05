<?php
$env='dev';
define('TDZ_APP_ROOT', dirname(__FILE__));
define('TDZ_VAR', TDZ_APP_ROOT.'/data');
require_once(TDZ_APP_ROOT.'/lib/vendor/Tecnodesign/tdz.php');
$app = tdz::app(TDZ_APP_ROOT.'/config/hacks.yml', 'hacks', $env);
$app->run();