<div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
    <form action="index.php?act=manage_Cv" method="post" class="mb-5 ">
        <div class="d-flex align-items-center">
            <input type="search" name="kym" class="p-2 px-5 rounded-start border border-secondary me-3" placeholder="Tìm kiếm ..." style="border: 1px solid rgba(53, 53, 53, 0.1);">
            <select name="status"  class="w-25">
                <option value="">Tất cả</option>
                <option value="Chờ xét duyệt">Nộp thành công</option>
                <option value="Đã xét duyệt">Đã duyệt thàng công</option>
            </select>
            <button class="btn btn-info rounded-end p-2 mx-3 text-white" name="submit" style="background-color: var(--secondary);">Tìm kiếm</button>
        </div>

    </form>
    <?php if (empty($list_apply_recr)) { ?>
        <div class=" my-3">
            <div class="employer-item text-center">
                Không có dữ liệu tìm thấy !
            </div>
        </div>
        <?php } else {
     foreach ($list_apply_recr as $key) { ?>

        <?php
        // var_dump($valu_racr);
        extract($key);
        $edit_recr = "index.php?act=edit_recr&idEdit=" . $id;
        $withdrawCv = "index.php?act=withdrawCv&id=" . $idinfo . "&idrec=" . $id;
        $link_recr = "index.php?act=info_recr&id=" . $id;
        ?>
        <div class='employer-item position-relative  <?= $status == "Rút CV" ? 'd-none' : '' ?> ' style="padding-right: 10px;">

            <img data-cfsrc='<?= checkCorpAvaNull($avatar)  ?>' alt='Employer' style='width: 70px; height: 70px;object-fit: cover;' class="rounded-circle ">
            <h3><a href="<?= $link_recr ?>" style="color: #5f5656;"><?= $job ?></a></h3>
            <ul>
                <li>
                    <i class='flaticon-send'></i>
                    <?= $address ?>
                </li>
                <li><?= $start ?></li>
            </ul>
            <p><?= $level ?> / <?= $type ?></p>
            <p><?= $progLang ?>
            </p>
            <span class='span-two'><?= $status == 'Đã xét duyệt' ? 'Công ty đã duyệt' : $status ?> </span>



            <div class="nav  nav-pills d-flex justify-content-between" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a href="<?= $link_recr ?>" class="nav-link text-white me-3  py-2 px-3 fw-bold  bg-secondary bg-opacity-75" id="v-pills-info-tab" role="tab" style="font-size: 13px ;padding-bottom: 0;">Thông tin chi tiết </a>
                <?php if ($status == 'Chờ xét duyệt') { ?>
                    <button onclick="withdrawCv('<?= $withdrawCv ?>')" class="btn bg-opacity-25  text-white btn-secon" style="background-color: var(--secondary);">Rút hồ sơ </button>
                <?php } ?>
            </div>

        </div>
    <?php }} ?>
</div>
<script>
    function withdrawCv(d) {
        if (confirm('Bạn có muốn Rút CV không ?')) {
            window.location.href = d;
        }
    }
</script>