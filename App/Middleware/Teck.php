<?php

namespace App\Middleware;

use App\Logger;
use Uccu\SwKoa\Middleware;
use Uccu\SwKoa\Context;

class Teck implements Middleware
{
    public function handle(Context $ctx, callable $next)
    {
        $ctx->response->end("ok");
        $next();

        $logInfo = Logger::newLog('http');
        $logInfo->addParam(Logger::newLogParam($ctx->request->server['request_uri']));
        $logInfo->addParam(Logger::newLogParam(' '));
        $logInfo->addParam(Logger::newLogParam('ok'));
        Logger::info($logInfo);
    }
}
