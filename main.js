function showInfo(index) {
    const infoElements = document.querySelectorAll('.desplegable-info');
    infoElements.forEach(element => {
        element.classList.add('hidden');
    });
    const selectedInfo = document.querySelector('.desplegable-lista:nth-child(' + index + ') .desplegable-info');
    selectedInfo.classList.remove('hidden');
}
