const editCorpBtn = document.getElementById('editBtnInfoCorp');
const editInfoCorp = document.getElementById('editInfoCorp')
const cancerEditInfoCorp = document.getElementById('cancerEditInfoCorp')
const infoCorp = document.getElementById('infoCorp')

editCorpBtn.onclick = () => {
    editInfoCorp.classList.remove('d-none');
    infoCorp.classList.add('d-none');
}

cancerEditInfoCorp.onclick = () => {
    editInfoCorp.classList.add('d-none');
    infoCorp.classList.remove('d-none');
}

const allImgCorp = ['Avatar','Thumb1', 'Thumb2', 'Thumb3', 'Thumb4', 'Thumb5']

for (let index = 0; index < allImgCorp.length; index++) {
    const cancerThumbBtn = document.getElementById('cancer' + allImgCorp[index]);

    if (cancerThumbBtn) {
        console.log('nút ' + index);
        const nameThumb = document.getElementById('name' + allImgCorp[index]);
        const valueThumb = document.getElementById('value' + allImgCorp[index]);

        cancerThumbBtn.onclick = () => {
            valueThumb.value = '';
            nameThumb.innerText = 'Đã xóa';
            console.log(valueThumb.value);
            if (valueThumb.value == '') {
                console.log('xóa rồi em ơi');
            }
        }
    }
}