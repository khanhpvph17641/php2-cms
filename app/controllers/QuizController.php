<?php
namespace App\Controllers;
use App\Models\Quiz;
use App\Models\Subject;
use App\Models\Question;
use App\Models\StudentQuiz;
class QuizController
{
   public function index()
    {
        $id = $_GET['subjectId'];
        $subjects = Subject::where('id', $id)->first();
        $quizs  =    Quiz::where('subject_id', $id)->get();
        return view('quiz.index', ['quizs' => $quizs,'subjects'=>$subjects]); 
    }
    public function addForm(){
        $subjects_id = $_GET['subjectId'];
        include_once "./app/views/quiz/add-form.php";
    }
    public function saveAdd(){
        $subjects_id = $_GET['subjectId'];
        $data = [
            'name' => $_POST['name'],
            'start_time' => $_POST['start_time'],
            'end_time' => $_POST['end_time'],
            'duration_minutes' => $_POST['duration_minutes'],
            'status' => isset($_POST['status']) ? 0 : 1,
            'subject_id' => $subjects_id
        ];
        $model = new Quiz();
        $quiz = $model->insert($data);
        header('location: ' . BASE_URL . 'quiz?subjectId=' . $subjects_id);
        die;
    }
    public function remove($id = null)
    {
        $subjects_id = $_GET['subjectId'];
        $id = $_GET['id'];
        Quiz::destroy($id);
        header('location: ' . BASE_URL . 'quiz?subjectId'  );
        die;
    }
    public function editForm(  $id = null){
        $id = $_GET['id'];
        $model = Quiz::where('id', $id)->first();
        if(!$model){
            header('location: ' . BASE_URL . 'quiz');
            die;
        }
        include_once './app/views/quiz/edit-form.php';
    }
     public function saveEdit( $id = null)
     {
        $id = $_GET['id'];
        $model = Quiz::where('id', $id)->first();
        if(!$model){
            header('location: ' . BASE_URL . 'quiz');
            die;
        }
        $model ->name = $_POST['name'];
        $model ->subject_id = $_POST['subject_id'];
        $model ->duration_minutes = $_POST['duration_minutes'];
        $model ->start_time = $_POST['start_time'];
        $model ->end_time = $_POST['end_time'];
        $model ->status = $_POST['status'];
        $model->save();
        header('location: ' . BASE_URL . 'quiz?subjectId=' .$_POST['subject_id']);
        die;
    }
    public function startQuiz(){
        $quiz_id = $_GET['id'];
        $questions = Question::where('quiz_id',$quiz_id)->get();
        foreach ($questions as $qs){
            $answers[$qs->id] = Answer::where('question_id',$qs->id)->get();
        }
        include_once "./app/views/page/start.php";
    }
    public function endQuiz($quiz_id = null){
        $quiz_id = $_GET['quiz_id'];
        $questions = Question::where('quiz_id',$quiz_id)->get();
        $counts = Question::where('quiz_id',$quiz_id)->count();
        $answersArr = array();
        foreach ($questions as $qs){
            $answersArr[] = $_POST['question-'.$qs->id];
        }
        $temp = array_count_values($answersArr);
        $result = 10/$counts_qs * $temp['1'];
        include_once "./app/views/page/point.php";
    }
    
}