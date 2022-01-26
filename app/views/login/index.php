<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">


<?php

if (!isset($_SESSION['user']->role_id)) {
    // $_SESSION['error'] = "Vui lòng đăng nhập";
    header('location: ' . BASE_URL . 'login/dang-nhap');
    die;
}
?>
<table class="table">
    <thead>
        <th>Id</th>
        <th>Họ Tên</th>
        <th>Email</th>
        <th>Ảnh</th>
        <th>Trạng thái</th>
        <th>
            <a href="<?=BASE_URL . 'login/dang-nhap'?>">Tạo mới</a>
        </th>
    </thead>
    <tbody>
        <?php foreach ($users as $user): ?>
        <tr>
            <td><?=$user->id?></td>
            <td><?=$user->name?></td>
            <td><?=$user->email?></td>
            <td>
                <img width="120px" src="./Front-end/Images/<?=$user->img?>" alt="">
            </td>
            <td>
                <a href="<?=BASE_URL . 'login/cap-nhat?id=' . $user->id?>">Sửa</a>
                <a href="<?=BASE_URL . 'login/xoa?id=' . $user->id?>">Xóa</a>
            </td>
        </tr>
        <?php endforeach?>
    </tbody>
</table>