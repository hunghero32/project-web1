<!-- <div class="page-title-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="title-item">
                    <h2>Thêm bài tuyển dụng</h2>
                    <ul>
                        <li>
                            <img data-cfsrc="assets/img/home-three/title-img-two.png" alt="Image" style="display:none;visibility:hidden;"><noscript><img src="assets/img/home-three/title-img-two.png" alt="Image"></noscript>
                            <a href="index.html">Trang chủ</a>
                        </li>
                        <li>
                            <span>/</span>
                        </li>
                        <li>
                            Thêm bài tuyển dụng
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
 -->

<div class="post-job-area ptb-100">
    <div class="container">
        <form action="index.php?act=post_recr" method="POST">
            <div class="post-item">
                <div class="section-title">
                    <h2>Thêm bài tuyển dụng</h2>

                </div>
                <div class="d-flex">
                    <a href="index.php?act=manage_recr" class=" btn btn-info mb-4 p-2">Danh sách tuyển dụng</a>
                    <span class=""></span>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>
                                Tiêu đề :
                            </label>
                            <input type="text" name="job" class="form-control" placeholder="Tuyển lập trình viên Backend ..." title="Tiêu đề không được để trống !" required>
                        </div>
                    </div>


                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>
                                Ngôn ngữ :
                            </label>
                            <input type="text" class="form-control" name="progLang" placeholder="Web Developer" title="Ngôn ngữ không được để trống !" requiredd>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>
                                Kiểu tuyển dụng :
                            </label>
                            <select name="type" title="Kiểu không được để trống !" required>
                                <?php foreach ($data as $v) { ?>
                                    <?php extract($v);
                                    if (isset($typeRecr) && $typeRecr != "") { ?>
                                        <option value="<?= $typeRecr ?>"> <?= $typeRecr ?></option>
                                <?php }
                                } ?>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>
                                Lương :
                            </label>
                            <select name="salary" title="Lương không được để trống !" required>
                                <?php foreach ($data as $v) { ?>
                                    <?php extract($v);
                                    if (isset($salary) && $salary != "") { ?>
                                        <option value="<?= $salary ?>"> <?= $salary ?></option>
                                <?php }
                                } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>
                                Kinh nghiệm :
                            </label>
                            <select name="exp" required>
                                <?php foreach ($data as $v) { ?>
                                    <?php extract($v);
                                    if (isset($exp) && $exp != "") { ?>
                                        <option value="<?= $exp ?>"> <?= $exp ?></option>
                                <?php }
                                } ?>

                            </select>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>
                                Mô tả công việc :
                            </label>
                            <textarea name="description" class="form-control" cols="30" rows="10" style="resize: vertical;" title="Mô tả không được để trống !" required></textarea>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>
                                Yêu cầu công việc :
                            </label>
                            <textarea name="request" class="form-control" cols="30" rows="10" style="resize: vertical;" title="Mô tả không được để trống !" required></textarea>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>
                                Cấp bậc / trình độ :
                            </label>
                            <select name="level" required>
                                <?php foreach ($data as $v) { ?>
                                    <?php extract($v);
                                    if (isset($level) && $level != "") { ?>
                                        <option value="<?= $level ?>"> <?= $level ?></option>
                                <?php }
                                } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>
                                Ngày hết hạn :
                            </label>
                            <input type="date" class="form-control" name="end" required>
                        </div>
                    </div>
                </div>
                <button type="submit" name="add_recr" class="btn">Thêm </button>
            </div>
        </form>
    </div>
</div>
