const btn_salirmarca = document.getElementById('btn_salirmarca');
const crear_marca_insumo = document.getElementById('crear_marca_insumo');
const cerrar_ventana = document.getElementById('cerrar_ventana')

btn_salirmarca.addEventListener('click',function(){
    crear_marca_insumo.style.display = "block"
})

cerrar_ventana.addEventListener('click',function(){
    crear_marca_insumo.style.display = "none"
})
