<div class="container-fluid py-2">
    <div class="row">
        <div class="col-xl-5 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Bài Tuyển Dụng</p>
                                <h5 class="font-weight-bolder mb-0">
                                    Số Bài :
                                    <strong class="text-danger font-weight-bold mb-0"> <?= $totalRecr?> </strong> <span class=" text-sm font-weight-bolder">Bài Tuyển</span>
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
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Doanh Nghiệp</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">JOB</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Mức Lương</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Bắt Đầu</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kết Thúc</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Số Lượng Đơn</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tùy Chọn</th>

                                        <th class="text-secondary opacity-7"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($listrecr as $recr) : ?>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-3 py-1"><?= $recr['id'] ?>
                                                </div>
                                            </td>
                                            <td>
                                                <h6 class="mb-0 text-sm"><?= $recr['userName'] ?></h6>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <h6 class="mb-0 text-sm"><?= $recr['job'] ?></h6>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <h6 class="mb-0 text-sm"><?= $recr['salary'] ?></h6>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="badge badge-sm bg-gradient-success"><?= $recr['start'] ?></span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="badge badge-sm bg-gradient-success"><?= $recr['end'] ?></span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <h6 class="badge badge-sm bg-gradient-success">Tổng :<?= $recr['job'] ?></h6><br>
                                                <span class="text-xs text-danger text-secondary mb-0">Hủy<?= $recr['start'] ?></span> |
                                                <span class="text-xs text-success text-secondary mb-0">Nhận<?= $recr['end'] ?></span>
                                            </td>
                                            <td class="align-middle text-center text-sm" >
                                                <a href="index.php?act=info_recr&id=<?= $recr['id'] ?>"target="_blank"><span type="button" class="badge badge-sm bg-gradient-secondary">Xem Chi Tiết</span></a>
                                                <a href="index.php?act=recr_delete&id=<?= $recr['id'] ?>"><span type="button" class="badge bg-gradient-danger">Xóa</span></a>
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