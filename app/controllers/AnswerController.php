<?php
namespace App\Controllers;

use App\Models\Answer;
use App\Models\Question;

class AnswerController
{
    public function index()
    {
        $id = $_GET['question_id'];
        $questions = Question::where('id', $id)->first();
        $answer  = Answer::where('question_id', $id)->get();
        return view('answer.index', ['answer' => $answer,'questions' => $questions]); 
        // include_once "./app/views/page/header2.php";
        // include_once "./app/views/answer/index.php";
    }
    public function addForm()
    {
        $questions_id = $_GET['question_id'];
        include_once "./app/views/answer/add-form.php";
    }
    public function saveAdd()
    { 
        $questions_id = $_GET['question_id'];
        $model = new Answer();
        $data = [
            'content' => $_POST['content'],
            'question_id' => $questions_id,
            'is_correct' => $_POST['is_correct'],
        ];
        $model->insert($data);
        header('location: ' . BASE_URL . 'answer?question_id=' . $questions_id);
        die;
    }
   
    public function editForm($id = null)
    {
        $id = $_GET['id'];
        $model = Answer::where('id', $id)->first();
        if (!$model) {
            header('location: ' . BASE_URL . 'answer');
            die;
        }
        include_once './app/views/answer/edit-form.php';
    }
    public function saveEdit($id = null)
    {
        $id = $_GET['id'];
        $model = Answer::where('id', $id)->first();
        if (!$model) {
            header('location: ' . BASE_URL . 'answer');
            die;
        }
        $model ->content = $_POST['content'];
        $model ->question_id =  $_POST['question_id'];
        $model ->is_correct = $_POST['is_correct'];
        $model->save();
        header('location: ' . BASE_URL . 'answer?question_id='. $_POST['question_id']);
        die;
    }
    public function remove($id = null)
    {
        $questions_id = $_GET['question_id'];
        Answer::destroy($id);
        var_dump($questions_id);
        die;
        header('location: ' . BASE_URL . 'answer?question_id='. $_GET['question_id'] );
        die;
    }
}
