<?php
namespace App\Controllers;
use App\Models\Subject;
use App\Models\Quiz;
use App\Models\User;
use App\Models\Question;
session_start();
class DashboardController{
    
    public function dashboard(){
        
        include_once "./app/views/page/header2.php";
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

    public function quiz( $id= null )
    {
        $id = $_GET['subjectId'];
        $subjects = Subject::where('id', $id)->first();
        $quizs  =    Quiz::where('subject_id', $id)->get();
        include_once "./app/views/page/header.php";
        include_once "./app/views/page/quiz.php";
        
    }

    public function question( $id= null )
    {
        $id = $_GET['id'];
        $quizs   =     Quiz::where('id', $id)->first();
        $questions  = Question::where('quiz_id', $id)->get();
        include_once "./app/views/page/header.php";
        include_once "./app/views/page/question.php";

    }
}
?>
