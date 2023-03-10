<?php

define("ROOT", __DIR__);
define("URL", 'http://'.$_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT']);


use Examples\Geo\PhoneMiddleware;
use Examples\Helpers\Controller;
use Examples\Helpers\View;


require_once (__DIR__.'/vendor/autoload.php');

(new PhoneMiddleware());
(new Controller())->mainPage();
echo View::getInstance()->render();

