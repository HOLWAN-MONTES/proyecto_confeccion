//---------formulario de prestamo-----------
const btn_prestamo = document.getElementById('btn_prestamo');
const form_prestamo = document.getElementById('form_prestamo');


//------------formulario de registro de prestamo--------------
const btn_registro = document.getElementById('btn_registro');
const form_registro = document.getElementById('form_reg_pres');


// btnprestamo.addEventListener("click", function (e) {
//     e.preventDefault();
//     eliminar_usu.style.opacity = "1";
//     eliminar_usu.style.visibility = "visible";
//     eliminar_usu.style.display="block";
//     usuario.style.display="block";
//     editar_usu.style.opacity = "0";
//     editar_usu.style.visibility = "hidden";
//     editar_usu.style.display="none";
//     registrar_usu.style.opacity = "0";
//     registrar_usu.style.visibility = "hidden";
//     registrar_usu.style.display="none";
//     crea_insu.style.opacity = "0";
//     crea_insu.style.visibility = "hidden";
//     crea_insu.style.display="none";
//     crear.style.display="none";
//     maqui.style.display = "none"
//     crea_material.style.display = "none";
//     form_ingreso.style.display = "none";
//     form_ingreso.style.visibility = "hide";
//     form_ingreso.style.opacity = "0"; 
// });

btn_prestamo.addEventListener('click', function(e){
    e.preventDefault();
    form_prestamo.style.display = "block";
    form_prestamo.style.visibility = "visible";
    form_prestamo.style.opacity = "1"; 
    crear.style.display = "block";
    form_registro.style.display = "none";

});

btn_registro.addEventListener('click', function(e){
    e.preventDefault();
    form_registro.style.display = "block";
    form_registro.style.visibility = "visible";
    form_registro.style.opacity = "1"; 
    crear.style.display = "block";
    form_prestamo.style.display = "none";  

});








