<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<form method="POST" action="<?= BASE_URL . 'answer/luu-tao-moi?question_id=' . $questions_id ?>">
    <div class="group-form">
    <label for="">Đáp Án</label>
    <input class="form-control" type="text" name="content" >
    <select class="form-select" aria-label="Default select example" name="is_correct">
        <option selected>Mời chọn kết quả</option>
        <option value="1">Đúng</option>
        <option value="0">Sai</option>
    </select>
        <button type="submit"> Lưu </button>
    </div>
</form>
                                