<div class="page-title-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="title-item">
                        <h2>Thêm bài tuyển dụng</h2>
                        <ul>
                            <li>
                                <img data-cfsrc="assets/img/home-three/title-img-two.png" alt="Image"
                                    style="display:none;visibility:hidden;"><noscript><img
                                        src="assets/img/home-three/title-img-two.png" alt="Image"></noscript>
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


    <div class="post-job-area ptb-100">
        <div class="container">
            <form action="index.php?act=post_recr" method="POST" enctype="multipart/form-data">
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
                                <input type="text" name="title" class="form-control" placeholder="Tuyển lập trình viên Backend ..." title="Tiêu đề không được để trống !" required>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>
                                    Số lượng CV :
                                </label>
                                <input type="number" name="totalCV" class="form-control" placeholder=" Cần 23 CV" title="Số lượng cv không được để trống !" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>
                                    Ảnh :
                                </label>
                                <input type="file"  name="img" class="form-control py-3" title="Ảnh không được để trống !" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>
                                    Ngôn ngữ :
                                </label>
                                <input type="text" class="form-control" name="skill" placeholder="Web Developer" title="Ngôn ngữ không được để trống !" requiredd>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>
                                    Kiểu tuyển dụng :
                                </label>
                                <select name="type" title="Kiểu không được để trống !" required>
                                    <option value="2">Full Time</option>
                                    <option value="1">Part Time</option>
                                    <!-- <option>Internship</option>
                                    <option>Freelancing</option> -->
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>
                                    Kĩ năng :
                                </label>
                                <input type="text" class="form-control" name="major" placeholder="Thành thạo tiếng anh ..." title="Kĩ năng không được để trống !" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label >
                                    Lương :
                                </label>
                                <input type="number" class="form-control" name="salary" placeholder="1000000" title="Lương không được để trống !" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>
                                    Kinh nghiệm :
                                </label>
                                <select name="exp" required>
                                    <option value="không kinh nghiệm" >0 - 1</option>
                                    <option value="Kinh nghiệm 1 - 2 năm" >1 - 2</option>
                                    <option value="Kinh nghiệm 2 - 3 năm " >2 - 3</option>
                                    <option value="Kinh nghiệm trên 5 năm " >Trên 5</option>
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
                                    Cấp bậc / trình độ :
                                </label>
                                <select name="level" required>
                                    <option value="Trung cấp">Trung cấp</option>
                                    <option value="Cao đẳng" >Cao đẳng</option>
                                    <option value="Đại học ">Đại học</option>
                                    <option value="Thạc sĩ ">Thạc sĩ</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <button type="submit" name="add_recr" class="btn">Thêm </button>
                </div>
            </form>
        </div>
    </div>