<div class="page-title-area two">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-lg-8">
                        <div class="left">
                            <img data-cfsrc="assets/img/job-details1.png" alt="Details" style="display:none;visibility:hidden;"><noscript><img src="assets/img/job-details1.png" alt="Details"></noscript>
                            <h2><?= $job ?></h2>
                            <ul>
                                <li>
                                    <i class="bx bx-pie-chart-alt-2"></i>
                                    <?= $progLang ?>
                                </li>
                                <li>
                                    <i class="bx bx-time"></i>
                                    <?= $start ?>
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

                        <ul>
                            <?php
                            $des_arr =  explode("\n", $description);
                            // $des_arr_2 = array_filter($des_arr);
                            for ($i = 0; $i < count($des_arr); $i++) {
                                echo "<li><i class='bx bx-message-square-check me-2'></i>"  . $des_arr[$i] . "<li>";
                            }
                            ?>
                        </ul>
                    </div>
                    <div class="details-inner">
                        <h3>Giới thiệu công ty</h3>
                        <p><?= $introduce ?></p>
                    </div>
                    <div class="details-inner">
                        <h3>Yêu cầu công việc</h3>
                        <ul><?php
                            $req_arr =  explode("\n", $request);
                            // $req_arr_2 = array_filter($req_arr);
                            for ($i = 0; $i < count($req_arr); $i++) {
                                echo "<li><i class='bx bx-message-square-check me-2'></i>"  . $req_arr[$i] . " <li>";
                            }
                            ?></ul>
                    </div>
                    <div class="details-inner">
                        <h3>Quyền lợi</h3>
                        <ul><?php
                            $ben_arr =  explode("\n", $benefits);

                            // $ben_arr_2 = array_filter($ben_arr);
                            for ($i = 0; $i < count($ben_arr); $i++) {
                                echo  "<li><i class='bx bx-message-square-check me-2'></i>" . $ben_arr[$i] . " </li>";
                            }
                            ?></ul>
                    </div>
                </div>
                <div class="job-details-related pb-70 " style="background-color: #fff; padding-top: 40px;">

                    <div class="section-title">
                        <h2>Việc làm tương tự</h2>
                    </div>
                    <?php foreach ($val_c as $val) : ?>
                        <?php extract($val) ?>
                        <?php $link_recr = "index.php?act=info_recr&id=" . $id; ?>
                        <div class="employer-item">

                            <img data-cfsrc="assets/img/home-one/job1.png" alt="Employer" style="display:none;visibility:hidden;"><noscript><img src="assets/img/home-one/job1.png" alt="Employer"></noscript>
                            <h3><a href="<?= $link_recr ?>" class="text-dark"><?= $job ?></a></h3>
                            <ul>
                                <li>
                                    <i class="flaticon-send"></i>
                                    <?= $address ?>
                                </li>
                                <li><?= $start ?></li>
                            </ul>
                            <p><?= $name ?></p>
                            <span class="span-one"><a href="#">Ứng tuyển</a></span>
                            <span class="span-two"><?= $type == 2 ? "FULL TIME" : "PART TIME" ?> </span>

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
                                <span><?= $salary ?></span>
                            </li>
                            <!-- <li>
                                <img data-cfsrc="assets/img/job-details-icon.png" alt="Details" style="display:none;visibility:hidden;"><noscript><img src="assets/img/job-details-icon.png" alt="Details"></noscript>
                                <h4>Chuyên ngành</h4>
                                <span></span>
                            </li> -->
                            <li>
                                <img data-cfsrc="assets/img/job-details-icon.png" alt="Details" style="display:none;visibility:hidden;"><noscript><img src="assets/img/job-details-icon.png" alt="Details"></noscript>
                                <h4>Địa điểm</h4>
                                <span><?= $address ?></span>
                            </li>
                            <li>
                                <img data-cfsrc="assets/img/job-details-icon.png" alt="Details" style="display:none;visibility:hidden;"><noscript><img src="assets/img/job-details-icon.png" alt="Details"></noscript>
                                <h4>Ngày đăng</h4>
                                <span><?= $start ?></span>
                            </li>
                            <li>
                                <img data-cfsrc="assets/img/job-details-icon.png" alt="Details" style="display:none;visibility:hidden;"><noscript><img src="assets/img/job-details-icon.png" alt="Details"></noscript>
                                <h4>Kinh nghiệm yêu cầu</h4>
                                <span><?= $exp ?> Years</span>
                            </li>
                            <li>
                                <img data-cfsrc="assets/img/job-details-icon.png" alt="Details" style="display:none;visibility:hidden;"><noscript><img src="assets/img/job-details-icon.png" alt="Details"></noscript>
                                <h4>Ngôn ngữ lập trình</h4>
                                <span><?= $progLang ?></span>
                            </li>
                            <li>
                                <img data-cfsrc="assets/img/job-details-icon.png" alt="Details" style="display:none;visibility:hidden;"><noscript><img src="assets/img/job-details-icon.png" alt="Details"></noscript>
                                <h4>Cấp độ</h4>
                                <span><?= $level ?></span>
                            </li>
                            <!-- <li>
                                <img data-cfsrc="assets/img/job-details-icon.png" alt="Details" style="display:none;visibility:hidden;"><noscript><img src="assets/img/job-details-icon.png" alt="Details"></noscript>
                                <h4>Chỉ tiêu ứng tuyển</h4>
                                <span></span>
                            </li> -->
                            <!-- <li>
                                <img data-cfsrc="assets/img/job-details-icon.png" alt="Details" style="display:none;visibility:hidden;"><noscript><img src="assets/img/job-details-icon.png" alt="Details"></noscript>
                                <h4>Chỉ tiêu đã đạt</h4>
                                <span>chưa</span>
                            </li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>