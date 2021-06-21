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
    //Declaracion De variables para capturar valores de los inputs
    const selec_cat = document.getElementById('ti_pres');
    const val_op = selec_cat.options[selec_cat.selectedIndex].text; //Selecciona el indice el cual escogamos y mostrara el texto
    const nomb = document.getElementById('pres');
    const val_pres = nomb.options[nomb.selectedIndex].text;//Selecciona el indice el cual escogamos y mostrara el texto
    var cant = document.getElementById('cant').value;
    const tabla = document.getElementById('tab_info');
    const agre_tab = tabla.insertRow(-1);//Inserta una fila automaticamente cada vez que agreguemos algo
    const celd = agre_tab.insertCell(0);//Inserta una celda automaticamente cada vez que agreguemos algo
    celd.textContent = val_op;
    const celd1 = agre_tab.insertCell(1);
    celd1.textContent = val_pres;
    const celd2 = agre_tab.insertCell(2);
    celd2.textContent = cant;
    const espacio = document.createTextNode('        ');//Espacio para botones
    const suma = document.createElement("button");//Creamos un boton
    suma.textContent = "+"; //Le asignamos lo que queremos que se vea, el +
    const resta = document.createElement("button");//Creamos un boton
    resta.textContent = "-";//Le asignamos lo que queremos que se vea, el -
    celd2.appendChild(suma); //Lo agregamos a la tabla, indicandole en que celda
    celd2.appendChild(espacio);//Lo agregamos a la tabla, indicandole en que celda
    celd2.appendChild(resta);//Lo agregamos a la tabla, indicandole en que celda

    suma.addEventListener('click', function(e){//Hacemos que sume de 1 en 1 y aumenta la cantidad
        e.preventDefault();
        cant++;
        celd2.textContent = cant;
        celd2.appendChild(suma);
        celd2.appendChild(espacio);
        celd2.appendChild(resta);
    })
    resta.addEventListener('click', function(e){//Hacemos que reste de 1 en 1 y aumenta la cantidad
        e.preventDefault();
        cant--;
        celd2.textContent = cant;
        celd2.appendChild(suma);
        celd2.appendChild(espacio);
        celd2.appendChild(resta);
    })  
    const celd3 = agre_tab.insertCell(3);
    const deleteButton = document.createElement("button");
    deleteButton.textContent = "Eliminar";
    celd3.appendChild(deleteButton);
    deleteButton.addEventListener('click', (e)=>{//Funcion para eliminar las filas agregadas
        e.preventDefault();
        e.target.parentNode.parentNode.remove();//Elimina las filas que han sido agregadas
        alert("Eliminado");//Envia alerta
    });
    $('option:selected').removeAttr("selected"); //Vacia los campos de los selects cuando agrega
    $('input[type="number"]').val(''); //Vacia el campo del input 
    //Estilos de la tabla
    celd.style.border="1px solid #23ad9dc5";
    celd1.style.border="1px solid #23ad9dc5";
    celd2.style.border="1px solid #23ad9dc5";
    celd3.style.border="1px solid #23ad9dc5";
    
})