<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<div class="card-body">
<form action="<?=BASE_URL . 'quiz/luu-cap-nhat?id=' . $model->id?>" method="post">
    <div class="form-group">
        <label for="">Tên Quiz</label>
        <input  class="form-control" value="<?=$model->name?>" type="text" name="name">
    </div>
    <input  class="form-control" value="<?=$model->subject_id?>" type="" hidden name="subject_id">
    <div class="form-group">
        <label for="">Thời gian làm bài</label>
        <input class="form-control" value="<?=$model->duration_minutes?>" type="number" name="duration_minutes">
    </div>
        <div class="form-group mt-3">
        <label for="">Thời gian bắt đầu</label>
        <input type="datetime-local" name="start_time" value="<?=date('Y-m-d\TH:i', strtotime($model->start_time))?>" class="form-control">
        </div>
        <div class="form-group mt-3">
        <label for="">Thời gian kết thúc </label>
        <input type="datetime-local" name="end_time" value="<?=date('Y-m-d\TH:i', strtotime($model->end_time))?>" class="form-control">
        </div>
    <select name="status" value="<?=$model->status?>">
        <option class="form-control" value="" hidden> Trạng Thái</option>
        <option class="form-control" value="1"> Ẩn </option>
        <option class="form-control" value="0"> Hiển Thị </option>
    </select>
    </div>
    <div>
        <button type="submit">Lưu</button>
    </div>
</form>
</div>