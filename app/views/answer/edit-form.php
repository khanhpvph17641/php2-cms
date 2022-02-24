<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<div class="card-body">
<form action="<?= BASE_URL . 'answer/luu-cap-nhat?id=' .$model->id?>" method="post">
    <div class="form-group">
        <label for="">daps ans</label>
        <input  class="form-control" value="<?= $model->content ?>" type="text" name="content">
    </div>
    <input  class="form-control" value="<?=$model->question_id?>" type="" hidden name="question_id">
    <select class="form-select" aria-label="Default select example" value="<?= $model->is_correct ?>" name="is_correct">
        <option selected>Mời chọn kết quả</option>
        <option value="1">Đúng</option>
        <option value="0">Sai</option>
    </select>
    <div>
        <button type="submit">Lưu</button>
    </div>
</form>
</div>