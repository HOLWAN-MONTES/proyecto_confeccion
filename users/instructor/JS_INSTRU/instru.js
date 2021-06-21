//------------formulario de registro de prestamo--------------
const btn_registro = document.getElementById('btn_registro');
const form_registro = document.getElementById('form_reg_pres');

btn_registro.addEventListener('click', function(e){
    e.preventDefault();
    form_registro.style.display = "block";
    form_registro.style.visibility = "visible";
    form_registro.style.opacity = "1"; 
});

//Boton para poder agregar el listado del prestamo
const btn_agregar = document.getElementById('agregar');
btn_agregar.addEventListener('click', function(e){
    e.preventDefault();
    const selec_cat = document.getElementById('ti_pres');
    const val_op = selec_cat.options[selec_cat.selectedIndex].text;
    const nomb = document.getElementById('pres');
    const val_pres = nomb.options[nomb.selectedIndex].text;
    const cant = document.getElementById('cant').value;
    const tabla = document.getElementById('tab_info');
    const agre_tab = tabla.insertRow(-1);
    const celd = agre_tab.insertCell(0);
    celd.textContent = val_op;
    const celd1 = agre_tab.insertCell(1);
    celd1.textContent = val_pres;
    const celd2 = agre_tab.insertCell(2);
    celd2.textContent = cant;
    $('option:selected').removeAttr("selected"); 
    $('input[type="number"]').val('');
})