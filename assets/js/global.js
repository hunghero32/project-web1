const editCorpBtn = document.getElementById("editBtnInfoCorp");
const editInfoCorp = document.getElementById("editInfoCorp");
const cancerEditInfoCorp = document.getElementById("cancerEditInfoCorp");
const infoCorp = document.getElementById("infoCorp");

editCorpBtn.onclick = () => {
  editInfoCorp.classList.toggle("d-none");
  infoCorp.classList.toggle("d-none");
};

cancerEditInfoCorp.onclick = () => {
  editInfoCorp.classList.toggle("d-none");
  infoCorp.classList.toggle("d-none");
};

const allImgCorp = [
  "Avatar",
  "Thumb1",
  "Thumb2",
  "Thumb3",
  "Thumb4",
  "Thumb5",
  "AvatarCv",
];

for (let index = 0; index < allImgCorp.length; index++) {
  const cancerThumbBtn = document.getElementById("cancer" + allImgCorp[index]);

  if (cancerThumbBtn) {
    const nameThumb = document.getElementById("name" + allImgCorp[index]);
    const valueThumb = document.getElementById("value" + allImgCorp[index]);

    cancerThumbBtn.onclick = () => {
      valueThumb.value = "";
      nameThumb.innerText = "Đã xóa";
    };
  }
}

function removeDataCv(name, e) {
  const inputRemove = document.querySelectorAll(".data" + name + e);
  Array.from(inputRemove).forEach((input) => {
    input.value = "";
  });
}

//================== thông báo khi ứng tuyển thành công========================
function showSuccessNotification() {
  Swal.fire({
    icon: "success",
    title: "Đăng ký thành công!",
    showConfirmButton: false,
    timer: 2000, // Tự động ẩn sau 2 giây
  });
}

//=======================check form hết hạn============================

function checkExpiryDate(input) {
  var errorMessage = document.getElementById("errorMessage");
  var currentDate = new Date();
  var expiryDate = new Date(input.value);
  currentDate.setDate(currentDate.getDate() + 7);
  if (expiryDate <= currentDate) {
    errorMessage.textContent =
      "Ngày hết hạn phải lớn hơn ngày hiện tại ít nhất 7 ngày.";
    input.title = "Ngày hết hạn phải lớn hơn ngày hiện tại ít nhất 7 ngày.";
  } else {
    errorMessage.textContent = "";
    input.title = "Ngày hết hạn";
  }
}

function validateForm() {
  var expiryDate = document.getElementById("expiryDate");
  var errorMessage = document.getElementById("errorMessage");

  checkExpiryDate(expiryDate);
  if (errorMessage.textContent) {
    return false;
  }

  
  return true;
}


//====================Chỉnh sửa cv==========================
function editCV(){
  location.href = 'index.php?act=manage_Cv&sameCv=1#editInfoCv';
}