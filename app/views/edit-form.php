
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<div class="card-body">
<form action="<?= BASE_URL . 'mon-hoc/luu-cap-nhat?id=' .$model->id?>" 
method="post">
    <div class="group-form">
        <label  for="">Tên danh mục</label>
        <input class="form-control"type="text" name="name"
        value="<?= $model->name ?>">
    </div>
    <div>
        <button type="submit">Lưu</button>
    </div>
</form>
</div>