<?php

namespace App;

use Uccu\SwKoaConfig\Config as SwKoaConfig;

class Config extends SwKoaConfig
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
