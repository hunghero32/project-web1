<?php extract($total_recr) ?>
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
                    <?php foreach ($valu_racr as $key) : ?>

                        <?php 
                        // var_dump($valu_racr);
                            extract($key); 
                             ?>
                        <?php $link_recr = "index.php?act=info_recr&id=" . $id; ?>
                        <div class='employer-item '>
                            <a href='<?= $link_recr ?>'>
                                <img data-cfsrc='assets/img/home-one/job1.png' alt='Employer' style='display:none;visibility:hidden;'><noscript><img src='assets/img/home-one/job1.png' alt='Employer'></noscript>
                                <h3><?= $title ?></h3>
                                <ul>
                                    <li>
                                        <i class='flaticon-send'></i>
                                        <?= $address ?>
                                    </li>
                                    <li><?= $date ?></li>
                                </ul>
                                <p><?= $major ?>
                                </p>
                                <span class='span-one'>Ứng tuyển </span>
                                <span class='span-two'><?=$key['type'] == 2 ? "FULL TIME" : "PART TIME" ?> </span>
                            </a>
                        </div>
                    <?php endforeach ?>
                </div>

                
                <!-- <div class="pagination-area">
                    <ul class="pagination"> -->
                        <!-- <li><a href="#" id="prev">Prev</a></li> -->

                        <?php
                        //for ($i = 1; $i <= $totalPages; $i++) {
                            //echo "<li><a href='#' class='page' data-page='$i'>$i</a></li>";
                        //}
                        ?>

                        <!-- <li><a href="#" id="next">Next</a></li>
                    </ul>
                </div> -->
                <div class="pagination-area">
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
                </div>
            </div>
            <div class="col-lg-4">
                <!-- <form action=""> -->
                <div class="job-list-right">
                    <div class="job-list-all">

                        <div class="search">
                            <h3>Tìm kiếm</h3>
                            <form action="index.php?act=listRecr" method="post">
                                <input type="text" class="form-control" placeholder="Từ khóa" name="key">
                                <button type="submit" name="search_recr" class="btn">
                                    <i class="flaticon-send"></i>
                                </button>
                            </form>
                        </div>
                        <div class="location-list cmn-padding">
                            <h3>Địa điểm</h3>
                            <form action="index.php?act=listRecr" method="post">
                                <ul class="job-cmn-cat">
                                    <?php foreach ($totall_address as $r) : ?>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="address" value="<?= $r['address'] ?>" id="defaultCheck10">
                                                <label class="form-check-label" for="defaultCheck10">
                                                    <?= $r['address'] ?> (<?= $r['sl_address'] ?>)
                                                </label>
                                            </div>
                                        </li>
                                    <?php endforeach ?>
                                    <li>
                                        <button type="submit" name="address_recr" class="btn btn-info px-4 text-white" style="font-size: 12px;">
                                            LỌC
                                        </button>
                                    </li>
                                </ul>
                            </form>
                        </div>
                        <div class="job-type cmn-padding">
                            <h3>Loại công việc</h3>
                            <form action="index.php?act=listRecr" method="post">
                                <ul class="job-cmn-cat">
                                    <?php foreach ($total_type as $r) : ?>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="address" value="<?=$r['type'] ?>" id="defaultCheck16">
                                                <label class="form-check-label" for="defaultCheck16">
                                                    <?=$r['type'] == 2 ? "Full time" : "Part time" ?> (<?=$r['sl_type'] ?>)
                                                </label>
                                            </div>
                                        </li>
                                    <?php endforeach ?>
                                    <li>
                                        <button type="submit" name="type_recr" class="btn btn-info px-4 text-white" style="font-size: 12px;">
                                            LỌC
                                        </button>
                                    </li>
                                </ul>
                            </form>
                        </div>
                        <!-- <div class="job-type cmn-padding">
                            <h3>Ngôn ngữ</h3>
                            <form>
                                <ul class="job-cmn-cat">
                                    <li>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value id="defaultCheck16">
                                            <label class="form-check-label" for="defaultCheck16">
                                                Temporary (2)
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value id="defaultCheck17">
                                            <label class="form-check-label" for="defaultCheck17">
                                                Remote (2)
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value id="defaultCheck18">
                                            <label class="form-check-label" for="defaultCheck18">
                                                Part Time (2)
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value id="defaultCheck19">
                                            <label class="form-check-label" for="defaultCheck19">
                                                Internship (1)
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value id="defaultCheck20">
                                            <label class="form-check-label" for="defaultCheck20">
                                                Full Time (13)
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value id="defaultCheck21">
                                            <label class="form-check-label" for="defaultCheck21">
                                                Freelancer (3)
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value id="defaultCheck22">
                                            <label class="form-check-label" for="defaultCheck22">
                                                Contract (0)
                                            </label>
                                        </div>
                                    </li>
                                </ul>
                            </form>
                        </div> -->
                        <div class="salary cmn-padding">
                            <h3>Mức lương</h3>
                            <form action="index.php?act=listRecr" method="post"> 
                                <div class="form-group">
                                    <label class="range" id="formControlRangeValu" for="formControlRangeTwo">10</label>
                                    <input type="range" class="form-control-range" id="formControlRangeTwo" min='1' max='100' step="1">
                                </div>
                                <button class="btn btn-info px-4 mt-2 text-white" style="font-size: 12px;">
                                            LỌC
                                        </button>
                            </form>
                        </div>
                        <!-- <div class="employer cmn-padding">
                            <h3>Yêu cầu kinh nghiệm</h3>
                            <form>
                                <ul class="job-cmn-cat">
                                    <li>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value id="defaultCheck35">
                                            <label class="form-check-label" for="defaultCheck35">
                                                Microsoft (1)
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value id="defaultCheck36">
                                            <label class="form-check-label" for="defaultCheck36">
                                                3S Software (3)
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value id="defaultCheck37">
                                            <label class="form-check-label" for="defaultCheck37">
                                                Telegram (6)
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value id="defaultCheck38">
                                            <label class="form-check-label" for="defaultCheck38">
                                                Al Jazeera (2)
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value id="defaultCheck39">
                                            <label class="form-check-label" for="defaultCheck39">
                                                Computer Factor (13)
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value id="defaultCheck40">
                                            <label class="form-check-label" for="defaultCheck40">
                                                It Training 4U (7)
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value id="defaultCheck41">
                                            <label class="form-check-label" for="defaultCheck41">
                                                Skype (1)
                                            </label>
                                        </div>
                                    </li>
                                </ul>
                            </form>
                        </div> -->
                        <div class="date cmn-padding">
                            <h3>Thời gian đăng tuyển</h3>
                            <form>
                                <div class="job-cmn-cat flex-divide">
                                    <ul class="left">
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value id="defaultCheck28">
                                                <label class="form-check-label" for="defaultCheck28">
                                                    Last 30 Days
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value id="defaultCheck29">
                                                <label class="form-check-label" for="defaultCheck29">
                                                    Last 14 Days
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value id="defaultCheck30">
                                                <label class="form-check-label" for="defaultCheck30">
                                                    Last 7 Days
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value id="defaultCheck31">
                                                <label class="form-check-label" for="defaultCheck31">
                                                    All
                                                </label>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul class="right">
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value id="defaultCheck32">
                                                <label class="form-check-label" for="defaultCheck32">
                                                    Last 24 Hours
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value id="defaultCheck33">
                                                <label class="form-check-label" for="defaultCheck33">
                                                    Last 14 Days
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value id="defaultCheck34">
                                                <label class="form-check-label" for="defaultCheck34">
                                                    Last Hour
                                                </label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
                <!-- </form> -->
            </div>
        </div>
    </div>
</div>
