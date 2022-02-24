<?php
require_once './commons/helpers.php';
require_once './vendor/autoload.php';
require_once './commons/lib.php';
require_once './commons/db.php';
require_once './commons/route.php';

use App\Controllers\DashboardController;
use App\Controllers\LoginController;
use App\Controllers\QuestionController;
use App\Controllers\QuizController;
use App\Controllers\SubjectController;
use App\Controllers\LogoController;
use App\Controllers\AnswerController;

$url = isset($_GET['url']) ? $_GET['url'] : "/";

applyRoute($url);
// use Phroute\Phroute\RouteCollector;


// $router = new RouteCollector();
// // định nghĩa url mới
// $router->get('mon-hoc',[SubjectController::class,'index']);
// $router->get('mon-hoc/tao-moi',[SubjectController::class,'addForm']);
// $router->post('mon-hoc/tao-moi',[SubjectController::class,'saveAdd']);


// $dispatcher = new Phroute\Phroute\Dispatcher($router->getData());
// $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($url, PHP_URL_PATH));
// echo $response;


