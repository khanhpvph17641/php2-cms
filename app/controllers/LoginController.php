<?php
namespace App\Controllers;
use App\Models\User;
session_start();
class LoginController
{
    public function index()
    {   
        $users = User::all();
        return view('login.index', ['users' => $users]);    
    }
    public function signin()
    {
        include_once "./app/views/login/signin.php";
    }
    public function logout()
    {   
        include_once "./app/views/login/logout.php";
    }
    // lưu đăng nhâp
    public function check()
    {
        $email = $_POST['email'];
        $password =$_POST['password'];
        $model = User::where('email', $email)->first();
        if (!password_verify($password, $model->password)) {
            $_SESSION['error'] = 'Sai tài khoản hoặc mật khẩu';
            header('location: ' . BASE_URL . 'login/dang-nhap');
            die();
        } 
        if($model->role_id == 1){
            header('location: ' . BASE_URL . 'view');
            $_SESSION['auth'] = $model->id;
            die();
        }
        else {
            header('location: ' . BASE_URL . 'page');
            $_SESSION['auth'] = $model;
            die();
        }
    }
    // đăng ky
    public function register()
    {
        include_once "./app/views/login/register.php";
    }
    public function saveRegister()
    {
        $model = new User();
        $data = [
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'password' => password_hash($_POST['password'],PASSWORD_DEFAULT),
            'img' => $_FILES['img']['name'],
            ];
            $file = $_FILES['img'];
            $fileName = $file['name'];
            move_uploaded_file($file['tmp_name'], './Front-end/Images/' .$fileName);
        $model->insert($data);
        header('location: ' . BASE_URL . 'login/dang-nhap');
        die;
    }
}