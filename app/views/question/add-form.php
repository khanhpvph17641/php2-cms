<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<div class="card-body">
<form action="<?= BASE_URL . 'question/luu-tao-moi?id=' . $quizs_id ?>" method="post">
    <div class="form-group">
        <label for="">Tên question</label>
        <input  class="form-control" type="text" name="name">
    </div>
    <select  hidden name="quiz_id" class="form-group">
    </select>
    <div>
        <button type="submit">Lưu</button>
    </div>
</form>
</div>

