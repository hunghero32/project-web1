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
        <form action="index.php?act=listCorp" method="POST">
            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="form-group">
                        <input name="name" type="text" class="form-control" placeholder="<?= !isset($_POST['name']) || $_POST['name'] == '' ? 'Tên' : $_POST['name'] ?>">
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="form-group">
                        <select name="address">
                            <option value="" selected>Địa điểm</option>
                            <?php foreach ($datafilter as $c) {
                                extract($c);
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
                <div class="col-sm-6 col-lg-4">
                    <button name="findCorp" type="submit" class="btn cmn-btn">
                        Tìm kiếm
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php if (isset($_POST['findCorp'])) {
    unset($_SESSION['findCorp']) ?>
    <div class="job-showing-area">
        <div class="container">
            <h4>Kết quả tìm thấy (<?= count($list_corp) ?>)</h4>
        </div>
    </div>
<?php } ?>


<div class="employer-area two pb-100">
    <div class="container">
        <div class="row">
            <?php if (count($list_corp) == 0) { ?>
                <div class="col-lg-12">
                    <div class="employer-item text-center">
                        Không có dữ liệu tìm thấy !
                    </div>
                </div>
                <?php } else {
                foreach ($list_corp as $c) {
                    extract($c) ?>
                <div class="col-lg-6">
                    <div class="employer-item">
                        <a href="index.php?act=infoCorp&id=<?= $iduser ?>">
                            <img width="60px" data-cfsrc="<?= checkCorpAvaNull($avatar) ?>" alt="Details" style="display:none;visibility:hidden;">
                            <noscript><img src="<?= checkCorpAvaNull($avatar) ?>" alt="Details"></noscript>
                            <h3><?= $name ?></h3>
                            <p>
                                <span class="me-3">
                                    <i class="fa-solid fa-location-dot"></i>
                                    <?= checknull($address) ?>
                                </span>
                                <span class="me-3">
                                    <i class="fa-solid fa-users"></i>
                                    <?= checknull($size) ?>
                                </span>
                                <span>
                                    <i class="fa-solid fa-calendar-days"></i> Thành lập
                                    <?= checknull($activeYear) ?>
                                </span>
                            </p>
                            <a href="index.php?act=infoCorp&id=<?= $iduser ?>">
                                <span class="span-one"><i class="fa-solid fa-circle-info"></i> Thông tin chi tiết</span>
                            </a>
                            <!-- <span class="span-two">FULL TIME</span> -->
                        </a>
                    </div>
                </div>
                <?php } ?>
            <?php } ?>
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