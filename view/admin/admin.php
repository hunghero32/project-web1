<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <title>Admin</title>
    <!-- CSS của ứng dụng -->
    <link href="assets\css\app.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css ">

</head>

<body>
    <!-- Bắt đầu trang -->
    <div class="all">
        <div class="mnn">

            <div class="ex">
                <a href=""><i class="fa-solid fa-arrow-right-from-bracket"></i></a>
                <div class="thoat"><a href="index.php?act=signout">Thoát</a> </div>
            </div>
        </div>

        <!-- Thanh bên trái -->
        <div class="mnd">
            <div class="logo">
                <a href="index.php">
                    <img src="assets/img/logo-three.png" alt="">
                </a>
            </div>

            <ul class="menu" id="side-menu">

                <li class="chu-lon">
                    <a href="index.php?act=admin">
                        <p><i id="ic" class="fa-solid fa-house" style="font-size: 13px;"></i>TRANG CHỦ </p>
                    </a>
                </li>
                <li class="chu-lon">

                    <a href="javascript: void(0);">
                        <p><i style="font-size: 13px;" id="ic" class="fa-solid fa-users"></i> Người Dùng <i id="angne" class="fa-solid fa-angle-right"></i></p>
                    </a>
                    <ul class="chu-be" aria-expanded="false">
                        <li>
                            <a href="index.php?act=listuser"><i id="ic" class="fa-solid fa-user"></i> Cá Nhân</a>
                        </li>
                    </ul>
                    <ul class="chu-be" aria-expanded="false">
                        <li>
                            <a href="index.php?act=listcorp"><i id="ic" class="fas fa-building"></i></i> Doanh Nghiệp </a>
                        </li>
                    </ul>
                    <ul class="chu-be" aria-expanded="false">
                        <li>
                            <a href="index.php?act=listadmin"><i id="ic" class="fas fa-user-cog"></i> Quản Trị Viên </a>
                        </li>
                    </ul>
                </li>

                <li class="chu-lon">

                    <a href="javascript: void(0);">
                        <p><i style="font-size: 13px;" class="fa-solid fa-paperclip"></i> Tuyển Dụng <i id="angne" class="fa-solid fa-angle-right"></i></p>
                    </a>
                    <ul class="chu-be" aria-expanded="false">
                        <li>
                            <a href="index.php?act=listrecr"><i class="fas fa-envelope-open-text"></i> Bài Tuyển </a>
                        </li>
                    </ul>
                    <ul class="chu-be" aria-expanded="false">
                        <li>
                            <a href="index.php?act=listcv"><i id="ic" class="fa-regular fa-file"></i> Danh Sách CV </a>
                        </li>
                    </ul>
                </li>
                <li class="chu-lon">

                    <a href="javascript: void(0);">
                        <p><i style="font-size: 13px;" id="ic" class="fa-solid fa-comments"></i> Hoàn Thành <i id="angne" class="fa-solid fa-angle-right"></i></p>
                    </a>
                    <ul class="chu-be" aria-expanded="false">
                        <li>
                            <a href="index.php?act=dsbl"><i id="ic" class="fa-regular fa-file"></i>Danh Sách Đơn Đã Nộp</a>
                        </li>
                    </ul>
                </li>
                <li class="chu-lon">

                    <a href="index.php?act=thongke">
                        <p> Thống Kê  <i id="angne" class="fa-solid fa-angle-right"></i></p>
                    </a>

                </li>
            </ul>
            <!-- Kết thúc thanh bên trái -->
        </div>
    </div>
    <!-- Kết thúc wrapper -->

    <!-- JS của các vendor -->
    <script src="assets\js\vendor.min.js"></script>
    <script src="assets\js\app.min.js"></script>
</body>

</html>