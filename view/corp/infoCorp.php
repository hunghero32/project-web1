<div class="page-title-area two">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="row align-items-end">
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <div style="width: 100px; height: 100px; border: 3px solid white" class="overflow-hidden rounded-circle mb-3">
                            <img src='<?= checkUserAvaNull($corp['avatar']) ?>' alt='user ' class=''>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="left">
                            <h2><?= $name ?></h2>
                            <ul>
                                <li>
                                    <i class="me-2 fa-solid fa-location-dot"></i>
                                    <?= checknull($corp['address']); ?>
                                </li>
                                <li>
                                    <i class="fa-solid fa-at"></i>
                                    <a href="mailto:<?= checknull($corp['email']); ?>">
                                        <?= checknull($corp['email']); ?>
                                    </a>
                                </li>
                                <li>
                                    <i class="fa-solid fa-tty"></i>
                                    <a href="tel:<?= checknull($corp['phone']) ?>">
                                        <?= checknull($corp['phone']); ?>
                                    </a>
                                </li>
                                <li>
                                    <i class="me-2 fa-solid fa-link"></i>
                                    <a href="<?= checklink($link) ?>">
                                        <?= checknull($link) !== 'Chưa cập nhật' ? checknull($link) : 'Chưa cập nhật'; ?>
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
                <div class="details-inner mb-4">
                    <h3>Giới Thiệu Công Ty</h3>
                </div>
                <div class="details-item">
                    <div class="details-inner">
                        <p style="text-align: justify">
                            <?= empty($intro) ? 'Chưa cập nhật giới thiệu' : $intro; ?>
                        </p>
                    </div>
                    <div class="details-inner d-flex flex-column flex-sm-row justify-content-between justify-content-lg-start gap-0 gap-sm-5 pe-2">
                        <ul class="mb-2 mb-sm-0">
                            <li><strong style="width: 10%">* Năm thành lập </strong></li>
                            <li><i class="fa-solid fa-calendar me-2"></i><?= checknull($activeYear) > 0 ? checknull($activeYear) : 'Chưa cập nhật'; ?></li>
                        </ul>
                        <ul class="mb-2 mb-sm-0">
                            <li><strong style="width: 10%">* Quy mô công ty </strong></li>
                            <li><i class="fa-solid fa-users me-2"></i><?= checknull($size) > 0 ? checknull($size) . ' nhân viên' : 'Chưa cập nhật'; ?></li>
                        </ul>
                        <ul class="mb-2 mb-sm-0">
                            <li><strong style="width: 10%">* Thời gian làm việc </strong></li>
                            <li><i class="fa-solid fa-calendar-day me-2"></i><?= checknull($workingday); ?></li>
                        </ul>
                    </div>
                    <hr>
                    <div class="details-inner">
                        <ul>
                            <li><i class="fa-solid fa-star-of-life"></i> <strong style="width: 10%"> Quyền lợi </strong></li>
                            <li><?= empty($bene) ? 'Chưa cập nhật quyền lợi' : $bene; ?></li>
                        </ul>
                    </div>
                    <hr class="opacity-0">
                    <hr>
                    <?= !empty($gallery) ? '<h5>Ảnh giới thiệu</h5>' : '<h5>Chưa cập nhật ảnh giới thiệu <i class="fa-solid fa-face-sad-tear"></i></h5>' ?>
                    <div class="details-inner">
                        <div class="job-details-slider owl-theme owl-carousel">
                            <?php if (!empty($gallery)) { ?>
                                <?php foreach ($gallery as $e) { ?>
                                    <div style="width: 100%; height: 340px" class="slider-item rounded-3 overflow-hidden d-flex align-items-center">
                                        <img data-cfsrc="<?= $img_path . $e ?>" alt="Details" style="display:none;visibility:hidden;">
                                        <noscript><img class="" src="<?= $img_path . $e ?>" alt="Details"></noscript>
                                    </div>
                                <?php } ?>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="widget-area">
                    <h5><i class="fa-solid fa-pen-to-square me-2"></i> Tuyển dụng của <?= $name ?></h5>
                    <?php if (!empty($ownRecrs)) {
                        foreach ($ownRecrs as $recr) {
                            extract($recr); ?>
                            <div class="employer-item" onclick="return window.location.href = 'index.php?act=info_recr&id=<?= $id ?>'">
                                <img width="50px" class="rounded-3" data-cfsrc="<?= checkCorpAvaNull($avatar) ?>" alt="Details" style="display:none;visibility:hidden;">
                                <noscript><img src="<?= checkCorpAvaNull($avatar) ?>" alt="Details"></noscript>
                                <h6 class="text-main"><?= $job ?></h6>
                                <p class="m-0 p-0" style="font-size: 14px;"><i class="fa-solid fa-code"></i> <?= checknull($progLang) ?></p>
                                <p class="m-0 p-0" style="font-size: 14px;"><i class="fa-solid fa-bolt"></i> <?= checknull($level) ?></p>
                                <p class="m-0 p-0" style="font-size: 14px;"><i class="fa-solid fa-hourglass-start"></i><?= empty(checknull($end)) ? ' Chưa cập nhật' : ' Thời hạn đến ' . $end; ?></p>
                                <span class="span-two"><?= $type; ?></span>
                            </div>
                        <?php } ?>
                    <?php } else { ?>
                        <div class="employer-item">
                            Không có dữ liệu tìm thấy !
                        </div>
                    <?php } ?>
                    <hr>
                    <h5><i class="fa-solid fa-map-location-dot me-2"></i> Cũng tại <?= $address ?></h5>
                    <?php if (!empty($sameLocat)) {
                        foreach ($sameLocat as $recr) {
                            extract($recr); ?>
                            <div class="employer-item" onclick="return window.location.href = 'index.php?act=infoCorp&id=<?= $id ?>'">
                                <img width="50px" class="rounded-3" data-cfsrc="<?= checkCorpAvaNull($avatar) ?>" alt="Details" style="display:none;visibility:hidden;">
                                <noscript><img src="<?= checkCorpAvaNull($avatar) ?>" alt="Details"></noscript>
                                <h6 class="text-main"><?= $name ?></h6>
                                <p class="m-0 p-0" style="font-size: 14px;"><i class="fa-solid fa-users"></i> <?= $size > 0 ? $size : 'Chưa cập nhật' ?></p>
                                <p class="m-0 p-0" style="font-size: 14px;"><i class="fa-solid fa-calendar-days"></i><?= empty(checknull($activeYear)) ? ' Chưa cập nhật' : ' Thành lập ' . $activeYear; ?></p>
                                <!-- <span class="span-two"><?= $type; ?></span> -->
                            </div>
                        <?php } ?>
                    <?php } else { ?>
                        <div class="employer-item">
                            Không có dữ liệu tìm thấy !
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>