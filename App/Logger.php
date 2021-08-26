<?php

namespace App;

use Uccu\SwKoaLog\Log;
use Uccu\SwKoa\Logger as SwKoaLoggerBase;


class Logger extends Log implements SwKoaLoggerBase
{

    public function __construct()
    {
    }


    public static function info($logInfo, string $tag = 'master', int $level = Log::LEVEL_INFO)
    {
        return self::sendToLogSocket($logInfo, $tag, $level);
    }

    protected function getLogDir($recv): string
    {
        return getcwd() . '/log/' . date('Ym');
    }

    protected function getLogFileName($recv): string
    {
        $name = 'info';
        if ($recv->level === self::LEVEL_ERROR) {
            $name = 'error';
        }
        return  date('Ymd') . '-' . $name  . '.log';
    }
}
