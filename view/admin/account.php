<div class="container-fluid py-2">
    <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Tổng Số Tài Khoản</p>
                                <h5 class="font-weight-bolder mb-0">
                                    <?= $totalUsers ?>
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-success shadow text-center border-radius-md">
                                <i class="fa-solid fa-users" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <a href="index.php?act=listcv">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Tổng ứng Viên</p>
                                <h5 class="font-weight-bolder mb-0">
                                    <?= $user ?>
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-success shadow text-center border-radius-md">
                                <i class="fa-solid fa-user-tie" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div></a>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <a href="index.php?act=listcorp">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Tổng Doanh Nghiệp</p>
                                    <h5 class="font-weight-bolder mb-0">
                                        <?= $corp ?>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-success shadow text-center border-radius-md">
                                    <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <a href="index.php?act=listadmin">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Tổng Admin</p>
                                <h5 class="font-weight-bolder mb-0">
                                    <?= $admin ?>
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-success shadow text-center border-radius-md">
                                <i class="fa-solid fa-user-secret" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div></a>
        </div>
    </div>
</div>
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0" id="myTable">
                            <thead>
                                <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ">STT</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tên Đăng Nhập</th>
                                    <th class="text-left text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tên Đầy Đủ</th>
                                    <th class="text-left text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                                    <th class="text-left text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Số Điện Thoại</th>
                                    <th class="text-left text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Vai Trò</th>
                                    <th class="text-left text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tùy Chọn</th>

                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($listuser as $user) :; ?>
                                    <?php if ($user['role'] == 1) {
                                        $user['role'] = 'Admin';
                                        $delete = '';
                                        $link = 'index.php?act=listadmin';
                                    } elseif ($user['role'] == 2) {
                                        $user['role'] = 'Ứng viên';
                                        $link = 'index.php?act=infoCv&id=' . $user['id'];
                                        $delete = '<span type="button" class="badge bg-gradient-danger">Xóa</span>';
                                    } elseif ($user['role'] == 3) {
                                        $user['role'] = 'Doanh Nghiệp';
                                        $link = 'index.php?act=infoCorp&id=' . $user['id'];
                                        $delete = '<span type="button" class="badge bg-gradient-danger">Xóa</span>';
                                    } ?>
                                    <tr>
                                        <td class="align-middle text-center text-sm"></td>
                                        <td>
                                            <h6 class="mb-0 text-sm"><?= $user['username'] ?></h6>
                                        </td>
                                        <td class="align-middle text-left text-sm">
                                            <h6 class="mb-0 text-sm "><?= $user['name'] ?></h6>
                                        </td>
                                        <td class="align-middle text-left"><a href="mailto:<?= $user['email'] ?>">
                                                <span class="badge badge-sm  text-secondary"><?= $user['email'] ?></span></a>
                                        </td>
                                        <td class="align-middle text-left"><a href="tel:<?= $user['phone'] ?>">
                                                <span class="badge badge-sm  text-secondary"><?= $user['phone'] ?></span></a>
                                        </td>
                                        <td class="align-middle text-left">
                                            <span class="badge badge-sm  text-secondary"><?= $user['role'] ?></span>
                                        </td>
                                        <td class="align-middle text-left text-sm">
                                            <a href="<?= $link ?>" target="_blank"><span type="button" class="badge badge-sm bg-gradient-dark">Xem Chi Tiết</span></a>
                                            <a href="index.php?act=delete&id=<?= $user['id'] ?>"><?= $delete ?></a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</main>