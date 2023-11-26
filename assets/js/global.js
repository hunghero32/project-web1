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