<div class="container-fluid py-2">
    <div class="row">
        <div class="col-xl-5 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Quản Trị Viên</p>
                                <h5 class="font-weight-bolder mb-0">
                                    Số Tài Khoản :
                                    <span class="text-success font-weight-bold mb-0"> <?= $userCount ?></span> <span class=" text-sm font-weight-bolder">Tài Khoản</span>
                                </h5>
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
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ">ID</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">UserName</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tên Đầy Đủ</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Số Điện Thoại</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Xóa</th>

                                        <th class="text-secondary opacity-7"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($listadmin as $user) :; ?>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-3 py-1"><?= $user['id'] ?>
                                                </div>
                                            </td>
                                            <td>
                                                <h6 class="mb-0 text-sm"><?= $user['username'] ?></h6>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <h6 class="mb-0 text-sm"><?= $user['name'] ?></h6>
                                            </td>
                                            <td class="align-middle text-center"><a href="mailto:<?= $user['email'] ?>">
                                                    <span class="badge badge-sm bg-gradient-success"><?= $user['email'] ?></span></a>
                                            </td>
                                            <td class="align-middle text-center"><a href="tel:<?= $user['phone'] ?>">
                                                    <span class="badge badge-sm bg-gradient-success"><?= $user['phone'] ?></span></a>
                                            </td>
                                            <td class="align-middle text-center text-sm"><a href="index.php?act=delete&id=<?= $user['id'] ?>">
                                                    <span type="button" class="badge bg-gradient-danger">Xóa</span></a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class=" text-sm"><a href="index.php?act=signupAdmin">
                        <button type="button" class="btn bg-gradient-info">Thêm Admin</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
</main>