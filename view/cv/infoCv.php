<div class="page-title-area two three">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-lg-8">
                        <div class="left two">
                            <img data-cfsrc="assets/img/candidate-details1.jpg" alt="CV Chi Tiết" style="display:none;visibility:hidden;"><noscript><img src="assets/img/candidate-details1.jpg" alt="Details"></noscript>
                            <h2><?= $cv['name'] ?></h2>
                            <ul>
                                <li>
                                    <i class="bx bx-box"></i>
                                    <?= $cv['major'] ?>
                                </li>
                                <li>
                                    <i class="bx bx-phone-call"></i>
                                    <a href="tel:<?= $cv['phone'] ?>"><?= $cv['phone'] ?></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
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
                    </div>
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
                        <h2><?= $cv['name'] ?></h2>
                        <span><?= $cv['major'] ?></span>
                    </div>
                    <div class="information widget-item">
                        <h3>Yêu Cầu</h3>
                        <ul>
                            <li>
                                <img data-cfsrc="assets/img/job-details-icon.png" alt="Details" style="display:none;visibility:hidden;"><noscript><img src="assets/img/job-details-icon.png" alt="Details"></noscript>
                                <h4>Mức Lương :</h4>
                                <span><?= $cv['salary'] ?></span>
                            </li>
                            <li>
                                <img data-cfsrc="assets/img/job-details-icon.png" alt="Details" style="display:none;visibility:hidden;"><noscript><img src="assets/img/job-details-icon.png" alt="Details"></noscript>
                                <h4>Kinh Nghiệm :</h4>
                                <span><?= $cv['exp'] ?></span>
                            </li>
                            <li>
                                <img data-cfsrc="assets/img/job-details-icon.png" alt="Details" style="display:none;visibility:hidden;"><noscript><img src="assets/img/job-details-icon.png" alt="Details"></noscript>
                                <h4>Tuổi :</h4>
                                <span><?= $cv['age'] ?></span>
                            </li>
                            <li>
                                <img data-cfsrc="assets/img/job-details-icon.png" alt="Details" style="display:none;visibility:hidden;"><noscript><img src="assets/img/job-details-icon.png" alt="Details"></noscript>
                                <h4>Giới Tính:</h4>
                                <span><?= $cv['gender'] ?></span>
                            </li>
                            <li>
                                <img data-cfsrc="assets/img/job-details-icon.png" alt="Details" style="display:none;visibility:hidden;"><noscript><img src="assets/img/job-details-icon.png" alt="Details"></noscript>
                                <h4>Kỹ năng:</h4>
                                <span><?= $cv['skill'] ?></span>
                            </li>
                            <li>
                                <img data-cfsrc="assets/img/job-details-icon.png" alt="Details" style="display:none;visibility:hidden;"><noscript><img src="assets/img/job-details-icon.png" alt="Details"></noscript>
                                <h4>Địa Chỉ:</h4>
                                <span><?= $cv['address'] ?></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="details-item">
                    <div class="profile">
                        <h3>Giới thiệu chung về tôi</h3>
                        <p><?= $cv['description'] ?></p>
                    </div>
                    <div class="work bottom-item">
                        <h3>Kinh nghiệm làm Việc </h3>
                        <ul>
                            <li>
                                <img data-cfsrc="assets/img/home-three/title-img.png" alt="Icon" style="display:none;visibility:hidden;"><noscript><img src="assets/img/home-three/title-img.png" alt="Icon"></noscript>
                                Path Technologies, Washington, DC, USA
                            </li>
                            <li>
                                <span>04/2011 - 01/2012</span>
                            </li>
                        </ul>
                        <h4>Senior Software Engineer</h4>
                        <p>There are many variations of passages of
                            Lorem Ipsum available, but the majority have
                            suffered alteration in some form, by
                            injected humour, or randomised words which
                            don't look even slightly believable. If you
                            are going to use a passage of Lorem Ipsum,
                            you need to be sure there isn't anything
                            embarrassing hidden in the middle of text.</p>
                    </div>
                    <div class="work bottom-item bottom-item-last">
                        <ul>
                            <li>
                                <img data-cfsrc="assets/img/home-three/title-img.png" alt="Icon" style="display:none;visibility:hidden;"><noscript><img src="assets/img/home-three/title-img.png" alt="Icon"></noscript>
                                3s Software Bangladesh
                            </li>
                            <li>
                                <span>02/2015 - 02/2018</span>
                            </li>
                        </ul>
                        <h4>John Hopkins, Bangladesh</h4>
                        <p>There are many variations of passages of
                            Lorem Ipsum available, but the majority have
                            suffered alteration in some form, by
                            injected humour, or randomised words which
                            don't look even slightly believable. If you
                            are going to use a passage of Lorem Ipsum,
                            you need to be sure there isn't anything
                            embarrassing hidden in the middle of text.</p>
                    </div>
                    <div class="work bottom-item">
                        <h3>Education</h3>
                        <ul>
                            <li>
                                <img data-cfsrc="assets/img/home-three/title-img.png" alt="Icon" style="display:none;visibility:hidden;"><noscript><img src="assets/img/home-three/title-img.png" alt="Icon"></noscript>
                                Path Technologies, Washington, DC, USA
                            </li>
                        </ul>
                        <h4>MBA (2018-2019)</h4>
                        <p>There are many variations of passages of
                            Lorem Ipsum available, but the majority have
                            suffered alteration in some form, by
                            injected humour, or randomised words which
                            don't look even slightly believable. If you
                            are going to use a passage of Lorem Ipsum,
                            you need to be sure there isn't anything
                            embarrassing hidden in the middle of text.</p>
                    </div>
                    <div class="work bottom-item bottom-item-last">
                        <ul>
                            <li>
                                <img data-cfsrc="assets/img/home-three/title-img.png" alt="Icon" style="display:none;visibility:hidden;"><noscript><img src="assets/img/home-three/title-img.png" alt="Icon"></noscript>
                                Design at Institute of Technology &
                                Marketing
                            </li>
                        </ul>
                        <h4>Section UX & UI design (2014 - 2018)</h4>
                        <p>There are many variations of passages of
                            Lorem Ipsum available, but the majority have
                            suffered alteration in some form, by
                            injected humour, or randomised words which
                            don't look even slightly believable. If you
                            are going to use a passage of Lorem Ipsum,
                            you need to be sure there isn't anything
                            embarrassing hidden in the middle of text.</p>
                    </div>
                    <div class="skills">
                        <h3>Skills</h3>
                        <div class="skill-wrap">
                            <div class="skill">
                                <h3>HTML/CSS</h3>
                                <div class="skill-bar skill1 animate__slideInLeft animate__animated">
                                    <span class="skill-count1">56%</span>
                                </div>
                            </div>
                            <div class="skill">
                                <h3>WORDPRESS</h3>
                                <div class="skill-bar skill2 animate__slideInLeft animate__animated">
                                    <span class="skill-count2">80%</span>
                                </div>
                            </div>
                            <div class="skill">
                                <h3>PHOTOSHOP</h3>
                                <div class="skill-bar skill3 animate__slideInLeft animate__animated">
                                    <span class="skill-count3">90%</span>
                                </div>
                            </div>
                            <div class="skill">
                                <h3>PHP</h3>
                                <div class="skill-bar skill4 animate__slideInLeft animate__animated">
                                    <span class="skill-count4">70%</span>
                                </div>
                            </div>
                            <div class="skill">
                                <h3>TEAM MANAGEMENT</h3>
                                <div class="skill-bar skill5 animate__slideInLeft animate__animated">
                                    <span class="skill-count5">80%</span>
                                </div>
                            </div>
                            <div class="skill">
                                <h3>SERVICE OF QUALITY</h3>
                                <div class="skill-bar skill6 animate__slideInLeft animate__animated">
                                    <span class="skill-count6">90%</span>
                                </div>
                            </div>
                        </div>
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