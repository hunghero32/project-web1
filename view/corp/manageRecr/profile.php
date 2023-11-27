<div class="tab-pane fade <?= (!isset($_GET['id']) && !isset($_GET['idEdit'])) ? 'show active' : '' ?>" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
    <form id="editInfoCorp" class="d-none job-details-area employer-details-area ptb-100 form-item">
        <div class="boxbtn d-flex w-50 justify-content-end gap-3">
            <button class="cancer border-0" id="cancerEditInfoCorp">Hủy <i class="fa-solid fa-xmark"></i></button>
            <button class="save border-0" type="submit">Lưu <i class="fa-solid fa-cloud-arrow-up"></i></button>
        </div>
        <div class="container">
            <div class="row">
                <div class="">
                    <div class="details-inner mb-4">
                        <h3>Giới Thiệu Công Ty</h3>
                    </div>
                    <div class="details-item">
                        <div class="details-inner">
                            <!-- Introduce  -->
                            <textarea name="introduce" class="w-100 p-3 rounded-3" style="height: 200px;outline: none" required><?= checknull($intro) ?></textarea>
                            <!--  -->
                        </div>
                        <div class="details-inner d-flex flex-column flex-sm-row justify-content-between">
                            <ul class="mb-2 mb-sm-0 w-25">
                                <li><strong style="width: 10%">* Năm thành lập </strong></li>
                                <li class="position-relative">
                                    <!-- activeYear -->
                                    <input name="activeYear" type="number" class="searchSelect" id="searchage" min='1980' max='2023' placeholder="<?= checknull($activeYear); ?>">
                                    <div class="dropdown-content w-100" id="dropdownage">
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
                                    <input name="size" type="number" class="w-100 searchSelect" min="1" max="50000" value="<?= $size ?>" placeholder="<?= checknull($size) ?>" required>
                                </li>
                                <!--  -->
                            </ul>
                            <ul class="mb-2 mb-sm-0 w-25">
                                <li><strong style="width: 10%">* Thời gian làm việc </strong></li>
                                <!-- workingday -->
                                <li class="position-relative">
                                    <input name="workingday" type="text" class="searchSelect" id="searchlevel" value="<?= $workingday ?>" placeholder="<?= checknull($workingday); ?>" required>
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
                                    <input name="email" type="email" class="w-100 searchSelect" value="<?= $email ?>" placeholder="<?= checknull($email) ?>" title="Vui lòng nhập đúng định dạng email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" required>
                                    <!--  -->
                                </li>
                            </ul>
                            <ul class="mb-2 mb-sm-0 w-25">
                                <li><strong style="width: 10%">* Số điện thoại </strong></li>
                                <li>
                                    <!-- phone -->
                                    <input name="phone" class="w-100 searchSelect" type="tel" value="<?= $phone ?>" placeholder="<?= checknull($phone) ?>" pattern="[0-9]{1,13}" title="Vui lòng nhập đúng dịnh dạng số điện thoại" required>
                                    <!--  -->
                                </li>
                            </ul>
                            <ul class="mb-2 mb-sm-0 w-25"></ul>
                        </div>
                        <hr>
                        <div class="details-inner">
                            <ul>
                                <li><i class="fa-solid fa-star-of-life"></i> <strong style="width: 10%"> Quyền lợi </strong></li>
                                <li>
                                    <!-- benefits -->
                                    <textarea name="benefits" class="w-100 p-3 rounded-3" style="height: 150px;outline: none" required><?= checknull($benefits) ?></textarea>
                                    <!--  -->
                                </li>
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
    </form>
    <div id="infoCorp" class=" job-details-area employer-details-area ptb-100 form-item">
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
                        <!-- </div>
                    <div class="details-inner d-flex flex-column flex-sm-row justify-content-between justify-content-lg-start gap-0 gap-sm-5 pe-2"> -->
                        <ul class="mb-2 mb-sm-0">
                            <li><strong style="width: 10%">* Email </strong></li>
                            <li><i class="fa-solid fa-calendar me-2"></i><?= checknull($email) ?></li>
                        </ul>
                        <ul class="mb-2 mb-sm-0">
                            <li><strong style="width: 10%">* Số điện thoại </strong></li>
                            <li><i class="fa-solid fa-users me-2"></i><?= checknull($phone); ?></li>
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