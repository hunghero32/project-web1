<div class="page-title-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="title-item">
                    <h2>Việc làm</h2>
                    <ul>
                        <!-- <li>
                            <img data-cfsrc="assets/img/home-three/title-img-two.png" alt="Image" style="display:none;visibility:hidden;"><noscript><img src="assets/img/home-three/title-img-two.png" alt="Image"></noscript>
                        </li> -->
                        <li>
                            Các công việc đang tuyển
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="job-area-list ptb-100">
    <div class="job-filter-area ">
        <div class="container ">
            <form action="index.php?act=listRecr" method="POST">
                <div class="row">
                    <div class="col-sm-6 col-lg-3 form-group position-relative">
                        <input type="text" class="searchSelect" placeholder="Từ khóa" name="key">

                    </div>
                    <div class="col-sm-6 col-lg-3 form-group position-relative">
                        <input name="progLang" type="text" class="searchSelect" id="searchlevel" placeholder="<?= checkfind('', 'Ngôn ngữ'); ?> &darr;">
                        <div class="dropdown-content w-100" id="dropdownlevel">
                            <div class="dropdown-item">Không chọn</div>
                            <?php foreach ($datafilter as $v) {
                                if ($v['progLang'] !== '') { ?>
                                    <div class="dropdown-item"><?= $v['progLang'] ?></div>
                                <?php } ?>
                            <?php } ?>
                            <div class="dropdown-item">Khác</div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 form-group position-relative">
                        <input name="address" type="text" class="searchSelect" id="searchaddress" placeholder="<?= checkfind('', 'Địa điểm'); ?> &darr;">
                        <div class="dropdown-content " id="dropdownaddress">
                            <div class="dropdown-item">Không chọn</div>
                            <?php foreach ($datafilter as $v) {
                                if ($v['address'] !== '') { ?>
                                    <div class="dropdown-item"><?= $v['address'] ?></div>
                                <?php } ?>
                            <?php } ?>
                            <div class="dropdown-item">Khác</div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 form-group position-relative">
                        <input name="level" type="text" class="searchSelect" id="searchjob" placeholder="<?= checkfind('', 'Vị trí '); ?> &darr;">
                        <div class="dropdown-content" id="dropdownjob">
                            <div class="dropdown-item">Không chọn</div>
                            <?php foreach ($datafilter as $v) {
                                if ($v['level'] !== '') { ?>
                                    <div class="dropdown-item"><?= $v['level'] ?></div>
                                <?php } ?>
                            <?php } ?>
                            <div class="dropdown-item">Khác</div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 form-group position-relative">
                        <input name="exp" type="text" class="searchSelect" id="searchexp" placeholder="<?= checkfind('', 'Kinh nghiệm'); ?> &darr;">
                        <div class="dropdown-content" id="dropdownexp">
                            <div class="dropdown-item">Không chọn</div>
                            <?php foreach ($datafilter as $v) {
                                if ($v['exp'] !== '') { ?>
                                    <div class="dropdown-item"><?= $v['exp'] ?></div>
                                <?php } ?>
                            <?php } ?>
                            <div class="dropdown-item">Khác</div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 form-group position-relative">
                        <input name="typeRecr" type="text" class="searchSelect" id="searchskill" placeholder="<?= checkfind('', 'Hình thức làm việc'); ?> &darr;">
                        <div class="dropdown-content" id="dropdownskill">
                            <div class="dropdown-item">Không chọn</div>
                            <?php foreach ($datafilter as $v) {
                                if ($v['typeRecr'] !== '') { ?>
                                    <div class="dropdown-item"><?= $v['typeRecr'] ?></div>
                                <?php } ?>
                            <?php } ?>
                            <div class="dropdown-item">Khác</div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 form-group position-relative">
                        <input name="salary" type="text" class="searchSelect" id="searchsalary" placeholder="<?= checkfind('', 'Mức lương'); ?> &darr;">
                        <div class="dropdown-content" id="dropdownsalary">
                            <div class="dropdown-item">Không chọn</div>
                            <?php foreach ($datafilter as $v) {
                                if ($v['salary'] !== '') { ?>
                                    <div class="dropdown-item"><?= $v['salary'] ?></div>
                                <?php } ?>
                            <?php } ?>
                            <div class="dropdown-item">Khác</div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3">
                        <button type="submit" name="search_recr" class="btn cmn-btn">
                            Tìm kiếm
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="container">
        <ul class="job-list-item align-items-center">
            <li>
                <a href="#">Kết quả tìm thấy <span><span><?= $total ?></span></span></a>
            </li>
            <li></li>
        </ul>
        <div class="container">
            <div class="row " id="data-container">
                <?php if (empty($val_racr)) {
                    echo "<div class=' my-3'>
                        <div class='employer-item text-center'>
                            Không có việc bạn tìm !
                        </div>
                    </div>";
                } else {
                    foreach ($val_racr as $key) : ?>

                        <?php
                        // var_dump($val_racr);
                        extract($key);
                        ?>
                        <?php $link_recr = "index.php?act=info_recr&id=" . $id; ?>
                        <div class='col-lg-6  mx-0'>
                            <div class="employer-item my-3 ">
                                <img data-cfsrc='<?= checkCorpAvaNull($avatar)  ?>' alt='Employer' style='width: 70px; height: 70px;object-fit: cover;' class="rounded-circle ">
                                <h3><a href='<?= $link_recr ?>' class="text-dark"><?= $job ?></a></h3>
                                <ul>
                                    <li>
                                        <i class='flaticon-send'></i>
                                        <?= $address ?>
                                    </li>
                                    <li><?= $start ?></li>
                                </ul>
                                <p><?= $name ?>
                                </p>
                                <span class="span-one" style="background-color: var(--secondary);"><a href="<?= $link_recr ?>" class="text-white">Ứng tuyển</a></span>
                                <span class='span-two'><?= $type ?> </span>
                            </div>
                        </div>
                <?php endforeach;
                } ?>
            </div>


            <!-- <div class="pagination-area">
                    <ul>
                        <li>
                            <a href="#">Prev</a>
                        </li>
                        <li>
                            <a href="#">1</a>
                        </li>
                        <li>
                            <a href="#">2</a>
                        </li>
                        <li>
                            <a href="#">3</a>
                        </li>
                        <li>
                            <a href="#">Next</a>
                        </li>
                    </ul>
                </div>-->
        </div>
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
</div>