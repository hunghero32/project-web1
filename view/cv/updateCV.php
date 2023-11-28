<!-- <div class="page-title-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="title-item">
                        <h2>Sửa CV</h2>
                        <ul>
                            <li>
                                <img data-cfsrc="assets/img/home-three/title-img-two.png" alt="Image"
                                    style="display:none;visibility:hidden;"><noscript><img
                                        src="assets/img/home-three/title-img-two.png" alt="Image"></noscript>
                                <a href="index.php">Trang chủ</a>
                            </li>
                            <li>
                                <span>/</span>
                            </li>
                            <li>
                            Sửa CV
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="post-job-area ptb-100">
            <div class="container">
             <form action="index.php?act=update-cv" method="POST" enctype="multipart/form-data"> Ver 1.0 
                <form action="index.php?act=user_cv&id=<?= $id ?>" method="POST" enctype="multipart/form-data"> 

                    <div class="post-item">
                         <div class="section-title">
                            <h2>Post A Job</h2>
                            <p>Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Eveniet placeat totam
                                laboriosam ut labore aliquid veniam repellendus
                                similique? Id molestiae pariatur molestias,
                                alias quia sint autem nemo architecto facere
                                asperiores.</p>
                        </div> 
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>
                                        Tên Của bạn:
                                    </label>
                                    <input type="text" name="name" class="form-control"
                                        placeholder="<?= $name ?>">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>
                                        Email:
                                    </label>
                                    <input type="email" name="email" class="form-control"
                                        placeholder="<?= $email ?>">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>
                                        Phone:
                                    </label>
                                    <input type="text" name="phone" class="form-control"
                                        placeholder="<?= $phone ?>">
                                </div>
                            </div>
                             <div class="col-lg-6">
                                <div class="form-group">
                                    <label>
                                        Job Title:
                                    </label>
                                    <input type="text" class="form-control"
                                        placeholder="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>
                                        Job Type:
                                    </label>
                                    <select>
                                        <option>Full Time</option>
                                        <option>Part Time</option>
                                        <option>Internship</option>
                                        <option>Freelancing</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>
                                        Job Category:
                                    </label>
                                    <select>
                                        <option>Digital & Creative</option>
                                        <option>Sales & Marketing</option>
                                        <option>Marketing & PR</option>
                                        <option>IT Contractor</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>
                                        Job Salary:
                                    </label>
                                    <select>
                                        <option>500$ - 1000$</option>
                                        <option>1000$ - 1500$</option>
                                        <option>1500$ - 2000$</option>
                                        <option>2000$ - 2500$</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>
                                        Job Experience:
                                    </label>
                                    <select>
                                        <option>0 - 1</option>
                                        <option>1 - 2</option>
                                        <option>2 - 3</option>
                                        <option>3 - 4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>
                                        Job Qualification:
                                    </label>
                                    <select>
                                        <option>Certificate</option>
                                        <option>Diploma</option>
                                        <option>Bachelor Degree</option>
                                        <option>Master Degree</option>
                                        <option>No Need</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>
                                        Job Level:
                                    </label>
                                    <select>
                                        <option>Senior</option>
                                        <option>Junior</option>
                                        <option>Manager</option>
                                        <option>Lead</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn">Post A Job</button>
                    </div>
                </form>
            </div>
    </div> -->

<div class="col-lg-8">
    <div class="tab-content" id="v-pills-tabContent">
        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
            <div class="profile-content">
                <form action="index.php?act=manage_Cv" method="POST" enctype="multipart/form-data">
                    <div class="profile-content-inner">
                        <h2>Thông tin cơ bản</h2>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Tên của bạn:</label>
                                    <input type="text" class="form-control" placeholder="<?= $name ?>">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Email của bạn:</label>
                                    <input type="email" class="form-control" placeholder="<?= $email ?>">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Số Điện Thoại:</label>
                                    <input type="text" class="form-control" placeholder="<?= $phone ?>">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Địa Chỉ :</label>
                                    <input type="text" class="form-control" placeholder="<?= $address ?>">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Ngày Sinh :</label>
                                    <input type="date" class="form-control" placeholder="<?= $birth ?>">
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
                        <h2>Lựa Chọn </h2>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Giới tính :</label>
                                    <br>
                                    <select name="cv_gender" class="form-control">
                                        <?php foreach ($datafilter as $cvData) {
                                            extract($cvData);
                                            if ($gender !== '') { ?>
                                                <option value="<?= $gender ?>" <?= ($gender == $gender) ? 'selected' : '' ?>><?= $gender ?></option>
                                        <?php }
                                        } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Mức lương mong muốn :<?php echo $salary ?></label>
                                    <br>
                                    <select name="cv_gender" class="form-control">
                                        <?php foreach ($datafilter as $cvData) {
                                            extract($cvData);
                                            if ($salary !== '') { ?>
                                                <option value="<?= $salary ?>" <?= ($salary == $salary) ? 'selected' : '' ?>><?= $salary ?></option>
                                        <?php }
                                        } ?>
                                    </select>
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
                    <button type="submit" class="btn dashboard-btn">Cập Nhật Thông Tin</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
    <?php foreach ($cv as $cv) : ?>

        <?php
        var_dump($cv);
        extract($cv);
        $edit_cv = "index.php?act=infoCv&id=" . $iduser;
        $delete_cv = "index.php?act=infoCv&id=" . $iduser; ?>
        // <div class='employer-item position-relative'>
            // <a href="index.php?act=infoCv&id=<?= $iduser ?>">
                // <img data-cfsrc='assets/img/home-one/job1.png' alt='Employer' style='display:none;visibility:hidden;'><noscript><img src='assets/img/home-one/job1.png' alt='Employer'></noscript>
                // <h3><?= $title ?></h3>
                // <ul>
                    // <li>
                        // <i class='flaticon-send'></i>
                        // <?= $address ?>
                        // </li>
                    // <li><?= $date ?></li>
                    // </ul>
                // <p><?= $major ?>
                    // </p>
                // <span class='span-one'>Accounting</span>
                // <div class="d-flex justify-content-end">

                    // <a href="<?= $edit_cv ?>" class="btn btn-info me-3 text-white">Sửa</a>
                    // <button onclick="confirmDelete('<?= $delete_cv ?>')" class="btn btn-danger me-3 text-white">Xóa</button>
                    // </div>
                // </a>
            // </div>
        // <?php endforeach ?>
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
</div> -->