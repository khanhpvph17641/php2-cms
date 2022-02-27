<?php
use App\Controllers\SubjectController;
use Phroute\Phroute\RouteCollector;

function applyRoute($url){

    $router = new RouteCollector();



            $router->get('mon-hoc/tao-moi', [SubjectController::class, 'addForm']);
            $router->post('mon-hoc/luu-tao-moi', [SubjectController::class, 'saveAdd']);
            $router->get('mon-hoc/cap-nhat/{id}?', [SubjectController::class, 'editForm']);
            $router->post('mon-hoc/luu-cap-nhat/{id}?', [SubjectController::class, 'saveEdit']);
            $router->get('mon-hoc/xoa/{id}?', [SubjectController::class, 'remove']);
            $router->get(['mon-hoc/{id}?', 'index'], [SubjectController::class, 'index']);



    $dispatcher = new Phroute\Phroute\Dispatcher($router->getData());
    $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($url, PHP_URL_PATH));
    // Print out the value returned from the dispatched function
    echo $response;
}


?>