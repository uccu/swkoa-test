<?php


return [
    new App\Logger,
    App\Config::class,
    new Uccu\SwKoaHttp\HttpServer,
    Uccu\SwKoaMiddleware\MiddlewarePlugin::class,
];
