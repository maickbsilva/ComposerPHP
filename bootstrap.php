<?php

require __DIR__ . '/vendor/autoload.php';

use Maickbsilva\CursoComposer\Hello;

$log = new Monolog\Logger('name');
$log->pushHandler(new \Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING));

$log->warning((new Hello)->say('Maick'));