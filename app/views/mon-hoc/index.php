
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<table class="table">
    <thead>
        <th>Mã môn</th>
        <th>Tên môn</th>
        <th>Ảnh</th>
        <th>
            <a href="<?= BASE_URL . 'mon-hoc/tao-moi'?>">Tạo mới</a>
        </th>
    </thead>
    <tbody >
        <?php foreach($subjects as $sub): ?>
            <tr>
                <td><?= $sub->id ?></td>
                <td>
                    <a href="<?= BASE_URL . 'quiz?subjectId=' . $sub->id?>"><?= $sub->name ?></a>
                </td>
                <td>
                <img width="120px" src="./Front-end/Images/<?=$sub->img?>" alt="">
                </td>
                <td>
                    <a href="<?= BASE_URL . 'mon-hoc/cap-nhat?id=' . $sub->id ?>">Sửa</a>
                    <a href="<?= BASE_URL . 'mon-hoc/xoa?id=' . $sub->id ?>">Xóa</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>