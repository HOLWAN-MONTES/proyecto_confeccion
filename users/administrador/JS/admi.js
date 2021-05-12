// -----------------botones----------------
const btnregi = document.getElementById("regis")
const btnedi = document.getElementById("editaar")
const btnelimi = document.getElementById("eliminaar")

//----------------------- divs------------
const registrar_usu = document.getElementById("regi_usu")
const editar_usu = document.getElementById("edi_usu")
const eliminar_usu = document.getElementById("eli_usu")

btnregi.addEventListener("click", function (e) {
    e.preventDefault();
    registrar_usu.style.opacity = "1";
    registrar_usu.style.visibility = "visible";
    registrar_usu.style.display="block";
});

btnedi.addEventListener("click", function (e) {
    e.preventDefault();
    editar_usu.style.opacity = "1";
    editar_usu.style.visibility = "visible";
    editar_usu.style.display="block";
});

btnelimi.addEventListener("click", function (e) {
    e.preventDefault();
    eliminar_usu.style.opacity = "1";
    eliminar_usu.style.visibility = "visible";
    eliminar_usu.style.display="block";
});