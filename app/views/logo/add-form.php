<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
<div class="card-body">
<form action="<?= BASE_URL . 'logo/luu-tao-moi'?>" enctype="multipart/form-data" method="post">
    <div class="group-form">
        <label for="">Ảnh</label>
        <input class="form-control" type="file" name="img" >
        <select name="status">
        <option class="form-control" value="" hidden> Trạng Thái</option>
        <option class="form-control" value="1"> Ẩn </option>
        <option class="form-control" value="0"> Hiển Thị </option>
    </select>
        
    </div>
    <div>
        <button type="submit">Lưu</button>
    </div>
</form></div>