<?php extract($val_recr); ?>
<div class="page-title-area two">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-lg-8">
                        <div class="left">
                            <img data-cfsrc="assets/img/job-details1.png" alt="Details" style="display:none;visibility:hidden;"><noscript><img src="assets/img/job-details1.png" alt="Details"></noscript>
                            <h2><?= $title ?></h2>
                            <ul>
                                <li>
                                    <i class="bx bx-pie-chart-alt-2"></i>
                                    <?= $major ?>
                                </li>
                                <li>
                                    <i class="bx bx-time"></i>
                                    <?= $date ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="right">
                            <a class="cmn-btn" href="#">
                                Ứng tuyển
                                <i class="bx bx-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="job-details-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="details-item">
                    <div class="details-inner">
                        <h3>Miêu tả công việc</h3>
                        <p><?= $description ?></p>
                    </div>
                    <div class="details-inner">
                        <h3>Giới thiệu công ty</h3>
                        <p><?= $c_description ?></p>
                    </div>
                  
                </div>
                <div class="job-details-related pb-70 " style="background-color: #fff; padding-top: 40px;">
                   
                        <div class="section-title">
                            <h2>Việc làm tương tự</h2>
                        </div>
                        <?php foreach ($val_corp as $val) : ?>
                            <?php extract($val) ?>
                            <div class="employer-item">
                                <a href="job-details.html">
                                    <img data-cfsrc="assets/img/home-one/job1.png" alt="Employer" style="display:none;visibility:hidden;"><noscript><img src="assets/img/home-one/job1.png" alt="Employer"></noscript>
                                    <h3><?= $title ?></h3>
                                    <ul>
                                        <li>
                                            <i class="flaticon-send"></i>
                                            <?= $address ?>
                                        </li>
                                        <li><?= $date ?></li>
                                    </ul>
                                    <p><?= $major ?></p>
                                    <span class="span-one">Accounting</span>
                                    <span class="span-two"><?=$val['type'] == 2 ? "FULL TIME" : "PART TIME" ?> </span>
                                </a>
                            </div>
                        <?php endforeach ?>


                </div>
            </div>
            <div class="col-lg-4">
                <div class="widget-area">
                    <div class="information widget-item">
                        <h3>Chi tiết</h3>
                        <ul>
                            <li>
                                <img data-cfsrc="assets/img/job-details-icon.png" alt="Details" style="display:none;visibility:hidden;"><noscript><img src="assets/img/job-details-icon.png" alt="Details"></noscript>
                                <h4>Mức lương thỏa thuận</h4>
                                <span><?=$salary ?></span>
                            </li>
                            <!-- <li>
                                <img data-cfsrc="assets/img/job-details-icon.png" alt="Details" style="display:none;visibility:hidden;"><noscript><img src="assets/img/job-details-icon.png" alt="Details"></noscript>
                                <h4>Chuyên ngành</h4>
                                <span></span>
                            </li> -->
                            <li>
                                <img data-cfsrc="assets/img/job-details-icon.png" alt="Details" style="display:none;visibility:hidden;"><noscript><img src="assets/img/job-details-icon.png" alt="Details"></noscript>
                                <h4>Địa điểm</h4>
                                <span><?=$address ?></span>
                            </li>
                            <li>
                                <img data-cfsrc="assets/img/job-details-icon.png" alt="Details" style="display:none;visibility:hidden;"><noscript><img src="assets/img/job-details-icon.png" alt="Details"></noscript>
                                <h4>Ngày đăng</h4>
                                <span><?=$date ?></span>
                            </li>
                            <li>
                                <img data-cfsrc="assets/img/job-details-icon.png" alt="Details" style="display:none;visibility:hidden;"><noscript><img src="assets/img/job-details-icon.png" alt="Details"></noscript>
                                <h4>Kinh nghiệm yêu cầu</h4>
                                <span><?=$exp ?> Years</span>
                            </li>
                            <li>
                                <img data-cfsrc="assets/img/job-details-icon.png" alt="Details" style="display:none;visibility:hidden;"><noscript><img src="assets/img/job-details-icon.png" alt="Details"></noscript>
                                <h4>Ngôn ngữ lập trình</h4>
                                <span><?=$major ?></span>
                            </li>
                            <li>
                                <img data-cfsrc="assets/img/job-details-icon.png" alt="Details" style="display:none;visibility:hidden;"><noscript><img src="assets/img/job-details-icon.png" alt="Details"></noscript>
                                <h4>Cấp độ</h4>
                                <span><?=$level ?></span>
                            </li>
                            <li>
                                <img data-cfsrc="assets/img/job-details-icon.png" alt="Details" style="display:none;visibility:hidden;"><noscript><img src="assets/img/job-details-icon.png" alt="Details"></noscript>
                                <h4>Chỉ tiêu ứng tuyển</h4>
                                <span><?=$totalCV ?></span>
                            </li>
                            <li>
                                <img data-cfsrc="assets/img/job-details-icon.png" alt="Details" style="display:none;visibility:hidden;"><noscript><img src="assets/img/job-details-icon.png" alt="Details"></noscript>
                                <h4>Chỉ tiêu đã đạt</h4>
                                <span><?=$status?></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>