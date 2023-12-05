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
                    <script type="text/javascript" src="ajax.cloudflare.com/cdn-cgi/scripts/04b3eb47/cloudflare-static/mirage2.min.js"></script>
                    <img data-cfsrc="assets/img/resgister-bg.jpg" alt="User" style="display:none;visibility:hidden;"><noscript><img src="assets/img/resgister-bg.jpg" alt="User"></noscript>
                </div>
            </div>
            <div class="col-lg-6 p-0">
                <div class="user-content">
                    <div class="top">
                        <h2>Quên mật khẩu</h2>
                        <form action="index.php?act=forgot" method="POST">
                            <div class="form-group">
                                <input name="email" type="email" class="form-control" placeholder="Email đăng kí">
                            </div>
                            <button type="submit" name="getpass" class="btn">Lấy mật khẩu</button>
                        </form>

                        <?php
                        if (isset($thongbao) && $thongbao != "") {
                            echo $thongbao;
                        }
                        ?>
                    </div>
                    <div class="end mt-3">
                        <a href="index.php?act=signin"> Đăng nhập</a> <a href="#">/</a>
                        <a href="index.php?act=signup"> Đăng kí </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>