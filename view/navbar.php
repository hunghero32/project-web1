<div class="navbar-area fixed-top">

    <div class="mobile-nav">
        <a href="index.php" class="logo">
            <script type="text/javascript" style="display:none">
                window.__mirage2 = {
                    petok: "R5hvAGvuYYzQ_tuA6uW2YWY70c9VahuBUEONJqSdIJI-1800-0"
                };
            </script>
            <script type="text/javascript" src="ajax.cloudflare.com/mirage2.min.js" src="ajax.cloudflare.com/mirage2.min.js"></script>
            <img data-cfsrc="assets/img/logo-three.png" alt="Logo" style="display:none;visibility:hidden;"><noscript><img src="assets/img/logo-three.png" alt="Logo"></noscript>
        </a>
    </div>

    <div class="main-nav three">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="index.php">
                    <img data-cfsrc="assets/img/logo-three.png" alt="Logo" style="display:none;visibility:hidden;"><noscript><img src="assets/img/logo-three.png" alt="Logo"></noscript>
                </a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <span class="tooltip-span">Hot</span>
                            <a href="index.php?act=listRecr" class="nav-link dropdown-toggle">Việc làm
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?act=listCorp">Nhà tuyển dụng</a>
                        </li>
                        <li class="nav-item">
                            <a href="#">CV</a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?act=about" class="nav-link">Giới thiệu</a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?act=contact" class="nav-link">Liên hệ</a>
                        </li>
                    </ul>
                    <div class="side-nav three d-flex ">

                        <div class="login-left d-flex align-items-center ">
                            <?php if (isset($_SESSION['username'])) {
                                extract($_SESSION['username']); ?>
                                <nav class="navbar-nav navbar-light ">
                                    <li class="nav-item">
                                        <a class='d-flex align-items-center nav-link dropdown-toggle' href='#'>
                                            <img src='assets/img/<?= $img ?>' alt='user ' class='w-25 ms-2'>
                                            <p class='mt-2 ms-2'><?= $name ?></p>
                                        </a>
                                        <!-- <p class="nav-link dropdown-toggle">Jobs <i class="bx bx-chevron-down"></i> -->
                                        <ul class=" dropdown-menu bg-light">
                                            <li>abc</li>
                                            <li>nbv</li>
                                        </ul>

                                    </li>
                                </nav>

                            <?php } else { ?>
                                <a class='login-left d-flex align-items-center' href='index.php?act=signin'><i class='flaticon-enter me-2'></i> Đăng kí / Đăng nhập </a>
                            <?php } ?>
                        </div>
                        <a class="job-right" href="index.php?act=post_recr">
                            Tuyển dụng
                            <i class="bx bx-plus"></i>
                        </a>
                    </div>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>