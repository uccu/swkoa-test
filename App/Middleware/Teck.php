<?php

namespace App\Middleware;

use App\Logger;
use Psr\Log\LogLevel;
use Uccu\SwKoaMiddleware\Middleware;
use Uccu\SwKoa\Context;
use Uccu\SwKoaServer\App;

class Teck implements Middleware
{

    public function handle($ctx, callable $next)
    {

        $ctx->response->end("ok");
        $next();

        $logInfo = App::$logger->newLog(LogLevel::INFO, "test");
        $logInfo->addParam(Logger::newLogParam($ctx->request->server['request_uri']));
        $logInfo->addParam(Logger::newLogParam(' '));
        $logInfo->addParam(Logger::newLogParam('ok'));
        App::$logger->info($logInfo);
    }
}
