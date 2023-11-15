<div class="user-form-area position-relative">
        <a class="position-absolute top-0 end-0 me-3 mt-4 translate-middle" href="index.html">
            <i class="fa-solid fa-xmark"></i>
        </a>
        <div class="container-fluid p-0">
            <div class="row m-0 align-items-center">
                <div class="col-lg-6 p-0">
                    <div class="user-img">
                        <script type="text/javascript" style="display:none">
                            //<![CDATA[
                            window.__mirage2 = { petok: "R5hvAGvuYYzQ_tuA6uW2YWY70c9VahuBUEONJqSdIJI-1800-0" };
                            //]]>
                        </script>
                        <script type="text/javascript"
                            src="../../../ajax.cloudflare.com/cdn-cgi/scripts/04b3eb47/cloudflare-static/mirage2.min.js"></script>
                        <img data-cfsrc="assets/img/resgister-bg.jpg" alt="User"
                            style="display:none;visibility:hidden;"><noscript><img src="assets/img/resgister-bg.jpg"
                                alt="User"></noscript>
                    </div>
                </div>
                <div class="col-lg-6 p-0">
                    <div class="user-content">
                        <div class="top">
        <?php
            if(isset($_SESSION['user'])&& (is_array($_SESSION['user']))){
                extract($_SESSION['user']);
            }
          ?>
                        <h2>Cập Nhật Tài Khoản</h2>
                        <form action="index.php?act=fixacc" method="post">
                        <input type="hidden" name="id" value="<?=$id?>">
                                <div class="form-group">
                                    <input type="text" name="username" class="form-control" placeholder="Tài khoản (*)"
                                    pattern=".{8,}" title="Tài khoản phải có ít nhất 8 ký tự" value="<?=$username?>"
                                    required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Tên Cá Nhân , Doanh Nghiệp  (*)"
                                    pattern=".{8,}" title="Tên phải có ít nhất 8 ký tự" value="<?=$username?>"
                                    required>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="pass" id="pass" class="form-control" placeholder="Mật khẩu (*)" pattern=".{8,}"
                                        title="Mật khẩu phải có ít nhất 8 ký tự" value="<?=$pass?>" required>
                                </div>
                                <div class="form-group">
                                    <input type="tel" name="phone" class="form-control" placeholder="Số điện thoại (*)" value="<?=$phone?>" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" pattern="/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/" placeholder="Địa chỉ Email (*)" value="<?=$email?>" required>
                                </div>
                                    <div class="form-group">
                                    <p class="text-secondary">Ảnh đại diện cá nhân / nhà tuyển dụng</p>
                                    <input type="file" name="img" class="form-control p-3" accept=".jpg, .jpeg, .png, .jfif, .gif" value="<?=$img?>" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="address" class="form-control" placeholder=".{10,}" value="<?=$address?>" title="Địa chỉ phải có ít nhất 10 ký tự" required>
                                </div>
                                
                                    <br><br>
                                <button type="submit" name="submit" class="btn mt-3">Đăng kí</button>
                            </form>