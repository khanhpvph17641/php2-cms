@extends('layouts.main')
@section('title', 'Danh sách câu trả lời')
@section('content')
<table class="table">
    <thead>
        <th>Mã Answer</th>
        <th>Content</th>
        <th>Correct</th>
        <th>
            <a href="<?= BASE_URL . 'answer/tao-moi?question_id=' . $questions->id ?>">Tạo mới</a>
        </th>
    </thead>
    <tbody>
        <?php foreach ($answer as $answer): ?>
        <tr>
            <td><?=$answer->id?></td>
            <td>
                <?=$answer->content ?></a>
            </td>
            <td>
                <?=$answer->is_correct ?></a>
            </td>
            <td>
                <a href="<?=BASE_URL . 'answer/cap-nhat?id=' . $answer->id?>">Sửa</a>
                <a href="<?=BASE_URL . 'answer/xoa?id=' . $answer->id?>">Xóa</a>
            </td>
        </tr>
        <?php endforeach?>
    </tbody>
</table>
@endsection
@section('page-script')
<script>
    $('.btn-remove').click(function(){
        console.log(1);
    });
</script>
@endsection