<?php

use Uccu\SwKoaServer\App;
use App\Config;

require "vendor/autoload.php";

date_default_timezone_set(Config::get('app.TIMEZONE'));

$app = new App();
$app->start();
