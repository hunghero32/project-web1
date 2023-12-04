<div class="tab-pane fade  <?= (!isset($_GET['id']) && !isset($_GET['idEdit']) && !isset($_GET['idInfo']) && !isset($_GET['profile']) && isset($_SESSION['same']) ) ? 'show active' : '' ?> " id="v-pills-apply" role="tabpanel" aria-labelledby="v-pills-apply-tab">
    <form action="index.php?act=manage_recr" method="post" class="mb-5 d-flex justify-content-between align-items-center">
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
       

    </form>
    <?php if (empty($listApply) ) { ?>
                <div class=" my-3">
                    <div class="employer-item text-center">
                        Không có dữ liệu tìm thấy !
                    </div>
                </div>
                <?php } else {
                foreach ($listApply as $cv) {
                    extract($cv) ?>
                    
                        <div class="candidate-item two" style="cursor:pointer;" onclick="return window.location.href='index.php?act=infoCv&id=<?= $iduser ?>'">
                            <div class="left">
                                <h2><a href="index.php?act=infoCv&id=<?= $iduser ?>" class="text-dark"><?= $namecv ?></a></h2>
                                <span class="w-100">Công việc ứng tuyển : <?= $job ?></span>
                                <ul class="experience">
                                    <li>Kinh nghiệm: <span><?= $exp ?> Tháng</span></li>
                                    <li>Mức lương: <span><?= $salary ?></span></li>
                                    <li>
                                        <i class="flaticon-send"></i> <?= $address ?>
                                    </li>
                                </ul>
                                <ul>
                                    <li><?= $progLang ?></li>
                                </ul>
                                <div class="cmn-link">
                                    <a href="index.php?act=infoCv&id=<?= $iduser ?>">
                                        <i class="flaticon-right-arrow one"></i> Xem Chi Tiết
                                        <i class="flaticon-right-arrow two"></i>
                                    </a>
                                </div>
                            </div>
                            <img data-cfsrc="<?= checkUserCvNull($avatarCv) ?>" alt="<?= $name ?>" style="display:none;visibility:hidden; <?= $avatarCv == '' ? 'width: 80px;height: 80px' : '' ?>">
                            <noscript><img style="<?= $avatar == '' ? 'width: 80px;height: 80px' : '' ?>" src="<?= checkUserCvNull($avatar) ?>" alt="Candidate"></noscript>
                        </div>
                    
                <?php } ?>
            <?php } ?>
    <div class="pagination-area">
        <ul class="pagination">
            <li><a href="#" id="prev">Prev</a></li>
            <?php
            for ($i = 1; $i <= $totalPages; $i++) {
                echo "<li><a href='#' class='page' data-page='$i'>$i</a></li>";
            }
            ?>
            <li><a href="#" id="next">Next</a></li>
        </ul>
    </div>

</div>