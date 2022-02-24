<?php
namespace App\Controllers;
use App\Models\Logo;
class LogoController{
    public function index(){
        $logo = Logo::all();
        include_once "./app/views/logo/index.php";
    }
    public function addForm(){
        include_once "./app/views/logo/add-form.php";
    }
    public function saveAdd(){
        $model = new Logo();
        $data = [
            'img' => $_FILES['img']['name'],
        ];
        $file = $_FILES['img'];
        $fileName = $file['name'];
        move_uploaded_file($file['tmp_name'], './Front-end/Images/' .$fileName);
        $model->insert($data);
        header('location: ' . BASE_URL . 'logo');
        die;
    }
    public function editForm(){
        $id = $_GET['id'];
        $model = Logo::where(['id', '=', $id])->first();
        if(!$model){
            header('location: ' . BASE_URL . 'logo');
            die;
        }
        include_once './app/views/logo/edit-form.php';
    }
     public function saveEdit(){
        $id = $_GET['id'];
        $model = Logo::where(['id', '=', $id])->first();
        if(!$model){
            header('location: ' . BASE_URL . 'logo');
            die;
        }
        $data = [
            'img' => $_POST['img'],
        ];
        header('location: ' . BASE_URL . 'logo');
        die;
    }
    public function remove(){
        $id = $_GET['id'];
        Logo::destroy($id);
        header('location: ' . BASE_URL . 'logo');
        die;
    }
}
?>