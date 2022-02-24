<h2 class="mb-4">Tất Cả Môn Học</h2>

                <div class="item">
                        <?php foreach ($subjects as $sub) {?>
                        <div class="stay__item">
                        <div class="text">
                            <h4> <a href="<?= BASE_URL . 'page/quizs?subjectId=' . $sub->id?>">
                        <?=$sub->name?>
                         </a></h4>
                        </div>
                        <div class="img_subjects">
                            <img width="300px" height="200px" class="img-sp"
                                src="<?= CONTENT_URL.'Images/'.$sub->img ?>">
                        </div>
                        </div>
                        <?php }?>
                </div>
                <!-- end item -->
                <!-- <h2 class="mb-4">Bài Viết Liên Quan</h2> -->