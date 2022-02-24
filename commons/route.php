<?php
use App\Controllers\DashboardController;
use App\Controllers\LoginController;
use App\Controllers\QuestionController;
use App\Controllers\QuizController;
use App\Controllers\SubjectController;
use App\Controllers\LogoController;
use App\Controllers\AnswerController;
use Phroute\Phroute\RouteCollector;

function applyRoute($url){

    $router = new RouteCollector();

    $router->get('view',function(){
        return view('layouts.main');
    });
    
    $router->filter('user', function(){
        if(!isset($_SESSION['user']) || empty($_SESSION['user'])){
            header('location: ' . BASE_URL . 'login/dang-nhap');
            die;
        }
    });
        // định nghĩa cho dashboard
        $router->group(['prefix' => 'dashboard'], function($router){
        $router->get('',[DashboardController::class,'dashboard']);
        });


    // định nghĩa cho page
    $router->group(['prefix' => 'page'], function($router){
            $router->get('',[DashboardController::class,'index']);
            $router->get('/quiz{id}?',[DashboardController::class,'quiz']);
            $router->get('/question{id}?',[DashboardController::class,'question']);
    });


    // định nghĩa cho môn học
    $router->group(['prefix' => 'mon-hoc'], function($router){
            $router->get('tao-moi', [SubjectController::class, 'addForm']);
            $router->post('luu-tao-moi', [SubjectController::class, 'saveAdd']);
            $router->get('cap-nhat/{id}?', [SubjectController::class, 'editForm']);
            $router->post('luu-cap-nhat/{id}?', [SubjectController::class, 'saveEdit']);
            $router->get('xoa/{id}?', [SubjectController::class, 'remove']);
            $router->get(['/{id}?', 'subject.index'], [SubjectController::class, 'index']);
    });


    // định nghĩa cho Quiz
    $router->group(['prefix' => 'quiz'], function($router){
            $router->get('',[QuizController::class,'index']); 

            $router->get('tao-moi', [QuizController::class, 'addForm']);
            $router->post('luu-tao-moi', [QuizController::class, 'saveAdd']);

            $router->get('cap-nhat/{id}?', [QuizController::class, 'editForm']);
            $router->post('luu-cap-nhat/{id}?', [QuizController::class, 'saveEdit']);
            
            $router->get('xoa/{id}?', [QuizController::class, 'remove']);

            $router->post('result',[QuizController::class,'end']); 
            // $router->get(['/{id}?', 'quiz.index'], [QuizController::class, 'index']);
    });

    // định nghĩa cho question

    $router->group(['prefix' => 'question'], function($router){
            
            $router->get('',[QuestionController::class,'index']);
            $router->get('tao-moi', [QuestionController::class, 'addForm']);
            $router->post('luu-tao-moi', [QuestionController::class, 'saveAdd']);
            $router->get('cap-nhat/{id}?', [QuestionController::class, 'editForm']);
            $router->post('luu-cap-nhat/{id}?', [QuestionController::class, 'saveEdit']);
            $router->get('xoa/{id}?', [QuestionController::class, 'remove']);

    });

    // định nghĩa cho Answer
    $router->group(['prefix' => 'answer'], function($router){
            $router->get('',[AnswerController::class,'index']);
            $router->get('tao-moi', [AnswerController::class, 'addForm']);
            $router->post('luu-tao-moi', [AnswerController::class, 'saveAdd']);
            $router->get('cap-nhat/{id}?', [AnswerController::class, 'editForm']);
            $router->post('luu-cap-nhat/{id}?', [AnswerController::class, 'saveEdit']);
            $router->get('xoa/{id}?', [AnswerController::class, 'remove']);

            $router->get(['/{id}?', 'answer.index'], [QuizController::class, 'index']);
    });
    
     // định nghĩa cho login
        $router->group(['prefix' => 'login'], function($router){
                $router->get('',[LoginController::class,'index']);
                $router->get('dang-ky', [loginController::class, 'register']);
                $router->post('luu-dang-ky', [loginController::class, 'saveRegister']);
                $router->get('dang-nhap', [loginController::class, 'signin']);
                $router->post('luu-dang-nhap', [loginController::class, 'check']);
                $router->get('cap-nhat/{id}?', [loginController::class, 'editForm']);
                $router->post('luu-cap-nhat/{id}?', [loginController::class, 'saveEdit']);
                $router->get('xoa/{id}?', [loginController::class, 'remove']);
                $router->get('dang-xuat', [loginController::class, 'logout']);


        });        

    // $router->get('login', [LoginController::class, 'loginForm']);
    // $router->get('logout', function(){
    //     unset($_SESSION['auth']);
    //     return "done";
    // });


    $dispatcher = new Phroute\Phroute\Dispatcher($router->getData());
    $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($url, PHP_URL_PATH));
    // Print out the value returned from the dispatched function
    echo $response;
}


?>