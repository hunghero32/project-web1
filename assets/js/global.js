const editCorpBtn = document.getElementById('editBtnInfoCorp');
const editInfoCorp = document.getElementById('editInfoCorp')
const cancerEditInfoCorp = document.getElementById('cancerEditInfoCorp')
const infoCorp = document.getElementById('infoCorp')

editCorpBtn.onclick = () => {
    editInfoCorp.classList.toggle('d-none');
    infoCorp.classList.toggle('d-none');
}

cancerEditInfoCorp.onclick = () => {
    editInfoCorp.classList.toggle('d-none');
    infoCorp.classList.toggle('d-none');
}

const allImgCorp = ['Avatar','Thumb1', 'Thumb2', 'Thumb3', 'Thumb4', 'Thumb5','AvatarCv']

for (let index = 0; index < allImgCorp.length; index++) {
    const cancerThumbBtn = document.getElementById('cancer' + allImgCorp[index]);

    if (cancerThumbBtn) {
        const nameThumb = document.getElementById('name' + allImgCorp[index]);
        const valueThumb = document.getElementById('value' + allImgCorp[index]);

        cancerThumbBtn.onclick = () => {
            valueThumb.value = '';
            nameThumb.innerText = 'Đã xóa';
        }
    }
}

function removeDataCv(name,e){
    const inputRemove = document.querySelectorAll('.data'+ name + e);
    Array.from(inputRemove).forEach (input => {
        input.value = '';
    })
}
