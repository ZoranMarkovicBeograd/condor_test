<?php
require __DIR__ . '/../vendor/autoload.php';

use App\Controllers\AnalyticsController;
use App\Routes\Router;
$router = new Router();





$router->get('/analytics', AnalyticsController::class, 'getAction');

$router->dispatch();





