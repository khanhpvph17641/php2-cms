<?php
namespace App\Controllers;
use App\Models\Subject;
use App\Models\Quiz;
use App\Models\User;
class IndexController{
    public function index(){
        $subjects = Subject::all();
        include_once "./app/views/page/index.php";
    }
    public function quiz(){
        $subjects = Subject::all();
        $quizs = Quiz::all();
        include_once "./app/views/page/quiz.php";
    }
   
}

?>