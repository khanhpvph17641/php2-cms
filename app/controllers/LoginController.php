<?php
namespace App\Controllers;

use App\Models\User;

class LoginController
{
    public function index()
    {
        include_once "./app/views/login/index.php";
    }
    public function check()
    {
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $model = User::where(['email', '=', $email])->first();
        // var_dump($model);
        // die;
        if (empty($password) || empty($email)) {
            $_SESSION['error'] = 'vui lòng điền đầy đủ';
            header('location: ' . BASE_URL . 'login');
            die;
        }
        if (password_verify($password, $model->$password)) {
            $_SESSION['error'] = 'Sai tài khoản hoặc mật khẩu';
            header('location: ' . BASE_URL . 'login');
            die();
        } else {
            header('location: ' . BASE_URL . 'dashboard');
            $_SESSION['user'] = $model->id;
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
            'password' => $_POST['password'],
        ];
        $model->insert($data);
        header('location: ' . BASE_URL . 'dashboard');
        die;
    }
}
