// -----------------botones----------------
const btnregi = document.getElementById("regis")
const btnedi = document.getElementById("editaar")
const btnelimi = document.getElementById("eliminaar")

const btninsu = document.getElementById("insu")
const btnmaquina = document.getElementById("maquinaa")
const btnmatextil = document.getElementById("mate_tex")

//----------------------- divs------------
const registrar_usu = document.getElementById("regi_usu")
const editar_usu = document.getElementById("edi_usu")
const eliminar_usu = document.getElementById("eli_usu")

const crea_insu = document.getElementById("crea_insu")
const crea_material = document.getElementById("cre_mate")
const crea_maquina = document.getElementById("crea_maquinn")

//----------------- div principales-----------------
const crear = document.getElementById("crear")
const usuario = document.getElementById("usuar")



/* inventario de maquinaria  */
const btn_maqui = document.getElementById('btn-inv-maquinaria');
const maqui = document.getElementById('inv-maquinaria');


//---------formulario de ingreso-----------
const btn_ingreso = document.getElementById('btn_ingreso');
const form_ingreso = document.getElementById('form_ingre');

//----------Formulario insumo---------------
const btn_insu = document.getElementById('reg_insu');
const btn_mate_tex = document.getElementById('reg_m_textil');
const btn_maquina = document.getElementById('reg_maqui');

btnregi.addEventListener("click", function (e) {
    e.preventDefault();
    registrar_usu.style.opacity = "1";
    registrar_usu.style.visibility = "visible";
    registrar_usu.style.display="block";
    editar_usu.style.opacity = "0";
    editar_usu.style.visibility = "hidden";
    editar_usu.style.display="none";
    usuario.style.display="block";
    eliminar_usu.style.opacity = "0";
    eliminar_usu.style.visibility = "hidden";
    eliminar_usu.style.display="none";
    crea_insu.style.opacity = "0";
    crea_insu.style.visibility = "hidden";
    crea_insu.style.display="none";
    crear.style.display="none";
    maqui.style.display = "none"
    crea_material.style.display = "none";
    form_ingreso.style.display = "none";
    form_ingreso.style.visibility = "hide";
    form_ingreso.style.opacity = "0";
});

btnedi.addEventListener("click", function (e) {
    e.preventDefault();
    editar_usu.style.opacity = "1";
    editar_usu.style.visibility = "visible";
    editar_usu.style.display="block";
    usuario.style.display="block";
    eliminar_usu.style.opacity = "0";
    eliminar_usu.style.visibility = "hidden";
    eliminar_usu.style.display="none";
    registrar_usu.style.opacity = "0";
    registrar_usu.style.visibility = "hidden";
    registrar_usu.style.display="none";
    crea_insu.style.opacity = "0";
    crea_insu.style.visibility = "hidden";
    crea_insu.style.display="none";
    crear.style.display="none";
    maqui.style.display = "none"
    crea_material.style.display = "none";
    form_ingreso.style.display = "none";
    form_ingreso.style.visibility = "hide";
    form_ingreso.style.opacity = "0";
});

btnelimi.addEventListener("click", function (e) {
    e.preventDefault();
    eliminar_usu.style.opacity = "1";
    eliminar_usu.style.visibility = "visible";
    eliminar_usu.style.display="block";
    usuario.style.display="block";
    editar_usu.style.opacity = "0";
    editar_usu.style.visibility = "hidden";
    editar_usu.style.display="none";
    registrar_usu.style.opacity = "0";
    registrar_usu.style.visibility = "hidden";
    registrar_usu.style.display="none";
    crea_insu.style.opacity = "0";
    crea_insu.style.visibility = "hidden";
    crea_insu.style.display="none";
    crear.style.display="none";
    maqui.style.display = "none"
    crea_material.style.display = "none";
    form_ingreso.style.display = "none";
    form_ingreso.style.visibility = "hide";
    form_ingreso.style.opacity = "0"; 
});

// btninsu.addEventListener("click", function (e) {
//     e.preventDefault();
//     crea_insu.style.opacity = "1";
//     crea_insu.style.visibility = "visible";
//     crea_insu.style.display = "block";
//     crear.style.display="block";
//     usuario.style.display="none";
//     crea_material.style.opacity = "0";
//     crea_material.style.visibility = "hidden";
//     crea_material.style.display="none";
//     crea_maquina.style.opacity = "0";
//     crea_maquina.style.visibility = "hidden";
//     crea_maquina.style.display="none";
//     maqui.style.display = "none";
btn_insu.addEventListener("click", function (e) {
    e.preventDefault();
    crea_insu.style.opacity = "1";
    crea_insu.style.visibility = "visible";
    crea_insu.style.display = "block";
    form_ingreso.style.display = "none";
    form_ingreso.style.visibility = "hide";
    form_ingreso.style.opacity = "0"; 
});

// });
// btnmatextil.addEventListener("click", function (e) {
//     e.preventDefault();
//     crea_material.style.opacity = "1";
//     crea_material.style.visibility = "visible";
//     crea_material.style.display="block";
//     crear.style.display="block";
//     usuario.style.display="none";
//     crea_insu.style.opacity = "0";
//     crea_insu.style.visibility = "hidden";
//     crea_insu.style.display="none";
//     crea_maquina.style.opacity = "0";
//     crea_maquina.style.visibility = "hidden";
//     crea_maquina.style.display="none";
//     maqui.style.display = "none"
// });
btn_mate_tex.addEventListener("click", function (e) {
    e.preventDefault();
    crea_material.style.opacity = "1";
    crea_material.style.visibility = "visible";
    crea_material.style.display = "block";
    form_ingreso.style.display = "none";
    form_ingreso.style.visibility = "hide";
    form_ingreso.style.opacity = "0";
})
// btnmaquina.addEventListener("click", function (e) {
//     e.preventDefault();
//     crea_maquina.style.opacity = "1";
//     crea_maquina.style.visibility = "visible";
//     crea_maquina.style.display="block";
//     crear.style.display="block";
//     usuario.style.display="none";
//     crea_insu.style.opacity = "0";
//     crea_insu.style.visibility = "hidden";
//     crea_insu.style.display="none";
//     crea_material.style.opacity = "0";
//     crea_material.style.visibility = "hidden";
//     crea_material.style.display="none";
//     maqui.style.display = "none"
// });
btn_maquina.addEventListener("click", function (e) {
    e.preventDefault();
    crea_maquina.style.opacity = "1";
    crea_maquina.style.visibility = "visible";
    crea_maquina.style.display = "block";
    form_ingreso.style.display = "none";
    form_ingreso.style.visibility = "hide";
    form_ingreso.style.opacity = "0";
})

btn_maqui.addEventListener('click', function(e){
    e.preventDefault();
    
    maqui.style.display = "block";
    registrar_usu.style.display = "none";
    editar_usu.style.display = "none";
    eliminar_usu.style.display = "none";
    crea_insu.style.display = "none";
    crea_material.style.display = "none";
    crea_maquina.style.display = "none";
    form_ingreso.style.display = "none";

});

btn_ingreso.addEventListener('click', function(e){
    e.preventDefault();
    form_ingreso.style.display = "block";
    form_ingreso.style.visibility = "visible";
    form_ingreso.style.opacity = "1";   
    crear.style.display = "block";
    usuario.style.display = "none";
    registrar_usu.style.display = "none";
    editar_usu.style.display = "none";
    eliminar_usu.style.display = "none";
    maqui.style.display = "none";
});


