<div id="headCv" class="page-title-area two three">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="row align-items-end">
                    <div class="ps-0 col-lg-8">
                        <div class="left two">
                            <div class="borderAva overflow-hidden rounded-circle ms-1 mb-3 ">
                                <img width="100%" height="100%" src='<?= checkUserAvaNull($avatar) ?>' alt='user ' class=''>
                            </div>
                            <h2><?= checknull($name) ?></h2>
                            <ul>
                                <li>
                                    <i class="bx bx-box"></i>
                                    <?= checknull($major) ?>
                                </li>
                                <li>
                                    <i class="bx bx-phone-call"></i>
                                    <a href="tel:<?= checknull($phone) ?>"><?= checknull($phone) ?></a>
                                </li>
                                <li>
                                    <i class="fa-solid fa-at"></i>
                                    <a href="mailto:<?= checknull($email) ?>">
                                        <?= checknull($email) ?>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="right">
                            <ul>
                                <li>
                                    <click>
                                        <button id="savePDF" onclick="savePDF()">
                                            <i class="bx bxs-report"></i>
                                            Save / Download
                                        </button>
                                        <script>
                                            function savePDF() {
                                                window.print();
                                            }
                                        </script>
                                    </click>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="bodyCv" class="person-details-area resume-area ptb-100">
    <div class="container">
        <div class="row d-flex justify-content-between align-items-start">
            <div id="col-left" class="col-lg-4">
                <div class="widget-area">
                    <!-- <div class="resume-profile">
                    <img data-cfsrc="<?= checkUserAvaNull($avatar) ?>" alt="CV Chi Tiết" style="display:none;visibility:hidden;width:60%;"><noscript><img src="<?= checkUserAvaNull($avatar) ?>" alt="Details"></noscript>
                        <h2><?= checknull($name) ?></h2>
                        <span><?= checknull($major) ?></span>
                    </div> -->
                    <div class="information widget-item">
                        <h3>Thông tin cơ bản</h3>
                        <ul>
                            <li>
                                <h4>Mức Lương mong muốn:</h4>
                                <span><?= checknull($salary) ?></span>
                            </li>
                            <li>
                                <h4>Kinh Nghiệm :</h4>
                                <span><?= checknull($exp) ?></span>
                            </li>
                            <li>
                                <h4>Tuổi :</h4>
                                <span><?= checknull($age) ?></span>
                            </li>
                            <li>
                                <h4>Giới Tính:</h4>
                                <span><?= checknull($gender) ?></span>
                            </li>
                            <li>
                                <h4>Địa Chỉ:</h4>
                                <span><?= checknull($address) ?></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="col-right" class="col-lg-8">
                <div class="details-item">
                    <div class="profile">
                        <h3>Giới thiệu chung về tôi</h3>
                        <p><?= checknull($introduce) ?></p>
                    </div>
                    <div class="skills mb-3">
                        <h5>Kinh nghiệm làm Việc </h5>
                        <ul>
                            <?php foreach ($expCv as $e) {
                                if ($e['job'] !== '') { ?>
                                    <li><i class="fa-solid fa-business-time me-2"></i> Từng làm <strong class=""><?= $e['job'] ?></strong> tại <?= $e['corp'] ?> ở trị trí <?= $e['level'] ?> thời gian từ <?= $e['start'] ?> ~ <?= $e['end'] ?></li>
                                <?php } ?>
                            <?php } ?>
                        </ul>
                    </div>
                    <hr>
                    <div class="skills mb-3">
                        <h5>Học vấn / bằng cấp</h5>
                        <ul class="">
                            <?php foreach ($degree as $deg) {
                                if ($deg['name'] !== '') { ?>
                                    <li><i class="fa-solid fa-graduation-cap me-2"></i>Tốt nghiệp ( chứng chỉ / bằng ) <strong><?= $deg['name'] ?></strong> tại <?= $deg['school'] ?> năm <?= $deg['year'] ?></li>
                                <?php } ?>
                            <?php } ?>
                        </ul>
                    </div>
                    <hr>
                    <div class="skills mb-3">
                        <h5>Kỹ năng / ngôn ngữ</h5>
                        <ul class="ms-0 ps-0">
                            <?php foreach ($skillCv as $s) {
                                if ($s['progLang'] !== '') { ?>
                                    <li class="row mb-4 ms-0 mt-3">
                                        <strong class="mb-3"><i style="font-size: 1vw;" class="fa-solid fa-code"></i> <?= $s['progLang'] ?></strong>
                                        <div class="ms-2 mt-2 rounded-3 progress-bar-skill" style="width:<?= $s['percent'] ?>%; height:10px"></div>
                                    </li>
                                <?php } ?>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>