
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
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <ul class="job-list-item align-items-center">
                    <li>
                        <a href="#">Kết quả tìm thấy <span><span><?= $total ?></span></span></a>
                    </li>
                    <li></li>
                </ul>

                <div id="data-container">
                    <?php foreach ($val_racr as $key) : ?>

                        <?php
                        // var_dump($val_racr);
                        extract($key);
                        ?>
                        <?php $link_recr = "index.php?act=info_recr&id=" . $id; ?>
                        <div class='employer-item '>

                        <img  data-cfsrc='<?= checkCorpAvaNull($avatar)  ?>' alt='Employer' style='width: 70px; height: 70px;object-fit: cover;' class="rounded-circle ">
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
                    <?php endforeach ?>
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
            <div class="col-lg-4">
                <form action="index.php?act=listRecr" method="post">
                    <div class="job-list-right">
                        <div class="job-list-all">

                            <div class="search mb-4">
                                <h3>Tìm kiếm</h3>
                                <div class="d-flex ">
                                    <input type="text" class="form-control" placeholder="Từ khóa" name="key">
                                    <button type="submit" name="search_recr" class="btn " style="background-color: var(--secondary);">
                                        <i class="flaticon-send fw-bold" style="color : #fff ;"></i>
                                    </button>
                                </div>
                            </div>
                            <div class=" position-relative cmn-padding">
                                <input name="progLang" type="text" class="form-control w-100 " id="searchlevel" placeholder="<?= checkfind('', 'Ngôn ngữ'); ?> &darr;">
                                <div class="dropdown-content w-100" id="dropdownlevel">
                                    <div class="dropdown-item">Không chọn</div>
                                        <?php foreach ($datafilter as $cv) {
                                            extract($cv);
                                            if ($progLang !== '') { ?>
                                                <div class="dropdown-item"><?= $progLang ?></div>
                                            <?php } ?>
                                        <?php } ?>
                                    <div class="dropdown-item">Khác</div>
                                </div>
                            </div>
                            <div class="location-list cmn-padding">
                                <h3>Địa điểm</h3>

                                <ul class="job-cmn-cat">
                                    <?php foreach ($datafilter as $r) {
                                        if (isset($r['address']) && ($r['address'] !== "")) { ?>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="address" value="<?= $r['address'] ?>" id="defaultCheck10">
                                                    <label class="form-check-label" for="defaultCheck10">
                                                        <?= $r['address'] ?>
                                                    </label>
                                                </div>
                                            </li>
                                    <?php }
                                    } ?>

                                </ul>

                            </div>
                            <div class="job-type cmn-padding">
                                <h3>Loại công việc</h3>

                                <div class="row job-cmn-cat">

                                    <?php foreach ($datafilter as $r) {
                                        if (isset($r['typeRecr']) && ($r['typeRecr'] !== "")) { ?>

                                            <div class="col-lg-6 form-check mt-3">
                                                <input class="form-check-input" type="checkbox" name="typeRecr" value="<?= $r['typeRecr'] ?>" id="defaultCheck16">
                                                <label class="form-check-label" for="defaultCheck16">
                                                    <?= $r['typeRecr'] ?>
                                                </label>
                                            </div>

                                    <?php }
                                    } ?>
                                </div>

                            </div>
                            
                            <div class="salary cmn-padding">
                                <h3>Mức lương</h3>
                                <div class="row job-cmn-cat">

                                    <?php foreach ($datafilter as $r) {
                                        if (isset($r['salary']) && ($r['salary'] !== "")) { ?>

                                            <div class="col-lg-6 form-check mt-3">
                                                <input class="form-check-input" type="checkbox" name="salary" value="<?= $r['salary'] ?>" id="formControlRangeTwo">
                                                <label class="form-check-label" for="formControlRangeTwo">
                                                    <?= $r['salary'] ?>
                                                </label>
                                            </div>

                                    <?php }
                                    } ?>
                                </div>

                            </div>
                            <div class="Level cmn-padding">
                                <h3>Vị trí làm việc </h3>
                                <div class="row job-cmn-cat">
                                    <?php foreach ($datafilter as $r) {
                                        if (isset($r['level']) && ($r['level'] !== "")) { ?>

                                            <div class="col-lg-6 form-check mt-3">
                                                <input class="form-check-input" type="checkbox" name="level" value="<?= $r['level'] ?>" id="level">
                                                <label class="form-check-label" for="level">
                                                    <?= $r['level'] ?>
                                                </label>
                                            </div>

                                    <?php }
                                    } ?>
                                </div>
                            </div>
                            <div class="employer cmn-padding">
                                <h3>Yêu cầu kinh nghiệm</h3>
                                <div class="row job-cmn-cat">
                                    <?php foreach ($datafilter as $r) {
                                        if (isset($r['exp']) && ($r['exp'] !== "")) { ?>

                                            <div class="col-lg-6 form-check mt-3">
                                                <input class="form-check-input" type="checkbox" name="exp" value="<?= $r['exp'] ?>" id="formexp">
                                                <label class="form-check-label" for="formexp">
                                                    <?= $r['exp'] ?>
                                                </label>
                                            </div>

                                    <?php }
                                    } ?>
                                </div>
                            </div>
                            <!-- <div class="date cmn-padding">
                                <h3>Thời gian đăng tuyển</h3>
                                <div class="row job-cmn-cat">
                                    <?php foreach ($datafilter as $r) {
                                        if (isset($r['date']) && ($r['date'] !== "")) { ?>

                                            <div class="col-lg-6 form-check mt-3">
                                                <input class="form-check-input" type="checkbox" name="date" value="<?= $r['date'] ?>" id="formdate1">
                                                <label class="form-check-label" for="formdate1">
                                                    <?= $r['date'] ?>
                                                </label>
                                            </div>

                                    <?php }
                                    } ?>
                                </div>
                            </div> -->
                            <div class="date cmn-padding d-flex justify-content-center">
                                <button type="submit" name="search_recr" class="btn text-white fw-bold px-5 " style="background-color: var(--secondary);">
                                    Tìm kiếm
                                </button>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>