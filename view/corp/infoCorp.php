<div class="page-title-area two">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-lg-8">
                        <div class="left">
                            <img data-cfsrc="assets/img/home-one/job3.png" alt="Details" style="display:none;visibility:hidden;"><noscript><img src="assets/img/home-one/job3.png" alt="Details"></noscript>
                            <h2><?= $corp['name'] ?></h2>
                            <ul>
                                <li>
                                    <i class="bx bx-pie-chart-alt-2"></i> <?= $corp['major'] ?>
                                </li>
                                <li>
                                    <i class="bx bx-time"></i> <?= $corp['address'] ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="right">
                            <a class="cmn-btn" href="#">
                                Xem tuyển dụng
                                <i class="bx bx-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="job-details-area employer-details-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="details-item">
                    <div class="details-inner">
                        <h3>Giới Thiệu Công Ty</h3>
                        <p>
                            <?= $corp['description'] ?>
                        </p>
                    </div>
                    <div class="details-inner">
                        <h3>Công Việc Chính</h3>
                        <ul>
                            <li>
                                <i class="bx bx-message-square-check"></i> Có khả năng làm việc dưới áp lực
                            </li>
                            <li>
                                <i class="bx bx-message-square-check"></i> Kỹ năng kinh doanh và bán hàng
                            </li>
                            <li>
                                <i class="bx bx-message-square-check"></i> Giao tiếp đàm phán
                            </li>
                            <li>
                                <i class="bx bx-message-square-check"></i> Hiểu được tâm lý khách hàng
                            </li>
                        </ul>
                    </div>
                    <div class="details-inner">
                        <h3>Ảnh Giới thiệu</h3>
                        <div class="job-details-slider owl-theme owl-carousel">
                            <div class="slider-item">
                                <img data-cfsrc="assets/img/job-details1.jpg" alt="Details" style="display:none;visibility:hidden;"><noscript><img src="assets/img/job-details1.jpg" alt="Details"></noscript>
                            </div>
                            <div class="slider-item">
                                <img data-cfsrc="assets/img/job-details2.jpg" alt="Details" style="display:none;visibility:hidden;"><noscript><img src="assets/img/job-details2.jpg" alt="Details"></noscript>
                            </div>
                            <!-- <div class="slider-item">
                                    <img data-cfsrc="assets/img/job-details3.jpg" alt="Details"
                                        style="display:none;visibility:hidden;"><noscript><img
                                            src="assets/img/job-details3.jpg" alt="Details"></noscript>
                                </div> -->
                        </div>
                    </div>
                    <div class="details-inner">
                        <h3>Hành Trình Phát Triển</h3>
                        <p>It is a long established fact that a reader will be distracted by the readable content of
                            a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                            more-or-less normal distribution of letters, as opposed
                            to using 'Content here, content here.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure dignissimos quae rerum in
                            autem, quos nisi ab minima molestiae ad enim, incidunt culpa totam nesciunt. Eum
                            reprehenderit quidem doloribus suscipit.</p>
                    </div>

                </div>
            </div>
            <div class="col-lg-4">
                <div class="widget-area">
                    <div class="information widget-item">
                        <h3>Thông tin công ty</h3>
                        <ul>
                            <li>
                                <img data-cfsrc="assets/img/job-details-icon.png" alt="Details" style="display:none;visibility:hidden;"><noscript><img src="assets/img/job-details-icon.png" alt="Details"></noscript>
                                <h4>Email</h4>
                                <span><?= $corp['email'] ?></span>
                            </li>
                            <li>
                                <img data-cfsrc="assets/img/job-details-icon.png" alt="Details" style="display:none;visibility:hidden;"><noscript><img src="assets/img/job-details-icon.png" alt="Details"></noscript>
                                <h4>Địa Chỉ</h4>
                                <span><?= $corp['address'] ?></span>
                            </li>
                            <li>
                                <img data-cfsrc="assets/img/job-details-icon.png" alt="Details" style="display:none;visibility:hidden;"><noscript><img src="assets/img/job-details-icon.png" alt="Details"></noscript>
                                <h4>Lĩnh vực</h4>
                                <span><?= $corp['major'] ?></span>
                            </li>
                            <li>
                                <img data-cfsrc="assets/img/job-details-icon.png" alt="Details" style="display:none;visibility:hidden;"><noscript><img src="assets/img/job-details-icon.png" alt="Details"></noscript>
                                <h4>Năm hoạt động </h4>
                                <span><?= $corp['exp'] ?></span>
                            </li>
                            <li>
                                <img data-cfsrc="assets/img/job-details-icon.png" alt="Details" style="display:none;visibility:hidden;"><noscript><img src="assets/img/job-details-icon.png" alt="Details"></noscript>
                                <h4>Applied</h4>
                                <span>01</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>