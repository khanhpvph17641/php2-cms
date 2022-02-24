<?php
namespace App\Controllers;
use App\Models\Subject;
use App\Models\User;
class SubjectController{
    public function index(){
        $subjects = Subject::all();
        // include_once "./app/views/page/header2.php";
        return view('mon-hoc.index', ['subjects' => $subjects]);    
        // include_once "./app/views/mon-hoc/index.php";
        
    }
    public function addForm(){
        include_once "./app/views/mon-hoc/add-form.php";
    }
    public function saveAdd(){

        $model = new Subject();
        $data = [
            'name' => $_POST['name'],
            'content' => $_POST['content'],
            'img' => $_FILES['img']['name'],
            'author_id' => $author_id
        ];
        $file = $_FILES['img'];
        $fileName = $file['name'];
        move_uploaded_file($file['tmp_name'], './Front-end/Images/' .$fileName);
        $model->insert($data);
        header('location: ' . BASE_URL . 'mon-hoc');
        die;
    }
    public function editForm(){
        $id = $_GET['id'];
        $model = Subject::where('id', $id)->first();
        if(!$model){
            header('location: ' . BASE_URL . 'mon-hoc');
            die;
        }
        include_once './app/views/mon-hoc/edit-form.php';
    }
     public function saveEdit($id = null){
        $id = $_GET['id'];
        $model = Subject::where('id', $id)->first();
        if(!$model){
            header('location: ' . BASE_URL . 'mon-hoc');
            die;
        }
        
        $model->name=$_POST['name'];
        $model->content=$_POST['content'];
        move_uploaded_file($file['tmp_name'], './Front-end/Images/' .$fileName);
        $model->save();
        header('location: ' . BASE_URL . 'mon-hoc');
        die;
    }
    public function remove($id = null){
        $id = $_GET['id'];
        Subject::destroy($id);
        header('location: ' . BASE_URL . 'mon-hoc');
        die;
    }
}
?>