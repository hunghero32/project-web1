<div class="page-title-area two three">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-lg-8">
                        <div class="left two">
                            <img data-cfsrc="<?= checkUserAvaNull($avatar) ?>" alt="CV Chi Tiết" style="display:none;visibility:hidden;width:25%;"><noscript><img src="assets/img/candidate-details1.jpg" alt="Details"></noscript>
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
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="right">
                            <ul>
                                <li><click>
                                    <a href="" id="save">
                                        <i class="bx bx-share-alt"></i>
                                        Save
                                    </a></click>
                                </li>
                                <li><click>
                                    <a href="" id="download">
                                        <i class="bx bxs-report"></i>
                                        Download
                                    </a></click>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="person-details-area resume-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="widget-area">
                    <div class="resume-profile">
                        <img data-cfsrc="assets/img/dashboard1.jpg" alt="Dashboard" style="display:none;visibility:hidden;"><noscript><img src="assets/img/dashboard1.jpg" alt="Dashboard"></noscript>
                        <h2><?= checknull($name) ?></h2>
                        <span><?= checknull($major) ?></span>
                    </div>
                    <div class="information widget-item">
                        <h3>Yêu Cầu</h3>
                        <ul>
                            <li>
                                <img data-cfsrc="assets/img/job-details-icon.png" alt="Details" style="display:none;visibility:hidden;"><noscript><img src="assets/img/job-details-icon.png" alt="Details"></noscript>
                                <h4>Mức Lương mong muốn:</h4>
                                <span><?= checknull($salary) ?></span>
                            </li>
                            <li>
                                <img data-cfsrc="assets/img/job-details-icon.png" alt="Details" style="display:none;visibility:hidden;"><noscript><img src="assets/img/job-details-icon.png" alt="Details"></noscript>
                                <h4>Kinh Nghiệm :</h4>
                                <span><?= checknull($exp) ?></span>
                            </li>
                            <li>
                                <img data-cfsrc="assets/img/job-details-icon.png" alt="Details" style="display:none;visibility:hidden;"><noscript><img src="assets/img/job-details-icon.png" alt="Details"></noscript>
                                <h4>Tuổi :</h4>
                                <span><?= checknull($age) ?></span>
                            </li>
                            <li>
                                <img data-cfsrc="assets/img/job-details-icon.png" alt="Details" style="display:none;visibility:hidden;"><noscript><img src="assets/img/job-details-icon.png" alt="Details"></noscript>
                                <h4>Giới Tính:</h4>
                                <span><?= checknull($gender) ?></span>
                            </li>
                            <li>
                                <img data-cfsrc="assets/img/job-details-icon.png" alt="Details" style="display:none;visibility:hidden;"><noscript><img src="assets/img/job-details-icon.png" alt="Details"></noscript>
                                <h4>Kỹ năng:</h4>
                                <span><?= checknull($progLang) ?></span>
                            </li>
                            <li>
                                <img data-cfsrc="assets/img/job-details-icon.png" alt="Details" style="display:none;visibility:hidden;"><noscript><img src="assets/img/job-details-icon.png" alt="Details"></noscript>
                                <h4>Địa Chỉ:</h4>
                                <span><?= checknull($address) ?></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="details-item">
                    <div class="profile">
                        <h3>Giới thiệu chung về tôi</h3>
                        <p><?= checknull($introduce) ?></p>
                    </div>
                    <div class="work bottom-item">
                        <h3>Kinh nghiệm làm Việc </h3>
                        <?php foreach ($list_cv as $idcv) { ?>
                            <ul>
                                <li>
                                    <img data-cfsrc="assets/img/home-three/title-img.png" alt="Icon" style="display:none;visibility:hidden;"><noscript><img src="assets/img/home-three/title-img.png" alt="Icon"></noscript>
                                    <span>Công việc chính :</span>
                                </li>
                                <li>
                                    <?= checknull($job) ?>
                                </li>
                            </ul>
                            <h4>Tại : <?= checknull($corp) ?></h4>

                            <li>
                                <span>Từ :<?= checknull($start) ?> </span>
                            </li>
                            <li>
                                <span>Đến :<?= checknull($end) ?></span>
                            </li>
                            <hr>
                        <?php } ?>
                    </div>

                    <div class="work bottom-item">
                        <h3>Học Vấn</h3>
                        <?php foreach ($list_cv as $idcv) { ?>
                            <ul>
                                <li>
                                    <img data-cfsrc="assets/img/home-three/title-img.png" alt="Icon" style="display:none;visibility:hidden;"><noscript><img src="assets/img/home-three/title-img.png" alt="Icon"></noscript>
                                    <span>Chuyên Ngành :</span>
                                </li>
                                <li>
                                    <?= checknull($major) ?>
                                </li>
                            </ul>
                            <h4>Tại Trường/Trung Tâm : <?= checknull($school) ?> </h4>
                            <li>
                                <span>Từ năm <?= checknull($year) ?></span>
                            </li>
                            <hr>
                        <?php } ?>
                    </div>
                    <div class="skills">
                        <h3>Ngôn ngữ sử dụng</h3>
                        <div class="skill-wrap">
                            <?php foreach ($list_cv as $cv) { ?>
                                <div class="skill">
                                    <h3><?= checknull($progLang) ?></h3>
                                    <div class="skill-bar skill1 animate__slideInLeft animate__animated">
                                        <span class="skill-count1">66%</span>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>
