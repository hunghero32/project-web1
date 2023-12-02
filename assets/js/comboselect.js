const comboselect = ['level','age','address','skill','exp' ,'salary','job','gender','1'];

Array.from(comboselect).forEach(e => {
    var search = document.getElementById('search' + e);
    var dropdown = document.getElementById('dropdown' + e);

    search.addEventListener('input', function () {
        var searchValue = search.value.toLowerCase();
        var items = dropdown.getElementsByClassName('dropdown-item');
        Array.from(items).forEach(item => {
            var itemText = item.textContent.toLowerCase();
            var isVisible = itemText.includes(searchValue);
            item.style.display = isVisible ? 'block' : 'none';
        });
    });
    
    search.addEventListener('focus', function () {
        dropdown.classList.add('visible');
    })
    
    dropdown.addEventListener('click', function (e) {
        if (e.target.classList.contains('dropdown-item')) {
            search.value = e.target.textContent;
            dropdown.classList.remove('visible');
        }
    });
});
