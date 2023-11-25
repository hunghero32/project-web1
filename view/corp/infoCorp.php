<div class="page-title-area two">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-lg-8">
                        <div class="left">
                            <img width="50px" data-cfsrc="<?= checkCorpAvaNull($avatar); ?>" alt="Details" style="display:none;visibility:hidden;">
                            <noscript><img src="<?= checkCorpAvaNull($avatar); ?>" alt="Details"></noscript>
                            <h2><?= $name ?></h2>
                            <ul>
                                <li>
                                    <i class="me-2 fa-solid fa-location-dot"></i>
                                    <?= checknull($address); ?>
                                </li>
                                <li>
                                    <i class="fa-solid fa-at"></i>
                                    <a href="mailto:<?= checknull($email) ?>">
                                        <?= checknull($email); ?>
                                    </a>
                                </li>
                                <li>
                                    <i class="fa-solid fa-tty"></i>
                                    <a href="tel:<?= checknull($phone) ?>">
                                        <?= checknull($phone); ?>
                                    </a>
                                </li>
                                <li>
                                    <i class="me-2 fa-solid fa-link"></i>
                                    <a href="<?= checklink($link) ?>">
                                        <?= checknull($link) !== 'Chưa cập nhật' ? 'Website công ty' : 'Chưa cập nhật' ; ?>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="job-details-area employer-details-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="details-item">
                    <div class="details-inner">
                        <h3>Giới Thiệu Công Ty</h3>
                        <p>
                            <?= checknull($introduce); ?>
                        </p>
                    </div>
                    <div class="details-inner">
                        <ul>
                            <li><i style="width: 2.6%" class="fa-solid fa-calendar"></i> <strong style="width: 10%"> Năm thành lập </strong></li>
                            <li><i style="width: 3%"></i><?= checknull($activeYear); ?></li>
                            <br>
                            <li><i style="width: 2.6%" class="fa-solid fa-users"></i> <strong style="width: 10%"> Quy mô công ty </strong></li>
                            <li><i style="width: 3%"></i><?= checknull($size); ?> nhân viên</li>
                            <br>
                            <li><i style="width: 2.6%" class="fa-solid fa-calendar-day"></i> <strong style="width: 10%"> Thời gian làm việc </strong></li>
                            <li><i style="width: 3%"></i><?= checknull($workingday); ?></li>
                            <br>
                            <li><i style="width: 2.6%" class="fa-solid fa-star-of-life"></i> <strong style="width: 10%"> Quyền lợi </strong></li>
                            <li><i style="width: 3%"></i><?= checknull($benefits); ?></li>
                            <br>
                        </ul>
                    </div>
                    <div class="details-inner">
                        <h3>Ảnh Giới thiệu</h3>
                        <div class="job-details-slider owl-theme owl-carousel">
                            <div class="slider-item">
                                <img data-cfsrc="assets/img/job-details1.jpg" alt="Details" style="display:none;visibility:hidden;"><noscript><img src="assets/img/job-details1.jpg" alt="Details"></noscript>
                            </div>
                            <div class="slider-item">
                                <img data-cfsrc="assets/img/job-details2.jpg" alt="Details" style="display:none;visibility:hidden;"><noscript><img src="assets/img/job-details2.jpg" alt="Details"></noscript>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="widget-area">
                    <h5>Tuyển dụng của <?= $name ?></h5>
                    <div class="employer-item">
                        <ul>
                            <li>
                                <img width="50px" data-cfsrc="<?= checkCorpAvaNull($avatar) ?>" alt="Details" style="display:none;visibility:hidden;">
                                <noscript><img src="<?= checkCorpAvaNull($avatar) ?>" alt="Details"></noscript>
                                <h6 class="text-main"><?= $name ?></h6>
                                <span>hahaha</span>
                            </li>
                        </ul>
                    </div>
                    <hr>
                    <h5>Cũng tại <?= $address ?></h5>
                    <div class="employer-item">
                        <ul>
                            <li>
                                <img width="50px" data-cfsrc="<?= checkCorpAvaNull($avatar) ?>" alt="Details" style="display:none;visibility:hidden;">
                                <noscript><img src="<?= checkCorpAvaNull($avatar) ?>" alt="Details"></noscript>
                                <h6 class="text-main"><?= $name ?></h6>
                                <span>hahaha</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>