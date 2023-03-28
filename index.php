<?php

require __DIR__ . '/vendor/autoload.php';

use App\Http\Router;

$obRouter = new Router(URL);

include __DIR__ . '/routes/home.php';
include __DIR__ . '/routes/about.php';
include __DIR__ . '/routes/contact.php';

$obRouter->run()->sendResponse();