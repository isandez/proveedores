window.addEventListener("load", function () {
    const colorItems = document.querySelectorAll('.color-item');
    const navigation = document.querySelector('.navigation');
    const board = document.querySelector('.board')
    const search = document.querySelector('.search')
    colorItems.forEach(item => {
        item.addEventListener('click', function() {
            const idSelected = this.id;
            menu.className = idSelected;
            document.body.className = idSelected;
            navigation.classList.add(idSelected) 
            search.classList.add(idSelected)
            board.classList.add(idSelected)
        })
    })
    // Cuando la página haya cargado completamente
    var loader = document.querySelector(".loader-wrapper");
    var content = document.querySelector(".content");

    // Ocultar la pantalla de carga y mostrar el contenido
    loader.style.display = "none";
    content.style.display = "block";
});
