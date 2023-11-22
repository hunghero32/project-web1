<div class="page-title-area">
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
                <form action="index.php?act=user_cv" method="POST" enctype="multipart/form-data">
                    <div class="post-item">
                        <!-- <div class="section-title">
                            <h2>Post A Job</h2>
                            <p>Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Eveniet placeat totam
                                laboriosam ut labore aliquid veniam repellendus
                                similique? Id molestiae pariatur molestias,
                                alias quia sint autem nemo architecto facere
                                asperiores.</p>
                        </div> -->
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
    </div>
    