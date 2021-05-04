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
const btn_salirmarca = document.getElementById('btn_salirmarca');
const crear_marca = document.getElementById('crear_marca');
const cerrar_ventanaMarca = document.getElementById('cerrar_ventanaMarca');

btn_salirmarca.addEventListener('click',function(){
    crear_marca.style.display = "block";
});

cerrar_ventanaMarca.addEventListener('click',function(){
    crear_marca.style.display = "none";
});
//ventana de registrar el color del insumo
const btn_salircolor = document.getElementById('btn_salircolor');
const crear_color = document.getElementById('crear_color');
const cerrar_ventanaColor = document.getElementById('cerrar_ventanaColor');

btn_salircolor.addEventListener('click',function(){
    crear_color.style.display = "block";
});

cerrar_ventanaColor.addEventListener('click',function(){
    crear_color.style.display = "none";
});