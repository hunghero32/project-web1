<?php if (isset($_SESSION['updatedCv'])) {
    unset($_SESSION['updatedCv']);
    if (isset($_SESSION['sameCv'])) {
        unset($_SESSION['sameCv']);
    }; ?>
    <script>
        alert('[ Cập nhật thành công ]');
    </script>
<?php } ?>
<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
    <form id="editInfoCv" method="POST" action="index.php?act=updateCv" enctype="multipart/form-data" style="<?= isset($_SESSION['sameCv']) ? 'display: block !important' : '' ?>" class="d-none job-details-area employer-details-area ptb-100 form-item">
        <div class="boxbtn d-flex w-50 justify-content-end gap-3">
            <span class="cancer border-0" id="cancerEditInfoCv">Hủy <i class="fa-solid fa-xmark"></i></span>
            <button name="updateInfoCv" class="save border-0" type="submit">Lưu <i class="fa-solid fa-cloud-arrow-up"></i></button>
        </div>
        <div class="container">
            <div class="row">
                <div class="details-item">
                    <div class="details-inner mb-4">
                        <h2>Cập nhật thông tin</h2>
                    </div>
                    <div class="details-inner">
                        <ul class="mb-2 mb-sm-0 w-50">
                            <li><strong style="width: 10%">* Tên Đầy Đủ </strong></li>
                            <!-- name -->
                            <li>
                                <input type="hidden" name="id" value="<?= $idcv ?>">
                                <input name="name" type="text" class="w-100 searchSelect" pattern=".{0,20}" maxlength="20" title="Tối đa 20 kí tự" value="<?= $name ?>" placeholder="<?= checknull($name) ?>" required>
                            </li>
                            <!--  -->
                        </ul>
                    </div>
                    <div class="details-inner mb-4 ">
                        <ul class="">
                            <li class="position-relative w-50">
                                <strong class="mb-2" for="">* Giới Tính</strong>
                                <input name="gender" type="text" class="searchSelect" value="<?= $cvInfo['gender'] ?>" id="searchage" pattern=".*\S+.*" title='Chọn hoặc nhập địa chỉ' required>
                                <div class="dropdown-content w-100" id="dropdownage">
                                    <?php foreach ($datafilter as $cvData) {
                                        extract($cvData);
                                        if ($gender !== '') { ?>
                                            <div class="dropdown-item"><?= $gender ?></div>
                                        <?php } ?>
                                    <?php } ?>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="details-inner mb-4">
                        <ul class="">
                            <!-- avatar -->
                            <li class="d-flex justify-content-start flex-column w-100">
                                <strong class="mb-2" for="">* Ảnh đại diện [ <span id="nameAvaCv"><?= checknull($cvInfo['avatar']); ?></span> ]</strong>
                                <div class="d-flex justify-content-start">
                                    <input name="avatar" class="w-25 searchSelect mb-2 me-2 file-img" type="file" title="Vui lòng nhập đúng định dạng" accept=".jpg, .jpeg, .png, .jfif, .gif" class="w-25">
                                    <?php if ($avatar !== '') { ?>
                                        <span class="cancerThumb border-0 m-0 ps-2 pe-2" id="cancerAvaCv" onclick="removeAvaCv()"><i class="p-0 m-0 text-white fa-regular fa-trash-can"></i></span>
                                        <input type="hidden" name="avatar" id="valueAvaCv" value="<?= $cvInfo['avatar'] ?>">
                                    <?php } ?>
                                </div>
                            </li>
                            <!--  -->
                        </ul>
                    </div>
                    <div class="details-inner">
                        <h5>Giới Thiệu Cá Nhân <?= isset($cvInfo['introduce']) && $cvInfo['introduce'] != ''  ? '' : '[ Chưa cập nhật ]'; ?></h5>
                        <!-- introduceduce  -->
                        <textarea name="introduce" class="w-100 p-3 rounded-3" style="height: 250px;outline: none" maxlength="1000" required><?= $cvInfo['introduce'] ?></textarea>
                        <!--  -->
                    </div>
                    <div class="details-inner d-flex flex-column flex-sm-row justify-content-between">
                        <ul class="mb-2 mb-sm-0 w-25">
                            <li><strong style="width: 10%">* Email </strong></li>
                            <li class="position-relative">
                                <!-- email -->
                                <input name="email" type="email" class="w-100 searchSelect" value="<?= $email !== '' ? $email : '' ?>" placeholder="<?= checknull($email) ?>" title="Vui lòng nhập đúng định dạng email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" required>
                            </li>
                            <!--  -->
                        </ul>
                        <ul class="mb-2 mb-sm-0 w-25">
                            <li><strong style="width: 10%">* Số điện thoại </strong></li>
                            <!-- phone -->
                            <li>
                                <input name="phone" class="w-100 searchSelect" type="tel" value="<?= $phone !== '' ? $phone : '' ?>" placeholder="<?= checknull($phone) ?>" pattern="[0-9]{1,13}" title="Vui lòng nhập đúng dịnh dạng số điện thoại" required>
                            </li>
                            <!--  -->
                        </ul>
                        <ul class="mb-2 mb-sm-0 w-25">
                            <li><strong style="width: 10%">* Ngày sinh </strong></li>
                            <!-- birth -->
                            <li>
                                <input name="birth" class="w-100 searchSelect" type="date" value="<?= $birth !== '' ? $birth : '' ?>" placeholder="<?= checknull($birth) ?>" required>
                            </li>
                            <!--  -->
                        </ul>
                    </div>
                    <div class="details-inner d-flex flex-column flex-sm-row justify-content-between">
                        <ul class="mb-2 mb-sm-0 w-25">
                            <li><strong style="width: 10%">* Chuyên ngành </strong></li>
                            <li class="position-relative">
                                <input name="major" class="w-100 searchSelect" type="text" value="<?= $cvInfo['major'] !== '' ? $cvInfo['major'] : '' ?>" placeholder="<?= checknull($cvInfo['major']) ?>" required>
                            </li>
                        </ul>
                        <ul class="mb-2 mb-sm-0 w-25">
                            <li><strong style="width: 10%">* Mức lương mong muốn </strong></li>
                            <!-- workingday -->
                            <li class="position-relative">
                                <input name="salary" type="text" class="searchSelect" id="searchlevel" value="<?= $cvInfo['salary'] !== '' ? $cvInfo['salary'] : '' ?>" placeholder="<?= checknull($cvInfo['salary']); ?>" required>
                                <div class="dropdown-content w-100 p-0" id="dropdownlevel">
                                    <?php foreach ($datafilter as $cvData) {
                                        extract($cvData);
                                        if ($salary !== '') { ?>
                                            <div class="dropdown-item"><?= $salary ?></div>
                                        <?php } ?>
                                    <?php } ?>
                                </div>
                            </li>
                            <!--  -->
                        </ul>
                        <ul class="mb-2 mb-sm-0 w-25">
                            <li><strong style="width: 10%">* Địa chỉ </strong></li>
                            <!-- size -->
                            <li>
                                <input name="address" type="text" class="w-100 searchSelect" value="<?= $cvInfo['address'] !== '' ? $cvInfo['address'] : '' ?>" placeholder="<?= checknull($cvInfo['address']) ?>" required>
                            </li>
                            <!--  -->
                        </ul>
                    </div>
                    <hr>
                    <div class="details-inner">
                        <strong style="width: 10%">* Kinh nghiệm làm việc </strong>
                        <?php for ($i = 0; $i < count($expCv); $i++) {  ?>
                            <ul class="expCv" id="expCv<?= $i + 1 ?>">
                                <li class="d-flex justify-content-between align-items-center gap-2">
                                    <input name="idExp<?= $i + 1 ?>" type="hidden" value="<?= $expCv[$i]['id'] ?>">
                                    <input name="job<?= $i + 1 ?>" type="text" value="<?= $expCv[$i]['job'] ?>" class="dataExp<?= $i + 1 ?> searchSelect w-25" placeholder="Tên công việc">
                                    <input name="corp<?= $i + 1 ?>" type="text" value="<?= $expCv[$i]['corp'] ?>" class="dataExp<?= $i + 1 ?> searchSelect w-25" placeholder="Tại công ty">
                                    <ul class="w-25 mt-0">
                                        <li class="position-relative">
                                            <input name="level<?= $i + 1 ?>" type="text" value="<?= $expCv[$i]['level'] ?>" class="searchSelect dataExp<?= $i + 1 ?>" id="search<?= $i + 1 ?>" placeholder="Câp bậc / vị trí">
                                            <div class="dropdown-content w-100" id="dropdown<?= $i + 1 ?>">
                                                <?php foreach ($datafilter as $cvData) {
                                                    extract($cvData);
                                                    if ($level !== '') { ?>
                                                        <div class="dropdown-item"><?= $level ?></div>
                                                    <?php } ?>
                                                <?php } ?>
                                            </div>
                                        </li>
                                    </ul>
                                    <label for="start">Từ</label><input name="start<?= $i + 1 ?>" type="date" value="<?= $expCv[$i]['start'] ?>" class="dataExp<?= $i + 1 ?> searchSelect w-25" placeholder="Từ">
                                    <label for="end">Đến</label><input name="end<?= $i + 1 ?>" type="date" value="<?= $expCv[$i]['end'] ?>" class="dataExp<?= $i + 1 ?> searchSelect w-25" placeholder="Đến">
                                    <span class="cancerThumb border-0 m-0 ps-2 pe-2" onclick="removeDataCv('Exp',<?= $i + 1 ?>)" id="removeDataExp<?= $i + 1 ?>"><i class="p-0 m-0 text-white fa-regular fa-trash-can"></i></span>
                                </li>
                            </ul>
                        <?php } ?>
                    </div>
                    <hr>
                    <div class="details-inner">
                        <strong style="width: 10%">* Học vấn </strong>
                        <?php for ($i = 0; $i < count($degree); $i++) {  ?>
                            <ul class="degCv" id="degCv<?= $i + 1 ?>">
                                <li class="d-flex justify-content-between align-items-center gap-2">
                                    <input name="idDeg<?= $i + 1 ?>" type="hidden" value="<?= $degree[$i]['id'] ?>">
                                    <input name="nameDeg<?= $i + 1 ?>" type="text" value="<?= $degree[$i]['name'] ?>" class="dataDeg<?= $i + 1 ?> searchSelect w-25" placeholder="Loại bằng / chứng chỉ">
                                    <input name="schoolDeg<?= $i + 1 ?>" type="text" value="<?= $degree[$i]['school'] ?>" class="dataDeg<?= $i + 1 ?> searchSelect w-25" placeholder="Tại trường / tổ chức">
                                    <label for="end">Thời gian</label><input name="yearDeg<?= $i + 1 ?>" type="text" pattern="20(0[0-9]|1[0-9]|2[0-3])" maxlength="4" value="<?= $degree[$i]['year'] != '0000' ? $degree[$i]['year'] : '' ?>" class="dataDeg<?= $i + 1 ?> searchSelect w-25" placeholder="Năm tốt nghiệp">
                                    <span class="cancerThumb border-0 m-0 ps-2 pe-2" onclick="removeDataCv('Deg',<?= $i + 1 ?>)" id="removeDataDeg<?= $i + 1 ?>"><i class="p-0 m-0 text-white fa-regular fa-trash-can"></i></span>
                                </li>
                            </ul>
                        <?php } ?>
                    </div>
                    <hr>
                    <div class="details-inner">
                        <strong style="width: 10%">* Kỹ năng / Ngôn ngữ </strong>
                        <?php for ($i = 0; $i < count($skillCv); $i++) {  ?>
                            <ul class="skillCv" id="skillCv<?= $i + 1 ?>">
                                <li class="d-flex justify-content-start align-items-center gap-2">
                                    <input name="idSkill<?= $i + 1 ?>" type="hidden" value="<?= $skillCv[$i]['id'] ?>">
                                    <ul class="w-25 mt-0">
                                        <li class="position-relative">
                                            <input name="progLangSkill<?= $i + 1 ?>" id="search<?= $i + 6 ?>" type="text" value="<?= $skillCv[$i]['progLang'] ?>" class="dataSkill<?= $i + 1 ?> searchSelect" placeholder="Tên kỹ năng">
                                            <div class="dropdown-content w-100" id="dropdown<?= $i + 6 ?>">
                                                <?php foreach ($datafilter as $cvData) {
                                                    extract($cvData);
                                                    if ($progLang !== '') { ?>
                                                        <div class="dropdown-item"><?= $progLang ?></div>
                                                    <?php } ?>
                                                <?php } ?>
                                            </div>
                                        </li>
                                    </ul>
                                    <label for="percentSkill">Tự đánh giá %</label>
                                    <input name="percentSkill<?= $i + 1 ?>" type="number" min='0' max='100' value="<?= $skillCv[$i]['percent'] ?>" class="dataSkill<?= $i + 1 ?> searchSelect w-25" placeholder="% từ 50 - 100">
                                    <span class="cancerThumb border-0 m-0 ps-2 pe-2" onclick="removeDataCv('Skill',<?= $i + 1 ?>)" id="removeDataSkill<?= $i + 1 ?>"><i class="p-0 m-0 text-white fa-regular fa-trash-can"></i></span>
                                </li>
                            </ul>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div id="infoCv" style="<?= isset($_SESSION['sameCv']) ? 'display: none !important' : '' ?>" class="job-details-area employer-details-area ptb-100 form-item">
        <span class="edit" id="editBtnInfoCv">Chỉnh sửa <i class="fa-solid fa-pen"></i></span>
        <div class="container">
            <div class="row">
                <div class="details-inner mb-4">
                    <h3>Giới Thiệu Cá Nhân</h3>
                </div>
                <div class="details-item">
                    <div class="details-inner">
                        <p style="text-align: justify">
                            <?= empty($cvInfo['introduce']) ? 'Chưa cập nhật giới thiệu' : $cvInfo['introduce']; ?>
                        </p>
                    </div>
                    <div class="details-inner d-flex flex-column flex-sm-row justify-content-between">
                        <ul class="w-25">
                            <li><strong style="width: 10%">* Email </strong></li>
                            <li><i class="fa-solid fa-calendar me-2"></i><?= checknull($cvInfo['email']) ?></li>
                        </ul>
                        <ul class="w-25">
                            <li><strong style="width: 10%">* Số điện thoại </strong></li>
                            <li><i class="fa-solid fa-users me-2"></i><?= checknull($cvInfo['phone']); ?></li>
                        </ul>
                        <ul class="w-25">
                            <li><strong style="width: 10%">* Ngày Sinh </strong></li>
                            <li><i class="fa-solid fa-calendar me-2"></i><?= $cvInfo['birth'] !== '0000-00-00' && $cvInfo['birth'] !== '' ? $cvInfo['birth'] : 'Chưa cập nhật'; ?></li>
                        </ul>
                    </div>
                    <div class="details-inner d-flex flex-column flex-sm-row justify-content-between">
                        <ul class="w-25">
                            <li><strong style="width: 10%">* Chuyên ngành </strong></li>
                            <li><i class="fa-solid fa-users me-2"></i><?= checknull($cvInfo['major']); ?></li>
                        </ul>
                        <ul class="w-25">
                            <li><strong style="width: 10%">* Mức lương mong muốn </strong></li>
                            <li><i class="fa-solid fa-calendar me-2"></i><?= checknull($cvInfo['salary']) ?></li>
                        </ul>
                        <ul class="w-25">
                            <li><strong style="width: 10%">* Địa điểm </strong></li>
                            <li><i class="fa-solid fa-calendar me-2"></i><?= checknull($cvInfo['address']) ?></li>
                        </ul>
                    </div>
                </div>

                <hr class="mt-4 mb-4">

                <div class="details-inner">
                    <h5><i class="fa-solid fa-paperclip me-2"></i> Kinh nghiệm làm việc </h5>
                </div>
                <div class="details-item mb-4">
                    <div class="details-inner">
                        <ul>
                            <?php foreach ($expCv as $e) {
                                if ($e['job'] !== '') { ?>
                                    <li><i class="fa-solid fa-business-time me-2"></i> Từng làm <strong class=""><?= $e['job'] ?></strong> tại <?= $e['corp'] ?> ở trị trí <?= $e['level'] ?> thời gian từ <?= $e['start'] ?> ~ <?= $e['end'] ?></li>
                                <?php } ?>
                            <?php } ?>
                        </ul>
                    </div>

                </div>
                <hr class="mb-4 mt-4" style="opacity: 0">
                <div class="details-inner">
                    <h5><i class="fa-solid fa-paperclip me-2"></i> Học vấn / Bằng cấp </h5>
                </div>
                <div class="details-item mb-4">
                    <div class="details-inner">
                        <ul class="">
                            <?php foreach ($degree as $deg) {
                                if ($deg['name'] !== '') { ?>
                                    <li><i class="fa-solid fa-graduation-cap me-2"></i>Tốt nghiệp ( chứng chỉ / bằng ) <strong><?= $deg['name'] ?></strong> tại <?= $deg['school'] ?> năm <?= $deg['year'] ?></li>
                                <?php } ?>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>

            <hr class="mb-4 mt-4" style="opacity: 0;">

            <div class="details-inner mb-2">
                <h5><i class="fa-solid fa-paperclip me-2"></i> Kỹ năng / Ngôn ngữ </h5>
            </div>
            <div class="details-item mb-4">
                <div class="details-inner">
                    <ul class="">
                        <?php foreach ($skillCv as $s) {
                            if ($s['progLang'] !== '') { ?>
                                <li class="row mb-4">
                                    <strong class="mb-3"><i style="font-size: 1vw;" class="fa-solid fa-code"></i> <?= $s['progLang'] ?></strong>
                                    <div class="ms-2 mt-2 rounded-3 progress-bar-skill" style="width:<?= $s['percent'] ?>%; height:10px"></div>
                                </li>
                            <?php } ?>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    const editCvBtn = document.getElementById("editBtnInfoCv");
const editInfoCv = document.getElementById("editInfoCv");
const cancerEditInfoCv = document.getElementById("cancerEditInfoCv");
const infoCv = document.getElementById("infoCv");

editCvBtn.onclick = () => {
  editInfoCv.classList.toggle("d-none");
  infoCv.classList.toggle("d-none");
};

cancerEditInfoCv.onclick = () => {
  editInfoCv.classList.toggle("d-none");
  infoCv.classList.toggle("d-none");
};

const comboselect2 = [
  "1",
  "2",
  "3",
  "4",
  "5",
  "6",
  "7",
  "8",
  "9",
  "10",
  "11",
  "12",
];

Array.from(comboselect2).forEach((e) => {
  var search = document.getElementById("search" + e);
  var dropdown = document.getElementById("dropdown" + e);

  search.addEventListener("input", function () {
    var searchValue = search.value.toLowerCase();
    var items = dropdown.getElementsByClassName("dropdown-item");
    Array.from(items).forEach((item) => {
      var itemText = item.textContent.toLowerCase();
      var isVisible = itemText.includes(searchValue);
      item.style.display = isVisible ? "block" : "none";
    });
  });

  search.addEventListener("focus", function () {
    dropdown.classList.add("visible");
  });

  dropdown.addEventListener("click", function (e) {
    if (e.target.classList.contains("dropdown-item")) {
      search.value = e.target.textContent;
      dropdown.classList.remove("visible");
    }
  });
});

function removeAvaCv() {
  document.getElementById("valueAvaCv").value = "";
  document.getElementById("nameAvaCv").innerText = "Đã xóa";
}
</script>