<link rel="stylesheet" href="<?= CONTENT_URL .'Css/question.css' ?>">
<div class="container mt-sm-5 my-1">
    <!-- <h3>Thời gian làm bài</h3> -->
    <div class="question ml-sm-5 pl-sm-5 pt-2">
    <?php foreach ($questions as $index => $question): ?>     
    <div class="py-2 h5">
            <h3 style="color:white">
          Câu hỏi <?= $index + 1 ?>
             :   <?=  $question->name ?>
            </h3>
        </div>

      <form action="<?= BASE_URL ?>quiz/result" method="POST">
        <div class="ml-md-3 ml-sm-3 pl-md-5 pt-sm-0 pt-3" id="options">
            <?php foreach ($question->getAnswers() as $answer => $ans) : ?>
                <label class="rounded p-2 option">
                <input type="radio" name="radio"> 
                <span class="crossmark">
                Đáp án <?= $answer + 1 ?>: <?=  $ans->content ?>
                </span>
                </label> 
            <?php endforeach ?>
        </div>
        <?php endforeach?>
                <div>
                    <button class="btn btn-primary"> Nộp Bài</button>
                </div>
        </form>  
    </div>
    <div class="d-flex align-items-center pt-3">
        <!-- <div id="prev"> <button class="btn btn-primary">Previous</button> </div> -->
        <!-- <div class="ml-auto mr-sm-5"> <button class="btn btn-success">Next</button> </div> -->
    </div>
</div>

<script>
        function startTimer(duration, display) {
            var timer = duration,
                minutes, seconds;
            setInterval(function() {
                minutes = parseInt(timer / 60, 10)
                seconds = parseInt(timer % 60, 10);

                minutes = minutes < 10 ? "0" + minutes : minutes;
                seconds = seconds < 10 ? "0" + seconds : seconds;

                display.textContent = minutes + ":" + seconds;

                if (--timer < 0) {
                    timer = duration;
                }
            }, 1000);
        }

        window.onload = function() {
            var fiveMinutes = 60 * "<?= $data['duration_minutes']; ?>",
                display = document.querySelector('#time');
            startTimer(fiveMinutes, display);
        };
    </script>