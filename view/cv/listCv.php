<div class="page-title-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="title-item">
                    <h2>CV</h2>
                    <ul>
                        <li>
                            <img data-cfsrc="assets/img/home-three/title-img-two.png" alt="Image" style="display:none;visibility:hidden;"><noscript><img src="assets/img/home-three/title-img-two.png" alt="Image"></noscript>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <span>/</span>
                        </li>
                        <li>
                            CV
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
                        <input name="name" type="text" class="form-control" placeholder="<?= !isset($_POST['name']) || $_POST['name'] == '' ? 'Tên' : $_POST['name'] ?>">
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="form-group">
                        <select name="age">
                            <option value="" selected>Độ Tuổi</option>
                            <?php foreach ($filter_cv as $cv) {
                                extract($cv) ?>
                                <option value="<?= $age ?>" <?= isset($_POST['age']) && $_POST['age'] == $age ? 'selected' : '' ?>>
                                    <?= $age ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="form-group">
                        <select name="address">
                            <option value="" selected>Địa điểm</option>
                            <?php foreach ($filter_cv as $cv) {
                                extract($cv) ?>
                                <option value="<?= $address ?>" <?= isset($_POST['address']) && $_POST['address'] == $address ? 'selected' : '' ?>>
                                    <?= $address ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="form-group">
                        <select name="major">
                            <option value="" selected>Chuyên Ngành</option>
                            <?php foreach ($filter_cv as $cv) {
                                extract($cv) ?>
                                <option value="<?= $major ?>" <?= isset($_POST['major']) && $_POST['major'] == $major ? 'selected' : '' ?>>
                                    <?= $major ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="form-group">
                        <select name="exp">
                            <option value="" selected>Kinh Nghiệm Làm Việc</option>
                            <?php foreach ($filter_cv as $cv) {
                                extract($cv) ?>
                                <option value="<?= $exp ?>" <?= isset($_POST['exp']) && $_POST['exp'] == $exp ? 'selected' : '' ?>>
                                    <?= $exp ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="form-group">
                        <select name="skill">
                            <option value="" selected>Kỹ Năng</option>
                            <?php foreach ($filter_cv as $cv) {
                                extract($cv) ?>
                                <option value="<?= $skill ?>" <?= isset($_POST['skill']) && $_POST['skill'] == $skill ? 'selected' : '' ?>>
                                    <?= $skill ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="form-group">
                        <select name="salary">
                            <option value="" selected>Mức Lương</option>
                            <?php foreach ($filter_cv as $cv) {
                                extract($cv) ?>
                                <option value="<?= $salary ?>" <?= isset($_POST['salary']) && $_POST['salary'] == $salary ? 'selected' : '' ?>>
                                    <?= $salary ?>
                                </option>
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
<?php if (isset($_POST['findCv'])) {
    unset($_SESSION['findCv']) ?>
    <div class="job-showing-area">
        <div class="container">
            <h4>Kết quả tìm thấy (<?= count($list_cv) ?>)</h4>
        </div>
    </div>
<?php } ?>
<div class="employer-area two pb-100">
    <div class="container">
        <div class="row">
            <?php if (count($list_cv) == 0) { ?>
                <div class="col-lg-12">
                    <div class="employer-item text-center">
                        Không có dữ liệu tìm thấy !
                    </div>
                </div>
                <?php } else {
                foreach ($list_cv as $cv) {
                    extract($cv) ?>
                    <div class="job-showing-area">
                        <div class="container">
                            <h1>CV Tiềm Năng</h1>
                            <div class="candidate-area pb-100">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="candidate-item two">
                                                <a href="index.php?act=infoCv&id=<?= $iduser ?>">
                                                    <div class="left">
                                                        <h3>
                                                            <?= $name ?>
                                                        </h3>
                                                </a>
                                                <span><?= $major ?></span>
                                                <ul class="experience">
                                                    <li>Kinh nghiệm: <span><?= $exp ?> Tháng</span></li>
                                                    <li>Mức lương/giờ: <span><?= $salary ?>/giờ</span></li>
                                                    <li>
                                                        <i class="flaticon-send"></i>
                                                        <?= $address ?>
                                                    </li>
                                                </ul>

                                                </ul>
                                                <div class="cmn-link">
                                                    <a href="index.php?act=infoCv&id=<?= $iduser ?>">
                                                        <i class="flaticon-right-arrow one"></i>
                                                        View Resume
                                                        <i class="flaticon-right-arrow two"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <img data-cfsrc="<?= $img ?>" alt="<?= $name ?>" style="display:none;visibility:hidden;">
                                            <noscript><img src="<?= $img ?>" alt="<?= $name ?>"></noscript>
                                        </div>
                                    <?php } ?>
                                <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
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