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
                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                <i class="fa-solid fa-users" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
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
                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                <i class="fa-solid fa-user-tie" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
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
                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tên Đăng Nhập</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tên Đầy Đủ</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Số Điện Thoại</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Vai Trò</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tùy Chọn</th>

                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($listuser as $user) :; ?>
                                    <?php if ($user['role'] == 1) {
                                        $user['role'] = 'Admin';
                                        $link = '';
                                    } elseif ($user['role'] == 2) {
                                        $user['role'] = 'Ứng viên';
                                        $link = 'index.php?act=infoCv&id=' . $user['id'];
                                    } elseif ($user['role'] == 3) {
                                        $user['role'] = 'Doanh Nghiệp';
                                        $link = 'index.php?act=infoCorp&id=' . $user['id'];
                                    } ?>
                                    <tr>
                                        <td>
                                            <h6 class="mb-0 text-sm"><?= $user['username'] ?></h6>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <h6 class="mb-0 text-sm "><?= $user['name'] ?></h6>
                                        </td>
                                        <td class="align-middle text-center"><a href="mailto:<?= $user['email'] ?>">
                                                <span class="badge badge-sm  text-secondary"><?= $user['email'] ?></span></a>
                                        </td>
                                        <td class="align-middle text-center"><a href="tel:<?= $user['phone'] ?>">
                                                <span class="badge badge-sm  text-secondary"><?= $user['phone'] ?></span></a>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="badge badge-sm  bg-gradient-success"><?= $user['role'] ?></span>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <a href="<?= $link ?>" target="_blank"><span type="button" class="badge badge-sm bg-gradient-dark">Xem Chi Tiết</span></a>
                                            <a href="index.php?act=delete&id=<?= $user['id'] ?>"><span type="button" class="badge bg-gradient-danger">Xóa</span></a>
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