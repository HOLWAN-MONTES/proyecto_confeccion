const formu = document.getElementById('form');
const documento = document.getElementById('docu');
const nomb = document.getElementById('nom');
const apel = document.getElementById('apel');
const sel_use = document.getElementById('tip_usu');
const sel_docu = document.getElementById('tip_docu');
const edad = document.getElementById('edad');
const contra = document.getElementById('contra');
const celu = document.getElementById('tele');
const correo = document.getElementById('cor');
const docmen = document.getElementById('docume');
document.addEventListener('keypress', (e)=>{
    if(e.keyCode === 13){
        if(e.target === documento){
            e.preventDefault();
            console.log("hola no refresque");
            const option = {
                method: "POST",
                headers: {
                    'Content-type': 'application/json',
                },
                body: JSON.stringify({
                    docum: documento.value,
                })
            }
            fetch('../../php/editar_user.php', option)
             .then(res => res.ok ? res.json() : Promise.reject(res))
             .then(datos => {
                console.log(datos);
                const {err, status, statusText, data} = datos;
                if(data.lenght !== 0){
                    const {DOCUMENTO, ID_TIPO_DOCU, ID_TIPO_USU, NOMBRE, APELLIDO, PASSWORD, EDAD, TELEFONO, CORREO} = data;
                    docmen.value = DOCUMENTO;
                    documento.disabled = true;
                    nomb.value = NOMBRE;
                    nomb.disabled = true;
                    apel.value = APELLIDO;
                    apel.disabled = true;
                    sel_use.value = ID_TIPO_USU;
                    sel_use.disabled = true;
                    sel_docu.value = ID_TIPO_DOCU;
                    sel_docu.disabled = true;
                    edad.value = EDAD;
                    edad.disabled = true;
                    celu.value = TELEFONO;
                    correo.value = CORREO;
                    correo.disabled = true;
                }
                else{
                    alert('No se encontro usuario');
                }
             })
             .catch(error => console.error(error));
        }
    }
    
})
document.addEventListener('submit', (e)=>{
    if(e.target === formu){
        e.preventDefault();
        const option = {
            method: "PUT",
            headers: {
                'Content-type': 'application/json',
            },
            body: JSON.stringify({
                docum: docmen.value,
                tele: celu.value,
                cor: correo.value,
                contra: contra.value,
            })
        }
        fetch('../../php/editar_user.php', option)
         .then(res => res.ok ? res.json() : Promise.reject(res))
         .then(datos => {
            const {err, status, statusText} = datos;
            if(status >= 200 && status < 300){
                alert("Se ha actualizado correctamente");
                window.location.href="../administrador/editar_users.php";
            }
            else{
                alert("No se ha actualizado correctamente");
                window.location.href="../administrador/editar_users.php";
            }
            console.log(datos);
         })
         .catch(error => console.error(error));
         
    }
})