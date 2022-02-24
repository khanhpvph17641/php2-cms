<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<div class="card-body">
<form action="<?= BASE_URL . 'question/luu-cap-nhat?id=' .$model->id?>" method="post">
    <div class="form-group">
        <label for="">Question</label>
        <input  class="form-control" value="<?= $model->name ?>" type="text" name="name">
    </div>
    <input  class="form-control" value="<?= $model->quiz_id ?>" type="" hidden name="quiz_id">
    <div>
        <button type="submit">Lưu</button>
    </div>
</form>
</div>