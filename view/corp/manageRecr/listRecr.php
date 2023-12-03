<div class="tab-pane fade  <?= (!isset($_GET['id']) && !isset($_GET['idEdit']) && !isset($_GET['idInfo']) && !isset($_GET['profile']) && isset($_SESSION['same'])) || (isset($thongbao)) ? 'show active' : '' ?> " id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
   
    <?php foreach ($valu_racr as $key) : ?>

        <?php
        // var_dump($valu_racr);
        extract($key);
        $edit_recr = "index.php?act=edit_recr&idEdit=" . $id;
        $delete_recr = "index.php?act=delete_recr&id=" . $id; ?>
        <?php $link_recr = "index.php?act=infoRecr&idInfo=" . $id; ?>
        <div class='employer-item position-relative'>

            <img  data-cfsrc='<?= checkCorpAvaNull($avatar)  ?>' alt='Employer' style='width: 70px; height: 70px;object-fit: cover;' class="rounded-circle ">
            <h3><?= $job ?></h3>
            <ul>
                <li>
                    <i class='flaticon-send'></i>
                    <?= $address ?>
                </li>
                <li><?= $start ?></li>
            </ul>
            <p><?= $level ?></p>
            <p><?= $progLang ?>
            </p>
            <span class='span-two'><?= $type ?> </span>



            <div class="nav  nav-pills d-flex justify-content-between" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a href="<?= $link_recr ?>" class="nav-link text-white me-3  pt-2 px-3 fw-bold  bg-secondary bg-opacity-75" id="v-pills-info-tab" role="tab" style="font-size: 13px ;padding-bottom: 0;" >Thông tin chi tiết </a>
                <div class="d-flex">
                    <!-- <a href="index.php?act=edit_recr&idEdit=<?= $id ?>" class="nav-link  bg-info text-white me-3 pb--1 px-3 fw-bold " id="v-pills-edit-tab" data-bs-toggle="pill"   aria-selected="false"> -->
                    <a href="<?= $edit_recr ?>" class="nav-link text-white me-3  py-1 px-3 fw-bold" id="v-pills-edit-tab" role="tab" style="background-color: var(--secondary); ">

                        <div class="profile-list">
                            <i class="fa-regular fa-pen-to-square text-white" style="font-size: 15px;"></i>
                        </div>
                    </a>
                    <button onclick="confirmDelete('<?= $delete_recr ?>')" class="btn bg-secondary bg-opacity-75 me-3 text-white"><i class="fa-regular fa-trash-can" style="font-size: 15px;"></i></button>
                </div>
            </div>

        </div>
    <?php endforeach ?>
    

</div>