<?php
foreach ($list_recr as $value) {
    if ($value['address'] == 'Hà Nội') {
        extract($value);
        $link_recr = "index.php?act=info_recr&id=" . $id; ?>
        <div class="col-sm-6 col-lg-3  mix h" onclick="return window.location.href='<?= $link_recr ?>'">
            <div class="company-item">
                <a href="<?= $link_recr ?>">
                    <div class="feature-top-right">
                        <span><?= $type ?></span>
                    </div>
                    <div class="top flex-direction">
                        <a href="<?= $link_recr ?>">
                        <img  data-cfsrc='<?= checkCorpAvaNull($avatar)  ?>' alt='Employer' style='width: 70px; height: 70px;object-fit: cover;' class="rounded-circle ">
                        </a>
                        <h3>
                            <a href="<?= $link_recr ?>" style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 1; -webkit-box-orient: vertical;max-height: 200px;"><?= $job ?></a>
                        </h3>

                        <p>
                            <i class="flaticon-appointment"></i>
                            <?= $address ?> / <?= $start ?>
                        </p>
                    </div>
                    <div class="bottom">
                        <ul class="d-flex flex-column ">
                            <li>Công ty <?= $name ?></li>
                            <li><?= $level ?></li>
                            <li>Kinh nghiệm: <?= $exp ?></li>
                        </ul>
                        <span>Mức lương </span>
                        <h4><?= $salary ?></h4>
                        <a href="<?= $link_recr ?>">
                            <i class="flaticon-right-arrow"></i>
                        </a>
                    </div>
                </a>
            </div>
        </div>
    <?php
    } else if ($value['address'] == 'TP. Hồ Chí Minh') {
        extract($value);
        $link_recr = "index.php?act=info_recr&id=" . $id; ?>
        <div class="col-sm-6 col-lg-3  mix m" onclick="return window.location.href='<?= $link_recr ?>'">
            <div class="company-item">
                <a href="<?= $link_recr ?>">
                    <div class="feature-top-right">
                        <span><?= $type ?></span>
                    </div>
                    <div class="top flex-direction">
                        <a href="<?= $link_recr ?>">
                        <img  data-cfsrc='<?= checkCorpAvaNull($avatar)  ?>' alt='Employer' style='width: 70px; height: 70px;object-fit: cover;' class="rounded-circle ">
                        </a>
                        <h3>
                            <a href="<?= $link_recr ?>" style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 1; -webkit-box-orient: vertical;max-height: 200px;"><?= $job ?></a>
                        </h3>

                        <p>
                            <i class="flaticon-appointment"></i>
                            <?= $address ?> / <?= $start ?>
                        </p>
                    </div>
                    <div class="bottom">
                        <ul class="d-flex flex-column ">
                            <li>Công ty <?= $name ?></li>
                            <li><?= $level ?></li>
                            <li>Kinh nghiệm: <?= $exp ?></li>
                        </ul>
                        <span>Mức lương </span>
                        <h4><?= $salary ?></h4>
                        <a href="<?= $link_recr ?>">
                            <i class="flaticon-right-arrow"></i>
                        </a>
                    </div>
                </a>
            </div>
        </div>
    <?php
    } else if ($value['address'] == 'Đà Nẵng') {
        extract($value);
        $link_recr = "index.php?act=info_recr&id=" . $id; ?>
        <div class="col-sm-6 col-lg-3  mix d" onclick="return window.location.href='<?= $link_recr ?>'">
            <div class="company-item">
                <a href="<?= $link_recr ?>">
                    <div class="feature-top-right">
                        <span><?= $type ?></span>
                    </div>
                    <div class="top flex-direction">
                        <a href="<?= $link_recr ?>">
                        <img  data-cfsrc='<?= checkCorpAvaNull($avatar)  ?>' alt='Employer' style='width: 70px; height: 70px;object-fit: cover;' class="rounded-circle ">
                        </a>
                        <h3>
                            <a href="<?= $link_recr ?>" style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 1; -webkit-box-orient: vertical;max-height: 200px;"><?= $job ?></a>
                        </h3>

                        <p>
                            <i class="flaticon-appointment"></i>
                            <?= $address ?> / <?= $start ?>
                        </p>
                    </div>
                    <div class="bottom">
                        <ul class="d-flex flex-column ">
                            <li>Công ty <?= $name ?></li>
                            <li ><?= $level ?></li>
                            <li>Kinh nghiệm: <?= $exp ?></li>
                        </ul>
                        <span>Mức lương </span>
                        <h4><?= $salary ?></h4>
                        <a href="<?= $link_recr ?>">
                            <i class="flaticon-right-arrow"></i>
                        </a>
                    </div>
                </a>
            </div>
        </div>
    <?php
    }
}
?>