<div class="page-title-area two">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-lg-8">
                        <div class="left">
                            <div style="width: 100px; height: 100px; border: 3px solid white" class="overflow-hidden rounded-circle mb-3">
                                <img src='<?= checkCorpAvaNull($avatar) ?>' alt='user ' class=''>
                            </div>
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
                            <?php if (isset($_SESSION['username'])) { ?>
                                <a class="cmn-btn <?= isset($_SESSION['username']['role']) && $_SESSION['username']['role'] !== 2 ? "d-none" : '' ?>"
                                href="#" data-bs-toggle="modal" data-bs-target="#myModal">
                                    Ứng tuyển
                                    <i class="bx bx-plus"></i>
                                </a>
                            <?php } else { ?>
                                <a class="cmn-btn" href="index.php?act=signin" onclick="return confirm('Bạn cần đăng nhập trước');">
                                    Ứng tuyển
                                    <i class="bx bx-plus"></i>
                                </a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="myModal">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Ứng tuyển <Span style="color : var(--secondary);"><?= $job ?></Span></h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>

            </div>
            <div class="modal-body">
                <div class="d-flex justify-content-between align-content-center">
                    <h6>Sử dụng CV có sẵn </h6>
                    <!-- <button><a href=""   ><i class="fa-solid fa-pen me-2"></a></button> -->
                    <button onclick="editCV()" class="btn btn-outline-secondary" style="font-size: 13px;"><i class="fa-solid fa-pen me-2"></i> Chỉnh sửa </button>

                    <!-- <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#demoCv" style="font-size: 13px;">
                    <i class="fa-solid fa-pen me-2"></i> Chỉnh sửa
                    </button> -->
                </div>
                <div class="row p-2 m-1 mt-3" style="border: 1px dashed var(--secondary); height: 150px;">
                    <div class="col-lg-8 d-flex flex-column ">
                        <p class="fs-6 mb-0">Họ và tên : <?= $name ?></p>
                        <p class="fs-6 mb-0">SĐT : <?= $phone ?></p>
                        <p class="fs-6 mb-0">Email : <?= $email ?></p>
                        <p class="fs-6 mb-0">Địa chỉ : <?= $address ?></p>
                    </div>
                    <div class="col-lg-4 ">
                        <img src='<?= checkUserAvaNull($infoCv['avatarCV'])  ?>' alt='user ' class=" w-50 h-75 mt-2 rounded float-end img-fluid ">
                    </div>
                </div>

            </div>

            <div class="modal-footer">
                <?php if (isset($_SESSION['check_apply'])) {
                    echo "Dữ liệu đã được xử lý.";
                    unset($_SESSION['check_apply']);
                } else { ?>
                    <form action="index.php?act=apply_job" method="post">
                        <input type="hidden" name="idRecr" value="<?= $id ?>">
                        <input type="hidden" name="idCV" value="<?= $infoCv['id'] ?>">
                        <button type="submit" name="applyjob" class="btn text-white " data-bs-dismiss="modal" style="background-color: var(--secondary);">Nộp CV</button>
                    </form>
                <?php } ?>
            </div>
            <!-- <div class="p-4 m-4 mt-2" style="border: 1px dashed var(--secondary); ">
                <p class="h5 fw-bold"><i class="fas fa-exclamation-triangle me-3"></i>Lưu ý
                <p>
                <p>1. TopCV khuyên tất cả các bạn hãy luôn cẩn trọng trong quá trình tìm việc và chủ động nghiên cứu về thông tin công ty, vị trí việc làm trước khi ứng tuyển.
                    Ứng viên cần có trách nhiệm với hành vi ứng tuyển của mình. Nếu bạn gặp phải tin tuyển dụng hoặc nhận được liên lạc đáng ngờ của nhà tuyển dụng, hãy báo cáo ngay cho TopCV qua email hotro@topcv.vn để được hỗ trợ kịp thời.
                <p>

                <p>2. Tìm hiểu thêm kinh nghiệm phòng tránh lừa đảo tại đây.
                <p>
            </div> -->
        </div>
    </div>
</div>


<!-- Demo CV -->
<?php include "applyCv/demoCv.php"; ?>

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
                    <?php
                    if (empty($val_c)) {
                        echo "<div class=' my-3'>
                        <div class='employer-item text-center'>
                            Không có việc làm tương tự !
                        </div>
                    </div>";
                    } else {
                        foreach ($val_c as $r) { ?>
                            <?php extract($r);
                            $link_recr = "index.php?act=info_recr&id=" . $id; ?>
                            <div class="employer-item">

                                <img data-cfsrc='<?= checkCorpAvaNull($avatar)  ?>' alt='Employer' style='width: 70px; height: 70px;object-fit: cover;' class="rounded-circle ">
                                <h3><a href="<?= $link_recr ?>" class="text-dark"><?= $job ?></a></h3>
                                <ul>
                                    <li>
                                        <i class="flaticon-send"></i>
                                        <?= $address ?>
                                    </li>
                                    <li><?= $start ?></li>
                                </ul>
                                <p><?= $name ?></p>
                                <span class="span-one" style="background-color: var(--secondary);"><a href="<?= $link_recr ?>" class="text-white">Ứng tuyển</a></span>
                                <span class="span-two"><?= $type ?> </span>

                            </div>
                    <?php
                        }
                    } ?>


                </div>
            </div>
            <div class="col-lg-4">
                <div class="widget-area">
                    <div class="information widget-item">
                        <h3>Chi tiết</h3>
                        <ul>
                            <li>
                                <h4>Mức lương thỏa thuận</h4>
                                <span><?= $salary ?></span>

                            </li>

                            <li>

                                <h4>Địa điểm</h4>
                                <span><?= $address ?></span>

                            </li>
                            <li>

                                <h4>Ngày đăng</h4>
                                <span><?= $start ?></span>

                            </li>
                            <li>

                                <h4>Kinh nghiệm yêu cầu</h4>
                                <span><?= $exp ?> Years</span>

                            </li>
                            <li>

                                <h4>Ngôn ngữ lập trình</h4>
                                <span><?= $progLang ?></span>

                            </li>
                            <li>

                                <h4>Cấp độ</h4>
                                <span><?= $level ?></span>

                            </li>
                            <li>

                                <h4>Hình thức làm việc</h4>
                                <span><?= $type ?></span>

                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>