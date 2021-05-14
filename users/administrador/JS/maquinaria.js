//ventana de registro de la marca de maquinaria 
const btn_salirmarca = document.getElementById('btn_salirmarca');
const crear_marca = document.getElementById('crear_marca');
const cerrar_ventanaMarca = document.getElementById('cerrar_ventanaMarca');

btn_salirmarca.addEventListener('click',function(){
    crear_marca.style.display = "block";
});

cerrar_ventanaMarca.addEventListener('click',function(){
    crear_marca.style.display = "none";
});

//ventana de registro del tipo de maquinaria 
const btn_salirmaquinaria = document.getElementById('btn_salirmaquinaria');
const crear_maquinaria = document.getElementById('crear_maquinaria');
const cerrar_ventanaMaquinaria = document.getElementById('cerrar_ventanaMaquinaria');

btn_salirmaquinaria.addEventListener('click',function(){
    crear_maquinaria.style.display = "block";
});

cerrar_ventanaMaquinaria.addEventListener('click',function(){
    crear_maquinaria.style.display = "none";
});
//ventana de registrar el color de la maquinaria
const btn_salircolor = document.getElementById('btn_salircolor');
const crear_color = document.getElementById('crear_color');
const cerrar_ventanaColor = document.getElementById('cerrar_ventanaColor');

btn_salircolor.addEventListener('click',function(){
    crear_color.style.display = "block";
});

cerrar_ventanaColor.addEventListener('click',function(){
    crear_color.style.display = "none";
});

