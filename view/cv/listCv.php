<div class="page-title-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="title-item">
                    <h2>Ứng viên</h2>
                    <ul>
                        <li>
                            Ứng viên / Hồ sơ ứng viên
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="job-filter-area pt-100">
    <div class="container ">
        <form action="index.php?act=listCv" method="POST">
            <div class="row">
                <div class="col-sm-6 col-lg-3 form-group position-relative">
                    <input name="level" type="text" class="searchSelect" id="searchlevel" placeholder="<?= checkfind($level, 'Cấp bậc'); ?> &darr;">
                    <div class="dropdown-content" id="dropdownlevel">
                        <div class="dropdown-item">Không chọn</div>
                        <?php foreach ($datafilter as $cv) {
                            extract($cv);
                            if ($level !== '') { ?>
                                <div class="dropdown-item"><?= $level ?></div>
                            <?php } ?>
                        <?php } ?>
                        <div class="dropdown-item">Khác</div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 form-group position-relative">
                    <input name="age" type="text" class="searchSelect" id="searchage" placeholder="<?= checkfind($age, 'Độ tuổi'); ?> &darr;">
                    <div class="dropdown-content" id="dropdownage">
                        <div class="dropdown-item">Không chọn</div>
                        <?php foreach ($datafilter as $cv) {
                            extract($cv);
                            if ($age !== '') { ?>
                                <div class="dropdown-item"><?= $age ?></div>
                            <?php } ?>
                        <?php } ?>
                        <div class="dropdown-item">Khác</div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 form-group position-relative">
                    <input name="address" type="text" class="searchSelect" id="searchaddress" placeholder="<?= checkfind($address, 'Địa điểm'); ?> &darr;">
                    <div class="dropdown-content" id="dropdownaddress">
                        <div class="dropdown-item">Không chọn</div>
                        <?php foreach ($datafilter as $cv) {
                            extract($cv);
                            if ($address !== '') { ?>
                                <div class="dropdown-item"><?= $address ?></div>
                            <?php } ?>
                        <?php } ?>
                        <div class="dropdown-item">Khác</div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 form-group position-relative">
                    <input name="major" type="text" class="searchSelect" id="searchjob" placeholder="<?= checkfind($major, 'Chuyên ngành'); ?> &darr;">
                    <div class="dropdown-content" id="dropdownjob">
                        <div class="dropdown-item">Không chọn</div>
                        <?php foreach ($datafilter as $cv) {
                            extract($cv);
                            if ($job !== '') { ?>
                                <div class="dropdown-item"><?= $job ?></div>
                            <?php } ?>
                        <?php } ?>
                        <div class="dropdown-item">Khác</div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 form-group position-relative">
                    <input name="exp" type="text" class="searchSelect" id="searchexp" placeholder="<?= checkfind($exp, 'Kinh nghiệm'); ?> &darr;">
                    <div class="dropdown-content" id="dropdownexp">
                        <div class="dropdown-item">Không chọn</div>
                        <?php foreach ($datafilter as $cv) {
                            extract($cv);
                            if ($exp !== '') { ?>
                                <div class="dropdown-item"><?= $exp ?></div>
                            <?php } ?>
                        <?php } ?>
                        <div class="dropdown-item">Khác</div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 form-group position-relative">
                    <input name="skill" type="text" class="searchSelect" id="searchskill" placeholder="<?= checkfind($skill, 'Ngôn ngữ'); ?> &darr;">
                    <div class="dropdown-content" id="dropdownskill">
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
                <div class="col-sm-6 col-lg-3 form-group position-relative">
                    <input name="salary" type="text" class="searchSelect" id="searchsalary" placeholder="<?= checkfind($salary, 'Mức lương'); ?> &darr;">
                    <div class="dropdown-content" id="dropdownsalary">
                        <div class="dropdown-item">Không chọn</div>
                        <?php foreach ($datafilter as $cv) {
                            extract($cv);
                            if ($salary !== '') { ?>
                                <div class="dropdown-item"><?= $salary ?></div>
                            <?php } ?>
                        <?php } ?>
                        <div class="dropdown-item">Khác</div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <button name="findCv" type="submit" class="btn cmn-btn">
                        Tìm kiếm
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>


<div class="job-showing-area">
    <div class="container">
        <?php if (isset($_POST['findCv'])) {
            unset($_SESSION['findCv']) ?>
            <h4>Kết quả tìm thấy (<?= count($list_cv) ?>)</h4>
        <?php } ?>
    </div>
</div>
<div class="candidate-area pb-100">
    <div class="container">
        <div class="row">
            <?php if (count($list_cv) == 0) { ?>
                <div class="col-lg-12 mt-3">
                    <div class="employer-item text-center">
                        Không có dữ liệu tìm thấy !
                    </div>
                </div>
                <?php } else {
                foreach ($list_cv as $cv) {
                    extract($cv) ?>
                    <div class="col-lg-6">
                        <div class="candidate-item two">
                            <div class="left">
                                <h3>
                                    <a href="index.php?act=infoCv&id=<?= $iduser ?>"><?= $name ?></a>
                                </h3>
                                <span><?= $major ?></span>
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
                            <img data-cfsrc="<?= checkUserAvaNull($avatar) ?>" alt="<?= $name ?>" style="display:none;visibility:hidden;">
                            <noscript><img src="<?= checkUserAvaNull($avatar) ?>" alt="Candidate"></noscript>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
    </div>
</div>