//ventana de registro de tipo de tela
const btn_salirtela_textil = document.getElementById('btn_salirtela_textil');
const crear_tipo_tela_textil = document.getElementById('crear_tipo_tela_textil');
const cerrar_ventana_textil = document.getElementById('cerrar_ventana_textil');

btn_salirtela_textil.addEventListener('click',function(){
    crear_tipo_tela_textil.style.display = "block";
});

cerrar_ventana_textil.addEventListener('click',function(){
    crear_tipo_tela_textil.style.display = "none";
});

//ventana de registro de la marca del material textil
const btn_salirmarca_textil = document.getElementById('btn_salirmarca_textil');
const crear_marca_textil = document.getElementById('crear_marca_textil');
const cerrar_ventanaMarca_textil = document.getElementById('cerrar_ventanaMarca_textil');

btn_salirmarca_textil.addEventListener('click',function(){
    crear_marca_textil.style.display = "block";
});

cerrar_ventanaMarca_textil.addEventListener('click',function(){
    crear_marca_textil.style.display = "none";
});

//ventana de registrar el color del material textil
const btn_salircolor_textil = document.getElementById('btn_salircolor_textil');
const crear_color_textil = document.getElementById('crear_color_textil');
const cerrar_ventanaColor_textil = document.getElementById('cerrar_ventanaColor_textil');

btn_salircolor_textil.addEventListener('click',function(){
    crear_color_textil.style.display = "block";
});

cerrar_ventanaColor_textil.addEventListener('click',function(){
    crear_color_textil.style.display = "none";
});