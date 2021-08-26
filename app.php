<?php

use Uccu\SwKoa\Server as SwKoaServer;
use App\Config;
use App\Logger;

require "vendor/autoload.php";

define("ROOT_PATH", getcwd());
date_default_timezone_set(Config::get('app.TIMEZONE'));

SwKoaServer::setConfig(Config::class);
SwKoaServer::setLog(Logger::class);
SwKoaServer::init();
