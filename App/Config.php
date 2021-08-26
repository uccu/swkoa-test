<?php

namespace App;

use Uccu\SwKoaConfig\Config as SwKoaConfig;
use Uccu\SwKoa\Config as BaseSwKoaConfig;

class Config extends SwKoaConfig implements BaseSwKoaConfig
{

    public function getApp()
    {
        $this->importPhp(getcwd() . '/config/app.php');
    }

    public function getRedis()
    {
        $this->importPhp(getcwd() . '/config/redis.php');
    }
}
