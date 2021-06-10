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
const btn_salirmarca_insu = document.getElementById('btn_salirmarca_insu');
const crear_marca_ins = document.getElementById('crear_marca_ins');
const cerrar_ventanaMarca_ins = document.getElementById('cerrar_ventanaMarca_ins');

btn_salirmarca_insu.addEventListener('click',function(){
    crear_marca_ins.style.display = "block";
});

cerrar_ventanaMarca_ins.addEventListener('click',function(){
    crear_marca_ins.style.display = "none";
});
//ventana de registrar el color del insumo
const btn_salircolor_insu = document.getElementById('btn_salircolor_insu');
const crear_color_insu = document.getElementById('crear_color_insu');
const cerrar_ventanaColor_insu = document.getElementById('cerrar_ventanaColor_insu');

btn_salircolor_insu.addEventListener('click',function(){
    crear_color_insu.style.display = "block";
});

cerrar_ventanaColor_insu.addEventListener('click',function(){
    crear_color_insu.style.display = "none";
});