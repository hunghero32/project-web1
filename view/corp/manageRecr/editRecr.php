<div class="tab-pane fade <?=(isset($_GET['idEdit'])) ? 'show active' : '' ?>" id="v-pills-edit" role="tabpanel" aria-labelledby="v-pills-edit-tab">
    <div class="post-job-area ptb-100">
        <div class="container">
            <form action="index.php?act=up_recr" method="POST" enctype="multipart/form-data">
                <div class="post-item">
                    <div class="section-title">
                        <h2>Sửa bài tuyển dụng</h2>

                    </div>
                    <input type="hidden" value="<?= $id ?>" name="id">
                    <input type="hidden" value="<?= $idcorp ?>" name="idcorp">

                    
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>
                                    Tiêu đề :
                                </label>
                                <input type="text" value="<?= $job ?>" name="job" class="form-control" placeholder="Tuyển lập trình viên Backend ..." title="Tiêu đề không được để trống !" required>
                            </div>
                        </div>


                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>
                                    Ngôn ngữ :
                                </label>
                                <input type="text" value="<?= $progLang ?>" class="form-control" name="progLang" placeholder="Web Developer" title="Ngôn ngữ không được để trống !" requiredd>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>
                                    Kiểu tuyển dụng :
                                </label>

                                <select name="type" title="Kiểu không được để trống !" required>
                                    <?php foreach ($datafilter as $v) { ?>
                                        <?php
                                        if (isset($v['typeRecr']) && $v['typeRecr'] != "") { ?>
                                            <option value="<?= $v['typeRecr'] ?>" <?= $type ==  $v['typeRecr'] ? "selected" : "" ?>> <?= $v['typeRecr'] ?></option>
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
                                    <?php foreach ($datafilter as $v) { ?>
                                        <?php
                                        if (isset($v['salary']) && $v['salary'] != "") { ?>
                                            <option value="<?= $v['salary'] ?>" <?= $salary == $v['salary'] ? '' : '' ?>> <?= $v['salary'] ?></option>
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
                                    <?php foreach ($datafilter as $v) { ?>
                                        <?php
                                        if (isset($v['exp']) && $v['exp'] != "") { ?>
                                            <option value="<?= $v['exp'] ?>" <?= $exp == $v['exp'] ? 'selected' : '' ?>> <?= $v['exp'] ?></option>
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
                                <textarea name="description" class="form-control" cols="30" rows="10" style="resize: vertical;" title="Mô tả không được để trống !" required><?= $description ?></textarea>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>
                                    Yêu cầu công việc :
                                </label>
                                <textarea name="request" class="form-control" cols="30" rows="10" style="resize: vertical;" title="Mô tả không được để trống !" required> <?= $request ?></textarea>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>
                                    Cấp bậc / trình độ :
                                </label>

                                <select name="level" required>
                                    <?php foreach ($datafilter as $v) { ?>
                                        <?php
                                        if (isset($v['level']) && $v['level'] != "") { ?>
                                            <option value="<?= $v['level'] ?>" <?= $level == $v['level'] ? 'selected' : '' ?>> <?= $v['level'] ?></option>
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
                                <input type="date" class="form-control" name="end" required value="<?= $end ?>">
                            </div>
                        </div>
                    </div>
                    <button type="submit" name="submit" class="btn">Thêm </button>
                </div>
            </form>
        </div>
    </div>
</div>