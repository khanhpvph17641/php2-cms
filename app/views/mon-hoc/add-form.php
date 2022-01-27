<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
<div class="card-body">
<form action="<?= BASE_URL . 'mon-hoc/luu-tao-moi'?>" enctype="multipart/form-data" method="post">
    <div class="group-form">
        <label  for="">Tên Môn Học</label>
        <input class="form-control" type="text" name="name">
        <label for="">Ảnh</label>
        <input class="form-control" type="file" name="img" >
    </div>
    <div>
        <button type="submit">Lưu</button>
    </div>
</form></div>