<div class="user-form-area position-relative">
    <a class="position-absolute top-0 end-0 me-3 mt-4 translate-middle" href="index.php">
        <i class="fa-solid fa-xmark"></i>
    </a>
    <div class="container-fluid p-0">
        <div class="row m-0 align-items-center">
            <div class="col-lg-6 p-0">
                <div class="user-img">
                    <script type="text/javascript" style="display:none">
                        //<![CDATA[
                        window.__mirage2 = {
                            petok: "R5hvAGvuYYzQ_tuA6uW2YWY70c9VahuBUEONJqSdIJI-1800-0"
                        };
                        //]]>
                    </script>
                    <script type="text/javascript" src="../../ajax.cloudflare.com/mirage2.min.js"></script>
                    <img data-cfsrc="assets/img/resgister-bg.jpg" alt="User" style="display:none;visibility:hidden;"><noscript><img src="assets/img/resgister-bg.jpg" alt="User"></noscript>
                </div>
            </div>
            <div class="col-lg-6 p-0">
                <div class="user-content">
                    <div class="top">
                        <h2>Đăng nhập</h2>
                        <form  action="index.php?act=signin" method="post"> 
                            <div class="form-group">
                                <input type="text" name="username" class="form-control" placeholder="Tài khoản " required>
                            </div>
                            <div class="form-group">
                                <input type="password" name="pass" class="form-control" placeholder="Mật khẩu" required>
                            </div>
                            <button type="submit" class="btn" name="signin">Đăng nhập</button>
                        </form>
                        <?php if (isset($thongbao) && $thongbao != '') { ?>
                    <div class="row">
                        <p style="color: red;"><?= $thongbao ?></p>
                    </div>
                <?php } ?>
                    </div>
                    <div class="end">
                        <ul>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="bx bxl-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="bx bxl-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="bx bxl-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="bx bxl-pinterest-alt"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="end mt-3">
                        Chưa có tài khoản ? <a href="index.php?act=signup"> Đăng kí ngay</a>
                    </div>
                    <div class="end mt-2">
                        Quên mật khẩu ? <a href="index.php?act=forgot"> Lấy lại mật khẩu</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>