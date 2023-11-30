<div class="tab-pane fade <?= (isset($_GET['idInfo'])) ? 'show active' : '' ?>" id="v-pills-info" role="tabpanel" aria-labelledby="v-pills-info-tab">
    <div class="details-item">
        <div class="details-inner">
            <h2><?=$job?></h2>
            <h3>Miêu tả công việc</h3>

            <ul style="list-style: none;">
                <?php
                $des_arr =  explode("\n", $description);
                // $des_arr_2 = array_filter($des_arr);
                for ($i = 0; $i < count($des_arr); $i++) {
                    echo "<li><i class='bx bx-message-square-check me-2' style='color: var(--secondary);'></i>"  . $des_arr[$i] . "<li>";
                }
                ?>
            </ul>
        </div>
        <div class="details-inner">
            <h3>Giới thiệu công ty</h3>
            <p><?= $introduce ?></p>
        </div>
        <div class="details-inner">
            <h3>Yêu cầu công việc</h3>
            <ul style="list-style: none;"><?php
                $req_arr =  explode("\n", $request);
                // $req_arr_2 = array_filter($req_arr);
                for ($i = 0; $i < count($req_arr); $i++) {
                    echo "<li><i class='bx bx-message-square-check me-2' style='color: var(--secondary);'></i>"  . $req_arr[$i] . " <li>";
                }
                ?></ul>
        </div>
        <div class="details-inner">
            <h3>Quyền lợi</h3>
            <ul style="list-style: none;"><?php
                $ben_arr =  explode("\n", $benefits);

                // $ben_arr_2 = array_filter($ben_arr);
                for ($i = 0; $i < count($ben_arr); $i++) {
                    echo  "<li><i class='bx bx-message-square-check me-2' style='color: var(--secondary);'></i>" . $ben_arr[$i] . " </li>";
                }
                ?></ul>
        </div>
    </div>
</div>