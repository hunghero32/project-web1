<div class="tab-pane fade <?= (isset($_GET['idEdit'])) ? 'show active' : '' ?>" id="v-pills-edit" role="tabpanel" aria-labelledby="v-pills-edit-tab">
    <div class="post-job-area ptb-100 pt-0">
        <div class="container">
            <form action="index.php?act=up_recr" method="POST" onsubmit="return validateForm()">
                <div class="post-item">
                    <div class="section-title">
                        <h2>Sửa bài tuyển dụng</h2>

                    </div>
                    <input type="hidden" value="<?= $value_id['id'] ?>" name="id">
                    <input type="hidden" value="<?= $value_id['idcorp'] ?>" name="idcorp">


                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>
                                    Tiêu đề :
                                </label>

                                <input name="job" value="<?= $value_id['job'] ?>" type="text" class="form-control" id="searchskill" placeholder="<?= checkfind("", isset($value_id['job']) ? $value_id['job'] : 'Công việc')  ?> &darr;">
                                <div class="dropdown-content " id="dropdownskill" style="width: 27%;">
                                    <div class="dropdown-item">Không chọn</div>
                                    <?php foreach ($datafilter as $v) {

                                        if ($v['job'] !== '') { ?>
                                            <div class="dropdown-item"><?= $v['job'] ?></div>
                                        <?php } ?>
                                    <?php } ?>
                                    <div class="dropdown-item">Khác</div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>
                                    Ngôn ngữ :
                                </label>
                                <input type="text" value="<?= $value_id['progLang'] ?>" class="form-control" name="progLang" placeholder="Web Developer" title="Ngôn ngữ không được để trống !" requiredd>
                            </div>

                            <div class="form-group">
                                <label>
                                    Kiểu tuyển dụng :
                                </label>

                                <select name="type" title="Kiểu không được để trống !" required>
                                    <?php foreach ($datafilter as $v) { ?>
                                        <?php
                                        if (isset($v['typeRecr']) && $v['typeRecr'] != "") { ?>
                                            <option value="<?= $v['typeRecr'] ?>" <?= $value_id['type'] ==  $v['typeRecr'] ? "selected" : "" ?>> <?= $v['typeRecr'] ?></option>
                                    <?php }
                                    } ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>
                                    Lương :
                                </label>
                                <select name="salary" title="Lương không được để trống !" required>
                                    <?php foreach ($datafilter as $v) { ?>
                                        <?php
                                        if (isset($v['salary']) && $v['salary'] != "") { ?>
                                            <option value="<?= $v['salary'] ?>" <?= $value_id['salary'] == $v['salary'] ? "selected" : "" ?>> <?= $v['salary'] ?></option>
                                    <?php }
                                    } ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>
                                    Yêu cầu công việc :
                                </label>
                                <textarea name="request" class="form-control" cols="30" rows="10" style="resize: vertical;height: 100px;" title="Mô tả không được để trống !" required> <?= $value_id['request'] ?></textarea>
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
                                            <option value="<?= $v['exp'] ?>" <?= $value_id['exp'] == $v['exp'] ? "selected" : "" ?>> <?= $v['exp'] ?></option>
                                    <?php }
                                    } ?>

                                </select>
                            </div>

                            <div class="form-group">
                                <label>
                                    Cấp bậc / trình độ :
                                </label>

                                <select name="level" required>
                                    <?php foreach ($datafilter as $v) { ?>
                                        <?php
                                        if (isset($v['level']) && $v['level'] != "") { ?>
                                            <option value="<?= $v['level'] ?>" <?= $value_id['level'] == $v['level'] ? "selected" : "" ?>> <?= $v['level'] ?></option>
                                    <?php }
                                    } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="expiryDate">Ngày hết hạn :</label>
                                <input type="date" class="form-control" name="end" id="expiryDate" oninput="checkExpiryDate(this)" value="<?= $value_id['end'] ?>">
                                <p id="errorMessage" class="text-danger fst-italic"></p>
                            </div>
                            <div class="form-group">
                                <label>
                                    Mô tả công việc :
                                </label>
                                <textarea name="description" class="form-control" cols="30" rows="10" style="resize: vertical;height: 100px;" title="Mô tả không được để trống !" required><?= $value_id['description'] ?></textarea>
                            </div>

                        </div>
                    </div>
                    <button type="submit" name="submit" class="btn" onclick="list_recr()">Cập nhật </button>
                </div>
            </form>
        </div>
    </div>
</div>