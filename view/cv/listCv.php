<div class="page-title-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="title-item">
                    <h2>Candidates</h2>
                    <ul>
                        <li>
                            <img data-cfsrc="assets/img/home-three/title-img-two.png" alt="Image" style="display:none;visibility:hidden;"><noscript><img src="assets/img/home-three/title-img-two.png" alt="Image"></noscript>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <span>/</span>
                        </li>
                        <li>
                            Candidates
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="job-filter-area pt-100">
    <div class="container">
        <form action="index.php?act=listCv" method="POST">
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="form-group">
                        <select name="level">
                            <option value="" selected>Cấp bậc</option>
                            <?php foreach ($datafilter as $cv) {
                                extract($cv);
                                if ($level !== '') { ?>
                                    <option value="<?= $level ?>" <?= isset($_POST['level']) && $_POST['level'] == $level ? 'selected' : '' ?>>
                                        <?= $level ?>
                                    </option>
                                <?php } ?>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="form-group">
                        <select name="age">
                            <option value="" selected>Độ Tuổi</option>
                            <?php foreach ($datafilter as $cv) {
                                extract($cv);
                                if ($age !== '') { ?>
                                    <option value="<?= $age ?>" <?= isset($_POST['age']) && $_POST['age'] == $age ? 'selected' : '' ?>>
                                        <?= $age ?>
                                    </option>
                                <?php } ?>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="form-group">
                        <select name="address">
                            <option value="" selected>Địa điểm</option>
                            <?php foreach ($datafilter as $cv) {
                                extract($cv);
                                if ($address !== '') { ?>
                                    <option value="<?= $address ?>" <?= isset($_POST['address']) && $_POST['address'] == $address ? 'selected' : '' ?>>
                                        <?= $address ?>
                                    </option>
                                <?php } ?>
                            <?php } ?>
                            <option value="diff">Khác</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="form-group">
                        <select name="major">
                            <option value="" selected>Chuyên Ngành</option>
                            <?php foreach ($datafilter as $cv) {
                                extract($cv);
                                if ($job !== '') { ?>
                                    <option value="<?= $job ?>" <?= isset($_POST['major']) && $_POST['major'] == $job ? 'selected' : '' ?>>
                                        <?= $job ?>
                                    </option>
                                <?php } ?>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="form-group">
                        <select name="exp">
                            <option value="" selected>Kinh Nghiệm Làm Việc</option>
                            <?php foreach ($datafilter as $cv) {
                                extract($cv);
                                if ($exp !== '') { ?>
                                    <option value="<?= $exp ?>" <?= isset($_POST['exp']) && $_POST['exp'] == $exp ? 'selected' : '' ?>>
                                        <?= $exp ?>
                                    </option>
                                <?php } ?>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="form-group">
                        <select name="skill">
                            <option value="" selected>Kỹ Năng</option>
                            <?php foreach ($datafilter as $cv) {
                                extract($cv) ?>
                                <option value="<?= $progLang ?>" <?= isset($_POST['skill']) && $_POST['skill'] == $progLang ? 'selected' : '' ?>>
                                    <?= $progLang ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="form-group">
                        <select name="salary">
                            <option value="" selected>Mức Lương</option>
                            <?php foreach ($datafilter as $cv) {
                                extract($cv);
                                if ($salary !== '') { ?>
                                    <option value="<?= $salary ?>" <?= isset($_POST['salary']) && $_POST['salary'] == $salary ? 'selected' : '' ?>>
                                        <?= $salary ?>
                                    </option>
                                <?php } ?>
                            <?php } ?>
                        </select>
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