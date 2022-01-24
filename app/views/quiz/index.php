<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<table class="table">
    <thead>
        <th>Mã quiz</th>
        <th>Tên quiz</th>
        <th>Môn</th>
        <th>Thời gian làm bài</th>
        <th>Thời gian bắt đầu làm</th>
        <th>Thời gian kết thúc bài làm</th>
        <th>Trạng thái</th>
        <th>
            <a href="<?=BASE_URL . 'quiz/tao-moi'?>">Tạo mới</a>
        </th>
    </thead>
    <tbody>
        <?php foreach ($quizs as $qz): ?>
        <tr>
            <td><?=$qz->id?></td>
            <td><?=$qz->name?></td>
            <td><?php
            foreach ($subjects as $sub) {
              if ($sub->id == $qz->subject_id) {
                 echo $sub->name;}}?>
            </td>
            <td><?=$qz->duration_minutes?></td>
            <td><?=$qz->start_time?></td>
            <td><?=$qz->end_time?></td>
            <td><?php 
            if($qz->status == 0){
                echo 'Hiển Thị';
            }else{
                echo 'Ẩn';

            }
            ?></td>
            <td>
                <a href="<?=BASE_URL . 'quiz/cap-nhat?id=' . $qz->id?>">Sửa</a>
                <a href="<?=BASE_URL . 'quiz/xoa?id=' . $qz->id?>">Xóa</a>
            </td>
        </tr>
        <?php endforeach?>
    </tbody>
</table>