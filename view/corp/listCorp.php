<div class="page-title-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="title-item">
                    <h2>Nhà tuyển dụng</h2>
                    <ul>
                        <li>
                            Công ty / Doanh nghiệp
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
                            <option>Lĩnh vực</option>
                            <option>Another option</option>
                            <option>A option</option>
                            <option>Potato</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <button type="submit" class="btn cmn-btn">
                        Tìm kiếm
                        <!-- <i class="bx bx-plus"></i> -->
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>


<div class="job-showing-area">
    <div class="container">
        <h4>Kết quả tìm thấy (8)</h4>
    </div>
</div>


<div class="employer-area two pb-100">
    <div class="container">
        <div class="row">
            <?php foreach ($list_corp as $c) {
                extract($c) ?>
                <div class="col-lg-6">
                    <div class="employer-item">
                        <a href="index.php?act=infoCorp&id=<?= $idcorp ?>">
                            <img data-cfsrc="assets/img/home-one/job1.png" alt="Employer" style="display:none;visibility:hidden;"><noscript><img src="assets/img/home-one/job1.png" alt="Employer"></noscript>
                            <h3><?= $name ?></h3>
                            <ul>
                                <li>
                                    <i class="fa-solid fa-location-dot"></i>
                                    <?= $address ?>
                                </li>
                            </ul>
                            <p>
                                <i class="fa-solid fa-suitcase"></i> <?= $major ?>
                            </p>
                            <a href="index.php?act=infoCorp&id=<?= $idcorp ?>">
                                <span class="span-one"><i class="fa-solid fa-circle-info"></i> Thông tin chi tiết</span>
                            </a>
                            <span class="span-two">FULL TIME</span>
                        </a>
                    </div>
                </div>
            <?php } ?>
            <div class="col-lg-6">
                <div class="employer-item">
                    <a href="job-details.html">
                        <img data-cfsrc="assets/img/home-one/job2.png" alt="Employer" style="display:none;visibility:hidden;"><noscript><img src="assets/img/home-one/job2.png" alt="Employer"></noscript>
                        <h3>Sr. Shopify Developer</h3>
                        <ul>
                            <li>
                                <i class="flaticon-send"></i>
                                Houston, TX, USA
                            </li>
                            <li>
                                <i class="bx bxs-star checked"></i>
                            </li>
                            <li>
                                <i class="bx bxs-star checked"></i>
                            </li>
                            <li>
                                <i class="bx bxs-star checked"></i>
                            </li>
                            <li>
                                <i class="bx bxs-star checked"></i>
                            </li>
                            <li>
                                <i class="bx bxs-star checked"></i>
                            </li>
                            <li>
                                <span>15 Rating</span>
                            </li>
                        </ul>
                        <p>Responsible for managing skilled Ul/UX designer amet conscu adiing elitsed do eusmod</p>
                        <span class="span-one">Accounting</span>
                        <span class="span-two two">FULL TIME</span>
                    </a>
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