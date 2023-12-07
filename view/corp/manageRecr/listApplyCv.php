<div class="tab-pane fade  <?= (!isset($_GET['id']) && !isset($_GET['idEdit'])  && !isset($_GET['profile']) && !isset($_GET['idrec']) && isset($_SESSION['same'])) || isset($thongbaoApply) ? 'show active' : '' ?> " id="v-pills-apply" role="tabpanel" aria-labelledby="v-pills-apply-tab">
    <form action="index.php?act=manage_recr" method="post" class="mb-5 ">
        <div class="d-flex align-items-center">
            <input type="search" name="kym" class="p-2 px-5 rounded-start border border-secondary me-3" placeholder="Tìm kiếm ...">
            
                <select name="status" class="w-25">
                    <option value="">Tất cả</option>
                    <option value="Chờ xét duyệt">Chờ xét duyệt</option>
                    <option value="Đã xét duyệt">Đã xét duyệt </option>
                    <option value="Từ chối">Từ chối </option>
                </select>
           
            <button class="btn btn-info rounded-end p-2 mx-3 text-white" name="submit" style="background-color: var(--secondary);">Tìm kiếm</button>
        </div>


    </form>
    <?php if (empty($listApply)) { ?>
        <div class=" my-3">
            <div class="employer-item text-center">
                Không có dữ liệu tìm thấy !
            </div>
        </div>
        <?php } else {
            // var_dump($listApply);
        foreach ($listApply as $cv) {
            extract($cv) ?>
            <div class="candidate-item two" style="cursor:pointer;" onclick="return window.location.href='index.php?act=infoCv&id=<?= $iduser ?>&idinfo=<?= $idinfo ?>&browseR=<?= $status ?>'">
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
                    <span id='<?php if ($status == 'Đã xét duyệt') { echo 'span-two'; } else if ($status == 'Từ chối') { echo 'span-denied' ;} else { echo 'span-checking'; }?>'>
                        <?= $status ?>
                    </span>
                    <div class="d-flex justify-content-between align-content-center">
                        <div class="d-flex">
                            <?php if ($status == "Chờ xét duyệt") { ?>
                                <a href="index.php?act=addCV&idinfo=<?= $idinfo ?>" class="btn text-white me-3 py-1 px-2" style="background-color: var(--secondary);"><i class="fa-solid fa-check"></i></a>
                                <a href="index.php?act=deleteCv&idinfo=<?= $idinfo ?>" class="btn btn-secondary py-1 px-2"><i class="fa-solid fa-xmark"></i></a>
                            <?php } else { ?>
                                <a href="index.php?act=reconsider&idinfo=<?= $idinfo ?>" class="btn text-white me-3 py-1 px-2" style="background-color: var(--secondary);">Xét duyệt lại</a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <img data-cfsrc="<?= checkUserCvNull($avatarCv) ?>" alt="<?= $name ?>" style="display:none;visibility:hidden; <?= $avatarCv == '' ? 'width: 80px;height: 80px; margin: 50px 0 0 0' : '' ?>">
                <noscript><img style="<?= $avatar == '' ? 'width: 80px;height: 80px;' : '' ?>" src="<?= checkUserCvNull($avatar) ?>" alt="Candidate"></noscript>
            </div>

        <?php } ?>
    <?php } ?>
    <!-- <div class="pagination-area">
        <ul class="pagination">
            <li><a href="#" id="prev">Prev</a></li>
            <?php
            // for ($i = 1; $i <= $totalPages; $i++) {
            //     echo "<li><a href='#' class='page' data-page='$i'>$i</a></li>";
            // }
            ?>
            <li><a href="#" id="next">Next</a></li>
        </ul>
    </div> -->

</div>