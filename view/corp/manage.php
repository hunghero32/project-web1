<?php extract($valu_racr) ?>
<div class="page-title-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="title-item">
                    <h2>Quản lý</h2>
                    <ul>
                        <li>
                            <img data-cfsrc="assets/img/home-three/title-img-two.png" alt="Image" style="display:none;visibility:hidden;"><noscript><img src="assets/img/home-three/title-img-two.png" alt="Image"></noscript>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <span>/</span>
                        </li>
                        <li>
                            Quản lý
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="dashboard-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="d-flex w-100 align-items-center flex-column">
                    <div style="width: 100px; height: 100px" class="overflow-hidden rounded-circle mb-3 d-flex justify-content-center align-items-center">
                        <img src='<?= checkUserAvaNull($avatar) ?>' alt='user ' class=''>
                    </div>
                    <h3 class="mb-4 w-100 text-center"><?= $name ?></h3>
                </div>

                <!-- <span>Web developer</span> -->
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link <?= (!isset($_GET['id'])) ? 'active' : '' ?> " id="v-pills-home-tab" data-bs-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                        <i class="bx bx-user"></i>
                        Thông tin
                    </a>
                    <a class="nav-link" id="v-pills-messages-tab <?= (isset($_GET['id'])) ? 'active' : '' ?> " data-bs-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                        <div class="profile-list">
                            <i class="bx bxs-inbox"></i>
                            Danh sách bài tuyển dụng
                        </div>
                    </a>
                    <a href="single-resume.html">
                        <div class="profile-list">
                            <i class="bx bx-note"></i>
                            My Resume
                        </div>
                    </a>
                    <a href="login.html">
                        <div class="profile-list">
                            <i class="bx bx-log-out"></i>
                            Logout
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-9">

                <div class="tab-content" id="v-pills-tabContent">

                    <?php
                    include "manageRecr/profile.php";
                    include "manageRecr/postRecr.php";
                    include "manageRecr/editRecr.php";
                    include "manageRecr/listRecr.php";
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function confirmDelete(deleteUrl) {
        if (confirm('Bạn có muốn XÓA không ?')) {
            window.location.href = deleteUrl; // Chuyển hướng đến URL xóa nếu bạn đồng ý
        }
    }
</script>