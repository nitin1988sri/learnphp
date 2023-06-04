<?php

require __DIR__.'/vendor/autoload.php';

$errorHandler = new Whoops\Run;
$errorHandler->pushHandler(new Whoops\Handler\PrettyPageHandler);
$errorHandler->register();