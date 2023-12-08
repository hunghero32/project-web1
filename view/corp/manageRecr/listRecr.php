<div class="tab-pane fade  <?= (!isset($_GET['id']) && !isset($_GET['idEdit']) && !isset($_GET['idInfo']) && !isset($_GET['profile']) && isset($_SESSION['same']) && !isset($_GET['idinfo']) 
&& !isset($_GET['idrec']) && !isset($thongbaoApply)) || (isset($thongbao)) ? 'show active' : '' ?> " id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
    <form action="index.php?act=manage_recr" method="post" class="mb-5 d-flex justify-content-between align-items-center">
        <div class="d-flex align-items-center">
            <input type="search" name="kym" class="p-2 px-5 rounded-start border border-secondary me-3" placeholder="Tìm kiếm ...">
            <div class="form-group position-relative">
                <input name="end" type="text" class="p-2" id="searchexp" placeholder="<?= checkfind('', 'Ngày hết hạn'); ?> &darr;">
                <div class="dropdown-content" id="dropdownexp">
                    <div class="dropdown-item"></div>
                    <?php foreach ($list_value_recr as $cv) {
                        // extract($cv);
                        if ($cv['end'] !== '') { ?>
                            <div class="dropdown-item"><?= $cv['end'] ?></div>
                        <?php } ?>
                    <?php } ?>
                    <div class="dropdown-item">Khác</div>
                </div>
            </div>
            <button class="btn btn-info rounded-end p-2 mx-3 text-white" name="submit" type="submit" style="background-color: var(--secondary);">Tìm kiếm</button>
        </div>
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link  text-white p-2 px-4 fw-bold" id="v-pills-post-tab" href="index.php?act=post_recr&id=1" role="tab" aria-selected="false" style="background-color: var(--secondary);">
                <div class="profile-list">

                    Thêm Bài tuyển dụng
                </div>
            </a>
        </div>

    </form>

    <?php
    if (empty($list_value_recr)) { ?>
        <div class="col-lg-12">
            <div class="employer-item text-center">
                Không có dữ liệu tìm thấy !
            </div>
        </div>
        <?php } else {
        foreach ($list_value_recr as $key) { ?>

            <?php
            extract($key);
            // var_dump($list_racr);
            $edit_recr = "index.php?act=edit_recr&idEdit=" . $id;
            $delete_recr = "index.php?act=delete_recr&id=" . $id; ?>
            <?php $link_recr = "index.php?act=infoRecr&idInfo=" . $id; ?>
            <div class='employer-item position-relative pe-3'>

                <img data-cfsrc='<?= checkCorpAvaNull($avatar)  ?>' alt='Employer' style='width: 70px; height: 70px;object-fit: cover;' class="rounded-circle ">
                <h3 style="color: #5f5656;"><?= $job ?></h3>
                <ul class="mb-2">
                    <li>
                        <i class='flaticon-send'></i>
                        <?= $type ?>
                    </li>
                    <li><?= $start ?></li>
                </ul>
                <p class="mb-2"><?= $level ?></p>
                <p><?= $progLang ?>
                </p>
                <span class='span-two' style="background-color: transparent;">
                <div class="nav  nav-pills " id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a href="index.php?act=infoCvOnRecr&idrec=<?= $id ?>" class="btn btn-success text-white position-relative p-1" style=" font-size: 13px; " id="v-pills-list-cv-tab" role="tab">
                        <?= ($end === $dateNow) ? 'Đã hết hạn ' : 'Đang tuyển' ?>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            <?php $countCv = (Count_info_CV($id)); 
                                echo $countCv['totalCV'] ;?>
                            <span class="visually-hidden">unread messages</span>
                        </span>
                    </a> 
                </div>
                </span>
                <div class="nav  nav-pills d-flex justify-content-between" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a href="<?= $link_recr ?>" class="nav-link text-white me-3  pt-2 px-3 fw-bold  bg-secondary bg-opacity-75" id="v-pills-info-tab" role="tab" style="font-size: 13px ;padding-bottom: 0;">Thông tin chi tiết </a>
                    <div class="d-flex">
                        <!-- <a href="index.php?act=edit_recr&idEdit=<?= $id ?>" class="nav-link  bg-info text-white me-3 pb--1 px-3 fw-bold " id="v-pills-edit-tab" data-bs-toggle="pill"   aria-selected="false"> -->
                        <a href="<?= $edit_recr ?>" class="nav-link text-white me-3  py-1 px-3 fw-bold" id="v-pills-edit-tab" role="tab" style="background-color: var(--secondary); ">

                            <div class="profile-list">
                                <i class="fa-regular fa-pen-to-square text-white" style="font-size: 15px;"></i>
                            </div>
                        </a>
                        <button onclick="confirmDelete('<?= $delete_recr ?>')" class="btn bg-secondary bg-opacity-75 me-1 text-white"><i class="fa-regular fa-trash-can" style="font-size: 15px;"></i></button>
                    </div>
                </div>

            </div>
    <?php }
    } ?>


</div>