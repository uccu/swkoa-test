<?php

namespace App;

use Psr\Log\LogLevel;
use Uccu\SwKoaLog\Logger as SwKoaLogLogger;


class Logger extends SwKoaLogLogger
{

    public function __construct()
    {
    }


    protected function getLogDir($recv): string
    {
        return getcwd() . '/log/' . date('Ym');
    }

    protected function getLogFileName($recv): string
    {
        $name = 'info';
        if (!in_array($recv->level, [
            LogLevel::EMERGENCY, LogLevel::ALERT, LogLevel::CRITICAL, LogLevel::ERROR
        ])) {
            $name = 'error';
        }
        return  date('Ymd') . '-' . $name  . '.log';
    }
}
