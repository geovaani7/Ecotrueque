document.getElementById('buscador-form').addEventListener('submit', function(event) {
    event.preventDefault();
    let searchInput = document.getElementById('buscador-input');
    let searchText = searchInput.value.toLowerCase();
    let resultsList = document.getElementById('resultados-list');
    let error404 = document.getElementById('error-404');
    let found = false;

    for (let i = 0; i < resultsList.children.length; i++) {
        let child = resultsList.children[i];
        if (child.textContent.toLowerCase().indexOf(searchText) !== -1) {
            child.style.display = '';
            found = true;
        } else {
            child.style.display = 'none';
        }
    }

    if (found) {
        error404.classList.add('hidden');
    } else {
        error404.classList.remove('hidden');
    }

    searchInput.value = '';
});

document.querySelectorAll('.acordeon-boton').forEach(button => {
    button.addEventListener('click', function() {
        let content = this.nextElementSibling;
        if (content.style.maxHeight) {
            content.style.maxHeight = null;
        } else {
            content.style.maxHeight = content.scrollHeight + "px";
        }
    });
});