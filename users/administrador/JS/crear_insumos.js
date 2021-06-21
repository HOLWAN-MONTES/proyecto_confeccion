//ventana de registro de tipo de tela
const btn_salirtela = document.getElementById('btn_salirinsu');
const crear_tipo_tela = document.getElementById('crear_tipo_insumo');
const cerrar_ventana = document.getElementById('cerrar_ventana');

btn_salirtela.addEventListener('click',function(){
    crear_tipo_tela.style.display = "block";
});

cerrar_ventana.addEventListener('click',function(){
    crear_tipo_tela.style.display = "none";
});

//ventana de registro de la marca del insumo
const btn_salirmarca_insumo = document.getElementById('btn_salirmarca_insumo');
const crear_marca_insumo = document.getElementById('crear_marca_insumo');
const cerrar_ventanaMarca_insu = document.getElementById('cerrar_ventanaMarca_insu');

btn_salirmarca_insumo.addEventListener('click',function(){
    crear_marca_insumo.style.display = "block";
});

cerrar_ventanaMarca_insu.addEventListener('click',function(){
    crear_marca_insumo.style.display = "none";
});

//ventana de registrar el color del insumo
const btn_salircolor_insumo = document.getElementById('btn_salircolor_insumo');
const crear_color_insu = document.getElementById('crear_color_insu');
const cerrar_ventanaColor_insu = document.getElementById('cerrar_ventanaColor_insu');

btn_salircolor_insumo.addEventListener('click',function(){
    crear_color_insu.style.display = "block";
});

cerrar_ventanaColor_insu.addEventListener('click',function(){
    crear_color_insu.style.display = "none";
});