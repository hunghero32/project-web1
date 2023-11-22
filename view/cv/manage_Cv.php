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
                    <img data-cfsrc="assets/img/<?= $img ?>" alt="Dashboard" style="display:none;visibility:hidden;"><noscript><img src="assets/img/dashboard1.jpg" alt="Dashboard"></noscript>
                    <h2><?=$name ?></h2>
                    <span>Hello Hello</span>
                </div>
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                        <i class="bx bx-user"></i>
                        Thông tin cá nhân
                    </a>
                    <a class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
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
            <div class="col-lg-8">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <div class="profile-content">
                            <form>
                                <div class="profile-content-inner">
                                    <h2>Thông tin cơ bản</h2>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Tên của bạn:</label>
                                                <input type="text" class="form-control" placeholder="<?=$name ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Email của bạn:</label>
                                                <input type="email" class="form-control" placeholder="<?=$email ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Số Điện Thoại:</label>
                                                <input type="text" class="form-control" placeholder="<?=$phone ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Cover Picture</label>
                                                <input type="file">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-content-inner">
                                    <h2>Education</h2>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Title:</label>
                                                <input type="text" class="form-control" placeholder="Under Graduate">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Degree:</label>
                                                <input type="text" class="form-control" placeholder="BSC in Computer Science">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Institute:</label>
                                                <input type="text" class="form-control" placeholder="Jecto University & Technology, UK">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Year:</label>
                                                <input type="text" class="form-control" placeholder="2015 - 2020">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-content-inner">
                                    <h2>Social Links</h2>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Facebook:</label>
                                                <input type="text" class="form-control" placeholder="https://www.facebook.com/">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Twitter:</label>
                                                <input type="text" class="form-control" placeholder="https://www.twitter.com/">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Instagram:</label>
                                                <input type="text" class="form-control" placeholder="https://www.instagram.com/">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Linkedin:</label>
                                                <input type="text" class="form-control" placeholder="https://www.linkedin.com/">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn dashboard-btn">Save Your Information</button>
                            </form>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                        <?php foreach ($cv as $key) : ?>

                            <?php
                            // var_dump($corp);
                            extract($key); 
                            $edit_cv = "index.php?act=infoCv&id=" . $iduser;
                            $delete_cv = "index.php?act=infoCv&id=" . $iduser;?>
                            <div class='employer-item position-relative'>
                                <a href="index.php?act=infoCv&id=<?= $iduser ?>">
                                    <img data-cfsrc='assets/img/home-one/job1.png' alt='Employer' style='display:none;visibility:hidden;'><noscript><img src='assets/img/home-one/job1.png' alt='Employer'></noscript>
                                    <h3><?= $title ?></h3>
                                    <ul>
                                        <li>
                                            <i class='flaticon-send'></i>
                                            <?= $address ?>
                                        </li>
                                        <li><?= $date ?></li>
                                    </ul>
                                    <p><?= $major ?>
                                    </p>
                                    <!-- <span class='span-one'>Accounting</span> -->
                                    <div class="d-flex justify-content-end">

                                        <a href="<?= $edit_cv ?>" class="btn btn-info me-3 text-white"  >Sửa</a>
                                        <button onclick="confirmDelete('<?= $delete_cv ?>')"  class="btn btn-danger me-3 text-white"  >Xóa</button>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach ?>
                        <div class="pagination-area">
                            <ul class="pagination">
                                <li><a href="#" id="prev">Prev</a></li>
                                <?php
                                for ($i = 1; $i <= $totalPages; $i++) {
                                    echo "<li><a href='#' class='page' data-page='$i'>$i</a></li>";
                                }
                                ?>
                                <li><a href="#" id="next">Next</a></li>
                            </ul>
                        </div>
                        
                    </div>
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