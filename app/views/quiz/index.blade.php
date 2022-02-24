@extends('layouts.main')
@section('title', 'Danh sách quiz')
@section('content')
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<div>
    <h3>Môn học: {{$subjects->name}} </h3>
<table class="table">
        <thead>
            <a href="{{  BASE_URL . 'quiz/tao-moi?subjectId=' . $subjects->id }}" class="btn btn-success">Tạo mới</a>
            
        </thead>
    <thead>
        <th>Mã quiz</th>
        <th>Tên quiz</th>
        <th>Thời gian làm bài</th>
        <th>Thời gian bắt đầu làm</th>
        <th>Thời gian kết thúc bài làm</th>
        <th>Trạng thái</th>
        <th>Thực hiện </th>
    </thead>
    <tbody>
        
        
      
        <?php foreach($quizs as $qz): ?>
        <tr>
            <td><?=$qz->id?></td>
            <td>
            <a href="<?= BASE_URL . 'question?id=' . $qz->id ?> ">
            <?= $qz->name ?>
            </a>
            </td>
            <td><?=$qz->duration_minutes?> phút</td>
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
       <?php endforeach ?>
    </tbody>
</table>
</div>
@endsection
@section('page-script')
<script>
    $('.btn-remove').click(function(){
        console.log(1);
    });
</script>
@endsection
