<div class="tab-pane fade " id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
    <form action="" class="mb-5 d-flex justify-content-between align-items-center">
        <div class="d-flex align-items-center">
            <input type="search" name="kym" id="" class="p-2 px-5 rounded-2 " placeholder="Tìm kiếm ...">
            <button class="btn btn-info  p-2" name="submit"><i class="fa-solid fa-magnifying-glass text-white fs-5"></i></button>
        </div>
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link " id="v-pills-post-tab" data-bs-toggle="pill" href="#v-pills-post" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                <div class="profile-list">
                    <i class="bx bxs-inbox"></i>
                    Thêm Bài tuyển dụng
                </div>
            </a>
        </div>

    </form>
    <?php foreach ($valu_racr as $key) : ?>

        <?php
        // var_dump($valu_racr);
        extract($key);
        $edit_recr = "index.php?act=edit_recr&id=" . $id;
        $delete_recr = "index.php?act=delete_recr&id=" . $id; ?>
        <?php $link_recr = "index.php?act=info_recr&id=" . $id; ?>
        <div class='employer-item position-relative'>

            <img data-cfsrc='assets/img/home-one/job1.png' alt='Employer' style='display:none;visibility:hidden;'><noscript><img src='assets/img/home-one/job1.png' alt='Employer'></noscript>
            <h3><a href='<?= $link_recr ?>' class="text-dark"><?= $job ?></a></h3>
            <ul>
                <li>
                    <i class='flaticon-send'></i>
                    <?= $address ?>
                </li>
                <li><?= $start ?></li>
            </ul>
            <p><?= $name ?>
            </p>
            <!-- <span class='span-one'>Accounting</span> -->
            <div class="d-flex justify-content-end">

                <a href="<?= $edit_recr ?>" class="btn btn-info me-3 text-white">Sửa</a>
                <button onclick="confirmDelete('<?= $delete_recr ?>')" class="btn btn-danger me-3 text-white">Xóa</button>
            </div>

        </div>
    <?php endforeach ?>
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