<?php if (isset($_SESSION['updatedCorp'])) {
    if (isset($_SESSION['same'])) {
        unset($_SESSION['same']);
    }
} ?>
<div class="tab-pane fade <?= (!isset($_GET['id']) && !isset($_GET['idEdit']) && !isset($thongbao) && !isset($_GET['idInfo']) && !isset($_GET['idrec'])) ? 'show active' : '' ?>" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
    <form method="POST" action="index.php?act=updateInfoCorp" enctype="multipart/form-data" style="<?= isset($_SESSION['same']) ? 'display: block !important' : '' ?>" id="editInfoCorp" class="d-none job-details-area employer-details-area ptb-100 form-item">
        <div class="boxbtn d-flex w-50 justify-content-end gap-3">
            <span class="cancer border-0" id="cancerEditInfoCorp">Hủy <i class="fa-solid fa-xmark"></i></span>
            <button name="updateInfoCorp" id="updateInfoCorp" class="save border-0" type="submit">Lưu <i class="fa-solid fa-cloud-arrow-up"></i></button>
        </div>
        <div class="container">
            <div class="row">
                <div class="details-item">
                    <div class="details-inner mb-4">
                        <h2>Cập nhật thông tin</h2>
                    </div>
                    <div class="details-inner">
                        <ul class="mb-2 mb-sm-0 w-50">
                            <li><strong style="width: 10%">* Tên công ty </strong></li>
                            <!-- name -->
                            <li>
                                <input type="hidden" name="id" value="<?= $iduser ?>">
                                <input name="name" type="text" class="w-100 searchSelect" pattern=".{0,20}" maxlength="20" title="Tối đa 20 kí tự" value="<?= $name ?>" placeholder="<?= checknull($name) ?>" required>
                            </li>
                            <!--  -->
                        </ul>
                    </div>
                    <div class="details-inner mb-4 ">
                        <ul class="">
                            <!-- avatar -->
                            <li class="position-relative w-50">
                                <strong class="mb-2" for="">* Địa điểm</strong>
                                <!-- <?= $corp['address'] ?> -->
                                <input name="address" type="text" class="searchSelect" id="searchage" value="<?= $corp['address'] !== '' ? $corp['address'] : '' ?>" placeholder="<?= checknull($corp['address']) ?>" pattern=".*\S+.*" title='Chọn hoặc nhập địa chỉ' required>
                                <div class="dropdown-content w-100" id="dropdownage">
                                    <div class="dropdown-item">Không chọn</div>
                                    <?php foreach ($datafilter as $cv) {
                                        extract($cv);
                                        if ($address !== '') { ?>
                                            <div class="dropdown-item"><?= $address ?></div>
                                        <?php } ?>
                                    <?php } ?>
                                    <div class="dropdown-item">Khác</div>
                                </div>
                            </li>
                            <!--  -->
                        </ul>
                    </div>
                    <div class="details-inner mb-4">
                        <ul class="">
                            <!-- avatar -->
                            <li class="d-flex justify-content-start flex-column w-100">
                                <strong class="mb-2" for="">* Ảnh đại diện [ <span id="nameAvatar"><?= checknull($avatar); ?></span> ]</strong>
                                <div class="d-flex justify-content-start">
                                    <input name="avatar" class="w-25 searchSelect mb-2 me-2 file-img" type="file" title="Vui lòng nhập đúng định dạng" accept=".jpg, .jpeg, .png, .jfif, .gif" class="w-25">
                                    <?php if ($avatar !== '') { ?>
                                        <span class="cancerThumb border-0 m-0 ps-2 pe-2" id="cancerAvatar"><i class="p-0 m-0 text-white fa-regular fa-trash-can"></i></span>
                                        <input type="hidden" name="avatar" id="valueAvatar" value="<?= $avatar ?>">
                                    <?php } ?>
                                </div>
                            </li>
                            <!--  -->
                        </ul>
                    </div>
                    <div class="details-inner">
                        <h5>Giới thiệu công ty <?= isset($intro) && $intro != ''  ? '' : '[ Chưa cập nhật ]'; ?></h5>
                        <!-- introduce  -->
                        <textarea name="introduce" class="w-100 p-3 rounded-3" style="height: 250px;outline: none" maxlength="1000" required><?= checknull($introduce); ?></textarea>
                        <!--  -->
                    </div>
                    <div class="details-inner d-flex flex-column flex-sm-row justify-content-between">
                        <ul class="mb-2 mb-sm-0 w-25">
                            <li><strong style="width: 10%">* Năm thành lập </strong></li>
                            <li class="position-relative">
                                <!-- activeYear -->
                                <input name="activeYear" type="text" class="searchSelect" id="searchjob" min='1980' max='2023' maxlength='4' value="<?= $activeYear !== '' ? $activeYear : '' ?>" placeholder="<?= checknull($activeYear); ?>">
                                <div class="dropdown-content w-100" id="dropdownjob">
                                    <?php for ($i = 1980; $i <= 2023; $i++) { ?>
                                        <div class="dropdown-item"><?= $i ?></div>
                                    <?php } ?>
                                </div>
                            </li>
                            <!--  -->
                        </ul>
                        <ul class="mb-2 mb-sm-0 w-25">
                            <li><strong style="width: 10%">* Quy mô công ty </strong></li>
                            <!-- size -->
                            <li>
                                <input name="size" type="number" class="w-100 searchSelect" min="50" max="50000" value="<?= $size !== '' ? $size : '' ?>" placeholder="<?= checknull($size) ?>" required>
                            </li>
                            <!--  -->
                        </ul>
                        <ul class="mb-2 mb-sm-0 w-25">
                            <li><strong style="width: 10%">* Thời gian làm việc </strong></li>
                            <!-- workingday -->
                            <li class="position-relative">
                                <input name="workingday" type="text" class="searchSelect" id="searchlevel" value="<?= $workingday !== '' ? $workingday : '' ?>" placeholder="<?= checknull($workingday); ?>" required>
                                <div class="dropdown-content w-100 p-0" id="dropdownlevel">
                                    <div class="dropdown-item">Thứ 2 - Thứ 6</div>
                                    <div class="dropdown-item">Cả tuần ( nghỉ 1 ngày )</div>
                                    <div class="dropdown-item">Linh động thời gian</div>
                                    <div class="dropdown-item">Thứ 2 - Thứ 6 [ OT ]</div>
                                    <div class="dropdown-item">Cả tuần ( nghỉ 1 ngày ) [ OT ]</div>
                                    <div class="dropdown-item">Linh động thời gian [ OT ]</div>
                                </div>
                            </li>
                            <!--  -->
                        </ul>
                    </div>
                    <div class="details-inner d-flex flex-column flex-sm-row justify-content-between">
                        <ul class="mb-2 mb-sm-0 w-25">
                            <li><strong style="width: 10%">* Email </strong></li>
                            <li>
                                <!-- email  -->
                                <input name="email" type="email" class="w-100 searchSelect" value="<?= $email !== '' ? $email : '' ?>" placeholder="<?= checknull($email) ?>" title="Vui lòng nhập đúng định dạng email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" required>
                                <!--  -->
                            </li>
                        </ul>
                        <ul class="mb-2 mb-sm-0 w-25">
                            <li><strong style="width: 10%">* Số điện thoại </strong></li>
                            <li>
                                <!-- phone -->
                                <input name="phone" class="w-100 searchSelect" type="tel" value="<?= $phone !== '' ? $phone : '' ?>" placeholder="<?= checknull($phone) ?>" pattern="[0-9]{1,13}" title="Vui lòng nhập đúng dịnh dạng số điện thoại" required>
                                <!--  -->
                            </li>
                        </ul>
                        <ul class="mb-2 mb-sm-0 w-25">
                            <li><strong style="width: 10%">* Website công ty </strong></li>
                            <li>
                                <!--link -->
                                <input name="link" type="text" class="w-100 searchSelect" pattern=".{0,35}" maxlength="35" title="Tối đa 35 kí tự" value="<?= $link !== '' ? $link : ''; ?>" placeholder="<?= checknull($link) ?>">
                                <!--  -->
                            </li>
                        </ul>
                    </div>
                    <hr>
                    <div class="details-inner">
                        <ul>
                            <li><i class="fa-solid fa-star-of-life"></i> <strong style="width: 10%"> Quyền lợi </strong></li>
                            <li>
                                <!-- benefits -->
                                <textarea name="benefits" class="w-100 p-3 rounded-3" style="height: 200px;outline: none" maxlength="500" required><?= checknull($benefits) ?></textarea>
                                <!--  -->
                            </li>
                        </ul>
                    </div>
                    <hr class="opacity-0">
                    <hr>
                    <?= !empty($gallery) ? '<h5>Ảnh giới thiệu</h5>' : '<h5>Chưa cập nhật ảnh giới thiệu <i class="fa-solid fa-face-sad-tear"></i></h5>' ?>
                    <div class="details-inner">
                        <!-- Gallery -->
                        <div class="job-details-slider owl-theme owl-carousel">
                            <?php if (!empty($gallery)) { ?>
                                <?php foreach ($gallery as $e) { ?>
                                    <div style="width: 100%; height: 340px" class="slider-item rounded-3 overflow-hidden d-flex align-items-center">
                                        <img data-cfsrc="<?= $img_path . $e ?>" alt="<?= $img_path . $e ?>" style="display:none;visibility:hidden;">
                                        <noscript><img class="" src="<?= $img_path . $e ?>" alt="<?= $img_path . $e ?>"></noscript>
                                    </div>
                                <?php } ?>
                            <?php } ?>
                        </div>
                        <!-- Cập nhật các ảnh tồn tại -->
                        <ul class="gallery">
                            <?php
                            $thumbs = array($thumbnail1, $thumbnail2, $thumbnail3, $thumbnail4, $thumbnail5);
                            $count = 0;
                            foreach ($thumbs as $key) {
                                $count++;
                                if ($key !== '') { ?>
                                    <li class="d-flex justify-content-start flex-column w-100">
                                        <label class="mb-2" for="">Ảnh <?= $count; ?> [<span id="nameThumb<?= $count ?>"><?= $key ?></span>]</label>
                                        <div class="d-flex justify-content-start">
                                            <input name="thumb<?= $count ?>" class="w-25 searchSelect mb-2 me-2 file-img" type="file" accept=".jpg, .jpeg, .png, .jfif, .gif" class="w-25"><span class="cancerThumb border-0 m-0 ps-2 pe-2" id="cancerThumb<?= $count ?>"><i class="p-0 m-0 text-white fa-regular fa-trash-can"></i></span>
                                        </div>
                                        <input name="thumb<?= $count ?>" id="valueThumb<?= $count ?>" type="hidden" value="<?= $key ?>" readonly>
                                    </li>
                                <?php } else { ?>
                                    <li>
                                        <label class="mb-2" for="">Ảnh <?= $count; ?> [ Chưa cập nhật ]</label>
                                        <input name="thumb<?= $count ?>" class="w-25 searchSelect mb-2 file-img" type="file" accept=".jpg, .jpeg, .png, .jfif, .gif" class="w-25">
                                    </li>
                                <?php } ?>
                            <?php } ?>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </form>
    <div id="infoCorp" style="<?= isset($_SESSION['same']) ? 'display: none !important' : '' ?>" class="job-details-area employer-details-area ptb-100 form-item">
        <span class="edit" id="editBtnInfoCorp">Chỉnh sửa <i class="fa-solid fa-pen"></i></span>
        <div class="container">
            <div class="row">
                <div class="details-inner mb-4">
                    <h3>Giới Thiệu Công Ty</h3>
                </div>
                <div class="details-item">
                    <div class="details-inner">
                        <p style="text-align: justify">
                            <?= empty($intro) ? 'Chưa cập nhật giới thiệu' : $intro; ?>
                        </p>
                    </div>
                    <div class="details-inner d-flex flex-column flex-sm-row justify-content-between">
                        <ul class="w-25">
                            <li><strong style="width: 10%">* Năm thành lập </strong></li>
                            <li><i class="fa-solid fa-calendar me-2"></i><?= checknull($activeYear) > 0 ? checknull($activeYear) : 'Chưa cập nhật'; ?></li>
                        </ul>
                        <ul class="w-25">
                            <li><strong style="width: 10%">* Quy mô công ty </strong></li>
                            <li><i class="fa-solid fa-users me-2"></i><?= checknull($size) > 0 ? checknull($size) . ' nhân viên' : 'Chưa cập nhật'; ?></li>
                        </ul>
                        <ul class="w-25">
                            <li><strong style="width: 10%">* Thời gian làm việc </strong></li>
                            <li><i class="fa-solid fa-calendar-day me-2"></i><?= checknull($workingday); ?></li>
                        </ul>
                    </div>
                    <div class="details-inner d-flex flex-column flex-sm-row justify-content-between">
                        <ul class="w-25">
                            <li><strong style="width: 10%">* Email </strong></li>
                            <li><i class="fa-solid fa-calendar me-2"></i><?= checknull($email) ?></li>
                        </ul>
                        <ul class="w-25">
                            <li><strong style="width: 10%">* Số điện thoại </strong></li>
                            <li><i class="fa-solid fa-users me-2"></i><?= checknull($phone); ?></li>
                        </ul>
                        <ul class="w-25">
                            <li><strong style="width: 10%">* Website công ty </strong></li>
                            <li><i class="fa-solid fa-users me-2"></i><?= checknull($link); ?></li>
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
        </div>
    </div>
</div>