<div class="page-title-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="title-item">
                    <h2>Candidates</h2>
                    <ul>
                        <li>
                            <img data-cfsrc="assets/img/home-three/title-img-two.png" alt="Image" style="display:none;visibility:hidden;"><noscript><img src="assets/img/home-three/title-img-two.png" alt="Image"></noscript>
                            <a href="index.php">Home</a>
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
        <form>
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Tên">
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="form-group">
                        <select>
                            <option>Độ tuổi</option>
                            <option>Another option</option>
                            <option>A option</option>
                            <option>Potato</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="form-group">
                        <select>
                            <option>Địa điểm</option>
                            <option>Another option</option>
                            <option>A option</option>
                            <option>Potato</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="form-group">
                        <select>
                            <option>Chuyên ngành</option>
                            <option>Another option</option>
                            <option>A option</option>
                            <option>Potato</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="form-group">
                        <select>
                            <option>Kinh nghiệm làm việc</option>
                            <option>Another option</option>
                            <option>A option</option>
                            <option>Potato</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="form-group">
                        <select>
                            <option>Ngôn ngữ</option>
                            <option>Another option</option>
                            <option>A option</option>
                            <option>Potato</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="form-group">
                        <select>
                            <option>Mức lương</option>
                            <option>Another option</option>
                            <option>A option</option>
                            <option>Potato</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <button type="submit" class="btn cmn-btn">
                        Tìm kiếm
                        <i class="bx bx-plus"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>


<div class="job-showing-area">
    <div class="container">
        <h1>CV Tiềm Năng</h1>
        <div class="candidate-area pb-100">
            <div class="container">
                <div class="row">
                    <?php foreach ($cv as $cv) {
                        $link = "index.php?act=infoCv=" . $cv['id'];
                        extract($cv) ?>
                        <div class="col-lg-6">
                            <div class="candidate-item two">
                                <div class="left">
                                    <h3>
                                        <a href="<?= $link ?>"><?= $name ?></a>
                                    </h3>
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
                                            <a href="<?= $link ?>">
                                                <i class="flaticon-right-arrow one"></i>
                                                View Resume
                                                <i class="flaticon-right-arrow two"></i>
                                            </a>
                                        </div>
                                </div>
                                <img data-cfsrc="<?= $img ?>" alt="<?= $name ?>" style="display:none;visibility:hidden;">
                                <noscript><img src="<?= $img ?>" alt="<?= $name ?>"></noscript>
                            </div>
                        </div>
                    <?php } ?>
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
</div>