<?php
namespace App\Controllers;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
class QuestionController
{
    public function index($id = null)
    {
        $id = $_GET['id'];
        $quizs =  Quiz::where('id', $id)->first();
        $subjects = Subject::where('id', $id)->first();
        $questions = Question::where('quiz_id', $id)->get();
        return view('question.index', ['questions' => $questions,'quizs' => $quizs]); 
        // include_once "./app/views/page/header2.php";
        // include_once "./app/views/question/index.php";
    }
    public function addForm(){
        $quizs_id = $_GET['id'];
        include_once "./app/views/question/add-form.php";
    }
    public function saveAdd(){
        $quizs_id = $_GET['id'];
        $data = [
            'name' => $_POST['name'],
            'quiz_id' => $quizs_id
        ];
        $model = new Question();
         $question =  $model->insert($data);
        header('location: ' . BASE_URL . 'question?id=' . $quizs_id);
        die;
    } 
    public function remove(){
        $id = $_GET['id'];
        $quiz = $_POST['quiz_id'];
        Question::destroy($id);
        header('location: ' . BASE_URL . 'question?id=' . $quiz);
        die;
    }
    public function editForm($id = null){
        $id = $_GET['id'];
        $model = Quiz::where('id', $id)->first();
        if(!$model){
            header('location: ' . BASE_URL . 'quiz');
            die;
        }
        include_once './app/views/quiz/edit-form.php';
    }
     public function saveEdit($id = null){
        $id = $_GET['id'];
        $model = Quiz::where('id', $id)->first();
        if(!$model){
            header('location: ' . BASE_URL . 'quiz');
            die;
        }
        $data = [
            'name' => $_POST['name'],
            'quiz_id' => $_POST['quiz_id'],
        ];
        $model->update($data);
        header('location: ' . BASE_URL . 'question?id=' . $_POST['quiz_id']);
        die;
    }
   
}