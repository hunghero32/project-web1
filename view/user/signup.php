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
                <div class="col-lg-6 p-0 position-relative">
                    <div class="user-content">
                        <div class="top">
                            <h2>Đăng kí</h2>
                            <form action="index.php?act=signup" method="post">
                                <div class="form-group">
                                    <input type="text" name="username" class="form-control" placeholder="Tài khoản (*)"
                                    pattern=".{5,}" title="Tài khoản phải có ít nhất 8 ký tự"
                                    required>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="pass" id="pass" class="form-control" placeholder="Mật khẩu (*)" pattern=".{8,}"
                                        title="Mật khảu phải có ít nhất 8 ký tự" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="repass" id="repass" class="form-control" placeholder="Nhập lại mật khẩu (*)" pattern=".{8,}"
                                        title="Mật khẩu phải có ít nhất 8 ký tự" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="address" class="form-control" pattern="/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/" placeholder="Địa chỉ Email (*)" required>
                                </div>
                                <div class="form-group">
                                    <select name="role" id="" class="form-control w-100 mb-2 p-3 pt-1 text-secondary" required>
                                        <option value="">Vai trò của bạn là ?</option>
                                        <option value="2">Nhà tuyển dụng</option>
                                        <option value="3">Ứng cử viên</option>
                                    </select>
                                </div>
                                <br><br>
                                <button type="submit" name="submit" class="btn mt-3">Đăng kí</button>
                            </form>
                        </div>
                        <!-- <div class="end">
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
                        </div> -->
                        <div class="end mt-3">
                            <a href="index.php?act=signin"> Đăng nhập</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>// Lấy các trường input
        var passInput = document.getElementById('pass');
        var repassInput = document.getElementById('repass');
        var message = document.getElementById('message');

        // Thêm sự kiện change cho cả hai trường
        passInput.addEventListener('input', validatePassword);
        repassInput.addEventListener('input', validatePassword);

        function validatePassword() {
            // Kiểm tra xem giá trị của cả hai trường có giống nhau không
            if (passInput.value === repassInput.value) {
                message.innerHTML = 'Mật khẩu trùng khớp';
                message.style.color = 'green';
            } else {
                message.innerHTML = 'Mật khẩu không trùng khớp';
                message.style.color = 'red';
            }
        }
    </script>