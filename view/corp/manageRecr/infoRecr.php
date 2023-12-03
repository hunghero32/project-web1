<div class="tab-pane fade <?= (isset($_GET['idInfo'])) ? 'show active' : '' ?>" id="v-pills-info" role="tabpanel" aria-labelledby="v-pills-info-tab">
    <div class="details-item " id="info_recr">
        <div class="details-inner">
            <h3><?= $job ?></h3>
            <div class="details-inner d-flex flex-column flex-sm-row justify-content-between">
                <ul class="w-25">
                    <li><strong style="width: 10%">* Mức lương thỏa thuận </strong></li>
                    <li><i class="fa-solid fa-calendar me-2"></i><?= checknull($salary) ?></li>
                </ul>
                <ul class="w-25">
                    <li><strong style="width: 10%">* Địa điểm </strong></li>
                    <li><i class="fas fa-map-marker-alt me-2"></i><?= checknull($address)  ?></li>
                </ul>
                <ul class="w-25">
                    <li><strong style="width: 10%">* Ngày đăng </strong></li>
                    <li><i class="fa-solid fa-calendar-day me-2"></i><?= checknull($start) ?></li>
                </ul>
            </div>
            <div class="details-inner d-flex flex-column flex-sm-row justify-content-between mb-3 mt-4">
                <ul class="w-25">
                    <li><strong style="width: 10%">* Kinh nghiệm yêu cầu </strong></li>
                    <li><i class="fa-solid fa-calendar me-2"></i><?= checknull($exp) ?></li>
                </ul>
                <ul class="w-25">
                    <li><strong style="width: 10%">* Ngôn ngữ lập trình </strong></li>
                    <li><i class="fas fa-code me-2"></i><?= checknull($progLang); ?></li>
                </ul>
                <ul class="w-25">
                    <li><strong style="width: 10%">* Cấp độ </strong></li>
                    <li><i class="fa-solid fa-users me-2"></i><?= checknull($level); ?></li>
                </ul>
            </div>
            <hr>
            <h6 class="my-4"><i class="fa-solid fa-star-of-life"></i> Miêu tả công việc</h6>

            <ul>
                <?php
                $des_arr =  explode("\n", $description);
                // $des_arr_2 = array_filter($des_arr);
                for ($i = 0; $i < count($des_arr); $i++) {
                    echo "<li class='my-1' >- "  . $des_arr[$i] . "<li>";
                }
                ?>
            </ul>
        </div>
        <hr>
        <div class="details-inner">
            <h6 class="my-4"><i class="fa-solid fa-star-of-life"></i> Giới thiệu công ty</h6>
            <p><?= $introduce ?></p>
        </div>
        <hr>
        <div class="details-inner">
            <h6 class="my-4"><i class="fa-solid fa-star-of-life"></i> Yêu cầu công việc</h6>
            <ul><?php
                $req_arr =  explode("\n", $request);
                // $req_arr_2 = array_filter($req_arr);
                for ($i = 0; $i < count($req_arr); $i++) {
                    echo "<li class='my-1' >- "  . $req_arr[$i] . " <li>";
                }
                ?></ul>
        </div>
        <hr>
        <div class="details-inner">
            <h6 class="my-4"><i class="fa-solid fa-star-of-life"></i> Quyền lợi</h6>
            <ul><?php
                $ben_arr =  explode("\n", $benefits);

                // $ben_arr_2 = array_filter($ben_arr);
                for ($i = 0; $i < count($ben_arr); $i++) {
                    echo  "<li class='my-1' >- " . $ben_arr[$i] . " </li>";
                }
                ?></ul>
        </div>
        <div class="nav  nav-pills d-flex justify-content-between " id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a href="index.php?act=edit_recr&idEdit=<?= $id ?>" class="nav-link text-white me-3 py-2 btn btn-info d-flex align-content-center " id="v-pills-edit-tab" role="tab" style="background-color: var(--secondary); font-size: 13px;">
                Chỉnh sửa <i class="fa-regular fa-pen-to-square text-white ms-2" style="font-size: 15px;"></i>
            </a>

        </div>
    </div>
</div>