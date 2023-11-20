
<div class="banner-area three">
    <div class="banner-shape-three">
        <img data-cfsrc="assets/img/home-three/banner-main.png" alt="Shape" style="display:none;visibility:hidden;"><noscript><img src="assets/img/home-three/banner-main.png" alt="Shape"></noscript>
    </div>
    <div class="container-fluid">
        <div class="banner-content two three">
            <div class="d-table">
                <div class="d-table-cell">
                    <p>Cầu nối nhà tuyển dụng & ứng cử viên</p>
                    <h1>Ứng tuyển & tìm công việc IT với <span> JIT</span> </h1>
                    <div class="banner-form-area">
                        <form>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>
                                            <i class="bx bx-search"></i>
                                        </label>
                                        <input type="text" class="form-control" placeholder="       .   .   .">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <select>
                                            <option>Chuyên ngành</option>
                                            <option>Another option</option>
                                            <option>A option</option>
                                            <option>Potato</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group two">
                                        <label>
                                            <i class="bx bx-location-plus"></i>
                                        </label>
                                        <input type="text" class="form-control" placeholder="Địa diểm">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn">
                                Tìm kiếm
                                <i class="bx bx-search"></i>
                            </button>
                        </form>
                    </div>
                    <div class="register-area">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-4 col-lg-4">
                                    <div class="register-item">
                                        <h3>
                                            <span class="odometer" data-count="6,789,990">00</span>
                                        </h3>
                                        <p>Người dùng đã đăng kí</p>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-lg-4">
                                    <div class="register-item">
                                        <h3>
                                            <span class="odometer" data-count="8,098,234">00</span>
                                        </h3>
                                        <p>Nhà tuyển dụng</p>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-lg-4">
                                    <div class="register-item">
                                        <h3>
                                            <span class="odometer" data-count="3,678,890">00</span>
                                        </h3>
                                        <p>Công việc</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="banner-bottom-btn">
        <a href="#job">
            <i class="bx bx-mouse-alt"></i>
        </a>
    </div>
</div>


<section id="job" class="employer-area pb-100">
    <div class="container">
        <div class="section-title three">
            <div class="sub-title-wrap">
                <img data-cfsrc="assets/img/home-three/title-img.png" alt="Icon" style="display:none;visibility:hidden;"><noscript><img src="assets/img/home-three/title-img.png" alt="Icon"></noscript>
                <span class="sub-title">Nhà tuyển dụng cung cấp việc làm</span>
            </div>
            <h2>Nhà tuyển dụng nổi bật</h2>
        </div>
        <div class="row">
            <?php foreach($top_corp as $c) { extract($c) ?>
                <div class="col-lg-6">
                    <div class="employer-item">
                        <a href="index.php?act=infoCorp&id=<?= $iduser ?>">
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
                            <a href="index.php?act=infoCorp&id=<?= $iduser ?>">
                                <span class="span-one"><i class="fa-solid fa-circle-info"></i> Thông tin chi tiết</span>
                            </a>
                            <span class="span-two">FULL TIME</span>
                        </a>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="job-browse">
            <p>Rất nhiều công việc công nghệ hàng đầu đang chờ bạn > <a href="index.php?act=listRecr"> Tất cả việc làm</a></p>
        </div>
    </div>
</section>


<section class="system-area ptb-100">
    <div class="system-shape">
        <img data-cfsrc="assets/img/home-three/system1.png" alt="Shape" style="display:none;visibility:hidden;"><noscript><img src="assets/img/home-three/system1.png" alt="Shape"></noscript>
        <img data-cfsrc="assets/img/home-three/system2.png" alt="Shape" style="display:none;visibility:hidden;"><noscript><img src="assets/img/home-three/system2.png" alt="Shape"></noscript>
    </div>
    <div class="container">
        <div class="system-item">
            <div class="section-title three">
                <div class="sub-title-wrap">
                    <img data-cfsrc="assets/img/home-three/title-img-two.png" alt="Icon" style="display:none;visibility:hidden;"><noscript><img src="assets/img/home-three/title-img-two.png" alt="Icon"></noscript>
                    <span class="sub-title">Quy trình tuyển dụng</span>
                </div>
                <h2>Tìm kiếm Ứng viên tiềm năng</h2>
            </div>
            <ul class="system-list">
                <li>
                    <span></span>
                    Tìm kiếm / Tiếp cận với các ứng viên
                </li>
                <li>
                    <span></span>
                    Nhìn vào hoạt động kinh doanh cốt lõi của riêng bạn
                </li>
                <li>
                    <span></span>
                    Phát triển hiệu quả bằng cách quản lý nhân sự
                </li>
            </ul>
            <ul class="system-video">
                <li>
                    <a class="left-btn" href="#">
                        Tuyển dụng ngay
                        <i class="bx bx-plus"></i>
                    </a>
                </li>
                <li>
                    <span>Cách tuyển dụng nhân sự tốt</span>
                    <a class="right-btn popup-youtube" href="https://www.youtube.com/watch?v=Bx5mI0QD3jM">
                        <i class="bx bx-play"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</section>


<section class="work-area two three pt-100 pb-70">
    <div class="container">
        <div class="section-title three">
            <div class="sub-title-wrap">
                <img data-cfsrc="assets/img/home-three/title-img.png" alt="Icon" style="display:none;visibility:hidden;"><noscript><img src="assets/img/home-three/title-img.png" alt="Icon"></noscript>
                <span class="sub-title">Quy trình ứng tuyển</span>
            </div>
            <h2>Cách thức hoạt động</h2>
        </div>
        <div class="row">
            <div class="col-sm-6 col-lg-4">
                <div class="work-item two three">
                    <i class="flaticon-accounting"></i>
                    <h3>Đăng kí tài khoản</h3>
                    <p>Lorem ipsum dolor sit amet conscu adiing elitsed do eusmod tempor incidunt utinto elit sed
                        doe</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="work-item two three">
                    <i class="flaticon-file"></i>
                    <h3>Tìm kiếm việc làm</h3>
                    <p>Lorem ipsum dolor sit amet conscu adiing elitsed do eusmod tempor incidunt utinto elit sed
                        doe</p>
                </div>
            </div>
            <div class="col-sm-6 offset-sm-3 offset-lg-0 col-lg-4">
                <div class="work-item two three work-border">
                    <i class="flaticon-businessman-paper-of-the-application-for-a-job"></i>
                    <h3>Ứng tuyển công việc</h3>
                    <p>Lorem ipsum dolor sit amet conscu adiing elitsed do eusmod tempor incidunt utinto elit sed
                        doe</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="company-area pb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="section-title three">
                    <div class="sub-title-wrap">
                        <img data-cfsrc="assets/img/home-three/title-img.png" alt="Icon" style="display:none;visibility:hidden;"><noscript><img src="assets/img/home-three/title-img.png" alt="Icon"></noscript>
                        <span class="sub-title">Employers Offering Job</span>
                    </div>
                    <h2>Các việc làm nổi bật</h2>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="sorting-menu">
                    <ul>
                        <li class="filter" data-filter="all">All</li>
                        <li class="filter" data-filter=".m">Featured</li>
                        <li class="filter" data-filter=".n">Most Viewed</li>
                        <li class="filter" data-filter=".o">Newest</li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="container" class="row">
            <div class="col-sm-6 col-lg-3 mix n">
                <div class="company-item">
                    <div class="feature-top-right">
                        <span>Most Viewed</span>
                    </div>
                    <div class="top">
                        <a href="employer-details.html">
                            <img data-cfsrc="assets/img/home-one/company1.png" alt="Brand" style="display:none;visibility:hidden;"><noscript><img src="assets/img/home-one/company1.png" alt="Brand"></noscript>
                        </a>
                        <h3>
                            <a href="employer-details.html">Pi Agency</a>
                        </h3>
                        <span>Part Time Job</span>
                        <p>
                            <i class="flaticon-appointment"></i>
                            10 min ago / Austria, Vienna
                        </p>
                    </div>
                    <div class="bottom">
                        <ul>
                            <li>Pay Relocation Free</li>
                            <li>Remote Work</li>
                            <li>Duration: 5 Years</li>
                        </ul>
                        <span>Annual Salary</span>
                        <h4>50K</h4>
                        <a href="employer-details.html">
                            <i class="flaticon-right-arrow"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 mix n">
                <div class="company-item">
                    <div class="feature-top-right">
                        <span>Most Viewed</span>
                    </div>
                    <div class="top">
                        <a href="employer-details.html">
                            <img data-cfsrc="assets/img/home-one/company2.png" alt="Brand" style="display:none;visibility:hidden;"><noscript><img src="assets/img/home-one/company2.png" alt="Brand"></noscript>
                        </a>
                        <h3>
                            <a href="employer-details.html">Kn It</a>
                        </h3>
                        <span>Permanent Job</span>
                        <p>
                            <i class="flaticon-appointment"></i>
                            9 min ago / Tirana, Albania
                        </p>
                    </div>
                    <div class="bottom">
                        <ul>
                            <li>Graphic Designer</li>
                            <li>Remote Work</li>
                            <li>Duration: 2 Years</li>
                        </ul>
                        <span>Annual Salary</span>
                        <h4>56K</h4>
                        <a href="employer-details.html">
                            <i class="flaticon-right-arrow"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 mix m">
                <div class="company-item">
                    <div class="feature-top-right">
                        <span>Featured</span>
                    </div>
                    <div class="top">
                        <a href="employer-details.html">
                            <img data-cfsrc="assets/img/home-one/company3.png" alt="Brand" style="display:none;visibility:hidden;"><noscript><img src="assets/img/home-one/company3.png" alt="Brand"></noscript>
                        </a>
                        <h3>
                            <a href="employer-details.html">Orbit Inc.</a>
                        </h3>
                        <span>Part Time Job</span>
                        <p>
                            <i class="flaticon-appointment"></i>
                            8 min ago / Doha, Qatar
                        </p>
                    </div>
                    <div class="bottom">
                        <ul>
                            <li>Product Manager</li>
                            <li>Remote Work</li>
                            <li>Duration: 5 Years</li>
                        </ul>
                        <span>Annual Salary</span>
                        <h4>70K</h4>
                        <a href="employer-details.html">
                            <i class="flaticon-right-arrow"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 mix o">
                <div class="company-item">
                    <div class="feature-top-right">
                        <span>Newest</span>
                    </div>
                    <div class="top">
                        <a href="employer-details.html">
                            <img data-cfsrc="assets/img/home-one/company4.png" alt="Brand" style="display:none;visibility:hidden;"><noscript><img src="assets/img/home-one/company4.png" alt="Brand"></noscript>
                        </a>
                        <h3>
                            <a href="employer-details.html">Dev Roside</a>
                        </h3>
                        <span>Full Time Job</span>
                        <p>
                            <i class="flaticon-appointment"></i>
                            15 min ago / UK, England
                        </p>
                    </div>
                    <div class="bottom">
                        <ul>
                            <li>Design & Developer</li>
                            <li>Remote Work</li>
                            <li>Duration: 2 Years</li>
                        </ul>
                        <span>Annual Salary</span>
                        <h4>89K</h4>
                        <a href="employer-details.html">
                            <i class="flaticon-right-arrow"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 mix o">
                <div class="company-item">
                    <div class="feature-top-right">
                        <span>Newest</span>
                    </div>
                    <div class="top">
                        <a href="employer-details.html">
                            <img data-cfsrc="assets/img/home-one/company5.png" alt="Brand" style="display:none;visibility:hidden;"><noscript><img src="assets/img/home-one/company5.png" alt="Brand"></noscript>
                        </a>
                        <h3>
                            <a href="employer-details.html">Roshu.co</a>
                        </h3>
                        <span>Part Time Job</span>
                        <p>
                            <i class="flaticon-appointment"></i>
                            10 min ago / Cardiff, England
                        </p>
                    </div>
                    <div class="bottom">
                        <ul>
                            <li>Internet Operator</li>
                            <li>Remote Work</li>
                            <li>Duration: 2 Years</li>
                        </ul>
                        <span>Annual Salary</span>
                        <h4>66K</h4>
                        <a href="employer-details.html">
                            <i class="flaticon-right-arrow"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 mix m">
                <div class="company-item">
                    <div class="feature-top-right">
                        <span>Featured</span>
                    </div>
                    <div class="top">
                        <a href="employer-details.html">
                            <img data-cfsrc="assets/img/home-one/company6.png" alt="Brand" style="display:none;visibility:hidden;"><noscript><img src="assets/img/home-one/company6.png" alt="Brand"></noscript>
                        </a>
                        <h3>
                            <a href="employer-details.html">Omti. Med</a>
                        </h3>
                        <span>Part Time Job</span>
                        <p>
                            <i class="flaticon-appointment"></i>
                            40 min ago / Tokyo, Japan
                        </p>
                    </div>
                    <div class="bottom">
                        <ul>
                            <li>Caring Officer</li>
                            <li>Remote Work</li>
                            <li>Duration: 2 Years</li>
                        </ul>
                        <span>Annual Salary</span>
                        <h4>50K</h4>
                        <a href="employer-details.html">
                            <i class="flaticon-right-arrow"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 mix o">
                <div class="company-item">
                    <div class="feature-top-right">
                        <span>Newest</span>
                    </div>
                    <div class="top">
                        <a href="employer-details.html">
                            <img data-cfsrc="assets/img/home-one/company7.png" alt="Brand" style="display:none;visibility:hidden;"><noscript><img src="assets/img/home-one/company7.png" alt="Brand"></noscript>
                        </a>
                        <h3>
                            <a href="employer-details.html">Rahbar</a>
                        </h3>
                        <span>Full Time Job</span>
                        <p>
                            <i class="flaticon-appointment"></i>
                            7 min ago / Washington, US
                        </p>
                    </div>
                    <div class="bottom">
                        <ul>
                            <li>Media Connector</li>
                            <li>Remote Work</li>
                            <li>Duration: 3 Years</li>
                        </ul>
                        <span>Annual Salary</span>
                        <h4>87K</h4>
                        <a href="employer-details.html">
                            <i class="flaticon-right-arrow"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 mix n">
                <div class="company-item">
                    <div class="feature-top-right">
                        <span>Most Viewed</span>
                    </div>
                    <div class="top">
                        <a href="employer-details.html">
                            <img data-cfsrc="assets/img/home-one/company8.png" alt="Brand" style="display:none;visibility:hidden;"><noscript><img src="assets/img/home-one/company8.png" alt="Brand"></noscript>
                        </a>
                        <h3>
                            <a href="employer-details.html">Doblin. Fo</a>
                        </h3>
                        <span>Part Time Job</span>
                        <p>
                            <i class="flaticon-appointment"></i>
                            12 min ago / California, US
                        </p>
                    </div>
                    <div class="bottom">
                        <ul>
                            <li>Private Officer</li>
                            <li>Remote Work</li>
                            <li>Duration: 1 Year</li>
                        </ul>
                        <span>Annual Salary</span>
                        <h4>50K</h4>
                        <a href="employer-details.html">
                            <i class="flaticon-right-arrow"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="partner-area two pb-70">
    <div class="container">
        <div class="partner-slider owl-theme owl-carousel">
            <div class="partner-item">
                <img data-cfsrc="assets/img/home-one/partner1.png" alt="Partner" style="display:none;visibility:hidden;"><noscript><img src="assets/img/home-one/partner1.png" alt="Partner"></noscript>
                <img data-cfsrc="assets/img/home-one/partner1.png" alt="Partner" style="display:none;visibility:hidden;"><noscript><img src="assets/img/home-one/partner1.png" alt="Partner"></noscript>
            </div>
            <div class="partner-item">
                <img data-cfsrc="assets/img/home-one/partner2.png" alt="Partner" style="display:none;visibility:hidden;"><noscript><img src="assets/img/home-one/partner2.png" alt="Partner"></noscript>
                <img data-cfsrc="assets/img/home-one/partner2.png" alt="Partner" style="display:none;visibility:hidden;"><noscript><img src="assets/img/home-one/partner2.png" alt="Partner"></noscript>
            </div>
            <div class="partner-item">
                <img data-cfsrc="assets/img/home-one/partner3.png" alt="Partner" style="display:none;visibility:hidden;"><noscript><img src="assets/img/home-one/partner3.png" alt="Partner"></noscript>
                <img data-cfsrc="assets/img/home-one/partner3.png" alt="Partner" style="display:none;visibility:hidden;"><noscript><img src="assets/img/home-one/partner3.png" alt="Partner"></noscript>
            </div>
            <div class="partner-item">
                <img data-cfsrc="assets/img/home-one/partner4.png" alt="Partner" style="display:none;visibility:hidden;"><noscript><img src="assets/img/home-one/partner4.png" alt="Partner"></noscript>
                <img data-cfsrc="assets/img/home-one/partner4.png" alt="Partner" style="display:none;visibility:hidden;"><noscript><img src="assets/img/home-one/partner4.png" alt="Partner"></noscript>
            </div>
            <div class="partner-item">
                <img data-cfsrc="assets/img/home-one/partner5.png" alt="Partner" style="display:none;visibility:hidden;"><noscript><img src="assets/img/home-one/partner5.png" alt="Partner"></noscript>
                <img data-cfsrc="assets/img/home-one/partner5.png" alt="Partner" style="display:none;visibility:hidden;"><noscript><img src="assets/img/home-one/partner5.png" alt="Partner"></noscript>
            </div>
            <div class="partner-item">
                <img data-cfsrc="assets/img/home-one/partner1.png" alt="Partner" style="display:none;visibility:hidden;"><noscript><img src="assets/img/home-one/partner1.png" alt="Partner"></noscript>
                <img data-cfsrc="assets/img/home-one/partner1.png" alt="Partner" style="display:none;visibility:hidden;"><noscript><img src="assets/img/home-one/partner1.png" alt="Partner"></noscript>
            </div>
        </div>
    </div>
</div>