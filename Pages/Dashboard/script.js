window.addEventListener("load", function () {
    // Cuando la página haya cargado completamente
    var loader = document.querySelector(".loader-wrapper");
    var content = document.querySelector(".content");

    // Ocultar la pantalla de carga y mostrar el contenido
    loader.style.display = "none";
    content.style.display = "block";
});