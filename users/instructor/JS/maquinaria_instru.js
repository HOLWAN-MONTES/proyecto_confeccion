//ventana de registro de la marca de maquinaria 
const btn_salirmar = document.getElementById('btn_salirmarca_maq');
const crear_mar = document.getElementById('crear_marca_maq');
const cerrar_ventanaMar = document.getElementById('cerrar_ventanaMarca');

btn_salirmar.addEventListener('click',function(){
    crear_mar.style.display = "block";
});

cerrar_ventanaMar.addEventListener('click',function(){
    crear_mar.style.display = "none";
});

//ventana de registro del tipo de maquinaria 
const btn_SalirMaquina = document.getElementById('btn_SalirMaquinarias');
const crear_maquina = document.getElementById('crear_maquinarias');
const cerrar_ventanaMa = document.getElementById('cerrar_ventanaMaqui');

btn_SalirMaquina.addEventListener('click', function(){
    crear_maquina.style.display = "block";
});

cerrar_ventanaMa.addEventListener('click', function(){
    crear_maquina.style.display = "none";
});

//ventana de registrar el color de la maquinaria
const btn_salircol = document.getElementById('btn_salircolor');
const crear_col = document.getElementById('crear_color');
const cerrar_ventanaCol = document.getElementById('cerrar_ventanaColor');

btn_salircol.addEventListener('click',function(){
    crear_col.style.display = "block";
});

cerrar_ventanaCol.addEventListener('click',function(){
    crear_col.style.display = "none";
});

