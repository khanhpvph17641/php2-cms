<?php
namespace App\Controllers;
use App\Models\Subject;
use App\Models\Quiz;
use App\Models\User;
session_start();
class DashboardController{
    public function dashboard(){
        
        include_once "./app/views/dashboard/index.php";
    }
    public function index(){
        // $id = $_GET['id'];
        // $user = User::where('id', '=',$id)->first();
        // $_SESSION['user'] = $user;
        $subjects = Subject::all();
        include_once "./app/views/page/header.php";
        include_once "./app/views/page/index.php";
        // include_once "./app/views/page/footer.php";
    }
    public function quiz(){
        $subjects = Subject::all();
        $quizs = Quiz::all();
        include_once "./app/views/quiz/index.php";
    }
}
?>
