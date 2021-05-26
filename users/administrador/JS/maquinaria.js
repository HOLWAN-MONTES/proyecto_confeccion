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
const btn_SalirMaquis = document.getElementById('btn_SalirMaquis');
const crear_maquis = document.getElementById('crear_maquis');
const cerrar_ventanaMaquis = document.getElementById('cerrar_ventanaMaquis');

btn_SalirMaquis.addEventListener('click',function(){
    crear_maquis.style.display = "block";
});

cerrar_ventanaMaquis.addEventListener('click',function(){
    crear_maquis.style.display = "none";
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

