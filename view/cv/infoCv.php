<div class="page-title-area two three">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-lg-8">
                        <div class="left two">
                            <img data-cfsrc="assets/img/candidate-details1.jpg" alt="CV Chi Tiết" style="display:none;visibility:hidden;"><noscript><img src="assets/img/candidate-details1.jpg" alt="Details"></noscript>
                            <h2><?= checknull($name) ?></h2>
                            <ul>
                                <li>
                                    <i class="bx bx-box"></i>
                                    <?= checknull($major) ?>
                                </li>
                                <li>
                                    <i class="bx bx-phone-call"></i>
                                    <a href="tel:<?= checknull($phone) ?>"><?= checknull($phone) ?></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- <div class="col-lg-4">
                        <div class="right">
                            <ul>
                                <li>
                                    <a href="#" id="save">
                                        <i class="bx bx-heart"></i>
                                        Save
                                    </a>
                                </li>
                                <li>
                                    <a href="#" id="share">
                                        <i class="bx bx-share-alt"></i>
                                        Share
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="bx bxs-report"></i>
                                        Report
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>


<div class="person-details-area resume-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="widget-area">
                    <div class="resume-profile">
                        <img data-cfsrc="assets/img/dashboard1.jpg" alt="Dashboard" style="display:none;visibility:hidden;"><noscript><img src="assets/img/dashboard1.jpg" alt="Dashboard"></noscript>
                        <h2><?= checknull($name) ?></h2>
                        <span><?= checknull($major) ?></span>
                    </div>
                    <div class="information widget-item">
                        <h3>Yêu Cầu</h3>
                        <ul>
                            <li>
                                <img data-cfsrc="assets/img/job-details-icon.png" alt="Details" style="display:none;visibility:hidden;"><noscript><img src="assets/img/job-details-icon.png" alt="Details"></noscript>
                                <h4>Mức Lương mong muốn:</h4>
                                <span><?= checknull($salary) ?></span>
                            </li>
                            <li>
                                <img data-cfsrc="assets/img/job-details-icon.png" alt="Details" style="display:none;visibility:hidden;"><noscript><img src="assets/img/job-details-icon.png" alt="Details"></noscript>
                                <h4>Kinh Nghiệm :</h4>
                                <span><?= checknull($exp) ?></span>
                            </li>
                            <li>
                                <img data-cfsrc="assets/img/job-details-icon.png" alt="Details" style="display:none;visibility:hidden;"><noscript><img src="assets/img/job-details-icon.png" alt="Details"></noscript>
                                <h4>Tuổi :</h4>
                                <span><?= checknull($age) ?></span>
                            </li>
                            <li>
                                <img data-cfsrc="assets/img/job-details-icon.png" alt="Details" style="display:none;visibility:hidden;"><noscript><img src="assets/img/job-details-icon.png" alt="Details"></noscript>
                                <h4>Giới Tính:</h4>
                                <span><?= checknull($gender) ?></span>
                            </li>
                            <li>
                                <img data-cfsrc="assets/img/job-details-icon.png" alt="Details" style="display:none;visibility:hidden;"><noscript><img src="assets/img/job-details-icon.png" alt="Details"></noscript>
                                <h4>Kỹ năng:</h4>
                                <span><?= checknull($skill) ?></span>
                            </li>
                            <li>
                                <img data-cfsrc="assets/img/job-details-icon.png" alt="Details" style="display:none;visibility:hidden;"><noscript><img src="assets/img/job-details-icon.png" alt="Details"></noscript>
                                <h4>Địa Chỉ:</h4>
                                <span><?= checknull($address) ?></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="details-item">
                    <div class="profile">
                        <h3>Giới thiệu chung về tôi</h3>
                        <p><?= checknull($introduce) ?></p>
                    </div>
                    <div class="work bottom-item">
                        <h3>Kinh nghiệm làm Việc </h3>
                        <?php foreach ($list_cv as $cv) { ?>
                            <ul>
                                <li>
                                    <img data-cfsrc="assets/img/home-three/title-img.png" alt="Icon" style="display:none;visibility:hidden;"><noscript><img src="assets/img/home-three/title-img.png" alt="Icon"></noscript>
                                    <?= checknull($corp) ?>
                                </li>
                                <li>
                                    <span>Từ :<?= checknull($start) ?> | Đến :<?= checknull($end) ?></span>
                                </li>
                            </ul>
                            <h4><?= checknull($job) ?></h4>
                        <?php } ?>
                    </div>

                    <div class="work bottom-item">
                        <h3>Học Vấn</h3>
                        <?php foreach ($list_cv as $cv) { ?>
                            <ul>
                                <li>
                                    <img data-cfsrc="assets/img/home-three/title-img.png" alt="Icon" style="display:none;visibility:hidden;"><noscript><img src="assets/img/home-three/title-img.png" alt="Icon"></noscript>
                                    <?= checknull($school) ?>
                                </li>
                            </ul>
                            <h4><?= checknull($school) ?> Từ năm <?= checknull($year) ?></h4>
                        <?php } ?>
                    </div>
                    <div class="skills">
                        <h3>Skills</h3>
                        <div class="skill-wrap">
                        <?php foreach ($list_cv as $cv) { ?>
                            <div class="skill">
                                <h3><?= checknull($skill) ?></h3>
                                <div class="skill-bar skill1 animate__slideInLeft animate__animated">
                                    <span class="skill-count1">66%</span>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Gán sự kiện click cho nút "Share"
        document.getElementById('share').addEventListener('click', function() {
            // Lấy địa chỉ (URL) của trang đang hiển thị
            var currentPageUrl = window.location.href;

            // Tạo một thẻ input ẩn để sao chép nội dung vào clipboard
            var tempInput = document.createElement("input");
            tempInput.value = currentPageUrl;
            document.body.appendChild(tempInput);

            // Chọn toàn bộ nội dung trong input
            tempInput.select();

            // Sao chép nội dung vào clipboard
            document.execCommand("copy");

            // Xóa thẻ input ẩn
            document.body.removeChild(tempInput);

            //alert("Đã sao chép URL trang vào clipboard: " + currentPageUrl);
        });
        // Gán sự kiện click cho nút "Save"
        document.getElementById('save').addEventListener('click', function() {
            // Lấy địa chỉ (URL) của trang đang hiển thị
            var currentPageUrl = window.location.href;

            // Lưu địa chỉ URL vào localStorage
            localStorage.setItem('savedUrl', currentPageUrl);

            //alert("Đã lưu URL trang: " + currentPageUrl);
        });
    </script>