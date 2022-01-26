<?php
        session_start();
        unset($_SESSION['user']);
        $_SESSION['tb'] = "đăng xuất thành công";
        header('location:'.BASE_URL. 'page');
        ?>