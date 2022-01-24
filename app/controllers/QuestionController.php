<?php
namespace App\Controllers;
use App\Models\Quiz;
use App\Models\Question;
class QuestionController
{
    public function index()
    {
        $quizs = Quiz::all();
        $questions = Question::all();
        include_once "./app/views/question/index.php";
    }

    public function addForm(){
        $quizs = Subject::all();
        include_once "./app/views/question/add-form.php";
    }
    public function saveAdd(){
        $model = new Question();
        $data = [
            'name' => $_POST['name'],
            'subject_id' => $_POST['subject_id'],
            'duration_minutes' => $_POST['duration_minutes'],
            'start_time' => $_POST['start_time'],
            'end_time' => $_POST['end_time'],
            'status' => $_POST['status'],
        ];
        $model->insert($data);
        header('location: ' . BASE_URL . 'question');
        die;
    }
    public function remove(){
        $id = $_GET['id'];
        Question::destroy($id);
        header('location: ' . BASE_URL . 'question');
        die;
    }
    public function editForm(){
        $id = $_GET['id'];
        $model = Question::where(['id','=', $id])->first();
        if(!$model){
            header('location: ' . BASE_URL . 'question');
            die;
        }
        include_once './app/views/question/edit-form.php';
    }
     public function saveEdit(){
        $id = $_GET['id'];
        $model = Question::where(['id', '=', $id])->first();
        if(!$model){
            header('location: ' . BASE_URL . 'question');
            die;
        }
        $data = [
            'name' => $_POST['name'],
            'subject_id' => $_POST['subject_id'],
            'duration_minutes' => $_POST['duration_minutes'],
            'start_time' => $_POST['start_time'],
            'end_time' => $_POST['end_time'],
            'status' => $_POST['status'],
        ];
        $model->update($data);
        header('location: ' . BASE_URL . 'question');
        die;
    }
   
}