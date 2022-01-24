<?php
namespace App\Controllers;
class DashboardController{
    public function index(){
        // $dashboard = Dashboard::all();
        include_once "./app/views/dashboard/index.php";
    }
}
?>