<div class="tab-pane fade  <?= isset($_GET['idrec'] ) ? 'show active' : '' ?> " id="v-pills-list-cv" role="tabpanel" aria-labelledby="v-pills-list-cv-tab">
<h5 class="mb-4">Các CV đang ứng tuyển : </h5>
    <!-- <form action="index.php?act=manage_recr" method="post" class="mb-5 d-flex justify-content-between align-items-center">
        <div class="d-flex align-items-center">
            <input type="search" name="kym" class="p-2 px-5 rounded-start border border-secondary me-3" placeholder="Tìm kiếm ...">
            <div class="form-group position-relative">
                <input name="end" type="text" class="p-2" id="searchexp" placeholder="<?= checkfind('', 'Ngày hết hạn'); ?> &darr;">
                <div class="dropdown-content" id="dropdownexp">
                    <div class="dropdown-item">Không chọn</div>
                    <?php foreach ($valu_racr as $cv) {
                        // extract($cv);
                        if ($cv['end'] !== '') { ?>
                            <div class="dropdown-item"><?= $cv['end'] ?></div>
                        <?php } ?>
                    <?php } ?>
                    <div class="dropdown-item">Khác</div>
                </div>
            </div>
            <button class="btn btn-info rounded-end p-2 mx-3 text-white" name="submit" style="background-color: var(--secondary);">Tìm kiếm</button>
        </div>


    </form> -->
    <?php if (empty($valu_r_cv)) { ?>
        <div class=" my-3">
            <div class="employer-item text-center">
                Không có dữ liệu tìm thấy !
            </div>
        </div>
        <?php } else {
        foreach ($valu_r_cv as $cv) {
            extract($cv) ?>

            <div class="candidate-item two " style="cursor:pointer;" onclick="return window.location.href='index.php?act=infoCv&id=<?= $iduser ?>&browseR=<?=$status ?>'">
                <div class="w-100">
                    <h4><?= $namecv ?></h4>
                    <span class="w-100">Công việc ứng tuyển : <?= $job ?></span>
                    <ul class="experience">
                        <li>Kinh nghiệm: <span><?= $exp ?> Tháng</span></li>
                        <li>Mức lương: <span><?= $salary ?></span></li>
                        <!-- <li>
                            <i class="flaticon-send"></i> <?= $address ?>
                        </li> -->

                        <li>Ngôn ngữ : <?= $progLang ?></li>
                    </ul>
                    <div class="d-flex justify-content-between align-content-center">

                        <div class="d-flex">
                            <?php if ($status == "Chờ xét duyệt") { ?>
                                <a href="index.php?act=addCV&idinfo=<?= $idinfo ?>" class="btn text-white me-3" style="background-color: var(--secondary);">Xét duyệt</a>
                                <a href="index.php?act=deleteCv&idinfo=<?= $idinfo ?>" class="btn btn-secondary">Từ chối</a>
                            <?php } else { ?>
                                <button  class="btn text-white " style="background-color: var(--secondary);" disabled >Đã xét duyệt</button>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <img data-cfsrc="<?= checkUserCvNull($avatarCv) ?>" alt="<?= $name ?>" style="display:none;visibility:hidden; <?= $avatarCv == '' ? 'width: 80px;height: 80px' : '' ?>">
                <noscript><img style="<?= $avatar == '' ? 'width: 80px;height: 80px' : '' ?>" src="<?= checkUserCvNull($avatar) ?>" alt="Candidate"></noscript>
            </div>

        <?php } ?>
    <?php } ?>
   

</div>