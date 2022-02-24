<div class="main">

                    <?php

                    use App\Models\Answer;

                    $score = 0;
                    foreach ($_POST['questionId'] as $questionId) {
                        $studentId = $_POST['studentId'];
                        $quizId = $_POST['quizId'];

                        $answer = Answer::where('question_id', '=', $questionId)->where('is_correct', '=', 2)->get();
                        if ($answer->id == $_POST['question_' . $questionId]) {
                            $score++;
                        }
                    };


                    // $_SESSION['score'] = $score;

                    ?>
                    <h2>Bạn làm đúng <?= $score ?>/<?= $_SESSION['countQuestion'] ?> Câu hỏi, điểm của bạn là <?= (10 / ($_SESSION['countQuestion']) * $score) ?></h2><br>
                    <a href="javascript:history.back()">Quay lại</a><br>

                    <?php $_SESSION['score'] = (10 / ($_SESSION['countQuestion']) * $score); ?>
                    
                    <?php
                    $data = [
                        'student_id' => $studentId,
                        'quiz_id' => $quizId,
                        'score' => $_SESSION['score'],
                    ];
                    $modal->insert($data);
                    ?>

                </div>