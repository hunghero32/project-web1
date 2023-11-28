<div class="page-title-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="title-item">
                    <h2>Quản lý</h2>
                    <ul>
                        <li>
                            <img data-cfsrc="assets/img/home-three/title-img-two.png" alt="Image" style="display:none;visibility:hidden;"><noscript><img src="assets/img/home-three/title-img-two.png" alt="Image"></noscript>
                            <a href="index.php">Home</a>
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
            <div class="col-lg-4">
                <div class="profile-item">
                    <img data-cfsrc="<?= checkUserAvaNull($avatar) ?>" alt="Dashboard" style="display:none;visibility:hidden;width:25%"><noscript><img src="<?= checkUserAvaNull($avatar) ?>" alt="Dashboard"></noscript>
                    <h2><?= $name ?></h2>
                    <span>Hello Hello</span>
                </div>
                <div class="nav flex-column nav-pills" id="v-pills-tab<?= (isset($_GET['id'])) ? 'active' : '' ?>" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                        <i class="bx bx-user"></i>
                        Thông tin cá nhân
                    </a>
                    <a class="nav-link" id="v-pills-messages-tab<?= (isset($_GET['id'])) ? 'active' : '' ?>"  data-bs-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                        <div class="profile-list">
                            <i class="bx bxs-inbox"></i>
                            Danh sách ứng tuyển
                        </div>
                    </a>
                    <a href="index.php?act=infoCv&id=<?= $id ?>">
                        <div class="profile-list">
                            <i class="bx bx-note"></i>
                            Thông tin của tôi
                        </div>
                    </a>
                    <a href="index.php?act=signout">
                        <div class="profile-list">
                            <i class="bx bx-log-out"></i>
                            Đăng xuất
                        </div>
                    </a>
                </div>
            </div>
            <?php include 'updateCV.php' ?>
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