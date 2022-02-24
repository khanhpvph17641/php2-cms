    <div id="col">
    <h3>Môn : <?= $subjects->name?></h3>
        <div class="item">
            
            <?php foreach ($quizs as $qz): ?>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"><?=$qz->name?></h4>
                    <p class="card-text">Thời gian làm bài: <?= $qz->duration_minutes ?> phút </p>
                    <a href="<?= BASE_URL . 'page/questions?id=' . $qz->id?>" class="btn btn-primary">Làm bài</a>
                </div>
                <?php endforeach?>
            </div>
        </div>