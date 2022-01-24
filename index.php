<?php
require_once './commons/helpers.php';
require_once './vendor/autoload.php';

use App\Controllers\DashboardController;
use App\Controllers\IndexController;
use App\Controllers\LoginController;
use App\Controllers\QuizController;
use App\Controllers\SubjectController;

$url = isset($_GET['url']) ? $_GET['url'] : "/";
// $url mong muốn của người gửi request
switch ($url) {
    case 'login':
        $ctr = new LoginController();
        $ctr->index();
        break;
    case 'views':
        $ctr = new IndexController();
        $ctr->index();
        break;
    case 'login/dang-nhap':
        $ctr = new LoginController();
        $ctr->check();
        break;
  // ========================================= DANG NHAP / DANG KY =================================== //
    case 'login/dang-ky':
        $ctr = new LoginController();
        $ctr->register();
        break;
    case 'login/luu-dang-ky':
        $ctr = new LoginController();
        $ctr->saveRegister();
        break;
    //  end login
    case 'dashboard':
        $ctr = new DashboardController();
        $ctr->index();
        break;
  // ========================================= MON HOC =================================== //
    case 'mon-hoc':
        $ctr = new SubjectController();
        $ctr->index();
        break;
    case 'mon-hoc/tao-moi':
        $ctr = new SubjectController();
        $ctr->addForm();
        break;
    case 'mon-hoc/luu-tao-moi':
        $ctr = new SubjectController();
        $ctr->saveAdd();
        break;
    case 'mon-hoc/cap-nhat':
        $ctr = new SubjectController();
        $ctr->editForm();
        break;
    case 'mon-hoc/luu-cap-nhat':
        $ctr = new SubjectController();
        $ctr->saveEdit();
        break;
    case 'mon-hoc/xoa':
        $ctr = new SubjectController();
        $ctr->remove();
        break;
    case 'mon-hoc/chi-tiet':
        $ctr = new SubjectController();
        $ctr->detail();
        break;
    // ========================================= QUIZ =================================== //
    case 'quiz':
        $ctr = new QuizController();
        $ctr->index();
        break;
    case 'quiz/tao-moi':
        $ctr = new QuizController();
        $ctr->addForm();
        break;
    case 'quiz/luu-tao-moi':
        $ctr = new QuizController();
        $ctr->saveAdd();
        break;
    case 'quiz/cap-nhat':
        $ctr = new QuizController();
        $ctr->update();
        break;
    case 'quiz/luu-cap-nhat':
        $ctr = new QuizController();
        $ctr->saveUpdate();
        break;
    case 'quiz/xoa':
        $ctr = new QuizController();
        $ctr->saveUpdate();
        break;
    case 'quiz/lam-bai':
        $ctr = new QuizController();
        $ctr->saveUpdate();
        break;
    // end quiz
    default:
        echo "Đường dẫn bạn đang truy cập chưa được cho phép";
        break;
}
