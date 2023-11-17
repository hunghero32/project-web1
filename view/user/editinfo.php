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
                    <script type="text/javascript" src="../../../ajax.cloudflare.com/cdn-cgi/scripts/04b3eb47/cloudflare-static/mirage2.min.js"></script>
                    <img data-cfsrc="assets/img/resgister-bg.jpg" alt="User" style="display:none;visibility:hidden; height: 100% ; position: fixed; top : 0; bottom: 0; "><noscript><img src="assets/img/resgister-bg.jpg" alt="User" class="h-100"></noscript>
                </div>
            </div>
            <div class="col-lg-6 p-0 position-relative">
                <div class="user-content">
                    <div class="top">
                        <h2>Sửa Thông tin</h2>
                        <?php if (isset($thongbao) && $thongbao != '') { ?>
                            <div class="row">
                                <p style="color: red;"><?= $thongbao ?></p>
                            </div>
                        <?php } ?>
                        <form action="index.php?act=editinfo" method="post"  enctype="multipart/form-data">

                            <div class="form-group">
                                <h3>Tên của bạn : <?= $name ?> </h3>
                                <input type="text" name="name" class="form-control" placeholder="Tên của bạn  (*)" pattern=".{8,}" title="Tên phải có ít nhất 8 ký tự" required>
                            </div>
                            <div class="mb-3">
                                <input type="file" name="img" id="img" class="form-control" pattern=".{5,}" title="File ảnh không được để trống" required>
                            </div>
                            <div class="form-group">
                                <h3>Email của bạn : <?= $email ?></h3>
                                <input type="email" name="email" class="form-control"  pattern="/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/" placeholder="Địa chỉ Email (*)" required>
                            </div>
                            <div class="form-group">
                                <h3>Số điện thoại : <?= $phone ?></h3>
                                <input type="text" name="phone" class="form-control" pattern="[0-9]{10,12}" placeholder="Số điện thoại (*)" 
                                title="Số điện thoại phải có ít nhất 10 ký tự"
                                required>
                            </div>

                            <div class="form-group">
                                <h3>Địa chỉ của bạn : <?= $address ?></h3>
                                <input type="text" name="adress" class="form-control" placeholder="Địa chỉ (*)" pattern=".{1,}" title="Địa chỉ không được để trống" required>
                            </div>
                            <br><br>
                            <button type="submit" name="editinfo" class="btn mt-3">Cập Nhật</button>
                        </form>
                        <a href="index.php"> Trang chủ</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>