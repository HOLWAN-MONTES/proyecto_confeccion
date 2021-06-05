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
const btn_ingreso = document.getElementById('ing_inst');
const form_ingreso = document.getElementById('form_ingre');

//----------Formulario insumo---------------
const btn_insu = document.getElementById('reg_insu');
const btn_mate_tex = document.getElementById('reg_m_textil');
const btn_maquina = document.getElementById('reg_maqui');

btn_insu.addEventListener("click", function (e) {
    e.preventDefault();
    crea_insu.style.opacity = "1";
    crea_insu.style.visibility = "visible";
    crea_insu.style.display = "block";
    form_ingreso.style.display = "none";
    form_ingreso.style.visibility = "hide";
    form_ingreso.style.opacity = "0"; 
});

btn_mate_tex.addEventListener("click", function (e) {
    e.preventDefault();
    crea_material.style.opacity = "1";
    crea_material.style.visibility = "visible";
    crea_material.style.display = "block";
    form_ingreso.style.display = "none";
    form_ingreso.style.visibility = "hide";
    form_ingreso.style.opacity = "0";
})
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
    maqui.style.display = "none";
    crea_material.style.display = "none";
    crea_maquina.style.display = "none";
    crea_insu.style.display = "none";
});


