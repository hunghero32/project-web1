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
                    <script type="text/javascript" src="ajax.cloudflare.com/mirage2.min.js"></script>
                    <img data-cfsrc="assets/img/resgister-bg.jpg" alt="User" style="display:none;visibility:hidden;"><noscript><img src="assets/img/resgister-bg.jpg" alt="User"></noscript>
                </div>
            </div>
            <div class="col-lg-6 p-0">
                <div class="user-content">
                    <div class="top">
                        <h2>Đổi mật khẩu</h2>
                        <form action="index.php?act=changepassword" method="POST">
                            <div class="form-group">
                                <input type="text" name="oldpass" class="form-control" placeholder="<?= $_SESSION['username']['pass'] ?>" readonly>
                            </div>
                            <div class="form-group">
                                <input type="password" name="newpass" class="form-control" placeholder="Mật khẩu mới" pattern="(?=.*[A-Z])(?=.*\d).{8,}" title="Mật khẩu phải có ít nhất 1 chữ in hoa, 1 chữ thường, 1 số và 1 ký tự đặc biệt, và dài ít nhất 8 ký tự" required>
                            </div>
                            <div class="form-group">
                                <input type="password" name="renewpass" class="form-control" placeholder="Nhập lại mật khẩu mới" required>
                            </div>
                            <button type="submit" class="btn" name="change">Đổi mật khẩu</button>
                        </form>

                        <?php if (isset($thongbao) && $thongbao != '') { ?>
                            <div class="row">
                                <p style="color: red;"><?= $thongbao ?></p>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>