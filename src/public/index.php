<?php
require __DIR__ . '/../vendor/autoload.php';

use App\Controllers\AnalyticsController;
use App\Routes\Router;

$router = new Router();

$router->get('/analytics', AnalyticsController::class, 'getAction');
$router->post('/store', AnalyticsController::class, 'storeAction');
$router->put('/update', AnalyticsController::class, 'updateAction');
$router->delete('/delete', AnalyticsController::class, 'destroyAction');

$router->dispatch();





