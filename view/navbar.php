<div class="navbar-area fixed-top">

    <div class="mobile-nav">
        <a href="index.php" class="logo">
            <script type="text/javascript" style="display:none">
                window.__mirage2 = {
                    petok: "R5hvAGvuYYzQ_tuA6uW2YWY70c9VahuBUEONJqSdIJI-1800-0"
                };
            </script>
            <script type="text/javascript" src="ajax.cloudflare.com/mirage2.min.js" src="ajax.cloudflare.com/mirage2.min.js"></script>
            <img data-cfsrc="assets/img/logo-three.png" alt="Logo" style="display:none;visibility:hidden;"><noscript><img src="assets/img/favicon.png" alt="Logo"></noscript>
        </a>
    </div>

    <div class="main-nav three">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="index.php">
                    <img data-cfsrc="assets/img/logo-three.png" alt="Logo" style="display:none;visibility:hidden;"><noscript><img src="assets/img/favicon.png" alt="Logo"></noscript>
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
                            <a href="index.php?act=listCv">CV</a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?act=about" class="nav-link">Giới thiệu</a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?act=contact" class="nav-link">Liên hệ</a>
                        </li>
                    </ul>
                    <div class="side-nav three d-flex"> 
                        <?php if (isset($_SESSION['username'])) {
                            extract($_SESSION['username']); ?>
                            <div class="login-left d-flex align-items-center">
                                <div class="nav-item dropdown">
                                    <a class="text-white text-small-screen d-flex align-items-center" href="#" id="navbarDropdown" role="button" aria-expanded="false">
                                        <img src='<?= checkUserAvaNull($avatar) ?>' alt='user ' class='w-25 me-2'>
                                        <p class="p-0 m-0"><?= $name ?></p>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="index.php?act=changepassword">Đổi mật khẩu</a></li>
                                        <?php if ($role == 1) { ?>
                                        <li><a class="dropdown-item" href="index.php?act=manage_recr">Quản lí thông tin</a></li>
                                        <?php } ?>
                                        <?php if ($role == 2) { ?>
                                        <li><a class="dropdown-item" href="index.php?act=manage_Cv">Thông tin người dùng</a></li>
                                        <?php } ?>
                                        <?php if ($role == 3) { ?>
                                        <li><a class="dropdown-item" href="index.php?act=manage_recr">Thông tin doanh nghiệp</a></li>
                                        <?php } ?>
                                        <li> 
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="index.php?act=signout">Đăng xuất</a></li>
                                    </div>
                                </div>
                                <?php if ($role == 1) { ?>
                                    <a class="job-right" href="index.php?act=corp_recr">
                                        Quản trị <i class="fa-solid fa-comments"></i>
                                    </a>
                                <?php } else if ($role == 2) { ?>
                                    <a class="job-right" href="index.php?act=user_cv&id=<?= $id ?>">
                                        Tạo CV <i class="fa-solid fa-comments"></i>
                                    </a>
                                <?php } else { ?>
                                    <a class="job-right" href="index.php?act=post_recr&id=<?= $id ?>">
                                        Tuyển dụng <i class="fa-solid fa-comments"></i>
                                    </a>
                                    
                                <?php } ?>
                            </div>
                        <?php } else { ?>
                            <a class='login-left d-flex align-items-center' href='index.php?act=signin'><i class='flaticon-enter me-2'></i> Đăng kí / Đăng nhập </a>
                            <a class="job-right" href="index.php?act=post_recr" >
                                Tuyển dụng / Tạo CV <i class="fa-solid fa-comments"></i>
                            </a>
                        <?php } ?>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>