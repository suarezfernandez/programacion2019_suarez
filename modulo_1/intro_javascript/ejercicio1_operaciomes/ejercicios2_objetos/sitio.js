// Informacion del sitio web

var sitioWeb = {
    titulo: "XtudioPlay",
    subtitulo: "Diseño y Desarrollo Wed",
    color: "azul",
    tieneLogo: false,
    creador: "Manolo",
    año: "2019",
    servicios: "Mantenimiento",

}

// Cambiar el titulo a la pagina
document.title = sitioWeb.titulo + " - " + sitioWeb.titulo;
    
// Mostrar informacion del sitio en la pagina
var h1 = document.querySelector("#info");

console.log(h1);
h1.innerHTML = "Sitio web creado por " + sitioWeb.creador + " en el año " + sitioWeb.año;