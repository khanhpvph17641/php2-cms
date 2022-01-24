<?php
namespace App\Controllers;
use App\Models\Quiz;

use App\Models\Subject;

class QuizController
{
    public function index()
    {
        
        $subjects = Subject::all();
        $quizs = Quiz::all();
        include_once "./app/views/quiz/index.php";
    }

    public function addForm(){
        $subjects = Subject::all();
        include_once "./app/views/quiz/add-form.php";
    }
    public function saveAdd(){
        $model = new Quiz();
        $data = [
            'name' => $_POST['name'],
            'subject_id' => $_POST['subject_id'],
            'duration_minutes' => $_POST['duration_minutes'],
            'start_time' => $_POST['start_time'],
            'end_time' => $_POST['end_time'],
            'status' => $_POST['status'],
        ];
        $model->insert($data);
        header('location: ' . BASE_URL . 'quiz');
        die;
    }
    // public function editForm(){
    //     $id = $_GET['id'];
    //     $model = Subject::where(['id', '=', $id])->first();
    //     if(!$model){
    //         header('location: ' . BASE_URL . 'quiz');
    //         die;
    //     }
    //     include_once './app/views/quiz/edit-form.php';
    // }
    //  public function saveEdit(){
    //     $id = $_GET['id'];
    //     $model = Subject::where(['id', '=', $id])->first();
    //     if(!$model){
    //         header('location: ' . BASE_URL . 'quiz');
    //         die;
    //     }

    //     $data = [
    //         'name' => $_POST['name']
    //     ];
    //     $model->update($data);
    //     header('location: ' . BASE_URL . 'quiz');
    //     die;
    // }
    // public function remove(){
    //     $id = $_GET['id'];
    //     Subject::destroy($id);
    //     header('location: ' . BASE_URL . 'quiz');
    //     die;
    // }
}
